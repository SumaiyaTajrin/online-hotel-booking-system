@extends('backend.master')

@section('content')

<h1>room quantity</h1>
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
  Enter Details
</button>

<table class="table">
  <thead>
  <th scope="col">#</th>
            <th scope="col">Type</th>
            <th scope="col">Accomodate</th>
            <!-- <th scope="col">Status</th>
            <th scope="col">Action</th> -->
  </thead>
  <tbody>
  @foreach($rooms as $room)
    <tr>
      < <th scope="row">{{$room->id}}</th>
            <td>{{$room->type}}</td>
            <td>{{$room->no_accomodate}} </td>
    </tr>
    @endforeach
  </tbody>
</table>

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
    <label for="room">room type</label>
    <input name="room" type="text" class="form-control" id="room" aria-describedby="emailHelp" placeholder="Enter Type">
    
  </div>

  <div class="form-group">
    <label for="a">no_accomodate</label>
    <input name="accomodate" type="number" class="form-control" id="a" aria-describedby="emailHelp" placeholder="Enter no of accomodate">
    
  </div>
  <!-- <div class="form-group">
  <label for="d">Description</label>
            <textarea class="form-control" name="description" id="d" placeholder="Enter Description"></textarea>
  </div> -->
  
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