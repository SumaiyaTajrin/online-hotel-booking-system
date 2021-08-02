<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $title='Dashboard';
        $link= 'home/dashboard';
        return view('backend.layouts.home',compact('title', 'link') );
    }

    public function contact()
    {
        return view('backend.layouts.contact');
    }
}
