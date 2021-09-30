<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Booking;

class PaymentController extends Controller
{
    public function list()
    {
       
        $payments=Payment::with('booking')->get(); 
        return view('backend.layouts.payment.list', compact('payments'));
    }

    
    public function paidlist($id)
    {
        Payment::find($id)->update([
    'status'=>'paid'
    ]);
    return redirect()->route('payment.list')->with('message','booking approved sucessfully'); 
    }
    
    public function store(Request $request)
    {

        $booking_id=$request->booking_id;
        $booking_info=Booking::find($booking_id);



        Payment::create([
            'method'=>$request->method,
            
            'user_id'=>$booking_info->user_id,
            'comments'=>$request->comments,
            'booking_id'=>$request->booking_id,
            
            'paid_amount'=>$request->paid_amount,
            'pay_at'=>$request->pay_at,

        ]);

        return redirect()->route('payment.list');
    }
    
}