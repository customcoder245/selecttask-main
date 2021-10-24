@extends('frontend.layout.app')
@section('content')
<!-- Banner Section -->
    <section class="banner innerbanner locationsBanner banner650">
        <div class="container">
            <div class="row align-items-md-center">
                <div class="col-md-6">
                    <div class="detail wow bounceInLeft" data-wow-delay="0.1s">
                        <img src="{{ url('/public/frontend')}}/assets/images//location/banner-icon.svg" alt="" class="bannerIcon">
                        <h2><span class="d-block mobFNormal">Services Locations in</span> New York City</h2>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //Banner Section -->

    <!--The Boroughs-->
    <section class="section servicesTopSection theBoroughs">
        <div class="container">
            <!--Title-->
            <div class="title text-center maxW-350">
                <h2 class="wow bounceInDown" data-wow-delay="0.1s">The Boroughs</h2>
                <h4 class="wow bounceInLeft" data-wow-delay="0.1s">Hire professionals for Tasks in any one of <span class="d-md-block">New York’s five boroughs.</span></h4>
            </div>
            <!--//Title-->
           <div class="row justify-content-center">
               <div class="col-md-4 col-sm-6">
                   <a href="{{ route('Services-Location-TheBronx')}}" class="locFrame-widget text-center d-block">
                       <span class="locImageCol d-block"><img src="{{ url('/public/frontend')}}/assets/images/location/the-bronx.jpg" alt=""></span>
                       <span class="locName">The Bronx</span>
                   </a>
               </div>

               <div class="col-md-4 col-sm-6">
                    <a href="{{ route('Services-Location-Brooklyn')}}" class="locFrame-widget text-center d-block">
                        <span class="locImageCol d-block"><img src="{{ url('/public/frontend')}}/assets/images/location/brooklyn.jpg" alt=""></span>
                        <span class="locName">Brooklyn</span>
                    </a>
                </div>

                <div class="col-md-4 col-sm-6">
                    <a href="{{ route('Services-Location-Manhattan')}}" class="locFrame-widget text-center d-block">
                        <span class="locImageCol d-block"><img src="{{ url('/public/frontend')}}/assets/images/location/manhattan.jpg" alt=""></span>
                        <span class="locName">Manhattan</span>
                    </a>
                </div>

                <div class="col-md-4 col-sm-6">
                    <a href="{{ route('Services-Location-Queens')}}" class="locFrame-widget text-center d-block">
                        <span class="locImageCol d-block"><img src="{{ url('/public/frontend')}}/assets/images/location/queens.jpg" alt=""></span>
                        <span class="locName">Queens</span>
                    </a>
                </div>
 
                <div class="col-md-4 col-sm-6">
                     <a href="{{ route('Services-Location-StatenIsland')}}" class="locFrame-widget text-center d-block">
                         <span class="locImageCol d-block"><img src="{{ url('/public/frontend')}}/assets/images/location/manhattan.jpg" alt=""></span>
                         <span class="locName">Staten Island</span>
                     </a>
                 </div>
 
                 <!-- <div class="col-md-4 col-sm-6">
                     <a href="#" class="locFrame-widget text-center d-block">
                         <span class="locImageCol d-block"><img src="assets/images/location/newyork.jpg" alt=""></span>
                         <span class="locName">New York City</span>
                     </a>
                 </div> -->
           </div>
        </div>
        
        
    </section>
    <!-- //The Boroughs-->

    <!-- Two Column Section -->
    <section class="section gray-BG locationColumns">
        <div class="container">
            <div class="howitworksSection">
                <div class="howitworksRow row align-items-center text-opensans p-0">
                    <div class="col-md-6 order-md-2 text-center">
                        <img src="{{ url('/public/frontend')}}/assets/images/location/post-a-task.svg" width="400" alt="">
                    </div>
                    <div class="col-md-6 order-md-1">
                        <div class="leftContentBox">
                            <h3>Post Your Task</h3>
                            <p class="text-opensans">Getting started is fast, <span class="mobBlock">easy, and free.</span></p>    
                            <p class="text-opensans mt-md-4"><a href="{{ route('posttask-step1')}}" class="text-primary semiBold arrowBtn btmBorderLink">Get Free Quotes <img src="assets/images/arrow-green.svg" alt="" class="icon"></a></p>                       
                        </div>                        
                    </div>                    
                </div>
            </div>
        </div>
    </section>
    <!-- //Two Column Section -->

    <!--Here’s How it Works-->
    <section class="section locationHIW">
        <div class="container">
            <!--Title-->
            <div class="title text-center maxW-350">
                <h2 class="wow bounceInDown" data-wow-delay="0.1s">Here’s How it Works</h2>
                <h4 class="wow bounceInLeft" data-wow-delay="0.1s">Let the Pros handle your tough to-dos.</h4>
            </div>
            <!--//Title-->
            <div class="row whyNYC text-center text-opensans responsive mobileSlickDots">
                <div class="col-md-4 whyNYCCol">
                    <div class="whyNYS-box">
                        <div class="icon centereditem"><img src="{{ url('/public/frontend')}}/assets/images/location/post-icon.svg" alt=""></div>
                        <div class="leftContentBox flex-grow-1">
                            <h3>Post a Task</h3>
                            <p>Posting is fast and easy. Just fill in the information needed, including photos of the job.</p>
                        </div>
                    </div>
                    
                </div>

                <div class="col-md-4 whyNYCCol">
                    <div class="whyNYS-box">
                        <div class="icon centereditem"><img src="{{ url('/public/frontend')}}/assets/images/location/assign-icon.svg" alt=""></div>
                        <div class="leftContentBox flex-grow-1">
                            <h3>Assign</h3>
                            <p>Review your applicants and assign the applicant that is a good fit for the job.</p>
                        </div>
                    </div>
                    
                </div>

                <div class="col-md-4 whyNYCCol">
                    <div class="whyNYS-box">
                        <div class="icon centereditem"><img src="{{ url('/public/frontend')}}/assets/images/location/complete-icon.svg" alt=""></div>
                        <div class="leftContentBox flex-grow-1">
                            <h3>Complete Job</h3>
                            <p>As soon as the job is completed change the statues to complete and give your review.</p>
                        </div>
                    </div>                    
                </div>
                
            </div>
        </div>
        
        
    </section>
    <!-- //Here’s How it Works-->

    <!-- Service Section -->
    <section class="section services diffStyle gray-BG">
        <div class="container">
            <!-- Title -->
            <div class="title text-center">
                <h2 class="wow bounceInDown" data-wow-delay="0.1s">Top Service Categories</h2>               
            </div>
            <!-- //Title -->
            <div class="row customRow10 justify-content-center">
                <!-- Box Column -->
                <div class="col-sm-6 col-md-4 col-lg-3 custonCol10">
                    <a href="{{ route('posttask-step1')}}?cat=4">
					<div class="service-box wow bounceInLeft" data-wow-delay="0.1s">
                        <div class="icon">
                            <img src="{{ url('/public/frontend')}}/assets/images/painting-icon.svg" class="img-fluid" />
                        </div>
                        <h3>Painting</h3>
                    </div>
					</a>
                </div>
                <!-- //Box Column -->
                <!-- Box Column -->
                <div class="col-sm-6 col-md-4 col-lg-3 custonCol10">
                    <a href="{{ route('posttask-step1')}}?cat=2">
					<div class="service-box wow bounceInLeft" data-wow-delay="0.1s">
                        <div class="icon">
                            <img src="{{ url('/public/frontend')}}/assets/images/handyman-icon.svg" class="img-fluid" />
                        </div>
                        <h3>Handyman</h3>
                    </div>
					</a>
                </div>
                <!-- //Box Column -->
                <!-- Box Column -->
                <div class="col-sm-6 col-md-4 col-lg-3 custonCol10">
                    <a href="{{ route('posttask-step1')}}?cat=5">
					<div class="service-box wow bounceInRight" data-wow-delay="0.1s">
                        <div class="icon">
                            <img src="{{ url('/public/frontend')}}/assets/images/plumbing-icon.svg" class="img-fluid" />
                        </div>
                        <h3>Plumbing</h3>
                    </div>
					</a>
                </div>
                <!-- //Box Column -->
                <!-- Box Column -->
                <div class="col-sm-6 col-md-4 col-lg-3 custonCol10">
				<a href="{{ route('posttask-step1')}}?cat=7">
                    <div class="service-box wow bounceInRight" data-wow-delay="0.1s">
                        <div class="icon">
                            <img src="{{ url('/public/frontend')}}/assets/images/elctric-icon.svg" class="img-fluid" />
                        </div>
                        <h3>Electric</h3>
                    </div>
					</a>
                </div>
                <!-- //Box Column -->
                <!-- Box Column -->
                <div class="col-sm-6 col-md-4 col-lg-3 custonCol10">
                    <a href="{{ route('posttask-step1')}}?cat=1">
					<div class="service-box wow bounceInLeft" data-wow-delay="0.1s">
                        <div class="icon">
                            <img src="{{ url('/public/frontend')}}/assets/images/heating-icon.svg" class="img-fluid" />
                        </div>
                        <h3>Heating <span class="d-md-block">&amp; Cooling</span></h3>
                    </div>
					</a>
                </div>
                <!-- //Box Column -->
                <!-- Box Column -->
                <div class="col-sm-6 col-md-4 col-lg-3 custonCol10">
                    <a href="{{ route('posttask-step1')}}?cat=6">
					<div class="service-box wow bounceInLeft" data-wow-delay="0.1s">
                        <div class="icon">
                            <img src="{{ url('/public/frontend')}}/assets/images/roofing-icon.svg" class="img-fluid" />
                        </div>
                        <h3>Roofing</h3>
                    </div>
					</a>
                </div>
                <!-- //Box Column -->
                <!-- Box Column -->
                <div class="col-sm-6 col-md-4 col-lg-3 custonCol10">
                  <a href="{{ route('posttask-step1')}}?cat=3">                  
				  <div class="service-box wow bounceInRight" data-wow-delay="0.1s">
                        <div class="icon">
                            <img src="{{ url('/public/frontend')}}/assets/images/general-contracting-icon.svg" class="img-fluid" />
                        </div>
                        <h3>General <span class="d-md-block">Contracting</span></h3>
                    </div>
					</a>
                </div>
                <!-- //Box Column -->
                <!-- Box Column -->
                <div class="col-sm-6 col-md-4 col-lg-3 custonCol10">
                    <a href="{{ route('posttask-step1')}}?cat=8">                   
				   <div class="service-box wow bounceInRight" data-wow-delay="0.1s">
                        <div class="icon">
                            <img src="{{ url('/public/frontend')}}/assets/images/carpentry-icon.svg" class="img-fluid" />
                        </div>
                        <h3>Carpentry</h3>
                    </div>
					</a>
                </div>
                <!-- //Box Column -->
                
            </div>

           
        </div>
    </section>
    <!-- //Service Section -->
	
	@endsection