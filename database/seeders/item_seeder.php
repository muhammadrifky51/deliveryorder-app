<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\SellerInfo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class item_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Item::factory(10)->create();
        SellerInfo::factory()->create([
            'Name' => "Control System",
            'Address1' => "Jalan Ampera Raya",
            'Address2' => "Gedung B",
            'PhoneNumber' => "(021)524463"
        ]);
    }
}
