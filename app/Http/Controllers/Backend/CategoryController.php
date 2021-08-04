<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list()
    {
        return view ('backend.layouts.category.list');
    }
    public function store( Request $request)
    {
        dd($request->all());
    }
}
