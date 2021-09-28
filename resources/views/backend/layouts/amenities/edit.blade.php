@extends('backend.master')

@section('content')

<h2>Update Roomtype</h2>
<form action="{{route('amenities.update',$amenities->id)}}" method="post" enctype="multipart/form-data">
     @method('PUT')
       @csrf
       <div class="form-group">
    <label for="name">Amenities name</label>
    <input name= "amenities_name" id= "name"type="text" class="form-control"  placeholder="Enter Amenities">
</div>


  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection