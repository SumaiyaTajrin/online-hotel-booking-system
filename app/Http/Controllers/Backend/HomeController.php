<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\User;
use App\Models\Room;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home()
    {
        $title='Dashboard';
        $link= 'Admin/dashboard';
        $booking_count=Booking::all()->count();
        $user_count=User::all()->count();
        $room_count=Room::all()->count();
        return view('backend.layouts.home',compact('title', 'link','booking_count','user_count','room_count') );
    }

    public function contact()
    {
        return view('backend.layouts.contact');
    }
}
