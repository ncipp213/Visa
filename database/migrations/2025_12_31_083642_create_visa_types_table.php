<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('visa_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category'); // study, work, business, etc.
            $table->text('description')->nullable();
            $table->decimal('starting_price', 10, 2)->nullable();
            $table->integer('processing_days')->nullable();
            $table->string('success_rate')->nullable();
            $table->boolean('is_popular')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('visa_types');
    }
};