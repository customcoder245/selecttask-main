<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Task</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('/')}}/public/frontend/register/images/favicon.png">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('/')}}/public/frontend/register/css/style.css">
</head>
<body>
    <div class="wrapper">
        <header class="site-header">
            <nav class="navbar justify-content-center">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ url('/')}}"><img src="{{ url('/')}}/public/frontend/register/images/logo.svg" alt="" class="img-fluid"></a>
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
        <figure class="banner banner-inner banner-form">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="bannerContent">                          
                            <h2>Are you looking for more job opportunities in NYC?</h2>
                            <p class="bannerCon">Select Task will connect you with clients looking to hire repair and maintenance professionals like handymen, plumbers, electricians, and more. Sign up now to find out when we go live!</p>
                        </div>
                    </div>
                </div>
            </div>
        </figure><!--//Banner-->
       
        <section class="section signUpFormWidget">
            <div class="container">
                 <form method="post" action="{{ route('sign-up')}}" class="sign-up-form">
				 @csrf
				   
                     <div class="FormContent-section">
                        <h2 class="formTitle">Business Information</h2>
                        <div class="formContent-text">
                            <div class="row helpFormRow">
                                <div class="col-md-6 formGroup50">
                                    <label class="form-label">Full  Name <span class="req">*</span></label>
                                    <input type="text" name="name" id="first_name" class="form-control" placeholder="Full  Name" required>
                                </div> 
								<div class="col-md-6 formGroup50">
                                    <label class="form-label">Business Name</label>
                                    <input type="text" name="business_name" id="" class="form-control" placeholder="Business Name">
                                </div>
                                    <div class="col-md-6 formGroup50">
                                    <label class="form-label">Email Address <span class="req">*</span></label>
                                    <input type="email" name="email" id="" class="form-control sign-up-email" placeholder="Email Address" required>
                                     <p class="sign-up-email_error" style="color:red"></p>                               
							   </div>       
                                <div class="col-md-6 formGroup50">
                                    <label class="form-label">Phone Number <span class="req">*</span></label>
                                    <input type="text" name="phone" id="" class="form-control phone_number" placeholder="Phone Number" required>
                                </div>
                                 
                                 <div class="col-md-6 formGroup50">
                                    <label class="form-label"> Cell Number</label>
                                   <input type="text" name="cell_number" id="cell_number" class="form-control phone_number" placeholder="Cell Number">
                                </div> 								 
                               
									 
                                <div class="col-md-6 formGroup50">
                                    <label class="form-label"> Address</label>
                                   <input type="text" name="address" id="business_address_add2" class="form-control" placeholder="Address">
                                </div>        
                            </div>
                        </div>
                     </div><!--Business Information-->
                     <div class="FormContent-section">
                        <h2 class="formTitle">New York City Service Locations</h2>
                        <div class="formContent-text">
                            <p class="atleastreq text-right">At least 1 is *required</p>
                            <div class="row justify-content-center">
                                <div class="col-md-4 col-sm-6">
                                    <div class="locFrame-widget text-center d-block">
                                        <span class="locImageCol d-block"><img src="{{ url('/')}}/public/frontend/register/images/the-bronx.jpg" alt=""></span>
                                        <div class="customRadio checkBoxArea squareRadio">
                                            <div class="form-check form-check-inline position-static">
                                                <input class="form-check-input" type="checkbox" name="location[]" id="inlineRadio1" value="2" >
                                                <label class="form-check-label" for="inlineRadio1">The Bronx</label>
                                                <span></span>
                                            </div>
                                        </div>                                        
                                    </div>                                   
                                </div>
                                <div class="col-md-4 col-sm-6">                                   
                                    <div class="locFrame-widget text-center d-block">
                                        <span class="locImageCol d-block"><img src="{{ url('/')}}/public/frontend/register/images/brooklyn.jpg" alt=""></span>
                                        <div class="customRadio checkBoxArea squareRadio">
                                            <div class="form-check form-check-inline position-static">
                                                <input class="form-check-input" type="checkbox" name="location[]" id="inlineRadio2" value="1" >
                                                <label class="form-check-label" for="inlineRadio2">Brooklyn</label>
                                                <span></span>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">                                   
                                    <div class="locFrame-widget text-center d-block">
                                        <span class="locImageCol d-block"><img src="{{ url('/')}}/public/frontend/register/images/manhattan.jpg" alt=""></span>
                                        <div class="customRadio checkBoxArea squareRadio">
                                            <div class="form-check form-check-inline position-static">
                                                <input class="form-check-input" type="checkbox" name="location[]" id="inlineRadio3" value="3" >
                                                <label class="form-check-label" for="inlineRadio3">Manhattan</label>
                                                <span></span>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div> 
                                <div class="col-md-4 col-sm-6">                                   
                                    <div class="locFrame-widget text-center d-block">
                                        <span class="locImageCol d-block"><img src="{{ url('/')}}/public/frontend/register/images/queens.jpg" alt=""></span>
                                        <div class="customRadio checkBoxArea squareRadio">
                                            <div class="form-check form-check-inline position-static">
                                                <input class="form-check-input" type="checkbox" name="location[]" id="Queens" value="4" >
                                                <label class="form-check-label" for="Queens">Queens</label>
                                                <span></span>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>  
                                <div class="col-md-4 col-sm-6">                                   
                                    <div class="locFrame-widget text-center d-block">
                                        <span class="locImageCol d-block"><img src="{{ url('/')}}/public/frontend/register/images/staten-island.jpg" alt=""></span>
                                        <div class="customRadio checkBoxArea squareRadio">
                                            <div class="form-check form-check-inline position-static">
                                                <input class="form-check-input" type="checkbox" name="location[]" id="StatenIsland" value="5" >
                                                <label class="form-check-label" for="StatenIsland">Staten Island</label>
                                                <span></span>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>         
                            </div>
                        </div>
                     </div><!--New York City Service Locations-->

                     <div class="FormContent-section">
                        <h2 class="formTitle">Services</h2>
                        <div class="formContent-text">
                            <p class="atleastreq text-right">At least 1 is *required</p>
                            <div class="row justify-content-center formGroup50">
                                <div class="col-md-3 col-sm-6 services-widget">
                                    <div class="borderedframe position-relative">
                                        <p class="servicePic position-relative"><img src="{{ url('/')}}/public/frontend/register/images/handymen.jpg" alt=""></p>
                                        <div class="customRadio checkBoxArea squareRadio serviceText">
                                            <div class="form-check form-check position-static text-center pl-0">
                                                <input class="form-check-input" type="checkbox" name="services[]" id="inlineRadio5" value="2" <?php if(isset($_GET['cat']) && ($_GET['cat']==2)){ echo 'checked'; }?>>
                                                <label class="form-check-label" for="inlineRadio5">Handyman</label>
                                                <span></span>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 services-widget">
                                    <div class="borderedframe position-relative">
                                        <p class="servicePic position-relative"><img src="{{ url('/')}}/public/frontend/register/images/painting.jpg" alt=""></p>
                                        <div class="customRadio checkBoxArea squareRadio serviceText">
                                            <div class="form-check form-check position-static text-center pl-0">
                                                <input class="form-check-input" type="checkbox" name="services[]" id="Painting" value="4" <?php if(isset($_GET['cat']) && ($_GET['cat']==4)){ echo 'checked'; }?> >
                                                <label class="form-check-label" for="Painting">Painting</label>
                                                <span></span>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 services-widget">
                                    <div class="borderedframe position-relative">
                                        <p class="servicePic position-relative"><img src="{{ url('/')}}/public/frontend/register/images/plumbing.jpg" alt=""></p>
                                        <div class="customRadio checkBoxArea squareRadio serviceText">
                                            <div class="form-check form-check position-static text-center pl-0">
                                                <input class="form-check-input" type="checkbox" name="services[]" id="Plumbing" value="5" <?php if(isset($_GET['cat']) && ($_GET['cat']==5)){ echo 'checked'; }?>>
                                                <label class="form-check-label" for="Plumbing">Plumbing</label>
                                                <span></span>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 services-widget">
                                    <div class="borderedframe position-relative">
                                        <p class="servicePic position-relative"><img src="{{ url('/')}}/public/frontend/register/images/electrical.jpg" alt=""></p>
                                        <div class="customRadio checkBoxArea squareRadio serviceText">
                                            <div class="form-check form-check position-static text-center pl-0">
                                                <input class="form-check-input" type="checkbox" name="services[]" id="Electrician" value="7" <?php if(isset($_GET['cat']) && ($_GET['cat']==7)){ echo 'checked'; }?> >
                                                <label class="form-check-label" for="Electrician">Electrician</label>
                                                <span></span>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 services-widget">
                                    <div class="borderedframe position-relative">
                                        <p class="servicePic position-relative"><img src="{{ url('/')}}/public/frontend/register/images/general-contracting.jpg" alt=""></p>
                                        <div class="customRadio checkBoxArea squareRadio serviceText">
                                            <div class="form-check form-check position-static text-center pl-0">
                                                <input class="form-check-input" type="checkbox" name="services[]" id="GeneralContractor" value="3" <?php if(isset($_GET['cat']) && ($_GET['cat']==3)){ echo 'checked'; }?> >
                                                <label class="form-check-label" for="GeneralContractor">General Contractor</label>
                                                <span></span>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 services-widget">
                                    <div class="borderedframe position-relative">
                                        <p class="servicePic position-relative"><img src="{{ url('/')}}/public/frontend/register/images/roofing.jpg" alt=""></p>
                                        <div class="customRadio checkBoxArea squareRadio serviceText">
                                            <div class="form-check form-check position-static text-center pl-0">
                                                <input class="form-check-input" type="checkbox" name="services[]" id="Roofing" value="6" <?php if(isset($_GET['cat']) && ($_GET['cat']==6)){ echo 'checked'; }?> >
                                                <label class="form-check-label" for="Roofing">Roofing</label>
                                                <span></span>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 services-widget">
                                    <div class="borderedframe position-relative">
                                        <p class="servicePic position-relative"><img src="{{ url('/')}}/public/frontend/register/images/hvac-technician.jpg" alt=""></p>
                                        <div class="customRadio checkBoxArea squareRadio serviceText">
                                            <div class="form-check form-check position-static text-center pl-0">
                                                <input class="form-check-input" type="checkbox" name="services[]" id="HVACContractor" value="1" <?php if(isset($_GET['cat']) && ($_GET['cat']==1)){ echo 'checked'; }?>>
                                                <label class="form-check-label" for="HVACContractor">HVAC Contractor</label>
                                                <span></span>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 services-widget">
                                    <div class="borderedframe position-relative">
                                        <p class="servicePic position-relative"><img src="{{ url('/')}}/public/frontend/register/images/carpentry.jpg" alt=""></p>
                                        <div class="customRadio checkBoxArea squareRadio serviceText">
                                            <div class="form-check form-check position-static text-center pl-0">
                                                <input class="form-check-input" type="checkbox" name="services[]" id="Carpenter" value="8" <?php if(isset($_GET['cat']) && ($_GET['cat']==8)){ echo 'checked'; }?>>
                                                <label class="form-check-label" for="Carpenter">Carpenter</label>
                                                <span></span>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                       
                            </div>
                            <div class="row helpFormRow servicesOther"> 
                                <div class="col-md-6 formGroup50">
                                    <label class="form-label">Other</label>
                                    <input type="text" name="other_info" class="form-control">                        
                                </div>
                            </div>
                        </div>
                     </div><!--Services-->
                     <p class="fullWBtn text-center"><button type="submit" class="btn btn-primary btn-primary-shadow btnLg mw">Submit</button></p>
                 </form>
            </div>
        </section><!--//Form Signup-->

        <section class="section noFees">
            <div class="container">
                <div class="nofeesWidget">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="feeBox">
                                <div class="icon">
                                    <img src="{{ url('/')}}/public/frontend/register/images/no-signup-fee.svg" alt="">
                                </div>
                                <div class="feeBoxContent">
                                    <h3 class="mb-0">No Sign-up Fees</h3>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-md-4">
                            <div class="feeBox">
                                <div class="icon">
                                    <img src="{{ url('/')}}/public/frontend/register/images/no-commission-fees.svg" alt="">
                                </div>
                                <div class="feeBoxContent">
                                    <h3 class="mb-0">No Commission Fees</h3>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-md-4">
                            <div class="feeBox">
                                <div class="icon">
                                    <img src="{{ url('/')}}/public/frontend/register/images/no-subscription-fees.svg" alt="">
                                </div>
                                <div class="feeBoxContent">
                                    <h3 class="mb-0">No Subscription Fees</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </section><!--Fee Section-->

        <section class="calltoaction">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center">
                    <div class="text">
                        <h2>Feedback/Suggestions</h2>
                    </div>
                    <div class="button ml-auto">
                        <a href="mailto:support@selecttask.com" class="btn btn-primary btn-primary-shadow btnLg">Give Feedback</a>
                    </div>
                </div>
            </div>
        </section><!--CTA-->

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
   <!--Delete Notification Modal -->
<div class="modal fade notiModal modalSignUpSM" id="invalidlocation" tabindex="-1" role="dialog" aria-labelledby="deleteRowModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">       
        <div class="modal-body p-0">
            <div class="signUpContent text-center">
                <!-- <span class="deleteIcon centereditem mx-auto"><img src="{{ url('/public/user/assets/images/i.svg')}}" alt=""></span> -->
                <span class="signUpIcon centereditem mx-auto sadIcon"><i class="far fa-frown-open"></i></span>
                <h4>Oops!</h4>
                <p class="notiMessage f-14 pb-2">Add Your Service location in NYC only.</p>
                <p class="popupBTns mt-4">
                    
                    <a href="javascript:void(0)" class="btn btn-primary" data-dismiss="modal" aria-label="Close">OK</a>
                </p>
            </div>
        </div>        
      </div>
    </div>
  </div>
  
  <div class="modal fade notiModal modalSignUpSM" id="service_location_id" tabindex="-1" role="dialog" aria-labelledby="deleteRowModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">       
        <div class="modal-body p-0">
            <div class="signUpContent text-center">
                <!-- <span class="deleteIcon centereditem mx-auto"><img src="{{ url('/public/user/assets/images/i.svg')}}" alt=""></span> -->
                <span class="signUpIcon centereditem mx-auto sadIcon"><i class="far fa-frown-open"></i></span>
                
                <p class="notiMessage f-14 pb-2 services_loc_text"></p>
                <p class="popupBTns mt-4">
                    
                    <a href="javascript:void(0)" class="btn btn-primary" data-dismiss="modal" aria-label="Close">OK</a>
                </p>
            </div>
        </div>        
      </div>
    </div>
  </div>
  
  
  <div class="modal fade notiModal modalSignUpSM" id="sign-email_popup" tabindex="-1" role="dialog" aria-labelledby="deleteRowModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">       
        <div class="modal-body p-0">
            <div class="signUpContent text-center">
                <!-- <span class="deleteIcon centereditem mx-auto"><img src="{{ url('/public/user/assets/images/i.svg')}}" alt=""></span> -->
                <span class="signUpIcon centereditem mx-auto sadIcon"><i class="far fa-frown-open"></i></span>
                
                <p class="notiMessage f-14 pb-2 email_popup_text"></p>
                <p class="popupBTns mt-4">
                    
                    <a href="javascript:void(0)" class="btn btn-primary" data-dismiss="modal" aria-label="Close">OK</a>
                </p>
            </div>
        </div>        
      </div>
    </div>
  </div>
  
  
  
    <div class="modal fade notiModal modalSignUpSM" id="sign_up_success" tabindex="-1" role="dialog" aria-labelledby="deleteRowModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">       
        <div class="modal-body p-0">
            <div class="signUpContent text-center">
                <!-- <span class="deleteIcon centereditem mx-auto"><img src="{{ url('/public/user/assets/images/i.svg')}}" alt=""></span> -->
                <div class="successIcons"><span class="signUpIcon centereditem mx-auto signUpSuccess"><img src="{{ url('/')}}/public/frontend/register/images/tickVector.svg" alt=""></span>
                <div class="title text-center">
                    <h2>Success!</h2>
                </div>
            </div>
                
                <p class="notiMessage">Congrats on taking the first step to becoming a Select Task pro! We’re still preparing for launch and are aiming to be live after the summer. We’ll keep you posted on any updates as we get closer to our launch date. </p>
                <p class="notiMessage mt-4">We’re thrilled to welcome you to the Select Task team!</p>
                <p class="popupBTns mt-5">                    
                    <a href="{{ url('/')}}" class="btn btn-primary btn-sm" >OK</a>
                </p>
            </div>
        </div>        
      </div>
    </div>
  </div>
  
  
  
  
<!-- jQuery CDN Link -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA2UgkEpB0bxgVB_YZNb1bPbOkxerHhS4g&libraries=places"></script>
<script src="{{ url('public/user/assets/js/jquery-input-mask-phone-number.js')}}"></script>
<script src="{{ url('/')}}/public/frontend/register/js/custom.js"></script>
</body>
</html>