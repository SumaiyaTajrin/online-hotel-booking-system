@extends('frontend.master')
@section('contents')
@if(session()->has('message'))
        <div class="row" style="padding: 10px;">
            <span class="alert alert-success">{{session()->get('message')}}</span>
        </div>
    @endif

    <div>
      <p>
    
        <label for="">Room Number: {{$rooms->room_number}}</label><br>
        <label for="">Room Id: {{$rooms->id}}</label>

       </br>
      </p>
    </div>
   
    <br></br>


<form action="{{route('booking.store')}}" type="form" method="post">
      @csrf
  
    <div class="form-group col-md-6">
     <b> <label for="name">Name</label></b>
      <input required value="{{auth()->user()->name}}" name="name" type="text" class="form-control" id="name" placeholder="Enter Name">
    </div>
    
    <div class="form-group col-md-6">
     <b> <label for="email">Email</label></b>
      <input required value="{{auth()->user()->email}}" name="email"type="email" class="form-control" id="inputEmail4" placeholder="Enter Your Email">
    </div>
   

    <input type="hidden" id="room_id" name="room_id" value="{{$rooms->id}}">
    
    
    <div class="form-group col-md-6">
    <b><label for="check_in_date">Check In Date</label></b>
      <input required name="check_in_date" type="date" class="form-control" id="check_in_date" >
    </div>
    <div class="form-group col-md-6">
      <label for="check_out_date">Check Out Date</label></b>
      <input required name="check_out_date" type="date" class="form-control" id="check_out_date" >
    </div>


   <div class="form-group col-md-6">
    <b> <label for="no_of_guest">No Of Guest</label></b>
    <input required min="0" name="no_of_guest"type="text" class="form-control" id="no_of_guest" placeholder="Enter Guest No">
    </div>
    
    <div class="form-group col-md-6">
    <b> <label for="contact_no">Contact_no</label></b>
    <input required value="{{auth()->user()->contact_no}}" min="0" name="contact_no"type="text" class="form-control" id="contact_no" placeholder="Enter Your Contact No">
    </div>
    <div class="form-group col-md-6">
    <b> <label for="inputAddress">Address</label></b>
    <input required value="{{auth()->user()->address}}" name="address" type="text" class="form-control" id="inputAddress" placeholder="Enter Your Address">
    </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<br></br>
@endsection