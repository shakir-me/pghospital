<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Distric;
use Illuminate\Support\Str;
class DistricController extends Controller
{
        public function all()
          {

    		$distric =Distric::orderBy('id', 'desc')->get();
    		return view('admin.distric.index',compact('distric'));
          }

                 
                   public function add()
                 {
                 	
                 	return view('admin.distric.add');
                 }


                 public function store(Request $request)
                 {
                   $validatedData = $request->validate([
                           'name' => 'required|unique:districs|max:255',
                       ]);

                 	 $distric = new Distric();
                     $distric->name = $request->name;
                     $distric->division_id = $request->division_id;
                     $distric->status = $request->status;
                     $distric->slug=Str::slug($request->get('name'));
                     $distric->save();
                       if ($distric) {           
                       $notification=array(
                         'messege'=>'Distric Added Successfully',
                         'alert-type'=>'success'
                          );
                        return Redirect()->back()->with($notification);
                  }

                 }

              

                public function edit($id)
                {
                 $edit_data =Distric::find($id);
                 return view('admin.distric.edit',compact('edit_data'));
                }
                public function update(Request $request,$id)
                {
               
                     $distric =Distric::find($id);
                     $distric->name = $request->name;
                     $distric->division_id = $request->division_id;
                     $distric->status = $request->status;
                     $distric->slug=Str::slug($request->get('name'));
                     $distric->save();
                       if ($distric) {           
                       $notification=array(
                         'messege'=>'Distric Update Successfully',
                         'alert-type'=>'success'
                          );
                        return Redirect()->route('distric.all')->with($notification);
                  }

                    
                }


                public function delete($id)
                    {

                      $delete = Distric::find($id);
                      $delete->delete();
                       $notification=array(
                            'messege'=>'Distric Deleted Successfully',
                            'alert-type'=>'success'
                             );
                           return Redirect()->back()->with($notification);

                     }
}
