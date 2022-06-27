<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Medicine;
use DB;
class MainController extends Controller
{
    public function main(){
    	$data['department']=Department::all();
    	$data['medicine']=Medicine::all();
    	return view('pages.index',$data);
    }

     public function GetSubcat($division_id)
        {
        	//echo "string";
        	 $cat=DB::table('districs')->where("division_id",$division_id)->get();
        	 return json_decode($cat);
        }


        public function GetHos($distric_id)
           {
           	//echo "string";
           	 $cat=DB::table('hostipals')->where("distric_id",$distric_id)->get();
           	 return json_decode($cat);
           }

           public function GetMedicine($medicineid)
           {
           	$supp=DB::table('medicines')->where('id',$medicineid)->select('id','generic_name','company')->first();
           	  	return json_encode($supp);
           }

        
        
}
