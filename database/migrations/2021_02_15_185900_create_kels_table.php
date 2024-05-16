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
        Schema::create('kels', function (Blueprint $table) {
            $table->string('kode_kel')->primary();
            $table->string('nama_kel');
            $table->string('kode_kec');
            $table->foreign('kode_kec')->references('kode_kec')->on('kecs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kels');
    }
};
