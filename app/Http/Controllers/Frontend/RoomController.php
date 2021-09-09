<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Roomtype;

class RoomController extends Controller
{
    public function room()
    {
        $roomtypes=Roomtype::get()->take(10);
        return view('frontend.layouts.room', compact('roomtypes'));
    }
    
    public function details($id)
    {
        $roomtypes=Roomtype::find($id);
        $allRooms=Roomtype::get()->take(4);
        return view('frontend.layouts.roomDetails',compact('roomtypes','allRooms'));
    }

}
