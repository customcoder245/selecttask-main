@extends('user.layout.app')
@section('content')

@php 
$user_id=Auth::user()->id;
$current_tab=get_user_meta($user_id,'signups_tab');
@endphp


<div class="container signUp">
        <div class="signupContainer d-md-flex">
            <div class="leftPanel">
                <div class="wtBox-widget position-relative">                    
                    <div class="progessWarSignup">
                        <span class="SignUp-step-5"></span>
                        <label class="text-lato f-12">Business &amp License </label>
                    </div>
                    <ul class="progressSignup text-lato" data-current_tab="{{$current_tab}}">
                        <li class="active company_info_li " data-tab="company_info" data-action="business_information"><span class="circleDot"></span><span class="steptext flex-grow-1">Company Information</span></li>
                        <li class="category_location_li"     data-tab="category_location" data-action="category_location"><span class="circleDot"></span><span class="steptext flex-grow-1">Category &amp; Location</span></li>                       
                        <li class="business_license_li" data-tab="business_license" data-action="business_license"><span class="circleDot"></span><span class="steptext flex-grow-1">Business & License</span>  <a href="#" class="skipLink">Skip</a></li>
                        <li class="portfolio_status_li" data-tab="portfolio_status" data-action="portfolio_status"><span class="circleDot"></span><span class="steptext flex-grow-1">Portfolio</span>  <a href="#" class="skipLink">Skip</a></li>   
						<li class="profile_window_li" data-tab="profile_window" data-action="profile_page" ><span class="circleDot"></span><span class="steptext flex-grow-1">Profile</span> <a href="#" class="skipLink">Skip</a></li>
                        <li class=" payment_window_li" data-tab="payment_window" data-action="payment_form" ><span class="circleDot"></span><span class="steptext flex-grow-1">Payment</span> <a href="#" class="skipLink">Skip</a></li>                  
                    </ul>
                </div>
            </div><!-- //Left Panel-->
			<div class="rightPanel flex-grow-1 company_info">
			<form method="post" class="business_information" action="{{ route('business-details-save')}}">
			@csrf
			 <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
			 <input type="hidden" name="action" value="business_information">
                <div class="wtBox-widget formSectionWidget">
                    <div class="formSectionRow">
                        <div class="titleSection d-flex align-items-center">
                            <h4>Business Information</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label class="label">Business Name <span class="req float-right">*</span></label>
                                <input type="text" name="businss_name" id="business_name" class="form-control f-14" value="@if(!empty($company_info->businss_name)){{ $company_info->businss_name }} @endif" placeholder="Enter name" required>
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="label">Contact <span class="req float-right">*</span></label>
                                <input type="text" name="business_contact" id="business_contact" class="form-control f-14 business_contact" value="@if(!empty($company_info->business_contact)){{ $company_info->business_contact }} @endif" placeholder="Enter Contact Info" required>
                            </div>
                            <div class="col-md-4 form-group">
                                <label class="label">Business Start Date</label>
                                <input type="text" name="business_start_date" id="business_start_date" class="form-control f-14 business_start_date" value="@if(!empty($company_info->business_start_date)){{ $company_info->business_start_date }} @endif" >
                            
							
							</div>
                        </div>
                    </div><!-- //Business Information-->
                    <div class="formSectionRow">
                        <div class="titleSection d-flex align-items-center">
                            <h4>Address</h4>
                        </div>
                        <input type="text" name="business_address" id="business_address" value="@if(!empty($company_info->business_address)){{ $company_info->business_address }} @endif" class="form-control f-14 business_address autocomplete_search" placeholder="Address">
                           
                    </div><!-- //Business Information-->
                </div>
                <div class="formbtns mt-3 mt-md-4 text-center mobileFixed">
                    <div class="mobRightBtn ml-auto">
                        <button type="submit" class="btn btn-green btnLg btn-green-shadow tab_btn_submit" data-next="category_location" data-current="company_info">Next</button>
                        <p class="redCol f-12 mt-2 mt-md-3 reqInfoText">* All Fields are Required</p>
                    </div>
                    
                </div>
				</form>
            </div><!-- //company info end-->
			
			<!-- Category and Location  start--->
			<div class="rightPanel flex-grow-1 category_location" style="display:none;">
			<form method="post" class="category_location_form" action="{{ route('business-details-save')}}">
			 @csrf
			 <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
			 <input type="hidden" name="action" value="category_location">
                <div class="wtBox-widget formSectionWidget">
                    <div class="formSectionRow">
                        <div class="titleSection d-flex align-items-center">
                            <h4>Service <span class="req ml-1">*</span></h4>
                            
                            <a href="javascript:void(0)" class="btn btn-green-outline btn-sm ml-auto addServicesModal" data-toggle="modal" data-target="#addServicesModal">Add new Service</a>
                        </div>
						<div class="  servicer_error"></div>
                        <div class="grid-widget catLocationForm">
                            <div class="gridHeader text-lato semiBold hidden-md">
                                <div class="sNumber serialNumber">
                                    <div class="text-center">S No.</div>
                                </div>
                                <div class="servicesColTable  ">Service</div>
                                <div class="Action text-center w100">Action</div>
                            </div>
							
							@php 
							$user_id=Auth::user()->id;
							$user_services=get_user_meta($user_id,'services');
							$s=1;
							$user_services2=explode(',',$user_services);
							
							@endphp
							<input type="hidden" name="service" value="{{ $user_services }}" class="services_array" > 
                            <div class="gridRows servicescat_list">
							@if(count($user_services2)>0)
                            @foreach($user_services2 as $service_id)
						    @if(!empty($service_id))
                             <div class="gridRow gridRow{{ $service_id }}" data-id="{{ $service_id }}" data-name="{{ get_services_category_by_id($service_id)}}"><div class="sNumber serialNumber"><div class="text-center">{{ $s++ }}</div></div><div class="servicesColTable "><label class="grayLabel d-block d-md-none">Service</label><p class="mSemiBold">{{ get_services_category_by_id($service_id)}}</p></div><div class="Action text-right text-md-center w100"> <label class="grayLabel d-block d-md-none">Action</label><a href="#" class="text-primary underlinelink" data-toggle="modal" data-target="#deleteRowModal"><img src="/public/user/assets/images/dustbin.svg" alt=""></a></div> </div>
  							@endif
                            @endforeach
                                @endif
                            
                                
                              
                            </div>
                        </div>
                    </div><!-- //Service-->

                    <div class="formSectionRow">
                        <div class="titleSection d-flex align-items-center flex-wrap">
                            <h4 class="order-lg-1">Location <span class="req ml-1">*</span></h4>
                            <a href="javascript:void(0)" class="btn order-lg-3 btn-green-outline btn-sm ml-auto addLocationModal" data-toggle="modal" data-target="#addLocationModal">Add new Location</a>
                            <span class="infoText text-lato order-lg-2">( Add your service locations in new your city )</span>
                        </div>
						<div class=" location_error"></div>
                        <div class="grid-widget catLocationForm">
                            <div class="gridHeader text-lato semiBold hidden-md">
                                <div class="sNumber serialNumber">
                                    <div class="text-center">S No.</div>
                                </div>
                                <div class="servicesColTable  ">Borough</div>
                                <div class="Action text-center w100">Action</div>
                            </div>
							@php
							$user_location=get_user_meta($user_id,'location');
							$s=1;
							$user_location2=explode(',',$user_location);
							
							@endphp 
							<input type="hidden" name="location" value="{{ $user_location }}" class="location_array">
                            <div class="gridRows location_array_list">
							
							@if(count($user_location2)>0)
                                   @foreach($user_location2 as $service_id)
							   @if(!empty($service_id))
                             <div class="gridRow gridRowloc{{ $service_id }}" datA-TH='' data-id="{{ $service_id }}" data-name="{{ get_location_by_id($service_id)}}"><div class="sNumber serialNumber"><div class="text-center">{{ $s++ }}</div></div><div class="servicesColTable "><label class="grayLabel d-block d-md-none">Service</label><p class="mSemiBold">{{ get_location_by_id($service_id)}}</p></div><div class="Action text-right text-md-center w100"> <label class="grayLabel d-block d-md-none">Action</label><a href="#" class="text-primary underlinelink" data-toggle="modal" data-target="#deleteRowModal"><img src="/public/user/assets/images/dustbin.svg" alt=""></a></div> </div>
  							  @endif
                            @endforeach   
                             @endif							
                                
                            </div>
                        </div>
                    </div><!-- //Service-->
                    
                </div>
               
                <div class="formbtns mt-3 mt-md-4 text-center mobileFixed align-items-center">
                    <a href="#" class="previousLink text-secondary text-lato underlinelink">Previous</a>
                    <div class="mobRightBtn ml-auto">
                        <button class="btn btn-green btnLg btn-green-shadow tab_btn_submit" data-next="business_license" data-current="category_location">Next</button>
                        <p class="redCol f-12 mt-2 mt-md-3 reqInfoText">* All Fields are Required</p>
                    </div>
                </div>
				</form>
            </div><!-- //Right Panel-->
			
			<!-- category and location end -->
		<!-- Business license start  -->
			
            <div class="rightPanel flex-grow-1 business_license"  style="display:none;">
                <form method="post" class="business_license"   action="{{ route('business-details-save')}}">
				 @csrf
				<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
				<input type="hidden"  name="action" value="business_license">
                <div class="wtBox-widget formSectionWidget">
                    <div class="formSectionRow">
                        <div class="titleSection d-flex align-items-center flex-wrap">
                            <h4 class="">Business Hour</h4>                            
                        </div>  
                        <div class="grid-widget deskTopGray businessWidget">
                            <div class="gridHeader text-lato semiBold hidden-md">
                                <div class="businessHoursCol d-inline-flex">
                                    <div class="businessHrsCol">Day</div>
                                    <div class="businessHrsCol businesshrMobRight">Start Time</div>
                                </div>
                                <div class="businessHoursCol d-inline-flex">
                                    <div class="businessHrsCol">End Time</div>
                                    
                                </div>                                
                            </div>
                            @php 
                             $bh_data=get_user_meta($user_id,'business_hour');
                              $bh_data1=json_decode($bh_data);
                             							  
							@endphp
                            <div class="gridRows">
                                <div class="gridRow">
                                    <div class="businessHoursCol d-inline-flex">
                                        <div class="businessHrsCol">
                                            <label class="grayLabel d-block d-md-none">Day</label>
                                            <p>Monday</p>
                                        </div>
                                        <div class="businessHrsCol businesshrMobRight">
                                            <label class="grayLabel d-block d-md-none">Start Time</label>
                                            <select class="form-control f-14" name="bh[mon][start_time]">
											<option value="">NA</option>
											
                                             @foreach(get_timestamp_option() as $timestamp)											
                                                <option   value="{{ $timestamp }}" @if(isset($bh_data1->mon->start_time))@if($bh_data1->mon->start_time== $timestamp)selected @endif @endif >{{$timestamp}}</option> 
                                               @endforeach												
                                            </select>
                                        </div>
                                    </div>
                                    <div class="businessHoursCol d-inline-flex">
                                        <div class="businessHrsCol">
                                            <label class="grayLabel d-block d-md-none">End Time</label>
                                            <select class="form-control f-14" name="bh[mon][end_time]">
                                               <option value="">NA</option>
                                             @foreach(get_timestamp_option() as $timestamp)											
                                                <option value="{{ $timestamp }}" @if(isset($bh_data1->mon->start_time)) @if($bh_data1->mon->end_time== $timestamp)selected @endif @endif >{{$timestamp}}</option> 
                                               @endforeach	                       
                                            </select>
                                        </div>
                                        <div class="businessHrsCol Action text-right  squareRadio  text-md-center businesshrMobRight">
                                            <label class="grayLabel d-block d-md-none">Action</label>
											<a href="#" class="delete_time"><img src="{{ url('/')}}/public/user/assets/images/dustbin.svg" alt=""></a>
                                            </div>
                                    </div>  
                                </div>

                                <div class="gridRow">
                                    <div class="businessHoursCol d-inline-flex">
                                        <div class="businessHrsCol">
                                            <label class="grayLabel d-block d-md-none">Day</label>
                                            <p>Tuesday</p>
                                        </div>
                                        <div class="businessHrsCol businesshrMobRight">
                                            <label class="grayLabel d-block d-md-none">Start Time</label>
                                            <select class="form-control f-14" name="bh[tue][start_time]">                                                
                                                <option value="">NA</option>
                                             @foreach(get_timestamp_option() as $timestamp)											
                                                <option value="{{ $timestamp }}" @if(isset($bh_data1->tue->start_time))@if($bh_data1->tue->start_time== $timestamp)selected @endif @endif >{{$timestamp}}</option> 
                                               @endforeach	                                               
                                            </select>
                                        </div>
                                    </div>
                                    <div class="businessHoursCol d-inline-flex">
                                        <div class="businessHrsCol">
                                            <label class="grayLabel d-block d-md-none">End Time</label>
                                            <select class="form-control f-14" name="bh[tue][end_time]">
                                               <option value="">NA</option>
                                             @foreach(get_timestamp_option() as $timestamp)											
                                                <option value="{{ $timestamp }}" @if(isset($bh_data1->tue->end_time))@if($bh_data1->tue->end_time== $timestamp)selected @endif @endif >{{$timestamp}}</option> 
                                               @endforeach	                       
                                            </select>
                                        </div>
                                       <div class="businessHrsCol Action text-right  squareRadio  text-md-center businesshrMobRight">
                                            <label class="grayLabel d-block d-md-none">Action</label>
											<a href="#" class="delete_time"><img src="{{ url('/')}}/public/user/assets/images/dustbin.svg" alt=""></a>
                                            </div>
                                    </div>  
                                </div>

                                <div class="gridRow">
                                    <div class="businessHoursCol d-inline-flex">
                                        <div class="businessHrsCol">
                                            <label class="grayLabel d-block d-md-none">Day</label>
                                            <p>Wednesday</p>
                                        </div>
                                        <div class="businessHrsCol businesshrMobRight">
                                            <label class="grayLabel d-block d-md-none">Start Time</label>
                                            <select class="form-control f-14" name="bh[wed][start_time]">                                                
                                                <option value="">NA</option>
                                             @foreach(get_timestamp_option() as $timestamp)											
                                                <option value="{{ $timestamp }}" @if(isset($bh_data1->wed->start_time))@if($bh_data1->wed->start_time== $timestamp)selected @endif @endif >{{$timestamp}}</option> 
                                               @endforeach	                                              
                                            </select>
                                        </div>
                                    </div>
                                    <div class="businessHoursCol d-inline-flex">
                                        <div class="businessHrsCol">
                                            <label class="grayLabel d-block d-md-none">End Time</label>
                                            <select class="form-control f-14" name="bh[wed][end_time]">
                                                <option value="">NA</option>
                                             @foreach(get_timestamp_option() as $timestamp)											
                                                <option value="{{ $timestamp }}"  @if(isset($bh_data1->wed->end_time))@if($bh_data1->wed->end_time== $timestamp)selected @endif @endif >{{$timestamp}}</option> 
                                               @endforeach	                      
                                            </select>
                                        </div>
                                        <div class="businessHrsCol Action text-right  squareRadio  text-md-center businesshrMobRight">
                                            <label class="grayLabel d-block d-md-none">Action</label>
											<a href="#" class="delete_time"><img src="{{ url('/')}}/public/user/assets/images/dustbin.svg" alt=""></a>
                                            </div>
                                    </div>  
                                </div>

                                <div class="gridRow">
                                    <div class="businessHoursCol d-inline-flex">
                                        <div class="businessHrsCol">
                                            <label class="grayLabel d-block d-md-none">Day</label>
                                           <p>Thursday</p>
                                        </div>
                                        <div class="businessHrsCol businesshrMobRight">
                                            <label class="grayLabel d-block d-md-none">Start Time</label>
                                            <select class="form-control f-14" name="bh[thu][start_time]">                                                
                                                <option value="">NA</option>
                                             @foreach(get_timestamp_option() as $timestamp)											
                                                <option value="{{ $timestamp }}"  @if(isset($bh_data1->thu->start_time))@if($bh_data1->thu->start_time== $timestamp)selected @endif @endif   >{{$timestamp}}</option> 
                                               @endforeach	                                               
                                            </select>
                                        </div>
                                    </div>
                                    <div class="businessHoursCol d-inline-flex">
                                        <div class="businessHrsCol">
                                            <label class="grayLabel d-block d-md-none">End Time</label>
                                            <select class="form-control f-14" name="bh[thu][end_time]">
                                                <option value="">NA</option>
                                             @foreach(get_timestamp_option() as $timestamp)											
                                                <option value="{{ $timestamp }}" @if(isset($bh_data1->thu->end_time)) @if($bh_data1->thu->end_time== $timestamp)selected @endif @endif >{{$timestamp}}</option> 
                                               @endforeach	                      
                                            </select>
                                        </div>
                                        <div class="businessHrsCol Action text-right  squareRadio  text-md-center businesshrMobRight">
                                            <label class="grayLabel d-block d-md-none">Action</label>
										<a href="#" class="delete_time"><img src="{{ url('/')}}/public/user/assets/images/dustbin.svg" alt=""></a>
                                            </div>
                                    </div>  
                                </div>

                                <div class="gridRow">
                                    <div class="businessHoursCol d-inline-flex">
                                        <div class="businessHrsCol">
                                            <label class="grayLabel d-block d-md-none">Day</label>
                                            <p>Friday</p>
                                        </div>
                                        <div class="businessHrsCol businesshrMobRight">
                                            <label class="grayLabel d-block d-md-none">Start Time</label>
                                            <select class="form-control f-14" name="bh[fri][start_time]">                                                
                                              <option value="">NA</option>
                                             @foreach(get_timestamp_option() as $timestamp)											
                                                <option value="{{ $timestamp }}"  @if(isset($bh_data1->fri->start_time)) @if($bh_data1->fri->start_time== $timestamp)selected @endif @endif >{{$timestamp}}</option> 
                                               @endforeach	                                               
                                            </select>
                                        </div>
                                    </div>
                                    <div class="businessHoursCol d-inline-flex">
                                        <div class="businessHrsCol">
                                            <label class="grayLabel d-block d-md-none">End Time</label>
                                            <select class="form-control f-14" name="bh[fri][end_time]">
                                                <option value="">NA</option>
                                             @foreach(get_timestamp_option() as $timestamp)											
                                                <option value="{{ $timestamp }}"  @if(isset($bh_data1->fri->end_time)) @if($bh_data1->fri->end_time== $timestamp)selected @endif  @endif >{{$timestamp}}</option> 
                                               @endforeach	                       
                                            </select>
                                        </div>
                                       <div class="businessHrsCol Action text-right  squareRadio  text-md-center businesshrMobRight">
                                            <label class="grayLabel d-block d-md-none">Action</label>
											<a href="#" class="delete_time"><img src="{{ url('/')}}/public/user/assets/images/dustbin.svg" alt=""></a>
                                            </div>
                                    </div>  
                                </div>

                                <div class="gridRow">
                                    <div class="businessHoursCol d-inline-flex">
                                        <div class="businessHrsCol">
                                            <label class="grayLabel d-block d-md-none">Day</label>
                                            <p>Saturday</p>
                                        </div>
                                        <div class="businessHrsCol businesshrMobRight">
                                            <label class="grayLabel d-block d-md-none">Start Time</label>
                                            <select class="form-control f-14" name="bh[sat][start_time]">                                                
                                                <option value="">NA</option>
                                             @foreach(get_timestamp_option() as $timestamp)											
                                                <option value="{{ $timestamp }}" @if(isset($bh_data1->sat->start_time))  @if($bh_data1->sat->start_time== $timestamp)selected @endif @endif >{{$timestamp}}</option> 
                                               @endforeach	                                               
                                            </select>
                                        </div>
                                    </div>
                                    <div class="businessHoursCol d-inline-flex">
                                        <div class="businessHrsCol">
                                            <label class="grayLabel d-block d-md-none">End Time</label>
                                            <select class="form-control f-14" name="bh[sat][end_time]">
                                                <option value="">NA</option>
                                             @foreach(get_timestamp_option() as $timestamp)											
                                                <option value="{{ $timestamp }}" @if(isset($bh_data1->sat->end_time)) @if($bh_data1->sat->end_time== $timestamp)selected  @endif @endif>{{$timestamp}}</option> 
                                               @endforeach	                        
                                            </select>
                                        </div>
                                        <div class="businessHrsCol Action text-right  squareRadio  text-md-center businesshrMobRight">
                                            <label class="grayLabel d-block d-md-none">Action</label>
											<a href="#" class="delete_time"><img src="{{ url('/')}}/public/user/assets/images/dustbin.svg" alt=""></a>
                                            </div>
                                    </div>  
                                </div>

                                <div class="gridRow">
                                    <div class="businessHoursCol d-inline-flex">
                                        <div class="businessHrsCol">
                                            <label class="grayLabel d-block d-md-none">Day</label>
                                            <p>Sunday</p>
                                        </div>
                                        <div class="businessHrsCol businesshrMobRight">
                                            <label class="grayLabel d-block d-md-none">Start Time</label>
                                            <select class="form-control f-14" name="bh[sun][start_time]">                                                
                                                <option value="">NA</option>
                                             @foreach(get_timestamp_option() as $timestamp)											
                                                <option value="{{ $timestamp }}" @if(isset($bh_data1->sun->start_time)) @if($bh_data1->sun->start_time== $timestamp)selected @endif @endif>{{$timestamp}}</option> 
                                               @endforeach	                                              
                                            </select>
                                        </div>
                                    </div>
                                    <div class="businessHoursCol d-inline-flex">
                                        <div class="businessHrsCol">
                                            <label class="grayLabel d-block d-md-none">End Time</label>
                                            <select class="form-control f-14" name="bh[sun][end_time]">
                                                <option value="">NA</option>
                                             @foreach(get_timestamp_option() as $timestamp)											
                                                <option value="{{ $timestamp }}" @if(isset($bh_data1->sun->end_time)) @if($bh_data1->sun->end_time== $timestamp)selected @endif @endif>{{$timestamp}}</option> 
                                               @endforeach	                       
                                            </select>
                                        </div>
                                        <div class="businessHrsCol Action text-right  squareRadio  text-md-center businesshrMobRight">
                                            <label class="grayLabel d-block d-md-none">Action</label>
											<a href="#" class="delete_time"><img src="{{ url('/')}}/public/user/assets/images/dustbin.svg" alt=""></a>
                                            </div>
                                    </div>  
                                </div>

                            </div>
                        </div>                     
                    </div><!-- //Business Hour-->

                </div><!--// Business Hours-->

                <div class="wtBox-widget formSectionWidget">
                    <div class="formSectionRow">
                        <div class="titleSection d-flex align-items-center flex-wrap">
                            <h4 class="">License Details</h4>
                            <a href="javascript:void(0)" class="btn order-lg-3 btn-green-outline btn-sm ml-auto minW-auto newLicenceModal" data-toggle="modal" data-target="#newLicenceModal">Add new License</a>
                        </div>
                        <div class="autoApplyLists business_license_list" data-url="{{ route('business-license-list')}}">
                            
                            
                           
                        </div>
                    </div>
                </div>
				
				<!-- Business license end  -->

                <div class="formbtns mt-3 mt-md-4 text-center mobileFixed align-items-center">
                    <a href="#" class="previousLink text-secondary text-lato underlinelink">Previous</a>
                    <button class="btn btn-green btnLg tab_btn_submit btn-green-shadow ml-auto" data-next="portfolio_status" data-current="business_license">Next</button>
                </div>
				</form>
            </div><!-- //Right Panel-->
			<!--  Portfolio status start -->
			
			<div class="rightPanel flex-grow-1 portfolio_status" style="display:none;">  
                <form method="post" class="portfolio_status" action="{{ route('business-details-save')}}">
				@csrf
				<input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
				<input type="hidden"  name="action" value="portfolio_status">
				
                <div class="wtBox-widget formSectionWidget">
                    <div class="formSectionRow">
                        <div class="titleSection d-flex align-items-center flex-wrap">
                            <h4 class="">Portfolio Details</h4>
                            <a href="javascript:void(0)" class="btn order-lg-3 btn-green-outline btn-sm ml-auto minW-auto add_portfolio" data-toggle="modal" data-target="#newPortfolioModal">Add new Portfolio</a>
                        </div>
                        <div class="autoApplyLists portfolio_list" data-url="{{ route('portfolio-list') }}">
                            
                            

                        
                        </div>
                    </div>
                </div>

                <div class="formbtns mt-3 mt-md-4 text-center mobileFixed align-items-center">
                    <a href="#" class="previousLink text-secondary text-lato underlinelink">Previous</a>
                    <button class="btn btn-green tab_btn_submit btnLg btn-green-shadow ml-auto" data-next="profile_window" data-current="portfolio_status">Next</button>
                </div>
				</form>
            </div><!-- //Right Panel-->
			
			<!--  Portfolio status end -->
			
			
			
			<!---  payement window end -->
			<!-- Profile window  start -->
			<div class="rightPanel flex-grow-1 profile_window"  style="display:none;">
                  <form method="post" class="profile_page" action="{{ route('business-details-save')}}" enctype="multipart/form-data">
				@csrf
				<input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
				<input type="hidden"  name="action" value="profile_page">
                <div class="wtBox-widget formSectionWidget">
                    <div class="formSectionRow">
                        <div class="titleSection d-flex align-items-center flex-wrap">
                            <h4 class="">My Profile</h4>
                            <a href="{{ route('about-preview')}}" target="_blank" class="btn order-lg-3 btn-primary btn-sm ml-auto minW-auto  view_profiles ">View Profile</a>
                        </div>
                       <div class="aboutMe-profile">
                           <label class="label">About Me</label>
                           <textarea rows="5" cols="10" class="form-control f-12" name="about_me">{{ get_user_meta($user_id,'about_me')}}</textarea>
                       </div>
                    </div>

                    <div class="formSectionRow">                       
                       <div class="d-md-flex justify-content-between">
                           <div class="addProfileImage mb-4 mb-md-0">
                                <label class="label">Profile Image</label>
                                <div class="profileImageWrap position-relative border-radius-5">
                                    <img src="{{ get_profile_image_src($user_id) }}" alt="" class="border-radius-5 profile_image_src">
                                    <span class="profileimgtext text-lato f-16">Change Image</span>
                                    <input type="file" name="profile_image" id="" class="invisibleInput profile_image" onchange="sp_previewFile(this);">
                                </div>
                           </div><!--//Profile image-->
                           <div class="addCoverImage">
                               <div class="d-flex justify-content-between">
                                    <label class="label">Cover Image</label>
                                    <span class="imageDimension">Image dimension should be 1250*400</span>
                               </div>
                                
                                <div class="coverImageWrap centereditem gray-frame border-radius-5 cover_image_src" style="background-image:url({{  get_cover_image_src($user_id) }})">
                                    <div class="text-center " >
                                        <p class="mb-2">Drag &amp; Drop Images</p>
										 
                                        <p class="position-relative"><a href="javascript:void(0)" class="btn order-lg-3 btn-primary btn-sm ml-auto">Browse</a>
                                        <input type="file" name="cover_image" id="" class="invisibleInput cover_image" onchange="sp_cover_previewFile(this)"></p>
                                    </div>
                                </div>
                           </div>
                           
                       </div>
                    </div>
                </div><!-- //My profile-->

                <div class="formbtns mt-3 mt-md-4 text-center mobileFixed align-items-center">
                    <a href="#" class="previousLink text-secondary text-lato underlinelink">Previous</a>
                    <button class="btn btn-green btnLg btn-green-shadow tab_btn_submit ml-auto" data-next="payment_window" data-current="profile_window">Next</button>
                </div>
				</form>
            </div><!-- //Right Panel-->
			
			<!-- profile window end -->
			
			
				<!--- payment window  start--->
			
			  <div class="rightPanel flex-grow-1 payment_window" style="display:none;">
                <form method="post" class="payment_form" action="{{ route('business-details-save')}}">
				@csrf
				<input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
				<input type="hidden"  name="action" value="payment_form">
                <div class="wtBox-widget formSectionWidget">
                    <div class="formSectionRow">
                        <div class="titleSection d-flex align-items-center flex-wrap">
                            <h4 class="">Saved Cards</h4>
                            <a href="javascript:void(0)" class="btn order-md-3 btn-green-outline btn-sm minW-auto" data-toggle="modal" data-target="#addnewModal">Add new Card</a>
                        <p class="order-md-2 stripeLogo ml-md-auto"><span>Powered By :</span><img src="{{ url('/')}}/public/user/assets/images/stripe_logo.png" alt="">
                            </p>
						</div>
                        <div class="autoApplyLists payment_card_list" data-url="{{ route('payment-card-list')}}"> 
                            <div class="autoApplyList  d-md-flex justify-content-between">
                                <div class="srNoCol sNumber">
                                    <label>S No.</label>
                                    <p>1</p>
                                </div>
                                <div class="ApplyListsCol ApplyListsCol-l  d-flex justify-content-between">
                                    <div class="ApplyListsMobLeft">
                                        <label>Card number</label>
                                        <p>3672 6272 2282 1717</p>
                                    </div>
                                    <div class="ApplyListsMobRight">
                                        <label>Expiry Year</label>
                                        <p>04/22</p>
                                    </div>
                                </div>

                                <div class="ApplyListsCol ApplyListsCol-s d-flex justify-content-between">
                                    <div class="ApplyListsMobLeft">
                                        <label>Card Type</label>
                                        <p>Visa</p>
                                    </div>
                                    <div class="ApplyListsMobRight">
                                        <label>Default Account</label>
                                        <p>Yes</p>
                                    </div>
                                </div>
                                <div class="actionCol text-left text-md-center">
                                    <label>Action</label>
                                    <div class="Action"> <a href="#" class="text-primary underlinelink"><img src="{{ url('/public/user/')}}/assets/images/edit-icon.svg" alt=""></a> <a href="#" class="text-primary underlinelink"><img src="{{ url('/public/user/')}}/assets/images/dustbin.svg" alt=""></a> </div>
                                </div>

                            </div>

                            <div class="autoApplyList d-md-flex justify-content-between">
                                <div class="srNoCol sNumber">
                                    <label>S No.</label>
                                    <p>2</p>
                                </div>
                                <div class="ApplyListsCol ApplyListsCol-l  d-flex justify-content-between">
                                    <div class="ApplyListsMobLeft">
                                        <label>Card number</label>
                                        <p>3672 6272 2282 1717</p>
                                    </div>
                                    <div class="ApplyListsMobRight">
                                        <label>Expiry Year</label>
                                        <p>04/22</p>
                                    </div>
                                </div>

                                <div class="ApplyListsCol ApplyListsCol-s d-flex justify-content-between">
                                    <div class="ApplyListsMobLeft">
                                        <label>Card Type</label>
                                        <p>Visa</p>
                                    </div>
                                    <div class="ApplyListsMobRight">
                                        <label>Default Account</label>
                                        <p>Yes</p>
                                    </div>
                                </div>
                                <div class="actionCol text-left text-md-center">
                                    <label>Action</label>
                                    <div class="Action"> <a href="#" class="text-primary underlinelink"><img src="{{ url('/public/user/')}}/assets/images/edit-icon.svg" alt=""></a> <a href="#" class="text-primary underlinelink"><img src="{{ url('/public/user/')}}/assets/images/dustbin.svg" alt=""></a> </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div><!-- //AUTO APPLY SETTINGS LIST-->

                <div class="formbtns mt-3 mt-md-4 text-center mobileFixed align-items-center">
                    <a href="#" class="previousLink text-secondary text-lato underlinelink">Previous</a>
                    <button class="btn btn-green btnLg btn-green-shadow ml-auto tab_btn_submit"  data-current="payment_window">Next</button>
                </div>
				</form>
            </div><!-- //Right Panel-->
        </div>        
    </div>
	<script>
	
	setTimeout(function(){load_services_location();}, 3000);</script>
	
	@endsection