<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Roomtype;

class RoomController extends Controller
{
    public function quantity()
    {
        $rooms=Room::with('roomtype')->paginate(2);
        $roomtypes=Roomtype::all();
        
//        dd($products);
        return view('backend.layouts.room.quantity',compact('rooms', 'roomtypes'));
    }

    public function store( Request $request)
    {
       // dd($request->all());
         Room::create([
          'roomtype_id'=>$request->roomtype_id,
             'amount'=>$request->amount,
             'no_accomodate'=>$request->accomodate,
             'description'=>$request->description,
        //     'password'=>$request->password,
        //     'address'=>$request->address,
        //     'contact no'=>$request->contact_no

          ]);

        return redirect()->back();

    }
}
