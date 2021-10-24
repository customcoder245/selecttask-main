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
                            <li class="active"><a href="{{ route('provider-projects-listing')}}">Portfolio</a></li>
                            <li><a href="{{ route('provider-ratings-reviews')}}">Ratings &amp; Reviews</a></li>
                            <li><a href="{{ route('provider-licence-details')}}">Licence Details</a></li>
                        </ul>

                        <div class="aboutTabContent">
                           <div class="row galleryRow">
						  
							@if(count($data)>0)
								@foreach($data as $data)
							
							@php
							 $image_url='';
							 if(!empty($data->portfolio_image)){
							   $image=json_decode($data->portfolio_image);
							   $first_image=$image[0];
								$image_url=$first_image;
						   }
						   
						   @endphp
                               <div class="col-md-6 form-group20">
                                   <div class="galleryBox">
                                        <div class="imageWrapper position-relative">
                                            <a href="javascript:void(0)" class="d-inline-flex imggllery align-items-center view_all_portfolio" data-id="{{ $data->id }}" data-url="{{ route('portfolio/id')}}"  data-toggle="modal" data-target="#projectDetailsModal"><img src="{{ url('/public/user') }}/assets/images/image-gallery.svg" alt=""></a>
                                             @if(!empty($first_image))
											<img src="{{ $first_image }}" alt="">
										     @endif
                                            <div class="bottomlinks d-flex justify-content-between">
                                                <span class="d-inline-flex locCol align-items-center"><img src="{{ url('/public/user') }}/assets/images/map-pin.svg" alt=""> <span>{{ $data->location}}</span></span>
                                                <span class="d-inline-flex locCol align-items-center"><img src="{{ url('/public/user') }}/assets/images/doller-sign.svg" alt=""> <span>${{ $data->cost }}</span></span>
                                            </div>
                                        </div>
                                       <div class="listDetailsBox gallerylistBox">
                                            <div class="listDetailsRow d-flex justify-content-between">
                                                <div class="listDetailsLeft">
                                                    <label>Title </label>
                                                    <p>{{ $data->portfolio_title }}</p>
                                                </div>
                                                <div class="listDetailsRight text-right">
                                                    <label>Completion Date</label>
                                                    <p>{{ $data->completion_date }}</p>
                                                </div>
                                            </div>
                                            <div class="listTopRow mb-0">
                                                <label>Description</label>
                                                <p class="normalFont">{{ substr($data->description,0,400) }} <a href="#" class="textgreen underlinelink f-12 view_all_portfolio" data-id="{{ $data->id }}" data-url="{{ route('portfolio/id')}}"  data-toggle="modal" data-target="#projectDetailsModal">View More</a></p>
                                            </div>
                                       </div>
                                   </div>
                               </div>
							   @endforeach
							   
							   @else
								  <div class="noData-Div col-md-12">
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
	
	<script>
	setTimeout(function(){edit_portfolio_fun();}, 3000);
	</script>
		@endsection