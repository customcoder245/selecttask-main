@extends('user.layout.app')
@section('content')

							@php 
							$user_id=Auth::user()->id;

							$disabledd='';
							$status="open";
							$hire='';
							$complete='';
							$task_user_id=get_task_meta($data->id,'applicant_user');
							$task_user_id=json_decode($task_user_id);
							
							if(isset($task_user_id->apply_user)){
								if(in_array($user_id,$task_user_id->apply_user)){
									$disabledd='disabled_link';
									$status="aw";
								}
							}
                            if(isset($task_user_id->hire)){
								if($task_user_id->hire==$user_id){
									$status="progress";
								}else{
									$status="atap";
								}
								$hire=$task_user_id->hire;
								
							}

                            if(isset($task_user_id->complete)){
								
								if($task_user_id->complete==$user_id){
									$status="complete";
								}else{
									$status="atap";
								}
								
								
								$complete=$task_user_id->hire;
								
							}	
                            							
							@endphp
       <!--Right Content-->
        <div class="contentArea">
         
		  
            <!--Job details-->
            <div class="sectionRow">
                <div class="row">
                    <div class="col-md-5">
                        <div class="titleRow flex-wrap d-flex justify-content-between align-items-center">
                            <h2 class="title-head">Task Details</h2>
                            <div class="Titlestatus d-none d-md-inline-flex align-items-center">
                                <label>Status :</label>
								
								@if($status=="open")
								
                                <a href="#" class="text-secondary semiBold f-14">Open</a>
                                <span class="infoIcon centereditem"><img src="{{ url('/public/user/')}}/assets/images/i.svg" alt="">
                                <span>Apply now to learn more about this project and your customer.</span></span>
                                @elseif($status=="aw")
								  <a href="#" class="text-secondary semiBold f-14">Awaiting Assignment</a>
                                <span class="infoIcon centereditem"><img src="{{ url('/public/user/')}}/assets/images/i.svg" alt="">
                                <span>We are waiting for the customer to assign this job to a pro.</span></span>
                                 @elseif($status=="progress")
								  <a href="#" class="text-secondary semiBold f-14">In Progress</a>
                                <span class="infoIcon centereditem"><img src="{{ url('/public/user/')}}/assets/images/i.svg" alt="">
                                <span>This project is in the works.</span></span>
								   @elseif($status=="atap")
								   <a href="#" class="text-secondary semiBold f-14">Assigned to another professional</a>
                                <span class="infoIcon centereditem"><img src="{{ url('/public/user')}}/assets/images/i.svg" alt="">
                                <span>Unfortunately, this job was assigned to another pro.</span></span>
								   @elseif($status=="complete")
								  <a href="#" class="text-secondary semiBold f-14">Completed</a>
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
                                <a href="javascript:void(0)" class="text-lato viewAllImagespost" data-id="{{ $data->id }}" data-url="{{ route('post-task-images')}}" data-toggle="modal" data-target="#viewAllImagesModal"><img src="{{ url('/public/user/')}}/assets/images/image.svg" alt=""> View all</a>
                            </div>
                            <div class="jobDetails jobDetails-provider">
                                <div class="JobDetailsTopRow d-flex justify-content-between align-items-center">
                                    <div class="jobLeft">
                                        <div class="d-none d-md-block">
                                            <label>Date</label>
                                            <p>{{ date('d/m/Y',strtotime($data->date))}}</p>
                                        </div>
                                        <div class="d-block d-md-none">
                                            <label>Status</label>
                                            <p><a href="#" class="text-secondary semiBold">Open</a>
                                                <span class="infoIcon centereditem"><img src="{{ url('/public/user/')}}/assets/images/i.svg" alt="">
                                                <span>Apply now to learn more about this project and your customer.</span></span></p>                                            
                                        </div>
                                        
                                    </div>
                                   
                                </div>
<hr>

                                <div class="JobDetailsRow d-md-none d-flex justify-content-between">
                                    <div class="jobLeft">
                                        <label>Date</label>
                                    </div>
                                    <div class="jobRight">
                                        <p>07/15/2020</p>
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
                                    <div class="jobLeft 444">
                                        <label>Preferred Time</label>
                                    </div>
                                    <div class="jobRight">
									
                                        <p>@if($data->preferred_time==4) 
										@if(!empty($data->start_time)){{ date("d/m/Y",strtotime($data->start_time)) }} @else {{ date("d/m/Y",strtotime($data->date))}} @endif
											{{ $data->end_time }}
										@else
											{{ get_preferred_time($data->preferred_time) }} @endif</p>
                                    </div>
                                </div>

                                <div class="JobDetailsRow d-flex justify-content-between">
                                    <div class="jobLeft">
                                        <label>Preferred Contact</label>
                                    </div>
                                    <div class="jobRight">
									
									@php
									$p_con='';
									
									 if(!empty($data->quotes) && ($data->quotes !='null')){
									if(isset($data->quotes)){
										$qut=json_decode($data->quotes);
										echo implode(", ",$qut);
									}
									}
									 
									@endphp
                                        <p>{{ $p_con }}</p>
                                    </div>
                                </div>
                                     
                                <div class="JobDetailsRow jb_desc d-flex justify-content-between">
                                    <div class="jobLeft">
                                        <label>Job Description</label>
                                    </div>
                                    <div class="jobRight">
                                        <p>{{ $data->description}}</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-7 pl-lg-5">
					<?php// die();?>
					
					@if( ($status=="progress") || ($status=="complete") || ($status=="atap"))
					<div class="topButtons text-right text-lato f-16 mb-2">
                            <a href="{{ route('view-invoice',['id'=>$data->id])}}" target="_blank" class="textgreen underlinelink Bold  d-md-inline-block d-none">View Invoice</a>
                            @if($status=="progress")
							<a href="#" class="btn btn-green d-md-inline-block d-none complete_task_button" data-toggle="modal" data-id="{{ $data->id }}" data-user_id="{{ $user_id }}" data-target="#markCompletedModal">Task Completed</a>
                           @endif
                        </div>
					@endif
					
                       <div class="applicantInfo">
                           <div class="wtbox">
                                <div class="jobDetails jobDetails-provider"> 
                                    <div class="JobDetailsRow d-flex justify-content-between">
                                        <div class="jobLeft">
                                            <label>Total Applicants</label>
                                        </div>
                                        <div class="jobRight">
                                            <p>{{ get_total_applicant_for_task($data->id) }}</p>
                                        </div>
                                    </div>
                                    <div class="JobDetailsRow d-flex justify-content-between">
                                        <div class="jobLeft">
                                            <label>Price</label>
                                        </div>
                                        <div class="jobRight">
                                            <p>$10</p>
                                        </div>
                                    </div>  
                                </div>                                   
                            </div>
                          @if($status=="open")
                           <p class="text-center jobApply">
						   <a href="#" class="btn btnLg btn-green btn-secondary-shadow applynow_popup {{ $disabledd }}" data-id="{{ $data->id }}" data-user_id="{{ $user_id }}" data-toggle="modal" data-target="#applyJobModal">Apply Now </a></p>
                           @endif                      
					  </div>
					   @if($status=="open")
                        <div class="applicantLists">
                            <div class="noApplicant p-2 text-center text-lato">
                                <p class="noApplicantText">Apply Now To get Customer Information</p>
                                <p class="charImage"><img src="{{ url('/public/user/')}}/assets/images/status-vector.svg" alt=""></p>
                                
                            </div>
                            
                        </div>
						 @elseif(($status=="aw") || ($status=="progress") || ($status=="complete"))
						 <div class="wtbox applicantsBox custmerBox mt-3">
                            <h3 class="text-lato">Customer Info</h3>
                            <div class="jobDetails jobDetails-provider">
                                <div class="JobDetailsRow d-flex justify-content-between">
                                    <div class="jobLeft">
                                        <label>Name</label>
                                    </div>
                                    <div class="jobRight">
                                        <p> @if(!empty(get_userdata($data->id))){{ get_userdata($data->id)->name }} @endif</p>
                                    </div>
                                </div>
                                <div class="JobDetailsRow d-flex justify-content-between">
                                    <div class="jobLeft">
                                        <label>Customer Email</label>
                                    </div>
                                    <div class="jobRight">
                                        <p>@if(!empty(get_userdata($data->id))) {{ get_userdata($data->id)->email }} @endif</p>
                                    </div>
                                </div>
                                <div class="JobDetailsRow d-flex justify-content-between">
                                    <div class="jobLeft">
                                        <label>Customer Contact</label>
                                    </div>
                                    <div class="jobRight">
                                        <p>{{ get_user_meta($data->user_id,'phone')}}</p>
                                    </div>
                                </div>
                                <div class="JobDetailsRow d-flex justify-content-between">
                                    <div class="jobLeft">
                                        <label>Additional Contact</label>
                                    </div>
                                    <div class="jobRight">
                                        <p>{{ get_user_meta($data->user_id,'phone')}}</p>
                                    </div>
                                </div>
                                <div class="JobDetailsRow d-flex justify-content-between">
                                    <div class="jobLeft">
                                        <label>Customer Address</label>
                                    </div>
                                    <div class="jobRight">
                                        <p>@if(!empty(get_address_by_id($data->address))){{ get_address_by_id($data->address)->address}} @endif</p>
                                    </div>
                                </div>
                            </div>
                        </div>
						@endif
                        
                    </div>
                </div>
                
                
               
                
            </div>
            <!-- //Task List-->
        </div>
        <!--//Right Content-->
			@endsection