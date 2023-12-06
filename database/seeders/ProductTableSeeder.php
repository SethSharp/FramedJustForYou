<?php

namespace Database\Seeders;

use App\Domain\Files\Models\File;
use App\Domain\Iam\Models\User;
use App\Domain\Products\Models\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    public function run(): void
    {
        $productCount = 4;
        // loop this over how many files there are and adjust the factory to pass to file factory
        $products = Product::factory()->count($productCount)->create();

        foreach ($products as $index => $product) {
            $product->update([
                'file_id' => File::factory()->create([
                    'path' => '/images/seeding/categories/' . $index + 1 . '.webp'
                ])->id
            ]);
        }
    }
}
