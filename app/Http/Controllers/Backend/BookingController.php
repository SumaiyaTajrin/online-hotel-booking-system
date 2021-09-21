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
    public function delete($id)
    {
        // Roomtype::destroy($id);
        $bookings=Booking::find($id);
        if($bookings)
        {
            $bookings->delete();
            return redirect()->back()->with('message','booking deleted successfully');
        }
        return redirect()->back()->with('message','No booking found to delete.');
        
    }
}
