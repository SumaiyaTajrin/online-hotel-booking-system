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
        $fileName='';
        if($request->hasFile('room_image'))
        {
            $file=$request->file('room_image');
           //generate file name here
            $fileName=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$fileName);
        }


         Roomtype::create([
             'name'=>$request->name,
            'description'=>$request->description,
               'amount'=>$request->amount,
               'image'=>$fileName
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
