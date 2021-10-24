  @extends('user.layout.app')
@section('content')

                @php 
				$user_id=Auth::user()->id;
				$hired='';
                   $status="open";	
                   $total_user=0;				   
					$task_meta= get_task_meta($data->id,'applicant_user');
					$task_meta=json_decode($task_meta);
					$aw_arr=array();
					if(isset($task_meta->apply_user)){
						$status="aw";
						 $total_user=count($task_meta->apply_user);
						$aw_arr=$task_meta->apply_user;
					}
					if(isset($task_meta->hire)){
						if(!empty($task_meta->hire)){
							$total_user=$total_user+1;
						}
						$status="hire";
						
						array_push($aw_arr,$task_meta->hire);
						$hired=$task_meta->hire;
						
					}
					if(isset($task_meta->complete)){
						if(!empty($task_meta->complete)){
							$total_user=$total_user+1;
						}
						
						$status="complete";
						array_push($aw_arr,$task_meta->complete);
						$complete_user=$task_meta->complete;
						$hired=$task_meta->complete;
					}
					
					
					@endphp
      <div class="contentArea">

            <!--Job details-->
            <div class="sectionRow">
                <div class="row">
                    <div class="col-md-5">
                        <div class="titleRow flex-wrap d-flex justify-content-between align-items-center">
                            <h2 class="title-head">Job Details</h2>
							<?php 
							
							?>
							
                            <div class="Titlestatus d-none d-md-inline-flex align-items-center">
                                <label>Status :</label>
								@if($status=="open")
                                <a href="#" class="text-secondary semiBold">Open</a>
                                <span class="infoIcon centereditem"><img src="{{ url('/public/user')}}/assets/images/i.svg" alt="">
                                <span>Currently, no pros have applied to this job. Please check back soon.</span></span>
                               @elseif($status=="aw")
							      <a href="#" class="text-secondary semiBold">Awaiting Assignment</a>
                                <span class="infoIcon centereditem"><img src="{{ url('/public/user')}}/assets/images/i.svg" alt="">
                                <span>Please assign one of the applicants on the right to your job.</span></span>
                                @elseif($status=="hire")
								 <a href="javascript:void(0)" class="text-secondary semiBold centereditem">In Progress
                                    <span class="infoIcon centereditem"><img src="{{ url('/public/user')}}/assets/images/i.svg" alt="">
                                    <span>Your project is in the works. Please contact your pro if you have any questions.</span></span>
                                    
                                </a>
							    
								 @elseif($status=="complete")
								 
								 <a href="#" class="text-secondary semiBold">Completed</a>
                                <span class="infoIcon centereditem"><img src="{{ url('/public/user')}}/assets/images/i.svg" alt="">
                                <span>Your project is complete. We hope you enjoyed your experience with SelectTask. Please leave your pro a review.</span></span>
							
							   @endif
							
							</div>
                        </div> 
                        <div class="wtbox">
                            <div class="jobBannerImage relative">
							@php 
							$post_image=json_decode($data->images);
							
						     if(!empty($post_image)){
								 $first_image=url('/').'/public/uploads/user/post-task/'.$post_image[0];
							 }else{
								 $first_image=url('/').'/public/user/assets/images/No_Image_Available.jpg';
							 }
							@endphp 
                                <img src="{{ $first_image }}" alt="">
                                <a href="javascript:void(0)" class="text-lato viewAllImagespost" data-id="{{ $data->id }}" data-url="{{ route('user-post-task-images')}}" data-toggle="modal" data-target="#viewAllImagesModal"><img src="{{ url('/public/user')}}/assets/images/image.svg" alt=""> View all</a>
                            </div>
                            <div class="jobDetails">
                                <div class="JobDetailsTopRow d-flex justify-content-between">
                                    <div class="jobLeft">
                                        <div class="d-none d-md-block">
                                            <label>Date</label>
                                            <p>07/15/2020</p>
                                        </div>
                                        <div class="d-block d-md-none">
                                            <label>Status</label>
                                            <p><a href="#" class="text-secondary semiBold">Open</a>
                                                <span class="infoIcon centereditem"><img src="{{ url('/public/user')}}/assets/images/i.svg" alt="">
                                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</span></span></p>                                            
                                        </div>
                                        
                                    </div>
									
									@if(($status=="hire")||($status=="complete"))
                                    <div class="jobRight">
                                        <label>Assigned to</label>
                                        <p>
										 @if(!empty(get_userdata($hired)))
										{{ get_userdata($hired)->name}}
									   @endif
									</p>
                                    </div>
									@endif
                                </div>

                                <div class="JobDetailsRow d-flex justify-content-between">
                                    <div class="jobLeft">
                                        <label>Location</label>
                                    </div>
                                    <div class="jobRight">
                                        <p>@if(!empty($data->address)){{ get_address_by_id($data->address)->address }} @endif</p>
                                    </div>
                                </div>

                                <div class="JobDetailsRow d-md-none d-flex justify-content-between">
                                    <div class="jobLeft">
                                        <label>Date</label>
                                    </div>
                                    <div class="jobRight">
                                        <p>{{ date('d/m/Y',strtotime($data->date))}}</p>
                                    </div>
                                </div>

                                <div class="JobDetailsRow d-flex justify-content-between">
                                    <div class="jobLeft">
                                        <label>Service Categories:</label>
                                    </div>
                                    <div class="jobRight">
                                        <p>{{ get_services_category_by_id($data->category)}}</p>
                                    </div>
                                </div>
                               
                                <div class="JobDetailsRow d-flex justify-content-between">
                                    <div class="jobLeft">
                                        <label>Preferred Time</label>
                                    </div>
                                    <div class="jobRight">
                                       @if($data->preferred_time==4)
											 <p>{{ date('d/m/Y',strtotime($data->start_time))}} {{ date('h:s a',strtotime($data->end_time)) }}</p>
										@else 
                                        <p>{{ get_preferred_time($data->preferred_time)}}</p>
									    @endif
                                    </div>
                                </div>

                                <div class="JobDetailsRow d-flex justify-content-between">
                                    <div class="jobLeft">
                                        <label>Preferred Contact</label>
                                    </div>
                                    <div class="jobRight">
									<p>
									@php
									$p_con='';
									
									 if(($data->quotes !="null" ) && (!empty($data->quotes))){
									if(isset($data->quotes)){
										if(!empty($data->quotes)){
										$qut=json_decode($data->quotes);
									    if(!empty($qut) && $qut !="null"){
											echo implode(", ",$qut);
										}
										}
									}
									} 
									
										
									
									@endphp
                                        </p>
                                    </div>
                                </div>

                                <div class="JobDetailsRow jb_desc d-flex justify-content-between">
                                    <div class="jobLeft">
                                        <label>Job Description</label>
                                    </div>
                                    <div class="jobRight">
                                        <p>{{ $data->description }}</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-7"> 
					@if($status=="hire")
					  <div class="topButtons text-right text-lato f-16 mb-2">
                            <a href="javascript:void(0)" class="btn btn-green d-md-inline-block d-none complete_task_button" data-toggle="modal" data-id="{{ $data->id }}" data-user_id="{{ $user_id }}" data-target="#markCompletedModal">Complete Task</a>                            
                        </div>
						
					@endif
					
					@if($status=="complete")
					@if(get_task_meta($data->id,'review_status')==0)
						<div class="topButtons text-right text-lato f-16 mb-2">
                            <a href="javascript:void(0)" class="btn btn-green d-md-inline-block d-none add_review_button"   data-toggle="modal" data-target="#addReviewModal" data-id="{{ $data->id }}" data-user_id="{{ $complete_user }}"  >Add Review</a>
                            
                        </div>
					@else
                     <div class="topButtons text-right text-lato f-16 mb-2">
                            <a href="{{ route('profile-preview',['id'=>$hired])}}?tab=review" class="btn btn-green-outline d-md-inline-block d-none" target="_blank">View Review</a>                            
                        </div> 						
                       					
					@endif
					@endif
					
                    
                        <div class="wtbox applicantsBox">
                            <h3 class="text-lato">Applicants (<span>{{ $total_user }}</span>)</h3>
							
							@if($status=="open")
                            <div class="applicantLists">
                                <div class="noApplicant p-5 text-center text-lato">
                                    <p class="noApplicantText">Sorry no Applicants have applied yet</p>
                                    <p class="charImage"><img src="{{ url('/public/user')}}/assets/images/charactor.svg" alt=""></p>
                                    <p class="mt-md-4 mt-3 newApplicants">Searching for new applicants</p>
                                </div>
                                
                            </div>
							@elseif(($status=="aw") || ($status=="hire") || ($status=="complete"))
							@if(count($aw_arr)>0)
							@php
                              $classs='';
							  if(!empty($hired)){
								 $classs='disabledLink'; 
							  }
							  if($status=="complete"){
								 $classs='disabledLink';  
							  }
							  
                             @endphp	
							 			 
							@foreach($aw_arr as $aw_arr)
							 @if(!empty($aw_arr))
							<div class="applicantList-row d-flex">
                                    <div class="applicant-image">
                                        <img src="{{ get_profile_image_src($aw_arr) }}" alt="">
                                        <a href="#" class="btn btn-green assign_button {{  $classs }}" data-id="{{ $data->id }}" data-user_id="{{ $aw_arr }}">Assign</a>
                                    </div>
                                    <div class="applicantDetails flex-grow-1">
                                        <div class="d-flex justify-content-between">
                                            <h4> @if(!empty(get_userdata($aw_arr))){{ get_userdata($aw_arr)->name }} @endif</h4>
                                            <a href="{{ route('profile-preview',['id'=>$aw_arr])}}" class="underlinelink text-primary">View Profile</a>
                                        </div>
                                        <div class="applicantsInfoContent d-flex flex-wrap justify-content-between">
                                            <div class="infoContentCol timeHired centereditem">
                                                <span class="iconLT"><img src="{{ url('/public/user')}}/assets/images/time-hired.svg" alt=""></span>
                                                <div class="contentRT">
                                                    <label>Times Hired</label>
                                                    <p>{{ get_total_hire_sp($aw_arr)}}</p>
                                                </div>
                                            </div>
                                            <div class="infoContentCol contactCol centereditem">
                                                <span class="iconLT"><img src="{{ url('/public/user')}}/assets/images/contacts.svg" alt=""></span>
                                                <div class="contentRT">
                                                    <label>Contact</label>
                                                    <p>{{ get_user_meta($aw_arr,'phone')}}</p>
                                                </div>
                                            </div>
                                            <div class="infoContentCol starRating mr-0 text-center">
                                                <div class="ratingDiv"><input id="input-21b" value="{{ get_average_review_by_user($aw_arr)}}"  name="rating" type="text" class="rating" data-theme="krajee-fas" readonly data-min=0 data-max=5 data-step=0.2 data-size="xm"
               required title="" style="display:none;"></div>
                                                <p>{{ get_total_review_by_user($aw_arr) }} Reviews</p>
                                            </div>
                                        </div>
										<div class="message_area"></div>
										
                                    </div>
                                </div>
								 @endif
								@endforeach
							@endif
							
							@endif
							
							
                        </div>
						
						
                    </div>
                </div>
                
                
               
                
            </div>
            <!-- //Task List-->

        </div>
		@endsection