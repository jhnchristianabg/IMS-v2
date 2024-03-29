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
        Schema::create('device_specs', function (Blueprint $table) {

            // This Columns represents the field where the data of Device Specification is being held

            $table->increments('id');
            $table->foreign('id')->references('id')->on('devices');
            $table->integer('DeviceID');
            $table->string('DeviceOperatingSys', 255)->nullable();
            $table->string('DeviceProductKey', 255)->nullable();
            $table->string('DeviceProcessor', 255)->nullable();
            $table->integer('DeviceMemory')->nullable();
            $table->integer('DeviceStorage1')->nullable();
            $table->integer('DeviceStorage2')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('device_specs');
    }
};
