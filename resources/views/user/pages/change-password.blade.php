 @extends('user.layout.app')
@section('content')

<!--Right Content-->
        <div class="contentArea">
           
            <!--Task List-->
			<form method="post" action="{{ route('change-password')}}">
			@csrf
			<input type="hidden"  name="user_id" value="{{ Auth::user()->id }}">
            <div class="sectionRow profileVH">
                <div class="titleRow d-flex justify-content-between align-items-center mb-4">
                    <h2 class="title-head">My Account</h2>
                    
					<button type="submit" class="btn bordered-btn text-lato">Save</button>
                </div> 
                @if (session('status'))
						<div class="alert alert-success">
							{{ session('status') }}
						</div>
					@endif
                <div class="staticTabs">
                    <ul class="nav nav-tabs tabsWidget border-bottom borderW2">
                         <li>
                            <a class="nav-link " href="{{ route('profile')}}">Personal Information</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ route('address')}}">Addresses</a>
                        </li>   
                        <li>
                            <a class="nav-link active" href="{{ route('change-password')}}">Change Password</a>
                        </li>               
                    </ul>
                </div>

                <div class="row">
                    <div class="col-md-4 col-lg-3">
                        <div class="profileInfo changesPassword">
                            <label class="form-label">Old Password</label>
                            <span><input name="old_password" type="text" class="form-control" required></span>
                        </div>
                    </div> 
                    <div class="col-md-4 col-lg-3">
                        <div class="profileInfo changesPassword">
                            <label class="form-label">New Password</label>
                            <span><input type="text" name="new_password" class="form-control" required ></span>
                        </div>
                    </div> 
                    <div class="col-md-4 col-lg-3">
                        <div class="profileInfo changesPassword">
                            <label class="form-label">Confirm Password</label>
                            <span><input type="text" name="confirm_password" class="form-control" required ></span>
                        </div>
                    </div>                    
                </div>
                
                
            </div>
			</form>
            <!-- //Task List-->

        </div>
@endsection