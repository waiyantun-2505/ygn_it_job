<!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/fontawesome/css/all.min.css')}}">



</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light nav_color">
<a class="navbar-brand text-warning" href="#"><h2>YGN IT JOBS</h2></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse py-2" id="navbarNavAltMarkup">
	<div class="navbar-nav ml-auto">
	  <a class="nav-item nav-link active text-white mx-3 my-auto" href="{{route('index')}}">Home <span class="sr-only">(current)</span></a>
	  <a class="nav-item nav-link text-white mx-3 my-auto" href="{{route('alljobs')}}">Find Jobs</a>
	  <a href="" class="btn btn-warning mx-3 my-auto">Our Partner Company</a>
	  <div class="my-auto">
	  
	  <!-- </div> -->

	  <!-- start testing -->
	  <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
					
                    </ul>
					
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('seekers.create') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        
                            <li class="nav-item dropdown">
                                


                                <a id="navbarDropdown" class="text-white nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                @php
                                 $seekers = DB::table('seekers')->where('user_id',Auth::user()->id)->get();
                                 @endphp    
                                 @foreach($seekers as $seeker)
                                <img src="{{$seeker->photo}}" class="img-fluid my-auto ml-4" width="30px" height="30px;" style="border-radius: 10px; object-fit: cover;">
                                @endforeach
                                    
                                </a>


                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <div>
                                    <label class="size_11 text-center dropdown-item">{{ Auth::user()->name }}</label> 
                                    </div>

                                    <a class="dropdown-item" href="{{ route('seekers.index',Auth::user()->id)}}">
                                        <i class="far fa-id-card mr-2"></i><label class="size_11">View Profile</label>
                                    </a>


                                    <a class="dropdown-item" href="{{ route('seekers.edit',Auth::user()->id)}}">
                                        <i class="fas fa-user-cog mr-2"></i><label class="size_11">Update Profile</label>
                                    </a>


                                    <a class="dropdown-item" href="{{ route('changepassword',Auth::user()->id)}}">
                                        <i class="fas fa-key mr-2"></i><label class="size_11">Change Password</label>
                                    </a>


                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt mr-2"></i><label class="size_11">{{ __('Logout') }}</label>
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
                <!-- end testing -->

            </div>
	  


	  
</div>
</nav> <!-- end nav -->


@yield('content')



    <!-- footer -->
    <div class="container-fluid footer">
    	<div class="row">
    			<div class="col-lg-4 col-md-4 mt-4">
    				<h2 class="text">Who We Are</h2>
    				<p class="text text-justify mt-3">
    					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    				</p>
    			</div>
    			<div class="col-lg-2 col-md-2 mt-4 text">
    				<h2 class="text">Job Seekers</h2>
    				<ul>
    					<li><a href="" class="link">Register Here</a></li>
    					<li><a href="" class="link">Log In</a></li>
    					<li><a href="" class="link">Find Jobs</a></li>
    				</ul>
    			</div>
    			<div class="col-lg-2 col-md-2 mt-4 text">
    				<h2 class="text">About Us</h2>
    				<ul>
    					<li><a href="" class="link">Register Here</a></li>
    					<li><a href="" class="link">Log In</a></li>
    					<li><a href="" class="link">Find Jobs</a></li>
    				</ul>
    			</div>
    			<div class="col-lg-4 col-md-4 mt-4 text">
    				<h2 class="text">Contact Us</h2>
	    				<div class="row">
	    					<div class="col-lg-1 col-md-1">
	    					<i class="fas fa-map-marker-alt fa-2x"></i>
	    				</div>
	    				<div class="col-lg-10 col-md-10 offset-md-1 mb-3">
	    					<p>23A, Shangone Street, Myaynigone, San Chaung Township, Yangon, Myanmar</p>
	    				</div>

	    				
	    				<div class="col-lg-1 col-md-1">
	    					<i class="fas fa-phone fa-2x"></i>
	    				</div>
	    				<div class="col-lg-10 col-md-10 offset-md-1 mb-3">
	    					<p>+959629957000</p>
	    					<p>+959629957000</p>
	    					<p>+959629957000</p>
	    				</div>

	    				<div class="col-lg-1 col-md-1">
	    					<i class="fas fa-envelope-open-text fa-2x"></i>
	    				</div>
	    				<div class="col-lg-10 col-md-10 offset-md-1 mb-3">
	    					<p>ygnitjob@gmail.com</p>
	    				</div>

	    				<div class="col-lg-1 col-md-1">
	    					<i class="far fa-clock fa-2x"></i>
	    				</div>
	    				<div class="col-lg-10 col-md-10 offset-md-1 mb-3">
	    					<p>Mon - Fri : 9:00 AM - 06:00 PM</p>
	    					<p>Saturday : 9:00 AM - 01:00 PM</p>
	    				</div>
	    				 
    				</div>
    			</div>
    		
    	</div>
    </div>

    <!-- JQ -->
<script type="text/javascript" src="{{asset('frontend/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>

<script type="text/javascript" src="{{asset('frontend/js/custom.js')}}"></script>



@yield('script')


</body>
</html>