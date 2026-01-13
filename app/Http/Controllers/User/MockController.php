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
        // Group mocks by parent category (subject)
        $selected = auth()->user()->selectedSyllabus();

        $subjects = Category::active()
            ->whereHas('subCategories.quizzes', function ($query) {
                $query->has('questions')->isPublic()->published();
            })
            ->with(['subCategories' => function ($query) {
                $query->whereHas('quizzes', function ($q) {
                    $q->has('questions')->isPublic()->published();
                })
                ->with(['quizzes' => function ($q) {
                    $q->has('questions')
                        ->isPublic()
                        ->published()
                        ->orderBy('is_paid', 'asc')
                        ->orderBy('title', 'asc')
                        ->select(['id', 'title', 'slug', 'is_paid', 'sub_category_id']);
                }]);
            }])
            ->orderBy('name')
            ->get(['id', 'name', 'slug', 'code']);

        $sections = $subjects->map(function (Category $subject) {
            $allMocks = $subject->subCategories->flatMap(function ($subCategory) {
                return $subCategory->quizzes;
            });

            return [
                'id' => $subject->id,
                'name' => $subject->name,
                'slug' => $subject->slug,
                'mocks' => $allMocks->map(function ($quiz) {
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
            'subject' => $selected ? ['id' => $selected->id, 'name' => $selected->name, 'slug' => $selected->slug, 'code' => $selected->code] : null,
            'sections' => $sections,
        ]);
    }
}
