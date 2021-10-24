@extends('admin.layout.app')
@section('content')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                      <section class="content-header d-md-flex justify-content-between">
                        <h1>Service Location</h1>
						@if($user_type=="sp")
							
						<ol class="breadcrumb my-2">
                          <li class="breadcrumb-item"><a href="{{ route('service-provider')}}"><span class="linkIcon"><svg width="12" height="12">
                            <use xlink:href="#SP-icon"></use>
                        </svg></span> Service Provider</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Service Provider View </li>
                        </ol>
						
						
						@elseif($user_type=="customer")
                        <ol class="breadcrumb my-2">
                          <li class="breadcrumb-item"><a href="{{ route('customer')}}"><span class="linkIcon"><svg width="12" height="12">
                            <use xlink:href="#customer-icon"></use>
                        </svg></span> Customer</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Job Details </li>
                        </ol>
						
						@endif 
                      </section>
                      
                              <div class="shadowBox mb-4">                       
                        <div class="boxBody">
                            <div class="row">
							  @php
							 $img= json_decode(get_job_images_by_id($task_data->id));
							  @endphp
							  
                                <div class="col-md-6 text-center"><img src="{{  $img[0]}}" alt=""></div>
                                <div class="col-md-6">
                                  <div class="jobDetails">
                                    <div class="JobDetailsRow d-flex justify-content-between">
									
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
									
									
									
                                        <div class="jobLeft">
                                            <label>Name</label>
                                        </div>
                                        <div class="jobRight">
                                            <p><a href="#" class="text-green">@if(!empty(get_userdata($task_data->user_id))){{ get_userdata($task_data->user_id)->name }}	@endif</a></p>
                                        </div>
                                    </div>

                                    <div class="JobDetailsRow d-flex justify-content-between">
                                        <div class="jobLeft">
                                            <label>Date</label>
                                        </div>
                                        <div class="jobRight">
                                            <p>{{ date('m/d/y h:s a', strtotime($task_data->date))}}</p>
                                        </div>
                                    </div>  

                                  

                                  <div class="JobDetailsRow d-flex justify-content-between">
                                    <div class="jobLeft">
                                        <label>Location</label>
                                    </div>
                                    <div class="jobRight">
                                        <p>@if(isset($task_data->address)){{ get_address_by_id($task_data->address)->address}} @endif </p>
                                    </div>
                                  </div>

                                  <div class="JobDetailsRow d-flex justify-content-between">
                                    <div class="jobLeft">
                                        <label>Preferred contact</label>
                                    </div>
                                    <div class="jobRight">
                                        <p>@if(!empty($task_data->quotes)) {{ implode(' ',json_decode($task_data->quotes))}}  @endif</p>
                                    </div>
                                  </div>
                                  <div class="JobDetailsRow d-flex justify-content-between">
                                    <div class="jobLeft">
                                        <label>Status</label>
                                    </div>
                                    <div class="jobRight">
                                        <p>{{  $status }}</p>
                                    </div>
                                  </div>
                                  <div class="JobDetailsRow d-flex justify-content-between">
                                    <div class="jobLeft">
                                        <label>Total Applicants</label>
                                    </div>
                                    <div class="jobRight">
                                        <p>{{ get_total_applicant_for_task($task_data->id)}}</p>
                                    </div>
                                  </div>
                                  <div class="JobDetailsRow d-flex justify-content-between">
                                    <div class="jobLeft">
                                        <label>Service categories</label>
                                    </div>
                                    <div class="jobRight">
                                        <p>{{ get_services_category_by_id($task_data->category)}}</p>
                                    </div>
                                  </div>
                                  <div class="JobDetailsRow d-flex justify-content-between">
                                    <div class="jobLeft">
                                        <label>Job Description</label>
                                    </div>
                                    <div class="jobRight">
                                        <p>{{ $task_data->description }}</p>
                                    </div>
                                  </div>
                                  <div class="JobDetailsRow d-flex justify-content-between">
                                    <div class="jobLeft">
                                        <label>Price</label>
                                    </div>
                                    <div class="jobRight">
                                        <p>$30.00</p>
                                    </div>
                                  </div>
                                  <div class="JobDetailsRow d-flex justify-content-between">
                                    <div class="jobLeft">
                                        <label>Applicants</label>
                                    </div>
                                    <div class="jobRight">
									  @php 
									  $applicant_arr=array();
									  $applicant_ids=get_task_meta($task_data->id,'applicant_user');
									  if(!empty($applicant_ids)){
										  $applicant_ids=json_decode($applicant_ids);
										  if(isset($applicant_ids->apply_user)){
											  $applicant_arr[]=$applicant_ids->apply_user;
										  }
										  if(isset($applicant_ids->hire)){
											 $applicant_arr[]= $applicant_ids->hire;
											 
										  }
										  
										  if(isset($applicant_ids->complete)){
											  $applicant_arr[]= $applicant_ids->complete;
										  }
									  }
									  @endphp
									  
									  
									
                                        <p>
										@foreach($applicant_arr as $applicant_arr)
										 @if(!empty(get_userdata($applicant_arr)))
										<a href="#" class="text-green">{{ get_userdata($applicant_arr)->name }}, </a>
									    @endif
										@endforeach
										
										</p>
                                  </div>
                                 </div>
                                </div>
                            </div>
                        </div>
                      </div>
                          
                    </div>
                </main>
                
            </div>
			@endsection