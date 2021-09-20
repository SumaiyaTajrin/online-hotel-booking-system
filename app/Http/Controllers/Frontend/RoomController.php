<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Roomtype;
use App\Models\Room;
class RoomController extends Controller
{
    public function room()
    {
        $roomtypes=Roomtype::get()->take(10);
        return view('frontend.layouts.room', compact('roomtypes'));
    }
    
    public function details($id)
    {
        $roomtypes=Room::find($id);
        $rooms=Room::get()->take(10);
        $allRooms=Roomtype::get()->take(4);
        return view('frontend.layouts.roomDetails',compact('roomtypes','allRooms','rooms'));
    }

    public function allroomview($id)
    {
       $room=Room::find($id);
       $rooms=Room::where('roomtype_id',$room->roomtype_id)->get();
      return view('frontend.layouts.allroom-view', compact('rooms')); 
    }

}
