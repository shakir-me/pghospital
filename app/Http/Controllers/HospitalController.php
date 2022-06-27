<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hostipal;
use Illuminate\Support\Str;
class HospitalController extends Controller
{
        public function all()
          {

    		$hospital =Hostipal::orderBy('id', 'desc')->get();
    		return view('admin.hospital.index',compact('hospital'));
          }

                 
                   public function add()
                 {
                 	
                 	return view('admin.hospital.add');
                 }


                 public function store(Request $request)
                 {
                   $validatedData = $request->validate([
                           'name' => 'required|unique:hostipals|max:255',
                       ]);

                 	 $hospital = new Hostipal();
                     $hospital->name = $request->name;
                     $hospital->distric_id = $request->distric_id;
                     $hospital->status = $request->status;
                     $hospital->slug=Str::slug($request->get('name'));
                     $hospital->save();
                       if ($hospital) {           
                       $notification=array(
                         'messege'=>'Hostipal Added Successfully',
                         'alert-type'=>'success'
                          );
                        return Redirect()->back()->with($notification);
                  }

                 }

              

                public function edit($id)
                {
                 $edit_data =Hostipal::find($id);
                 return view('admin.hospital.edit',compact('edit_data'));
                }
                public function update(Request $request,$id)
                {
               
                     $hospital =Hostipal::find($id);
                     $hospital->name = $request->name;
                     $hospital->distric_id = $request->distric_id;
                     $hospital->status = $request->status;
                     $hospital->slug=Str::slug($request->get('name'));
                     $hospital->save();
                       if ($hospital) {           
                       $notification=array(
                         'messege'=>'Hostipal Update Successfully',
                         'alert-type'=>'success'
                          );
                        return Redirect()->route('hospital.all')->with($notification);
                  }

                    
                }


                public function delete($id)
                    {

                      $delete = Hostipal::find($id);
                      $delete->delete();
                       $notification=array(
                            'messege'=>'Hostipal Deleted Successfully',
                            'alert-type'=>'success'
                             );
                           return Redirect()->back()->with($notification);

                     }
}
