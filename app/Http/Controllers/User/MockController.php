<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\SubCategory;
use Inertia\Inertia;

class MockController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:guest|student|employee', 'verify.syllabus']);
    }

    public function index()
    {
        // Still require a selected syllabus (middleware), but show all available subjects/mocks like a shop.
        $selected = auth()->user()->selectedSyllabus();

        $subjects = SubCategory::active()
            ->whereHas('quizzes', function ($query) {
                $query->has('questions')->isPublic()->published();
            })
            ->with(['quizzes' => function ($query) {
                $query->has('questions')
                    ->isPublic()
                    ->published()
                    ->orderBy('is_paid', 'asc')
                    ->orderBy('title', 'asc')
                    ->get(['id', 'title', 'slug', 'is_paid', 'sub_category_id']);
            }])
            ->orderBy('name')
            ->get(['id', 'name', 'slug', 'code']);

        $sections = $subjects->map(function (SubCategory $subject) {
            return [
                'id' => $subject->id,
                'name' => $subject->name,
                'slug' => $subject->slug,
                'mocks' => $subject->quizzes->map(function ($quiz) {
                    return [
                        'id' => $quiz->id,
                        'title' => $quiz->title,
                        'slug' => $quiz->slug,
                        'is_paid' => (bool) $quiz->is_paid,
                    ];
                })->values(),
            ];
        })->values();

        return Inertia::render('User/Mock', [
            'category' => $selected instanceof SubCategory ? $selected->only(['id', 'name', 'slug', 'code']) : null,
            'sections' => $sections,
        ]);
    }
}
