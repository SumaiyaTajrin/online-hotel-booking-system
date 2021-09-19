@extends('backend.master')

@section('content')

<h2>Update Roomtype</h2>
<form action="{{route('roomtype.update', $roomtypes->id)}}" method="post" enctype="multipart/form-data">
     @method('PUT')
       @csrf
      
       
       <div class="form-group">
    <label for="name">Name</label>
    <input value="{{$roomtypes->name }}" name= "name" id= "name"type="text" class="form-control"  placeholder="Enter name">
    
  
  <div class="form-group">
    <label for="description">description</label>
    <textarea name="description" id="description" class="form-control" placeholder="Enter product description" >{{$roomtypes->description}}
    </textarea>
  </div>
  
  <div class="form-group">
    <label for="amount">Amount</label>
    <input min="0" value="{{$roomtypes->amount }}"name= "amount" id= "amount"type="number" class="form-control"  placeholder="Enter Amount">
    
  </div>
  <div class="form-group">
    <label for="description">Upload Product Image</label>
    <input type="file" class="form-control" name="room_image">
    </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>

  
</form>
@endsection