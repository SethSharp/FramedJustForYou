<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Domain\Products\Models\Product;

class ShowDashboardController extends Controller
{
    public function __invoke()
    {
        $product = Product::first()->with('files')->first();

        return Inertia::render('Management/Dashboard', [
            'product' => $product
        ]);
    }
}
