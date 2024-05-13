<?php

namespace Database\Factories;

use DOMElement;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ItemDesc' => fake()->words(random_int(1, 3), true),
            'UnitPrices' => fake()->randomfloat(1, 1, 100) * 1000
        ];
    }
}
