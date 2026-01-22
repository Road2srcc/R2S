<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Inertia\Inertia;

class MockController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:guest|student|employee']);
    }

    public function index()
    {
        $user = auth()->user();
        $selected = $user->selectedSyllabus();

        // 1. Fetch all active subjects (Categories)
        $subjects = \App\Models\Category::active()->orderBy('name')->get(['id', 'name', 'slug', 'code']);

        // 2. Fetch all active subscriptions for the user
        $subscriptions = $user->subscriptions()
            ->where('status', 'active')
            ->where('ends_at', '>', now())
            ->get(['category_id', 'category_type']);

        $subscribedCategoryIds = $subscriptions->whereIn('category_type', ['App\Models\Category', 'category'])->pluck('category_id')->toArray();
        $subscribedSubCategoryIds = $subscriptions->whereIn('category_type', ['App\Models\SubCategory', 'sub_category'])->pluck('category_id')->toArray();
        $subscribedQuizIds = $subscriptions->whereIn('category_type', ['App\Models\Quiz', 'quiz'])->pluck('category_id')->toArray();

        // 3. Map subjects to sections with their associated mocks
        $sections = $subjects->map(function ($subject) use ($subscribedCategoryIds, $subscribedSubCategoryIds, $subscribedQuizIds) {
            $isSubjectSubscribed = in_array($subject->id, $subscribedCategoryIds);

            // Fetch mocks assigned via subcategories belonging to this subject
            // ONLY if they don't have a direct category_id or if it matches the subject
            $subCategoryMocks = \App\Models\Quiz::whereHas('subCategory', function($q) use ($subject) {
                $q->where('category_id', $subject->id);
            })->where(function($q) use ($subject) {
                $q->whereNull('category_id')->orWhere('category_id', $subject->id);
            })->has('questions')->isPublic()->published()->get(['id', 'title', 'slug', 'is_paid', 'sub_category_id', 'category_id']);

            // Fetch mocks directly assigned to this subject
            $directMocks = \App\Models\Quiz::where('category_id', $subject->id)
                ->has('questions')->isPublic()->published()->get(['id', 'title', 'slug', 'is_paid', 'sub_category_id', 'category_id']);

            // Merge and ensure uniqueness within the subject
            $allMocks = $subCategoryMocks->concat($directMocks)->unique('id');

            $mappedMocks = $allMocks->map(function($quiz) use ($isSubjectSubscribed, $subscribedSubCategoryIds, $subscribedCategoryIds, $subscribedQuizIds) {
                // A quiz is unlocked if:
                // - It's free (is_paid is false)
                // - OR the user is subscribed specifically to the Quiz itself
                // - OR the user is subscribed to the parent Subject (Category)
                // - OR the user is subscribed specifically to the Quiz's current Category (if set)
                // - OR the user is subscribed specifically to the Quiz's Sub-Category (if set)
                $unlocked = !$quiz->is_paid 
                    || in_array($quiz->id, $subscribedQuizIds)
                    || $isSubjectSubscribed 
                    || ($quiz->category_id && in_array($quiz->category_id, $subscribedCategoryIds))
                    || ($quiz->sub_category_id && in_array($quiz->sub_category_id, $subscribedSubCategoryIds));

                return [
                    'id' => $quiz->id,
                    'title' => $quiz->title,
                    'slug' => $quiz->slug,
                    'is_paid' => (bool) $quiz->is_paid,
                    'unlocked' => (bool) $unlocked,
                ];
            })->sortBy('title')->values();

            if ($mappedMocks->isEmpty()) {
                return null;
            }

            return [
                'id' => $subject->id,
                'name' => $subject->name,
                'slug' => $subject->slug,
                'mocks' => $mappedMocks,
            ];
        })->filter()->values();

        return Inertia::render('User/Mock', [
            'subject' => $selected ? ['id' => $selected->id, 'name' => $selected->name, 'slug' => $selected->slug, 'code' => $selected->code] : null,
            'sections' => $sections,
        ]);
    }
}
