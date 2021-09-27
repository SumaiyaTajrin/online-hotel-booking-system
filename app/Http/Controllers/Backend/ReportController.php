<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;

class ReportController extends Controller
{
    public function list()
    {

      
        if(isset($_GET['from_date']) && isset($_GET['to_date']) )
        {
            $bookings=Booking::with(['user','room'])
            ->whereBetween('from_date',[date('Y-m-d',strtotime($_GET['from_date'])),date('Y-m-d',strtotime($_GET['to_date']))])
            ->orWhereBetween('to_date',[date('Y-m-d',strtotime($_GET['from_date'])),date('Y-m-d',strtotime($_GET['to_date']))])
            ->get();

        }else
        {
            $bookings=Booking::with(['user','room'])->get();
        }
       

        return view('backend.layouts.report.list', compact('bookings'));

    }
}
