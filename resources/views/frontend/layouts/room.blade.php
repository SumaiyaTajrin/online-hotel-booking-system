@extends('frontend.master')
@section('slider')
    @include('frontend.partials.slider')
@endsection
@section('contents')
<br></br>
@foreach($rooms as $data )
    			<div class="col-lg-6">
				<a href="{{route('room.details',$data->id)}}">
    				<div class="room-wrap d-md-flex">
					<div class="img"><img width="400px" src="{{url('uploads/'.$data->image)}}"></div>
    					<div class="half left-arrow d-flex align-items-center">
    						<div class="text p-4 p-xl-5 text-center">
    							
    							<p class="mb-0"><span class="price mr-1">{{$data->amount}} BDT</span> <span class="per">per night</span></p>
	    						<h3 class="mb-3"><a href="rooms.html">{{$data->name}}</a></h3>
								
	    						<p class="pt-1"><a href="{{route('room.details', $data->id)}}" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
								
    						</div>
    					</div>
    				</div>
    			</div>
				@endforeach
				@endsection