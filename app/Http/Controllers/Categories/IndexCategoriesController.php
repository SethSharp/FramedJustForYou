<?php

namespace App\Http\Controllers\Categories;

use App\Domain\Categories\Models\Category;
use App\Http\Controllers\Controller;
use Inertia\Inertia;

class IndexCategoriesController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('Categories/Index', [
            'categories' => Category::all()
        ]);
    }
}
