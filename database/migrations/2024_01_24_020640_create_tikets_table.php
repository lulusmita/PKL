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
        Schema::create('tikets', function (Blueprint $table) {
            $table->string('tiket_id')->primary();
            $table->string('headline');
            $table->unsignedBigInteger('witel_id');
            $table->foreign('witel_id')->references('id')->on('witels');
            $table->datetime('tgl_open');
            $table->double('mttr', 8, 2);
            $table->string('jml_site');
            $table->string('root_cause');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tikets');
    }
};
