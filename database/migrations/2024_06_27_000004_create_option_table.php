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
        Schema::create('option_table', function (Blueprint $table) {
          $table->id('option_id');
          $table->string('option_name', 255);
          $table->DECIMAL('option_price');
          $table->datetime('indate');
          $table->datetime('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('option_table');
    }
};
