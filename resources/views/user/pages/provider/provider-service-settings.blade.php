@extends('user.layout.app')
@section('content')
<!--Right Content-->
         <!--Right Content-->
        <div class="contentArea">
          
           <!--Task List-->
           <div class="sectionRow profileVH">
                <div class="titleRow d-flex justify-content-between align-items-center mb-4">
                    <h2 class="title-head">Service Settings</h2>
                    <a href="javascript:void(0)" class="btn bordered-btn text-lato btn-green-outline addServicesModal" data-toggle="modal" data-target="#addServicesModal">Add new Service</a>
                </div> 
                
                <div class="staticTabs">
                    <ul class="nav nav-tabs tabsWidget border-bottom borderW2">
                        <li>
                            <a class="nav-link active" href="{{ route('provider-service-settings')}}">Category Settings</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ route('provider-location-settings')}}">Location Settings</a>
                        </li>          
                    </ul>
                </div>
				@if (session('status'))
										<div class="alert alert-success">
											{{ session('status') }}
										</div>
									@endif
				
             <form method="post" action="{{ route('update-provider-info') }}" class="addServicesForm">
			  @csrf 
			  <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
			  <input type="hidden"  name="action" value="services">
                <div class="grid-widget serviceSettingsGrid">
                    <div class="gridHeader text-lato semiBold hidden-md f-16">
                        <div class="sNumber serialNumber">
                            <div class="text-center">S No.</div>
                        </div>
                        <div class="servicesColTable">Service</div>
                        <div class="Action text-center w100">Action</div>
                    </div>
					
					@php 
							$user_id=Auth::user()->id;
							$user_services=get_user_meta($user_id,'services');
							$s=1;
							$user_services2=explode(',',$user_services);
							
							@endphp
					<input type="hidden" name="service" value="{{ $user_services }}" class="services_array" >
					
                    <div class="gridRows servicescat_list">
							@if(count($user_services2)>0)
                            @foreach($user_services2 as $service_id)
						    @if(!empty($service_id))
                             <div class="gridRow gridRow{{ $service_id }}" data-id="{{ $service_id }}" data-name="{{ get_services_category_by_id($service_id)}}"><div class="sNumber serialNumber"><div class="text-center">{{ $s++ }}</div></div><div class="servicesColTable "><label class="grayLabel d-block d-md-none">Service</label><p class="mSemiBold">{{ get_services_category_by_id($service_id)}}</p></div><div class="Action text-right text-md-center w100"> <label class="grayLabel d-block d-md-none">Action</label><a href="#" class="text-primary underlinelink" data-toggle="modal" data-target="#deleteRowModal"><img src="/public/user/assets/images/dustbin.svg" alt=""></a></div> </div>
  							@endif
                            @endforeach
                                @endif
                            
                                
                              
                            </div>
                </div>    
                <div class="col-md-12 text-md-center">
				<button type="submit" class="btn btn-green-outline btn-sm ml-auto addServicesModal" style="display:none">Update</button>
				</div>
				</form>
                
            </div>
            <!-- //Task List-->
        </div>
			@endsection