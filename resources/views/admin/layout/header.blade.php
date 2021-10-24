<body class="sb-nav-fixed">
@php
$user_id=Auth::user()->id;
@endphp

      <div class="se-pre-con" style="display: none;"></div>
        <nav class="sb-topnav navbar navbar-expand adminHeader"> 
          <button class="btn btn-bars" id="sidebarToggle"><svg height="15.424" viewbox="0 0 23.136 15.424" width="23.136" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.427,25.707H29.563V23.136H6.427v2.571Zm0-6.427H29.563V16.71H6.427V19.28Zm0-9v2.571H29.563V10.283H6.427Z" data-name="Icon metro-menu" id="Icon_metro-menu" transform="translate(-6.427 -10.283)"></path></svg></button>          
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto mainNav">
              <li class="nav-item dropdown px-2 pl-md-3 profile-dropdown">
                <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle d-flex align-items-center" data-toggle="dropdown" href="#" id="userDropdown" role="button"><span class="header-dp">
				<img src="{{ get_admin_profile_image($user_id)}}" alt=""></span> <span class="d-block">{{ Auth::user()->name }}</span></a>
                <div aria-labelledby="userDropdown" class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item profile_link" href="{{ route('my-profile')}}">My Profile</a><hr>
				  <a class="dropdown-item profile_link" href="{{ route('setting')}}">Setting</a>
                  <div class="dropdown-divider"></div>
				  <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                </div>
              </li>
            </ul>
        </nav>
		<div id="layoutSidenav">
		<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <ul class="sideLinks">
                          <li>
                              <a href="{{ route('admin-task-list')}}" class="@if(Request::segment(2)=='admin-task-list') active @endif"><span class=" linkIcon"><svg width="12.8" height="20.3">
                                  <use xlink:href="#taskLisk-icon"></use>
                              </svg></span> <span class="linkText">Task List</span></a>
                          </li>
                          <li>
                              <a href="{{ route('customer')}}" class="@if(Request::segment(2)=='customer') active @endif"><span class="linkIcon"><svg width="15.529" height="15.529">
                                  <use xlink:href="#customer-icon"></use>
                              </svg></span> <span class="linkText">Customer</span></a>
                          </li>
						  
						  <li>
						   <a href="{{ route('live-user')}}" class="@if(Request::segment(2)=='live-user') active @endif"><span class="linkIcon"><svg width="15.529" height="15.529">
                                  <use xlink:href="#customer-icon"></use>
                              </svg></span> <span class="linkText">Live User</span></a>
						  </li>
						  
						  
						  
						  
                          <li>
                            <a href="{{ route('service-provider')}}" class="@if(Request::segment(2)=='service-provider') active @endif"><span class="linkIcon"><svg width="15.529" height="15.529">
                                <use xlink:href="#SP-icon"></use>
                            </svg></span> <span class="linkText">Service Provider</span></a>
                        </li> 

                        <li>
					
                          <a href="{{ route('service')}}" class="@if(Request::segment(2)=='service') active @endif "><span class="linkIcon"><svg width="15.529" height="15.529">
                              <use xlink:href="#services-icon"></use>
                          </svg></span> <span class="linkText">Services/Locations</span></a>
                      </li>
                    
					 <li>
					
                          <a href="{{ route('live-services')}}" class="@if(Request::segment(2)=='live-services') active @endif "><span class="linkIcon"><svg width="15.529" height="15.529">
                              <use xlink:href="#services-icon"></use>
                          </svg></span> <span class="linkText">Live Services/Locations</span></a>
                      </li>
					  
                      </ul>
                    </div>
                    
                </nav>
            </div>