<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('delivery_order_doc_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(App\Models\DeliveryOrderDoc::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Item::class)->constrained()->cascadeOnDelete();
            $table->integer('ItemQty');
            $table->string('Image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery_order_doc_details');
        Schema::dropIfExists('delivery_order_doc_detail_items');
    }
};
