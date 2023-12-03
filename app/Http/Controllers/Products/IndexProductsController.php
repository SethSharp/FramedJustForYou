<?php

namespace App\Http\Controllers\Products;

use App\Domain\Products\Models\Product;
use Inertia\Inertia;
use App\Http\Controllers\Controller;

class IndexProductsController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('Products/Index', [
            'products' => Product::with('mainFile')->get()
        ]);
    }
}
