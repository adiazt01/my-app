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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('full_name');
            $table->string('phone');
        });
        
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->dateTime('appointment_at');
            $table->string('title')->nullable();
            $table->foreignId('patient_id')->references('id')->on('patients');
            $table->foreignId('doctor_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
