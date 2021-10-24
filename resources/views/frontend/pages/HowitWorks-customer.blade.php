  @extends('frontend.layout.app')
@section('content')
 
 <section class="banner innerbanner howitWorkBanner banner600">
        <div class="container">
            <div class="row align-items-md-center">
                <div class="col-md-6 pr-md-0">
                    <div class="detail wow bounceInLeft" data-wow-delay="0.1s">
                        <img src="{{ url('/public/frontend')}}/assets/images/howitworks/banner-icon.svg" alt="" class="bannerIcon">
                        <h2>How it works</h2>
                        <div class="bannerContent">
                            <p><strong>Get things done without the guesswork.</strong></p>
                            <p><span class="mobBlock">We’ll match you with the best</span> local pros <span class="d-md-block">for your project.</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //Banner Section -->

    <!--How to Find a Pro for Your Project Section-->
    <section class="section servicesTopSection">
        <div class="container container1140">
            <!--Title-->
            <div class="title text-center mb-0">
                <h2 class="wow bounceInDown mb-0" data-wow-delay="0.1s">How to Find a Pro for Your Project</h2>
            </div>
            <!--//Title-->

            <div class="howitworksSection">
                <div class="howitworksRow row align-items-center">
                    <div class="col-md-6 order-md-2">
                        <img src="{{ url('/public/frontend')}}/assets/images/howitworks/post-a-job.svg" alt="">
                    </div>
                    <div class="col-md-6 order-md-1">
                        <div class="leftContentBox">
                            <h3>Post a Task</h3>
                            <p class="text-opensans">Posting is fast, easy, and free. Just fill out our simple form and upload pictures of your project. </p>
                            <p class="text-opensans mt-md-4"><a href="{{ route('posttask-step1')}}" class="text-primary semiBold arrowBtn btmBorderLink">Post a Task <img src="{{ url('/public/frontend')}}/assets/images/arrow-green.svg" alt="" class="icon"></a></p>
                        </div>                        
                    </div>                    
                </div>
                
                <div class="howitworksRow row align-items-center">
                    <div class="col-md-6">
                        <img src="{{ url('/public/frontend')}}/assets/images/howitworks/assign-your-pro.svg" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="leftContentBox">
                            <h3>Assign Your Pro</h3>
                            <p class="text-opensans">Review the applicants and assign the pro that is the best fit for the job.</p>                           
                        </div>                        
                    </div>                    
                </div>

                <div class="howitworksRow row align-items-center">
                    <div class="col-md-6 order-md-2">
                        <img src="{{ url('/public/frontend')}}/assets/images/howitworks/complete-job.svg" alt="">
                    </div>
                    <div class="col-md-6 order-md-1">
                        <div class="leftContentBox">
                            <h3>The cleanest, simplest interface</h3>
                            <p class="text-opensans">Once the job is complete, change the status and give your Tasker a review.</p>                            
                        </div>                        
                    </div>                    
                </div>

                

            </div>

        </div>
    </section>
    <!-- //How to Find a Pro for Your Project Section-->

    <!-- Service price Section -->
    <section class="section faqSection grayBG">
        <div class="container">
             <!-- Title -->
             <div class="title text-center">
                <h2 class="wow bounceInDown" data-wow-delay="0.1s">FAQ’s</h2>               
            </div>
            <!-- //Title -->
            <div id="accordion" class="faqAccordion">
                <div class="card" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <div class="card-header" id="headingOne">
                      <h5 class="mb-0">Does SelectTask serve my area?</h5>
                      <img src="{{ url('/public/frontend')}}/assets/images/arrow-right.svg" alt="">
                    </div>
                
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                      <div class="card-body">Select Task connects homeowners with skilled professionals across the New Your City.</div>
                    </div>
                </div>

                <div class="card collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <div class="card-header" id="headingTwo">
                      <h5 class="mb-0">Does it cost me anything to post a Task?</h5>
                      <img src="{{ url('/public/frontend')}}/assets/images/arrow-right.svg" alt="">
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                      <div class="card-body">Posting a job on SelectTask is completely free.</div>
                    </div>
                  </div>

                  <div class="card collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <div class="card-header" id="headingThree">
                      <h5 class="mb-0">Who will see my job post?</h5>
                      <img src="{{ url('/public/frontend')}}/assets/images/arrow-right.svg" alt="">
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                      <div class="card-body">Any Tasker that fits your job description will be able to view the details on your project. When you’re ready, you can review the Taskers who have applied to your post and choose the best one for the job.</div>
                    </div>
                  </div>

                  <div class="card collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                    <div class="card-header" id="headingfour">
                      <h5 class="mb-0">When will pricing be discussed?</h5>
                      <img src="{{ url('/public/frontend')}}/assets/images/arrow-right.svg" alt="">
                    </div>
                    <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                      <div class="card-body">Similar to traditional quotes, prices and terms will be negotiated between you and the professional before the start of your project.</div>
                    </div>
                  </div>

                  <div class="card collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                    <div class="card-header" id="headingfive">
                      <h5 class="mb-0">Do the pros work for SelectTask or for me?</h5>
                      <img src="{{ url('/public/frontend')}}/assets/images/arrow-right.svg" alt="">
                    </div>
                    <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordion">
                      <div class="card-body">Our pros are independent contractors who use SelectTask to discover jobs they are trained to perform. Once you are connected with the pro, they work for you.</div>
                    </div>
                  </div>

                  <div class="card collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                    <div class="card-header" id="headingEight">
                      <h5 class="mb-0">What kind of customer support does SelectTask provide?</h5>
                      <img src="{{ url('/public/frontend')}}/assets/images/arrow-right.svg" alt="">
                    </div>
                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                      <div class="card-body">SelectTask provides top-quality customer care to all of our users. If you have questions or concerns during any part of the process, do not hesitate to contact us on our <a href="{{ route('help-support')}}" class="text-primary underlineLink">support page.</a></div>
                    </div>
                  </div>
            </div>
        </div>
    </section>
    <!-- //Service price Section -->

    <!-- Call to action Section -->
    <section class="section calltoaction centercalltoaction">
        <div class="container">
            <div class="text-center">
                <div class="text text-lato">
                    <h2>Start a Project Today</h5>
                    <p>SelectTask accepts only the best pros!</p>
                </div>
                <div class="button mt-md-5 mt-4 ml-auto">
                    <a href="{{ route('posttask-step1')}}" class="btn btn-primary btn-primary-shadow btnLg">Post a Free Task</a>
                </div>
            </div>
        </div>
    </section>
    <!-- //Call to action Section -->

    <!-- Service Section -->
    <section class="section services diffStyle">
        <div class="container">
            <!-- Title -->
            <div class="title text-center">
                <h2 class="wow bounceInDown" data-wow-delay="0.1s">Find exactly what you're looking for</h2>
                <p class="wow bounceInLeft subhead" data-wow-delay="0.1s">The easy, reliable way to take care of your home.</p>
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