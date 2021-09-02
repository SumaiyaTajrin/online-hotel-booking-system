<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Roomtype;



class HomeController extends Controller
{
    public function home()
    {
        $roomtypes=Roomtype::get()->take(5);
        return view('frontend.layouts.home', compact('roomtypes'));
    }
}
