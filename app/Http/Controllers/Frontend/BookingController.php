<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function booking()
    {
        return view('frontend.layouts.booking');
    }
    public function bookingformpost( Request $request)
    {
        Booking::create([
            'first_name'=>$request->name,
            'last_name'=>$request->name,
            'email'=>$request->email,
            'check_in_date'=>$request->check_in_date,
            'check_out_date'=>$request->check_out_date,
            'no_of_guest'=>$request->no_of_guest,
            'room_quantity'=>$request->room_quantity,
            'contact_no'=>$request->contact_no,
            'address'=>$request->address,
         ]);
         return redirect()->back();
    }
}
