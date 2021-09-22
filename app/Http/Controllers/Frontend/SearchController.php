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
    
        $bookings=Booking::select('room_id')->whereBetween('from_date',[date('Y-m-d',strtotime($request->from_date)),date('Y-m-d',strtotime($request->to_date))])
            ->orWhereBetween('to_date',[date('Y-m-d',strtotime($request->from_date)),date('Y-m-d',strtotime($request->to_date))])
            ->get();

        $room_ids=collect($bookings)->pluck('room_id')->toArray();

        $available=Room::whereNotIn('id',$room_ids)->get();

        $rooms=Room::all();
        return view('frontend.layouts.allroom-view', compact('available','rooms'));

    }
}
