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
        Schema::create('new_link_fulfillments', function (Blueprint $table) {
            $table->id('Uniq_No');
            $table->string('Nd_Nim_No');
            $table->integer('ID_Tiara_Enom');
            $table->year('Order_Batch');
            $table->unsignedBigInteger('witel_id');
            $table->foreign('witel_id')->references('id')->on('witels');
            $table->string('Site_ID');
            $table->integer('Jumlah_NE');
            $table->string('SITE_NAME');
            $table->string('Main_Program');
            $table->string('Detail_Program');
            $table->integer('BW_Order');
            $table->date('Start_Target_Date')->default(now());
            $table->date('Target_Date')->default(now()->addDays(7));
            $table->enum('Status_Final', ['Open', 'Closed'])->default('Open');
            $table->string('KET');
            $table->string('Ba_No')->nullable();
            $table->date('Tgl_Ba')->nullable();
            $table->unsignedBigInteger('inserted_by');
            $table->foreign('inserted_by')->references('id')->on('users');
            $table->timestamps(); // Untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('new_link_fulfillments');
    }
};
