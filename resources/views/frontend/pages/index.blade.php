 @extends('frontend.layout.app')
@section('content')
 <!-- Banner Section -->
    <section class="banner homepageBanner">
        <div class="container">
            <div class="row">
                <div class="col-md-6 px-xl-0">
                    <div class="detail wow bounceInLeft" data-wow-delay="0.1s">
                        <h2><span class="text-primary">New York City</span></br >Repairs Made Simple</br> Find Local Pros Now</h2>
                        <div id="sticky-anchor"></div>
                        <div class="button" id="top-menu">
                            <a href="#howitWorks" class="ml-md-3 text-link order-lg-2">
                                <svg width="17" height="23" class="img-fluid">
                                    <use xlink:href="#arrow-right-icon" ></use>
                                </svg> See How it Works</a>
                            <a href="#" class="btn btn-green btn-green-shadow mr-md-4 mw-321 btnLg  order-lg-1">Get Free Quote</a>
                            
                        </div>
                        <!-- Mouse Scroll Icon -->
                        <div class="scroll-downs">
                            <a href="#ourServicesSec">
                              <div class="mousey">
                              <div class="scroller"></div>
                            </div>  
                            </a>
                            
                       </div>
                        <!-- //Mouse Scroll Icon -->
                    </div>
                </div>
                <div class="col-md-6 wow bounceInRight px-xl-0" data-wow-delay="0.1s">
                    <p class="mobileVideoLink d-block d-md-none text-center mt-2"><a href="#" data-toggle="modal" data-target="#videoModal">Watch Video</a></p>
                    <div class="videosection mobNone">
                        <div class="videoembed">
                            <div class="embed-responsive embed-responsive-16by9">
                                <video id="sample_video"  class="embed-responsive-item" controls> 
                                      <source src="https://uat.selecttask.com/front_end/images/video-img-2.mp4" type="video/mp4"> 
                                </video> 
                              </div>
                        </div>
                        <div class="cover">
                            <img src="{{ url('/public/frontend')}}/assets/images/video-img.jpg" class="img-fluid" alt="" />
                            <div class="play-btn">
                                <button onclick="playVideo()" id="playbtn"> 
                                    <img src="{{ url('/public/frontend')}}/assets/images/play-button.svg" class="img-fluid" alt="" />
                                </button> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //Banner Section -->
    <!-- Service Section -->
    <Section class="section services serviceHomepage" id="ourServicesSec">
        <div class="container">
            <!-- Title -->
            <div class="title text-center">
                <h2 class="wow bounceInDown" data-wow-delay="0.1s">Our Services</h2>
                <h4 class="wow bounceInLeft" data-wow-delay="0.1s">Let the pros handle your project.</h4>
            </div>
            <!-- //Title -->
            <div class="row justify-content-center">
                <!-- Box Column -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="service-box wow bounceInLeft" data-wow-delay="0.1s">
                        <div class="icon">
                            <img src="{{ url('/public/frontend')}}/assets/images/painting-icon.svg" class="img-fluid" />
                        </div>
                        <h3>Painting</h3>
                        <div class="button">
                            <a href="{{ route('posttask-step1')}}?cat=4" class="btn btn-primary btn-sm">Post Now</a>
                        </div>
                    </div>
                </div>
                <!-- //Box Column -->
                <!-- Box Column -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="service-box wow bounceInLeft" data-wow-delay="0.1s">
                        <div class="icon">
                            <img src="{{ url('/public/frontend')}}/assets/images/handyman-icon.svg" class="img-fluid" />
                        </div>
                        <h3>Handyman</h3>
                        <div class="button">
                            <a href="{{ route('posttask-step1')}}?cat=2" class="btn btn-primary btn-sm">Post Now</a>
                        </div>
                    </div>
                </div>
                <!-- //Box Column -->
                <!-- Box Column -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="service-box wow bounceInRight" data-wow-delay="0.1s">
                        <div class="icon">
                            <img src="{{ url('/public/frontend')}}/assets/images/plumbing-icon.svg" class="img-fluid" />
                        </div>
                        <h3>Plumbing</h3>
                        <div class="button">
                            <a href="{{ route('posttask-step1')}}?cat=5" class="btn btn-primary btn-sm">Post Now</a>
                        </div>
                    </div>
                </div>
                <!-- //Box Column -->
                <!-- Box Column -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="service-box wow bounceInRight" data-wow-delay="0.1s">
                        <div class="icon">
                            <img src="{{ url('/public/frontend')}}/assets/images/elctric-icon.svg" class="img-fluid" />
                        </div>
                        <h3>Electric</h3>
                        <div class="button">
                            <a href="{{ route('posttask-step1')}}?cat=7" class="btn btn-primary btn-sm">Post Now</a>
                        </div>
                    </div>
                </div>
                <!-- //Box Column -->
                <!-- Box Column -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="service-box wow bounceInLeft" data-wow-delay="0.1s">
                        <div class="icon">
                            <img src="{{ url('/public/frontend')}}/assets/images/heating-icon.svg" class="img-fluid" />
                        </div>
                        <h3>Heating & Cooling</h3>
                        <div class="button">
                            <a href="{{ route('posttask-step1')}}?cat=1" class="btn btn-primary btn-sm">Post Now</a>
                        </div>
                    </div>
                </div>
                <!-- //Box Column -->
                <!-- Box Column -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="service-box wow bounceInLeft" data-wow-delay="0.1s">
                        <div class="icon">
                            <img src="{{ url('/public/frontend')}}/assets/images/roofing-icon.svg" class="img-fluid" />
                        </div>
                        <h3>Roofing</h3>
                        <div class="button">
                            <a href="{{ route('posttask-step1')}}?cat=6" class="btn btn-primary btn-sm">Post Now</a>
                        </div>
                    </div>
                </div>
                <!-- //Box Column -->
                <!-- Box Column -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="service-box wow bounceInRight" data-wow-delay="0.1s">
                        <div class="icon">
                            <img src="{{ url('/public/frontend')}}/assets/images/general-contracting-icon.svg" class="img-fluid" />
                        </div>
                        <h3>General Contracting</h3>
                        <div class="button">
                            <a href="{{ route('posttask-step1')}}?cat=3" class="btn btn-primary btn-sm">Post Now</a>
                        </div>
                    </div>
                </div>
                <!-- //Box Column -->
                <!-- Box Column -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="service-box wow bounceInRight" data-wow-delay="0.1s">
                        <div class="icon">
                            <img src="{{ url('/public/frontend')}}/assets/images/carpentry-icon.svg" class="img-fluid" />
                        </div>
                        <h3>Carpentry</h3>
                        <div class="button">
                            <a href="{{ route('posttask-step1')}}?cat=8" class="btn btn-primary btn-sm">Post Now</a>
                        </div>
                    </div>
                </div>
                <!-- //Box Column -->
                
            </div>
            <div class="text-center mt-4 mt-md-5 wow bounceInDown" data-wow-delay="0.1s">
                <a href="#" class="btn btn-secondary btn-arrow btnLg">
                    View More <img src="{{ url('/public/frontend')}}/assets/images/left-arrow.svg" class="icon" />
                </a>
            </div>
        </div>
    </Section>
    <!-- //Featured Section -->
    
     <!-- How it Work Section -->
     <Section class="section howitwork grayBG" id="howitWorks">
        <div class="container">
            <!-- Title -->
            <div class="title text-center pb-3">
                <h2 class="wow bounceInDown" data-wow-delay="0.1s">How SelectTask Works</h2>
                <h4 class="wow bounceInLeft" data-wow-delay="0.1s">You need some help around the house. We’ve got you covered.</h4>
            </div>
            <!-- //Title -->
            <div class="row justify-content-center">
                <!-- Box Column -->
                <div class="col-md-4 col-lg-3">
                    <div class="howitwork-box wow bounceInLeft" data-wow-delay="0.1s">
                        <div class="count">1</div>
                        <div class="icon postIcon justify-content-center">
                            <img src="{{ url('/public/frontend')}}/assets/images/document.svg" class="img-fluid" />
                        </div>
                        <div class="mobRightCon">
                            <h3>Post</h3>
                            <div class="text">Post your job to discover the best pros</div>
                        </div>                        
                    </div>
                </div>
                <!-- //Box Column -->
                <!-- Box Column -->
                <div class="col-md-4 col-lg-3">
                    <div class="howitwork-box wow bounceInLeft" data-wow-delay="0.1s">
                        <div class="count">2</div>
                        <div class="icon assignIcon justify-content-center">
                            <img src="{{ url('/public/frontend')}}/assets/images/user.svg" class="img-fluid" />
                        </div>
                        <div class="mobRightCon">
                            <h3>Assign</h3>
                            <div class="text">Choose the best pro in a few simple steps</div>
                        </div>                        
                    </div>
                </div>
                <!-- //Box Column -->
                <!-- Box Column -->
                <div class="col-md-4 col-lg-3">
                    <div class="howitwork-box wow bounceInRight" data-wow-delay="0.1s">
                        <div class="count">3</div>
                        <div class="icon relaxIcon justify-content-center">
                            <img src="{{ url('/public/frontend')}}/assets/images/alarm.svg" class="img-fluid" />
                        </div>
                        <div class="mobRightCon">
                            <h3>Relax</h3>
                            <div class="text">A trusted pro is handling your project</div>
                        </div>
                    </div>
                </div>
                <!-- //Box Column -->
                
            </div>
        </div>
    </Section>
    <!-- //How it Work Section -->

     <!-- Signup Section -->
     <section class="section connecting connectingHomeowner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7 wow bounceInleft" data-wow-delay="0.1s">
                    <h2>Trusted Local Professionals are Only a Few Clicks Away </h2>
                    <ul class="list-bullet">
                        <li>Find pros close to home</li>
                        <li>Compare service provider</li>
                    </ul>
                    <div class="button mt-5">
                        <a href="{{ route('posttask-step1')}}" class="btn btn-primary mw-300 btn-primary-shadow btnLg">Post a Free Task Now</a>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    <!-- //Service Location Section -->

    <!-- Service Location Section -->
    <section class="section serviceLocation">
        <div class="container">
            <div class="title text-center">
                <h2>Service Locations</h2>
                <h4 class="text-opensans">Connect with professionals in your neighborhood.</h4>
            </div>
            <div class="row">
                <!-- COlumn -->
                <div class="col-6 col-lg-2 col-sm-4">
                    <div class="location-item">
                        <div class="image">
                            <img src="{{ url('/public/frontend')}}/assets/images/bronx-img.jpg" class="img-fluid" />
                        </div>
                        <h4>The Bronx</h4>
                        <a href="{{ route('Services-Location-TheBronx')}}" class="btn btn-secondary btn-secondary-shadow btn-sm">View</a>
                    </div>
                </div>
                <!-- //COlumn -->
                <!-- COlumn -->
                <div class="col-6 col-lg-2 col-sm-4">
                    <div class="location-item">
                        <div class="image">
                            <img src="{{ url('/public/frontend')}}/assets/images/brooklyn-img.jpg" class="img-fluid" />
                        </div>
                        <h4>Brooklyn</h4>
                        <a href="{{ route('Services-Location-Brooklyn')}}" class="btn btn-secondary btn-secondary-shadow btn-sm">View</a>
                    </div>
                </div>
                <!-- //COlumn -->
                <!-- COlumn -->
                <div class="col-6 col-lg-2 col-sm-4">
                    <div class="location-item">
                        <div class="image">
                            <img src="{{ url('/public/frontend')}}/assets/images/queens-img.jpg" class="img-fluid" />
                        </div>
                        <h4>Queens</h4>
                        <a href="{{ route('Services-Location-Queens')}}" class="btn btn-secondary btn-secondary-shadow btn-sm">View</a>
                    </div>
                </div>
                <!-- //COlumn -->
                <!-- COlumn -->
                <div class="col-6 col-lg-2 col-sm-4">
                    <div class="location-item">
                        <div class="image">
                            <img src="{{ url('/public/frontend')}}/assets/images/staten-Island-img.jpg" class="img-fluid" />
                        </div>
                        <h4>Staten Island</h4>
                        <a href="{{ route('Services-Location-StatenIsland')}}" class="btn btn-secondary btn-secondary-shadow btn-sm">View</a>
                    </div>
                </div>
                <!-- //COlumn -->
                <!-- COlumn -->
                <div class="col-6 col-lg-2 col-sm-4">
                    <div class="location-item">
                        <div class="image">
                            <img src="{{ url('/public/frontend')}}/assets/images/newyork.jpg" class="img-fluid" />
                        </div>
                        <h4>New York City</h4> 
                        <a href="{{ route('service-locations')}}" class="btn btn-secondary btn-secondary-shadow btn-sm">View</a>
                    </div>
                </div>
                <!-- //COlumn -->
                <!-- COlumn -->
                <div class="col-6 col-lg-2 col-sm-4">
                    <div class="location-item">
                        <div class="image">
                            <img src="{{ url('/public/frontend')}}/assets/images/manhattan.jpg" class="img-fluid" />
                        </div>
                        <h4>Manhattan</h4>
                        <a href="{{ route('Services-Location-Manhattan')}}" class="btn btn-secondary btn-secondary-shadow btn-sm">View</a>
                    </div>
                </div>
                <!-- //COlumn -->
            </div>
        </div>
    </section>
    <!-- //Service Location Section -->

    <!-- Signup Section -->
    <section class="section connecting signupSection text-opensans headLato">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7 wow bounceInleft" data-wow-delay="0.1s">
                    <h2>Sign Up To Become a <span class="d-block">SelectTask Pro</span></h2>
                    
                        <ul class="list-bullet blkColor">
                            <li>No Signup Fee</li>
                            <li>No Monthly Fee</li>
                        </ul>
                    
                    
                    <div class="button mt-5">
                        <a href="#" class="btn btn-primary mw-300 btn-primary-shadow btnLg">Sign Up</a>
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
                    <h2>Start a Project today!</h5>
                    <p class="my-2 my-md-0">SelectTask accepts only <span class="d-block d-md-inline-block">the best pros.</span></p>
                </div>
                <div class="button ml-auto">
                    <a href="{{ route('posttask-step1')}}" class="btn btn-primary btn-primary-shadow btnLg"> Post a Task</a>
                </div>
            </div>
        </div>
    </section>
    <!-- //Call to action Section -->
	 @endsection 