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
            'title' => fake() -> title(null),
            'original_title' => fake() -> title(null),
            'code' => fake() -> regexify('[A-Z0-9]{5}'),
            'plot' => fake()->boolean() ? fake()->text() : null,
            'vote' => fake()->boolean() ? fake()->randomFloat(1, 0, 5) : null,
            'release_date' => fake() -> dateTimeBetween("-100 years", 'now', null),
        ];
    }
}
