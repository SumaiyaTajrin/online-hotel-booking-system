@extends('backend.master')

@section('content')

<h1>booking list</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Check In Date</th>
      <th scope="col">Check Out Date</th>
      <th scope="col">No Of Guest</th>
      <th scope="col">Room Quantity</th>
      <th scope="col">Contact No</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($bookings as $key=>$data)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->first_name}}</td>
      <td>{{$data->last_name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->check_in_date}}</td>
      <td>{{$data->check_out_date}}</td>
      <td>{{$data->no_of_guest}}</td>
      <td>{{$data->room_quantity}}</td>
      <td>{{$data->contact_no}}</td>
      <td>{{$data->address}}</td>
      <td>view</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection