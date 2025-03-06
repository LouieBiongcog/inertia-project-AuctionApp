<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'make' => fake()->company(),
            'model' => fake()->word(),
            'year' => fake()->numberBetween(1990, 2025),
            'miles' => fake()->numberBetween(1000, 200000),
        ];
    }
}
