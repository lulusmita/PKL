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
        Schema::create('rebalancing_new_links', function (Blueprint $table) {
            $table->id('Rebalancing_ID');
            $table->foreign('Rebalancing_ID')->references('Uniq_No')->on('new_link_fulfillments');
            $table->string('Site_ID');
            $table->date('Tgl_Rebalancing')->nullable();
            $table->string('Ket')->default('-');
            $table->enum('Status', ['Pending', 'On Air'])->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rebalancing_new_links');
    }
};
