<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Roomtype;




class HomeController extends Controller
{
    public function home()
    {
        $roomtypes=Roomtype::orderBy('id','desc')->toBase()->get();
        return view('frontend.layouts.home', compact('roomtypes'));
    }

    public function about()
    {
        
        return view('frontend.layouts.about');
    }

    public function service()
    {
        return view('frontend.layouts.service');
    }
}
