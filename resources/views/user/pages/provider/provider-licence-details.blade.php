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
                            <li><a href="{{ route('provider-ratings-reviews')}}">Ratings &amp; Reviews</a></li>
                            <li class="active"><a href="{{ route('provider-licence-details')}}">Licence Details</a></li>
                        </ul>

                        <div class="aboutTabContent">
                            <div class="formSectionRow">
                                <div class="autoApplyLists">
								
								@if(count($data)>0)
								
							    @php
								$current_date=strtotime(date('m/d/Y'));
								@endphp
								
							
								@foreach($data as $data)
								 @php
								$licen_date=strtotime($data->license_exp_date);
									   $lic_date=$data->license_exp_date;
								   if($current_date>$licen_date){
									   $lic_date='<span class="expired">Expired</span>';
								   }																																																																																																									
								@endphp																																													
								
								
                                    <div class="autoApplyList d-md-flex justify-content-between">
                                        <div class="licensePic text-center">
                                            <img src="{{ url('/') }}/public/uploads/image/{{ $data->license_image }}" alt="" class="viewlicenseModal" data-toggle="modal" data-target="#viewlicenseModal">
                                        </div>
                                        <div class="licenseDetails d-md-flex justify-content-between flex-grow-1 flex-wrap">
                                            <div class="ApplyListsCol ApplyListsCol-l  d-flex justify-content-between">
                                                <div class="ApplyListsMobLeft">
                                                    <label>Title </label>
                                                    <p>{{ $data->license_title }}</p>
                                                </div>
                                                <div class="ApplyListsMobRight">
                                                    <label>License Number</label>
                                                    <p>{{ $data->license_number }}</p>
                                                </div>
                                            </div>
            
                                            <div class="ApplyListsCol ApplyListsCol-s d-flex justify-content-between">
                                                <div class="ApplyListsMobLeft">
                                                    <label>Issued By</label>
                                                    <p>{{ $data->issued_by }}</p>
                                                </div>
                                                <div class="ApplyListsMobRight">
                                                    <label>Expiry Date</label>
                                                    <p><?php echo $lic_date;?></p>
                                                </div>
                                            </div>
                                            <div class="actionCol d-flex justify-content-between text-right w-100">
                                                <div class="d-block d-md-none text-left">
                                                    <label>Description</label>
                                                    <p class="normalFont">{{ $data->license_description }}</p>
                                                </div><!--Mobile Visible-->
                                                                                      
                                            </div>
        
                                            <div class="d-none d-md-block">
                                                <label>Description</label>
                                                <p class="normalFont">{{ $data->license_description}}</p>
                                            </div><!--Mobile Hidden-->
            
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
                            </div><!--/ Licence details-->
                        </div>
                    </div>
                </div><!--/About Right-->
            </div>
        </div>      
    </div>
		@endsection