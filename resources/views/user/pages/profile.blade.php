  @extends('user.layout.app')
@section('content')

  <!--Right Content-->
        <div class="contentArea">
           
            <!--Task List-->
            <div class="sectionRow profileVH">
                <div class="titleRow d-flex justify-content-between align-items-center mb-sm-4">
                    <h2 class="title-head">My Profile</h2>
                    <a href="{{ route('edit-profile')}}" class="btn bordered-btn text-lato">Edit</a>
                </div> 
									@if (session('status'))
						<div class="alert alert-success">
							{{ session('status') }}
						</div>
					@endif
                <div class="staticTabs">
                    <ul class="nav nav-tabs tabsWidget border-bottom borderW2">
                        <li>
                            <a class="nav-link active" href="{{ route('profile')}}">Personal Information</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ route('address')}}">Addresses</a>
                        </li>   
                        <li>
                            <a class="nav-link" href="{{ route('change-password')}}">Change Password</a>
                        </li>                  
                    </ul>
                </div>
                @php
                  $user_id=Auth::user()->id;				
                  $first_name=get_user_meta($user_id,'first_name');	
				  $last_name=get_user_meta($user_id,'last_name');	
				  
				@endphp
                <div class="row">
                    <div class="col-md-4">
                        <div class="d-flex justify-content-between profileInfo">
                            <label>Name: </label>
                            <span>{{ Auth::user()->name }}</span>
                        </div>
                    </div>
                    <div class="col-md-5 offset-md-2">
                        <div class="d-flex justify-content-between profileInfo">
                            <label>Email: </label>
                            <span>{{ Auth::user()->email }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex justify-content-between profileInfo">
                            <label>Mobile Number: </label>
                            <span>{{ get_user_meta($user_id,'phone') }}</span>
                        </div>
                    </div>
                    <div class="col-md-5 offset-md-2">
                        <div class="d-flex justify-content-between profileInfo">
                            <label>Profile Image: </label>
						   @php
						    $image_url=user_profile_image_url($user_id);
						   @endphp
							
                            <span class="profileImageWrap position-relative border-radius-5">
							<img src="{{ $image_url}}" alt="" class="border-radius-5"></span>
                        </div>
                    </div>                  
                </div>
                
                
            </div>
            <!-- //Task List-->

            <p class="text-center"> <a href="{{ route('deactivate-request')}}" class="btn btnDeact borderRadius8">Deactivate Account</a></p>
        </div>
        <!--//Right Content-->
		@endsection