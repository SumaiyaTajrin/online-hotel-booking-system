<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function list()
    {
        $users=User::all();
        //dd($users);
        return view('backend.layouts.user.list', compact('users'));
    }
    public function store( Request $request)
    {
        //dd($request->all());
        User::create([
             'name'=>$request->customer_name,
             'email'=>$request->email,
            'password'=>$request->password,
            'address'=>$request->address,
            'contact no'=>$request->contact_no

         ]);

        return redirect()->back();

    }
}
