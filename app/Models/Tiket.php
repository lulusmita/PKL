<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    protected $fillable = [
        'tiket_id',
        'headline',
        'witel_id',
        'tgl_open',
        'mttr',
        'jml_site',
        'root_cause',
    ];

    public function report()
    {
        return $this->belongsTo(Witel::class, 'witel_id', 'id');
    }
    
}
