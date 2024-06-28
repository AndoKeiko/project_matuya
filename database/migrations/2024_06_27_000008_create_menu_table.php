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
        Schema::create('menu_table', function (Blueprint $table) {
          $table->id('menu_id');
          $table->string('menu_name', 255);
          $table->unsignedBigInteger('category_id');
          $table->unsignedInteger('serve_flg');
          $table->unsignedBigInteger('allergies_id');
          $table->string('menu_image', 255)->nullable();
          $table->unsignedBigInteger('side_flug');
          $table->DECIMAL('menu_price');
          $table->datetime('indate');
          $table->datetime('updated_at');
          $table->foreign('category_id')->references('category_id')->on('categories_table');
          $table->foreign('allergies_id')->references('allergies_id')->on('allergies_table');
          });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_table');
    }
};