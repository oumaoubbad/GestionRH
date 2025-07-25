<?php

namespace App\Http\Controllers;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
// use Validator;
use Illuminate\Support\Facades\Input ;
use Illuminate\Validation\Validator as ValidationValidator;

use Illuminate\Support\Facades\Redirect ;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
{
    return view('profile');
}

function updateInfo(Request $request)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required|min:3',
        'prenom' => 'required|min:3',
        'email' => 'required|email|unique:users,email,' . Auth::user()->id,
    ]);

    if (!$validator->passes()) {
        return redirect()->route('profile');
    } else {
        $query = User::find(Auth::user()->id)->update([
            'name' => $request->name,
            'prenom' => $request->prenom,
            'email' => $request->email,
        ]);
    }

    return redirect()->route('admin.profile');
}


function changePassword(Request $request){
    //Validate form
    $validator = Validator::make($request->all(),[
        'oldpassword'=>[
            'required', function($attribute, $value, $fail){
                if( !Hash::check($value, Auth::user()->password) ){
                    return $fail(__('The current password is incorrect'));
                }
            },
            'min:8',
            'max:30'
         ],
         'newpassword'=>'required|min:8|max:30',
         'cnewpassword'=>'required|same:newpassword'
     ],[
         'oldpassword.required'=>'Enter your current password',
         'oldpassword.min'=>'Old password must have atleast 8 characters',
         'oldpassword.max'=>'Old password must not be greater than 30 characters',
         'newpassword.required'=>'Enter new password',
         'newpassword.min'=>'New password must have atleast 8 characters',
         'newpassword.max'=>'New password must not be greater than 30 characters',
         'cnewpassword.required'=>'ReEnter your new password',
         'cnewpassword.same'=>'New password and Confirm new password must match'
     ]);

    if( !$validator->passes() ){
        return response()->json(['status'=>0,'error'=>$validator->errors()->toArray()]);
    }else{

     $update = User::find(Auth::user()->id)->update(['password'=>Hash::make($request->newpassword)]);

     if( !$update ){
         return response()->json(['status'=>0,'msg'=>'Something went wrong, Failed to update password in db']);
     }else{
         return response()->json(['status'=>1,'msg'=>'Your password has been changed successfully']);
     }
    }
}




}


