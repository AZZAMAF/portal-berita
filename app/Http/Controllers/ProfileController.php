<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function editPassword()
    {
        return view('admin.profile.change-pasword');
    }

    public function updatePassword(Request $request)
    {
        $this->validate($request,[
            'current_password'=>'required|string',
            'password'      =>'required|min:6|string',
            'confirmation_password'=> 'required|min:6|string'

        ]);

        $currentPasswordStatus =Hash::check($request->current_password,auth()->user()->password);
        if($currentPasswordStatus){
            User::findOrFail(Auth::user()->id)->update([
                'password'=> Hash::make($request->password)
            ]);
            return redirect()->back();
        }else{
            return redirect()->back();
        }
    }
}
