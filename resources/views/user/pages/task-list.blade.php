@extends('user.layout.app')
@section('content')
@php 
$user_id=Auth::user()->id;


@endphp
        <!--Right Content-->
        <div class="contentArea">
            <!--Account Overview-->
				@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
			</div>
		@endif
            <div class="sectionRow">
                <h2 class="title-head">Account Overview</h2>
                <div class="row form-row justify-content-center">
                    <div class="col-AO form-group">
                        <div class="topBoxCol mobflexBox text-center">
                            <a href="#">
                                <img src="{{ url('/')}}/public/user/assets/images/posted-jobs.svg" alt="">
                                <p class="boxText">Posted Jobs</p>
                                <h3>{{ get_total_job_by_userid($user_id)}}</h3>
                            </a>
                        </div>
                    </div>

                    <div class="col-AO form-group">
                        <div class="topBoxCol mobflexBox text-center">
                            <a href="#">
                                <img src="{{ url('/')}}/public/user/assets/images/open-jobs.svg" alt="">
                                <p class="boxText">Open Jobs</p>
                                <h3>{{ get_total_open_jobs($user_id)}}</h3>
                            </a>
                        </div>
                    </div>

                    <div class="col-AO form-group">
                        <div class="topBoxCol mobflexBox text-center">
                            <a href="#">
                                <img src="{{ url('/')}}/public/user/assets/images/awaiting-assignment.svg" alt="">
                                <p class="boxText">Awaiting Assignment</p>
                                <h3>{{ get_total_awaiting_jobs($user_id)}}</h3>
                            </a>
                        </div>
                    </div>

                    <div class="col-AO form-group">
                        <div class="topBoxCol mobflexBox text-center">
                            <a href="#">
                                <img src="{{ url('/')}}/public/user/assets/images/Jobs-progress.svg" alt="">
                                <p class="boxText">Jobs in Progress</p>
                                <h3>{{ get_total_progress_jobs($user_id)}}</h3>
                            </a>
                        </div>
                    </div>

                    <div class="col-AO form-group">
                        <div class="topBoxCol mobflexBox text-center">
                            <a href="#">
                                <img src="{{ url('/')}}/public/user/assets/images/completed-jobs.svg" alt="">
                                <p class="boxText">Completed Jobs</p>
                                <h3>{{ get_total_complete_jobs($user_id)}}</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Account Overview-->
            <!--Task List-->
            <div class="sectionRow tasklists-widget position-relative">
                <div class="titleRow stickyTitle d-flex414 justify-content-between align-items-center">
                    <h2 class="title-head">Task List (<span>{{ count($data)}}</span>)</h2>
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
                                        <li><a href="javascript:void(0)" data-order="newest" >Newest</a></li>
                                        <li><a href="javascript:void(0)" data-order="oldest" >Oldest</a></li>
                                       
                                    </ul>                
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row provider_task_list">
				@if(count($data)>0)
				@foreach($data as $data)
				 @php 
                  $task_meta=get_task_meta($data->id,'applicant_user');	
				  if(isset($task_meta)){
					  $status="Open";
					  $task_meta=json_decode($task_meta);
					  if(isset( $task_meta->apply_user)){
						  $status="Awaiting Assignment";
					  } 
					  if(isset($task_meta->hire)){
						   $status="In Progress";
					  } 
					  if(isset($task_meta->complete)){
						   $status="Completed";
					  }
				  }
				  
				 @endphp
				
				
                    <div class="col-lg-4 col-md-6 form-group" data-position="{{$data->id }}">
                        <div class="wtBox listDetailsBox">
                            <div class="listTopRow">
                                <label>Job Location</label>
                                <p>@if(!empty($data->address)){{ get_address_by_id($data->address)->address}} @endif</p>
                            </div>
                            <div class="listBottomRows">
                                <div class="listDetailsRow d-flex justify-content-between">
                                    <div class="listDetailsLeft">
                                        <label>Category</label>
                                        <p>{{ get_services_category_by_id($data->category)}}</p>
                                    </div>
                                    <div class="listDetailsRight text-right">
                                        <label>Status</label>
                                        <p class="readyToHire Bold">{{ $status }}</p>
                                    </div>
                                </div>
                                <div class="listDetailsRow d-flex justify-content-between">
                                    <div class="listDetailsLeft viewApplicants">
                                        <label>Applicants </label>
                                        <p><a href="{{ route('status-open',['id'=>$data->id])}}" class="text-primary semiBold underlinelink">View</a></p>
                                    </div>
                                    <div class="listDetailsRight text-right">
                                        <label>Preferred Time</label>
										@if($data->preferred_time==4)
											 <p>{{ date('d/m/Y',strtotime($data->start_time))}} {{ date('h:s a',strtotime($data->end_time)) }}</p>
										@else 
                                        <p>{{ get_preferred_time($data->preferred_time)}}</p>
									    @endif
                                    </div>
                                </div>
                                <div class="listDetailsRow d-flex justify-content-between">
                                    <div class="listDetailsLeft">
                                        <label>Date</label>
                                        <p>{{  date("d/m/Y",strtotime($data->date))}}</p>
                                    </div>
                                    <div class="listDetailsRight text-right">
                                        <label>Time</label>
                                        <p>{{  date("h:i:sa",strtotime($data->time))}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="buttonRowList text-center">   
                                <a href="{{ route('status-open',['id'=>$data->id])}}" class="text-primary semiBold underlinelink f-16">Task Details</a>                                                        
                            </div>
                        </div>
                    </div>
					@endforeach
					
					@else
					<div class="noData-Div col-md-12">
                    <p class="noApplicantText">Sorry No Data Found</p>
                    <p><a href="{{ route('post-task')}}" class="btn btn-orange-outline text-lato">Post a Task</a></p>
                    <p class="charImage"><img src="{{ url('/public/user')}}/assets/images/no-data.svg" alt=""></p>
                </div>	
					
					
					@endif
					
					
					

                  </div>
            </div>
            <!-- //Task List-->
        </div>
        <!--//Right Content-->
		        <!--//Right Content-->
		@endsection