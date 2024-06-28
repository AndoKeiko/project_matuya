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
        Schema::create('menu_allergies_table', function (Blueprint $table) {
          $table->id('menu_allergies_id');
          $table->unsignedBigInteger('menu_id');
          $table->unsignedBigInteger('allergies_id');
          $table->datetime('indate');
          $table->datetime('updated_at');
          $table->foreign('menu_id')->references('menu_id')->on('menu_table')->onDelete('cascade');
          $table->foreign('allergies_id')->references('allergies_id')->on('allergies_table')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_allergies_table');
    }
};
