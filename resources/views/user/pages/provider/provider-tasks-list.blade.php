@extends('user.layout.app')
@section('content')
    @php
	 $user_id=Auth::user()->id;
	$task_list_count1=array();
	$task_list_count=get_user_meta($user_id,'task_list');
	$aw_count=0;
	$pro_count=0;
	$com_pro=0;
	if(isset($task_list_count)){
		$task_list_count1=json_decode($task_list_count);
		if(isset($task_list_count1->apply)){
			$aw_count=count($task_list_count1->apply);
		}
		if(isset($task_list_count1->hire)){
			$pro_count=count($task_list_count1->hire);
		}
		if(isset($task_list_count1->complete)){
		$com_pro=count($task_list_count1->complete);
		}
	}
	@endphp
       
        <!--Right Content-->
        <div class="contentArea">
            <!--Account Overview-->
            <div class="sectionRow">
                <h2 class="title-head">Account Overview</h2>
                <div class="row form-row">
                    <div class="col-lg-3 col-md-6 form-group">
                        <div class="topBoxCol mobflexBox text-center">
                            <a href="#">
                                <img src="{{ url('/public/user/')}}/assets/images/mybids.svg" alt="">
                                <p class="boxText">Bids</p>
                                <h3>{{ $aw_count }}</h3>
                            </a>                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 form-group">
                        <div class="topBoxCol mobflexBox text-center">
                            <a href="#">
                                <img src="{{ url('/public/user/')}}/assets/images/awaiting-assignment.svg" alt="">
                                <p class="boxText">Awaiting Assignment</p>
                                <h3>{{ $aw_count }}</h3>
                            </a>                           
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 form-group">
                        <div class="topBoxCol mobflexBox text-center">
                            <a href="#">
                                <img src="{{ url('/public/user/')}}/assets/images/Jobs-progress.svg" alt="">
                                <p class="boxText">Jobs in Progress</p>
                                <h3>{{ $pro_count }}</h3>
                            </a>                            
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 form-group">
                        <div class="topBoxCol mobflexBox text-center">
                            <a href="#">
                                <img src="{{ url('/public/user/')}}/assets/images/completed-jobs.svg" alt="">
                                <p class="boxText">Completed Jobs</p>
                                <h3>{{ $com_pro }}</h3>
                            </a>                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Account Overview-->
            <!--Task List-->
			@php 
			$count_job=0;
			$hired=array();
			$complete_arr=array();
			$list_array=array();
				$data=get_user_meta($user_id,'task_list');
				if(!empty($data)){
				$data=json_decode($data);
				$data=(array)$data;
				$data2=$data;
				
				
				if(isset($data2['apply'])){
					$count_job=count($data2['apply']);
					$list_array=$data2['apply'];
				}
				
				if(isset($data2['hire'])){
					$count_job +=count($data2['hire']);
					$list_array=array_merge($list_array,$data2['hire']);
					
					$hired=$data2['hire'];
				}
				if(isset($data2['complete'])){
					$count_job +=count($data2['complete']);
					$list_array=array_merge($list_array,$data2['complete']);
					$complete_arr=$data2['complete'];
				}
				}
				
				@endphp
			
            <div class="sectionRow tasklists-widget">
                <div class="titleRow d-flex414 justify-content-between align-items-center">
                    <h2 class="title-head">Task List (<span>{{ $count_job}}</span>)</h2>
                    <div class="rightFilter">
                        <ul class="filterOptions">
                            <li onclick="myFilters()">
                                <label for="filterBy">Filter By:</label>
                                <span class="underlinelink semiBold">12 Filter</span>
                            </li>
                            <li class="customDD">
                                <label class="sortBy">Sort By:</label>
                                <a  href="javascript:void(0)" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="underlinelink semiBold ddmenuOption">Newest</a>
                                <!-- <select class="form-control" id="sortBy">
                                    <option>Newest</option>
                                    <option>Oldest</option>                                    
                                </select> -->
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="custTypeButton">
                                    <ul class="submenuLinks submenuLinks2">
                                        <li><a href="javascript:void(0)" data-order="newest">Newest</a></li>
                                        <li><a href="javascript:void(0)" data-order="oldest">Oldest</a></li>
                                       
                                    </ul>                
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row provider_task_list">
				
				@if($count_job>0)
				@php 
			     rsort($list_array);
		     	@endphp 
				@if(isset($list_array))
					@foreach($list_array as $apply)
                     @php				     
					 $apply_data=get_job_by_id($apply);
					 @endphp
					  @if(!empty($apply_data))
					  
                    <div class="col-lg-4 col-md-6 form-group" data-position="{{ $apply }}">
                        <div class="wtBox listDetailsBox">                           
                            <div class="listBottomRows">
                                <div class="listDetailsRow d-flex justify-content-between">
                                    <div class="listDetailsLeft">
                                        <label>Job Location</label>
                                        <p>{{ get_address_by_id($apply_data->address)->address}}</p>
                                    </div>  
                                    <div class="listDetailsRight text-right">
                                        <label>Category</label>
                                        <p>{{ get_services_category_by_id($apply_data->category)}}</p>
                                    </div>                                 
                                </div>
                                <div class="listDetailsRow d-flex justify-content-between">
                                    <div class="listDetailsLeft">
                                        <label>Contact Name</label>
                                        <p>{{ get_userdata($apply_data->user_id)->name }}</p>
                                    </div>
                                    <div class="listDetailsRight text-right">
                                        <label>Contact Number</label>
                                        <p>{{ get_user_meta($apply_data->user_id,'phone' )}}</p>
                                    </div>
                                </div>
                                <div class="listDetailsRow d-flex justify-content-between">
                                    <div class="listDetailsLeft">
                                        <label>Date</label>
                                        <p>{{ date('d/m/y', strtotime($apply_data->date))}}</p>
                                    </div>
                                    <div class="listDetailsLeft text-right">
                                        <label>Time</label>
                                        <p> {{ date("h:ia",strtotime($apply_data->time)) }}</p>
                                    </div>
                                </div>
                                <div class="listDetailsRow d-flex justify-content-between align-items-center">
                                    <div class="listDetailsLeft">
                                        <label>Status</label>
										@if(get_assign_to_another($apply,$user_id)==1)
										<p class="readyToHire Bold">Assigned to another professional</p>
										@elseif(in_array($apply,$hired))
										 <p class="readyToHire Bold">In Progress</p>
									    @elseif(in_array($apply, $complete_arr))
											<p class="readyToHire Bold">Complete</p>
                                         @else									
                                        <p class="readyToHire Bold">Awaiting Assignment</p>
									 @endif
                                    </div>
                                    <div class="listDetailsRight text-right">
                                        <a href="{{ route('provider-Status-open',['id'=>$apply_data->id])}}" class="text-primary semiBold underlinelink f-16">Read More</a>
                                    </div>
                                </div> 
                            </div>
                          
                        </div>
                    </div>
					@endif
					@endforeach
					@endif
					@else
              				<div class="noData-Div col-md-12">
								<p class="noApplicantText">Sorry No Data Found</p>
								<p><a href="{{ route('provider-search-task')}}" class="btn btn-orange-outline text-lato">Search Task</a></p>
								<p class="charImage"><img src="{{ url('/public/user/')}}/assets/images/no-data.svg" alt=""></p>
							</div> 	
					
					@endif
					

                    


               
                    
                </div>
            </div>
            <!-- //Task List-->
        </div>
        <!--//Right Content-->
			@endsection