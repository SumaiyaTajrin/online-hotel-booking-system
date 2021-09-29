@extends('backend.master')

@section('content')
<h1>Payment Details</h1>

<table class="table">
  <thead>
    <tr class="table-danger">
      <th scope="col">Sl</th>
      
      <th scope="col">Method</th>
      <th scope="col">Amount</th>
      <th scope="col">Advance</th>
      <th scope="col">Due</th>
      <th scope="col">Comments</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($payments as $key=>$data)
    <tr>
      <th scope="row">{{$key+1}}</th>
     
      <td>{{$data->method}}</td>
      <td>{{$data->amount}}</td>
      <td>{{$data->advance_payment}}</td>
      <td>{{$data->due_payment}}</td>
      <td>{{$data->comments}}</td>
      <td>{{$data->status}}</td>
      <td><a href="{{route('payment.paid',$data->id)}}" class="btn btn-info">Paid</a><br></br></td>
      
    </tr>
    @endforeach
    
  </tbody>
</table>



@endsection