@extends('user.layout.my-app')
@section('content')
@php 
$user_id=Auth::user()->id;
$user_status=get_user_meta($user_id,'user_status');
@endphp
<div class="container">
        <div class="aboutContent">
            <p class="text-right edit-profile mb-3">
			@if($user_status=="complete")
			<a href="{{ route('provider-company-info')}}" class="btn btn-white minW-auto 11">Edit Profile</a>
		    @endif
		</p>
            <div class="aboutContainer d-md-flex">
			@include('user.layout.sp-profile-leftbar')
                
                <div class="aboutRight flex-grow-1 form-group30">
                    <div class="wtbox">
                        <ul class="aboutTabs comAboutTabs d-flex">
                            <li class="active"><a href="{{ route('about-preview')}}">About</a></li>
                            <li><a href="{{ route('provider-projects-listing')}}">Portfolio</a></li>
                            <li><a href="{{ route('provider-ratings-reviews')}}">Ratings &amp; Reviews</a></li>
                            <li><a href="{{ route('provider-licence-details')}}">Licence Details</a></li>
                        </ul>

                        <div class="aboutTabContent">
                            <div class="sectionRom-widget">
                                <h4 class="">Service Locations</h4>
                                <div class="mapWidget">
								
								<div id="map" style="height:150px;width:100%"></div>
								</div>
                            
							</div>
							
                            <div class="sectionRom-widget">
                                <h4 class="">Services Offered</h4>
                                <div class="servicesTags">
								@php 
								$ser=get_user_meta($user_id,'services');
								$ser_arr=explode(",",$ser);
								@endphp
								@foreach($ser_arr as $services)
								  @if(!empty($services))
                                    <span>{{ get_services_category_by_id($services)}}</span>
                                   @endif
								 @endforeach   
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/About Right-->
            </div>
        </div>      
    </div>
	@php 
	$address=get_business_info($user_id,'business_address');
	 $cordinate=get_latitude_langtute($address);
	
	@endphp 
	@if(!empty($cordinate))
	<script>
	
  

	//console.log(loccc);
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: new google.maps.LatLng(51.4718286, -0.1508871),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

   
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(<?php echo $cordinate['lat'] ?>, <?php echo $cordinate['long'] ?>),
        map: map
     
 });
      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent("hi this is tesing");
          infowindow.open(map, marker);
		 
        }
      })(marker, i));
    
   </script>
   @endif
		@endsection