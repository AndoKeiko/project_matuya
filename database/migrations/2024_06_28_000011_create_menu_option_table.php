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
        Schema::create('menu_option_table', function (Blueprint $table) {
          $table->id('menu_option_id');
          $table->unsignedBigInteger('menu_id');
          $table->unsignedBigInteger('option_id');
          $table->datetime('indate');
          $table->datetime('updated_at');
          $table->foreign('menu_id')->references('menu_id')->on('menu_table');
          $table->foreign('option_id')->references('option_id')->on('option_table');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
