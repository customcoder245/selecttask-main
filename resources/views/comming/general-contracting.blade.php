<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Task</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('/')}}/public/comingsoon/images/favicon.png">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('/')}}/public/comingsoon/css/style.css">
</head>
<body>
    <div class="wrapper">
        <header class="site-header">
            <nav class="navbar justify-content-center">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ url('/')}}"><img src="{{ url('/')}}/public/comingsoon/images/logo.svg" alt="" class="img-fluid"></a>
                    <div id="sticky-anchor"></div>
                    <div class="topNav" id="top-menu">
                        <ul class="navbar-nav navbar-main">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/')}}#welcome">Welcome</a>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/')}}#aboutus">About Us</a>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/')}}#jobs">Jobs</a>
                            </li>                           
                        </ul>
                    </div>
                </div>
            </nav>
        </header><!--//Header-->
        <figure class="banner banner-inner banner-gc">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="bannerContent">
                            <span class="jobDetailsTitle">Job Details</span>
                            <h2>General Contractor Jobs <span class="mobBlock">in New York City</span></h2>
                            <p class="jobPosted">Posted on 26 Apr, 2021</p>
                        </div>
                    </div>
                </div>
            </div>
        </figure><!--//Banner-->
       
        <section class="section jobDetailsWidget">
            <div class="container">
               <div class="row">
                   <div class="jobDetailsLeft">
                       <div class="detailsRow">
                           <h3>Job Locations</h3>
                           <p class="job-locations"><i class="fas fa-map-marker-alt"></i> Brooklyn NY, Bronx NY, Manhattan NY, Queens NY, or Staten Island NY</p>
                       </div><!--//Job Locations-->

                       <div class="detailsRow">
                            <h3>Salary</h3>
                            <div class="detailsRowContent">
                                <p>A general contractor typically charges a markup of <strong>10%-25%</strong> of the total cost of the project.</p>
                            </div>                        
                        </div><!--//Salary-->

                        <div class="detailsRow">
                            <h3>Job Description</h3>
                            <div class="detailsRowContent">
                                <h4>Qualifications:</h4>
                                <ul class="bulletedlist">
                                    <li>Skilled worker with experience directing or overseeing large residential and commercial construction projects</li>
                                    <li>Relevant certifications and previous job experience</li>
                                </ul>
                            </div> 
                            <div class="detailsRowContent">
                                <h4>Job Requirements:</h4>
                                <ul class="bulletedlist">
                                    <li>Projects may obtaining materials needed for a project, hiring and managing subcontractors, overseeing the project timeline, cash flow, payments, and quality, keeping project administrative records, and ensuring safety measures are upheld at all times</li>
                                </ul>
                            </div>   
                            <div class="detailsRowContent">
                                <h4>Benefits:</h4>
                                <ul class="bulletedlist">
                                    <li>Work directly with the client to set project timeline, hours, and schedule</li>
                                    <li>Select Task pros keep 100% of their earnings</li>
                                </ul>
                            </div>    
                            <div class="detailsRowContent">
                                <p><span class="semiBold textSecondary">Fees:</span> With Select Task, there are no sign-up fees, commission fees, or subscription fees. We’ll help compile jobs that are relevant to your skillset, and you’ll choose which jobs you want to apply for. Only pay for the leads you want.</p>
                            </div>
                            <div class="detailsRowContent">
                                <p class="specialText"><span class="semiBold">NOTE:</span> We’re still in development and are working towards launching Select Task after the summer. We’ll keep you posted on any updates as we make progress. We can’t wait to have you as a part of the Select Task team!</p>
                            </div>
                        </div><!--//Job Description-->

                   </div><!--//Left-->
                   <div class="jobDetailsRight">
                        <div id="sticky-anchor-fun"></div>
                        <div class="services-widget" id="sidescroller">
                            <div class="borderedframe">
                                <p class="servicePic position-relative"><img src="{{ url('/')}}/public/comingsoon/images/general-contracting.jpg" alt=""></p>
                                <div class="serviceText">
                                    <h5>General Contractor Jobs</h5>
                                    <a href="{{ route('sign-up')}}?cat=3" class="btn btn-green btn-green-shadow w-100 applyNow">Apply Now</a>
                                </div>
                            </div>
                        </div>
                   </div><!--//Right-->
               </div>
            </div>
        </section><!--//Job Details-->

         <!--Service Categories-->
        <section class="section servicesSection" id="scrollingBottomPoint">
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
                            <li><a href=""> <i class="fab fa-twitter"></i></a></li>
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