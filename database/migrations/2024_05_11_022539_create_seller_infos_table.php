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
        Schema::create('seller_infos', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->text('Address1');
            $table->text('Address2')->nullable();
            $table->string('PhoneNumber', 16)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seller_infos');
    }
};
