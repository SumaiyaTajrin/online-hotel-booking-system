@extends('backend.master')

@section('content')

<h1>Users Details</h1>

<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
  Enter Details
</button>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
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
        
      <form action="{{route('user.store')}}" method="post">
        @csrf
  
    <div class="form-group col-md-6">
      <label for="name">name</label>
      <input name="customer_name" type="text" class="form-control" id="name" placeholder="Enter Name">
    </div>
    <div class="form-group col-md-6">
      <label for="email">email</label>
      <input name="email"type="email" class="form-control" id="inputEmail4" placeholder="Enter Email">
    </div>
    <div class="form-group col-md-6">
      <label for="Password">password</label>
      <input name="password" type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  <div class="form-group">
    <label for="inputAddress">address</label>
    <input name="address" type="text" class="form-control" id="inputAddress" placeholder="Enter Address">
  </div>
  <div class="form-group">
    <label for="inputAddress2">contact_no</label>
    <input name="contact_no"type="number" class="form-control" id="contact_no" placeholder="Enter Contact No">
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