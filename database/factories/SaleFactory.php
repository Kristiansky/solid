<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'description' => fake()->sentence(3),
            'charge' => fake()->randomFloat(2, 9, 259),
            'created_at' => fake()->dateTimeBetween('-1 year', '-1 month'),
            'updated_at' => fake()->dateTimeBetween('-1 week', 'now'),
        ];
    }
}
