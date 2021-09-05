<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function signupform()
    {
       
       return view('frontend.layouts.signup');
    }
    public function signupformpost( Request $request)
    {

      $request->validate([
         'name'=>'required',
         'email'=>'required|email|unique:users,email',
         'password'=>'required|min:6',
         'contact_no'=>'required',
         'address'=>'required'
     ]);
      // dd($request->all());
      User::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'role'=>'guest',
        'password'=>bcrypt($request->password),
        'contact_no'=>$request->contact_no,
        'address'=>$request->address,
     ]);
     return redirect()->back()->with('success','User Registration Successful.');
    }

    public function login()
    {
        return view('frontend.layouts.login');
    }

    public function doLogin(Request $request)
    {
        $credentials=$request->except('_token');

        if(Auth::attempt($credentials))
        {
            return redirect()->route('home');
            //user logged in
        }
        return redirect()->back()->with('message','invalid user info.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
