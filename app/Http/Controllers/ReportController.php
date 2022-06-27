<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\ReportDetail;
use Image;
class ReportController extends Controller
{
    public function ReportalStore(Request $request)
    {
    	  // $validatedData = $request->validate([
    	  //         'name' => 'required|unique:divisions|max:255',
    	  //     ]);

	$reporter = new Report();
    $reporter->type = $request->type;
    $reporter->reporter_name = $request->reporter_name;
    $reporter->reporter_email = $request->reporter_email;
    $reporter->reporter_phone = $request->reporter_phone;
    $reporter->reporter_post_code = $request->reporter_post_code;
    $reporter->reporter_by = $request->reporter_by;
    $reporter->division_id = $request->division_id;
    $reporter->distric_id = $request->distric_id;
    $reporter->hospital_id = $request->hospital_id;
    $reporter->first_name = $request->first_name;
    $reporter->last_name = $request->last_name;
    $reporter->phone_number = $request->phone_number;
    $reporter->post_code = $request->post_code;
    $reporter->gender = $request->gender;
    $reporter->age = $request->age;
    $reporter->weight = $request->weight;
    $reporter->height = $request->height;
    $reporter->hospital_name = $request->hospital_name;
    $reporter->department_id = $request->department_id;
    $reporter->prescription_window = $request->prescription_window;
    $reporter->noa = $request->noa;
    $reporter->no_of_other = $request->no_of_other;
    if ($request->image > 0) {
    $image = $request->file('image');
    $img = time() . '.'. $image->getClientOriginalExtension();
    $location = public_path('admin/repor/' .$img);
    Image::make($image)->save($location);
    $reporter->image = $img;
   }
     $reporter->save();
      $productId=$reporter->id;
      $medicine_id = $request->medicine_id;
      $generic_name = $request->generic_name;
      $company = $request->company;
      $dose = $request->dose;
      $unit = $request->unit;
      $medicine_price = $request->medicine_price;
      $medicine_used = $request->medicine_used;
      $start_date = $request->start_date;
      $end_date = $request->end_date;

       //echo "<pre>"; print_r($reporters);die;
      foreach($generic_name as $key=>$val)
      {
           $proimage= new ReportDetail();
           $proimage->report_id = $productId;
           $proimage->generic_name = $generic_name[$key];
           $proimage->medicine_id = $medicine_id[$key];
           $proimage->company = $company[$key];
           $proimage->dose = $dose[$key];
           $proimage->unit = $unit[$key];
           $proimage->medicine_price = $medicine_price[$key];
           $proimage->medicine_used = $medicine_used[$key];
           $proimage->start_date = $start_date[$key];
           $proimage->end_date = $end_date[$key];

//echo "<pre>"; print_r($proimage);die;

          
           $proimage->save(); 
                if ($proimage) {           
                $notification=array(
                  'messege'=>'Report  Added Successfully',
                  'alert-type'=>'success'
                   );
                 return Redirect()->back()->with($notification);
           }
      }



     
             
  }


   
    
        public function PatientStore(Request $request)
        {
        	  // $validatedData = $request->validate([
        	  //         'name' => 'required|unique:divisions|max:255',
        	  //     ]);

    	$reporter = new Report();
        $reporter->type = $request->type;
        $reporter->division_id = $request->division_id;
        $reporter->distric_id = $request->distric_id;
        $reporter->hospital_id = $request->hospital_id;
        $reporter->first_name = $request->first_name;
        $reporter->last_name = $request->last_name;
        $reporter->phone_number = $request->phone_number;
        $reporter->post_code = $request->post_code;
        $reporter->gender = $request->gender;
        $reporter->age = $request->age;
        $reporter->weight = $request->weight;
        $reporter->height = $request->height;
        $reporter->hospital_name = $request->hospital_name;
        $reporter->department_id = $request->department_id;
        $reporter->prescription_window = $request->prescription_window;
        $reporter->noa = $request->noa;
        $reporter->no_of_other = $request->no_of_other;
        $reporter->medicine_id = $request->medicine_id;
        $reporter->generic_name = $request->generic_name;
        $reporter->company = $request->company;
        $reporter->dose = $request->dose;
        $reporter->unit = $request->unit;
        $reporter->medicine_price = $request->medicine_price;
        $reporter->medicine_used = $request->medicine_used;
        $reporter->start_date = $request->start_date;
        $reporter->end_date = $request->end_date;

        if ($request->image > 0) {
        $image = $request->file('image');
        $img = time() . '.'. $image->getClientOriginalExtension();
        $location = public_path('admin/repor/' .$img);
        Image::make($image)->save($location);
        $reporter->image = $img;
       }
        $reporter->save();
          if ($reporter) {           
          $notification=array(
            'messege'=>'Patient  Added Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
     }
        }
}
