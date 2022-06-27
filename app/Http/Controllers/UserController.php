<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\Models\User;
use Image;
class UserController extends Controller
{
    public function Logout()
    {
        Auth::logout();
        $notification=array(
            'messege'=>'Successfully Logout',
            'alert-type'=>'success'
             );
         return Redirect()->back()->with($notification);
    }

    public function UserProfile()
	{
		$id=Auth::user()->id;
          $editData =User::find($id);
		return view('admin.auth.profile',compact('editData'));
	}


	public function UpdateProfile(Request $request)
	{
		$data = User::find(Auth::user()->id);
		$data->name = $request->name;
		$data->email = $request->email;
        $data->mobile = $request->mobile;
        
		 
            if ($request->image > 0) {
             $image = $request->file('image');
             $img = time() . '.'. $image->getClientOriginalExtension();
             $location = public_path('admin/user/' .$img);
             Image::make($image)->save($location);
             $data->image = $img;
            }
        
		    $data->save();
		      if ($data) {           
		      $notification=array(
		        'messege'=>'User Update Successfully',
		        'alert-type'=>'success'
		         );
		       return Redirect()->back()->with($notification);
		 }

        
		}

		public function ChangePassword(){
			$adminDetails=User::where('email',Auth::user()->email)->first()->toArray();
            return view('admin.auth.changepassword')->with(compact('adminDetails'));
		}

		public function CheckAdminPassword(Request $request)
		  {
		      $data=$request->all();
		      // echo"<pre>";
		      // print_r($data);
		      // die();
		      if(Hash::check($data['current_password'],Auth::user()->password)){
		          return "true";
		      }else{
		          return "false";
		      }
		  }

		public function UpdatePassword(Request $request)
		{
	      $data=$request->all();
	      // echo "<pre>"; print_r($data);
	      if (Hash::check($data['current_password'],Auth::user()->password)) {
	      	if ($data['confirm_password']=$data['new_password']) {
	      		User::where('id',Auth::user()->id)->update(['password'=>bcrypt($data['new_password'])]);

	      		 $notification=array(
	      		 'messege'=>'User  Password Update Successfully',
	      		 'alert-type'=>'success'
	      		  );
	      		return Redirect()->back()->with($notification);
	      	}
	      }
		}

}
