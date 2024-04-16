<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement(['TLOU', 'TLOU2', 'RDR', 'RDR2', 'SOTC']),
            'developer' => fake()->randomElement(['Naughty Dog', 'ASOBO', 'Rockstar', 'EA', 'Sucker Punch']),
            'genre' => fake()->randomElement(['Action', 'Adventure', 'Horror', 'Arcade', 'RPG']),
            'release_date' => fake()->Date(),
        ];
    }
}
