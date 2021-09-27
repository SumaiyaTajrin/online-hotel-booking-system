@extends('backend.master')

@section('content')

<h1>Approved Booking List</h1>



<table class="table">
  <thead>
    <tr class="table-danger">
      <th scope="col">Sl</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
     
      <th scope="col">Check In Date</th>
      <th scope="col">Check Out Date</th>
      <th scope="col">No Of Guest</th>
      <th scope="col">Room Quantity</th>
      <th scope="col">Contact No</th>
      <th scope="col">Address</th>
      <th scope="col">Status</th>
      
      
    </tr>
  </thead>
  <tbody>
  @foreach($bookings as $key=>$data)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
     
      <td>{{$data->from_date}}</td>
      <td>{{$data->to_date}}</td>
      <td>{{$data->no_of_guest}}</td>
      <td>{{$data->room_quantity}}</td>
      <td>{{$data->contact_no}}</td>
      <td>{{$data->address}}</td>
      <td>{{$data->status}} </td>
     
    </tr>
    @endforeach

  </tbody>
</table>

@endsection