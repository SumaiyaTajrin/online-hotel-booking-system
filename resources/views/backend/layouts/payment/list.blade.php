@extends('backend.master')

@section('content')

<h1>Enter Details</h1>
<form action="{{route('payment.details')}}" method="post">
    @csrf
    <div class="form-group col-md-6">
      <label for="method">Method</label>
      <input required name="method" type="text" class="form-control" id="method" placeholder="Enter method" >  
    </div>  

  <div class="form-group">
    <label for="amount">Amount</label>
    <input required name="amount" type="text" class="form-control" id="amount" placeholder="Enter Amount" > 
  </div>
  <div class="form-group">
    <label for="comments">Comments</label>
    <input required name="comments"type="text" class="form-control" id="comments" placeholder="Give comments" >
  </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection