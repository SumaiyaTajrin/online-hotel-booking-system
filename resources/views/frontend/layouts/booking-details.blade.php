@extends('frontend.master')
@section('contents')

<h1>Booking List</h1>


<table class="table table-sm">
  <thead>
  <tr class="table-danger">
   
    <th scope="col">Sl</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
     
      <th scope="col">Check In Date</th>
      <th scope="col">Check Out Date</th>
      <th scope="col">No Of Guest</th>
      <th scope="col">Contact No</th>
      <th scope="col">Address</th>
      <th scope="col">Status</th>
   <th scope="col">Action</th>
</tr>
  </thead>
  <tbody>
  @foreach($bookings as $key=>$data)
    <tr class="table-secondary">
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->from_date}}</td>
      <td>{{$data->to_date}}</td>
      <td>{{$data->no_of_guest}}</td>
      <td>{{$data->contact_no}}</td>
      <td>{{$data->address}}</td>
      <td>{{$data->status}} </td>
     <td>  
       @if($data->status=='Booked'|| 'pending')
     <a href="{{route('customer.booking.cancel',$data->id)}}" onclick="return confirm('Are you sure you want to cancel this booking?');" class="btn btn-danger">cancel booking</a><br></br>
@endif
</td>
    </tr>


     
    @endforeach
   
  </tbody>
</table>
 


<br></br>

@endsection