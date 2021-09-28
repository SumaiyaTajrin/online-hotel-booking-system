<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function list()
    {
        $payments=Payment::all();
        
        return view('backend.layouts.payment.list', compact('payments'));

    }
    public function details ( Request $request)
    { 
        
    Payment::create([
          'method'=>$request->method,
          'amount'=>$request->amount,
          'comments'=>$request->comments,
          
     ]);
   return redirect()->back();
}
    
