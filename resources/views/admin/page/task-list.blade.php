@extends('admin.layout.app')
@section('content')


<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                      <section class="content-header">
                        <h1>Task List</h1>
                      </section>
                       
                      <div class="row">
                        <div class="col-md-4 col-sm-4 mb-4">
                          <div class="iconRectangle shadowBox orange-box darkBox">
                            <h3>Customers</h3>
                            <div class="left d-flex justify-content-between mb-3">
                              <div class="icon"><i class="fas fa-users"></i></div>
                              <div class="iconText">										
                                <h5>{{ get_total_user_by_role('customer')}}</h5>
                              </div>
                            </div>
                            <a href="{{ route('customer')}}" class="small-box-footer" target="_blank" >More info <i class="fa fa-arrow-circle-right"></i></a>
                          </div>
                        </div>

                        <div class="col-md-4 col-sm-4 mb-4">
                          <div class="iconRectangle shadowBox secondary-box darkBox">
                            <h3>Service Providers</h3>
                            <div class="left d-flex justify-content-between mb-3">
                              <div class="icon"><i class="fas fa-users-cog"></i></div>
                              <div class="iconText">										
                                <h5>{{ get_total_user_by_role('service_provider')}}</h5>
                              </div>
                            </div>
                            <a href="{{ route('service-provider')}}" class="small-box-footer" target="_blank">More info <i class="fa fa-arrow-circle-right"></i></a>
                          </div>
                        </div>

                        <div class="col-md-4 col-sm-4 mb-4">
                          <div class="iconRectangle shadowBox primary-box darkBox">
                            <h3>Total Jobs</h3>
                            <div class="left d-flex justify-content-between mb-3">
                              <div class="icon"><i class="fas fa-briefcase"></i></div>
                              <div class="iconText">										
                                <h5>{{ get_total_job() }}</h5>
                              </div>
                            </div>
                            <a href="{{ route('admin-task-list')}}" class="small-box-footer" target="_blank">More info <i class="fa fa-arrow-circle-right"></i></a>
                          </div>
                        </div>

                        <div class="col-sm-6 col-lg-3 mb-4">
                          <div class="iconRectangle shadowBox orange-text">
                            <h3>Opened</h3>
                            <div class="left d-flex justify-content-between mb-3">
                              <div class="icon"><i class="fas fa-folder-open"></i></div>
                              <div class="iconText">										
                                <h5>{{ get_total_open_jobs_for_admin() }}</h5>
                              </div>
                            </div>
                            <a href="{{ route('post-task-view',['status'=>'open'])}}" class="small-box-footer task_view_more">More info <i class="fa fa-arrow-circle-right"></i></a>
                          </div>
                        </div>

                        <div class="col-sm-6 col-lg-3 mb-4">
                          <div class="iconRectangle shadowBox secondary-text">
                            <h3>Awaiting Assignment</h3>
                            <div class="left d-flex justify-content-between mb-3">
                              <div class="icon"><i class="fas fa-tasks"></i></div>
                              <div class="iconText">										
                                <h5>{{ get_total_awaiting_jobs_for_admin() }}</h5>
                              </div>
                            </div>
                            <a href="{{ route('post-task-view',['status'=>'awaiting'])}}" class="small-box-footer task_view_more">More info <i class="fa fa-arrow-circle-right"></i></a>
                          </div>
                        </div>

                        <div class="col-sm-6 col-lg-3 mb-4">
                          <div class="iconRectangle shadowBox red-text">
                            <h3>In Progress</h3>
                            <div class="left d-flex justify-content-between mb-3">
                              <div class="icon"><i class="fas fa-hourglass-half"></i></div>
                              <div class="iconText">										
                                <h5>{{ get_total_progress_jobs_for_admin() }}</h5>
                              </div>
                            </div>
                            <a href="{{ route('post-task-view',['status'=>'in_progress'])}}" class="small-box-footer task_view_more">More info <i class="fa fa-arrow-circle-right"></i></a>
                          </div>
                        </div>

                        <div class="col-sm-6 col-lg-3 mb-4">
                          <div class="iconRectangle shadowBox primary-text">
                            <h3>Completed</h3>
                            <div class="left d-flex justify-content-between mb-3">
                              <div class="icon"><i class="fas fa-check-circle"></i></div>
                              <div class="iconText">										
                                <h5>{{ get_total_complete_jobs_for_admin() }}</h5>
                              </div>
                            </div>
                            <a href="{{ route('post-task-view',['status'=>'completed'])}}" class="small-box-footer task_view_more">More info <i class="fa fa-arrow-circle-right"></i></a>
                          </div>
                        </div>

                      </div><!--Top Boxes-->

                      
                      <div class="shadowBox mb-4">
                <form method="post" action="{{ route('admin-task-list-filter')}}" class="admin_task_list_filter">	
                     @csrf				
                        <div class="boxBody">
                          <div class="row">
                            <div class="form-group col-sm-6">
                              <label class="label">Date From</label>
                              <input type="text" class="form-control " id="inputFrom" placeholder="From Date" name="from">
                              </div>
                              <div class=" form-group col-sm-6">
                              <label class="label">Date To</label>
                                <input type="text" class="form-control" id="inputTo" placeholder="To date" name="to">                      
                              </div>
                              
                              <div class="form-group col-sm-4">
                                <label class="label">Category</label>
                                <select class="selectpicker form-control" name="service_category" id="service_category"> 
                                  <option value="">All</option>
								  @foreach(get_services_category() as $category)
                                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                                  @endforeach 
                                </select>
                              </div>
                              <div class="form-group col-sm-4">
                                <label class="label">Preferred Time</label>
                                <select class="selectpicker form-control" name="preferred_time" id="preferred_time"> 
                                  <option value="">Select Time</option>
                                  <option value="1">Within the next 24 hours</option>
                                  <option value="2">Within the next few days</option>
                                  <option value="3">My timing is flexible</option>
                                  <option value="4">Preferred Time</option>
                                </select>
                              </div>
                              <div class="form-group col-sm-4">
                                <label class="label">Request Status</label>
                                 <select class="selectpicker form-control" name="request_status" id="request_status"> 
                                    <option value="">All</option>
                                    <option value="Open">Open</option>
                                    <option value="In Progress">In Progress</option>
                                    <option value="Completed">Completed</option>
                                    <option value="Awaiting Assignment">Awaiting Assignment</option>
                                  </select>
                              </div>
                              <div class="form-group col-sm-4">
                                <label class="label">Search</label>
                                <input type="text" name="search" placeholder="Search in Job Description" class="form-double-input form-control " value="">
                              </div>
                              <div class="form-group col-sm-4 multiselectDD">
                                <label class="label">Location</label>
                                <select id="example-dropUp" name="location" multiple="multiple" class="form-control">
								  @foreach(get_location() as $location)
                                  <option value="{{ $location->id }}">{{$location->name}}</option>
                                  @endforeach
                              </select>
                              </div>
                          </div>
                          <div class="btnsWidget">
                             <a href="{{ route('admin-task-list')}}" class="btn btn-primary reset_button">Reset</a>
                             <button type="submit" class="btn btn-green filter_button">Filter</button>
                          </div>
                        </div>
						</form>
						
                      </div><!--Filter Form--> 

                      <div class="shadowBox mb-4">                       
                        <div class="boxBody boxBody_table">
                          <div class="table-responsive">
                            <table class="table table-bordered table-striped dataTable"  id="example">
                              <thead>
                                <tr>
                                  <th scope="col">Date</th>
                                  <th scope="col">Posted by</th>
                                  <th scope="col">Location</th>
                                  <th scope="col">Category</th>
                                  <th scope="col">Status</th>
                                  <th class="action" scope="col" width="100">Action</th>
                                </tr>
                              </thead>
                              <tbody>
							  
							  
							   @foreach($task_data as $task_data)
							  
							@php 
							  $task_meta=get_task_meta($task_data->id,'applicant_user');	
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
                                <tr>                                
                                  <td> {{ date('m/d/Y',strtotime($task_data->date))}} </td>
                                  <td><a href="#" class="text-green"> @if(!empty(get_userdata($task_data->user_id))){{ get_userdata($task_data->user_id)->name }} @endif</a></td>
                                  <td>@if(isset($task_data->address)){{ get_address_by_id($task_data->address)->address}} @endif</td>
                                  <td>{{ get_services_category_by_id($task_data->category)}}</td>
                                  <td class="opened-status semiBold">{{ $status }}</td>
                                  <td class="action"><a href="{{ route('job-details',['id'=>$task_data->id,'user_type'=>'task_list'])}}" class="btn btn-primary">View Details</a></td>
                                </tr>
								@endforeach
                                
                                
                              </tbody>
                            </table>
							
							
							</div>
                           </div>
						   
						   <div class="filter_table">
                          <!-- <ul class="pagination">
                            <li class="disabled"><span>«</span></li>                       
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#" rel="next">»</a></li>
                          </ul> -->
                        </div>
                      </div><!--Tasklist--> 

                    </div>
                </main>
                
            </div>
			
			@endsection