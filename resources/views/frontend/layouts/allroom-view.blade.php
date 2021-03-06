@extends('frontend.master')

@section('contents')

@foreach($rooms as $data )

<div class="col-lg-6">
<a href="{{route('room.details',$data->id)}}">
<div class="room-wrap d-md-flex">
<div class="img"><img width="400px" src="{{url('uploads/'.$data->image)}}"></div>
<div class="half left-arrow d-flex align-items-center">
<div class="text p-4 p-xl-5 text-center">
<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
								
<p class="mb-0"><span class="price mr-1">{{$data->amount}} BDT</span> <span class="per">per night</span></p>
<b><div><span class="type">{{$data->roomtype->name}} </span></div></b>
								
<p class="pt-1"><a href="{{route('room.details', $data->id)}}" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
								
</div>
</div>
</div>
</div>
@endforeach





@endsection