<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DriverResource;
use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index(){
      $drivers =   Driver::paginate(10);
      return response()->json( 
        data:[
            'status'=> 'success' ,
     'data' =>   DriverResource::collection($drivers)
      ] , status:200 
      
      );
    }
}
