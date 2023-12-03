<?php

namespace Database\Factories\Domain\Products\Models;

use App\Domain\Files\Models\File;
use App\Domain\Products\Models\Product;
use Illuminate\Support\Str;
use App\Domain\Iam\Models\Role;
use App\Domain\Iam\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'description' => fake()->words(12, true)
        ];
    }

    public function configure(): static
    {
        return $this->afterCreating(function (Product $product) {
            $file = File::create([
                'path' => $this->image()
            ]);

            $product->update([
                'file_id' => $file->id
            ]);
        });
    }

    protected function image(): string
    {
        $images = [
            'https://tailwindui.com/img/ecommerce-images/product-page-03-related-product-01.jpg'
        ];

        return $images[array_rand($images)];
    }
}
