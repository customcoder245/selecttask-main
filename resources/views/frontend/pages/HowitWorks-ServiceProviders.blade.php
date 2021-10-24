  @extends('frontend.layout.app')
@section('content')
<!-- Banner Section -->
    <section class="banner innerbanner howitWorkBanner1 banner600">
        <div class="container">
            <div class="row align-items-md-center">
                <div class="col-md-6 pr-md-0">
                    <div class="detail wow bounceInLeft" data-wow-delay="0.1s">
                        <img src="{{ url('/public/frontend')}}/assets/images/howitworks/banner-icon1.svg" alt="" class="bannerIcon">
                        <h2>We Connect You <span class="mobBlock noBlock400">with New Customers in</span> New York City</h2>
                        <div class="bannerContent">
                            <p>SelectTask helps you find <span class="mobBlock">new jobs in your area.</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //Banner Section -->

    <!--How it works-->
    <section class="section servicesTopSection">
        <div class="container container1140">
            <!--Title-->
            <div class="title text-center">
                <h2 class="wow bounceInDown" data-wow-delay="0.1s">How it works</h2>
            </div>
            <!--//Title-->

            <div class="howitworksSection">
                <div class="howitworksRow row align-items-center">
                    <div class="col-md-6 order-md-2 text-center">
                        <img src="{{ url('/public/frontend')}}/assets/images/howitworks/create-your-account.svg" alt="">
                    </div>
                    <div class="col-md-6 order-md-1">
                        <div class="leftContentBox">
                            <h3>Create Your Account</h3>
                            <p class="text-opensans">There’s no signup fee, no commission or subscription fee, and no hassle.</p>                           
                        </div>                        
                    </div>                    
                </div>

                <div class="howitworksRow row align-items-center">
                    <div class="col-md-6 order-md-2 text-center">
                        <img src="{{ url('/public/frontend')}}/assets/images/howitworks/complete-your-profile.svg" alt="">
                    </div>
                    <div class="col-md-6 order-md-1">
                        <div class="leftContentBox">
                            <h3>Complete Your Profile</h3>
                            <p class="text-opensans">Provide details about yourself or your company to attract the right customers.</p>
                        </div>                        
                    </div>                    
                </div>

                <div class="howitworksRow row align-items-center">
                    <div class="col-md-6 order-md-2 text-center">
                        <img src="{{ url('/public/frontend')}}/assets/images/howitworks/applyto-jobs.svg" alt="">
                    </div>
                    <div class="col-md-6 order-md-1">
                        <div class="leftContentBox">
                            <h3>Apply to Jobs</h3>
                            <p class="text-opensans">Read Task details and apply to the jobs you see fit.</p>
                            <p class="text-opensans mt-md-4"><a href="#" class="text-primary semiBold arrowBtn btmBorderLink get_start_btn">Apply Now <img src="{{ url('/public/frontend')}}/assets/images/arrow-green.svg" alt="" class="icon"></a></p>
                        </div>                        
                    </div>                    
                </div>

                <div class="howitworksRow row align-items-center">
                    <div class="col-md-6 order-md-2 text-center">
                        <img src="{{ url('/public/frontend')}}/assets/images/howitworks/get-hired.svg" alt="">
                    </div>
                    <div class="col-md-6 order-md-1">
                        <div class="leftContentBox">
                            <h3>Get Hired</h3>
                            <p class="text-opensans">Responding to leads quickly turns into more
                                jobs for you.</p>
                        </div>                        
                    </div>                    
                </div>

                <div class="howitworksRow row align-items-center">
                    <div class="col-md-6 order-md-2 text-center">
                        <img src="{{ url('/public/frontend')}}/assets/images/howitworks/complete-the-job.svg" alt="">
                    </div>
                    <div class="col-md-6 order-md-1">
                        <div class="leftContentBox">
                            <h3>Complete The Job</h3>
                            <p class="text-opensans">Charge your customer any way you like, and keep 100% of the payment.</p>
                        </div>                        
                    </div>                    
                </div>
                
            </div>

        </div>
    </section>
    <!-- //How it works-->
    
    <!--How to get results-->
    <section class="section getResults">
        <div class="container">
            <!--Title-->
            <div class="title text-center">
                <h2 class="wow bounceInDown" data-wow-delay="0.1s">How to get results</h2>
                <h4 class="wow bounceInLeft" data-wow-delay="0.1s">Here are some tips for how to get started and win your first Task.</h4>
            </div>
            <!--//Title-->

            <div class="row">
                <div class="col-md-4">
                    <div class="resultsBox">
                        <div class="icon">
                            <img src="{{ url('/public/frontend')}}/assets/images/howitworks/setup-profile-icon.svg" alt="">
                        </div>
                        <div class="resultBoxContent line-height flex-grow-1">
                            <h3>Set Up Your Profile</h3>
                            <p >Make sure to complete your profile to stand out and get more jobs,<a href="{{ route('provider-company-info')}}" class="Bold underlineLink"> Set Up Your Profile.</a></p>
                        </div>
                        <!--a href="{{ route('provider-company-info')}}" class="btn btn-primary btn-sm btn-primary-shadow">Set Up Profile</a-->
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="resultsBox">
                        <div class="icon">
                            <img src="{{ url('/public/frontend')}}/assets/images/howitworks/get-reviews-icon.svg" alt="">
                        </div>
                        <div class="resultBoxContent line-height flex-grow-1">
                            <h3>Get Reviews</h3>
                            <p >Ask your satisfied customers to leave reviews on your profile to show to future customers.</p>
                        </div>
                        <!--a href="#" class="btn btn-primary btn-sm btn-primary-shadow">Add Reviews</a -->
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="resultsBox">
                        <div class="icon">
                            <img src="{{ url('/public/frontend')}}/assets/images/howitworks/respond-quickly-icon.svg" alt="">
                        </div>
                        <div class="resultBoxContent line-height flex-grow-1">
                            <h3>Respond Quickly</h3>
                            <p >Responding to customers quickly will help you earn more assignments.</p>
                        </div>
                        <!--a href="#" class="btn btn-primary btn-sm btn-primary-shadow">Auto Send</a-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//How to get results-->

    <!--Sign Up-->
    <section class="section connecting signUpHIW">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7 wow bounceInleft" data-wow-delay="0.1s">
                    <h2>Thousands of Pros are <span class="mobBlock">Finding New Customers</span> <span class="latoBlack d-block">With SelectTask</span></h2>
                    <h3 class="subheadinggray mt-3">Sign up today to find your <span class="mobBlock">next customer.</span></h3>
                    <div class="button mt-4 mt-md-5">
                        <a href="#" class="btn btn-green btn-green-shadow mw-300 btnLg get_start_btn">Sign Up</a>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    <!--//Sign Up-->

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
                      <h5 class="mb-0">Can I use SelectTask in my location?</h5>
                      <img src="{{ url('/public/frontend')}}/assets/images/arrow-right.svg" alt="">
                    </div>
                
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                      <div class="card-body">SelectTask connects service professionals across New York City with potential customers. Once you're registered with SelectTask, you'll receive job alerts for your desired area(s).</div>
                    </div>
                </div>

                <div class="card collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <div class="card-header" id="headingTwo">
                      <h5 class="mb-0">Does it cost anything to sign up?</h5>
                      <img src="{{ url('/public/frontend')}}/assets/images/arrow-right.svg" alt="">
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                      <div class="card-body">Signing up is always free, with no subscription or commission fees for our Taskers.</div>
                    </div>
                  </div>

                  <div class="card collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <div class="card-header" id="headingThree">
                      <h5 class="mb-0">How do I get jobs?</h5>
                      <img src="{{ url('/public/frontend')}}/assets/images/arrow-right.svg" alt="">
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                      <div class="card-body">As soon as your profile is complete, you'll be able to View & Apply for jobs.</div>
                    </div>
                  </div>

                  <div class="card collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                    <div class="card-header" id="headingfour">
                      <h5 class="mb-0">How much will I be charged?</h5>
                      <img src="{{ url('/public/frontend')}}/assets/images/arrow-right.svg" alt="">
                    </div>
                    <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                      <div class="card-body">With SelectTask, there is no signup fee, no monthly fees, and no commission fees. You keep 100% of your earnings from each Task. you will only be charged a maximum of $10 for each lead.</div>
                    </div>
                  </div>

                  <div class="card collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                    <div class="card-header" id="headingfive">
                      <h5 class="mb-0">How do I connect with customers?</h5>
                      <img src="{{ url('/public/frontend')}}/assets/images/arrow-right.svg" alt="">
                    </div>
                    <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordion">
                      <div class="card-body">After applying to a job through SelectTask, you'll be able to view the customer contact information and negotiate terms and pricing, as you would normally do before starting a job.</div>
                    </div>
                  </div>

                  <div class="card collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    <div class="card-header" id="headingSix">
                      <h5 class="mb-0">Will I meet with the customer before work begins?</h5>
                      <img src="{{ url('/public/frontend')}}/assets/images/arrow-right.svg" alt="">
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                      <div class="card-body">Once your contract is agreed upon by both parties, you can set up times to discuss the work over the phone or in person.</div>
                    </div>
                  </div>

                  <div class="card collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    <div class="card-header" id="headingSeven">
                      <h5 class="mb-0">How will I get paid for my work?</h5>
                      <img src="{{ url('/public/frontend')}}/assets/images/arrow-right.svg" alt="">
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                      <div class="card-body">You will be paid by your customer in whatever manner is agreed upon by you and the customer. SelectTask connects you to leads, but does not process payments for jobs.</div>
                    </div>
                  </div>
                 
                  <div class="card collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                    <div class="card-header" id="headingNine">
                      <h5 class="mb-0">What support does SelectTask provide me?</h5>
                      <img src="{{ url('/public/frontend')}}/assets/images/arrow-right.svg" alt="">
                    </div>
                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
                      <div class="card-body">SelectTask is here for you when you need us. SelectTask professionals and potential providers are encouraged to contact us with any questions or issues concerning any aspect of our service.</div>
                    </div>
                  </div>

                  <div class="card collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                    <div class="card-header" id="headingTen">
                      <h5 class="mb-0">What are the benefits of using SelectTask?</h5>
                      <img src="{{ url('/public/frontend')}}/assets/images/arrow-right.svg" alt="">
                    </div>
                    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion">
                      <div class="card-body">SelectTask makes it easy to find the right jobs for a low cost and a good return on investment without the hidden fees and headaches. We believe in transparency, honesty, and integrity, and we will do anything we can to maintain these principles in our business practices.</div>
                    </div>
                  </div>
            </div>
        </div>
    </section>
    <!-- //Service price Section -->
		@endsection