<?php

namespace App\Http\Controllers\Backend;
use App\Models\Room;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Roomtype;

class RoomtypeController extends Controller
{
    public function list()
    {
        $roomtypes=Roomtype::paginate(3);
        $rooms=Room::all();
        return view('backend.layouts.roomtype.list', compact('roomtypes', 'rooms'));
    }
    public function store( Request $request)
    {
        
         Roomtype::create([
             'name'=>$request->name,
             'rooms_id'=>$request->room_id,
              'amount'=>$request->amount,
            'description'=>$request->description,
        //     'address'=>$request->address,
        //     'contact no'=>$request->contact_no
          ]);
        return redirect()->back();
    }
    
}
