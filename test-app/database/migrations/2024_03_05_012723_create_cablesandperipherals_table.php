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
        Schema::create('cablesandperipherals', function (Blueprint $table) {

            // This Columns represents the field where the data for Cables and Peripherals is being held

            $table->increments('id');
            $table->integer('CPID')->unsigned();
            $table->foreign('CPID')->references('id')->on('devices');
            $table->string('CPName', 255);
            $table->string('CPBrand', 255);
            $table->string('CPModel', 255);
            $table->string('CPSerialNo', 255)->nullable();
            $table->string('CPLocation', 255);
            $table->string('CPStatus', 255)->nullable();
            $table->string('CPRemarks', 255)->nullable();
            $table->integer('CPSize')->nullable();
            $table->string('CPLength', 255)->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cablesandperipherals');
    }
};
