<?php

use App\Models\BuyerInfo;
use App\Models\SellerInfo;
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
        Schema::create('delivery_order_docs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(BuyerInfo::class);
            $table->foreignIdFor(SellerInfo::class);
            $table->string('DONumber', 6)->unique();
            $table->string('PONumber', 6)->unique();
            $table->date('DeliveryDate');
            $table->text('DocNotes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery_order_docs');
    }
};
