@extends('user.layout.app')
@section('content')
<!--Right Content-->
@php 
$user_id=Auth::user()->id;
@endphp
         <!--Right Content-->
        <div class="contentArea">
          
           <!--Task List-->
           <div class="sectionRow profileVH">
                <div class="titleRow d-flex justify-content-between align-items-center mb-4">
                    <h2 class="title-head">Service Settings</h2>
                    <a href="javascript:void(0)" class="btn bordered-btn text-lato btn-green-outline addLocationModal" data-toggle="modal" data-target="#addLocationModal">Add new Location</a>
                   
                </div> 
                
                <div class="staticTabs">
                    <ul class="nav nav-tabs tabsWidget border-bottom borderW2">
                        <li>
                            <a class="nav-link" href="{{ route('provider-service-settings')}}">Category Settings</a>
                        </li>
                        <li>
                            <a class="nav-link active" href="{{ route('provider-location-settings')}}">Location Settings</a>
                        </li>          
                    </ul>
                </div>
				@if (session('status'))
										<div class="alert alert-success">
											{{ session('status') }}
										</div>
									@endif
				
                <form method="post" action="{{ route('update-provider-info')}}" class="addServicesForm">
				@csrf
                 <input type="hidden"  name="user_id" value="{{ $user_id }}">
                 <input type="hidden" name="action" value="location">				 
                <div class="grid-widget serviceSettingsGrid">
                    <div class="col form-group">
                        <div class="grid-widget">
                            <div class="gridHeader text-lato semiBold hidden-md f-16">
                                <div class="sNumber serialNumber">S No.</div>
                                <div class="servicesColTable">Borough</div>
                                <div class="Action text-center w100">Action</div>
                            </div>
                          @php
							$user_location=get_user_meta($user_id,'location');
							$s=1;
							$user_location2=explode(',',$user_location);
							
							@endphp 
							<input type="hidden" name="location" value="{{ $user_location }}" class="location_array">
                            <div class="gridRows location_array_list">
							
							@if(count($user_location2)>0)
                                   @foreach($user_location2 as $service_id)
							   @if(!empty($service_id))
                             <div class="gridRow gridRowloc{{ $service_id }}" datA-TH='' data-id="{{ $service_id }}" data-name="{{ get_location_by_id($service_id)}}"><div class="sNumber serialNumber"><div class="text-center">{{ $s++ }}</div></div><div class="servicesColTable "><label class="grayLabel d-block d-md-none">Service</label><p class="mSemiBold">{{ get_location_by_id($service_id)}}</p></div><div class="Action text-right text-md-center w100"> <label class="grayLabel d-block d-md-none">Action</label><a href="#" class="text-primary underlinelink" data-toggle="modal" data-target="#deleteRowModal"><img src="/public/user/assets/images/dustbin.svg" alt=""></a></div> </div>
  							  @endif
                            @endforeach   
                             @endif							
                                
                            </div>
                        </div>
                    </div>

                </div>
				<div class="col-md-12 text-md-center">
				 <button type="submit" class="btn bordered-btn text-lato btn-green-outline" style="display:none">Update</button>
				</div>
				</form>
                                    
                
            </div>
            <!-- //Task List-->
        </div>
        <!--//Right Content-->
            <!-- //Task List-->
			@endsection