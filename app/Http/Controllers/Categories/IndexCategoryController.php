<?php

namespace App\Http\Controllers\Categories;

use Inertia\Inertia;
use App\Http\Controllers\Controller;
use App\Domain\Categories\Models\Category;

class IndexCategoryController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('Categories/Index', [
            'categories' => Category::all()
        ]);
    }
}
