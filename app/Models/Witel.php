<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Witel extends Model
{
    protected $fillable = [
        'id',
        'witel',
        'luas_coverage',
        'pct_coverage',
        'bts_fo',
    ];

    // Pastikan timestamp diatur ke true
    public $timestamps = true;
}
