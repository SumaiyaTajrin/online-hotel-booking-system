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
     <a href="{{route('booking.disapprove',$data->id)}}" onclick="return confirm('Are you sure you want to delete this booking?');" class="btn btn-danger">disapproved</a><br></br>
     <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal{{$data->id}}">

  Payment
</button></td>
    </tr>

    
<!-- Modal -->
<div class="modal fade" id="exampleModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form action="{{route('payment.store')}}" method="post" >
        @csrf

        <input type="hidden" value="{{$data->id}}" name="booking_id">
        
      <div class="form-group col-md-6">
      <label for="method">Method</label>
      <input required name="method" type="text" class="form-control" id="method" placeholder="Enter method" >  
    </div>  

  <div class="form-group">
    <label for="amount">Amount</label>
    <input required min="0" name="amount" type="text" class="form-control" id="amount" placeholder="Enter Amount" > 
  </div>

  <div class="form-group col-md-6">
      <label for="advance_payment">Advance</label>
      <input required min="0" name="advance_payment" type="text" class="form-control" id="advance_payment" placeholder="Enter payment" >  
    </div> 
    <div class="form-group col-md-6">
      <label for="due_payment">Due</label>
      <input required min="0" name="due_payment" type="text" class="form-control" id="due_payment" placeholder="Enter payment" >  
    </div> 
  <div class="form-group">
    <label for="comments">Comments</label>
    <input required name="comments"type="text" class="form-control" id="comments" placeholder="Give comments" >
  </div>

  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
    @endforeach

  </tbody>
</table>

{{$bookings->links('pagination::bootstrap-4')}}
@endsection