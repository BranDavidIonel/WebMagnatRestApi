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
}
