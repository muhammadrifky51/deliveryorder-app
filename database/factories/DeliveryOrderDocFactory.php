<?php

namespace Database\Factories;

use App\Models\BuyerInfo;
use App\Models\DeliveryOrderDoc;
use App\Models\SellerInfo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        try {
            $dodocs = DeliveryOrderDoc::all()->last()->id + 1;
        } catch (\Exception) {
            $dodocs = 1;
        }
        $digit = 6 - Str::length("{$dodocs}");
        $zeros = Str::repeat("0", $digit);
        $donum = "{$zeros}{$dodocs}";

        return [
            'buyer_info_id' => fake()->randomElement(BuyerInfo::all('id'))->id,
            'seller_info_id' => fake()->randomElement(SellerInfo::all('id'))->id,
            'DONumber' =>  $donum, //DeliveryOrderDoc::all('id')->id + 1, //fake()->numerify('######'),
            'PONumber' => fake()->numerify('######'),
            'DeliveryDate' => fake()->date(),
            'DocNotes' => fake()->paragraph(1)
        ];
    }
}
