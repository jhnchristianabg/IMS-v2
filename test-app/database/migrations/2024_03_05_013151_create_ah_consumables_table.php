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
        Schema::create('ah_consumables', function (Blueprint $table) {

            // This Columns represents the field where the data of Allied Health Consumables is being held!!

            $table->increments('id');
            $table->integer('ah_ConsumID');
            $table->string('ah_ConsumName', 255);
            $table->string('ah_ConsumCapacity', 255)->nullable();
            $table->integer('ah_ConsumStock')->nullable();
            $table->integer('ah_ConsumQuantity')->nullable();
            $table->integer('ah_ConsumBreakages')->nullable();
            $table->integer('ah_LabTechUse')->nullable();
            $table->integer('ah_Disposed')->nullable();
            $table->integer('ah_ConsumTotal')->nullable();
            $table->string('ah_ConsumRemarks', 255)->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ah_consumables');
    }
};
