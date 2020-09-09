<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\WebMagnatModel;
class WebMagnatController extends Controller
{
    public function index(){
        return response()->json(WebMagnatModel::get(),200);
    }
    public function statuses(){
        return response()->json(WebMagnatModel::get(),200);
    }
    public function statusByID($id){
        return response()->json(WebMagnatModel::find($id),200);

    }
    public function statusSave(Request $request){

        $status=WebMagnatModel::create($request->all());
        return response()->json($status,201);
    }
}
