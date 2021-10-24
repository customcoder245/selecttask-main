@extends('admin.layout.app')
@section('content')

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                      <section class="content-header d-md-flex justify-content-between">
                        <h1>Service Provider View </h1>
                        <ol class="breadcrumb my-2">
                          <li class="breadcrumb-item"><a href="{{ route('service-provider')}}"><span class="linkIcon"><svg width="12" height="12">
                            <use xlink:href="#SP-icon"></use>
                        </svg></span> Service Provider </a></li>
                          <li class="breadcrumb-item active" aria-current="page">Service Provider View </li>
                        </ol>
                      </section>
                      <div class="row">
                          <div class="col-md-3">
                            <div class="shadowBox mb-4">                       
                              <div class="boxBody p-0">
                                   <div class="profileUser text-center border-bottom"><img src="{{ get_profile_image_src($sp_id) }}" alt="" class="profileImage">
                                      <h3>{{ get_userdata($sp_id)->name}}</h3>
                                   </div>

                                   <div class="jobDetails">
                                      <div class="JobDetailsRow d-flex justify-content-between">
                                          <div class="jobLeft">
                                              <label>All Jobs</label>
                                          </div>
                                          <div class="jobRight">
                                              <p>{{ sp_total_job($sp_id)}}</p>
                                          </div>
                                      </div>

                                      <div class="JobDetailsRow d-flex justify-content-between">
                                          <div class="jobLeft">
                                              <label>Awaiting Assignment</label>
                                          </div>
                                          <div class="jobRight">
                                              <p>{{ sp_total_job_by_status($sp_id,'apply')}}</p>
                                          </div>
                                      </div>  

                                    <div class="JobDetailsRow d-flex justify-content-between">
                                        <div class="jobLeft">
                                            <label>In Progress</label>
                                        </div>
                                        <div class="jobRight">
                                            <p>{{ sp_total_job_by_status($sp_id,'hire')}}</p>
                                        </div>
                                    </div>

                                    <div class="JobDetailsRow d-flex justify-content-between">
                                      <div class="jobLeft">
                                          <label>Completed</label>
                                      </div>
                                      <div class="jobRight">
                                          <p>{{ sp_total_job_by_status($sp_id,'complete')}}</p>
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
                                    <p class="semiBold">{{ get_userdata($sp_id)->name}}</p>
                                  </li>
                                  <li>
                                      <label class="label">Phone</label>
                                      <p class="semiBold">{{ get_user_meta($sp_id,'phone')}}</p>
                                  </li>
                                  <li>
                                       <label class="label">Email</label>
                                       <p class="semiBold">{{ get_userdata($sp_id)->email}}</p>
                                   </li> 

 @if(!empty(get_user_meta($sp_id,'other_info')))
                                       <li>
                                       <label class="label">Other </label>
                                       <p class="semiBold">{{ get_user_meta($sp_id,'other_info') }} </p>
                                   </li>
								   @endif
								   
                                   <li>
                                       <label class="label">Stripe Customer ID</label>
                                       <p class="semiBold"></p>
                                   </li>                                  
                              </ul>
                              </div>
                            </div><!--Left bottom-->
                          </div><!--// Left col-->
                          <div class="col-md-9">
                            <div class="shadowBox mb-4">
                              <div class="boxTitleWidget d-sm-flex justify-content-between align-content-center">
                                <h4 class="boxTitle d-flex centeredItem">Jobs <a href="#" class="text-green semiBold previewLink">Preview Profile</a></h4>
                                <div class="rightOptions">
                                    <div class="sortByDiv d-flex align-items-center">
									<input type="hidden" name="user_id" class="user_ids" value="{{$sp_id }}">
									
                                      <label class="sortByLable">Sort By:</label>
                                      <select class="form-control sortby" id="sortby2">
                                        <option value="DESC">Newest</option>
                                        <option value="ASC">Oldest</option>
                                        
                                        <option value="Awaiting Approval">Awaiting Assignment</option>
                                        <option value="In Progress">In Progress</option>
                                        <option value="Completed">Completed</option>
                                      </select>
                                    </div>
                                </div>
                              </div>
                               <div class="boxBody">
                                  <div class="jobsDetailsWidget sp_job_list">
								  
								   @php
										 
										$task_list_count1=array();
										$task_list_count=get_user_meta($sp_id,'task_list');
										
										$aw_count=0;
										$pro_count=0;
										$com_pro=0;
										$hired=array();
			                            $complete_arr=array();
										$list_array=array();
										if(isset($task_list_count)){
											$task_list_count1=json_decode($task_list_count);
											
											if(isset($task_list_count1->apply)){
												$aw_count=count($task_list_count1->apply);
												$list_array=$task_list_count1->apply;
											}
											if(isset($task_list_count1->hire)){
												$pro_count=count($task_list_count1->hire);
												$list_array=array_merge($list_array,$task_list_count1->hire);
												$hired=$task_list_count1->hire;
											}
											if(isset($task_list_count1->complete)){
											$com_pro=count($task_list_count1->complete);
											$list_array=array_merge($list_array,$task_list_count1->complete);
											$complete_arr=$task_list_count1->complete;
											}
										}
									@endphp
								  
								  
								   @if(count($list_array)>0)
								    @foreach($list_array as $list_array)
										 @php				     
										 $apply_data=get_job_by_id($list_array);
										 @endphp
										  @if(!empty($apply_data))
								
                                      <div class="jobsDetailsRow">
                                           <div class="jobsDetailsHead d-sm-flex centeredItem border-bottom">
                                                <h4>{{ get_services_category_by_id($apply_data->category)}}</h4>
                                                <div class="d-sm-flex justify-content-between align-items-center">
                                                  <span class="dateWidget ml-sm-2 order-sm-3">{{ date('m/d/Y',strtotime($apply_data->date)) }}<span class="timeSec">{{ date('h:s:a',strtotime($apply_data->date)) }}</span></span>
                                                  <a href="{{ route('job-details',['id'=>$apply_data->id,'user_type'=>'sp'])}}" class="btn btn-primary btnSML">Job Details</a>
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
                                                    <p>{{ get_preferred_time($apply_data->preferred_time)}}</p>
                                                </div>
                                                <div class="jobsDetailsMobRight">
                                                    <label>Preferred Contact</label>
                                                    <p>@if(!empty($apply_data->quotes)) {{ implode(' ',json_decode($apply_data->quotes))}}  @endif</p>
                                                </div>
                                              </div>
                                              <div class="jobsDetailsCol jobsDetailsCol-3 d-flex justify-content-between">
                                                <div class="jobsDetailsMobLeft">
                                                    <label>Address</label>
                                                    <p>@if(isset($apply_data->address)){{ get_address_by_id($apply_data->address)->address}} @endif </p>
                                                </div>
                                                <div class="jobsDetailsMobRight">
                                                    <label>Status</label>
													@if(get_assign_to_another($list_array,$sp_id)==1)
										<p >Assigned to another professional</p>
										@elseif(in_array($list_array,$hired))
										 <p >In Progress</p>
									    @elseif(in_array($list_array, $complete_arr))
											<p >Complete</p>
                                         @else									
                                        <p >Awaiting Assignment</p>
									 @endif
													
                                                    
                                                </div>
                                              </div>
                                              <div class="jobsDetailsCol jobsDetailsCol-des mt-3">
                                                <label>Description</label>
                                                <p class="normalFont">{{ $apply_data->description }}</p>
                                            </div>
                                           </div>
                                      </div>
									   @endif
									  @endforeach
									  
									  @endif


                                     

                                  </div>
                              </div>
                            </div>
                          </div><!--// Right col-->
                      </div>
                    </div>
                </main>
                
            </div>
			
			@endsection