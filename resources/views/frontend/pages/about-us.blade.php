 @extends('frontend.layout.app')
@section('content')
 
 <!-- //Header -->
    <!-- Banner Section -->
    <section class="banner aboutUsBanner innerbanner">
        <div class="container">
            <div class="row align-items-md-center">
                <div class="col-md-7">
                    <div class="detail wow bounceInLeft" data-wow-delay="0.1s">
                        <h2>SelectTask <span class="d-sm-inline-block d-block">Connects People.</span></h2>
                        <h3>We help property owners <span class="mobBlock">find the best service providers in</span> <strong>New York City</strong> to handle their <span class="mobBlock">repair and maintenance tasks.</span></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //Banner Section -->

    <!--Aboutus Section-->
    <section class="section aboutus text-opensans headLato">
        <div class="container">
            <div class="title text-center">
                <h2 class="wow bounceInDown" data-wow-delay="0.1s">About Us</h2>
                <p class="wow bounceInLeft subhead" data-wow-delay="0.1s">SelectTask is a platform that connects NYC-based repair and maintenance <span class="d-lg-block">service providers with home and property owners.</span></p>
            </div>
            <div class="tabsContent d-md-flex">
                <ul class="nav nav-tabs d-none d-md-block" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a id="tab-A" class="nav-link active" data-toggle="tab" href="#whatwedo" role="tab" aria-controls="whatwedo">What We Do?</a>
                    </li>
                    <li class="nav-item">
                      <a id="tab-B" class="nav-link" data-toggle="tab" href="#issueResolve" role="tab" aria-controls="issueResolve">How We Can Help</a>
                    </li>
                    <li class="nav-item">
                      <a id="tab-C" class="nav-link" data-toggle="tab" href="#whyus" role="tab" aria-controls="whyus">Why We are Different?</a>
                    </li>                    
                  </ul>
                  
                  <div  id="content" class="tab-content" role="tablist">
                    <div class="card tab-pane fade show active" aria-labelledby="tab-A" id="whatwedo" role="tabpanel">
                        <div class="card-header" role="tab" id="heading-A">
                            
                                <!-- Note: `data-parent` removed from here -->
                                <a data-toggle="collapse" href="#collapse-A" aria-expanded="true" aria-controls="collapse-A">What We Do?</a>
                            
                        </div>
                        <div id="collapse-A" class="collapse show" data-parent="#content" role="tabpanel" aria-labelledby="heading-A">
                            <div class="card-body">
                                <h3>SelectTask Connects Qualified Repair Professionals to Customers in NYC</h3>
                                <p>We give homeowners the tools they need to keep up with their investment, giving them access to thousands of area pros who can help out with all of their repair and maintenance needs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card tab-pane fade" id="issueResolve" role="tabpanel" aria-labelledby="tab-B">
                        <div class="card-header" role="tab" id="heading-B">
                            
                                <a class="collapsed" data-toggle="collapse" href="#collapse-B" aria-expanded="false" aria-controls="collapse-B">How We Can Help</a>
                            
                        </div>
                        <div id="collapse-B" class="collapse" data-parent="#content" role="tabpanel" aria-labelledby="heading-B">
                            <div class="card-body">
                                <h3>Your Time Is Valuable. SelectTask Helps You Finish Projects Fast, So You Can Get Back to What Matters.</h3>
                                <p>We get it — life can be hectic. SelectTask can help you connect with the right service provider, so you can finally check off some of your to-dos.</p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="card tab-pane fade" id="whyus" role="tabpanel"  aria-labelledby="tab-C">
                        <div class="card-header" role="tab" id="heading-C">
                           
                                <a class="collapsed" data-toggle="collapse" href="#collapse-C" aria-expanded="false" aria-controls="collapse-C">Why We are Different?</a>
                            
                        </div>
                        <div id="collapse-C" class="collapse" role="tabpanel" data-parent="#content" aria-labelledby="heading-C">
                            <div class="card-body">
                                <h3>SelectTask Gives You the Tools You Need to Hire the Best Pros in Your Neighborhood</h3>
                                <p>Our maintenance and repair professionals are trusted New York City service providers who can help you complete your home-improvement tasks quickly and easily.</p>
                            </div>                    
                        </div>
                    </div>                    
                  </div>
            </div>
        </div>
    </section>
    <!--//Aboutus Section-->
   
       
    
    <!--Our Mission Section-->
    <div class="section ourMission text-opensans headLato pt-0 border-bottom">
        <div class="container">
            <div class="title text-center">
                <h2 class="wow bounceInDown" data-wow-delay="0.1s">Our Mission</h2>
                <p class="wow bounceInLeft subhead" data-wow-delay="0.1s">Our goal at SelectTask is to give you the best tools for all of their projects, <span class="d-md-block"> while providing the best service in the business.</span></p>
            </div>
            <div class="row borderDiv pt-md-5">
                <div class="col-md-6">
                    <div class="missionSection">
                        <h4>Our Vision</h4>
                        <p>To positively impact our community through the environment where we live, work, and play.</p>
                    </div>                    
                </div>
                <div class="col-md-6">
                    <div class="missionSection">
                        <h4>Our Values</h4>
                        <p>Consistency, integrity, and community are cornerstones of how we serve our customers.</p>
                    </div>                    
                </div>
            </div>
        </div>        
    </div>
    <!--//Our Mission Section-->

     

    <!-- Service Section -->
    <section class="section services">
        <div class="container">
            <!-- Title -->
            <div class="title text-center">
                <h2 class="wow bounceInDown" data-wow-delay="0.1s">Top Services</h2>
                <p class="wow bounceInLeft subhead" data-wow-delay="0.1s">We want to connect you with the best pros out there. Check out a few of our <span class="d-md-block">favorite categories to find the help you need for your project.</span>
                </p>
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
           
        </div>
    </section>
    <!-- //Featured Section -->
    
     <!-- Connecting Section -->
     <section class="section twoColumn">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 wow bounceInLeft" data-wow-delay="0.1s">
                    <div class="title twoColSection mb-0">
                        <h2 class="wow bounceInDown" data-wow-delay="0.1s">Start Tasking Today</h2>
                        <p class="wow bounceInLeft subhead" data-wow-delay="0.1s"><span class="mobTTL">Are you a repair and maintenance pro?</span> <span class="d-lg-block">Sign up to be one of <span class="mobBlock">our trusted providers today.</span></span></p>
                        <div class="button">
                            <a href="#" class="btn btn-green btn-sm get_start_btn">Become a Pro</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow bounceInRight rightColSec" data-wow-delay="0.1s">
                    <div class="title twoColSection mb-0">
                        <h2 class="wow bounceInDown" data-wow-delay="0.1s">Post a Task Now</h2>
                        <p class="wow bounceInLeft subhead" data-wow-delay="0.1s"><span class="mobTTL">Your project is waiting — and our process is simple.</span> Getting started is only a few clicks away.</p>
                        <div class="button">
                            <a href="{{ route('posttask-step1')}}" class="btn btn-primary btn-sm">Post a Task</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //Itegration Section -->

    
    <!-- Service Location Section -->
    <section class="section serviceLocAbout">
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
                            <a href="#" class="locItem text-center d-block">
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