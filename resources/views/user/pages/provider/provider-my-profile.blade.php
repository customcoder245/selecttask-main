@extends('user.layout.app')
@section('content')
<!--Right Content-->
           <!--Right Content-->
		    @php 
		$user_id=Auth::user()->id;
		@endphp
		
		   
        <div class="contentArea">
           @if (session('status'))
						<div class="alert alert-success">
							{{ session('status') }}
						</div>
					@endif
            <!--Task List-->
            <div class="sectionRow profileVH">
                <div class="titleRow d-flex justify-content-between align-items-center mb-sm-4">
                    <h2 class="title-head">My Account</h2>
                    <a href="{{ route('provider-edit-profile')}}" class="btn bordered-btn text-lato">Edit</a>
                </div> 
                
                <div class="staticTabs">
                    <ul class="nav nav-tabs tabsWidget border-bottom borderW2">
                        <li>
                            <a class="nav-link active" href="{{ route('provider-my-profile')}}">Personal Information</a>
                        </li>                        
                        <li>
                            <a class="nav-link" href="{{ route('provider-change-password')}}">Change Password</a>
                        </li>                  
                    </ul>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="d-flex justify-content-between profileInfo">
                            <label>Name: </label>
                            <span class="semiBold">{{ Auth::user()->name }}</span>
                        </div>
                    </div>
                    <div class="col-md-5 offset-md-2">
                        <div class="d-flex justify-content-between profileInfo">
                            <label>Email: </label>
                            <span class="semiBold">{{ Auth::user()->email}}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex justify-content-between profileInfo">
                            <label>Mobile Number: </label>
                            <span class="semiBold">{{ get_user_meta($user_id,'phone')}}</span>
                        </div>
                    </div>
                    <div class="col-md-5 offset-md-2">
                        <div class="d-flex justify-content-between profileInfo">
                            <label>Profile Image: </label>
                            <span class="profileImageWrap position-relative border-radius-5"><img src="{{ get_profile_image_src($user_id)}}" alt="" class="border-radius-5"></span>
                        </div>
                    </div>
                </div>
                
                
            </div>
            <!-- //Task List-->

            <p class="text-center"> <a href="{{ Route('provider-deactivate-request')}}" class="btn btnDeact borderRadius8">Deactivate Account</a></p>
        </div>
            <!-- //Task List-->
			@endsection