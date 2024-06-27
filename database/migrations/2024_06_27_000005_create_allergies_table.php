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
        Schema::create('allergies_table', function (Blueprint $table) {
            $table->id('allergies_id');
            $table->string('allergies_name', 255);
            $table->datetime('indate');
            $table->datetime('update');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allergies_table');
    }
};
