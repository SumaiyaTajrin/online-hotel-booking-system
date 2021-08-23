@extends('backend.master')

@section('content')

<h1> Room Type</h1>

<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
  Enter Details
</button>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
      <!-- <th scope="col"></th> -->
    </tr>
  </thead>
  <tbody>
  @foreach($roomtypes as $roomtype)
    <tr>
      < <th scope="row">{{$roomtype->id}}</th>
            <td>{{$roomtype->name}}</td>
            
            <td>{{$roomtype->status}} </td>
            <td>
            <a href="{{route('roomtype.room',$roomtype->id)}}" class="btn btn-primary">view room</a>
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

      <form action="{{route('roomtype.store')}}" method="post">
       @csrf
      
       
       <div class="form-group">
    <label for="name">Name</label>
    <input name= "name" id= "name"type="text" class="form-control"  placeholder="Enter name">
    
  
  <div class="form-group">
    <label for="description">description</label>
    <input name="description" id="description" class="form-control"  placeholder="Enter description">
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