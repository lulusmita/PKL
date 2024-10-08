<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prov extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_prov',
        'nama_prov',
    ];

    public $timestamps = false;
}
