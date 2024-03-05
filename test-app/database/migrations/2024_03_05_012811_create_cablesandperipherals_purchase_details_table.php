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
        Schema::create('cablesandperipherals_purchase_details', function (Blueprint $table) {

            // This Columns represents the field where the data for Cables and Peripherals Purchase Details is being held

            $table->increments('id');
            $table->foreign('id')->references('id')->on('cablesandperipherals');
            $table->integer('CPID');
            $table->integer('CPPriceprunit')->nullable();
            $table->string('CPSupplier', 255)->nullable();
            $table->string('CPDateOfPurch', 255)->nullable();
            $table->string('CPWarranty', 255)->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cablesandperipherals_purchase_details');
    }
};
