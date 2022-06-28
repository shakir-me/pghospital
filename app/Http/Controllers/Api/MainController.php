<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Division;
use App\Models\Distric;
use App\Models\Medicine;
class MainController extends Controller
{
    public function Area()
    {
    	$area=Division::all();
    	return response()->json($area);
    }


        public function Hospital()
        {
        	$hospital=Distric::all();
        	return response()->json($hospital);
        }

        public function Medicine()
        {
        	$medicine=Medicine::all();
        	return response()->json($medicine);
        }
    
}
