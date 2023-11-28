<?php

namespace App\Http\Controllers\Categories;

use Inertia\Inertia;
use App\Http\Controllers\Controller;
use App\Domain\Categories\Models\Category;

class EditCategoryController extends Controller
{
    public function __invoke(Category $category)
    {
        return Inertia::render('Categories/CreateEdit', [
            'category' => $category->load('file')
        ]);
    }
}
