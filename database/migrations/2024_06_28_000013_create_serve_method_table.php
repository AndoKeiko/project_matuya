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
        Schema::create('serve_method_table', function (Blueprint $table) {
          $table->id('serve_id');
          $table->string('serve_name', 255);
          $table->datetime('indate');
          $table->datetime('updated_at');
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
