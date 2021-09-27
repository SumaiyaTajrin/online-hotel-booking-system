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
}
