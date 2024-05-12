<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Image;
use App\Models\User;
use App\Models\Teacher;
use App\Models\Notice;
use App\Models\Department;
use Hash;
use Auth;
use Carbon\Carbon;
class UserProfileController extends Controller
{
   


    public function passwordchange()
    {
        return view('dashboard/administrative/passwordchange');
    }

    public function newpasswordpost(Request $request)
    {
        $request->validate([
            'password'=>'confirmed|min:8|alpha_num'
            //|min:8|alpha_num
        ]);
        if(Hash::check($request->old_password, Auth::user()->password)){
            if($request->old_password == $request->password){
                return back_>with('password_error','Password Same As the Old Password');
         }
         else{
              User::find(Auth::id())->update([
               'password'=>Hash::make($request->password)
          ]);
             return back()->with('password_sucsess','Password Set Successfully');
           }

        }
        else{
            return back()->with('password_error','Your Old password does not match');
            }
     }



    public function profile()
    {
        return view('dashboard/administrative/profile',[
            'departments' => Department::all(),
        ]);
    }


public function profileupdate(Request $request){
//print_r($request->profile_photo);
$request->validate( [
    'profile_photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
]);


                // Auth::user()->update($request->except('_token','_method','profile_photo'));

                if ($request->hasFile('profile_photo')) {
                    if (Auth::user()->profile_photo !='default.jpg') {
                    $old_photo_location = 'public/assets/images/user_photos/'.Auth::user()->profile_photo;
                    unlink(base_path($old_photo_location ));
                }
                $uploaded_photo = $request->file('profile_photo');
                $new_photo_name = Auth::id().'.'.$uploaded_photo->getClientOriginalExtension();
                $new_photo_location='public/assets/images/user_photos/'.$new_photo_name ;
                Image::make($uploaded_photo)->resize(300,300)->save(base_path($new_photo_location));
                User::find(Auth::id())->update(['profile_photo'=>$new_photo_name]);
             return back()->with('edit_status','Profile updated successfuly');
        }
        else {
             return back()->with('image_error','File not supported');
            }

    }
}
// $request->validate([
//     'name'=>'required'
// ]);
// if(Auth::user()->updated_at->addDay(30)<Carbon::now()){
//     User::find(Auth::id())->update([
//         'name'=>$request->name
//     ]);
//     return back()->with('name_change_status','Your name Change Successfully!');
// }
// else{
// $last_days = Carbon::now()->diffInDays(Auth::user()->updated_at->addDays(30))+1;
// return back()->withErrors('You can change name after'.$last_days.'days' );
// name change/////////////////////////////////////////////
// }