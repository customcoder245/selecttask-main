<!-- Header -->
    <header class="site-header">
        <nav class="navbar navbar-expand-lg justify-content-center">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/index')}}"><img src="{{ url('/public/frontend')}}/assets/images/logo.svg" alt="" class="img-fluid 55555" /></a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav navbar-main">
                        <li class="nav-item">
                            <a class="nav-link post_a_task1" href="posttask-step1">Post a Task</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ route('service-locations')}}" id="serviceDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                            <div class="dropdown-menu" aria-labelledby="serviceDropdown">
                                <ul>
								@php
								 $cs='';
									   if(isset($_GET['cat'])){
										   $cs=$_GET['cat'];
									   }
									   $cs=40;
		                             @endphp
								    <li><a class="dropdown-item @if($cs==1) active @endif" href="{{ route('posttask-step1')}}?cat=1">Heating &amp; Cooling</a></li>
                                    <li><a class="dropdown-item @if($cs==2) active @endif" href="{{ route('posttask-step1')}}?cat=2">Handyman</a></li>
									<li><a class="dropdown-item @if($cs==3) active @endif" href="{{ route('posttask-step1')}}?cat=3">General Contracting</a></li>
									<li><a class="dropdown-item @if($cs==4) active @endif" href="{{ route('posttask-step1')}}?cat=4">Painting</a></li>
                                    
                                    <li><a class="dropdown-item @if($cs==5) active @endif" href="{{ route('posttask-step1')}}?cat=5">Plumbing</a></li>
									<li><a class="dropdown-item @if($cs==6) active @endif" href="{{ route('posttask-step1')}}?cat=6">Roofing</a></li>
                                    <li><a class="dropdown-item @if($cs==7) active @endif" href="{{ route('posttask-step1')}}?cat=7">Electric</a></li>
                                    <li><a class="dropdown-item @if($cs==8) active @endif" href="{{ route('posttask-step1')}}?cat=8">Carpentry</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ route('service-locations')}}" id="locationDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Service Locations</a>
                            <div class="dropdown-menu" aria-labelledby="locationDropdown">
                                <ul>
                                    <li><a class="dropdown-item" href="{{ route('Services-Location-TheBronx')}}">The Bronx</a></li>
                                    <li><a class="dropdown-item" href="{{ route('Services-Location-Brooklyn')}}">Brooklyn</a></li>
                                    <li><a class="dropdown-item" href="{{ route('Services-Location-Queens')}}">Queens</a></li>
                                    <li><a class="dropdown-item" href="{{ route('Services-Location-StatenIsland')}}">Staten Island</a></li>
                                    <li><a class="dropdown-item" href="{{ route('Services-Location-Manhattan')}}">Manhattan</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="HowitWorksDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">How it Works</a>
                            <div class="dropdown-menu" aria-labelledby="HowitWorksDropdown">
                                <ul>
                                    <li><a class="dropdown-item" href="{{ route('HowitWorks-customer')}}">Customer</a></li>
                                    <li><a class="dropdown-item" href="{{ route('HowitWorks-ServiceProviders')}}">Provider</a></li>                                   
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-right ml-auto align-items-center">
                       @if (!Auth::check()) <li class="nav-item">
                            <a class="nav-link nav-link-sm d-flex align-items-center" href="{{ url('/')}}/login">
                                <svg width="16" height="21" class="icon align-baseline mr-2">
                                <use xlink:href="#lock-icon" ></use>
                            </svg>Log In</a>
                        </li>
						@endif
                        <li class="nav-btn become_a_pro">
                            <a class="btn btn-primary btn-sm " href="{{ route('Get-Jobs-NYC')}}">Become a Pro</a>
                        </li>
						@if (Auth::check())
							@php 
							$user_id=Auth::user()->id;
						    $backend_link='#';
						     $image_url='';
							if(Auth::user()->isCustomer()){
								$image_url=user_profile_image_url($user_id);
								$backend_link= route('task-list');
							}elseif(Auth::user()->isServiceprovider()){
								$backend_link=route('provider-tasks-list');
							$image_url=get_profile_image_src($user_id);
							}elseif(Auth::user()->isAdmin()){
								$image_url=get_admin_profile_image($user_id);
								$backend_link=route('admin-task-list');
							}
							
							@endphp
							
						<li class="nav-item dropdown mr-0">
                            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="HowitWorksDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="userPic">
							<img src="{{  $image_url }}" alt=""></span>{{ Auth::user()->name }}</a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="HowitWorksDropdown">
                                <ul>
                                    <li><a class="dropdown-item" href="{{ $backend_link }}">Dashboard</a></li>
                                     <li class="logoutLink1">
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span class="linkIcon"><svg width="16.047" height="14.643">
                        <use xlink:href="#logout-icon" ></use>
                    </svg></span> <span class="linkText">Logout</span></a>
					
					
					<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                </li>                                  
                                </ul>
                            </div>
                        </li>
						@endif
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- //Header -->