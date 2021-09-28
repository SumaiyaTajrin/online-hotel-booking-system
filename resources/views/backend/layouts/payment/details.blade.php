@extends('backend.master')

@section('content')
<h1>Payment Details</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Method</th>
      <th scope="col">Amount</th>
      <th scope="col">Comments</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  @foreach($payments as $key=>$data)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->method}}</td>
      <td>{{$data->amount}}</td>
      <td>{{$data->comments}}</td>
      <td>{{$data->status}}</td>
     
      
    </tr>
    @endforeach
    
  </tbody>
</table>



@endsection