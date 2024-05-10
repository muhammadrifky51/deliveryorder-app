<?php

namespace Database\Factories;

use App\Models\DeliveryOrderDoc;
use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DeliveryOrderDocDetail>
 */
class DeliveryOrderDocDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Delivery_Order_Doc_id'=>DeliveryOrderDoc::factory(),
            'Item_id'=>Item::factory(),
            'ItemQty'=>fake()->randomNumber(2)
        ];
    }
}
