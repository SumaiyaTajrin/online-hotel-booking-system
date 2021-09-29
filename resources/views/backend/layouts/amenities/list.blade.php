@extends('backend.master')

@section('content')

<h1>Amenities list</h1>

<!-- Button trigger modal -->
<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
  Create New Amenities
</button><br></br>
<table class="table">
  <thead>
    <tr  class="table-danger">
      <th scope="col">Sl</th>
      <th scope="col">Name</th>
      
      <th scope="col">Status</th>
      <th scope="col">Action</th>
     
    </tr>
  </thead>
  <tbody>
  @foreach($amenities as $key=>$data)
    <tr>
    <th scope="row">{{$key+1}}</th>
      <td>{{$data->name}}</td>
  
      <td>{{$data->status}} </td>
      <td>
            <a href="{{route('amenities.edit',$data->id)}}"  class="btn btn-info">edit </a>
            <a onclick="return confirm('Are you sure you want to delete this room?');" href="{{route('amenities.delete',$data->id)}}" class="btn btn-danger">delete</a>
           
        </td>
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

      <form action="{{route('amenities.store')}}" method="post" >
        @csrf
  <div class="form-group">
    <label for="name">Amenities name</label>
    <input required name= "amenities_name" id= "name"type="text" class="form-control"  placeholder="Enter Amenities">
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