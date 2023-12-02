<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use App\Domain\Categories\Models\Category;

class DeleteCategoryController extends Controller
{
    public function __invoke(Category $category)
    {
        // What happens with products with this category?
        $category->delete();

        return redirect()->back()->with('success', 'Successfully deleted category!');
    }
}
