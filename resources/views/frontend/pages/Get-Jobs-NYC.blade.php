 @extends('frontend.layout.app')
@section('content')
 
 <!-- Banner Section -->
    <section class="banner innerbanner nyc-job-Banner banner600">
        <div class="container">
            <div class="row align-items-md-center">
                <div class="col-md-6 pr-md-0">
                    <div class="detail wow bounceInLeft" data-wow-delay="0.1s">
                        <img src="{{ url('/public/frontend')}}/assets/images/nyc-jobs/nyc-banner-icon.svg" alt="" class="bannerIcon">
                        <h2>Find Jobs in New York City</h2>
                        <div class="bannerContent maxW-350">
                            <p>Gain access to hundreds of new jobs in NYC with a <strong>SelectTask Pro account</strong>. Sign up for free, set your weekly budget, and start earning.</p>
                        </div>
                        <div class="button">
                            <a href="#" class="btn btn-green btn-green-shadow mw-321 btnLg get_start_btn" >Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //Banner Section -->

    <!--How to Find a Pro for Your Project Section-->
    <section class="section servicesTopSection whyNYCSection">
        <div class="container container1140">
            <!--Title-->
            <div class="title text-center mb-0">
                <h2 class="wow bounceInDown mb-0" data-wow-delay="0.1s">Why Sign Up To Be a SelectTask Pro?</h2>
            </div>
            <!--//Title-->

            <div class="howitworksSection">
                <div class="howitworksRow row align-items-center text-opensans">
                    <div class="col-md-6 order-md-2 text-center">
                        <img src="{{ url('/public/frontend')}}/assets/images/nyc-jobs/no-signup-icon.svg" width="400" alt="">
                    </div>
                    <div class="col-md-6 order-md-1">
                        <div class="leftContentBox">
                            <h3>No signup No fees</h3>
                            <p class="text-opensans">SelectTask has transparent, competitive pricing for service pros.</p>                           
                        </div>                        
                    </div>                    
                </div>
            </div>
        </div>
    </section>
    <!-- //How to Find a Pro for Your Project Section-->

    <!--Video Section-->
    <section class="section jobVideoSection grayBG">
        <div class="container">
            <!--Title-->
        <div class="title text-center">
            <h2 class="wow bounceInDown" data-wow-delay="0.1s">Grow Your Business <span class="mobBlock">with SelectTask</span>
            </h2>
            <h4 class="wow bounceInLeft" data-wow-delay="0.1s">Finding new customers is fast and easy when you use SelectTask. With no signup or monthly fees,
                <span class="d-md-block">you have complete control over your budget and your business.</span></h4>
        </div>
        <!--//Title-->
        <div class="videosection mx-auto">
            <div class="videoembed">
                <div class="embed-responsive embed-responsive-16by9">
                    <video id="sample_video" class="embed-responsive-item"> 
                          <source src="https://media.geeksforgeeks.org/wp-content/uploads/20200107020629/sample_video.mp4" type="video/mp4"> 
                    </video> 
                  </div>
            </div>
            <div class="cover">
                <img src="{{ url('/public/frontend')}}/assets/images/nyc-jobs/video-image.jpg" class="img-fluid" alt="">
                <div class="play-btn">
                    <button onclick="playVideo()" id="playbtn"> 
                        <img src="{{ url('/public/frontend')}}/assets/images/nyc-jobs/play-btn-videoWt.svg" class="img-fluid" alt="">
                    </button> 
                </div>
            </div>
        </div>
        </div>
        
    </section>
    <!--//Video Section-->

    <!-- Service price Section -->
    <section class="section faqSection">
        <div class="container">
             <!-- Title -->
             <div class="title text-center">
                <h2 class="wow bounceInDown" data-wow-delay="0.1s">Learn More</h2>               
            </div>
            <!-- //Title -->
            <div id="accordion" class="faqAccordion activeGreen">
                <div class="card" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <div class="card-header" id="headingOne">
                      <h5 class="mb-0">What services can I provide?</h5>
                      <svg width="22" height="12" class="icon align-baseline">
                        <use xlink:href="#faq-right-icon" ></use>
                      </svg>
                    </div>
                
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                      <div class="card-body">SelectTask is a platform where repair, maintenance, and contracting professionals can find jobs of any size. Below are the categories that customers can currently post to SelectTask.</div>
                    </div>
                </div>

                <div class="card collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <div class="card-header" id="headingTwo">
                      <h5 class="mb-0">How will I be connected to customers?</h5>
                      <svg width="22" height="12" class="icon align-baseline">
                        <use xlink:href="#faq-right-icon" ></use>
                      </svg>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                      <div class="card-body">After applying to a job through SelectTask, you'll be able to view the customer contact information and negotiate terms and pricing, as you would normally do before starting a job.</div>
                    </div>
                  </div>

                  <div class="card collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <div class="card-header" id="headingThree">
                      <h5 class="mb-0">How do I get jobs?</h5>
                      <svg width="22" height="12" class="icon align-baseline">
                        <use xlink:href="#faq-right-icon" ></use>
                      </svg>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                      <div class="card-body">Once you’ve set up your profile, all you need to do is apply for jobs.</div>
                    </div>
                  </div>

                  <div class="card collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                    <div class="card-header" id="headingfour">
                      <h5 class="mb-0">What does it cost?</h5>
                      <svg width="22" height="12" class="icon align-baseline">
                        <use xlink:href="#faq-right-icon" ></use>
                      </svg>
                    </div>
                    <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                      <div class="card-body">Each lead costs only $10, We never charge signup fees, monthly fees, or commission fees.</div>
                    </div>
                  </div>

                 <div class="card collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    <div class="card-header" id="headingSeven">
                      <h5 class="mb-0">Where can I provide services when I use SelectTask?</h5>
                      <svg width="22" height="12" class="icon align-baseline">
                        <use xlink:href="#faq-right-icon" ></use>
                      </svg>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                      <div class="card-body">SelectTask currently connects service providers with customers in all five boroughs of New York City.</div>
                    </div>
                  </div>

            </div>
        </div>
    </section>
    <!-- //Service price Section -->

    <!--Get Started-->
    <section class="section connecting getStarted-NYC">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7 wow bounceInleft" data-wow-delay="0.1s">
                    <h2>Find the Right Jobs with <span class="latoBlack d-block">With SelectTask</span></h2>
                    <h3 class="subheadinggray mt-3">Create your profile to find <span class="mobBlock">the best <span class="d-md-block">jobs in NYC.</span></span></h3>
                    <div class="button mt-4 mt-md-5">
                        <a href="#" class="btn btn-green btn-green-shadow mw-300 btnLg">Get Jobs Today</a>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    <!--//Get Started-->

    <!-- Service Section -->
    <section class="section services diffStyle">
        <div class="container">
            <!-- Title -->
            <div class="title text-center">
                <h2 class="wow bounceInDown" data-wow-delay="0.1s">Top Categories</h2>               
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
                                <span class="locImageCol d-block"><img src="{{ url('/public/frontend')}}/assets/images/bronx-img.jpg" alt=""></span>
                                <span class="locName">The Bronx</span>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-4 col-6">
                            <a href="{{ route('Services-Location-Brooklyn')}}" class="locItem text-center d-block">
                                <span class="locImageCol d-block"><img src="{{ url('/public/frontend')}}/assets/images/brooklyn-img.jpg" alt=""></span>
                                <span class="locName">Brooklyn</span>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-4 col-6">
                            <a href="{{ route('Services-Location-Queens')}}" class="locItem text-center d-block">
                                <span class="locImageCol d-block"><img src="{{ url('/public/frontend')}}/assets/images/queens-img.jpg" alt=""></span>
                                <span class="locName">Queens</span>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-4 col-6">
                            <a href="{{ route('Services-Location-StatenIsland')}}" class="locItem text-center d-block">
                                <span class="locImageCol d-block"><img src="{{ url('/public/frontend')}}/assets/images/staten-Island-img.jpg" alt=""></span>
                                <span class="locName">Staten Island</span>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-4 col-6">
                            <a href="{{ route('service-locations')}}" class="locItem text-center d-block">
                                <span class="locImageCol d-block"><img src="{{ url('/public/frontend')}}/assets/images/newyork.jpg" alt=""></span>
                                <span class="locName">New York City</span>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-4 col-6">
                            <a href="{{ route('Services-Location-Manhattan')}}" class="locItem text-center d-block">
                                <span class="locImageCol d-block"><img src="{{ url('/public/frontend')}}/assets/images/manhattan.jpg" alt=""></span>
                                <span class="locName">Manhattan</span>
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- //Service Location Section -->
	
	@endsection