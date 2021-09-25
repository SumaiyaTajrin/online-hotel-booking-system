@extends('backend.master')

@section('content')


<h1>{{$link}}</h1>
<div class="row" style="margin-top: 50px;">
        <div class="col-md-3" style="background-color: darkcyan; padding: 10px; margin-right: 20px">
            <h1>Total User</h1>
            <p><h4>{{$user_count}}</h4></p>
        </div>
        <div class="col-md-3" style="background-color: cornflowerblue; padding: 10px; margin-right: 20px">
            <h1>Total Room</h1>
            <p><h4>{{$room_count}}</h4></p>
        </div>
        <div class="col-md-3" style="background-color: lightblue; padding: 10px; margin-right: 20px;">
           <h1>Total Booking</h1>
            <p><h4>{{$booking_count}}</h4></p>
        </div>


    </div>
@endsection
