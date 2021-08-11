<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    public function quantity()
    {
        $rooms=Room::all();
//        dd($products);
        return view('backend.layouts.room.quantity',compact('rooms'));
    }

    public function store( Request $request)
    {
       // dd($request->all());
         Room::create([
             'type'=>$request->room,
             'no_accomodate'=>$request->accomodate,
        //     'password'=>$request->password,
        //     'address'=>$request->address,
        //     'contact no'=>$request->contact_no

          ]);

        return redirect()->back();

    }
}
