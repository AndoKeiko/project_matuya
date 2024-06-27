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
        Schema::create('order_detail_table', function (Blueprint $table) {
          $table->id('order_detail_id');
          $table->unsignedBigInteger('order_id');
          $table->unsignedBigInteger('menu_id');
          $table->unsignedBigInteger('option_id');
          $table->datetime('indate');
          $table->datetime('update');
          $table->foreign('order_id')->references('order_id')->on('order_table');
          $table->foreign('menu_id')->references('menu_id')->on('menu_table');
          $table->foreign('option_id')->references('option_id')->on('option_table');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_detail_table');
    }
};
