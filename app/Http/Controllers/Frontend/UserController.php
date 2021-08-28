<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function signupform()
    {
       
       return view('frontend.layouts.signup');
    }
    public function signupformpost( Request $request)
    {
      // dd($request->all());
      User::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>bcrypt($request->password),
        'contact_no'=>$request->contact_no,
        'address'=>$request->address,
     ]);
     return redirect()->back()->with('success','User Registration Successful.');
    }
}
