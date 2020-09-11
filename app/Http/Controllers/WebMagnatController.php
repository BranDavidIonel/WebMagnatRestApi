<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\WebMagnatModel;
class WebMagnatController extends Controller
{
    public function index(){
        //the 200 means 'ok' it is a cod result
        //the response is for api in json format
        return response()->json(WebMagnatModel::get(),200);
    }
    //get all data from table web_magnat_info ( not in group by service_status)
    public function statuses(){
        return response()->json(WebMagnatModel::get(),200);
    }
    
    public function groupedStatus(){

            //response()->json(DB::select('SELECT web_magnat_info.service_status, COUNT(web_magnat_info.service_status) as nrStatuses FROM web_magnat_info GROUP BY web_magnat_info.service_status'));
            $webMagnatModel= new WebMagnatModel();
            //a made a method in Model 'WebMagnatModel'
            $date=$webMagnatModel->readGroupedStatus();
            //print_r($date);
            return  response()->json($date,200);

    }

    //find a status by id ( I don't use now)
    public function statusByID($id){
        return response()->json(WebMagnatModel::find($id),200);

    }
    //save a status 
    public function statusSave(Request $request){

        $status=WebMagnatModel::create($request->all());
        
        return response()->json($status,201);
    }
}
