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
        Schema::create('witels', function (Blueprint $table) {
            $table->id();
            $table->string('witel');
            $table->decimal('luas_coverage', 10, 2);
            $table->decimal('pct_coverage', 5, 2);
            $table->unsignedBigInteger('bts_fo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('witels');
    }
};
