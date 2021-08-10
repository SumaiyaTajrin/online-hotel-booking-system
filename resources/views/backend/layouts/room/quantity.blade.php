@extends('backend.master')

@section('content')

<h1>room quantity</h1>

<form>
  <div class="form-group">
    <label for="room">room type</label>
    <input type="room" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Type">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">room id</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter id">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection