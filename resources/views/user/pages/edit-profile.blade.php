 @extends('user.layout.app')
@section('content')

 <!--Right Content-->
        <div class="contentArea">
           
               @php
                  $user_id=Auth::user()->id;				
                  
				  
				@endphp
			
			<form method="post" action="{{ route('edit-profile')}}" enctype="multipart/form-data">
			@csrf
			
			<input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
			
            <div class="sectionRow profileVH editProfileMode">
                <div class="titleRow d-flex justify-content-between align-items-center mb-4">
                    <h2 class="title-head">My Account</h2>
                    
					<button type="submit" class="btn bordered-btn text-lato">Save</button>
                </div> 
                
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

                <div class="row">
                    <div class="col-md-4">
                        <div class="profileInfo">
                            <label>Name: </label>
                            <span><input type="text" name="name" class="form-control" value="{{ Auth::user()->name}}" required></span>
                        </div>
                    </div>
                    <div class="col-md-5 offset-md-2">
                        <div class="profileInfo">
                            <label>Email: </label>
                            <span><input name="email" type="email" class="form-control" value="{{ Auth::user()->email}}" readonly required></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="profileInfo">
                            <label>Mobile Number: </label>
                            <span><input type="text" name="phone" class="form-control" value="{{ get_user_meta($user_id,'phone') }}" required></span>
                        </div>
                    </div>
                    <div class="col-md-5 offset-md-2">
                        <div class="profileInfo">
                            <label>Profile Image: </label>
							 @php
						    $image_url=user_profile_image_url($user_id);
						   @endphp
                            <div class="profileImageWrap position-relative border-radius-5">
                                <img src="{{ $image_url}}" alt="" class="border-radius-5">
                                <span class="profileimgtext text-lato f-16">Change Image</span>
                                <input type="file" name="image" id="" class="invisibleInput image_upload" onchange="previewFile(this);" >
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                
            </div>
			</form>
            <!-- //Task List-->

        </div>
        <!--//Right Content-->
@endsection