@extends('backend.master')

@section('content')

<h1> Room Type</h1>
<div>
<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
  Enter Details
</button>
</div>
<br>
@if(session()->has('message'))
        <div class="row" style="padding: 10px;">
            <span class="alert alert-success">{{session()->get('message')}}</span>
        </div>
    @endif


<table class="table">
  <thead>
    <tr class="table-danger">
      <th scope="col">#</th>
      <th scope="col">Room image</th>
      <th scope="col">Name</th>
      <th scope="col">Amount</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
      <!-- <th scope="col"></th> -->
    </tr>
  </thead>
  <tbody>
  @foreach($roomtypes as $roomtype)
    <tr>
      <th scope="row">{{$roomtype->id}}</th>
      <td>
                <img src="{{url('/uploads/'.$roomtype->image)}}" width="100px" alt="roomtype image">
            </td>

            <td>{{$roomtype->name}}</td>
            <td>{{$roomtype->amount}}</td>
            <td>{{$roomtype->status}} </td>
            <td>
            <a href="{{route('roomtype.room',$roomtype->id)}}" class="btn btn-info">view room</a>
            <a href="{{route('roomtype.edit',$roomtype->id)}}" class="btn btn-warning">edit</a>
            <a onclick="return confirm('Are you sure you want to delete this room?');" href="{{route('roomtype.delete',$roomtype->id)}}" class="btn btn-danger">delete</a>


        </td>
    </tr>
    @endforeach
    
  </tbody>
</table>

{{$roomtypes->links('pagination::bootstrap-4')}}

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form action="{{route('roomtype.store')}}" method="post" enctype="multipart/form-data">
       @csrf
      
       
       <div class="form-group">
    <label for="name">Name</label>
    <input required name= "name" id= "name"type="text" class="form-control"  placeholder="Enter name">
    
  
  <div class="form-group">
    <label for="description">description</label>
    <input required name="description" id="description" class="form-control"  placeholder="Enter description">
  </div>
  
  <div class="form-group">
    <label for="amount">Amount</label>
    <input required min="0" name= "amount" id= "amount"type="number" class="form-control"  placeholder="Enter Amount">
    
  </div>
  <div class="form-group">
    <label for="description">Upload room Image</label>
    <input required type="file" class="form-control" name="room_image">
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
@endsection