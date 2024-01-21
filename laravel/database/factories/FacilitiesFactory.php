<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Facilities>
 */
class FacilitiesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'floor' => fake()->numberBetween(1, 10),
            'name' => fake()->colorName(),
            'room_number' => fake()->numberBetween(1, 10),
        ];
    }
}
