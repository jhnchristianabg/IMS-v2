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
        Schema::create('device_purchase_details', function (Blueprint $table) {

            // This Columns represents the field where the data of Device Purchase Details is being held

            $table->increments('id');
            $table->foreign('id')->references('id')->on('devices');
            $table->integer('DeviceID');
            $table->integer('DevicePriceprunit')->nullable();
            $table->string('DeviceSupplier', 255)->nullable();
            $table->string('DeviceDateOfPurch', 255)->nullable();
            $table->string('DeviceWarranty', 255)->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('device_purchase_details');
    }
};
