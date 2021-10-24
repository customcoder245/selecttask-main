@extends('user.layout.app')
@section('content')
 <!--Right Content-->
        <div class="contentArea">
		@if (session('status'))
						<div class="alert alert-success">
							{{ session('status') }}
						</div>
					@endif
		
           <form method="post" action="{{ route('provider-change-password') }}">
		   @csrf
		   <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <!--Task List-->
            <div class="sectionRow profileVH editProfileMode">
                <div class="titleRow d-flex justify-content-between align-items-center mb-4">
                    <h2 class="title-head">My Account</h2>
                    <button type="submit" class="btn bordered-btn text-lato">Save</button>
                </div> 
                
                <div class="staticTabs">
                    <ul class="nav nav-tabs tabsWidget border-bottom borderW2">
                        <li>
                            <a class="nav-link" href="{{ route('provider-my-profile')}}">Personal Information</a>
                        </li>                        
                        <li>
                            <a class="nav-link active" href="{{ route('provider-change-password')}}">Change Password</a>
                        </li>                  
                    </ul>
                </div>

                <div class="row">
                    <div class="col-md-4 col-lg-3">
                        <div class="profileInfo changesPassword">
                            <label class="form-label semiBold">Old Password</label>
                            <span><input type="password"  name="old_password" class="form-control" required></span>
                        </div>
                    </div> 
                    <div class="col-md-4 col-lg-3">
                        <div class="profileInfo changesPassword">
                            <label class="form-label semiBold">New Password</label>
                            <span><input type="password" name="new_password" class="form-control" required></span>
                        </div>
                    </div> 
                    <div class="col-md-4 col-lg-3">
                        <div class="profileInfo changesPassword">
                            <label class="form-label semiBold">Confirm Password</label>
                            <span><input type="password" name="confirm_password" class="form-control" required ></span>
                        </div>
                    </div>                    
                </div>
                
                
            </div>
            <!-- //Task List-->
            </form>
        </div>
        <!--//Right Content-->
		@endsection