<?php

namespace App\Transformers\Admin;

use App\Models\Category;
use League\Fractal\TransformerAbstract;

class CategorySearchTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @param Category $category
     * @return array
     */
    public function transform(Category $category)
    {
        return [
            'id' => $category->id,
            'name' => $category->name
        ];
    }
}
