<?php

namespace Database\Factories;

use App\Models\BuyerInfo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DeliveryOrderDoc>
 */
class DeliveryOrderDocFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'buyer_info_id' => BuyerInfo::factory(),
            'DONumber' =>fake()->numerify('######'),
            'PONumber' =>fake()->numerify('######'),
            'DeliveryDate' =>fake()->date(),
            'DocNotes' =>fake()->paragraph(1)
        ];
    }
}
