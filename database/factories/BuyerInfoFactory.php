<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BuyerInfo>
 */
class BuyerInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Name'=>fake()->company(),
            'Address1' =>fake()->address(),
            'PhoneNumber' =>fake()->tollFreePhoneNumber()
        ];
    }
}
