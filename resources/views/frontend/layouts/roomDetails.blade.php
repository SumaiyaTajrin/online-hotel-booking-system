
@extends('frontend.master')

@section('contents')

<section class="ftco-section">
<div class="container">
<div class="row">
<div class="col-lg-8">
<div class="row">
                  
<div class="col-md-12 ftco-animate">
<div class="single-slider owl-carousel">
<div class="item">
<img src="{{url('/uploads/'.$roomtypes->image)}}" alt="">
</div>
          				
          				
</div>
</div>
<div class="col-md-12 room-single mt-4 mb-5 ftco-animate">
<h1><h2><div class="room_name">{{$roomtypes->roomtype->name}}</h2></h1>
<h2><div> <span class="amount">BDT {{$roomtypes->amount}}</span></div></h2>

<h2><div><p>Room Type: <span class="type">{{$roomtypes->type}} </span></div></h2></p>

<!-- amenities here -->



 <h2><div> <p>No Of Accomodate: <span class="type">{{$roomtypes->no_accomodate}}</span></div></h2></p>
<h2> Room Includes</h2>
@foreach($roomtypes->roomamenities as $data)

<h2><span class="badge alert-success">{{$data->amenity->name}}</span></h2>
@endforeach
</div>
<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
<div class="d-md-flex mt-5 mb-5">
<ul class="list">
	    							
<li><span>Size:</span> 45 m2</li>
</ul>
<ul class="list ml-md-5">
<li><span>View:</span> Sea View</li>
<li><span>Bed:</span> 1</li>
</ul>
                  
</div>
<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
</div>
          		
<br></br>
<a href="{{route('booking',$roomtypes->id )}}" class="btn btn-primary py-5 py-md-3 px-4 align-self-stretch d-block"><span>Book Now </span></a>
<br></br>

              


</div>
</div>
</div>
</div>
</div> <!-- .col-md-8 -->
          
            
</div>
</div>
</div>
</section> <!-- .section -->

 @endsection
