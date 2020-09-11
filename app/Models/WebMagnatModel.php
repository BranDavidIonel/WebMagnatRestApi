<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
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
    public function readGroupedStatus(){
        //return DB::connection('main')->select('SELECT web_magnat_info.service_status, COUNT(web_magnat_info.service_status) as nrStatuses FROM web_magnat_info GROUP BY web_magnat_info.service_status');
        return DB::select('SELECT 
        web_magnat_info.service_status,
        t1.nrSum,
        ((COUNT(web_magnat_info.service_status)*100)/t1.nrSum) as percentage,
        COUNT(web_magnat_info.service_status) as nrStatuses 
         FROM web_magnat_info 
         INNER JOIN (SELECT COUNT(*) as nrSum FROM  web_magnat_info) as t1 
         ON 1=1
         GROUP BY web_magnat_info.service_status,t1.nrSum');
    }
}
