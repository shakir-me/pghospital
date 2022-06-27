<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;
use Illuminate\Support\Str;
class MedicineController extends Controller
{
      public function all()
        {

  		$medicine =Medicine::orderBy('id', 'desc')->get();
  		return view('admin.medicine.index',compact('medicine'));
        }

               
                 public function add()
               {
               	$main_categories = Medicine::orderBy('name', 'desc')->where('parent_id', NULL)->get();
               	return view('admin.medicine.add',compact('main_categories'));
               }


               public function store(Request $request)
               {
                 $validatedData = $request->validate([
                         'name' => 'required',
                     ]);

               	   $medicine = new Medicine();
                   $medicine->name = $request->name;
                   $medicine->generic_name = $request->generic_name;
                   $medicine->company = $request->company;
                   $medicine->status = $request->status;
                   $medicine->slug=Str::slug($request->get('name'));
                   $medicine->save();
                     if ($medicine) {           
                     $notification=array(
                       'messege'=>'Medicine Added Successfully',
                       'alert-type'=>'success'
                        );
                      return Redirect()->back()->with($notification);
                }

               }

            

              public function edit($id)
              {
                $main_categories = Medicine::orderBy('name', 'desc')->where('parent_id', NULL)->get();
               $edit_data =Medicine::find($id);
               return view('admin.medicine.edit',compact('edit_data','main_categories'));
              }
              public function update(Request $request,$id)
              {
             
                   $medicine =Medicine::find($id);
                   $medicine->name = $request->name;
                   $medicine->generic_name = $request->generic_name;
                   $medicine->company = $request->company;
                   $medicine->status = $request->status;
                   $medicine->slug=Str::slug($request->get('name'));
                   $medicine->save();
                     if ($medicine) {           
                     $notification=array(
                       'messege'=>'Medicine Update Successfully',
                       'alert-type'=>'success'
                        );
                      return Redirect()->route('medicine.all')->with($notification);
                }

                  
              }


              public function delete($id)
                  {

                    $delete = Medicine::find($id);
                    $delete->delete();
                     $notification=array(
                          'messege'=>'Medicine Deleted Successfully',
                          'alert-type'=>'success'
                           );
                         return Redirect()->back()->with($notification);

                   }
}
