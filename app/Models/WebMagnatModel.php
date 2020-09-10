<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebMagnatModel extends Model
{
    protected $table="web_magnat_info";
    protected $fillable=[
        'id'/*,
        'ip',
        'browser',
        'device',
        'os'*/,
        'service_status'
    ];
}
