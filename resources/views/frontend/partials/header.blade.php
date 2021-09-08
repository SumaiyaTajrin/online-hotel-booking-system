<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-dark" id="ftco-navbar">
	  
<div class="container">
	      <a class="navbar-brand" href="index.html">Sea Shine</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="{{route('home')}}" class="nav-link">Home</a></li>
			  <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="{{route('room')}}" class="nav-link">Rooms</a></li>
			  <li class="nav-item"><a href="about.html" class="nav-link">Booking</a></li>
			  <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
			  <li class="nav-item"><a href="restaurant.html" class="nav-link">Blog</a></li>



			  @if(auth()->user())
                        <a class="nav-item nav-link" href="{{route('guest.logout')}}">Logout</a>
                        <a class="nav-item nav-link" href="">{{auth()->user()->name}}</a>
                        @else
	          <li class="nav-item"><a href="{{route('user.signup')}}" class="nav-link">Signup</a></li>
	          <li class="nav-item"><a href="{{route('guest.login')}}" class="nav-link">Login</a></li>

			  @endif


	        </ul>
	      </div>
	    </div>
        </nav>