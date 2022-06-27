<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
class DepartmentController extends Controller
{
public function all()
  {

	$department =Department::orderBy('id', 'desc')->get();
	return view('admin.department.index',compact('department'));
  }

         
           public function add()
         {
         	
         	return view('admin.department.add');
         }


         public function store(Request $request)
         {
           $validatedData = $request->validate([
                   'name' => 'required|unique:divisions|max:255',
               ]);

         	 $department = new Department();
             $department->name = $request->name;
             $department->status = $request->status;
             $department->save();
               if ($department) {           
               $notification=array(
                 'messege'=>'Department Added Successfully',
                 'alert-type'=>'success'
                  );
                return Redirect()->back()->with($notification);
          }

         }

      

        public function edit($id)
        {
         $edit_data =Department::find($id);
         return view('admin.department.edit',compact('edit_data'));
        }
        public function update(Request $request,$id)
        {
       
             $department =Department::find($id);
             $department->name = $request->name;
             $department->status = $request->status;
             $department->save();
               if ($department) {           
               $notification=array(
                 'messege'=>'Department Update Successfully',
                 'alert-type'=>'success'
                  );
                return Redirect()->route('department.all')->with($notification);
          }

            
        }


        public function delete($id)
            {

              $delete = Department::find($id);
              $delete->delete();
               $notification=array(
                    'messege'=>'Department Deleted Successfully',
                    'alert-type'=>'success'
                     );
                   return Redirect()->back()->with($notification);

             }
}
