<?php

namespace Database\Factories\Domain\Iam\Models;

use App\Domain\Iam\Models\Role;
use App\Domain\Iam\Models\User;
use App\Domain\Specialisation\Models\Specialisation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }

    public function admin(): self
    {
        return $this->afterCreating(function (User $user) {
            $user->roles()->attach(Role::where('name', User::ROLE_ADMIN)->first());
        });
    }

    public function manager(): self
    {
        return $this->afterCreating(function (User $user) {
            $user->roles()->attach(Role::where('name', User::ROLE_MANAGER)->first());
        });
    }
}