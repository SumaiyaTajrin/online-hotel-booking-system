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
        $request->validate([
            'name'=>'required',
           
            
            'room_image'=>'required',
              ]);
       

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
               
               'image'=>$fileName
        
          ]);
        return redirect()->back();
    }
    public function allRoom($id)
    {
        $rooms=Room::where('roomtype_id',$id)->get();
        return view('backend.layouts.roomtype.room-list',compact('rooms'));
    }
    public function delete($id)
    {
        // Roomtype::destroy($id);
        $roomtypes=Roomtype::find($id);
        if($roomtypes)
        {
            $roomtypes->delete();
            return redirect()->back()->with('message','room deleted successfully');
        }
        return redirect()->back()->with('message','No rooom found to delete.');
        
    }
    public function edit($id)
    {
        $roomtypes=Roomtype::find($id);
        // dd($roomtypes);
      return view('backend.layouts.roomtype.edit', compact('roomtypes'));
    }
    public function update(Request $request,$id)
    {
        // dd($request->all());
        $roomtypes=Roomtype::find($id);
        $roomtypes->update([
            'name'=>$request->name,
            'description'=>$request->description,
               'amount'=>$request->amount,
              

        ]);
        return redirect()->route('roomtype.list')->with('message','Roomtype updated successfully.');
    }
    
}
