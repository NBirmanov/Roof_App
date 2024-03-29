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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('buy')->nullable();
            $table->string('type')->nullable();
            $table->string('typeBuildings')->nullable();
            $table->integer('storey')->nullable();
            $table->integer('storey_home')->nullable();
            $table->integer('square')->nullable();
            $table->integer('kitchen_area')->nullable();
            $table->integer('rooms')->nullable();
            $table->integer('year')->nullable();
            $table->integer('price')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('number')->nullable();
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
