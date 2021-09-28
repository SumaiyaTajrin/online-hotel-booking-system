@extends('backend.master')

@section('content')

<h1>booking list</h1>
<br><br>
@if(session()->has('message'))
        <div class="row" style="padding: 10px;">
            <span class="alert alert-success">{{session()->get('message')}}</span>
        </div>
    @endif

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
      <th scope="col">Action</th>
      
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
      <td><a href="{{route('booking.approve',$data->id)}}" class="btn btn-info">Approved</a><br></br>
      <td><a href="{{route('payment.list')}}" class="btn btn-info">Payment</a><br></br>

     <a href="{{route('booking.disapprove',$data->id)}}" onclick="return confirm('Are you sure you want to delete this booking?');" class="btn btn-danger">disapproved</a></td>
    </tr>
    @endforeach

  </tbody>
</table>
{{$bookings->links('pagination::bootstrap-4')}}
@endsection