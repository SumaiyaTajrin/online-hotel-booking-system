<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function list()
    {
        $bookings=Booking::all();
        return view('backend.layouts.booking.list', compact('bookings'));
    }
}
