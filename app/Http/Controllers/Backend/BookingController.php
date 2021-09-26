<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Room;



class BookingController extends Controller
{
    public function list()
    {
        $bookings=Booking::paginate(2);
        $room=Room::all();
     
        return view('backend.layouts.booking.list', compact('bookings', 'room'));
    }


    public function approve($id)
    {
    Booking::find($id)->update([
    'status'=>'Booked'
    ]);
    return redirect()->route('booking.list')->with('message','booking approved sucessfully'); 
    }


    public function  disapprove($id)
    {
     Booking::find($id)->update([
    'status'=>'disapprove'
    ]);
    return redirect()->back()->with('message','booking disapproved sucessfully'); 
    }
}
