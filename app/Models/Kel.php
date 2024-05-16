<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kel extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_kel',
        'nama_kel',
        'kode_kec',
    ];

    public $timestamps = false;
}
