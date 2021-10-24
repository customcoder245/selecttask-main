<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Task </title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('/')}}/public/comingsoon/images/favicon.png">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('/')}}/public/comingsoon/css/style.css">
</head>
<body data-url="{{ asset('/')}}">
    <div class="wrapper">
        <header class="site-header">
            <nav class="navbar justify-content-center">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ url('/')}}"><img src="{{ url('/')}}/public/comingsoon/images/logo.svg" alt="" class="img-fluid"></a>
                    <div id="sticky-anchor"></div>
                    <div class="topNav" id="top-menu">
                        <ul class="navbar-nav navbar-main">
                            <li class="nav-item">
                                <a class="nav-link" href="#welcome">Welcome</a>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link" href="#aboutus">About Us</a>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link" href="#jobs">Jobs</a>
                            </li>                           
                        </ul>
                    </div>
                </div>
            </nav>
        </header><!--//Header-->
        <figure class="banner banner-landing" id="welcome">
            <div class="container-fluid">
                <div class="row align-items-md-center align-items-xl-end">
                    <div class="col-md-6 col-xl-5">
                        <div class="bannerContent">
                            <h2>Welcome to <span class="mobBlock">Select Task</span></h2>
                            <p>We connect customers to repair and maintenance professionals in New York City – like plumbers, electricians, painters, and general contractors.</p>
                            <div class="bannerDiffText">We’re still in the development phase and preparing for launch, but wanted to tell you a bit more about us and why you should sign up to be a Select Task pro!</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-7">
                        <p class="bannerImg-avtar text-center"><img src="{{ url('/')}}/public/comingsoon/images/banner-pic.svg" alt="" ></p></div>
                </div>
            </div>
        </figure><!--//Banner-->

        <section class="section videoWidget">
            <div class="container">
                <div class="videosection mx-auto">
                    <div class="videoembed">
                        <div class="embed-responsive embed-responsive-16by9">
                            <video id="sample_video" class="embed-responsive-item" controls poster="{{ url('/')}}/public/comingsoon/images/video-image.jpg"> 
                                <source src="{{ url('/')}}/public/comingsoon/images/landing-video.mp4" type="video/mp4"> 
                            </video> 
                          </div>
                    </div>
                    <div class="cover">
                        <img src="{{ url('/')}}/public/comingsoon/images/video-image.jpg" class="img-fluid" alt="">
                        <div class="play-btn">
                            <button onclick="playVideo()" id="playbtn"> 
                                <img src="{{ url('/')}}/public/comingsoon/images/play-btn-videoWt.svg" class="img-fluid" alt="">
                            </button> 
                        </div>
                    </div>
                </div>
                <p class="actionBtn"><a href="{{ route('sign-up')}}" class="btn btn-primary btnLg mw-321">Sign Up</a></p>
            </div>
        </section><!--//Video-->

        <section class="section comimgSoon">
            <div class="container">
                <div class="title text-center">
                    <h2>Coming Soon</h2>
                    <div class="counter">
                        <ul>
                          <li><span id="days"></span>days</li>
                          <li><span id="hours"></span>hours</li>
                          <li><span id="minutes"></span>minutes</li>
                          <li><span id="seconds"></span>seconds</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section><!--//Coming Soon-->
        <section class="section aboutUs" id="aboutus">
            <div class="container">
                <div class="title text-center">
                    <h2>About Select Task</h2>
                </div>
                <div class="cmsContent">
                    <p>Meet Select Task: a service connecting repair and maintenance professionals in New York City to new jobs and clients.</p>
                    <p><strong>Find customers in all five boroughs and keep 100% of your earnings.</strong> With Select Task, there are no sign-up fees, commission fees, or subscription fees.</p>
                    <p>Once we’re live, we’ll help you <strong>find new jobs and customers.</strong> Sign up today!</p>
                    <p class="actionBtn text-center"><a href="{{ route('sign-up')}}" class="btn btn-green btnLg mw-380">Apply Now</a></p>
                </div>
            </div>
        </section><!--//About Select Task-->

         <!--Service Categories-->
        <section class="section servicesSection" id="jobs">
            <div class="container">
                <div class="title text-center">
                    <h2 class="wow bounceInDown" data-wow-delay="0.1s">Available Job Opportunities In New York City</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-3 col-sm-6 services-widget">
                       <a href="{{ route('handyman')}}">                       
					   <div class="borderedframe">
                            <p class="servicePic position-relative"><img src="{{ url('/')}}/public/comingsoon/images/handymen.jpg" alt=""></p>
                            <div class="serviceText">
                                <h5>Handyman</h5>
                            </div>
                        </div>
						</a>
                    </div>
                    <div class="col-md-3 col-sm-6 services-widget">
                        <a href="{{ route('painting')}}">
						<div class="borderedframe">
                            <p class="servicePic position-relative"><img src="{{ url('/')}}/public/comingsoon/images/painting.jpg" alt=""></p>
                            <div class="serviceText">
                                <h5>Painting</h5>
                            </div>
                        </div>
						</a>
                    </div>
                    <div class="col-md-3 col-sm-6 services-widget">
                        <a href="{{ route('plumbing')}}">
						<div class="borderedframe">
                            <p class="servicePic position-relative"><img src="{{ url('/')}}/public/comingsoon/images/plumbing.jpg" alt=""></p>
                            <div class="serviceText">
                                <h5>Plumbing</h5>
                            </div>
                        </div>
						</a>
                    </div>
                    <div class="col-md-3 col-sm-6 services-widget">
                        <a href="{{ route('electrical')}}">
						<div class="borderedframe">
                            <p class="servicePic position-relative"><img src="{{ url('/')}}/public/comingsoon/images/electrical.jpg" alt=""></p>
                            <div class="serviceText">
                                <h5>Electrician</h5>
                            </div>
                        </div>
						</a>
                    </div>
                    <div class="col-md-3 col-sm-6 services-widget">
                      <a href="{{ route('general-contracting')}}">                       
					   <div class="borderedframe">
                            <p class="servicePic position-relative"><img src="{{ url('/')}}/public/comingsoon/images/general-contracting.jpg" alt=""></p>
                            <div class="serviceText">
                                <h5>General Contractor</h5>
                            </div>
                        </div>
						</a>
                    </div>
                    <div class="col-md-3 col-sm-6 services-widget">
                        <a href="{{ route('roofing')}}">
						<div class="borderedframe">
                            <p class="servicePic position-relative"><img src="{{ url('/')}}/public/comingsoon/images/roofing.jpg" alt=""></p>
                            <div class="serviceText">
                                <h5>Roofing</h5>
                            </div>
                        </div>
						</a>
                    </div>
                    <div class="col-md-3 col-sm-6 services-widget">
                    <a href="{{ route('hvac-technician')}}">                       
					   <div class="borderedframe">
                            <p class="servicePic position-relative"><img src="{{ url('/')}}/public/comingsoon/images/hvac-technician.jpg" alt=""></p>
                            <div class="serviceText">
                                <h5>HVAC Contractor</h5>
                            </div>
                        </div>
						</a>
                    </div>
                    <div class="col-md-3 col-sm-6 services-widget">
                        <a href="{{ route('carpentry')}}">
						<div class="borderedframe">
                            <p class="servicePic position-relative"><img src="{{ url('/')}}/public/comingsoon/images/carpentry.jpg" alt=""></p>
                            <div class="serviceText">
                                <h5>Carpenter</h5>
                            </div>
                        </div>
						</a>
                    </div>
                </div>
            </div>
        </section><!-- //Service Categories-->

        <footer class="site-footer">
            <div class="container">
                <div class="footerContent">                   
                    <div class="footer-social d-inline-flex align-items-center">
                        <h5>Follow Us</h5>
                        <ul class="social-list"> 
                            <li><a href="https://twitter.com/SelectTask"> <i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>                   
                    <div class="copyright">© 2020 Select Task</div>
                </div>
            </div>
        </footer>
    </div>

<!-- jQuery CDN Link -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="{{ url('/')}}/public/comingsoon/js/custom.js"></script>
</body>
</html>