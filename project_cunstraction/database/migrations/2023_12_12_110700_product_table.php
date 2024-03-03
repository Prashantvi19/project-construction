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
        Schema::create('product_table', function (Blueprint $table) {
            $table->id();
            $table->string('client_name')->nullable();
            $table->string('number')->nullable();
            $table->string('email')->unique()->nullable();;
            $table->string('location')->nullable();
            $table->string('area')->nullable();
            $table->string('date')->nullable();
            $table->string('project_image')->nullable();
            $table->string('project_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_table');
    }
};
