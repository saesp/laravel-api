<?php

namespace Database\Factories;

use Faker\Core\Number;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake() -> words(rand(1, 6), true),
            'original_title' => fake() -> words(rand(4, 6), true),
            'plot' => fake()->boolean() ? fake()->text() : null,
            'vote' => fake()->boolean() ? fake()->randomFloat(1, 0, 5) : null,
            'release_date' => fake() -> dateTimeBetween("-100 years", 'now', null),
        ];
    }
}
