@extends('frontend.master')
@section('contents')
<form action="{{route('user.signup.store')}}" type="form" method="post">
      @csrf
  
    <div class="form-group col-md-6">
      <label for="name">First Name</label>
      <input required name="name" type="text" class="form-control" id="name" placeholder="Enter Name">
    </div>
    <div class="form-group col-md-6">
      <label for="name">Last Name</label>
      <input required name="name" type="text" class="form-control" id="name" placeholder="Enter Name">
    </div>
    <div class="form-group col-md-6">
      <label for="email">email</label>
      <input required name="email"type="email" class="form-control" id="inputEmail4" placeholder="Enter Your Email">
    </div>
    <div class="form-group col-md-6">
      <label for="check_in_date">Check In Date</label>
      <input required name="check_in_date" type="date" class="form-control" id="check_in_date" >
    </div>
    <div class="form-group col-md-6">
      <label for="check_out_date">Check Out Date</label>
      <input required name="check_out_date" type="date" class="form-control" id="check_out_date" >
    </div>
    <div class="form-group col-md-6">
    <label for="no_of_guest">No Of Guest</label>
    <input required name="no_of_guest"type="text" class="form-control" id="no_of_guest" placeholder="Enter Guest No">
    </div>
    <div class="form-group col-md-6">
    <label for="room_no">Room No</label>
    <input required name="room_no"type="number" class="form-control" id="room_no" placeholder="Enter Room No">
    </div>
    <div class="form-group col-md-6">
    <label for="contact_no">Contact_no</label>
    <input required name="contact_no"type="text" class="form-control" id="contact_no" placeholder="Enter Your Contact No">
    </div>
    <div class="form-group col-md-6">
    <label for="inputAddress">Address</label>
    <input required name="address" type="text" class="form-control" id="inputAddress" placeholder="Enter Your Address">
    </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection