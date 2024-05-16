<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daily_report_ava_tsel extends Model
{
    protected $fillable = [
        'report_date',
        'witel_id',
        'site_down',
        'distinct_site',
        'delta_down',
        'delta_distinct',
        'jml_tiket',
        'mttr',
        'site_bill',
        'availability',
    ];
}
