<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('success_cases', function (Blueprint $table) {
            $table->id();
            $table->string('country');
            $table->string('visa_type');
            $table->string('processing_time');
            $table->string('client_name')->nullable();
            $table->string('client_nationality');
            $table->string('image_path')->nullable(); // untuk passport stamp
            $table->string('flag_icon')->default('🇺🇸');
            $table->boolean('is_featured')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('success_cases');
    }
};