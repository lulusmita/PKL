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
        Schema::create('daily_report_ava_tsels', function (Blueprint $table) {
            $table->id();
            $table->date('report_date');
            $table->unsignedBigInteger('witel_id');
            $table->foreign('witel_id')->references('id')->on('witels');
            $table->integer('site_down');
            $table->integer('distinct_site');
            $table->integer('delta_down');
            $table->integer('delta_distinct');
            $table->integer('jml_tiket');
            $table->decimal('mttr');
            $table->integer('site_bill');
            $table->decimal('availability', 5, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daily_report_ava_tsels');
    }
};
