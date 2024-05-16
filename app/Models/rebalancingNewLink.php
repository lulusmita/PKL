<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rebalancingNewLink extends Model
{
    use HasFactory;

    protected $primaryKey = 'Rebalancing_ID';

    protected $fillable = [
        'Rebalancing_ID',
        'Site_ID',
        'Tgl_Rebalancing',
        'Ket',
        'Status',
    ];


    public $timestamps = true;

    public function newLinkFulfillment()
    {
        return $this->belongsTo(newLinkFulfillment::class, 'Rebalancing_ID', 'Uniq_No');
    }
}
