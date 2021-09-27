<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Roomtype;
use App\Models\Amenities;

use App\Models\Roomamenities;

class RoomController extends Controller
{
    public function quantity()
    {
         
        $rooms=Room::with('roomtype','roomamenities')->paginate(4);
        $roomtypes=Roomtype::all();
        $amenities=Amenities::all();

        return view('backend.layouts.room.quantity',compact('rooms', 'roomtypes','amenities'));
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
         $room=Room::create([
          'roomtype_id'=>$request->roomtype_id,
          // 'amenities_id'=>$request->amenities_id,
          'room_number'=>$request->room_number,
          'type'=>$request->type,
          'amount'=>$request->amount,
          'no_accomodate'=>$request->accomodate,
          'description'=>$request->description,
          'image'=>$fileName
          ]);


          foreach($request->amenities_id as $am)
          {
            
            Roomamenities::create([
              'room_id'=>$room->id,
              'amenities_id'=>$am
            ]);

          }

        return redirect()->back();

    }
}
