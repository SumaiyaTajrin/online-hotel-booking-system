<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;



class GuestdetailsController extends Controller
{
    public function guestdetails()
    {
        
        $bookings=Booking::where('user_id',auth()->user()->id) ->get();
        return view('frontend.layouts.booking-details', compact('bookings'));
    }
}
