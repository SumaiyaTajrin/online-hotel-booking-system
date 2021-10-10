<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;


class InvoiceController extends Controller
{
    public function invoice($id)
{
    $bookings=Booking::with('user')->where('id',$id)->first();
        return view('backend.layouts.invoice',compact('bookings'));
}
}
