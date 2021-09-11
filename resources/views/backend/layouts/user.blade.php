@extends('backend.master')

@section('content')

<h1>User List</h1>
<table class="table">
  <thead>
    <tr>
    <th scope="col">#</th>
            <th scope="col">User Name</th>
            <th scope="col">Email</th>
            <th scope="col">Type</th>
            <th scope="col">Contact No</th>
            <th scope="col">Address</th>
            <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($user as $key=>$data)
    <tr>
    <th scope="row">{{$key+1}}</th>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->role}}</td>
            <td>{{$data->contact_no}}</td>
            <td>{{$data->address}}</td>
            <td>view</td>
    </tr>
   @endforeach
  </tbody>
</table>
@endsection