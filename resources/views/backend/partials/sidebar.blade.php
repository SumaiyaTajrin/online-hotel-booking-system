<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
        @if(auth()->user()->role=='admin')
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
            <span data-feather="users"></span>
              {{auth()->user()->name}}
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('dashboard')}}">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
         
          
            <li class="nav-item">
            <a class="nav-link" href="{{route('hotel.info')}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
            </svg>
            Hotel
            </a>
            </li>


          <li class="nav-item">
            <a class="nav-link" href="{{route('user.list')}}">
              <span data-feather="users"></span>
              Users
            </a>
            </li>


            <li class="nav-item">
            <a class="nav-link" href="{{route('guest.list')}}">
              <span data-feather="users"></span>
              Guest
            </a>
            </li>


            <li class="nav-item">
            <a class="nav-link" href="{{route('roomtype.list')}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
            </svg>
            roomtype
            </a>
            </li>


           <li class="nav-item">
            <a class="nav-link" href="{{route('room.quantity')}}">
              
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
            </svg>
            rooms
            </a>
            </li>
         
          

           <li>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts3" aria-expanded="false" aria-controls="collapseLayouts3">
            <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
            Booking
           <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts3" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav">
                                    
            <a class="nav-link" href="{{route('booking.list')}}">Booking List</a>
            <a class="nav-link" href="{{route('approve.list')}}">Approved List</a>
            <a class="nav-link" href="{{route('disapprove.list')}}">Disapproved List</a>
                                    
            </nav>
            </div>
            </li>

            </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('amenities.list')}}">
            <span data-feather="users"></span>
            Amenities
            </a>
            <li>

            <li class="nav-item">
            <a class="nav-link" href="{{route('payment.list')}}">
            <span data-feather="file"></span>
            Payments
            </a>
            <li>


          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('report.list')}}">
            <span data-feather="file"></span>
            Reports
            </a>
          </li> 
          @endif
            
         
        </ul>

        
      </div>
    </nav>