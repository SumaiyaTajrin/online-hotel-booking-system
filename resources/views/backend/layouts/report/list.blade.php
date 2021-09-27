@extends('backend.master')

@section('content')
<h1>booking list</h1>
  <form action="{{route('report.list')}}" method="get">
      
<div class="row" style="padding-left: 100px;padding-top: 10px;">

    <div class="col-md-4">
        <input name="from_date" type="date" class="form-control">
    </div>
    <div class="col-md-4">
        <input name="to_date" type="date" class="form-control">
    </div>
    <div class="col-md-4">
        <button class="btn btn-primary">Search</button>
    </div>



</div>
    </form> 


<div>
    <!-- Button trigger modal -->
<button class="btn btn-primary" onclick="printDiv('printableArea')">

    <i class="bi bi-printer"></i> Print
</button>
    </div>
   <div id="printableArea">
<br>




<table class="table">
  <thead>
    <tr class="table-danger">
      <th scope="col">Sl</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
     
      <th scope="col">Check In Date</th>
      <th scope="col">Check Out Date</th>
      <th scope="col">No Of Guest</th>
      <th scope="col">Room Quantity</th>
      <th scope="col">Contact No</th>
      <th scope="col">Address</th>
      <th scope="col">Status</th>
      
      
    </tr>
  </thead>
  <tbody>
  @foreach($bookings as $key=>$data)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
     
      <td>{{$data->from_date}}</td>
      <td>{{$data->to_date}}</td>
      <td>{{$data->no_of_guest}}</td>
      <td>{{$data->room_quantity}}</td>
      <td>{{$data->contact_no}}</td>
      <td>{{$data->address}}</td>
      <td>{{$data->status}} </td>
      
    </tr>
    @endforeach

  </tbody>
</table>
</div>

<script type="text/javascript">
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>

@endsection