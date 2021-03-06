@extends('backend.master')

@section('content')

<h1>room list</h1>
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Enter Details
</button>
<br></br>
<table class="table">
  <thead>
  <tr class="table-danger">
  <th scope="col">Sl</th>
            <th scope="col">Room image</th>
            <th scope="col">Roomtype Name</th>
            <th scope="col">Amenities Name</th>
            <th scope="col">Room Number</th>
            <th scope="col">Room Type</th>
            <th scope="col">Accomodate</th>
            <th scope="col">Amount</th>
            
            </tr>
  </thead>
  <tbody>
  @foreach($rooms as $room)
  
    <tr >
       <th scope="row">{{$room->id}}</th>
      <td>
                <img src="{{url('/uploads/'.$room->image)}}" width="100px" alt="room image">
            </td>
            <td>{{$room->roomtype->name}}</td>


            <td>
            @foreach($room->roomamenities as $data)

            <span class="badge alert-success">{{$data->amenity->name}}</span>
            @endforeach
            </td>

            <td>{{$room->room_number}} </td>
            <td>{{$room->type}} </td>
            <td>{{$room->no_accomodate}} </td>
            <td>{{$room->amount}} .BDT</td>
            
    </tr>
    @endforeach
  </tbody>
</table>

{{$rooms->links('pagination::bootstrap-4')}}

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

<form action="{{route('room.store')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
        <label for="name">Select Roomtype</label>
        <select class="form-control" name="roomtype_id" id="">
        @foreach($roomtypes as $roomtype)
        <option value="{{$roomtype->id}}">{{$roomtype->name}}</option>
        @endforeach
        </select>
       </div> 

       <div class="form-group">
        <label for="name">Select Amenities</label>
        <select multiple="multiple" class="form-control" name="amenities_id[]" id="">
        @foreach($amenities as $data)
        <option value="{{$data->id}}">{{$data->name}}</option>
        @endforeach
        </select>
       </div>

     
  

       <div class="form-group">
    <label for="room_number">Room Number</label>
    <input required min="0" name= "room_number" id= "room_number"type="number" class="form-control"  placeholder="Enter Room Number">
    
  </div>

  <b> <p>Type</p></b>
        <input type="radio" id="AC" name="type" value="AC">
        <b><label for="ac">AC</label><br></b>
        <input type="radio" id="Non_ac" name="type" value="Non AC">
        <b><label for="Non_ac">Non Ac</label><br></b>



       <div class="form-group">
    <label for="amount">Amount</label>
    <input required min="0" name= "amount" id= "amount"type="number" class="form-control"  placeholder="Enter Amount">
    
  </div>

  <div class="form-group">
    <label for="a">no_accomodate</label>
    <input required min="1" name="accomodate" type="number" class="form-control" id="a" aria-describedby="emailHelp" placeholder="Enter no of accomodate">
    
  </div>
   <div class="form-group">
  <label for="d">Description</label>
  <textarea class="form-control" name="description" id="d" placeholder="Enter Description"></textarea>
  </div>

  <div class="form-group">
    <label for="description">Upload room Image</label>
    <input required type="file" class="form-control" name="room_image">
    </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form> 
</div>
  <div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
 
  </div>
    </div>
  </div>
</div>
@endsection