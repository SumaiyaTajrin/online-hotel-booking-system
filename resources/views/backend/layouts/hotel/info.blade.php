@extends('backend.master')

@section('content')

<h1>Hotel Info</h1>

<form action="{{route('hotel.store')}}" method="post">
    @csrf
    <div class="form-group col-md-6">
      <label for="name">Name</label>
      <input required name="hotel_name" type="text" class="form-control" id="name" placeholder="Enter Name" value="{{$checkInfo->name??''}}">  
    </div>  
    <!-- null colase operator -->
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input required name="email"type="email" class="form-control" id="inputEmail4" placeholder="Enter Your Email" value="{{$checkInfo->email??''}}">
    </div>
  <div class="form-group">
    <label for="Address">Address</label>
    <input required name="address" type="text" class="form-control" id="Address" placeholder="Enter Address" value="{{$checkInfo->address??''}}"> 
  </div>
  <div class="form-group">
    <label for="city">City</label>
    <input required name="city" type="text" class="form-control" id="city" placeholder="Enter Address" value="{{$checkInfo->city??''}}"> 
  </div>
  <div class="form-group">
    <label for="contact_no">Contact_no</label>
    <input required min="0" name="contact_no"type="number" class="form-control" id="contact_no" placeholder="Enter Contact No" value="{{$checkInfo->contact_no??''}}">
  </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection