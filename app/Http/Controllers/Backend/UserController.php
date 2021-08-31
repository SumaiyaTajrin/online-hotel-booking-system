<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function login()
    {
        return view('backend.layouts.login');
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
