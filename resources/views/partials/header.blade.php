<!-- Bootstrap NavBar -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark ">

                  @php 
                  $user = session()->get('users'); 
                  @endphp

  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="{!! url('/dashboard') !!}">
    <img src="images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
    <span class="menu-collapsed">Election Commission Vehicle Management Sysytem - ECVMS</span>
  </a>



  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      
      <!-- This menu is hidden in bigger devices with d-sm-none. 
           The sidebar isn't proper for smaller screens imo, so this dropdown menu can keep all the useful sidebar itens exclusively for smaller screens  -->
      <li class="nav-item dropdown d-sm-block d-md-none">
        <a class="nav-link dropdown-toggle" href="#" id="smallerscreenmenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Menu
        </a>
        <div class="dropdown-menu" aria-labelledby="smallerscreenmenu">
            <a class="dropdown-item" href="{!! url('/dashboard') !!}">Dashboard</a>
            <a class="dropdown-item" href="#">Profile</a>
            <a class="dropdown-item" href="{!! url('/request') !!}">Request</a>
            <a class="dropdown-item" href="{!! url('/recivedrequest') !!}">Received Request</a>
            <a class="dropdown-item" href="{!! url('/users') !!}">Users</a>
            <a class="dropdown-item" href="{!! url('/agency') !!}">Agency</a>
            <a class="dropdown-item" href="{!! url('/vehicles') !!}">Vehicles</a>
            <a class="dropdown-item" href="{!! url('/drivers') !!}">Drivers</a>
            <a class="dropdown-item" href="#">Calender</a>
        </div>
      </li><!-- Smaller devices menu END -->
      
    </ul>
  </div>
  <div class="nav_right">
       @if(!empty($user))
       <a class="btn btn-sm btn-light" ><i class="fa fa-user" aria-hidden="true"></i>&nbsp;{{$user[0]->user_name}}</a>
     
      <a class="btn btn-sm btn-light" href="{!! url('/logout') !!}"><i class="fa fa-sign-out" ></i>&nbsp;Sign Out</a>
      @else
        <a class="btn btn-sm btn-light" href="{!! url('/login') !!}"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;Sign In</a>
      @endif
  </div>

</nav><!-- NavBar END -->
