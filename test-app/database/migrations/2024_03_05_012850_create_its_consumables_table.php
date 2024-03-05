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
        Schema::create('its_consumables', function (Blueprint $table) {

            // This Columns represents the field where the data for ITS Consumables is being held

            $table->increments('id');
            $table->integer('its_ConsumID');
            $table->string('its_ConsumName', 255);
            $table->string('its_ConsumBrand', 255);
            $table->string('its_ConsumModel', 255);
            $table->string('its_ConsumLocation', 255);
            $table->string('its_ConsumStatus', 255)->nullable();
            $table->string('its_ConsumRemarks', 255)->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('its_consumables');
    }
};
