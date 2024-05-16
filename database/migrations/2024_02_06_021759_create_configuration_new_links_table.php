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
        Schema::create('configuration_new_links', function (Blueprint $table) {
            $table->id('Configuration_ID');
            $table->foreign('Configuration_ID')->references('Uniq_No')->on('new_link_fulfillments');
            $table->string('witel')->nullable();
            $table->string('base_id')->nullable();
            $table->string('site_id')->nullable();
            $table->string('site_name')->nullable();
            $table->string('mac_address')->nullable();
            $table->string('vlan')->nullable();
            $table->string('alamat')->nullable();
            $table->string('sto')->nullable();
            $table->string('metro_hostname')->nullable();
            $table->string('metro_ip')->nullable();
            $table->string('metro_port')->nullable();
            $table->string('olt_merk')->nullable();
            $table->string('olt_hostname')->nullable();
            $table->string('olt_ip')->nullable();
            $table->string('olt_port_uplink')->nullable();
            $table->string('olt_port_splitter')->nullable();
            $table->string('ont_type')->nullable();
            $table->string('ont_serial_number')->nullable();
            $table->string('ont_ip')->nullable();
            $table->string('port_ont')->nullable();
            $table->string('odp_name')->nullable();
            $table->string('odp_longitude')->nullable();
            $table->string('odp_latitude')->nullable();
            $table->integer('odp_cap')->nullable();
            $table->string('odp_port')->nullable();
            $table->string('odp_address')->nullable();
            $table->string('odp_desc')->nullable();
            $table->string('rnc')->nullable();
            $table->string('ket')->nullable()->default('-');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('configuration_new_links');
    }
};
