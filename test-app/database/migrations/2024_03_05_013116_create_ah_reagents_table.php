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
        Schema::create('ah_reagents', function (Blueprint $table) {

            // This Columns represents the field where the data of Allied Health Reagents is being held

            $table->increments('id');
            $table->integer('ReagentsID');
            $table->string('ReagentsName', 255);
            $table->string('ReagentsCapacity', 255)->nullable();
            $table->string('ReagentsUsed', 255)->nullable();
            $table->string('ReagentsRemaining', 255)->nullable();
            $table->string('ReagentsDateOut', 255)->nullable();
            $table->string('ReagentsRunOut', 255)->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ah_reagents');
    }
};
