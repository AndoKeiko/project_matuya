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
        Schema::create('tax_table', function (Blueprint $table) {
          $table->id('tax_id');
          $table->string('tax_rate_name', 255);
          $table->unsignedInteger('tax_rate');
          $table->datetime('indate');
          $table->datetime('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tax_table');
    }
};
