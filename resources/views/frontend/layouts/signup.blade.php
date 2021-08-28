@extends('frontend.master')

@section('contents')
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
@if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
<h1>Signup Here</h1>


<form action="{{route('user.signup.store')}}" type="form" method="post">
      @csrf
  
    <div class="form-group col-md-6">
      <label for="name">name</label>
      <input name="name" type="text" class="form-control" id="name" placeholder="Enter Your Name">
    </div>
    <div class="form-group col-md-6">
      <label for="email">email</label>
      <input name="email"type="email" class="form-control" id="inputEmail4" placeholder="Enter Your Email">
    </div>
    <div class="form-group col-md-6">
      <label for="Password">password</label>
      <input name="password" type="password" class="form-control" id="Password" placeholder="Enter Your Password">
    </div>
    
    <div class="form-group col-md-6">
    <label for="contact_no">contact_no</label>
    <input name="contact_no"type="number" class="form-control" id="contact_no" placeholder="Enter Your Contact No">
    </div>
    <div class="form-group col-md-6">
    <label for="inputAddress">address</label>
    <input name="address" type="text" class="form-control" id="inputAddress" placeholder="Enter Your Address">
    </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<div class="col-md-3"></div>




@endsection