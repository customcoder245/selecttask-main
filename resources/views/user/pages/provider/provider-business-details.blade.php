@extends('user.layout.app')
@section('content')
<!--Right Content-->
@php
$user_id=Auth::user()->id;
@endphp
        <div class="contentArea">
           
            <!--Task List-->
            <div class="sectionRow profileVH">
                <div class="titleRow d-flex justify-content-between align-items-center mb-sm-4">
                    <h2 class="title-head">Company</h2>
                    <div class="rightBottonsAbout">
                        <a href="{{ route('about-preview')}}" class="textgreen text-lato f-16 underlinelink Bold ">Preview Profile</a>
                    </div>
                    
                </div> 
                
                <div class="staticTabs">
                    <ul class="nav nav-tabs tabsWidget border-bottom borderW2">
                        <li>
                            <a class="nav-link active" href="{{ route('provider-company-info')}}">Company Information</a>
                        </li>                        
                        <li>
                            <a class="nav-link" href="{{ route('provider-payment-information' )}}">Payment Information</a>
                        </li>                  
                    </ul>
                </div>
                
                <div class="wtbox">
                   
                    <ul class="aboutTabs d-flex">
                        <li><a href="{{ route('provider-company-info')}}">About</a></li>
                        <li class="active"><a href="{{ route('provider-business-details')}}">Business &amp; License Details</a></li>
                        <li><a href="{{ route('provider-portfolio')}}">Portfolio</a></li>
                    </ul>
                   <div class="tabContentWidget">
                    <form class="companyInfoForm businessLicenceForm" method="post" action="{{ route('save-business-hour')}}">
                          @csrf
                        <input type="hidden" name="user_id" value="{{$user_id}}">						  
							 		@if (session('status'))
										<div class="alert alert-success">
											{{ session('status') }}
										</div>
									@endif
																 
							 
							 
                    <div class="formSectionRow">
                        <div class="titleSection d-flex align-items-center flex-wrap">
                            <h4 class="">Business Hours</h4> 
                            <button type="submit" class="btn btn-green btnLg text-lato ml-auto minW-auto">Update</button>							
                        </div>  
                        <div class="grid-widget  businessWidget">
                            <div class="gridHeader text-lato semiBold hidden-md f-16">
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
											<option value="">N/A</option>
											
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
                                               <option value="">N/A</option>
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
                                                <option value="">N/A</option>
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
                                               <option value="">N/A</option>
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
                                                <option value="">N/A</option>
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
                                                <option value="">N/A</option>
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
                                                <option value="">N/A</option>
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
                                                <option value="">N/A</option>
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
                                              <option value="">N/A</option>
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
                                                <option value="">N/A</option>
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
                                                <option value="">N/A</option>
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
                                                <option value="">N/A</option>
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
                                                <option value="">N/A</option>
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
                                                <option value="">N/A</option>
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

               

                        <div class="formSectionRow">
                            <div class="titleSection d-flex align-items-center flex-wrap">
                                <h4 class="">License Details</h4>
                                <a href="javascript:void(0)" class="btn order-lg-3 btn-green-outline btn-sm ml-auto minW-auto add_new_lincense" data-toggle="modal" data-target="#newLicenceModal">Add License</a>
                            </div>
                            <div class="autoApplyLists business_license_list" data-url="{{ route('business-license-list')}}">
                                
                               
                            </div>
                        </div><!--/ Licence details-->

                        
                    </form>
                   </div>
                    
                </div>
            </div>
            <!-- //Task List-->

        </div>
        <!--//Right Content-->
		@endsection