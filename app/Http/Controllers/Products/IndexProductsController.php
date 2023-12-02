<?php

namespace App\Http\Controllers\Products;

use Inertia\Inertia;
use App\Http\Controllers\Controller;
use App\Domain\Categories\Models\Category;

class IndexProductsController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('Products/Index');
    }
}
