<?php

namespace Database\Factories;

use App\Models\Region;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class RegionFactory extends Factory
{
    protected $model = Region::class;

    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            "anons" => mb_substr('<p><span style="color: rgb(0, 0, 0);">' . fake()->text() . '</span></p>', 0, 500),
            'alias' => fake()->word(),
            'status' => fake()->randomElement([1, -2]),
            'map' => fake()->numberBetween(10000, 100000)
                . '-' . fake()->numberBetween(10000, 100000) . '.geojson',
            'preview' => Str::random(20) . '.' . fake()->fileExtension(),
            'lat' => fake()->latitude(),
            'lon' => fake()->longitude(),
            'center' => fake()->latitude() . ',' . fake()->longitude(),
            'zoom' => fake()->randomElement(["5", "6", "7", "8", "9", "10"]),
            'center_m' => fake()->latitude() . ',' . fake()->longitude(),
            'zoom_m' => fake()->randomElement(["5", "6", "7", "8", "9", "10"]),
            'zoom_speed' => fake()->randomElement([".5", "2"]),
            'onmap' => fake()->randomElement([1, 0]),
        ];
    }
}
