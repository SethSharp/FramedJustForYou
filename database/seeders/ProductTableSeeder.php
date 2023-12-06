<?php

namespace Database\Seeders;

use App\Domain\Iam\Models\User;
use App\Domain\Products\Models\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    public function run(): void
    {
        // loop this over how many files there are and adjust the factory to pass to file factory
        Product::factory()->create([
            'title' => 'Test Product #1',
            'description' => 'Testing product description',
            'price' => 123
        ]);
    }
}
