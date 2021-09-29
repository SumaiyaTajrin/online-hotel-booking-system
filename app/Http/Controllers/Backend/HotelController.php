<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
     public function info()
     {
        $checkInfo=Hotel::first();
         return view('backend.layouts.hotel.info',compact('checkInfo'));
     }
     public function store( Request $request)
     {
        // $request->validate([
        //     'name'=>'required',
        //     'email'=>'required|email|unique:users,email',
        //     'city'=>'required',
        //     'contact_no'=>'required',
        //     'address'=>'required'
        // ]);
        $checkInfo=Hotel::first();
      
        if($checkInfo)
        {
            //update

            $checkInfo->update([
                'name'=>$request->hotel_name,
                'address'=>$request->address,
                'contact_no'=>$request->contact_no,
                'email'=>$request->email,
                'city'=>$request->city
            ]);
           
        }else{
          
            Hotel::create([
                'name'=>$request->hotel_name,
                'address'=>$request->address,
                'contact_no'=>$request->contact_no,
                'email'=>$request->email,
                'city'=>$request->city
            ]);
        }

      

        return redirect()->back();
     }
}
