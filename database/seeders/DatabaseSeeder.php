<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\SellerInfo;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        //        User::factory()->create([
        //           'name' => 'Test User',
        //            'email' => 'test@example.com',
        //        ]);

        Item::factory(10)->create();
        SellerInfo::factory()->create([
            'Name' => "Control System",
            'Address1' => "Jalan Ampera Raya",
            'Address2' => "Gedung B",
            'PhoneNumber' => "(021)524463"
        ]);
    }
}
