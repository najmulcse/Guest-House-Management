      <!--Fixed Navigation bar started-->
<div class="navbar navbar-default navbar-inverse navbar-fixed-top">

    <div class="container">

      <a class="navbar-brand" href="#"><img src="img/Rajshahi-University-logo.jpg" width="35px" height="35px"/></a>
      <a class="navbar-brand" href="#">RU Guest House </a>

      <div class="collapse navbar-collapse" id="app-navbar-collapse">

                     <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                        @if (Auth::user())
                        <li><a href="{{url('/check')}}">Booking</a>
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Auth::user()->name}} <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                              <li><a href="{{url('/logout')}}">Logout</a></li>
                            </ul>
                          </li>
                        @else
                          <li><a href="{{url('/login')}}">Login</a></li>
                          <li><a href="{{url('/register')}}">Register</a></li>
                        @endif
                      </ul>

                </div>
    </div>

</div>

      <!--Fixed Navigation bar ended-->
