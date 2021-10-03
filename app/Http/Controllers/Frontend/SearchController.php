<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Room;


class SearchController extends Controller
{
    public function dateSearch( Request $request)
    {
    if(date('Y-m-d',strtotime($request->to_date))>date('Y-m-d',strtotime($request->from_date)))
    {
        $bookings=Booking::whereBetween('from_date',[date('Y-m-d',strtotime($request->from_date)),date('Y-m-d',strtotime($request->to_date))])
        ->orWhereBetween('to_date',[date('Y-m-d',strtotime($request->from_date)),date('Y-m-d',strtotime($request->to_date))])
      ->get();

      
      $data=$bookings->where('status','Booked');

    $room_ids=collect($data)->pluck('room_id')->toArray();

    $rooms=Room::whereNotIn('id',$room_ids)->get();
    return view('frontend.layouts.allroom-view', compact('rooms'));
    }else
    {
        return redirect()->back()->with('message','From date should be smaller than To date');
    }
        

    }


    
}
