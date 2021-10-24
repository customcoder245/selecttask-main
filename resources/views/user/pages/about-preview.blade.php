@extends('user.layout.app')
@section('content')
<style>
.userLeft {   display: none;}
.rightSection{
	margin-left:0px;
}
</style>
<figure class="aboutBanner">
        <img src="{{ url('/public/user')}}/assets/images/about-banner.jpg" alt="">
    </figure>
    <div class="container">
        <div class="aboutContent">
            <!--p class="text-right edit-profile mb-3"><a href="provider-company-info.html" class="btn btn-white minW-auto">Edit Profile</a></p-->
            <div class="aboutContainer d-md-flex">
          

<div class="aboutLeft form-group30">
                   <div class="wtbox">
                       <div class="companyProfileRow d-flex form-group-30">
                           <img src="{{ get_profile_image_src($user_id)}}" alt="">
                           <div class="comProfileText text-lato">
                               <h4>{{ get_business_info($user_id,'businss_name')}}</h4>
                               <p class="reviewText">{{ get_total_review_by_user($user_id)}} Reviews</p>
                               <div><input id="input-21b" value="{{ get_average_review_by_user($user_id)}}"  name="rating" type="text" class="rating" data-theme="krajee-fas" data-min=0 data-max=5 data-step=0.2 data-size="xm"
               required title="" readonly ></div>
                           </div>
                       </div><!--/Profile Info-->
                       <div class="form-group-30 projectProfile d-flex text-center">
                            <div class="projectProfileCol flex-grow-1">
                                <label class="label  
                                text-lato">Completed Projects</label>
                                <p class="f-16 Bold">{{ get_total_complete_jobs($user_id) }}</p>
                            </div>
                            <div class="projectProfileCol flex-grow-1">
                                <label class="label text-lato">Total years</label>
								@php 
								 $get_date=get_business_info($user_id,'business_start_date');
								@endphp
                                <p class="f-16 Bold">
								<?php 
								$date2=date('Y-m-d');
								  $date1=date('Y-m-d',strtotime($get_date));
								  $diff = abs(strtotime($date2)-strtotime($date1));
								  echo $years = floor($diff / (365*60*60*24));
								//$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
								  //$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
								 
								
								?>
								</p>
                            </div>
                       </div>

                       <ul class="comProfile-list">
                           <li>
                               <label class="label">Phone</label>
                               <p class="semiBold">{{ get_business_info($user_id,'business_contact')}}</p>
                           </li>
                           <li>
                                <label class="label">Email</label>
                                <p class="semiBold">{{ Auth::user()->email }}</p>
                            </li>
                            <li>
                                <label class="label">Address</label>
                                <p class="semiBold">{{ get_business_info($user_id,'business_address')}}</p>
                            </li>
                            <li>
                                <label class="label">Joined the Handsome Service Since</label>
								@php 
								 $get_date=get_business_info($user_id,'business_start_date');
								@endphp 
                                <p class="semiBold">{{ date('d M Y',strtotime($get_date))}}</p>
                            </li>
                            <li id="businessHours">
                                <div class="d-flex justify-content-between">
                                    <label class="label">Business Hours</label>
                                    <a href="javascript:void(0)" onclick="businessHours();" class="textgreen underlinelink f-12 viewAllOptions">View All</a>
                                    <a href="javascript:void(0)" onclick="businessHours();" class="textgreen underlinelink f-12 viewLessOptions">View Less</a>
                                </div>  
                                 
                                 @php 
                                  $user_hour=get_user_meta($user_id,'business_hour');
								  $bh=json_decode($user_hour);
								 $current_day=date('l');
                                 @endphp
								@if($current_day=="Tuesday")					 
                                <p class="semiBold businessDay" id="singleDayRow">Tuesday <span class="busiHours">@if(isset($bh->tue->start_time) && isset($bh->tue->end_time)){{$bh->tue->start_time}} to {{ $bh->tue->end_time }} @else Closed @endif</span></p>    
                                 @elseif($current_day=="Monday")
								 <p class="semiBold businessDay" id="singleDayRow"><span class="dayName">Monday</span> <span class="busiHours">@if(isset($bh->mon->start_time) && isset($bh->mon->end_time)){{$bh->mon->start_time}} to {{ $bh->mon->end_time }} @else Closed @endif</span></p>
                                   @elseif($current_day=="Wednesday")
								   <p class="semiBold businessDay" id="singleDayRow"><span class="dayName">Wednesday</span> <span class="busiHours">@if(isset($bh->wed->start_time) && isset($bh->wed->end_time)){{$bh->wed->start_time}} to {{ $bh->wed->end_time }} @else Closed @endif</span></p>
                                    @elseif($current_day=="Thursday")
									<p class="semiBold businessDay" id="singleDayRow"><span class="dayName">Thursday</span> <span class="busiHours">@if(isset($bh->thu->start_time) && isset($bh->thu->end_time)){{$bh->thu->start_time}} to {{ $bh->thu->end_time }} @else Closed @endif</span></p>
                                    @elseif($current_day=="Friday")
									<p class="semiBold businessDay" id="singleDayRow"><span class="dayName">Friday</span> <span class="busiHours">@if(isset($bh->fri->start_time) && isset($bh->fri->end_time)){{$bh->fri->start_time}} to {{ $bh->fri->end_time }} @else Closed @endif</span></p>
                                    @elseif($current_day=="Saturday")
									<p class="semiBold businessDay" id="singleDayRow"><span class="dayName">Saturday</span> <span class="busiHours">@if(isset($bh->sat->start_time) && isset($bh->sat->end_time)){{$bh->sat->start_time}} to {{ $bh->sat->end_time }} @else Closed @endif</span></p>
                                    @elseif($current_day=="Sunday")
									<p class="semiBold businessDay" id="singleDayRow"><span class="dayName">Sunday</span> <span class="busiHours">@if(isset($bh->sun->start_time) && isset($bh->sun->end_time)){{$bh->sun->start_time}} to {{ $bh->sun->end_time }} @else Closed @endif</span></p>
								    @endif
								
                                <div id="weekDaysRow">
                                    <p class="semiBold businessDay"><span class="dayName">Monday</span> <span class="busiHours">@if(isset($bh->mon->start_time) && isset($bh->mon->end_time)){{$bh->mon->start_time}} to {{ $bh->mon->end_time }} @else Closed @endif</span></p>
                                    <p class="semiBold businessDay"><span class="dayName">Tuesday</span> <span class="busiHours">@if(isset($bh->tue->start_time) && isset($bh->tue->end_time)){{$bh->tue->start_time}} to {{ $bh->tue->end_time }} @else Closed @endif</span></p>
                                    <p class="semiBold businessDay"><span class="dayName">Wednesday</span> <span class="busiHours">@if(isset($bh->wed->start_time) && isset($bh->wed->end_time)){{$bh->wed->start_time}} to {{ $bh->wed->end_time }} @else Closed @endif</span></p>
                                    <p class="semiBold businessDay"><span class="dayName">Thursday</span> <span class="busiHours">@if(isset($bh->thu->start_time) && isset($bh->thu->end_time)){{$bh->thu->start_time}} to {{ $bh->thu->end_time }} @else Closed @endif</span></p>
                                    <p class="semiBold businessDay"><span class="dayName">Friday</span> <span class="busiHours">@if(isset($bh->fri->start_time) && isset($bh->fri->end_time)){{$bh->fri->start_time}} to {{ $bh->fri->end_time }} @else Closed @endif</span></p>
                                    <p class="semiBold businessDay"><span class="dayName">Saturday</span> <span class="busiHours">@if(isset($bh->sat->start_time) && isset($bh->sat->end_time)){{$bh->sat->start_time}} to {{ $bh->sat->end_time }} @else Closed @endif</span></p>
                                    <p class="semiBold businessDay"><span class="dayName">Sunday</span> <span class="busiHours">@if(isset($bh->sun->start_time) && isset($bh->sun->end_time)){{$bh->sun->start_time}} to {{ $bh->sun->end_time }} @else Closed @endif</span></p>
                                </div>
                            </li>
                       </ul>
                   </div>
                </div><!--/About Left-->
                <div class="aboutRight flex-grow-1 form-group30">
                    <div class="wtbox">
                        <ul class="aboutTabs aboutTabs2 comAboutTabs d-flex">
                            <li <?php if(!isset($_GET['tab'])){ ?> class="active" <?php } ?> ><a href="#" data-tab="about_us">About</a></li>
                            <li><a href="#" data-tab="project_list">Portfolio</a></li>
                            <li <?php if(isset($_GET['tab'])){ ?> class="active" <?php } ?>><a href="#" data-tab="rating">Ratings &amp; Reviews</a></li>
                            <li><a href="#" data-tab="licence_details">Licence Details</a></li>
                        </ul>
                      
                        <div class="aboutTabContent about_us tab_area" <?php if(isset($_GET['tab'])){ ?> style="display:none"<?php } ?> >
                            <div class="sectionRom-widget">
                                <h4 class="text-uppercase">Service Locations</h4>
                                <div class="mapWidget"><img src="{{ url('/public/user')}}/assets/images/map.jpg" alt=""></div>
                            </div>

                            <div class="sectionRom-widget">
                                <h4 class="text-uppercase">SERVICES OFFERED</h4>
                                <div class="servicesTags">
                                    @php 
								$ser=get_user_meta($user_id,'services');
								$ser_arr=explode(",",$ser);
								@endphp
								@foreach($ser_arr as $services)
								  @if(!empty($services))
                                    <span>{{ get_services_category_by_id($services)}}</span>
                                   @endif
								 @endforeach  
                                </div>
                            </div>
                        </div>
						
						<!-- about us -->
						<div class="project_list tab_area" style="display:none">
					     
						   <div class="aboutTabContent">
                            <div class="row galleryRow">
						  
							@if(count($p_data)>0)
								@foreach($p_data as $data)
							
							@php
							 $image_url='';
							 if(!empty($data->portfolio_image)){
							   $image=json_decode($data->portfolio_image);
							   $first_image=$image[0];
								$image_url=$first_image;
						   }
						   
						   @endphp
                               <div class="col-md-6 form-group20">
                                   <div class="galleryBox">
                                        <div class="imageWrapper position-relative">
                                            <a href="javascript:void(0)" class="d-inline-flex imggllery align-items-center view_all_portfolio" data-id="{{ $data->id }}" data-url="{{ route('portfolio_preview/id')}}"  data-toggle="modal" data-target="#projectDetailsModal"><img src="{{ url('/public/user') }}/assets/images/image-gallery.svg" alt=""></a>
                                             @if(!empty($first_image))
											<img src="{{ $first_image }}" alt="">
										     @endif
                                            <div class="bottomlinks d-flex justify-content-between">
                                                <span class="d-inline-flex locCol align-items-center"><img src="{{ url('/public/user') }}/assets/images/map-pin.svg" alt=""> <span>{{ $data->location}}</span></span>
                                                <span class="d-inline-flex locCol align-items-center"><img src="{{ url('/public/user') }}/assets/images/doller-sign.svg" alt=""> <span>${{ $data->cost }}</span></span>
                                            </div>
                                        </div>
                                       <div class="listDetailsBox gallerylistBox">
                                            <div class="listDetailsRow d-flex justify-content-between">
                                                <div class="listDetailsLeft">
                                                    <label>Title </label>
                                                    <p>{{ $data->portfolio_title }}</p>
                                                </div>
                                                <div class="listDetailsRight text-right">
                                                    <label>Completion Date</label>
                                                    <p>{{ $data->completion_date }}</p>
                                                </div>
                                            </div>
                                            <div class="listTopRow mb-0">
                                                <label>Description</label>
                                                <p class="normalFont">{{ substr($data->description,0,400) }} <a href="#" class="textgreen underlinelink f-12 view_all_portfolio" data-id="{{ $data->id }}" data-url="{{ route('portfolio_preview/id')}}"  data-toggle="modal" data-target="#projectDetailsModal">View More</a></p>
                                            </div>
                                       </div>
                                   </div>
                               </div>
							   @endforeach
							   
							   @else
								  <div class="noData-Div col-md-12">
									<p class="noApplicantText">Sorry No Data Found</p>
								  
									<p class="charImage"><img src="{{ url('/public/user/')}}/assets/images/no-data.svg" alt=""></p>
								</div> 
							   
							   
							   @endif

                              

                           </div>
						   
						   
                        </div>
						 
						 
						</div>
						<!-- rating and review -->
						<div class="rating tab_area" <?php if(isset($_GET['tab'])){ ?> style="display:block"<?php }else{ ?> style="display:none" <?php } ?>>
						   
						   <div class="aboutTabContent">
                           <div class="reviewRating">                               
                               
							    @if(count($r_data)>0)
								   @foreach($r_data as $data)
							       @php 
								    $u_id=get_userid_by_taskid($data->task_id);
								    @endphp
							   
                                <div class="galleryBox d-flex">
                                    <img src="{{ user_profile_image_url($u_id)}}" alt="">
                                    <div class="flex-grow-1 ratingContentWidget">
                                        <div class="starRating mt-2">
				<input id="input-21b" value="{{ $data->rating }}"  name="rating" type="text" class="rating" data-theme="krajee-fas" data-min=0 data-max=5 data-step=0.2 data-size="xm" readonly title="">
										</div>
                                        <p class="semiBold">“{{ $data->comment }}”</p>
                                        <p class="userratingBottom text-lato f-12"><span class="userNameRating">{{ get_userdata($u_id)->name }}</span> <span class="leftSep">{{ date('h:s a, M d,Y',strtotime($data->date))}}</span></p>
                                    </div>
                                </div>
								@endforeach
								@else
									  <div class="noData-Div">
                    <p class="noApplicantText">Sorry No Data Found</p>
                  
                    <p class="charImage"><img src="{{ url('/public/user/')}}/assets/images/no-data.svg" alt=""></p>
                </div> 
							   
								
								@endif
							   
                               
                              </div>
                           </div>
						</div>
						<!-- license details--> 
						<div class="licence_details tab_area" style="display:none">
						       
							    <div class="autoApplyLists">
                                   
                                   
								@if(count($b_data)>0)
								 @php
								$current_date=strtotime(date('m/d/Y'));
								@endphp
								@foreach($b_data as $data)
								
								@php
								$licen_date=strtotime($data->license_exp_date);
									   $lic_date=$data->license_exp_date;
								   if($current_date>$licen_date){
									   $lic_date='<span class="expired">Expired</span>';
								   }																																																																																																									
								@endphp	
								
                                    <div class="autoApplyList d-md-flex justify-content-between">
                                        <div class="licensePic text-center">
                                            <img src="{{ url('/') }}/public/uploads/image/{{ $data->license_image }}" alt="" class="viewlicenseModal" data-toggle="modal" data-target="#viewlicenseModal">
                                        </div>
                                        <div class="licenseDetails d-md-flex justify-content-between flex-grow-1 flex-wrap">
                                            <div class="ApplyListsCol ApplyListsCol-l  d-flex justify-content-between">
                                                <div class="ApplyListsMobLeft">
                                                    <label>Title </label>
                                                    <p>{{ $data->license_title }}</p>
                                                </div>
                                                <div class="ApplyListsMobRight">
                                                    <label>License Number</label>
                                                    <p>{{ $data->license_number }}</p>
                                                </div>
                                            </div>
            
                                            <div class="ApplyListsCol ApplyListsCol-s d-flex justify-content-between">
                                                <div class="ApplyListsMobLeft">
                                                    <label>Issued By</label>
                                                    <p>{{ $data->issued_by }}</p>
                                                </div>
                                                <div class="ApplyListsMobRight">
                                                    <label>Expiry Date</label>
                                                    <p><?php echo  $lic_date;  ?></p>
                                                </div>
                                            </div>
                                            <div class="actionCol d-flex justify-content-between text-right w-100">
                                                <div class="d-block d-md-none text-left">
                                                    <label>Description</label>
                                                    <p class="normalFont">{{ $data->license_description }}</p>
                                                </div><!--Mobile Visible-->
                                                                                      
                                            </div>
        
                                            <div class="d-none d-md-block">
                                                <label>Description</label>
                                                <p class="normalFont">{{ $data->license_description}}</p>
                                            </div><!--Mobile Hidden-->
            
                                        </div>
                                        
                                    </div> 

                                    @endforeach
                                    
									 @else
										  <div class="noData-Div">
											<p class="noApplicantText">Sorry No Data Found</p>
										  
											<p class="charImage"><img src="{{ url('/public/user/')}}/assets/images/no-data.svg" alt=""></p>
										</div> 
									
									@endif

                                    
                                 
                                </div>
							   
							   
						</div>
						
						
						
						
                    </div>
                </div><!--/About Right-->
            </div>
        </div>      
    </div>
	
	<script>
	setTimeout(function(){
	edit_portfolio_fun();
	 }, 3000);
	</script>
	
	@endsection