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
        Schema::create('kecs', function (Blueprint $table) {
            $table->string('kode_kec')->primary();
            $table->string('kode_kab');
            $table->string('nama_kec');
            $table->foreign('kode_kab')->references('kode_kab')->on('kabs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kecs');
    }
};
