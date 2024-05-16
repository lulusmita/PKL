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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('foto')->default('tamu.png');
            $table->string('nik')->unique();
            $table->string('no_hp');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('witel_id')->nullable();
            $table->foreign('witel_id')->references('id')->on('witels');
            $table->string('alamat')->nullable();
            $table->string('kode_prov')->nullable();
            $table->foreign('kode_prov')->references('kode_prov')->on('provs');
            $table->string('kode_kab')->nullable();
            $table->foreign('kode_kab')->references('kode_kab')->on('kabs');
            $table->string('kode_kec')->nullable();
            $table->foreign('kode_kec')->references('kode_kec')->on('kecs');
            $table->string('kode_kel')->nullable();
            $table->foreign('kode_kel')->references('kode_kel')->on('kels');
            $table->enum('role', ['Admin', 'MSO', 'Witel'])->default('witel');
            $table->enum('unit_kerja', ['Assurance', 'Fulfillment', 'Quality'])->default('Assurance');
            $table->enum('status', ['Aktif', 'Cuti'])->default('Aktif');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
