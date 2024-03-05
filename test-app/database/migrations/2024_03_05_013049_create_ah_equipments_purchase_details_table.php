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
        Schema::create('ah_equipments_purchase_details', function (Blueprint $table) {

            // This Columns represents the field where the data of Allied Health Equipment Purchase Details is being held

            $table->increments('id');
            $table->integer('EqpID');
            $table->string('EqpDateOfPurch', 255)->nullable();
            $table->integer('EqpPrice')->nullable();
            $table->string('EqpSupplier', 255)->nullable();
            $table->string('EqpWarranty', 255)->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ah_equipments_purchase_details');
    }
};
