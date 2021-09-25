<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;





class BookingController extends Controller
{
    public function booking($id)
    {
        // dd($id);
        $booking=Booking::with(['room','user'])->find($id);
    //   dd($booking);
        
        return view('frontend.layouts.booking', compact( 'booking'));
    }
    public function bookingformpost( Request $request)
    {
       $isBooked=Booking::where('room_id',$request->room_id)
       ->where('from_date','<=',$request->check_in_date)
       ->where('to_date','>=',$request->check_in_date)
       ->first();
       if(!$isBooked)
       {
        Booking::create([
            'name'=>$request->name,
            'email'=>$request->email,
           'room_id'=>$request->room_id,
           'user_id'=>auth()->user()->id,
            'from_date'=>$request->check_in_date,
            'to_date'=>$request->check_out_date,
            'no_of_guest'=>$request->no_of_guest,
            'room_quantity'=>$request->room_quantity,
            'contact_no'=>$request->contact_no,
            'address'=>$request->address,
         ]);
         return redirect()->back()->with('message','booking successful.');
       }else{
        return redirect()->back()->with('message','Room not available on this dates.');
       }
       
       
    }
}
