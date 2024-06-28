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
        Schema::create('menu_serve_table', function (Blueprint $table) {
          $table->id('menu_serve_id');
          $table->unsignedBigInteger('menu_id');
          $table->unsignedBigInteger('serve_id');
          $table->datetime('indate');
          $table->datetime('updated_at');
          $table->foreign('menu_id')->references('menu_id')->on('menu_table')->onDelete('cascade');
          $table->foreign('serve_id')->references('serve_id')->on('serve_method_table')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('serve_method_table');
    }
};
