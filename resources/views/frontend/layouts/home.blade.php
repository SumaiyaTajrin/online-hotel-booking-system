
@extends('frontend.master')
@section('slider')
    @include('frontend.partials.slider')
@endsection
@section('contents')

@if(session()->has('message'))
        <div class="row" style="padding: 10px;">
            <span class="alert alert-danger">{{session()->get('message')}}</span>
        </div>
    @endif


<section class="ftco-booking ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
         <div class="row">
        <div class="col-lg-12 pr-1 aside-stretch">
                <form action="{{route('date.search')}}" method="post" class="booking-form">
           @csrf
          <div class="row">
              <div class="col-md d-flex py-md-4">
                 <div class="form-group align-self-stretch d-flex align-items-end">
                 <div class="wrap bg-white align-self-stretch py-3 px-4">
                 <label for="#">Check-in Date</label>
                 <input type="text" name="from_date" class="form-control checkin_date" placeholder="Check-in date">
            </div>
           </div>
        </div>
<div class="col-md d-flex py-md-4">
     <div class="form-group align-self-stretch d-flex align-items-end">
          <div class="wrap bg-white align-self-stretch py-3 px-4">
                 <label for="#">Check-out Date</label>
                 <input type="text" name="to_date" class="form-control checkout_date" placeholder="Check-out date">
            </div>
     </div>
</div>
<div class="col-md d-flex py-md-4">
<div class="form-group align-self-stretch d-flex align-items-end">
<div class="wrap bg-white align-self-stretch py-3 px-4">
<div class="col-md d-flex">
<div class="form-group d-flex align-self-stretch">
<h6><button  type="submit" class="btn btn-primary">Check Availibility</button></h6>
</div>
</div>
</div>
</div>
		              
	        			
</div>
</div>
</form>
</div>
</div>
</div>
</section>



		

    <section class="ftco-section bg-light ftco-room">
    	<div class="container-fluid px-0">
    		<div class="row no-gutters justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Sea Shine Rooms</span>
            <h2 class="mb-4">Sea Shine Hotel Rooms</h2>
          </div>
        </div>  
    		<div class="row no-gutters">
    			<div class="col-lg-6">
    				<div class="room-wrap">
    					<div class="img d-flex align-items-center" style="background-image: url(frontend/images/bg_3.jpg);">
    						<div class="text text-center px-4 py-4">
    							<h2>Welcome to <a href="index.html">Sea Shine</a> Hotel</h2>
    							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
    						</div>
    					</div>
    				</div>
    			</div>
				@foreach($roomtypes as $data )
				
    			<div class="col-lg-6">
				<a href="{{route('allroom' ,$data->id)}}">
    				<div class="room-wrap d-md-flex">
					<div class="img"><img width="400px" src="{{url('uploads/'.$data->image)}}"></div>
    					<div class="half left-arrow d-flex align-items-center">
    						<div class="text p-4 p-xl-5 text-center">
    							
    							
	    						<h3 class="mb-3"><a href="rooms.html">{{$data->name}}</a></h3>
								
	    						<p class="pt-1"><a href="{{route('allroom' ,$data->id)}}" class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
								
    						</div>
    					</div>
    				</div>
    			</div>
				@endforeach
    			
    		</div>
    	</div>
    </section>

	

    
@endsection