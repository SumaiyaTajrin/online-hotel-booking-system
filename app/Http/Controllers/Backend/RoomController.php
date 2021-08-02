<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function quantity()
    {
        return view ('backend.layouts.room.quantity');
    }
}
