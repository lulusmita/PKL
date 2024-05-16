<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kec extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_kec',
        'nama_kec',
        'kode_kab',
    ];

    public $timestamps = false;
}
