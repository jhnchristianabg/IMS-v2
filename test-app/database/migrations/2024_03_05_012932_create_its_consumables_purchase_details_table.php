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
        Schema::create('its_consumables_purchase_details', function (Blueprint $table) {

            // This Columns represents the field where the data for ITS Consumable Purchase Details is being held

            $table->increments('id');
            $table->foreign('id')->references('id')->on('its_consumables');
            $table->integer('its_ConsumID');
            $table->integer('its_ConsumPriceprunit')->nullable();
            $table->string('its_ConsumSupplier', 255)->nullable();
            $table->string('its_ConsumDateOfPurch', 255)->nullable();
            $table->string('its_ConsumWarranty', 255)->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('its_consumables_purchase_details');
    }
};
