<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Roomtype;


class SearchController extends Controller
{
    public function search( Request $request)
    {
    
        $from_date= $request->from_date;
        $to_date= $request->to_date;
        if($request->isMethod('get')){
            $roomtypes = Roomtype::whereNotIn('id', function ($q1) use($from_date, $to_date){
                $q1->from('bookings')->select('roomtype_id')
                ->where('created_at', '<=', $from_date)
                ->where('created_at', '<=', $to_date);
               })->get();
        }else{
            $room = null;
        }
        return view('frontend.layouts.search-result', compact('from_date','to_date'));

    }
}
