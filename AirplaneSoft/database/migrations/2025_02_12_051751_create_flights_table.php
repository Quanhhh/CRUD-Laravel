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
        Schema::create('flights', function (Blueprint $table) {
            $table->integerIncrements('Flight_ID');
            $table->string('Aircraft_ID');
            $table->string('Departure_Airport');
            $table->string('Arrival_Airport');
            $table->time('Departure_Time');
            $table->time('Arrival_Time');
            $table->time('Flight_Duration');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
