@extends('backend.master')

@section('content')

<h1>Hotel Info</h1>

<form action="{{route('hotel.store')}}" method="post">
    @csrf
    <div class="form-group col-md-6">
      <label for="name">name</label>
      <input name="hotel_name" type="text" class="form-control" id="name" placeholder="Enter Name" value="{{$checkInfo->name??''}}">  
    </div>  
    <!-- null colase operator -->
    
  <div class="form-group">
    <label for="Address">address</label>
    <input name="address" type="text" class="form-control" id="Address" placeholder="Enter Address" value="{{$checkInfo->address??''}}"> 
  </div>
  <div class="form-group">
    <label for="contact_no">contact_no</label>
    <input name="contact_no"type="number" class="form-control" id="contact_no" placeholder="Enter Contact No" value="{{$checkInfo->contact_no??''}}">
  </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection