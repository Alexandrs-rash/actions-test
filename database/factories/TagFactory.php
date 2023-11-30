<?php

namespace Database\Factories;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

class TagFactory extends Factory
{
    protected $model = Tag::class;

    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'alias' => fake()->word(),
            'status' => fake()->randomElement([1, -1, -2]),
            'category' => fake()->randomElement([1, 2, 3, 4, 7]),
        ];
    }
}
