@extends('user.layout.app')
@section('content') 
@php
$user_id=Auth::user()->id;
@endphp
    
	 <!--Right Content-->
        <div class="contentArea">
           
            <!--Task List-->
            <div class="sectionRow profileVH">
                <div class="titleRow d-flex justify-content-between align-items-center mb-sm-4">
                    <h2 class="title-head">Company</h2>
                    <div class="rightBottonsAbout topButtons text-right">
                        <a href="{{ route('about-preview')}}" class="textgreen text-lato f-16 underlinelink Bold ">Preview Profile</a>
                       
                    </div>
                    
                </div> 
                
                <div class="staticTabs">
                    <ul class="nav nav-tabs tabsWidget border-bottom borderW2">
                        <li>
                            <a class="nav-link active" href="{{ route('provider-company-info')}}">Company Information</a>
                        </li>                        
                        <li>
                            <a class="nav-link" href="{{ route('provider-payment-information')}}">Payment Information</a>
                        </li>                  
                    </ul>
                </div>

                <div class="wtbox">
                   
                    <ul class="aboutTabs d-flex">
                        <li class="active"><a href="{{ route('provider-company-info')}}">About</a></li>
                        <li><a href="{{ route('provider-business-details')}}">Business &amp; License Details</a></li>
                        <li><a href="{{ route('provider-portfolio') }}">Portfolio</a></li>
                    </ul>
                   <div class="tabContentWidget">
                    <form class="companyInfoForm" method="post" action="{{ route('provider-company-info')}}" enctype="multipart/form-data">
					@csrf
					<input type="hidden" name="user_id" value="{{ $user_id }}">
					
                        <div class="d-md-flex justify-content-between companyImageChange">
                            <div class="addProfileImage mb-4 mb-md-0">
                                 <label class="label">Profile Image</label>
                                 <div class="profileImageWrap position-relative border-radius-5 profileImageWrap">
                                     <img src="{{ get_profile_image_src($user_id)}}" alt="" class="border-radius-5">
                                     <span class="profileimgtext text-lato f-16">Change Image</span>
                                     <input type="file" name="profile_image" id="" class="invisibleInput image_upload" onchange="previewFile(this)">
                                 </div>
                            </div><!--//Profile image-->
                            <div class="addCoverImage">
                                <div class="d-flex justify-content-between">
                                     <label class="label">Cover Image</label>
                                     <span class="imageDimension">Image dimensions should be 1250x400px</span>
                                </div>
                                 
                                 <div class="coverImageWrap centereditem gray-frame border-radius-5 cover_imagee cover_image_src" style="background:url({{ get_cover_image_src($user_id) }}); background-repeat: no-repeat; background-size: contain;">
                                     <div class="text-center">
                                         <p class="mb-2 semiBold">Drag &amp; Drop Images</p>
                                         <p class="position-relative"><a href="javascript:void(0)" class="btn btn-primary mt-2">Browse</a>
                                         <input type="file" name="cover_image" id="" class="invisibleInput cover_image" onchange="sp_cover_previewFile(this)"></p>
                                     </div>
                                 </div>
                            </div>
                            
                        </div>
    
                        <div class="form-row">
                            <div class="col-md-4 form-group30">
                                <label class="label">Business Name: </label>
                                <input type="text" class="form-control" name="business_name" value="{{ get_business_info($user_id,'businss_name')}}">
                            </div> 
                            <div class="col-md-4 form-group30">
                                <label class="label">Business Start Date: </label>
                                <input type="text" class="form-control" name="business_start_date" value="{{ get_business_info($user_id,'business_start_date')}}">
                            </div> 
                            <div class="col-md-4 form-group30">
                                <label class="label 444">Contact Number: </label>
                                <input type="text" class="form-control" name="business_contact" id="business_contact" value="{{ get_business_info($user_id,'business_contact')}}">
                            </div>
                            <div class="col-md-4 form-group30">
                                <label class="label">Email: </label>
                                <input type="email" class="form-control" name="email" value="{{ Auth::user()->email}}">
                            </div> 
                            <div class="col-md-4 form-group30">
                                <label class="label">Address: </label>
                                <input type="text" class="form-control" id="provider-company-info-address" name="business_address" value="{{ get_business_info($user_id,'business_address')}}">
                            </div> 
                            <div class="col-md-4 form-group30">
                                <label class="label">Unit Number: </label>
                                <input type="text" class="form-control" name="unit_number" value="{{ get_user_meta($user_id,'unit_number')}}">
                            </div> 
                            <div class="col-md-12 form-group30">
                                <label class="label">About Us: </label>
                                <textarea rows="5" name="about_me" cols="10" class="form-control">{{ get_user_meta($user_id,'about_me')}}</textarea>
                            </div>                    
                        </div>
                        <p class="text-center mobi-rtButton">
						<button type="submit" class="btn btn-green btnLg text-lato ml-auto minW-auto">Update</button></p>
                    </form>
                   </div>
                    
                </div>
                
                
                
                
            </div>
            <!-- //Task List-->

        </div>
		
			@endsection