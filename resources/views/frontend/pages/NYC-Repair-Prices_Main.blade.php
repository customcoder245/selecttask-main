@extends('frontend.layout.app')
@section('content')
  <!-- Banner Section -->
    <section class="banner innerbanner NYC-Pricing-Banner banner650">
        <div class="container">
            <div class="row align-items-md-center">
                <div class="col-md-6">
                    <div class="detail wow bounceInLeft maxW-350" data-wow-delay="0.1s">
                        <img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/banner-icon.svg" alt="" class="bannerIcon">
                        <h2>NYC Repair Prices</h2>
                        <h3>Choose from the categories below to learn more about NYC repair prices, or post a task to get quotes from local professionals.</h3>
                        <div class="button">
                            <a href="{{ route('posttask-step1')}}" class="btn btn-green btn-green-shadow mr-md-4 mw-321 btnLg">Get Free Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //Banner Section -->

    <!--Service Categories-->
    <section class="section servicesTopSection NYCPrices-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 services-widget">
                    <a href="{{ route('NYC-Repair-Price_Handyman')}}">
					<div class="borderedframe">
                        <p class="servicePic position-relative"><img src="{{ url('public/frontend')}}/assets/images/services/handyman-pic.jpg" alt=""><span class="servicePriceTag text-opensans centereditem">$3k</span></p>
                        <div class="serviceText">
                            <h5>Handyman</h5>
                            <p>Don’t settle for a quick fix — let a pro get the job done right.</p>
                        </div>
                    </div>
					</a>
                </div>

                <div class="col-md-4 col-sm-6 services-widget">
                  <a href="{{ route('NYC-Repair-Price_painting')}}">                   
				   <div class="borderedframe">
                        <p class="servicePic position-relative"><img src="{{ url('public/frontend')}}/assets/images/services/painting-pic.jpg" alt=""></p>
                        <div class="serviceText">
                            <h5>Painting</h5>
                            <p>Making your life a little more colorful, one wall at a time.</p>
                        </div>
                    </div>
					</a>
                </div>

                <div class="col-md-4 col-sm-6 services-widget">
                  <a href="{{ route('NYC-Repair-Price_plumbing')}}">                   
				   <div class="borderedframe">
                        <p class="servicePic position-relative"><img src="{{ url('public/frontend')}}/assets/images/services/plumbing-pic.jpg" alt=""><span class="servicePriceTag text-opensans centereditem">$90</span></p>
                        <div class="serviceText">
                            <h5>Plumbing</h5>
                            <p>Solve your kitchen and bathroom woes with ease.</p>
                        </div>
                    </div>
					</a>
                </div>

                <div class="col-md-4 col-sm-6 services-widget">
                    <a href="{{ route('NYC-Repair-Price_Electrician')}}">
					<div class="borderedframe">
                        <p class="servicePic position-relative"><img src="{{ url('public/frontend')}}/assets/images/services/electric-pic.jpg" alt=""><span class="servicePriceTag text-opensans centereditem">$3k</span></p>
                        <div class="serviceText">
                            <h5>Electric</h5>
                            <p>Certified electricians are always the safest (and best) option.</p>
                        </div>
                    </div>
					</a>
                </div>

                <div class="col-md-4 col-sm-6 services-widget">
                 <a href="{{ route('NYC-Repair-Price_CarpentryCabinets')}}">                   
				   <div class="borderedframe">
                        <p class="servicePic position-relative"><img src="{{ url('public/frontend')}}/assets/images/services/cabinets-pic.jpg" alt=""><span class="servicePriceTag text-opensans centereditem">$3k</span></p>
                        <div class="serviceText">
                            <h5>Cabinets</h5>
                            <p>Elevate your space with professionally installed cabinets</p>
                        </div>
                    </div>
					</a>
                </div>

                <div class="col-md-4 col-sm-6 services-widget">
                     <a href="{{ route('NYC-Repair-Price_windowDoor')}}">
					<div class="borderedframe">
                        <p class="servicePic position-relative"><img src="{{ url('public/frontend')}}/assets/images/services/windows-pic.jpg" alt=""><span class="servicePriceTag text-opensans centereditem">$3k</span></p>
                        <div class="serviceText">
                            <h5>Windows</h5>
                            <p>Hire a pro to install new energy-efficient windows </p>
                        </div>
                    </div>
					</a>
                </div>

                <div class="col-md-4 col-sm-6 services-widget">
                    <a href="{{ route('NYC-Repair-Price_roofing')}}">
					<div class="borderedframe">
                        <p class="servicePic position-relative"><img src="{{ url('public/frontend')}}/assets/images/services/roofing-pic.jpg" alt=""><span class="servicePriceTag text-opensans centereditem">$3k</span></p>
                        <div class="serviceText">
                            <h5>Roofing</h5>
                            <p>Our roofing experts take excellent service to new heights.</p>
                        </div>
                    </div>
					</a>
                </div>

                <div class="col-md-4 col-sm-6 services-widget">
                   <a href="{{ route('NYC-Repair-Price_GeneralContractor')}}">
				   <div class="borderedframe">
                        <p class="servicePic position-relative"><img src="{{ url('public/frontend')}}/assets/images/services/carpentry-pic.jpg" alt=""><span class="servicePriceTag text-opensans centereditem">$3k</span></p>
                        <div class="serviceText">
                            <h5>General Contracting</h5>
                            <p>For big home-improvement jobs, talk to a general contractor</p>
                        </div>
                    </div>
					</a>
                </div>

                <div class="col-md-4 col-sm-6 services-widget">
                    <a href="{{ route('NYC-Repair-Price_HVAC-Repair')}}">
					<div class="borderedframe">
                        <p class="servicePic position-relative"><img src="{{ url('public/frontend')}}/assets/images/services/security-pic.jpg" alt=""><span class="servicePriceTag text-opensans centereditem">$3k</span></p>
                        <div class="serviceText">
                            <h5>HVAC Repairs</h5>
                            <p>Maintain your heating and cooling systems to prevent malfunctions</p>
                        </div>
                    </div>
					</a>
                </div>

            </div>
        </div>
    </section>
    <!-- //Service Categories-->

    <!-- Two Column Section -->
    <section class="section NYC-PricingColumns grayBG">
        <div class="container">

            <div class="howitworksSection">
                <div class="howitworksRow row align-items-center text-opensans p-0">
                    <div class="col-md-6 order-md-2 text-center">
                        <img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/post-task-icon.svg" width="320" alt="">
                    </div>
                    <div class="col-md-6 order-md-1">
                        <div class="leftContentBox">
                            <h3>Post Your Task</h3>
                            <p class="text-opensans">Getting started is fast, easy, and free.</p>  
                            <p class="text-opensans mt-md-4"><a href="{{ route('posttask-step1')}}" class="text-primary semiBold arrowBtn btmBorderLink">Get Free Quotes <img src="assets/images/arrow-green.svg" alt="" class="icon mb-0"></a></p>                         
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
                        <div class="icon centereditem"><img src="{{ url('public/frontend')}}/assets/images/location/post-icon.svg" alt=""></div>
                        <div class="leftContentBox flex-grow-1">
                            <h3>Post a Task</h3>
                            <p>Posting is fast and easy. Just fill in the information needed, including photos of the job.</p>
                        </div>
                    </div>
                    
                </div>

                <div class="col-md-4 whyNYCCol">
                    <div class="whyNYS-box">
                        <div class="icon centereditem"><img src="{{ url('public/frontend')}}/assets/images/location/assign-icon.svg" alt=""></div>
                        <div class="leftContentBox flex-grow-1">
                            <h3>Assign</h3>
                            <p>Review your applicants and assign the applicant that is a good fit for the job.</p>
                        </div>
                    </div>
                    
                </div>

                <div class="col-md-4 whyNYCCol">
                    <div class="whyNYS-box">
                        <div class="icon centereditem"><img src="{{ url('public/frontend')}}/assets/images/location/complete-icon.svg" alt=""></div>
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

   <!-- Service Location Section -->
   <section class="section serviceLocAbout grayBGServices">
        <div class="container">
            
            <div class="row align-items-center">
                <div class="col-md-5 text-opensans headLato rightPad">
                    <div class="title">
                        <h2>Service Locations</h2>
                        <p>Connect with professionals in your neighborhood.</p>
                    </div>
                </div>
                <div class="col-md-7 leftBordr">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-4 col-6">
                            <a href="{{ route('Services-Location-TheBronx')}}" class="locItem text-center d-block">
                                <span class="locImageCol d-block"><img src="{{ url('public/frontend')}}/assets/images/bronx-img.jpg" alt=""></span>
                                <span class="locName">The Bronx</span>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-4 col-6">
                            <a href="{{ route('Services-Location-Brooklyn')}}" class="locItem text-center d-block">
                                <span class="locImageCol d-block"><img src="{{ url('public/frontend')}}/assets/images/brooklyn-img.jpg" alt=""></span>
                                <span class="locName">Brooklyn</span>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-4 col-6">
                            <a href="{{ route('Services-Location-Queens')}}" class="locItem text-center d-block">
                                <span class="locImageCol d-block"><img src="{{ url('public/frontend')}}/assets/images/queens-img.jpg" alt=""></span>
                                <span class="locName">Queens</span>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-4 col-6">
                            <a href="{{ route('Services-Location-StatenIsland')}}" class="locItem text-center d-block">
                                <span class="locImageCol d-block"><img src="{{ url('public/frontend')}}/assets/images/staten-Island-img.jpg" alt=""></span>
                                <span class="locName">Staten Island</span>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-4 col-6">
                            <a href="{{ route('service-locations')}}" class="locItem text-center d-block">
                                <span class="locImageCol d-block"><img src="{{ url('public/frontend')}}/assets/images/newyork.jpg" alt=""></span>
                                <span class="locName">New York City</span>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-4 col-6">
                            <a href="{{ route('Services-Location-Manhattan')}}" class="locItem text-center d-block">
                                <span class="locImageCol d-block"><img src="{{ url('public/frontend')}}/assets/images/manhattan.jpg" alt=""></span>
                                <span class="locName">Manhattan</span>
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- //Service Location Section -->

    <!-- Call to action Section -->
    <section class="calltoaction">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center">
                <div class="text">
                    <h2>Start Your Project Today!</h5>
                    <p>SelectTask accepts only the best pros.</p>
                </div>
                <div class="button ml-auto">
                    <a href="{{ route('posttask-step1')}}" class="btn btn-primary btn-primary-shadow btnLg">Get Started</a>
                </div>
            </div>
        </div>
    </section>
    <!-- //Call to action Section -->
	
	@endsection 