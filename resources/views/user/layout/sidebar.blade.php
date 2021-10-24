@if(Request::segment(2)!=='signups')
<aside class="userLeft">
        <div class="upperRow flex-grow-1">
            <a href="{{ url('index')}}" class="siteLogo" target="_blank"><img src="{{ url('/public/user/assets/images/logo.svg')}}" alt=""></a>
            <div class="userBio">
			
						   @php
						   $user_id=Auth::user()->id;
						   
						   @endphp
						   @if(Auth::user()->isCustomer())
                     <img src="{{user_profile_image_url($user_id)}}" alt="">
					@elseif(Auth::user()->isServiceprovider())
					<img src="{{get_profile_image_src($user_id)}}" alt="">
					@endif
                <p>
				
				{{ Auth::user()->name }}
				</p>
            </div>

            <div class="postTaskMob text-center mb-3"><a href="post-task.html" class="btn btn-sm btn-primary">+ <span>Post a Task</span></a></div>

            <ul class="sideLinks">
			 @if(Auth::user()->isCustomer())
                <li>
                    <a href="{{ route('task-list')}}" class="@if(Request::segment(2)=='task-list') active @endif"><span class="linkIcon"><svg width="12.8" height="20.3">
                        <use xlink:href="#taskLisk-icon" ></use>
                    </svg></span> <span class="linkText">Task List</span></a>
                </li>
                 @elseif(Auth::user()->isServiceprovider())
				 <li>
                    <a href="{{ route('provider-tasks-list')}}"  class="@if(Request::segment(2)=='provider-tasks-list') active @endif"><span class="linkIcon"><svg width="16" height="16">
                        <use xlink:href="#provider-taskLisk-icon" ></use>
                    </svg></span> <span class="linkText">Task List</span></a>
                </li>
                <li>
                    <a href="{{ route('provider-service-settings')}}"  class="@if((Request::segment(2)=='provider-service-settings') || (Request::segment(2)=='provider-location-settings')) active @endif"><span class="linkIcon"><svg width="18.231" height="18.231">
                        <use xlink:href="#ServiceSettings-icon" ></use>
                    </svg></span> <span class="linkText">Service Settings</span></a>
                </li>               
                <li>
                    <a href="{{ route('provider-transaction-history')}}"  class="@if(Request::segment(2)=='provider-transaction-history') active @endif" ><span class="linkIcon"><svg width="18" height="11">
                        <use xlink:href="#TransactionHistory-icon"></use>
                    </svg></span> <span class="linkText">Transaction History</span></a>
                </li>
				 
				 @endif
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
        <div class="dateWidget text-center">
            <p class="dateRow">17 September, 2020</p>
            <p class="timeRow">06 : 23 PM</p>
        </div>
    </aside>
	<div class="mob-overlay" onclick="myFunction()"></div>
	
     <div class="filter-overlay" onclick="myFilters()"></div>
	@endif