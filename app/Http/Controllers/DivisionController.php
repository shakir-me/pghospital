<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Division;
use Illuminate\Support\Str;
class DivisionController extends Controller
{
    public function all()
      {

		$division =Division::orderBy('id', 'desc')->get();
		return view('admin.division.index',compact('division'));
      }

             
               public function add()
             {
             	
             	return view('admin.division.add');
             }


             public function store(Request $request)
             {
               $validatedData = $request->validate([
                       'name' => 'required|unique:divisions|max:255',
                   ]);

             	 $division = new Division();
                 $division->name = $request->name;
                 $division->status = $request->status;
                 $division->slug=Str::slug($request->get('name'));
                 $division->save();
                   if ($division) {           
                   $notification=array(
                     'messege'=>'Division Added Successfully',
                     'alert-type'=>'success'
                      );
                    return Redirect()->back()->with($notification);
              }

             }

          

            public function edit($id)
            {
             $edit_data =Division::find($id);
             return view('admin.division.edit',compact('edit_data'));
            }
            public function update(Request $request,$id)
            {
           
                 $division =Division::find($id);
                 $division->name = $request->name;
                 $division->status = $request->status;
                 $division->slug=Str::slug($request->get('name'));
                 $division->save();
                   if ($division) {           
                   $notification=array(
                     'messege'=>'Division Update Successfully',
                     'alert-type'=>'success'
                      );
                    return Redirect()->route('division.all')->with($notification);
              }

                
            }


            public function delete($id)
                {

                  $delete = Division::find($id);
                  $delete->delete();
                   $notification=array(
                        'messege'=>'Division Deleted Successfully',
                        'alert-type'=>'success'
                         );
                       return Redirect()->back()->with($notification);

                 }
}
