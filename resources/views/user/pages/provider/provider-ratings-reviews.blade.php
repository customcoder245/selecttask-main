@extends('user.layout.my-app')
@section('content')
<div class="container">
        <div class="aboutContent">
            <p class="text-right edit-profile mb-3"><a href="{{ route('provider-company-info')}}" class="btn btn-white minW-auto">Edit Profile</a></p>
            <div class="aboutContainer d-md-flex">
                 @include('user.layout.sp-profile-leftbar')
                <div class="aboutRight flex-grow-1 form-group30">
                    <div class="wtbox">
                        <ul class="aboutTabs comAboutTabs d-flex">
                            <li><a href="{{ route('about-preview')}}">About</a></li>
                            <li><a href="{{ route('provider-projects-listing')}}">Portfolio</a></li>
                            <li class="active"><a href="{{ route('provider-ratings-reviews')}}">Ratings &amp; Reviews</a></li>
                            <li><a href="{{ route('provider-licence-details')}}">Licence Details</a></li>
                        </ul>

                        <div class="aboutTabContent">
                           <div class="reviewRating"> 
						    
							
							   
							   @if(count($data)>0)
								   @foreach($data as $data)
							       @php 
								    $u_id=get_userid_by_taskid($data->task_id);
								    @endphp
							   
                                <div class="galleryBox d-flex">
                                    <img src="{{ user_profile_image_url($u_id)}}" alt="">
                                    <div class="flex-grow-1 ratingContentWidget">
                                        <div class="starRating mt-2">
				<input id="input-21b" value="{{ $data->rating }}"  name="rating" type="text" class="rating" data-theme="krajee-fas" data-min=0 data-max=5 data-step=0.2 data-size="xm" readonly title="">
										</div>
                                        <p class="semiBold">“{{ $data->comment }}”</p>
                                        <p class="userratingBottom text-lato f-12"><span class="userNameRating">{{ get_userdata($u_id)->name }}</span> <span class="leftSep">{{ date('h:s a, M d,Y',strtotime($data->date))}}</span></p>
                                    </div>
                                </div>
								@endforeach
								@else
									  <div class="noData-Div">
                    <p class="noApplicantText">Sorry No Data Found</p>
                  
                    <p class="charImage"><img src="{{ url('/public/user/')}}/assets/images/no-data.svg" alt=""></p>
                </div> 
							   
								
								@endif
								
								
                                
                           </div>
                        </div>
                    </div>
                </div><!--/About Right-->
            </div>
        </div>      
    </div>
		@endsection