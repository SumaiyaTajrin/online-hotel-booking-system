<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Room;




class BookingController extends Controller
{
    public function booking($id)
    {
        
        $rooms=Room::find($id);
    
        
        return view('frontend.layouts.booking', compact( 'rooms'));
    }





    public function bookingformpost( Request $request)
    {

       $rooms=Room::find($request->room_id);
       $isBooked=Booking::where('room_id',$request->room_id)
       ->where('from_date','<=',$request->check_in_date)
       ->where('to_date','>=',$request->check_in_date)
       ->first();
       $to_date = \Carbon\Carbon::createFromFormat('Y-m-d', $request->check_in_date);
       $from_date = \Carbon\Carbon::createFromFormat('Y-m-d',$request->check_out_date);
       $diff_in_days = $to_date->diffInDays($from_date);
       $total=$diff_in_days*$rooms->amount;

       if(auth()->user()->id !=1)
       {
            
            if(!$isBooked )
            {
                Booking::create([
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'room_id'=>$request->room_id,
                    'user_id'=>auth()->user()->id,
                    'from_date'=>$request->check_in_date,
                    'to_date'=>$request->check_out_date,
                    'no_of_guest'=>$request->no_of_guest,
                    'no_of_days'=> $diff_in_days,
                    'contact_no'=>$request->contact_no,
                    'address'=>$request->address,
                    'total_amount'=>$total


                ]);
                return redirect()->back()->with('message','booking successful.');
            }else{
                return redirect()->back()->with('message','Room not available on this dates.');
            }
    }else
    {
        return redirect()->back()->with('message','Admin.');
    }
  
}
}
