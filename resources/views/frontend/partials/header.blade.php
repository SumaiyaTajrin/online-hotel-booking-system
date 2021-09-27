<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-secondary ftco-navbar-secondary" id="ftco-navbar">
	  
<div class="container">
	      <a class="navbar-brand" href="index.html">Sea Shine</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="{{route('home')}}" class="nav-link">
			  <button type="button" class="btn btn-outline-light">Home</button>
			  </a></li>
			  <li class="nav-item"><a href="{{route('about')}}" class="nav-link">
			  <button type="button" class="btn btn-outline-light">About</button>
			  </a></li>
	          <li class="nav-item"><a href="{{route('room')}}" class="nav-link">
			  <button type="button" class="btn btn-outline-light">Rooms</button>
			</a></li>
			<li class="nav-item"><a href="#" class="nav-link">
			  <button type="button" class="btn btn-outline-light">Our Service</button>
			</a></li>
			


			  @if(auth()->user())
			  <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw">
					<button type="button" class="btn btn-outline-light">{{auth()->user()->name}}</button>
					</i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                        
                        <li><a class="dropdown-item" href="{{route('details')}}">My Booking Details</a></li>
                        <li><a class="dropdown-item" href="{{route('guest.logout')}}">Logout</a></li>
                    </ul>
			 
			 
			 
			  
            @else
	          <li class="nav-item"><a href="{{route('user.signup')}}" class="nav-link">
			  <button type="button" class="btn btn-outline-light">Signup</button>
			  </a></li>
	          <li class="nav-item"><a href="{{route('guest.login')}}" class="nav-link">
			  <button type="button" class="btn btn-outline-light">Login</button>
			  </a></li>

			  @endif


	        </ul>
	      </div>
	    </div>
        </nav>