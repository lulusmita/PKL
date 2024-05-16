<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class newLinkFulfillment extends Model
{
    protected $primaryKey = 'Uniq_No';

    protected $fillable = [
        'Uniq_No',
        'Nd_Nim_No',
        'ID_Tiara_Enom',
        'Order_Batch',
        'witel_id', // Kolom ini diasumsikan sebagai foreign key ke tabel 'witels'
        'Site_ID',
        'Jumlah_NE',
        'SITE_NAME',
        'Main_Program',
        'Detail_Program',
        'BW_Order',
        'Start_Target_Date'  => 'datetime:d/m/Y',
        'Target_Date'  => 'datetime:d/m/Y',
        'Status_Final',
        'KET',
        'inserted_by',
        'Ba_No',
        'Tgl_Ba',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'inserted_by', 'id');
    }

    public function witel()
    {
        return $this->belongsTo(Witel::class, 'witel_id', 'id');
    }

    public function configurationNewLink()
    {
        return $this->hasOne(ConfigurationNewLink::class, 'Configuration_ID', 'Uniq_No');
    }
}
