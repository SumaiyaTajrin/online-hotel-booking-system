<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Roomtype;
use App\Models\Room;

class RoomtypeController extends Controller
{
    public function list()
    {
        $roomtypes=Roomtype::paginate(3);
     
        
        return view('backend.layouts.roomtype.list', compact('roomtypes'));
    }
    public function store( Request $request)
    {
        
         Roomtype::create([
             'name'=>$request->name,
            'description'=>$request->description,
        //     'address'=>$request->address,
        //     'contact no'=>$request->contact_no
          ]);
        return redirect()->back();
    }
    public function allRoom($id)
    {
        $rooms=Room::where('roomtype_id',$id)->get();
        return view('backend.layouts.roomtype.room-list',compact('rooms'));
    }
    
}
