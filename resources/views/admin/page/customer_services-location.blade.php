@extends('admin.layout.app')
@section('content')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                      <section class="content-header d-md-flex justify-content-between">
                        <h1>Customer View</h1>
                        <ol class="breadcrumb my-2">
                          <li class="breadcrumb-item"><a href="{{ route('customer')}}"><span class="linkIcon"><svg width="12" height="12">
                            <use xlink:href="#customer-icon"></use>
                        </svg></span> Customer</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Customer View </li>
                        </ol>
                      </section>
                      <div class="row">
                          <div class="col-md-3">
                            <div class="shadowBox mb-4">                      
                              <div class="boxBody p-0">
                                   <div class="profileUser text-center border-bottom"><img src="{{ user_profile_image_url( $customer_id)}}" alt="" class="profileImage">
                                   </div>

                                   <div class="jobDetails">
                                      <div class="JobDetailsRow d-flex justify-content-between">
                                          <div class="jobLeft">
                                              <label>All Jobs</label>
                                          </div>
                                          <div class="jobRight">
                                              <p>{{ get_total_job_by_userid($customer_id)}}</p>
                                          </div>
                                      </div>

                                      <div class="JobDetailsRow d-flex justify-content-between">
                                          <div class="jobLeft">
                                              <label>Open</label>
                                          </div>
                                          <div class="jobRight">
                                              <p>{{ get_total_open_jobs($customer_id)}}</p>
                                          </div>
                                      </div>  

                                    <div class="JobDetailsRow d-flex justify-content-between">
                                        <div class="jobLeft">
                                            <label>In Progress</label>
                                        </div>
                                        <div class="jobRight">
                                            <p>{{ get_total_progress_jobs($customer_id) }}</p>
                                        </div>
                                    </div>

                                    <div class="JobDetailsRow d-flex justify-content-between">
                                      <div class="jobLeft">
                                          <label>Awaiting Assignment</label>
                                      </div>
                                      <div class="jobRight">
                                          <p>{{ get_total_awaiting_jobs($customer_id)}}</p>
                                      </div>
                                    </div>

                                    <div class="JobDetailsRow d-flex justify-content-between">
                                      <div class="jobLeft">
                                          <label>Completed</label>
                                      </div>
                                      <div class="jobRight">
                                          <p>{{ get_total_complete_jobs($customer_id)}}</p>
                                      </div>
                                    </div>
                                   </div>
                              </div>
                            </div><!--Left Top-->

                            <div class="shadowBox mb-4">                       
                              <div class="boxBody">
                                <ul class="comProfile-list">
                                  <li>
                                    <label class="label">Name</label>
                                    <p class="semiBold">@if(!empty(get_userdata($customer_id))){{ get_userdata($customer_id)->name }} @endif</p>
                                  </li>
                                  <li>
                                      <label class="label">Phone</label>
                                      <p class="semiBold">{{ get_user_meta($customer_id,'phone')}}</p>
                                  </li>
                                  <li>
                                       <label class="label">Email</label>
                                       <p class="semiBold">@if(!empty(get_userdata($customer_id))){{ get_userdata($customer_id)->email }} @endif</p>
                                   </li> 
								   {{ $customer_id }}
                                      @if(!empty(get_user_meta($customer_id,'other_info')))
                                       <li>
                                       <label class="label">Other </label>
                                       <p class="semiBold">{{ get_user_meta($customer_id,'other_info') }} </p>
                                   </li>
								   @endif
                                   <li>
                                       <label class="label">Stripe Customer ID</label>
                                       <p class="semiBold">cus_Hj44b3VZGzcB6Y</p>
                                   </li>                                  
                              </ul>
                              </div>
                            </div><!--Left bottom-->
                          </div><!--// Left col-->
                       <div class="col-md-9">
                            <div class="shadowBox mb-4">
                              <div class="boxTitleWidget d-sm-flex justify-content-between align-content-center">
                                <h4 class="boxTitle d-flex centeredItem">Jobs</h4>
                                <div class="rightOptions">
								    <input type="hidden" name="user_id" value="{{$customer_id }}" class="user_ids">
								
                                    <div class="sortByDiv d-flex align-items-center">
                                      <label class="sortByLable">Sort By:</label>
                                      <select class="form-control sortby" id="sortby">
                                        <option value="DESC">Newest</option>
                                        <option value="ASC">Oldest</option>
                                        <option value="Open">Open</option>
                                        <option value="awaiting_approval">Awaiting Assignment</option>
                                        <option value="in_progress">In Progress</option>
                                        <option value="Completed">Completed</option>
                                      </select>
                                    </div>
                                </div>
                              </div>
							 
							  
                              <div class="boxBody">
                                  <div class="jobsDetailsWidget custom_services_list">
								  
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
								  
								  
								  
                                      <div class="jobsDetailsRow">
                                           <div class="jobsDetailsHead d-sm-flex centeredItem border-bottom">
                                                <h4>{{ get_services_category_by_id($task_data->category)}}</h4>
                                                <div class="d-sm-flex justify-content-between align-items-center">
                                                  <span class="dateWidget ml-sm-2 order-sm-3">{{ date('m/d/Y',strtotime($task_data->date)) }}  <span class="timeSec">{{ date('h:s:a',strtotime($task_data->date)) }}</span></span>
                                                  <a href="{{ route('job-details',['id'=>$task_data->id,'user_type'=>'customer'])}}" class="btn btn-primary btnSML">Job Details</a>
                                                </div>
                                           </div>
                                           <div class="jobDetailsContent d-md-flex justify-content-between flex-wrap">
                                              <div class="jobsDetailsCol jobsDetailsCol-l  d-flex justify-content-between">
                                                 
                                                  <div class="jobsDetailsMobRight">
                                                      <label>Hiring Process</label>
                                                      <p>Ready</p>
                                                  </div>
                                              </div>
                                              <div class="jobsDetailsCol jobsDetailsCol-2 d-flex justify-content-between">
                                                <div class="jobsDetailsMobLeft">
                                                    <label>Preferred Time</label>
                                                    <p>{{ get_preferred_time($task_data->preferred_time)}}</p>
                                                </div>
                                                <div class="jobsDetailsMobRight">
                                                    <label>Preferred Contact</label>
                                                    <p>@if(!empty($task_data->quotes)) {{ implode(' ',json_decode($task_data->quotes))}}  @endif</p>
                                                </div>
                                              </div>
                                              <div class="jobsDetailsCol jobsDetailsCol-3 d-flex justify-content-between">
                                                <div class="jobsDetailsMobLeft">
                                                    <label>Address</label>
                                                    <p>@if(isset($task_data->address)){{ get_address_by_id($task_data->address)->address}} @endif </p>
                                                </div>
                                                <div class="jobsDetailsMobRight">
                                                    <label>Status</label>
                                                    <p>{{ $status }}</p>
                                                </div>
                                              </div>
                                              <div class="jobsDetailsCol jobsDetailsCol-des mt-3">
                                                <label>Description</label>
                                                <p class="normalFont">{{ $task_data->description }}</p>
                                            </div>
                                           </div>
                                      </div><!--//Job Details Row-->
									  
									  @endforeach

                                      

                                  </div>
                              </div>
                            </div>
                          </div><!--// Right col-->
                      </div>
                    </div>
                </main>
                
            </div>
			@endsection