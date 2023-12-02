<?php

namespace Database\Factories\Domain\Categories\Models;

use App\Domain\Categories\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'description' => fake()->words(6, true),
        ];
    }
}
