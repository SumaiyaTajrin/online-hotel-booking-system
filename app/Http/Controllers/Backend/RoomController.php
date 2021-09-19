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
        $rooms=Room::with('roomtype')->paginate(4);
        $roomtypes=Roomtype::all();
        
//        dd($products);
        return view('backend.layouts.room.quantity',compact('rooms', 'roomtypes'));
    }

    public function store( Request $request)
    {

      $request->validate([
        'roomtype_id'=>'required',
        'room_number'=>'required|unique:rooms',
        
    ]);

    $fileName='';
    if($request->hasFile('room_image'))
    {
        $file=$request->file('room_image');
       //generate file name here
        $fileName=date('Ymdhms').'.'.$file->getClientOriginalExtension();
        $file->storeAs('/uploads',$fileName);
    }
       // dd($request->all());
         Room::create([
          'roomtype_id'=>$request->roomtype_id,
          'room_number'=>$request->room_number,
             'amount'=>$request->amount,
             'no_accomodate'=>$request->accomodate,
             'description'=>$request->description,
             'image'=>$fileName
       

          ]);

        return redirect()->back();

    }
}
