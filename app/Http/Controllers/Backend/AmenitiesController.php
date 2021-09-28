<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Amenities;

class AmenitiesController extends Controller
{
    public function list()
    {
        $amenities=Amenities::all();
        return view ('backend.layouts.amenities.list', compact('amenities'));
    }
    public function store( Request $request)
    {
        Amenities::create([
            'name'=>$request->amenities_name,
            

        ]);
        return redirect()->back();
    }
    public function delete($id)
    {
        
        $amenities=Amenities::find($id);
        if($amenities)
        {
            $amenities->delete();
            return redirect()->back()->with('message','Amenities deleted successfully');
        }
        return redirect()->back()->with('message','No amenities found to delete.');
        
    }
    public function edit($id)
    {
        $amenities=Amenities::find($id);
        // dd($roomtypes);
      return view('backend.layouts.amenities.edit', compact('amenities'));
    }
    public function update(Request $request,$id)
    {
        // dd($request->all());
        $amenities=Amenities::find($id);
        Amenities::create([
            'name'=>$request->amenities_name,
            

        ]);
        return redirect()->route('roomtype.list')->with('message','Amenities updated successfully.');
    }
}
