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
        Schema::create('devices', function (Blueprint $table) {

            // This Columns represents the field where the data of Devices is being held

            $table->increments('id');
            $table->integer('DeviceID');
            $table->string('DeviceName', 255);
            $table->string('DeviceBrand', 255);
            $table->string('DeviceModel', 255);
            $table->string('DeviceSerialNo', 255)->nullable();
            $table->string('DeviceMacAdd', 255)->nullable();
            $table->string('DeviceLocation', 255);
            $table->string('DeviceStatus', 255)->nullable();
            $table->string('DeviceRemarks', 255)->nullable();
            $table->integer('DeviceDisplay')->nullable();
            $table->integer('DeviceNoOfPorts')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devices');
    }
};
