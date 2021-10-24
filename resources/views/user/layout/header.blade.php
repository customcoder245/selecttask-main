@if(Request::segment(2)=='signups')
<header class="adminHeader d-flex">
        <a class="navbar-brand site-Logo" href="{{ url('index')}}" target="_blank">
		<img src="{{ url('/public/user/assets/images/logo.svg')}}" alt="" class="img-fluid 4444"></a>
        <ul class="mainNav-1 ml-auto d-flex">
            <li class="dropdown">@php
						   $user_id=Auth::user()->id;
						    $image_url=get_profile_image_src($user_id);
						   @endphp
                <a href="javascript:void(0)" class="rightImg" type="button" id="profileimgButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<span class="rightImg">
				
				<img src="{{ $image_url }}" alt="">
				
				</span></a>
				  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profileimgButton">
				   <ul class="submenuLinks">
				   <li class="logoutLink">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
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
			
			
        </ul>
    </header>
	
@else
<section class="rightSection">
 <header class="adminHeader d-flex">
            <a href="javascript:void(0)" onclick="myFunction()" class="hamburgerIcon d-lg-none d-block"><img src="{{ url('/public/user/assets/images/hamburger.svg')}}" alt=""></a>
            <ul class="mainNav ml-auto d-flex">
			 @if(Auth::user()->isCustomer())
                <li class="postTaskMob"><a href="{{ route('post-task')}}" class="btn btn-sm btn-primary">+ <span>Post a Task</span></a></li>                
                @elseif(Auth::user()->isServiceprovider())
				<li class="postTaskMob taskSearch"><a href="{{ route('provider-search-task')}}" class="btn btn-sm btn-primary"><img src="{{ url('/public/user/')}}/assets/images/search.svg" alt="" class="d-inline-block d-md-none searchIcon"><span>Search Task</span></a></li>
				@endif
				<li class="dropdown">
                    <a href="javascript:void(0)" class="rightImg" type="button" id="profileimgButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					 
					  @if(Auth::user()->isCustomer())
					 @php
						   $user_id=Auth::user()->id;
						    $image_url=user_profile_image_url($user_id);
						   @endphp
					<img src="{{ $image_url}}" alt="">
					@elseif(Auth::user()->isServiceprovider())
					 @php
						   $user_id=Auth::user()->id;
						    $image_url=get_profile_image_src($user_id);
						   @endphp
					<img src="{{ $image_url}}" alt="">
					@endif
					</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profileimgButton">
                        <ul class="submenuLinks">
						 @if(Auth::user()->isCustomer())
                            <li><a href="{{ route('profile')}}"><span class="profileIcons"><svg width="12.8" height="20.3">
                                <use xlink:href="#myProfile-icon" ></use>
                            </svg></span> My Profile</a></li>
                            <li><a href="{{ route('notification-setting')}}"><span class="profileIcons"><svg width="18" height="18">
                                <use xlink:href="#mySettings-icon" ></use>
                            </svg></span> Notification settings</a></li>
							@elseif(Auth::user()->isServiceprovider())
							
							<li><a href="{{ route('provider-my-profile')}}"><span class="profileIcons"><svg width="12.8" height="20.3">
                                <use xlink:href="#myProfile-icon" ></use>
                            </svg></span> My Profile</a></li>
                            <li><a href="{{ route('provider-company-info')}}"><span class="profileIcons"><svg width="17.384" height="17.257">
                                <use xlink:href="#CompanyInformation-icon" ></use>
                            </svg></span> Company Information</a></li>
                            <li><a href="{{ route('provider-notification-settings')}}"><span class="profileIcons"><svg width="18" height="18">
                                <use xlink:href="#mySettings-icon" ></use>
                            </svg></span> Notification settings</a></li>
							
							@endif
							
                        </ul>                
                    </div>
                </li>
            </ul>
        </header>

@endif