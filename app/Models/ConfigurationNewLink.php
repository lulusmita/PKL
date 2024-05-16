<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigurationNewLink extends Model
{
    use HasFactory;

    protected $primaryKey = 'Configuration_ID';

    protected $fillable = [
        'Configuration_ID',
        'site_id',
        'witel',
        'base_id',
        'site_name',
        'mac_address',
        'vlan',
        'alamat',
        'sto',
        'metro_hostname',
        'metro_ip',
        'metro_port',
        'olt_merk',
        'olt_hostname',
        'olt_ip',
        'olt_port_uplink',
        'olt_port_splitter',
        'ont_type',
        'ont_serial_number',
        'ont_ip',
        'port_ont',
        'odp_name',
        'odp_longitude',
        'odp_latitude',
        'odp_cap',
        'odp_port',
        'odp_address',
        'odp_desc',
        'rnc',
        'ket',
        'user_id',
    ];

    // Fungsi untuk memeriksa apakah semua data sudah terisi
    public function isAllDataFilled()
    {
        // Mengambil semua kolom yang terdapat dalam $fillable
        $fillableColumns = $this->fillable;

        // Memeriksa apakah semua kolom sudah terisi
        foreach ($fillableColumns as $column) {
            if (empty($this->{$column})) {
                return false;
            }
        }

        return true;
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function newLinkFulfillment()
    {
        return $this->belongsTo(newLinkFulfillment::class, 'Configuration_ID', 'Uniq_No');
    }
}
