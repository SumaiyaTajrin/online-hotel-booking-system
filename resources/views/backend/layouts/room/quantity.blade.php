@extends('backend.master')

@section('content')

<h1>room quantity</h1>
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
  Enter Details
</button>

<table class="table">
  <thead>
  <th scope="col">#</th>
            <th scope="col">Roomtype Name</th>
            <th scope="col">Room Number</th>
            <th scope="col">Accomodate</th>
            <th scope="col">Amount</th>
            <!-- <th scope="col">Status</th>
            <th scope="col">Action</th> -->
  </thead>
  <tbody>
  @foreach($rooms as $room)
    <tr>
      < <th scope="row">{{$room->id}}</th>
            <td>{{$room->roomtype->name}}</td>
            <td>{{$room->room_number}} </td>
            <td>{{$room->no_accomodate}} </td>
            <td>{{$room->amount}} .BDT</td>
    </tr>
    @endforeach
  </tbody>
</table>

{{$rooms->links('pagination::bootstrap-4')}}

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

<form action="{{route('room.store')}}" method="post">
  @csrf
  <div class="form-group">
        <label for="name">Select Roomtype</label>
        <select class="form-control" name="roomtype_id" id="">
        @foreach($roomtypes as $roomtype)
        <option value="{{$roomtype->id}}">{{$roomtype->name}}</option>
        @endforeach
        </select>
       </div> 
       <div class="form-group">
    <label for="room_number">Room Number</label>
    <input name= "room_number" id= "room_number"type="number" class="form-control"  placeholder="Enter Room Number">
    
  </div>
       <div class="form-group">
    <label for="amount">Amount</label>
    <input name= "amount" id= "amount"type="number" class="form-control"  placeholder="Enter Amount">
    
  </div>

  <div class="form-group">
    <label for="a">no_accomodate</label>
    <input name="accomodate" type="number" class="form-control" id="a" aria-describedby="emailHelp" placeholder="Enter no of accomodate">
    
  </div>
   <div class="form-group">
  <label for="d">Description</label>
            <textarea class="form-control" name="description" id="d" placeholder="Enter Description"></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form> 
</div>
  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection