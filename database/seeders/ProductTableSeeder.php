<?php

namespace Database\Seeders;

use App\Domain\Iam\Models\User;
use App\Domain\Products\Models\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    public function run(): void
    {
        Product::factory()->create([
            'title' => 'Test Product #1',
            'description' => 'Testing product description',
            'price' => 123
        ]);
    }
}
