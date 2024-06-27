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
        Schema::create('order_table', function (Blueprint $table) {
          $table->id('order_id');
          $table->unsignedInteger('subtotal_price');
          $table->unsignedBigInteger('tax_id');
          $table->unsignedInteger('total_price');
          $table->unsignedBigInteger('payment_id');
          $table->datetime('indate');
          $table->datetime('updated_at');
          $table->foreign('tax_id')->references('tax_id')->on('tax_table');
          $table->foreign('payment_id')->references('payment_id')->on('payment_table');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_table');
    }
};
