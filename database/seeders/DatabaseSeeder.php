<?php

namespace Database\Seeders;

use App\Models\BuyerInfo;
use App\Models\DeliveryOrderDoc;
use App\Models\DeliveryOrderDocDetail;
use App\Models\Item;
use App\Models\SellerInfo;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

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
        BuyerInfo::factory(10)->create();
        DeliveryOrderDoc::factory()->create();
        DeliveryOrderDoc::factory()->create();
        DeliveryOrderDoc::factory()->create();
        DeliveryOrderDoc::factory()->create();
        DeliveryOrderDocDetail::factory(15)->create();
        //Old Seeder :)
        //BuyerInfo::factory()->create([
        //    'Name' => "Buyer Company",
        //    'Address1' => 'Somewhere in the world',
        //    'PhoneNumber' => ''
        //]);
        //DeliveryOrderDoc::factory()->create([
        //    'buyer_info_id' => 1,
        //    'seller_info_id' => 1,
        //    'DONumber' => "000001",
        //    'PONumber' => "000001",
        //    'DeliveryDate' => Date('2015-03-29'),
        //    'DocNotes' => "Delivery Success, delivered ontime"
        //]);
        //DeliveryOrderDocDetail::factory()->create([
        //    'delivery_order_doc_id' => 1,
        //    'item_id' => 1,
        //    'ItemQty' => fake()->numberBetween(1, 25)
        //]);
    }
}
