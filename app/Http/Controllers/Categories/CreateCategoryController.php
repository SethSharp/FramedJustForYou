<?php

namespace App\Http\Controllers\Categories;

use Inertia\Inertia;
use App\Http\Controllers\Controller;

class CreateCategoryController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('Categories/CreateEdit');
    }
}
