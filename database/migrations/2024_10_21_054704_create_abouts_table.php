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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('profession'); 
            $table->date('birthday'); 
            $table->integer('age'); 
            $table->string('website')->nullable(); 
            $table->string('degree'); 
            $table->string('phone'); 
            $table->string('email')->unique(); 
            $table->string('city'); 
            $table->enum('freelance', ['available', 'not available']); // Freelance status
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
