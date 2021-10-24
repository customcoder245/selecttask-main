@extends('user.layout.app')
@section('content')

@php
$user_id=Auth::user()->id;
@endphp

<!--Right Content-->
            <!--Right Content-->
        <div class="contentArea">
          
            <!--Task List-->
            <div class="sectionRow tasklists-widget">
                <div class="titleRow">
                    <h2 class="title-head mb-4">Search Tasks</h2>
                </div>
                <div class="titleRow stickyTitle d-flex justify-content-end mt-2 mb-4">
                    
                    <div class="rightFilter">
                        <ul>
                            <li onclick="myFilters()">
                                <label for="filterBy">Filter By:</label>
                                <span class="underlinelink semiBold">12 Filter</span>
                            </li>
                            <li class="customDD">
                                <label class="sortBy">Sort By:</label>
                                <a  href="javascript:void(0)" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="underlinelink semiBold">Newest</a>
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
				
				@if(!empty(get_post_task_list()))
					
				 @foreach(get_post_task_list() as $data)
			      @php
				    $hired=0;
					$complete=0;
					$appy_user=0;
				    $task_meta1=array();
			       $task_meta=get_task_meta($data->id,'applicant_user');
                    if(isset($task_meta)){
						$task_meta1=json_decode($task_meta);
						
						if(isset($task_meta1->apply_user)){
							$appy_user=count($task_meta1->apply_user);
						}
						if(isset($task_meta1->hire)){
							$hired=$task_meta1->hire;
						}
						if(isset($task_meta1->complete)){
							$complete=$task_meta1->complete;
						}
					}				   
          		  @endphp
				 
				  @if( empty($hired) && empty($complete))
					  @php 
							$disabledd='';
							$task_user_id=get_task_meta($data->id,'applicant_user');
							$task_user_id=json_decode($task_user_id);
							
							if(isset($task_user_id->apply_user)){
								if(in_array($user_id,$task_user_id->apply_user)){
									$disabledd='disabled_link';
								}
							}
							@endphp
                    <div class="col-lg-4 col-md-6 form-group {{ $disabledd }}" data-position="{{ $data->id }}" @if(!empty($disabledd)) style="display:none" @endif >
                        <div class="wtBox listDetailsBox">                           
                            <div class="listBottomRows">
                               
                                <div class="listDetailsRow d-flex justify-content-between">
                                    <div class="listDetailsLeft">
                                        <label>Job Location</label>
                                        <p>@if(!empty(get_address_by_id($data->address)))
										{{ get_address_by_id($data->address)->address }}
									   @endif
									</p>
                                    </div>
									<div class="listDetailsLeft text-right">
                                        <label>Category</label>
                                        <p>{{ get_services_category_by_id($data->category) }}</p>
                                    </div>
                                </div>
                                <div class="listDetailsRow d-flex justify-content-between">
                                    
                                    <div class="listDetailsLeft ">
                                        <label>Price</label>
                                        <p>$10</p>
                                    </div>
									 <div class="listDetailsLeft text-right">
                                        <label>Total Applicants</label>
                                        <p>{{ $appy_user }}</p>
                                    </div>
                                </div>
                                

                                <div class="listDetailsRow d-flex justify-content-between">
                                    <div class="listDetailsLeft">
                                        <label>Date</label>
                                        <p>09/12/2019</p>
                                    </div>
                                    <div class="listDetailsLeft text-right">
                                        <label>Time</label>
                                        <p>08:24 PM</p>
                                    </div>
                                </div>
                               
                               
                            </div>
							
                            <div class="buttonRowList d-flex justify-content-between align-items-center">
                                <a href="{{ route('provider-Status-open',['id'=>$data->id])}}" class="text-primary semiBold underlinelink f-16">Read More</a>
                                <a href="#" class="btn btnLg btn-green btn-secondary-shadow applynow_popup {{$disabledd}}" data-id="{{ $data->id }}" data-user_id="{{ $user_id }}" data-toggle="modal"  data-target="#applyJobModal">Apply Now </a>
                            </div>
                        </div>
                    </div>
					 @endif
					@endforeach
					@endif
					
                  
                </div>
            </div>
            <!-- //Task List-->
        </div>
        <!--//Right Content-->
            <!-- //Task List-->
			@endsection