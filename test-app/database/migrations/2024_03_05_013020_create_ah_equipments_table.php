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
        Schema::create('ah_equipments', function (Blueprint $table) {

            // This Columns represents the field where the data of Allied Health Equipments is being held

            $table->increments('id');
            $table->integer('EqpID');
            $table->string('EqpSerialNo', 255)->nullable();
            $table->string('EqpName', 255);
            $table->string('EqpBrand', 255);
            $table->string('EqpStatus', 255)->nullable();
            $table->string('EqpLocation', 255);
            $table->string('EqpRemarks', 255)->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ah_equipments');
    }
};
