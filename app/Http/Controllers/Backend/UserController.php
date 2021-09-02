<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        return view('backend.layouts.login');
    }
   

    public function loginPost(Request $request)
    {

        // dd($request->all());
        $credentials=$request->except('_token');

        if(Auth::attempt($credentials))
        {
            //user logged in
            return redirect()->route('dashboard');
        }

        return redirect()->back()->with('message','invalid user info.');
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }



    public function guestList()
    {
        $user=User::where('role','=','guest')->get();
        return view('backend.layouts.guest',compact('user'));
    }
    public function userList()
    {
        $user=User::all();
        return view('backend.layouts.user', compact('user'));
    }
}
