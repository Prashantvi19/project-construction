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
        Schema::create('services_table', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('number')->nullable();
            $table->string('date')->nullable();;
            $table->string('service_image')->nullable();
            $table->text('sort_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::dropIfExists('services_table');
    }
};
