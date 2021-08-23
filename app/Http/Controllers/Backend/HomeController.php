<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
