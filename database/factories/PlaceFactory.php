<?php

namespace Database\Factories;

use App\Models\Place;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Place>
 */
class PlaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @throws Exception
     */
    public function definition(): array
    {
        return [
            "name" => fake()->name(),
            // "name_en",
            "alias" => 'alias',
            "address" => fake()->address(),
            // "address_en",
            // "coords",
            "lat" => fake()->latitude(),
            "len" => fake()->longitude(),
            "anons" => mb_substr('<p><span style="color: rgb(0, 0, 0);">' . fake()->text() . '</span></p>', 0, 500),
            // "anons_en",
            "about" => fake()->randomHtml(),
            // "about_en",
            "preview" => Str::random(20) . '.' . fake()->fileExtension(),
            "status" => fake()->randomElement([1, 2, -1]),
            "size" => random_int(1, 3),
            "zoom" => fake()->randomElement(["10", "11", "12", "13", "14", "15"]),
            "zoom_speed" => fake()->randomElement([".5", "4"]),
            // "region_id", TODO
            "type_id" => 2,
            // "date",
            "date_from" => random_int(800, 2020),
            "date_to" => random_int(800, 2020),
        ];
    }
}
