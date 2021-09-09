<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-dark" id="ftco-navbar">
	  
<div class="container">
	      <a class="navbar-brand" href="index.html">Sea Shine</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="{{route('home')}}" class="nav-link">
			  <button type="button" class="btn btn-outline-primary">Home</button>
			  </a></li>
			  <li class="nav-item"><a href="{{route('about')}}" class="nav-link">
			  <button type="button" class="btn btn-outline-primary">About</button>
			  </a></li>
	          <li class="nav-item"><a href="{{route('room')}}" class="nav-link">
			  <button type="button" class="btn btn-outline-primary">Rooms</button>
			</a></li>
			  <li class="nav-item"><a href="{{route('booking')}}" class="nav-link">
			  <button type="button" class="btn btn-outline-primary">Booking</button></a></li>
			  <!-- <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
			  <li class="nav-item"><a href="restaurant.html" class="nav-link">Blog</a></li> -->
			  <li class="nav-item"><a href="" class="nav-link">
			  <button type="button" class="btn btn-outline-primary">Payment</button></a></li>


			  @if(auth()->user())
                        <a class="nav-item nav-link" href="{{route('guest.logout')}}">
						<button type="button" class="btn btn-outline-primary">logout</button></a>
                        <a class="nav-item nav-link" href="">
						<button type="button" class="btn btn-outline-primary">{{auth()->user()->name}}</button>
						</a>
                        @else
	          <li class="nav-item"><a href="{{route('user.signup')}}" class="nav-link">
			  <button type="button" class="btn btn-outline-primary">Signup</button>
			  </a></li>
	          <li class="nav-item"><a href="{{route('guest.login')}}" class="nav-link">
			  <button type="button" class="btn btn-outline-primary">Login</button>
			  </a></li>

			  @endif


	        </ul>
	      </div>
	    </div>
        </nav>