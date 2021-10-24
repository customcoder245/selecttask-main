   <!-- Footer Section -->
   
   
    <footer class="site-footer text-opensans">
	
	@if((Request::segment(1)!='login') && (Request::segment(1)!='password'))
	   @include('frontend.layout.footer-block')
   @else
        <div class="container">           

        <div class="d-flex flex-wrap footer-bottom align-items-center">           
            <div class="footerlinks">
                <ul>
                    <li><a href="{{ url('/')}}/help-support">Help</a></li>
                    <li><a href="{{ url('/')}}/terms">Terms</a></li>
                    <li><a href="{{ url('/')}}/privacy">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="copyright ml-auto">
                &copy; 2020 Select Task
            </div>
        </div>
        </div>
		@endif
    </footer>
    <!-- //Footer Section -->
</div>

<!--Popup Validation-->
<div class="modal fade" id="taskPostModal" tabindex="-1" role="dialog" aria-labelledby="taskPostModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
       
        <div class="modal-body p-0">
            <div class="validationContent text-center">
                <p class="PostStepIcon centereditem m-auto">
                    <svg width="42" height="47" class="icon">
                        <use xlink:href="#post-step-icon" ></use>
                    </svg>
                </p>
                <h3>Please select valid address</h3>
                <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" aria-label="Close">OK</button>
            </div>            
        </div>
      
      </div>
    </div>
  </div>
  
  
  <div class="modal fade" id="taskPostspmodel" tabindex="-1" role="dialog" aria-labelledby="taskPostModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
       
        <div class="modal-body p-0">
            <div class="validationContent text-center">
                <p class="PostStepIcon centereditem m-auto">
                    <svg width="42" height="47" class="icon">
                        <use xlink:href="#post-step-icon" ></use>
                    </svg>
                </p>
                <h3>Sorry, you are logged in as a Service Provider to post a task you will need to log out"</h3>
                <button type="button" class="btn btn-primary btn-sm continue_sp" data-dismiss="modal" aria-label="Close">Continue</button>
            </div>            
        </div>
      
      </div>
    </div>
  </div>


 <div class="modal fade" id="help_customer_popup" >
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
       
        <div class="modal-body p-0">
            <div class="validationContent text-center">
                <p class="PostStepIcon centereditem m-auto">
                    <svg width="42" height="47" class="icon">
                        <use xlink:href="#post-step-icon" ></use>
                    </svg>
                </p>
                <h3>Thanks for submitting your request, we will reach out to you soon.</h3>
                <button type="button" class="btn btn-primary btn-sm " data-dismiss="modal" aria-label="Close">Close</button>
			   </div>            
        </div>
      
      </div>
    </div>
  </div>



<div class="modal fade" id="postTaskModal" tabindex="-1" role="dialog" aria-labelledby="postTaskModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
       
        <div class="modal-body p-0">
            <div class="validationContent text-center">
                <p class="PostStepIcon centereditem m-auto">
                    <svg width="43" height="43" class="icon">
                        <use xlink:href="#service-step-icon"></use>
                    </svg>
                </p>
                <h3>Please select a category</h3>
                <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" aria-label="Close">OK</button>
            </div>            
        </div>
      
      </div>
    </div>
  </div>
  
  
  <div class="modal fade" id="taskAddressModal" tabindex="-1" role="dialog" aria-labelledby="taskAddressModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
       
        <div class="modal-body p-0">
            <div class="validationContent text-center">
                <p class="PostStepIcon centereditem m-auto">
                    <svg width="31" height="44" class="icon">
                        <use xlink:href="#address-step-icon" ></use>
                    </svg>
                </p>
                <h3>Please select valid address</h3>
                <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" aria-label="Close">OK</button>
            </div>            
        </div>
      
      </div>
    </div>
  </div>
  
  
  <!--Popup Validation-->
<div class="modal fade modal600 notiModal" id="postTaskloginModal" tabindex="-1" role="dialog" aria-labelledby="postTaskloginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Post a Task</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <div class="modal-body">
            <div class="buttonstyleRadios">
                <div class="form-check d-inline-block my-3">
                    <input class="form-check-input divFun" type="radio" name="inlineRadioOptions" id="Login_4" value="loginoption" >
                    <label class="form-check-label" for="Login_4"><span>Log In</span></label>
                </div>
                <div class="form-check d-inline-block my-3">
                    <input class="form-check-input divFun" type="radio" name="inlineRadioOptions" id="signUp_4" value="signUpoption" checked>
                    <label class="form-check-label" for="signUp_4"><span>Sign Up</span></label>
                </div>
            </div>  
            <div id="loginFrame" class="loginoption selectt " style="display: none;">
                <form action="{{ route('frontend-login')}}" method="POST" class="custom_login">
				<div class="wtFrame form-group loginFramePad">
                    
					 
					@csrf 
					<input type="hidden" name="user_type" value="customer">
                        <div class="form-group tt">
                            <div class="position-relative iconInput">
                            <input type="email" name="email" id="" class="form-control semiBold" placeholder="Email address">
                            <span class="inputIcon"><img src="{{ url('public/frontend')}}/assets/images/login/icon-envelop.svg" alt=""></span>
                            </div>                         
                        </div>
                        <div class="form-group">
                        <div class="position-relative iconInput">
                            <input type="password" name="password" id="" class="form-control semiBold" placeholder="Password">
                            <span class="inputIcon"><img src="{{ url('public/frontend')}}/assets/images/login/icon-lock.svg" alt=""></span>
                        </div>                         
                    </div>
                    <div class="d-flex justify-content-between align-items-center text-opensans text-center text-sm-left m400-block">
                        <div class="customcheck customRadio squareRadio my-3">
                            <div class="form-check pl-0 text-primary">
                                <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="rememberMe" value="option1">
                                <label class="form-check-label" for="rememberMe">Remember Me</label>
                            </div>
                        </div>
                        <a href="#" class="forgotPassword my-3 d-inline-block">Forgot Password?</a>
                    </div>
                    <p class="pt-md-3 btnLogin">
					
					<div class="loader_image" style="display:none;">
		                <img src="{{ url('/')}}/public/user/assets/images/loader.gif"  >
		             </div>
					<button type="submit" class="btn btn-green btn-green-shadow btnLg w-100">Log In</button></p>
                    <p class="login_message"></p>
                </div>
				</form>
                <!--div class="wtFrame otherLogin">
                    <div class="loginFramePad">
                        <p class="pTopText">By clicking Continue with Facebook, Google, or Apple, you agree to the Terms of Use and Privacy Policy.</p>
                        <ul class="socialBtns">
                            <li><a href="{{ route('auth/facebook')}}" class="social-btn fbBTn w-100"><span>Log in with Facebook</span></a></li>
                            <li><a href="javascript:void(0)" data-toggle="modal" data-target="#googlesignupModal" class="social-btn googleBTn w-100"><span>Log in with Google</span></a></li>
                        </ul>
                    </div>                  
                </div-->
            </div><!--//Login Content-->
            <div id="signUpFrame" class="signUpoption selectt active" style="display:block">
			<form method="post" action="{{ route('/register')}}" class="custom_register">
			@csrf
			<p class="register_message"></p>
                <div class="wtFrame form-group loginFramePad">
                    <div class="popupCustomTitle text-center">
                        <h2 class="modalTitle" id="signupModalLabel">Create your free account</h2>
                        <p class="subTitlePopup">Sign up to start hearing from service providers.</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">	
                      <input type="hidden" name="user_type" value="customer">						
                            <!--select name="user_type" class="form-control semiBold" required="" read>
                             <option value="">Select User Type</option>
                             <option value="customer">Customer</option>
                             <option value="service_provider">Services Provider</option>
                            </select-->
                           </div>
                        <div class="col-sm-6 form-group">
                            <input type="text" name="first_name" id="" class="form-control semiBold" placeholder="First Name" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <input type="text" name="last_name" id="" class="form-control semiBold" placeholder="Last Name" required>
                        </div>
                        <div class="col-sm-12 form-group">
                            <input type="email" name="email" id="" class="form-control semiBold" placeholder="Email" required>
                        </div>
                        <div class="col-sm-12 form-group">
                            <input type="text" name="phone" id="r_phone" class="form-control semiBold" placeholder="Phone" required>
                        </div>
                    </div>
                    <div class="customcheck customRadio squareRadio my-3">
                        <div class="form-check pl-0 pb-2">
                            <input class="form-check-input" type="checkbox" name="enable_message" id="enableTextMessage" value="1">
                            <label class="form-check-label" for="enableTextMessage"><span class="enableTxt">Enable text messages (optional)</span>
                                <p class="enableTextMessage">By clicking this box You consent to receive messages from Select Task Inc to provide updates
                          on your account. Message frequency depends on your account activity.
                          You may opt-out by texting "STOP".  Message and data rates may  apply.</p>
                            </label>
                        </div>                    
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="" class="form-control semiBold" placeholder="Choose Password" required>
                    </div>
                    <div class="customcheck customRadio squareRadio my-md-4 my-3">
                        <div class="form-check pl-0">
                            <input class="form-check-input" type="checkbox" name="term_policy" id="agreeTextCheck" value="1">
                            <label class="form-check-label" for="agreeTextCheck">By checking this box you agree to Select Task Inc <a href="{{ url('/')}}/terms" class="underlinelink text-primary">Terms of Use</a> and <a href="{{ url('/')}}/privacy" class="underlinelink text-primary">Privacy Policy</a>.
                            </label>
                        </div>                    
                    </div>
                    <p class="pt-md-3 btnLogin">
					<div class="loader_image" style="display:none;">
		                <img src="{{ url('/')}}/public/user/assets/images/loader.gif"  >
		             </div>
					
					<button type="submit" class="btn btn-green btn-green-shadow btnLg w-100 register_now" disabled>Sign Up</button></p>
                </div>
				</form>
                <!--div class="wtFrame otherLogin">
                    <div class="loginFramePad">
                       <p class="pTopText">By clicking Continue with Facebook, Google, or Apple, you agree to the Terms of Use and Privacy Policy.</p>
                       <ul class="socialBtns">
                           <li><a href="{{ route('auth/facebook')}}" class="social-btn fbBTn w-100"><span>Sign Up with Facebook</span></a></li>
                           <li><a href="javascript:void(0)" data-toggle="modal" data-target="#googlesignupModalcustomer" class="social-btn googleBTn w-100"><span>Sign Up with Google</span></a></li>
                       </ul>
                   </div>
                   
                </div-->
            </div><!--//Sign Up Content-->
        </div>
      
      </div>
    </div>
  </div>
  
  
  
  
  
  
  <div class="modal fade modal600 notiModal" id="getstartmodel" tabindex="-1" role="dialog" aria-labelledby="postTaskloginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Get Started</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <div class="modal-body">
            <div class="buttonstyleRadios">
                <div class="form-check d-inline-block my-3">
                    <input class="form-check-input divFun" type="radio" name="inlineRadioOptions" id="Login3" value="loginoption" >
                    <label class="form-check-label" for="Login3"><span>Log In</span></label>
                </div>
                <div class="form-check d-inline-block my-3">
                    <input class="form-check-input divFun" type="radio" name="inlineRadioOptions" id="signUp3" value="signUpoption" checked>
                    <label class="form-check-label" for="signUp3"><span>Sign Up</span></label>
                </div>
            </div>  
            <div id="loginFrame" class="loginoption selectt " style="display: none;">
                <form action="{{ route('frontend-login')}}" method="POST" class="service_provider_login">
				<div class="wtFrame form-group loginFramePad">
                    
					 
					@csrf 
					<input type="hidden" name="user_type" value="service_provider">
                        <div class="form-group tt">
                            <div class="position-relative iconInput">
                            <input type="email" name="email" id="" class="form-control semiBold" placeholder="Email address">
                            <span class="inputIcon"><img src="{{ url('public/frontend')}}/assets/images/login/icon-envelop.svg" alt=""></span>
                            </div>                         
                        </div>
                        <div class="form-group">
                        <div class="position-relative iconInput">
                            <input type="password" name="password" id="" class="form-control semiBold" placeholder="Password">
                            <span class="inputIcon"><img src="{{ url('public/frontend')}}/assets/images/login/icon-lock.svg" alt=""></span>
                        </div>                         
                    </div>
                    <div class="d-flex justify-content-between align-items-center text-opensans text-center text-sm-left m400-block">
                        <div class="customcheck customRadio squareRadio my-3">
                            <div class="form-check pl-0 text-primary">
                                <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="rememberMe" value="option1">
                                <label class="form-check-label" for="rememberMe">Remember Me</label>
                            </div>
                        </div>
                        <a href="#" class="forgotPassword my-3 d-inline-block">Forgot Password?</a>
                    </div>
                    <p class="pt-md-3 btnLogin">
					<div class="loader_image" style="display:none;">
		                <img src="{{ url('/')}}/public/user/assets/images/loader.gif"  >
		             </div>
					<button type="submit" class="btn btn-green btn-green-shadow btnLg w-100">Log In</button></p>
                    <p class="login_message"></p>
                </div>
				</form>
                <!--div class="wtFrame otherLogin">
                    <div class="loginFramePad">
                        <p class="pTopText">By clicking Continue with Facebook, Google, or Apple, you agree to the Terms of Use and Privacy Policy.</p>
                        <ul class="socialBtns">
                            <li><a href="{{ route('auth/facebook')}}"  class="social-btn fbBTn w-100"><span>Log in with Facebook</span></a></li>
                            <li><a href="{{ route('google/redirect')}}" data-toggle="modal" data-target="#googlesignupModal" class="social-btn googleBTn w-100"><span>Log in with Google</span></a></li>
                        </ul>
                    </div>                  
                </div-->
            </div><!--//Login Content-->
            <div id="signUpFrame" class="signUpoption selectt active" style="display:block">
			<form method="post" action="{{ route('/register')}}" class="service_provider_register">
			@csrf
			<p class="register_message"></p>
                <div class="wtFrame form-group loginFramePad">
                    <div class="popupCustomTitle text-center">
                        <h2 class="modalTitle" id="signupModalLabel">Create your free account</h2>
                        <p class="subTitlePopup">Sign up to start hearing from Customers.</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">	
                      <input type="hidden" name="user_type" value="service_provider">						
                            <!--select name="user_type" class="form-control semiBold" required="" read>
                             <option value="">Select User Type</option>
                             <option value="customer">Customer</option>
                             <option value="service_provider">Services Provider</option>
                            </select-->
                           </div>
                        <div class="col-sm-6 form-group">
                            <input type="text" name="first_name" id="" class="form-control semiBold" placeholder="First Name" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <input type="text" name="last_name" id="" class="form-control semiBold" placeholder="Last Name" required>
                        </div>
                        <div class="col-sm-12 form-group">
                            <input type="email" name="email" id="" class="form-control semiBold" placeholder="Email" required>
                        </div>
                        <div class="col-sm-12 form-group">
                            <input type="text" name="phone" id="sp_phone" class="form-control semiBold" placeholder="Phone" required>
                        </div>
                    </div>
                    <div class="customcheck customRadio squareRadio my-3">
                        <div class="form-check pl-0 pb-2">
                            <input class="form-check-input" type="checkbox" name="enable_message" id="enableTextMessagesp" value="1">
                            <label class="form-check-label" for="enableTextMessagesp"><span class="enableTxt">Enable text messages (optional)</span>
                                <p class="enableTextMessage">By clicking this box You consent to receive messages from Select Task Inc to provide updates
                          on your account. Message frequency depends on your account activity.
                          You may opt-out by texting "STOP".  Message and data rates may  apply.</p>
                            </label>
                        </div>                    
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="" class="form-control semiBold" placeholder="Choose Password" required>
                    </div>
                    <div class="customcheck customRadio squareRadio my-md-4 my-3">
                        <div class="form-check pl-0">
                            <input class="form-check-input" type="checkbox" name="term_policy" id="agreeTextChecksp" value="1">
                            <label class="form-check-label" for="agreeTextChecksp">By checking this box you agree to Select Task Inc <a href="{{ url('/')}}/terms" class="underlinelink text-primary">Terms of Use</a> and <a href="{{ url('/')}}/privacy" class="underlinelink text-primary">Privacy Policy</a>.
                            </label>
                        </div>                    
                    </div>
                    <p class="pt-md-3 btnLogin">
					<div class="loader_image" style="display:none;">
		                <img src="{{ url('/')}}/public/user/assets/images/loader.gif"  >
		             </div>
					
					<button type="submit" class="btn btn-green btn-green-shadow btnLg w-100 register_now" disabled>Sign Up</button></p>
                </div>
				</form>
                <!--div class="wtFrame otherLogin">
                    <div class="loginFramePad">
                       <p class="pTopText">By clicking Continue with Facebook, Google, or Apple, you agree to the Terms of Use and Privacy Policy.</p>
                       <ul class="socialBtns">
                           <li><a href="{{ route('auth/facebook')}}" class="social-btn fbBTn w-100"><span>Sign Up with Facebook</span></a></li>
                           <li><a href="javascript:void(0)" data-toggle="modal" data-target="#googlesignupModalsp"  class="social-btn googleBTn w-100"><span>Sign Up with Google</span></a></li>
                       </ul>
                   </div>
                   
                </div-->
            </div><!--//Sign Up Content-->
        </div>
      
      </div>
    </div>
  </div>
  
  
  <div class="modal fade" id="getstartmodelsp" tabindex="-1" role="dialog" aria-labelledby="taskPostModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
       
        <div class="modal-body p-0">
            <div class="validationContent text-center">
                <p class="PostStepIcon centereditem m-auto">
                    <svg width="42" height="47" class="icon">
                        <use xlink:href="#post-step-icon" ></use>
                    </svg>
                </p>
                <h3>You have already a Service Provider Account</h3>
                <a href="{{ route('provider-tasks-list')}}" class="btn btn-primary btn-sm continue_sp" >Dashboard </a>
            </div>            
        </div>
      
      </div>
    </div>
  </div>
  

<div class="modal fade" id="getstartmodelcustomer" tabindex="-1" role="dialog" aria-labelledby="taskPostModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
       
        <div class="modal-body p-0">
            <div class="validationContent text-center">
                <p class="PostStepIcon centereditem m-auto">
                    <svg width="42" height="47" class="icon">
                        <use xlink:href="#post-step-icon" ></use>
                    </svg>
                </p>
                <h3>Sorry, you are logged in as a customer, to Become a Pro you will need to log out</h3>
                
              <button type="button" class="btn btn-primary btn-sm continue_customer" data-dismiss="modal" aria-label="Close">continue</button>
			</div>            
        </div>
      
      </div>
    </div>
  </div>
  



<!-- Svg Icons -->
<svg xmlns="http://www.w3.org/2000/svg" style="display:none;">

    <symbol id="lock-icon" viewBox="0 0 384 512">
      <path id="Forma_1"  fill="currentColor" data-name="Forma 1" class="cls-1" d="M373.333,192h-32V149.333C341.333,66.99,274.344,0,192,0S42.667,66.99,42.667,149.333V192h-32A10.661,10.661,0,0,0,0,202.667V469.334A42.708,42.708,0,0,0,42.667,512H341.334A42.708,42.708,0,0,0,384,469.333V202.667A10.661,10.661,0,0,0,373.333,192Zm-149.4,222.823a10.669,10.669,0,0,1-10.6,11.844H170.667a10.669,10.669,0,0,1-10.6-11.844l6.729-60.51A42.2,42.2,0,0,1,149.334,320a42.667,42.667,0,0,1,85.334,0,42.2,42.2,0,0,1-17.458,34.313ZM277.333,192H106.667V149.333a85.333,85.333,0,0,1,170.666,0V192Z"/>
    </symbol>

    <symbol id="arrow-right-icon" viewBox="0 0 494.148 494.148">
	<g>
		<path d="M405.284,201.188L130.804,13.28C118.128,4.596,105.356,0,94.74,0C74.216,0,61.52,16.472,61.52,44.044v406.124
			c0,27.54,12.68,43.98,33.156,43.98c10.632,0,23.2-4.6,35.904-13.308l274.608-187.904c17.66-12.104,27.44-28.392,27.44-45.884
			C432.632,229.572,422.964,213.288,405.284,201.188z"  fill="currentColor" />
	</g> 
    </symbol>

    <symbol id="popular-handyman"  viewBox="0 0 22 33">
        <g>
            <path d="M0.380798 23.8356V31.6231H2.28435V23.8356C2.28378 23.0854 2.4539 22.3448 2.78182 21.6701C3.10975 20.9953 3.58688 20.4039 4.17711 19.9408V19.0165C3.09526 19.2771 2.13256 19.8941 1.44394 20.7683C0.75533 21.6424 0.380859 22.7228 0.380798 23.8356Z" fill="#D4E1F4"/>
<path d="M17.9117 18.6464C16.835 18.3784 15.7978 17.9714 14.8261 17.4357L13.9521 16.9552V17.8245L14.2528 17.9899V19.1664C14.2528 20.029 13.9102 20.8563 13.3002 21.4662C12.6902 22.0762 11.8629 22.4189 11.0003 22.4189C10.1377 22.4189 9.3104 22.0762 8.70043 21.4662C8.09046 20.8563 7.74779 20.029 7.74779 19.1664V18.0959L8.0587 17.9398V17.0876L7.05534 17.5914C6.11066 18.0567 5.11512 18.4108 4.08872 18.6464C2.92182 18.9235 1.88288 19.5869 1.14063 20.529C0.398374 21.4711 -0.00358798 22.6364 2.41333e-05 23.8358V31.6232C2.41333e-05 31.7242 0.0401347 31.821 0.111532 31.8924C0.182929 31.9638 0.279763 32.0039 0.380734 32.0039H21.6193C21.7202 32.0039 21.8171 31.9638 21.8885 31.8924C21.9599 31.821 22 31.7242 22 31.6232V23.8358C22.0037 22.6365 21.6018 21.4712 20.8596 20.5291C20.1174 19.587 19.0786 18.9236 17.9117 18.6464ZM10.6193 31.2425H4.55776V30.0794H10.6193V31.2425ZM10.6193 29.318H4.55776V28.5566H10.6193V29.318ZM10.6193 27.7952H4.55776V26.4627H10.6193V27.7952ZM10.6193 25.7012H4.55776V24.9398H10.6193V25.7012ZM10.6193 24.1784H4.55776V22.1907C4.55776 22.0897 4.51765 21.9929 4.44625 21.9215C4.37485 21.8501 4.27802 21.8099 4.17705 21.8099C4.07608 21.8099 3.97924 21.8501 3.90784 21.9215C3.83645 21.9929 3.79634 22.0897 3.79634 22.1907V31.2425H0.761444V23.8358C0.758569 22.8916 1.04904 21.9699 1.59271 21.198C2.13638 20.4261 2.9064 19.8422 3.79634 19.5269V20.6256C3.79634 20.7265 3.83645 20.8234 3.90784 20.8948C3.97924 20.9662 4.07608 21.0063 4.17705 21.0063C4.27802 21.0063 4.37485 20.9662 4.44625 20.8948C4.51765 20.8234 4.55776 20.7265 4.55776 20.6256V19.3131C5.39064 19.1038 6.20327 18.821 6.98605 18.4678V19.1664C6.98598 20.165 7.35822 21.1279 8.03007 21.8668C8.70192 22.6057 9.62511 23.0676 10.6193 23.1622V24.1784ZM17.4422 31.2425H11.3807V30.0794H17.4422V31.2425ZM17.4422 29.318H11.3807V28.5566H17.4422V29.318ZM17.4422 27.7952H11.3807V26.4627H17.4422V27.7952ZM17.4422 25.7012H11.3807V24.9398H17.4422V25.7012ZM17.4422 24.1784H11.3807V23.1618C12.3743 23.0659 13.2968 22.6037 13.9683 21.8652C14.6399 21.1267 15.0127 20.1646 15.014 19.1664V18.389C15.7915 18.7749 16.6048 19.0841 17.4422 19.3123V24.1784ZM21.2386 31.2425H18.2037V19.5269C19.0936 19.8422 19.8636 20.4261 20.4073 21.198C20.951 21.9699 21.2414 22.8916 21.2386 23.8358V31.2425Z" fill="currentColor"/>
<path d="M16.6377 8.94674C16.9338 8.94659 17.2178 8.82888 17.4272 8.61948C17.6366 8.41009 17.7543 8.12612 17.7545 7.82999C17.7542 7.59354 17.679 7.36327 17.5397 7.1722C17.4004 6.98114 17.2042 6.8391 16.9791 6.76648C16.9431 5.96541 16.7681 5.17669 16.4621 4.43552C16.116 3.62496 15.5905 2.90352 14.9251 2.32556V2.17391C14.9254 1.96529 14.868 1.76066 14.7592 1.58261C14.6505 1.40457 14.4947 1.26004 14.3089 1.16498C14.1232 1.06992 13.9149 1.02804 13.7068 1.04395C13.4988 1.05985 13.2993 1.13294 13.1302 1.25513C12.7763 1.12102 12.4105 1.02089 12.0377 0.956085C11.9495 0.754353 11.8044 0.582718 11.6201 0.462189C11.4359 0.341659 11.2205 0.277466 11.0003 0.277466C10.7801 0.277466 10.5647 0.341659 10.3804 0.462189C10.1962 0.582718 10.0511 0.754353 9.96285 0.956085C9.59023 1.02144 9.22461 1.1218 8.87085 1.25583C8.70179 1.13345 8.50219 1.06019 8.2941 1.04414C8.08602 1.02808 7.87754 1.06986 7.69171 1.16486C7.50588 1.25985 7.34993 1.40437 7.24108 1.58244C7.13223 1.76051 7.07472 1.96521 7.07491 2.17391V2.32943C6.41025 2.90729 5.88541 3.62847 5.53996 4.43863C5.23372 5.17853 5.05827 5.96598 5.02143 6.76591C4.79612 6.83831 4.59961 6.98035 4.46019 7.17158C4.32077 7.3628 4.24563 7.59334 4.24561 7.82999C4.24594 8.12607 4.36371 8.40992 4.57306 8.61928C4.78242 8.82864 5.06628 8.9464 5.36235 8.94674H5.4607C5.52969 9.26116 5.62408 9.56947 5.74294 9.86863L5.8871 10.2309C5.87574 10.2415 5.86368 10.2516 5.85277 10.2627C5.74359 10.3708 5.65702 10.4997 5.59812 10.6416C5.53922 10.7836 5.50916 10.9359 5.50969 11.0896C5.50997 11.3795 5.61779 11.6589 5.81227 11.8739C6.00675 12.0889 6.27407 12.224 6.56248 12.2533L6.84427 14.0529C6.98456 14.9551 7.41005 15.7887 8.05841 16.4315V18.8135C8.05842 18.9036 8.09039 18.9908 8.14864 19.0595C8.50007 19.4744 8.93765 19.8077 9.43093 20.0363C9.92422 20.2649 10.4614 20.3833 11.0051 20.3833C11.5488 20.3833 12.0859 20.2649 12.5792 20.0363C13.0725 19.8077 13.5101 19.4744 13.8615 19.0595C13.9198 18.9908 13.9518 18.9035 13.9518 18.8133V16.5989C14.6966 15.9371 15.188 15.0368 15.3419 14.0524L15.6236 12.2531C15.9121 12.2242 16.1796 12.0891 16.3741 11.8741C16.5686 11.6591 16.6764 11.3795 16.6764 11.0895C16.6757 10.9072 16.6325 10.7275 16.5504 10.5648C16.4682 10.402 16.3493 10.2606 16.2031 10.1517C16.3372 9.75889 16.439 9.35583 16.5076 8.94649L16.6377 8.94674ZM13.4201 2.17391C13.4199 2.08824 13.4493 2.00513 13.5034 1.9387C13.5114 1.92912 13.5197 1.91966 13.5281 1.91135C13.5801 1.85923 13.6464 1.82371 13.7186 1.80927C13.7908 1.79483 13.8656 1.80213 13.9337 1.83024C14.0017 1.85834 14.0599 1.906 14.1008 1.96717C14.1418 2.02835 14.1637 2.1003 14.1637 2.17391V3.72086C14.1635 3.81953 14.1242 3.91408 14.0544 3.98379C13.9845 4.05349 13.8899 4.09266 13.7913 4.09269H13.7763C13.6803 4.08905 13.5894 4.04823 13.523 3.97884C13.4565 3.90946 13.4196 3.81695 13.4201 3.72086V2.17391ZM10.6282 1.41249C10.6283 1.39375 10.6297 1.37505 10.6326 1.35653V1.35589C10.6471 1.26352 10.6959 1.18 10.7692 1.12198C10.8425 1.06396 10.9351 1.03571 11.0283 1.04285C11.1215 1.04999 11.2087 1.092 11.2723 1.1605C11.336 1.22901 11.3715 1.31898 11.3717 1.41249V3.72086C11.3715 3.81953 11.3322 3.91408 11.2624 3.98379C11.1926 4.05349 11.0979 4.09266 10.9993 4.09269H10.9842C10.8882 4.08904 10.7974 4.0482 10.7309 3.97882C10.6645 3.90944 10.6276 3.81694 10.6281 3.72086L10.6282 1.41249ZM7.83633 2.17391C7.83633 2.0753 7.87551 1.98072 7.94524 1.91099C8.01497 1.84126 8.10954 1.80209 8.20816 1.80209C8.30677 1.80209 8.40135 1.84126 8.47108 1.91099C8.54081 1.98072 8.57998 2.0753 8.57998 2.17391V3.72086C8.57978 3.81953 8.54046 3.91408 8.47063 3.98379C8.40081 4.05349 8.30619 4.09266 8.20752 4.09269H8.19255C8.09653 4.08905 8.00569 4.04823 7.93922 3.97884C7.87275 3.90946 7.83585 3.81695 7.83633 3.72086V2.17391ZM13.1904 18.669C12.9112 18.9696 12.5731 19.2093 12.1971 19.3733C11.8211 19.5372 11.4153 19.6219 11.0051 19.6219C10.5949 19.6219 10.1891 19.5372 9.81311 19.3733C9.4371 19.2093 9.09896 18.9696 8.81983 18.669V17.0366C8.90143 17.0874 8.98462 17.1355 9.06939 17.181C9.69205 17.5133 10.387 17.6871 11.0927 17.6871C11.7985 17.6871 12.4934 17.5133 13.1161 17.181C13.1415 17.1677 13.1656 17.1529 13.1904 17.1391V18.669ZM15.7949 11.3784C15.7573 11.4163 15.7125 11.4463 15.6632 11.4667C15.6139 11.4871 15.561 11.4975 15.5076 11.4972H15.297C15.2062 11.4972 15.1184 11.5297 15.0495 11.5887C14.9805 11.6477 14.9349 11.7294 14.9208 11.8191L14.5897 13.9343C14.4589 14.7677 14.0347 15.527 13.3936 16.0753C12.7525 16.6237 11.9366 16.925 11.093 16.925C10.2494 16.925 9.43353 16.6237 8.79242 16.0753C8.15132 15.527 7.72715 14.7677 7.59636 13.9343L7.26514 11.8188C7.2511 11.7291 7.20549 11.6474 7.13652 11.5884C7.06755 11.5294 6.97977 11.497 6.889 11.497H6.67834C6.57026 11.4968 6.46668 11.4537 6.39031 11.3772C6.31395 11.3007 6.27103 11.1971 6.27098 11.089C6.27081 11.0352 6.28139 10.9819 6.30209 10.9322C6.32279 10.8826 6.3532 10.8375 6.39154 10.7998C6.42576 10.7654 6.46603 10.7376 6.51032 10.7179C6.563 10.6939 6.62025 10.6815 6.67815 10.6816H6.88881C6.98978 10.6816 7.08661 10.6415 7.15801 10.5701C7.22941 10.4987 7.26952 10.4019 7.26952 10.3009V8.94674H14.9163V10.3014C14.9163 10.4024 14.9564 10.4992 15.0278 10.5706C15.0992 10.642 15.196 10.6821 15.297 10.6821H15.5076C15.5883 10.6822 15.6672 10.7062 15.7342 10.751C15.8013 10.7959 15.8535 10.8597 15.8842 10.9343C15.915 11.0089 15.9229 11.0909 15.907 11.17C15.8911 11.2492 15.8521 11.3218 15.7949 11.3787V11.3784ZM6.24313 8.94674H6.50829V9.73291L6.4503 9.58697C6.36749 9.37825 6.29829 9.1644 6.24313 8.94674ZM15.6777 9.21958V8.94674H15.7348C15.718 9.03817 15.6985 9.12904 15.6777 9.21971V9.21958ZM15.2849 8.18532H5.36235C5.29192 8.18538 5.22306 8.1645 5.16452 8.12534C5.10597 8.08618 5.06038 8.03051 5.03355 7.96539C5.00671 7.90027 4.99983 7.82864 5.01378 7.7596C5.02773 7.69056 5.06189 7.62723 5.11191 7.57764C5.14468 7.5446 5.1837 7.51842 5.2267 7.50063C5.2697 7.48284 5.31582 7.4738 5.36235 7.47403H7.30334C7.40431 7.47403 7.50114 7.43392 7.57254 7.36252C7.64394 7.29112 7.68405 7.19429 7.68405 7.09332C7.68405 6.99235 7.64394 6.89551 7.57254 6.82411C7.50114 6.75272 7.40431 6.71261 7.30334 6.71261H5.78684C5.82706 6.03321 5.98035 5.36529 6.2404 4.73634C6.44716 4.25148 6.72876 3.80208 7.07491 3.40456V3.72086C7.07349 4.01607 7.18786 4.30007 7.39347 4.51191C7.59908 4.72374 7.87954 4.84653 8.17466 4.85392H8.18595H8.20752C8.50806 4.85367 8.79623 4.73421 9.0088 4.52176C9.22137 4.30931 9.34098 4.02121 9.3414 3.72067V2.17391C9.34112 2.08421 9.33017 1.99485 9.30879 1.90773C9.49179 1.84557 9.67807 1.79352 9.86678 1.75183V3.72086C9.86536 4.01607 9.97973 4.30007 10.1853 4.51191C10.3909 4.72374 10.6714 4.84653 10.9665 4.85392H10.9778H10.9994C11.2999 4.85367 11.5881 4.73421 11.8007 4.52176C12.0132 4.30931 12.1329 4.02121 12.1333 3.72067V1.75069C12.3221 1.79211 12.5086 1.84403 12.6916 1.90621C12.67 1.99373 12.659 2.08351 12.6587 2.17366V3.72086C12.6573 4.01607 12.7717 4.30007 12.9773 4.51191C13.1829 4.72374 13.4633 4.84653 13.7585 4.85392H13.7698H13.7913C14.0919 4.85367 14.38 4.73421 14.5926 4.52176C14.8052 4.30931 14.9248 4.02121 14.9252 3.72067V3.40043C15.2719 3.79807 15.554 4.24771 15.7612 4.73292C16.0211 5.36302 16.1739 6.03213 16.2133 6.71261H8.7369C8.63593 6.71261 8.5391 6.75272 8.4677 6.82411C8.3963 6.89551 8.35619 6.99235 8.35619 7.09332C8.35619 7.19429 8.3963 7.29112 8.4677 7.36252C8.5391 7.43392 8.63593 7.47403 8.7369 7.47403H16.6377C16.732 7.47421 16.8224 7.51179 16.889 7.57853C16.9556 7.64526 16.993 7.7357 16.993 7.82999C16.9929 7.92419 16.9554 8.01449 16.8888 8.0811C16.8222 8.14771 16.7319 8.18519 16.6377 8.18532H15.2849Z" fill="currentColor"/>
        </g> 
    </symbol>

    <symbol id="popular-painting"  viewBox="0 0 30 30">
        <g>
            <path d="M3.14108 5.85526C2.9547 5.42032 2.87916 4.94593 2.92124 4.47461C2.96333 4.00329 3.12172 3.54978 3.38221 3.15474C3.64271 2.7597 3.99716 2.43548 4.4138 2.21115C4.83044 1.98682 5.29624 1.86939 5.76943 1.86939H23.4565V1.16626H4.36318C3.65202 1.16648 2.96645 1.43169 2.44029 1.91013C1.91412 2.38857 1.58512 3.04591 1.51748 3.75386C1.44985 4.4618 1.64844 5.16954 2.07451 5.73895C2.50057 6.30837 3.12352 6.69858 3.82178 6.83345C3.82712 6.83451 3.83218 6.83612 3.83753 6.83725C3.53832 6.56306 3.3009 6.22831 3.14108 5.85526Z" fill="currentColor"/>
<path d="M25.0703 3.5997H24.3003V0.744385C24.3003 0.632497 24.2558 0.525191 24.1767 0.446074C24.0976 0.366957 23.9903 0.32251 23.8784 0.32251H4.36318C3.44194 0.322487 2.55378 0.665826 1.8721 1.28549C1.19041 1.90515 0.764164 2.75664 0.676575 3.6737C0.588986 4.59076 0.846346 5.50754 1.3984 6.24503C1.95046 6.98253 2.75758 7.48779 3.66216 7.66215C3.74178 7.67876 3.81316 7.72252 3.86408 7.78594C3.915 7.84937 3.9423 7.92851 3.9413 8.00984V10.9123C3.9413 11.3366 4.10985 11.7436 4.40988 12.0436C4.7099 12.3436 5.11682 12.5122 5.54112 12.5122C5.96542 12.5122 6.37234 12.3436 6.67237 12.0436C6.97239 11.7436 7.14094 11.3366 7.14094 10.9123V9.11024C7.14117 8.90979 7.22088 8.71762 7.36261 8.57588C7.50434 8.43414 7.6965 8.35441 7.89694 8.35417H7.91206C8.11251 8.35439 8.30469 8.43412 8.44643 8.57586C8.58818 8.7176 8.66791 8.90978 8.66813 9.11024V14.8001C8.66861 15.2242 8.83732 15.6309 9.13724 15.9308C9.43716 16.2307 9.8438 16.3994 10.268 16.3999H10.2774C10.7015 16.3994 11.1082 16.2307 11.4081 15.9308C11.708 15.6309 11.8767 15.2242 11.8772 14.8001V8.08522C11.8773 7.99074 11.9149 7.90016 11.9817 7.83335C12.0485 7.76654 12.1391 7.72897 12.2335 7.72888H23.8784C23.9903 7.72888 24.0976 7.68443 24.1767 7.60531C24.2558 7.5262 24.3003 7.41889 24.3003 7.307V4.44345H25.0703C25.979 4.44345 26.8504 4.80441 27.4929 5.4469C28.1354 6.0894 28.4963 6.96081 28.4963 7.86943C28.4963 8.77806 28.1354 9.64947 27.4929 10.292C26.8504 10.9345 25.979 11.2954 25.0703 11.2954H15.2232C15.1113 11.2954 15.004 11.3399 14.9249 11.419C14.8458 11.4981 14.8013 11.6054 14.8013 11.7173V16.995C14.8013 17.1069 14.8458 17.2142 14.9249 17.2933C15.004 17.3724 15.1113 17.4169 15.2232 17.4169C15.3351 17.4169 15.4424 17.3724 15.5215 17.2933C15.6007 17.2142 15.6451 17.1069 15.6451 16.995V12.1392H25.0703C26.2028 12.1392 27.2888 11.6893 28.0895 10.8886C28.8902 10.0879 29.3401 9.00183 29.3401 7.86943C29.3401 6.73703 28.8902 5.65101 28.0895 4.85028C27.2888 4.04955 26.2028 3.5997 25.0703 3.5997ZM23.4565 6.88527H12.2335C11.9154 6.88564 11.6103 7.0122 11.3854 7.23718C11.1604 7.46216 11.0338 7.76719 11.0334 8.08536V14.8002C11.0332 15.0007 10.9535 15.1928 10.8117 15.3346C10.67 15.4763 10.4778 15.5561 10.2774 15.5563H10.268C10.0675 15.5561 9.87532 15.4763 9.73357 15.3346C9.59183 15.1928 9.5121 15.0007 9.51188 14.8002V9.11024C9.5114 8.68608 9.34269 8.27945 9.04277 7.97953C8.74285 7.67961 8.33621 7.5109 7.91206 7.51042H7.89694C7.4728 7.51092 7.06618 7.67963 6.76628 7.97955C6.46637 8.27947 6.29768 8.6861 6.29719 9.11024V10.9123C6.29719 11.1129 6.21753 11.3052 6.07574 11.447C5.93395 11.5888 5.74164 11.6684 5.54112 11.6684C5.3406 11.6684 5.14829 11.5888 5.0065 11.447C4.86471 11.3052 4.78505 11.1129 4.78505 10.9123V8.00984C4.78589 7.73248 4.69024 7.46346 4.5145 7.24887C4.33876 7.03429 4.09386 6.8875 3.82177 6.83366C3.12351 6.69879 2.50056 6.30857 2.0745 5.73916C1.64844 5.16975 1.44984 4.46201 1.51748 3.75407C1.58511 3.04612 1.91411 2.38878 2.44028 1.91034C2.96644 1.4319 3.65201 1.16669 4.36318 1.16647H23.4565V6.88527Z" fill="currentColor"/>
<path d="M13.2131 29.6776H17.2333C17.3452 29.6776 17.4525 29.6331 17.5316 29.554C17.6107 29.4749 17.6552 29.3676 17.6552 29.2557V17.0717C17.6552 16.9598 17.6107 16.8525 17.5316 16.7733C17.4525 16.6942 17.3452 16.6498 17.2333 16.6498H13.2131C13.1012 16.6498 12.9939 16.6942 12.9148 16.7733C12.8357 16.8525 12.7913 16.9598 12.7913 17.0717V29.2557C12.7913 29.3676 12.8357 29.4749 12.9148 29.554C12.9939 29.6331 13.1012 29.6776 13.2131 29.6776ZM16.8114 26.7244H13.635V25.4588H16.8114V26.7244ZM16.8114 24.6151H13.635V23.3494H16.8114V24.6151ZM13.635 28.8338V27.5682H16.8114V28.8338H13.635ZM16.8114 17.4935V22.5057H13.635V17.4935H16.8114Z" fill="currentColor"/>
        </g> 
    </symbol>

    <symbol id="popular-plumbing"  viewBox="0 0 26 30">
        <g>
    <path d="M21.9875 18.1168V13.598H23.8625V18.1168C23.8625 24.1068 18.9894 28.9793 13 28.9793C12.6841 28.9793 12.3715 28.9649 12.0625 28.9384C17.6145 28.4615 21.9875 23.7909 21.9875 18.1168Z" fill="#D4E1F4"/>
<path d="M16.0512 9.14563C15.8855 9.14563 15.7265 9.21148 15.6093 9.32869C15.4921 9.4459 15.4262 9.60487 15.4262 9.77063V8.52063C15.4262 8.35487 15.4921 8.1959 15.6093 8.07869C15.7265 7.96148 15.8855 7.89563 16.0512 7.89563H24.8412C25.007 7.89563 25.166 7.96148 25.2832 8.07869C25.4004 8.1959 25.4662 8.35487 25.4662 8.52063V10.8588C25.4663 11.0079 25.413 11.1522 25.3159 11.2655C25.2188 11.3788 25.0843 11.4535 24.9369 11.4763C24.9052 11.4813 24.8733 11.4838 24.8412 11.4838H24.2162V9.77063C24.2162 9.60487 24.1504 9.4459 24.0332 9.32869C23.916 9.21148 23.757 9.14563 23.5912 9.14563H16.0512Z" fill="#D4E1F4"/>
<path d="M1.15873 1.02063H9.94873C10.1145 1.02063 10.2735 1.08648 10.3907 1.20369C10.5079 1.3209 10.5737 1.47987 10.5737 1.64563V3.98375C10.5737 4.13301 10.5202 4.27732 10.423 4.39058C10.3258 4.50383 10.1913 4.57857 10.0437 4.60125C10.0123 4.60631 9.98055 4.60881 9.94873 4.60875H9.32373V2.89563C9.32373 2.72987 9.25788 2.5709 9.14067 2.45369C9.02346 2.33648 8.86449 2.27063 8.69873 2.27063H1.15873C0.992969 2.27063 0.833997 2.33648 0.716787 2.45369C0.599577 2.5709 0.533729 2.72987 0.533729 2.89563V1.64563C0.533729 1.47987 0.599577 1.3209 0.716787 1.20369C0.833997 1.08648 0.992969 1.02063 1.15873 1.02063Z" fill="currentColor"/>
<path d="M1.43699 4.60852V6.34802H9.67018V4.60852H10.4202V6.72302C10.4202 6.82248 10.3807 6.91786 10.3103 6.98819C10.24 7.05851 10.1446 7.09802 10.0452 7.09802H9.44999V18.1168C9.44999 19.0583 9.82401 19.9612 10.4898 20.627C11.1555 21.2928 12.0585 21.6668 13 21.6668C13.9415 21.6668 14.8445 21.2928 15.5102 20.627C16.176 19.9612 16.55 19.0583 16.55 18.1168V13.973H15.9547C15.8552 13.973 15.7598 13.9335 15.6895 13.8632C15.6192 13.7929 15.5797 13.6975 15.5797 13.598V11.4835H16.3297V13.223H24.563V11.4835H25.313V13.598C25.313 13.6975 25.2735 13.7929 25.2032 13.8632C25.1328 13.9335 25.0374 13.973 24.938 13.973H24.2375V18.1168C24.2375 24.3132 19.1963 29.3543 13 29.3543C6.80368 29.3543 1.76249 24.3131 1.76249 18.1168V7.09802H1.06249C0.963032 7.09802 0.867649 7.05851 0.797323 6.98819C0.726997 6.91786 0.687489 6.82248 0.687489 6.72302V4.60852H1.43699ZM2.51249 18.117C2.51249 23.8998 7.21724 28.6045 13 28.6045C18.7827 28.6045 23.4875 23.9 23.4875 18.117V13.9732H17.3V18.117C17.3 19.2574 16.847 20.3511 16.0405 21.1575C15.2341 21.9639 14.1404 22.417 13 22.417C11.8596 22.417 10.7658 21.9639 9.95943 21.1575C9.15302 20.3511 8.69999 19.2574 8.69999 18.117V7.09821H2.51249V18.117Z" fill="currentColor"/>
<path d="M4.01251 15.0503C3.91306 15.0503 3.81767 15.0108 3.74735 14.9404C3.67702 14.8701 3.63751 14.7747 3.63751 14.6753V14.4205C3.63751 14.3211 3.67702 14.2257 3.74735 14.1554C3.81767 14.085 3.91306 14.0455 4.01251 14.0455C4.11197 14.0455 4.20735 14.085 4.27768 14.1554C4.348 14.2257 4.38751 14.3211 4.38751 14.4205V14.6753C4.38751 14.7747 4.348 14.8701 4.27768 14.9404C4.20735 15.0108 4.11197 15.0503 4.01251 15.0503Z" fill="currentColor"/>
<path d="M4.01251 13.0517C3.91306 13.0517 3.81767 13.0122 3.74735 12.9419C3.67702 12.8715 3.63751 12.7762 3.63751 12.6767V9.68921C3.63751 9.58975 3.67702 9.49437 3.74735 9.42404C3.81767 9.35372 3.91306 9.31421 4.01251 9.31421C4.11197 9.31421 4.20735 9.35372 4.27768 9.42404C4.348 9.49437 4.38751 9.58975 4.38751 9.68921V12.6767C4.38751 12.7762 4.348 12.8715 4.27768 12.9419C4.20735 13.0122 4.11197 13.0517 4.01251 13.0517Z" fill="currentColor"/>
<path d="M20.5949 22.497C20.6212 22.4551 20.6556 22.4188 20.696 22.3902C20.7364 22.3617 20.782 22.3414 20.8303 22.3305C20.8786 22.3197 20.9286 22.3185 20.9773 22.3271C21.026 22.3356 21.0726 22.3537 21.1143 22.3804C21.156 22.407 21.1921 22.4416 21.2203 22.4823C21.2486 22.5229 21.2685 22.5687 21.279 22.6171C21.2895 22.6654 21.2902 22.7154 21.2813 22.7641C21.2724 22.8128 21.2539 22.8592 21.227 22.9007C21.1292 23.0538 21.0263 23.2065 20.9211 23.3548C20.8636 23.4359 20.7762 23.4908 20.6781 23.5075C20.58 23.5241 20.4794 23.5011 20.3983 23.4436C20.3171 23.386 20.2622 23.2986 20.2456 23.2005C20.2289 23.1025 20.2519 23.0018 20.3094 22.9207C20.4076 22.7824 20.5036 22.6398 20.5949 22.497Z" fill="currentColor"/>
<path d="M17.9125 25.3483C18.4646 24.9456 18.9766 24.4905 19.4412 23.9894C19.4745 23.9526 19.5148 23.9227 19.5597 23.9016C19.6046 23.8804 19.6533 23.8684 19.7029 23.8662C19.7525 23.864 19.802 23.8717 19.8486 23.8888C19.8952 23.9059 19.938 23.9321 19.9744 23.9658C20.0108 23.9996 20.0402 24.0402 20.0607 24.0854C20.0813 24.1306 20.0927 24.1794 20.0943 24.229C20.0959 24.2786 20.0876 24.3281 20.0699 24.3745C20.0522 24.4209 20.0254 24.4633 19.9912 24.4993C19.4937 25.036 18.9455 25.5233 18.3541 25.9544C18.2737 26.0129 18.1734 26.0372 18.0751 26.0217C17.9768 26.0063 17.8887 25.9525 17.8302 25.8721C17.7716 25.7917 17.7474 25.6913 17.7628 25.593C17.7783 25.4948 17.8321 25.4067 17.9125 25.3481V25.3483Z" fill="currentColor"/>
<path d="M1.15861 0.645386H9.94855C10.2137 0.645684 10.4679 0.751136 10.6553 0.938608C10.8428 1.12608 10.9482 1.38026 10.9485 1.64539V3.98357C10.9482 4.2487 10.8428 4.50288 10.6553 4.69035C10.4679 4.87782 10.2137 4.98328 9.94855 4.98357H1.15861C0.893484 4.98328 0.639303 4.87782 0.451832 4.69035C0.26436 4.50288 0.158907 4.2487 0.158609 3.98357V1.64539C0.158907 1.38026 0.26436 1.12608 0.451832 0.938608C0.639303 0.751136 0.893484 0.645684 1.15861 0.645386ZM3.74998 1.39539V4.23357H7.35717V1.39539H3.74998ZM10.1985 3.98357V1.64539C10.1985 1.57908 10.1722 1.51549 10.1253 1.46861C10.0784 1.42172 10.0149 1.39539 9.94855 1.39539H8.10717V4.23357H9.94855C10.0149 4.23357 10.0784 4.20723 10.1253 4.16035C10.1722 4.11347 10.1985 4.04988 10.1985 3.98357ZM0.908609 3.98357C0.908609 4.04988 0.934948 4.11347 0.981833 4.16035C1.02872 4.20723 1.09231 4.23357 1.15861 4.23357H2.99998V1.39539H1.15861C1.09231 1.39539 1.02872 1.42172 0.981833 1.46861C0.934948 1.51549 0.908609 1.57908 0.908609 1.64539V3.98357Z" fill="currentColor"/>
<path d="M16.0514 7.52039H24.8414C25.1065 7.52068 25.3607 7.62614 25.5481 7.81361C25.7356 8.00108 25.8411 8.25526 25.8414 8.52039V10.8586C25.8411 11.1237 25.7356 11.3779 25.5481 11.5654C25.3607 11.7528 25.1065 11.8583 24.8414 11.8586H16.0514C15.7863 11.8583 15.5321 11.7528 15.3447 11.5654C15.1572 11.3779 15.0517 11.1237 15.0514 10.8586V8.52039C15.0517 8.25526 15.1572 8.00108 15.3447 7.81361C15.5321 7.62614 15.7863 7.52068 16.0514 7.52039ZM18.6428 8.27039V11.1086H22.25V8.27039H18.6428ZM25.0914 10.8586V8.52039C25.0914 8.45408 25.065 8.39049 25.0181 8.34361C24.9713 8.29672 24.9077 8.27039 24.8414 8.27039H23V11.1086H24.8414C24.9077 11.1086 24.9713 11.0822 25.0181 11.0353C25.065 10.9885 25.0914 10.9249 25.0914 10.8586ZM15.8014 10.8586C15.8014 10.9249 15.8278 10.9885 15.8747 11.0353C15.9215 11.0822 15.9851 11.1086 16.0514 11.1086H17.8928V8.27039H16.0514C15.9851 8.27039 15.9215 8.29672 15.8747 8.34361C15.8278 8.39049 15.8014 8.45408 15.8014 8.52039V10.8586Z" fill="currentColor"/>
</g> 
</symbol>

<symbol id="popular-electric" viewBox="0 0 21 35">
    <path d="M10.0461 0.419067C9.02223 0.419012 8.00839 0.620624 7.06245 1.01239C6.11651 1.40416 5.25699 1.97841 4.53298 2.70235C3.80897 3.4263 3.23465 4.28576 2.8428 5.23166C2.45094 6.17757 2.24924 7.1914 2.2492 8.21525V18.0926H2.21295C1.7371 18.0926 1.28073 18.2816 0.944192 18.618C0.607652 18.9544 0.418501 19.4107 0.418335 19.8865V21.3521H2.50996V19.8865C2.51013 19.4107 2.69928 18.9544 3.03582 18.618C3.37236 18.2816 3.82873 18.0926 4.30458 18.0926H4.34083V8.21525C4.34105 6.32864 5.02526 4.50607 6.26663 3.0854C7.50801 1.66472 9.22235 0.742284 11.0919 0.489067C10.7452 0.442536 10.3959 0.419151 10.0461 0.419067Z" fill="#D4E1F4"/>
<path d="M11.034 15.0136V18.089H11.8706V15.0136H13.028C13.1389 15.0136 13.2453 14.9695 13.3238 14.8911C13.4022 14.8126 13.4463 14.7062 13.4463 14.5953V11.7277C13.4463 11.6167 13.4022 11.5103 13.3238 11.4319C13.2453 11.3534 13.1389 11.3093 13.028 11.3093H9.13967C9.02872 11.3093 8.92232 11.3534 8.84387 11.4319C8.76541 11.5103 8.72134 11.6167 8.72134 11.7277C8.72134 11.8386 8.76541 11.945 8.84387 12.0235C8.92232 12.1019 9.02872 12.146 9.13967 12.146H12.6097V14.1769H7.4824V12.146H7.80591C7.91685 12.146 8.02326 12.1019 8.10171 12.0235C8.18016 11.945 8.22423 11.8386 8.22423 11.7277C8.22423 11.6167 8.18016 11.5103 8.10171 11.4319C8.02326 11.3534 7.91685 11.3093 7.80591 11.3093H7.06408C6.95313 11.3093 6.84673 11.3534 6.76828 11.4319C6.68983 11.5103 6.64575 11.6167 6.64575 11.7277V14.5953C6.64575 14.7062 6.68983 14.8126 6.76828 14.8911C6.84673 14.9695 6.95313 15.0136 7.06408 15.0136H8.22144V18.2926H9.05809V15.0136H11.034Z" fill="currentColor"/>
<path d="M8.22142 23.3342L6.65772 24.7704C6.61505 24.8096 6.58098 24.8572 6.55768 24.9102C6.53437 24.9633 6.52233 25.0206 6.52233 25.0785V27.3561H5.66546C5.55451 27.3561 5.44811 27.4002 5.36966 27.4786C5.2912 27.5571 5.24713 27.6635 5.24713 27.7744V31.1907C5.24713 31.3017 5.2912 31.4081 5.36966 31.4865C5.44811 31.565 5.55451 31.6091 5.66546 31.6091H6.52233V33.9349C6.52233 34.0459 6.5664 34.1523 6.64485 34.2307C6.7233 34.3092 6.8297 34.3533 6.94065 34.3533C7.0516 34.3533 7.158 34.3092 7.23645 34.2307C7.3149 34.1523 7.35898 34.0459 7.35898 33.9349V31.6091H8.17401C8.28496 31.6091 8.39136 31.565 8.46981 31.4865C8.54826 31.4081 8.59234 31.3017 8.59234 31.1907V27.7744C8.59234 27.6635 8.54826 27.5571 8.46981 27.4786C8.39136 27.4002 8.28496 27.3561 8.17401 27.3561H7.35898V25.2621L8.92268 23.8258C8.96536 23.7866 8.99943 23.739 9.02274 23.686C9.04604 23.6329 9.05808 23.5756 9.05807 23.5177V21.4298H8.22142V23.3342ZM7.75569 30.7724H6.08378V28.1927H7.75569V30.7724Z" fill="currentColor"/>
<path d="M14.4266 27.3563H13.5697V25.0785C13.5697 25.0206 13.5576 24.9633 13.5343 24.9102C13.511 24.8572 13.477 24.8096 13.4343 24.7704L11.8706 23.3342V21.3519H11.0339V23.5182C11.0339 23.5761 11.046 23.6334 11.0693 23.6865C11.0926 23.7395 11.1267 23.7871 11.1693 23.8263L12.733 25.2626V27.3563H11.918C11.807 27.3563 11.7006 27.4004 11.6222 27.4788C11.5437 27.5573 11.4997 27.6637 11.4997 27.7746V31.1909C11.4997 31.3019 11.5437 31.4083 11.6222 31.4867C11.7006 31.5652 11.807 31.6093 11.918 31.6093H12.733V33.9351C12.733 34.0461 12.7771 34.1525 12.8556 34.2309C12.934 34.3094 13.0404 34.3535 13.1514 34.3535C13.2623 34.3535 13.3687 34.3094 13.4472 34.2309C13.5256 34.1525 13.5697 34.0461 13.5697 33.9351V31.6093H14.4266C14.5375 31.6093 14.6439 31.5652 14.7224 31.4867C14.8008 31.4083 14.8449 31.3019 14.8449 31.1909V27.7746C14.8449 27.6637 14.8008 27.5573 14.7224 27.4788C14.6439 27.4004 14.5375 27.3563 14.4266 27.3563ZM14.0082 30.7726H12.3363V28.1929H14.0082V30.7726Z" fill="currentColor"/>
<path d="M18.2613 17.7079V8.21521C18.2613 6.0364 17.3958 3.94683 15.8551 2.40618C14.3145 0.865528 12.2249 0 10.0461 0C7.86727 0 5.7777 0.865528 4.23705 2.40618C2.6964 3.94683 1.83087 6.0364 1.83087 8.21521V17.7079C1.31846 17.7983 0.85419 18.0661 0.519434 18.4644C0.184678 18.8627 0.0007902 19.3662 0 19.8865V21.352C0 21.463 0.0440731 21.5694 0.122524 21.6478C0.200975 21.7263 0.307378 21.7703 0.418325 21.7703H19.6738C19.7848 21.7703 19.8912 21.7263 19.9696 21.6478C20.0481 21.5694 20.0922 21.463 20.0922 21.352V19.8865C20.0914 19.3662 19.9075 18.8627 19.5727 18.4644C19.238 18.0661 18.7737 17.7983 18.2613 17.7079ZM19.2555 20.9337H0.83665V19.8865C0.837149 19.5217 0.982332 19.172 1.24035 18.9141C1.49837 18.6562 1.84814 18.5112 2.21294 18.5109H14.1596C14.2706 18.5109 14.377 18.4668 14.4554 18.3884C14.5339 18.3099 14.5779 18.2035 14.5779 18.0926C14.5779 17.9816 14.5339 17.8752 14.4554 17.7968C14.377 17.7183 14.2706 17.6742 14.1596 17.6742H2.66752V8.21521C2.66752 6.25829 3.4449 4.38153 4.82865 2.99778C6.2124 1.61403 8.08916 0.83665 10.0461 0.83665C12.003 0.83665 13.8798 1.61403 15.2635 2.99778C16.6473 4.38153 17.4246 6.25829 17.4246 8.21521V17.6742H15.7862C15.6753 17.6742 15.5688 17.7183 15.4904 17.7968C15.4119 17.8752 15.3679 17.9816 15.3679 18.0926C15.3679 18.2035 15.4119 18.3099 15.4904 18.3884C15.5688 18.4668 15.6753 18.5109 15.7862 18.5109H17.8792C18.244 18.5112 18.5938 18.6562 18.8518 18.9141C19.1098 19.172 19.255 19.5217 19.2555 19.8865V20.9337Z" fill="currentColor"/>
<path d="M5.66531 2.81044C4.85896 3.46143 4.2087 4.28479 3.76229 5.22004C3.31588 6.15529 3.08467 7.17867 3.08564 8.21499V10.8323C3.08564 10.9433 3.12971 11.0497 3.20816 11.1281C3.28661 11.2066 3.39301 11.2506 3.50396 11.2506C3.61491 11.2506 3.72131 11.2066 3.79976 11.1281C3.87821 11.0497 3.92229 10.9433 3.92229 10.8323V8.21499C3.92158 7.30318 4.12513 6.40279 4.51801 5.57995C4.91088 4.75712 5.48309 4.03274 6.19261 3.46003C6.23561 3.42552 6.27137 3.38284 6.29782 3.33445C6.32428 3.28607 6.3409 3.23293 6.34675 3.1781C6.35259 3.12327 6.34753 3.06782 6.33187 3.01495C6.3162 2.96208 6.29024 2.91282 6.25547 2.87002C6.2207 2.82722 6.17781 2.79171 6.12927 2.76555C6.08073 2.73938 6.0275 2.72307 5.97263 2.71755C5.91776 2.71204 5.86235 2.71742 5.80957 2.7334C5.75679 2.74938 5.70769 2.77563 5.6651 2.81065L5.66531 2.81044Z" fill="currentColor"/>
<path d="M7.88508 1.5992C7.46158 1.73781 7.05247 1.91702 6.66343 2.13431C6.61506 2.16088 6.57242 2.19675 6.53797 2.23987C6.50352 2.28299 6.47794 2.3325 6.46272 2.38554C6.44749 2.43859 6.4429 2.49413 6.44923 2.54895C6.45556 2.60378 6.47267 2.65681 6.49959 2.70499C6.5265 2.75317 6.56269 2.79555 6.60605 2.82969C6.64942 2.86382 6.69911 2.88904 6.75227 2.90389C6.80542 2.91873 6.86099 2.92291 6.91577 2.91619C6.97055 2.90947 7.02345 2.89197 7.07144 2.86471C7.41336 2.67373 7.77293 2.51625 8.14514 2.39444C8.2506 2.35996 8.33804 2.28501 8.38823 2.18606C8.43841 2.08711 8.44724 1.97228 8.41276 1.86683C8.37829 1.76137 8.30333 1.67393 8.20438 1.62374C8.10544 1.57355 7.99061 1.56473 7.88515 1.5992H7.88508Z" fill="currentColor"/>
  </symbol>

  <symbol id="popular-heatingCooling" viewBox="0 0 29 21">
    <path d="M3.24429 6.55473V0.595825C1.78172 0.595825 0.595886 1.78166 0.595886 3.24423V9.20313C0.595886 10.6657 1.78172 11.8515 3.24429 11.8515H25.7557C27.2183 11.8515 28.4041 10.6657 28.4041 9.20313H5.89269C4.43012 9.20313 3.24429 8.0173 3.24429 6.55473Z" fill="#D4E1F4"/>
<path d="M25.6233 6.48853H3.37671C3.04773 6.48853 2.78082 6.22162 2.78082 5.89264C2.78082 5.56366 3.04773 5.29675 3.37671 5.29675H25.6233C25.9523 5.29675 26.2192 5.56366 26.2192 5.89264C26.2192 6.22162 25.9523 6.48853 25.6233 6.48853Z" fill="currentColor"/>
<path d="M25.6233 3.90638H3.37671C3.04773 3.90638 2.78082 3.63947 2.78082 3.31049C2.78082 2.98151 3.04773 2.7146 3.37671 2.7146H25.6233C25.9523 2.7146 26.2192 2.98151 26.2192 3.31049C26.2192 3.63947 25.9523 3.90638 25.6233 3.90638Z" fill="currentColor"/>
<path d="M19.1348 18.4065C18.8058 18.4065 18.5389 18.1395 18.5389 17.8106V14.5001C18.5389 14.1711 18.8058 13.9042 19.1348 13.9042C19.4638 13.9042 19.7307 14.1711 19.7307 14.5001V17.8106C19.7307 18.1395 19.4638 18.4065 19.1348 18.4065Z" fill="currentColor"/>
<path d="M10.5273 18.4065C10.1984 18.4065 9.93146 18.1395 9.93146 17.8106V14.5001C9.93146 14.1711 10.1984 13.9042 10.5273 13.9042C10.8563 13.9042 11.1232 14.1711 11.1232 14.5001V17.8106C11.1232 18.1395 10.8563 18.4065 10.5273 18.4065Z" fill="currentColor"/>
<path d="M25.7557 0H3.24429C1.45326 0.00206906 0.00206906 1.45326 0 3.24429V9.2032C0.00206906 10.9942 1.45326 12.4454 3.24429 12.4475H25.7557C27.5467 12.4454 28.9979 10.9942 29 9.2032V3.24429C28.9979 1.45326 27.5467 0.00206906 25.7557 0ZM27.8082 9.2032C27.8069 10.3363 26.8888 11.2544 25.7557 11.2557H3.24429C2.11122 11.2544 1.19307 10.3363 1.19178 9.2032V3.24429C1.19307 2.11122 2.11122 1.19307 3.24429 1.19178H25.7557C26.8888 1.19307 27.8069 2.11122 27.8082 3.24429V9.2032Z" fill="currentColor"/>
<path d="M20.3265 7.2832C19.4489 7.2832 18.7374 7.9947 18.7374 8.87224C18.7374 9.74979 19.4489 10.4613 20.3265 10.4613C21.204 10.4613 21.9155 9.74979 21.9155 8.87224C21.9145 7.99496 21.2038 7.28424 20.3265 7.2832ZM20.3265 9.2695C20.1071 9.2695 19.9292 9.09157 19.9292 8.87224C19.9292 8.65292 20.1071 8.47498 20.3265 8.47498C20.5458 8.47498 20.7237 8.65292 20.7237 8.87224C20.7235 9.09157 20.5458 9.26925 20.3265 9.2695Z" fill="currentColor"/>
<path d="M24.6302 7.2832C23.7526 7.2832 23.0411 7.9947 23.0411 8.87224C23.0411 9.74979 23.7526 10.4613 24.6302 10.4613C25.5077 10.4613 26.2192 9.74979 26.2192 8.87224C26.2182 7.99496 25.5075 7.28424 24.6302 7.2832ZM24.6302 9.2695C24.4109 9.2695 24.2329 9.09157 24.2329 8.87224C24.2329 8.65292 24.4109 8.47498 24.6302 8.47498C24.8495 8.47498 25.0274 8.65292 25.0274 8.87224C25.0272 9.09157 24.8495 9.26925 24.6302 9.2695Z" fill="currentColor"/>
<path d="M15.4269 19.7969V14.5001C15.4269 14.1711 15.16 13.9042 14.8311 13.9042C14.5021 13.9042 14.2352 14.1711 14.2352 14.5001V19.7969C14.2352 20.1259 14.5021 20.3928 14.8311 20.3928C15.16 20.3928 15.4269 20.1259 15.4269 19.7969Z" fill="currentColor"/>
<path d="M24.0342 16.4864V14.5001C24.0342 14.1711 23.7673 13.9042 23.4383 13.9042C23.1093 13.9042 22.8424 14.1711 22.8424 14.5001V16.4864C22.8424 16.8153 23.1093 17.0823 23.4383 17.0823C23.7673 17.0823 24.0342 16.8153 24.0342 16.4864Z" fill="currentColor"/>
<path d="M6.81965 16.4864V14.5001C6.81965 14.1711 6.55274 13.9042 6.22376 13.9042C5.89478 13.9042 5.62787 14.1711 5.62787 14.5001V16.4864C5.62787 16.8153 5.89478 17.0823 6.22376 17.0823C6.55274 17.0823 6.81965 16.8153 6.81965 16.4864Z" fill="currentColor"/>
  </symbol>

  <symbol id="popular-security" viewBox="0 0 22 26">
    <path d="M4.31743 21.4282C3.95837 21.4282 3.655 21.1098 3.655 20.7358C3.65497 20.5552 3.72473 20.3815 3.84972 20.2512C3.87143 20.2298 3.89486 20.2102 3.91978 20.1927C4.34327 19.8983 4.69843 19.5162 4.96111 19.0723C5.66611 17.8545 6.84904 15.2081 6.84904 11.1676C6.84904 9.42366 7.58782 7.64859 8.87601 6.2976C9.51147 5.627 10.2711 5.08622 11.1128 4.70528C11.037 4.70227 10.9612 4.7002 10.8854 4.7002C9.17096 4.7002 7.44261 5.48171 6.14344 6.84412C4.85525 8.1951 4.11647 9.97018 4.11647 11.7142C4.11647 15.7546 2.93365 18.401 2.22854 19.6188C1.96585 20.0627 1.6107 20.4448 1.18721 20.7392C1.16229 20.7567 1.13886 20.7763 1.11715 20.7977C0.992161 20.9281 0.922394 21.1017 0.922424 21.2823C0.922424 21.6563 1.22579 21.9747 1.58485 21.9747H20.1859C20.4971 21.9747 20.7661 21.7355 20.8324 21.4282H4.31743Z" fill="#D4E1F4"/>
    <path d="M8.5434 2.34941C8.54488 2.81228 8.68348 3.26433 8.94172 3.64847C9.19995 4.03261 9.56622 4.33161 9.99428 4.50772C10.4223 4.68383 10.893 4.72914 11.3468 4.63793C11.8006 4.54672 12.2172 4.32309 12.5439 3.99527C12.8707 3.66745 13.093 3.25015 13.1828 2.79606C13.2725 2.34198 13.2257 1.87148 13.0483 1.44399C12.8708 1.01649 12.5706 0.651176 12.1856 0.394171C11.8007 0.137167 11.3482 2.36553e-06 10.8853 0C10.2634 0.00167886 9.66759 0.249983 9.22854 0.690434C8.78949 1.13088 8.54309 1.72751 8.5434 2.34941ZM10.8853 0.76512C11.199 0.763649 11.506 0.855309 11.7675 1.02849C12.029 1.20167 12.2332 1.44857 12.3543 1.73791C12.4753 2.02726 12.5077 2.34603 12.4475 2.65382C12.3872 2.96162 12.2369 3.2446 12.0156 3.46691C11.7944 3.68921 11.5121 3.84084 11.2046 3.90258C10.8971 3.96432 10.5782 3.93339 10.2883 3.81371C9.99835 3.69404 9.75048 3.49099 9.57606 3.23032C9.40165 2.96964 9.30853 2.66306 9.30852 2.34941C9.30799 1.93037 9.47372 1.52823 9.76932 1.23122C10.0649 0.934205 10.4663 0.766582 10.8853 0.76512Z" fill="currentColor"/>
    <path d="M13.1994 22.1318L12.5507 22.5376C12.6716 22.7308 12.7496 23.0568 12.7496 23.3689C12.7498 23.6137 12.7019 23.8562 12.6084 24.0825C12.5149 24.3087 12.3778 24.5144 12.2049 24.6877C12.0319 24.8609 11.8266 24.9985 11.6005 25.0924C11.3744 25.1863 11.132 25.2347 10.8872 25.235C10.3928 25.2355 9.91843 25.0395 9.56847 24.6903C9.21852 24.341 9.02165 23.867 9.02116 23.3726C9.02116 23.0585 9.09921 22.7308 9.22004 22.5376L8.57138 22.1319C8.37393 22.4474 8.25604 22.9113 8.25604 23.3725C8.25653 24.0698 8.53401 24.7384 9.02745 25.2312C9.52089 25.7239 10.1899 26.0005 10.8872 26C11.5846 25.9995 12.2531 25.722 12.7459 25.2286C13.2387 24.7351 13.5152 24.0662 13.5147 23.3688C13.5147 22.9099 13.3968 22.4474 13.1994 22.1318Z" fill="currentColor"/>
    <path d="M20.0487 18.9968C19.4402 17.8361 18.4194 15.3464 18.4194 11.7117C18.4194 9.77318 17.6036 7.80612 16.181 6.31484C14.7382 4.80236 12.8081 3.93494 10.8853 3.93494C8.96256 3.93494 7.03238 4.8028 5.58959 6.31594C4.16706 7.80792 3.35123 9.77537 3.35123 11.7139C3.35123 15.5756 2.2329 18.0837 1.56631 19.235C1.35812 19.5842 1.0773 19.8845 0.742879 20.1156C0.683064 20.1578 0.62687 20.2049 0.574881 20.2565C0.306664 20.5306 0.156718 20.899 0.157289 21.2824C0.157289 22.0847 0.797695 22.74 1.58484 22.74H20.1859C20.9729 22.74 21.6134 22.0847 21.6134 21.2824C21.6134 20.9625 21.4981 20.5228 21.2407 20.2653C21.1834 20.2079 21.1212 20.1557 21.0548 20.1091C20.6353 19.8242 20.2902 19.4427 20.0487 18.9968ZM20.6991 20.8045C20.7786 20.8841 20.8484 21.1088 20.8484 21.2824C20.8484 21.6564 20.545 21.9749 20.1859 21.9749H1.58484C1.22578 21.9749 0.922409 21.6564 0.922409 21.2824C0.922379 21.1018 0.992145 20.9282 1.11713 20.7978C1.13884 20.7764 1.16227 20.7569 1.1872 20.7393C1.61068 20.4449 1.96584 20.0628 2.22852 19.619C2.93353 18.4012 4.11646 15.7547 4.11646 11.7143C4.11646 9.97031 4.85524 8.19523 6.14342 6.84425C7.4426 5.48174 9.17111 4.70033 10.8854 4.70033C12.5996 4.70033 14.3284 5.48135 15.6274 6.84316C16.9155 8.19354 17.6543 9.96813 17.6543 11.7119C17.6543 15.5102 18.7299 18.1291 19.371 19.3522C19.6688 19.906 20.0955 20.3802 20.6149 20.7346C20.6449 20.7554 20.6731 20.7788 20.699 20.8045H20.6991Z" fill="currentColor"/>
  </symbol>

  <symbol id="popular-carpentry" viewBox="0 0 33 28">
    <path d="M16.0617 10.2032L15.8009 9.94235L14.6338 11.1094L14.8913 11.3676C13.2556 12.963 11.4662 14.5875 9.57821 16.2564C7.05338 18.4893 4.49545 20.3482 2.14869 22.1011C1.88329 22.3372 1.66893 22.6251 1.51877 22.947C1.36861 23.2689 1.28581 23.6181 1.27546 23.9732C1.26511 24.3283 1.32742 24.6817 1.45857 25.0119C1.58972 25.342 1.78695 25.6418 2.03814 25.893L2.98346 26.839C3.04736 26.9028 3.11449 26.9633 3.18458 27.0203C2.76009 26.4994 2.5531 25.8347 2.60678 25.1649C2.66045 24.495 2.97065 23.8718 3.47267 23.4251C5.81943 21.6722 8.37736 19.8133 10.9022 17.5804C12.7902 15.9115 14.5795 14.287 16.2153 12.6916L15.9578 12.4334L17.1249 11.2663L17.3857 11.5272C17.6882 11.22 18.4052 10.4931 18.7024 10.1807L17.3784 8.85669C17.0812 9.16915 16.3643 9.89601 16.0617 10.2032Z" fill="#D4E1F4"/>
<path d="M24.5312 3.94459L26.4002 5.34715L26.6151 5.17787L23.2072 2.62061L22.5962 3.64206L23.9202 4.96604L24.5312 3.94459Z" fill="#D4E1F4"/>
<path d="M2.70286 27.1194C2.98041 27.3995 3.31088 27.6215 3.67505 27.7727C4.03921 27.9239 4.42979 28.0011 4.82408 27.9999C4.85433 27.9999 4.88478 27.9994 4.91517 27.9986C6.11761 27.9635 6.87036 27.2194 7.07246 26.9923C7.08087 26.9829 7.08875 26.9731 7.09623 26.9629C8.92822 24.4589 10.8974 22.0099 12.9491 19.6842C13.3008 19.2857 13.6482 18.8907 13.9915 18.4993C15.2127 17.1082 16.3711 15.7898 17.5245 14.5623L17.5478 14.5856C17.6223 14.6601 17.7233 14.702 17.8286 14.702C17.934 14.702 18.035 14.6601 18.1095 14.5856L19.2766 13.4185C19.3135 13.3816 19.3428 13.3378 19.3628 13.2896C19.3827 13.2414 19.393 13.1898 19.393 13.1376C19.393 13.0854 19.3827 13.0338 19.3628 12.9856C19.3428 12.9374 19.3135 12.8936 19.2766 12.8567L19.2351 12.8152C19.4508 12.6056 19.6636 12.403 19.8706 12.2111C19.9088 12.1756 19.9397 12.1329 19.9614 12.0855C19.9831 12.0381 19.9953 11.9868 19.9972 11.9347C19.9991 11.8826 19.9908 11.8306 19.9726 11.7817C19.9545 11.7328 19.9268 11.688 19.8913 11.6498C19.8558 11.6115 19.8132 11.5807 19.7658 11.559C19.7183 11.5372 19.6671 11.525 19.615 11.5231C19.5628 11.5212 19.5109 11.5296 19.462 11.5477C19.4131 11.5659 19.3682 11.5935 19.33 11.629C19.1163 11.8276 18.8963 12.0369 18.6736 12.2534L16.6219 10.2017C16.9732 9.84474 17.4494 9.3593 17.675 9.12152C17.7112 9.08373 17.7397 9.03914 17.7587 8.99032C17.7777 8.94149 17.7868 8.88939 17.7855 8.83702C17.7843 8.78465 17.7727 8.73305 17.7515 8.68517C17.7302 8.6373 17.6997 8.59411 17.6616 8.55808C17.6236 8.52205 17.5788 8.4939 17.5299 8.47525C17.4809 8.4566 17.4288 8.44781 17.3764 8.4494C17.3241 8.45099 17.2725 8.46292 17.2248 8.48451C17.1771 8.50609 17.1341 8.53691 17.0983 8.57518C16.8781 8.8076 16.4069 9.28761 16.0579 9.64217C15.9823 9.57726 15.885 9.54325 15.7854 9.54693C15.6858 9.55061 15.5913 9.59171 15.5206 9.66203L14.3534 10.8293C14.2837 10.899 14.2424 10.9922 14.2376 11.0907C14.2328 11.1892 14.2648 11.286 14.3274 11.3622C12.9519 12.6928 11.3892 14.1256 9.31568 15.9591C7.09093 17.9263 4.87035 19.5796 2.72292 21.1784C2.44992 21.3817 2.17938 21.5834 1.91132 21.7833C1.90223 21.7901 1.8934 21.7973 1.88484 21.8048C1.579 22.0769 1.33197 22.4085 1.15891 22.7795C0.98586 23.1505 0.89043 23.5529 0.878478 23.9621C0.866527 24.3712 0.938307 24.7785 1.08941 25.159C1.24052 25.5394 1.46777 25.8849 1.75721 26.1744L2.70286 27.1194ZM15.8011 10.504L18.4341 13.1369L17.8286 13.7423L15.1959 11.1094L15.8011 10.504ZM1.67241 23.9846C1.67989 23.6861 1.74836 23.3923 1.87358 23.1213C1.99881 22.8503 2.17816 22.6077 2.4006 22.4086C2.66354 22.2122 2.92902 22.0143 3.19704 21.815C5.35771 20.2063 7.59193 18.5429 9.84163 16.5535C11.9283 14.7084 13.5014 13.2656 14.8877 11.9247L16.9626 13.9997C15.7946 15.2418 14.6262 16.5714 13.3945 17.9744C13.0514 18.3652 12.7044 18.7598 12.3535 19.1583C10.2905 21.4971 8.30979 23.9597 6.46687 26.4772C6.26507 26.696 6.02208 26.8728 5.75182 26.9976C5.48157 27.1223 5.18936 27.1925 4.89193 27.2042C4.5908 27.2142 4.29083 27.162 4.01081 27.0507C3.73079 26.9395 3.47674 26.7717 3.26456 26.5577L2.31878 25.612C2.10484 25.3998 1.937 25.1457 1.82578 24.8657C1.71456 24.5857 1.66234 24.2857 1.67241 23.9846Z" fill="currentColor"/>
<path d="M25.3609 6.16564C25.4261 6.24837 25.5215 6.30181 25.6261 6.31423C25.7307 6.32664 25.8359 6.29701 25.9187 6.23184L26.8607 5.49041C26.9085 5.45275 26.947 5.40461 26.9733 5.3497C26.9995 5.29479 27.0128 5.23459 27.0121 5.17373C27.0114 5.11287 26.9967 5.05298 26.9692 4.9987C26.9416 4.94442 26.902 4.89719 26.8533 4.86066L23.4459 2.30293C23.4014 2.26951 23.3504 2.24583 23.2961 2.2334C23.2419 2.22098 23.1856 2.22011 23.131 2.23083C23.0763 2.24155 23.0246 2.26364 22.9791 2.29565C22.9335 2.32766 22.8952 2.36889 22.8666 2.41666L22.2554 3.43824C22.2286 3.48301 22.2109 3.53262 22.2033 3.58423C22.1957 3.63584 22.1983 3.68844 22.211 3.73903C22.2367 3.84121 22.302 3.92898 22.3924 3.98306C22.4828 4.03714 22.591 4.05308 22.6932 4.02738C22.7953 4.00168 22.8831 3.93645 22.9372 3.84603L23.3219 3.20277L25.9633 5.1855L25.4271 5.60758C25.3861 5.63987 25.3518 5.67992 25.3263 5.72545C25.3008 5.77097 25.2845 5.82108 25.2784 5.87291C25.2722 5.92473 25.2763 5.97726 25.2905 6.02749C25.3047 6.07772 25.3286 6.12466 25.3609 6.16564Z" fill="currentColor"/>
<path d="M31.8755 8.47778C31.8273 8.45792 27.0257 6.47757 25.1034 5.07025C24.2906 4.47512 23.4881 3.841 22.712 3.22766C21.9303 2.60996 21.1219 1.97114 20.2973 1.36747C19.932 1.0975 19.4817 0.968071 19.0288 1.00287C18.5759 1.03768 18.1507 1.23438 17.8309 1.557L15.2951 4.09308C14.4964 4.89184 14.4251 5.7887 15.0994 6.55363L15.1114 6.5674C15.7138 7.3894 16.3503 8.19517 16.9662 8.97453C17.5794 9.75052 18.2135 10.5529 18.8085 11.3656C20.2158 13.2877 22.1961 18.0893 22.216 18.1377C22.2437 18.2053 22.2896 18.2639 22.3485 18.3071C22.4074 18.3504 22.477 18.3765 22.5498 18.3827C22.5595 18.3835 22.5908 18.3857 22.6425 18.3857C23.1244 18.3857 25.3821 18.1943 28.657 14.9193C32.2541 11.3223 32.1279 8.91793 32.1208 8.81731C32.1156 8.74348 32.0899 8.67258 32.0466 8.61259C32.0032 8.55259 31.944 8.5059 31.8755 8.47778ZM17.5892 8.48201C16.9758 7.70583 16.3415 6.90317 15.7462 6.09011C15.7366 6.07687 15.7193 6.05588 15.695 6.02834C15.4307 5.72846 15.2101 5.30135 15.8566 4.65485L18.3928 2.1187C18.5788 1.93092 18.8263 1.81642 19.0899 1.79614C19.3534 1.77586 19.6155 1.85117 19.8281 2.00828C20.641 2.60341 21.4434 3.23759 22.2195 3.85086C23.0013 4.46863 23.8096 5.10745 24.6343 5.71105C25.8741 6.61877 28.1663 7.7149 29.7775 8.43667C29.4585 9.54696 28.7771 11.0413 26.7783 13.0401C24.7665 15.0519 23.2787 15.7307 22.177 16.0445C21.4555 14.433 20.3579 12.1373 19.4492 10.8961C18.8456 10.0718 18.2068 9.26369 17.5892 8.48201ZM28.095 14.3574C25.3935 17.0588 23.4793 17.5058 22.8427 17.5776C22.7645 17.3915 22.6473 17.1154 22.5004 16.7779C23.6871 16.4247 25.2641 15.6776 27.3395 13.602C28.4119 12.5296 29.2415 11.4638 29.8056 10.4338C30.0998 9.90286 30.3362 9.34191 30.5109 8.76058C30.8512 8.90866 31.1295 9.02676 31.3165 9.10534C31.2471 9.74191 30.8049 11.6478 28.0953 14.3574H28.095Z" fill="currentColor"/>
  </symbol>

  <symbol id="popular-roofing" viewBox="0 0 32 22">
    <path d="M2.95221 13.5493C2.95221 13.4406 2.90902 13.3364 2.83214 13.2595C2.75526 13.1826 2.65099 13.1394 2.54227 13.1394C2.43354 13.1394 2.32927 13.1826 2.25239 13.2595C2.17551 13.3364 2.13232 13.4406 2.13232 13.5493V13.8643C2.13232 13.973 2.17551 14.0773 2.25239 14.1542C2.32927 14.2311 2.43354 14.2743 2.54227 14.2743C2.65099 14.2743 2.75526 14.2311 2.83214 14.1542C2.90902 14.0773 2.95221 13.973 2.95221 13.8643V13.5493Z" fill="#D4E1F4" fill-opacity="0.8"/>
<path d="M2.54227 14.6956C2.43354 14.6956 2.32927 14.7387 2.25239 14.8156C2.17551 14.8925 2.13232 14.9968 2.13232 15.1055V18.6248C2.13232 18.7336 2.17551 18.8378 2.25239 18.9147C2.32927 18.9916 2.43354 19.0348 2.54227 19.0348C2.65099 19.0348 2.75526 18.9916 2.83214 18.9147C2.90902 18.8378 2.95221 18.7336 2.95221 18.6248V15.1055C2.95221 14.9968 2.90902 14.8925 2.83214 14.8156C2.75526 14.7387 2.65099 14.6956 2.54227 14.6956Z" fill="#D4E1F4" fill-opacity="0.8"/>
<path d="M18.8251 12.13V20.6513H0.819821V12.54H12.7293C12.838 12.54 12.9423 12.4968 13.0192 12.4199C13.096 12.343 13.1392 12.2387 13.1392 12.13C13.1392 12.0213 13.096 11.917 13.0192 11.8401C12.9423 11.7633 12.838 11.7201 12.7293 11.7201H11.8493V9.89993C11.8493 9.79121 11.8061 9.68694 11.7292 9.61006C11.6523 9.53318 11.5481 9.48999 11.4393 9.48999H8.20559C8.09687 9.48999 7.9926 9.53318 7.91572 9.61006C7.83884 9.68694 7.79565 9.79121 7.79565 9.89993V11.7201H5.68924V9.89993C5.68924 9.79121 5.64605 9.68694 5.56917 9.61006C5.49229 9.53318 5.38802 9.48999 5.2793 9.48999H2.04555C1.93682 9.48999 1.83255 9.53318 1.75567 9.61006C1.67879 9.68694 1.6356 9.79121 1.6356 9.89993V11.7201H0.40988C0.301157 11.7201 0.196887 11.7633 0.120008 11.8401C0.0431291 11.917 -6.10352e-05 12.0213 -6.10352e-05 12.13V21.0613C-6.10352e-05 21.17 0.0431291 21.2743 0.120008 21.3511C0.196887 21.428 0.301157 21.4712 0.40988 21.4712H19.2351C19.3438 21.4712 19.4481 21.428 19.5249 21.3511C19.6018 21.2743 19.645 21.17 19.645 21.0613V12.13H18.8251ZM8.61553 10.3099H11.0294V11.7201H8.61553V10.3099ZM2.45549 10.3099H4.86936V11.7201H2.45549V10.3099Z" fill="currentColor"/>
<path d="M31.59 2.75889H30.3643V0.93875C30.3643 0.830027 30.3211 0.725757 30.2442 0.648878C30.1674 0.571999 30.0631 0.528809 29.9544 0.528809H26.7206C26.6119 0.528809 26.5076 0.571999 26.4308 0.648878C26.3539 0.725757 26.3107 0.830027 26.3107 0.93875V2.75889H24.2043V0.93875C24.2043 0.830027 24.1611 0.725757 24.0842 0.648878C24.0073 0.571999 23.903 0.528809 23.7943 0.528809H20.5606C20.4519 0.528809 20.3476 0.571999 20.2707 0.648878C20.1938 0.725757 20.1506 0.830027 20.1506 0.93875V2.75889H18.0449V0.93875C18.0449 0.830027 18.0017 0.725757 17.9248 0.648878C17.848 0.571999 17.7437 0.528809 17.635 0.528809H14.4012C14.2925 0.528809 14.1882 0.571999 14.1113 0.648878C14.0345 0.725757 13.9913 0.830027 13.9913 0.93875V2.75889H12.7649C12.6561 2.75889 12.5519 2.80208 12.475 2.87896C12.3981 2.95584 12.3549 3.06011 12.3549 3.16883V12.1001C12.3549 12.2088 12.3981 12.3131 12.475 12.39C12.5519 12.4668 12.6561 12.51 12.7649 12.51H14.984C15.0927 12.51 15.197 12.4668 15.2739 12.39C15.3508 12.3131 15.394 12.2088 15.394 12.1001C15.394 11.9914 15.3508 11.8871 15.2739 11.8102C15.197 11.7333 15.0927 11.6901 14.984 11.6901H13.1748V3.57877H31.1801V11.6901H16.9565C16.8478 11.6901 16.7435 11.7333 16.6666 11.8102C16.5898 11.8871 16.5466 11.9914 16.5466 12.1001C16.5466 12.2088 16.5898 12.3131 16.6666 12.39C16.7435 12.4668 16.8478 12.51 16.9565 12.51H31.59C31.6988 12.51 31.803 12.4668 31.8799 12.39C31.9568 12.3131 32 12.2088 32 12.1001V3.16883C32 3.06011 31.9568 2.95584 31.8799 2.87896C31.803 2.80208 31.6988 2.75889 31.59 2.75889ZM17.225 2.75889H14.8112V1.34869H17.225V2.75889ZM23.3844 2.75889H20.9705V1.34869H23.3844V2.75889ZM29.5444 2.75889H27.1306V1.34869H29.5444V2.75889Z" fill="currentColor"/>
<path d="M15.3256 4.80374C15.3256 4.69502 15.2824 4.59075 15.2055 4.51387C15.1287 4.43699 15.0244 4.3938 14.9157 4.3938C14.807 4.3938 14.7027 4.43699 14.6258 4.51387C14.5489 4.59075 14.5057 4.69502 14.5057 4.80374V5.11871C14.5057 5.22743 14.5489 5.3317 14.6258 5.40858C14.7027 5.48546 14.807 5.52865 14.9157 5.52865C15.0244 5.52865 15.1287 5.48546 15.2055 5.40858C15.2824 5.3317 15.3256 5.22743 15.3256 5.11871V4.80374Z" fill="#D4E1F4" fill-opacity="0.8"/>
<path d="M14.9157 5.94995C14.807 5.94995 14.7027 5.99314 14.6258 6.07002C14.5489 6.1469 14.5057 6.25117 14.5057 6.35989V9.87855C14.5057 9.98728 14.5489 10.0915 14.6258 10.1684C14.7027 10.2453 14.807 10.2885 14.9157 10.2885C15.0244 10.2885 15.1287 10.2453 15.2055 10.1684C15.2824 10.0915 15.3256 9.98728 15.3256 9.87855V6.35989C15.3256 6.25117 15.2824 6.1469 15.2055 6.07002C15.1287 5.99314 15.0244 5.94995 14.9157 5.94995Z" fill="#D4E1F4" fill-opacity="0.8"/>
  </symbol>

  <symbol id="popular-pestControl" viewBox="0 0 16 32">
    <path d="M3.35132 29.2523V13.8034C3.35183 13.3566 3.52954 12.9282 3.84546 12.6123C4.16139 12.2964 4.58973 12.1187 5.03651 12.1182H2.45839C2.0116 12.1187 1.58326 12.2964 1.26734 12.6123C0.951416 12.9282 0.773705 13.3566 0.773193 13.8034V29.2523C0.773705 29.6991 0.951416 30.1274 1.26734 30.4434C1.58326 30.7593 2.0116 30.937 2.45839 30.9375H5.03651C4.58973 30.937 4.16139 30.7593 3.84546 30.4434C3.52954 30.1274 3.35183 29.6991 3.35132 29.2523Z" fill="#D4E1F4"/>
    <path d="M5.64328 8.12109H4.35422C4.24637 8.12121 4.14297 8.1641 4.0667 8.24036C3.99043 8.31662 3.94752 8.42001 3.94739 8.52786V9.47532H5.23645V8.52786C5.23659 8.42001 5.2795 8.31662 5.35576 8.24036C5.43203 8.1641 5.53543 8.12121 5.64328 8.12109Z" fill="#D4E1F4"/>
    <path d="M3.94739 10.249H5.23645V11.3447H3.94739V10.249Z" fill="#D4E1F4"/>
    <path d="M15.8863 13.8036C15.8855 13.1517 15.6263 12.5268 15.1654 12.0659C14.7044 11.605 14.0795 11.3457 13.4276 11.3449H12.7122V8.52835C12.7119 8.21537 12.5875 7.91529 12.3662 7.69398C12.1449 7.47267 11.8448 7.3482 11.5318 7.34789H8.79328V3.91138C8.79328 3.80881 8.75253 3.71045 8.68001 3.63793C8.60749 3.5654 8.50912 3.52466 8.40656 3.52466C8.30399 3.52466 8.20563 3.5654 8.13311 3.63793C8.06058 3.71045 8.01984 3.80881 8.01984 3.91138V7.34789H7.1755V3.91138C7.1755 3.80881 7.13476 3.71045 7.06223 3.63793C6.98971 3.5654 6.89135 3.52466 6.78878 3.52466C6.68622 3.52466 6.58786 3.5654 6.51533 3.63793C6.44281 3.71045 6.40207 3.80881 6.40207 3.91138V7.34789H4.35433C4.04142 7.34823 3.74142 7.47268 3.52015 7.69393C3.29888 7.91519 3.17442 8.21518 3.17406 8.52809V11.3447H2.45863C1.80679 11.3454 1.18185 11.6047 0.720927 12.0656C0.260003 12.5265 0.00073355 13.1515 0 13.8033V29.2525C0.000733486 29.9044 0.259985 30.5293 0.720881 30.9902C1.18178 31.4511 1.80668 31.7104 2.4585 31.7112H13.4276C14.0795 31.7104 14.7044 31.4512 15.1654 30.9902C15.6263 30.5293 15.8855 29.9044 15.8863 29.2525V13.8036ZM4.35433 8.12133H11.5318C11.6397 8.12145 11.7431 8.16434 11.8193 8.2406C11.8956 8.31685 11.9385 8.42025 11.9386 8.52809V9.47555H3.9475V8.52809C3.94763 8.42024 3.99054 8.31685 4.06681 8.24059C4.14308 8.16434 4.24648 8.12145 4.35433 8.12133ZM3.9475 10.2492H11.9386V11.3449H3.9475V10.2492ZM15.1128 29.2525C15.1123 29.6993 14.9346 30.1277 14.6187 30.4436C14.3028 30.7595 13.8744 30.9372 13.4276 30.9377H2.4585C2.01172 30.9372 1.58338 30.7595 1.26746 30.4436C0.951532 30.1277 0.77382 29.6993 0.773309 29.2525V13.8036C0.77382 13.3568 0.951532 12.9285 1.26746 12.6125C1.58338 12.2966 2.01172 12.1189 2.4585 12.1184H13.4276C13.8744 12.1189 14.3028 12.2966 14.6187 12.6125C14.9346 12.9285 15.1123 13.3568 15.1128 13.8036V29.2525Z" fill="currentColor"/>
    <path d="M3.73285 24.1046C3.73285 25.2212 4.17642 26.2921 4.96597 27.0816C5.75552 27.8712 6.82639 28.3147 7.94298 28.3147C9.05958 28.3147 10.1304 27.8712 10.92 27.0816C11.7096 26.2921 12.1531 25.2212 12.1531 24.1046V18.9509C12.1531 17.8343 11.7096 16.7634 10.92 15.9738C10.1304 15.1843 9.05958 14.7407 7.94298 14.7407C6.82639 14.7407 5.75552 15.1843 4.96597 15.9738C4.17642 16.7634 3.73285 17.8343 3.73285 18.9509V24.1046ZM4.50629 18.9509C4.50629 18.0394 4.86836 17.1653 5.51287 16.5207C6.15738 15.8762 7.03152 15.5142 7.94298 15.5142C8.85445 15.5142 9.72859 15.8762 10.3731 16.5207C11.0176 17.1653 11.3797 18.0394 11.3797 18.9509V24.1046C11.3797 25.0161 11.0176 25.8902 10.3731 26.5347C9.72859 27.1792 8.85445 27.5413 7.94298 27.5413C7.03152 27.5413 6.15738 27.1792 5.51287 26.5347C4.86836 25.8902 4.50629 25.0161 4.50629 24.1046V18.9509Z" fill="currentColor"/>
    <path d="M12.0416 4.04272C12.0475 4.04272 12.0532 4.04427 12.059 4.04427C12.0812 4.04427 12.1033 4.0424 12.1251 4.03866L14.436 3.64079C14.8071 3.59981 15.1508 3.42565 15.4033 3.15058C15.6558 2.87552 15.8 2.51822 15.8091 2.14495C15.8182 1.77168 15.6917 1.40776 15.4529 1.12068C15.2142 0.833605 14.8794 0.642844 14.5108 0.583777L12.2259 0.0114334C12.1753 -0.00119656 12.1227 -0.00338961 12.0712 0.00498805C12.0518 0.00188535 12.0322 0.000247893 12.0126 8.95998e-05H6.50568C5.96935 8.95998e-05 5.45499 0.213144 5.07575 0.592383C4.69651 0.971622 4.48346 1.48598 4.48346 2.02231C4.48346 2.55863 4.69651 3.07299 5.07575 3.45223C5.45499 3.83147 5.96935 4.04452 6.50568 4.04452H9.10372C9.30881 4.97059 9.75805 5.66829 10.4433 6.11953C11.1286 6.57076 11.9204 6.68568 12.5484 6.68568C12.9254 6.68752 13.3015 6.64655 13.6694 6.56354C13.7609 6.54054 13.8408 6.48488 13.8942 6.40703C13.9475 6.32919 13.9705 6.23453 13.9589 6.14089C13.9473 6.04725 13.9018 5.96109 13.8311 5.89863C13.7604 5.83617 13.6693 5.80172 13.5749 5.80177C13.0736 5.80102 12.5884 5.62487 12.2033 5.30387C11.8182 4.98287 11.5577 4.53725 11.4667 4.04427H12.012C12.022 4.04427 12.0318 4.04349 12.0416 4.04272ZM14.378 1.34587C14.5638 1.37304 14.7332 1.46718 14.8544 1.61057C14.9756 1.75396 15.0401 1.9367 15.0359 2.12439C15.0318 2.31208 14.9591 2.49175 14.8316 2.62959C14.7042 2.76743 14.5307 2.85392 14.344 2.87277C14.335 2.87367 14.326 2.87489 14.3171 2.87637L12.3988 3.2067V0.852095L14.34 1.33839C14.3525 1.34149 14.3653 1.344 14.378 1.34587ZM11.5872 5.79095C11.3311 5.72328 11.0875 5.61528 10.8654 5.471C10.3972 5.16162 10.0739 4.68216 9.9001 4.04427H10.6842C10.7736 4.71353 11.0928 5.33094 11.587 5.79095H11.5872ZM11.6255 3.27083H6.50568C6.17448 3.27083 5.85685 3.13926 5.62266 2.90507C5.38846 2.67088 5.2569 2.35325 5.2569 2.02205C5.2569 1.69085 5.38846 1.37322 5.62266 1.13903C5.85685 0.904837 6.17448 0.773269 6.50568 0.773269H11.6251L11.6255 3.27083Z" fill="currentColor"/>
    <path d="M6.65393 20.6252H9.23206C9.33462 20.6252 9.43298 20.5845 9.50551 20.512C9.57803 20.4395 9.61877 20.3411 9.61877 20.2385C9.61877 20.136 9.57803 20.0376 9.50551 19.9651C9.43298 19.8926 9.33462 19.8518 9.23206 19.8518H6.65393C6.55137 19.8518 6.453 19.8926 6.38048 19.9651C6.30796 20.0376 6.26721 20.136 6.26721 20.2385C6.26721 20.3411 6.30796 20.4395 6.38048 20.512C6.453 20.5845 6.55137 20.6252 6.65393 20.6252Z" fill="currentColor"/>
    <path d="M6.65393 21.9143H9.23206C9.33462 21.9143 9.43298 21.8736 9.50551 21.801C9.57803 21.7285 9.61877 21.6302 9.61877 21.5276C9.61877 21.425 9.57803 21.3267 9.50551 21.2541C9.43298 21.1816 9.33462 21.1409 9.23206 21.1409H6.65393C6.55137 21.1409 6.453 21.1816 6.38048 21.2541C6.30796 21.3267 6.26721 21.425 6.26721 21.5276C6.26721 21.6302 6.30796 21.7285 6.38048 21.801C6.453 21.8736 6.55137 21.9143 6.65393 21.9143Z" fill="currentColor"/>
    <path d="M6.65393 23.2034H9.23206C9.33462 23.2034 9.43298 23.1626 9.50551 23.0901C9.57803 23.0176 9.61877 22.9192 9.61877 22.8167C9.61877 22.7141 9.57803 22.6157 9.50551 22.5432C9.43298 22.4707 9.33462 22.4299 9.23206 22.4299H6.65393C6.55137 22.4299 6.453 22.4707 6.38048 22.5432C6.30796 22.6157 6.26721 22.7141 6.26721 22.8167C6.26721 22.9192 6.30796 23.0176 6.38048 23.0901C6.453 23.1626 6.55137 23.2034 6.65393 23.2034Z" fill="currentColor"/>
  </symbol>

  <symbol id="popular-cooking" viewBox="0 0 28 27">
    <path d="M6.29355 4.15186L6.23715 4.1857C4.81318 5.34589 3.69329 6.83553 2.97435 8.52575C2.31277 10.0841 1.94277 11.9403 1.93939 13.7485H1.87453C1.46736 13.7485 1.07687 13.9102 0.788954 14.1981C0.501042 14.4861 0.339294 14.8766 0.339294 15.2837C0.339294 15.6909 0.501042 16.0814 0.788954 16.3693C1.07687 16.6572 1.46736 16.819 1.87453 16.819H3.59081C3.18364 16.819 2.79315 16.6572 2.50524 16.3693C2.21732 16.0814 2.05558 15.6909 2.05558 15.2837C2.05558 14.8766 2.21732 14.4861 2.50524 14.1981C2.79315 13.9102 3.18364 13.7485 3.59081 13.7485H3.65567C3.65906 11.9403 4.02905 10.0841 4.69063 8.52575C4.71695 8.46413 4.74365 8.4028 4.77072 8.34177C5.22096 7.33504 5.82575 6.40484 6.5632 5.58484H6.29355V4.15186Z" fill="#D4E1F4"/>
    <path d="M9.15955 2.44553H9.22644V3.41664L9.75734 3.09578C10.4373 2.68386 11.1609 2.34889 11.9149 2.09703V1.6875C10.9689 1.82673 10.0436 2.08131 9.15955 2.44553Z" fill="#D4E1F4"/>
    <path d="M25.1879 20.4733H23.9358L23.9369 20.3234C23.9385 20.094 23.8947 19.8666 23.8081 19.6542C23.7214 19.4418 23.5936 19.2486 23.432 19.0858C23.2704 18.923 23.0781 18.7938 22.8663 18.7057C22.6546 18.6175 22.4274 18.5721 22.198 18.572H5.04311C4.5821 18.5725 4.14012 18.7559 3.81414 19.0819C3.48815 19.4079 3.30479 19.8499 3.30427 20.3109V20.4733H2.06344C1.97369 20.4733 1.88762 20.509 1.82415 20.5724C1.76069 20.6359 1.72504 20.722 1.72504 20.8117V24.9854C1.72504 25.0751 1.76069 25.1612 1.82415 25.2247C1.88762 25.2881 1.97369 25.3238 2.06344 25.3238H3.30584C3.32257 25.7736 3.51283 26.1994 3.83671 26.5119C4.16059 26.8244 4.59292 26.9994 5.043 27H11.5022C11.5668 27 11.6301 26.9815 11.6845 26.9467C11.7389 26.9119 11.7823 26.8622 11.8094 26.8035L12.269 25.8088C12.3838 25.5604 12.5667 25.3496 12.7965 25.2009C13.0262 25.0522 13.2934 24.9716 13.567 24.9686C13.8407 24.9655 14.1096 25.0401 14.3426 25.1836C14.5756 25.3272 14.7631 25.5338 14.8835 25.7796L15.3889 26.8105C15.4167 26.8674 15.46 26.9153 15.5137 26.9488C15.5674 26.9823 15.6294 27 15.6927 27H19.3222C19.4119 27 19.498 26.9644 19.5614 26.9009C19.6249 26.8374 19.6606 26.7514 19.6606 26.6616C19.6606 26.5719 19.6249 26.4858 19.5614 26.4223C19.498 26.3589 19.4119 26.3232 19.3222 26.3232H15.9037L15.4913 25.4817C15.3146 25.1211 15.0394 24.8179 14.6975 24.6073C14.3555 24.3966 13.9609 24.2873 13.5593 24.2918C13.1578 24.2963 12.7657 24.4145 12.4286 24.6327C12.0915 24.851 11.8231 25.1603 11.6546 25.5248L11.2857 26.3232H5.04311C4.76147 26.3228 4.49148 26.2107 4.29239 26.0115C4.09329 25.8123 3.98133 25.5423 3.98108 25.2606V20.3109C3.98139 20.0293 4.09338 19.7593 4.29249 19.5602C4.49159 19.3611 4.76154 19.2491 5.04311 19.2488H22.198C22.3382 19.2489 22.4769 19.2766 22.6063 19.3305C22.7356 19.3844 22.853 19.4633 22.9517 19.5628C23.0505 19.6622 23.1285 19.7802 23.1814 19.91C23.2344 20.0397 23.2611 20.1786 23.2601 20.3188L23.224 25.2684C23.2212 25.5485 23.1082 25.8163 22.9094 26.0137C22.7106 26.2111 22.4421 26.3223 22.1619 26.3231H20.751C20.6612 26.3231 20.5751 26.3588 20.5117 26.4222C20.4482 26.4857 20.4126 26.5718 20.4126 26.6615C20.4126 26.7513 20.4482 26.8373 20.5117 26.9008C20.5751 26.9643 20.6612 26.9999 20.751 26.9999H22.1619C22.6118 26.9986 23.0438 26.8234 23.3675 26.511C23.6912 26.1986 23.8817 25.7732 23.8991 25.3237H25.1879C25.2776 25.3237 25.3637 25.288 25.4272 25.2246C25.4906 25.1611 25.5263 25.075 25.5263 24.9853V20.8116C25.5262 20.7219 25.4906 20.6358 25.4271 20.5724C25.3637 20.5089 25.2776 20.4733 25.1879 20.4733ZM2.40185 21.1501H3.30427V24.647H2.40185V21.1501ZM24.8495 24.647H23.9054L23.9309 21.1501H24.8495V24.647Z" fill="currentColor"/>
    <path d="M6.54 20.0354C6.45025 20.0354 6.36418 20.0711 6.30072 20.1345C6.23725 20.198 6.2016 20.2841 6.2016 20.3738C6.2016 20.4636 6.23725 20.5496 6.30072 20.6131C6.36418 20.6766 6.45025 20.7122 6.54 20.7122H10.774C10.8638 20.7122 10.9499 20.6766 11.0133 20.6131C11.0768 20.5496 11.1124 20.4636 11.1124 20.3738C11.1124 20.2841 11.0768 20.198 11.0133 20.1345C10.9499 20.0711 10.8638 20.0354 10.774 20.0354H6.54Z" fill="currentColor"/>
    <path d="M5.14859 20.0354C5.05884 20.0354 4.97276 20.0711 4.9093 20.1345C4.84583 20.198 4.81018 20.2841 4.81018 20.3738C4.81018 20.4636 4.84583 20.5496 4.9093 20.6131C4.97276 20.6766 5.05884 20.7122 5.14859 20.7122H5.54621C5.63597 20.7122 5.72204 20.6766 5.7855 20.6131C5.84897 20.5496 5.88462 20.4636 5.88462 20.3738C5.88462 20.2841 5.84897 20.198 5.7855 20.1345C5.72204 20.0711 5.63597 20.0354 5.54621 20.0354H5.14859Z" fill="currentColor"/>
    <path d="M25.6463 13.4302C25.6054 11.6798 25.2345 9.9008 24.5919 8.38717C23.8709 6.6973 22.761 5.20157 21.3526 4.02173V3.49461C21.3527 3.12316 21.2444 2.75977 21.0408 2.44906C20.8373 2.13836 20.5474 1.89386 20.2068 1.74561C19.8663 1.59735 19.4898 1.55179 19.1237 1.61453C18.7576 1.67726 18.4178 1.84555 18.146 2.09874C17.2801 1.74953 16.3765 1.5021 15.4535 1.36141C15.3338 0.969217 15.0919 0.625554 14.7631 0.380622C14.4342 0.13569 14.0357 0.00232171 13.6257 6.87332e-08C13.2149 -0.00011021 12.8151 0.132484 12.4858 0.378029C12.1565 0.623574 11.9154 0.96893 11.7983 1.36265C10.8758 1.50386 9.97285 1.75181 9.10761 2.1015C8.83605 1.84782 8.49629 1.679 8.13009 1.6158C7.76389 1.55259 7.3872 1.59776 7.04632 1.74575C6.70544 1.89374 6.41523 2.1381 6.21135 2.4488C6.00747 2.7595 5.89881 3.12299 5.89873 3.49461V4.02878C4.49269 5.20991 3.38421 6.70521 2.66283 8.39388C2.02065 9.9065 1.64908 11.6827 1.60554 13.4298C1.13668 13.4976 0.710907 13.7404 0.413918 14.1095C0.116929 14.4786 -0.0292297 14.9465 0.00486085 15.419C0.0389514 15.8915 0.25076 16.3336 0.597655 16.6562C0.944551 16.9788 1.40078 17.1581 1.87452 17.1579H25.3768C25.8504 17.1579 26.3063 16.9786 26.653 16.6561C26.9997 16.3336 27.2114 15.8917 27.2456 15.4194C27.2797 14.9471 27.1338 14.4794 26.837 14.1104C26.5403 13.7413 26.1149 13.4983 25.6463 13.4303V13.4302ZM18.4935 2.7143C18.5192 2.68303 18.5463 2.65306 18.575 2.62451C18.7471 2.45237 18.9663 2.33513 19.2051 2.28762C19.4438 2.24011 19.6912 2.26447 19.9161 2.35761C20.141 2.45075 20.3332 2.60848 20.4684 2.81087C20.6036 3.01326 20.6758 3.2512 20.6758 3.49461V6.71849C20.6756 7.04462 20.546 7.35736 20.3155 7.58808C20.085 7.81879 19.7724 7.94865 19.4463 7.94916C19.435 7.94916 19.4237 7.94916 19.4093 7.94871C19.0888 7.94087 18.784 7.80764 18.5606 7.57762C18.3372 7.3476 18.2129 7.03914 18.2145 6.71849V3.49461C18.2148 3.21029 18.3132 2.93479 18.4931 2.71464L18.4935 2.7143ZM12.395 1.90748C12.395 1.84446 12.3998 1.78153 12.4092 1.71922C12.4544 1.42896 12.6018 1.1644 12.8248 0.973256C13.0479 0.782114 13.3319 0.676978 13.6257 0.676812C13.919 0.67818 14.2024 0.783708 14.4252 0.974578C14.648 1.16545 14.7957 1.42925 14.8421 1.71893C14.8515 1.78134 14.8563 1.84436 14.8563 1.90748V6.71849C14.8561 7.04462 14.7266 7.35736 14.4961 7.58808C14.2655 7.81879 13.9529 7.94865 13.6268 7.94916C13.6155 7.94916 13.6042 7.94916 13.5899 7.94871C13.2693 7.94087 12.9646 7.80764 12.7412 7.57762C12.5178 7.3476 12.3935 7.03914 12.395 6.71849V1.90748ZM6.57554 3.49461C6.57544 3.24061 6.65396 2.99281 6.80032 2.78523C6.94668 2.57764 7.1537 2.42044 7.39297 2.33522C7.63224 2.24999 7.89202 2.24091 8.13666 2.30923C8.38129 2.37755 8.59879 2.51992 8.75928 2.71678L8.75978 2.7174C8.94007 2.93617 9.0381 3.21113 9.03688 3.49461V6.71849C9.03666 7.04462 8.90708 7.35735 8.67658 7.58806C8.44607 7.81877 8.13347 7.94864 7.80734 7.94916C7.79634 7.94916 7.78478 7.94916 7.7704 7.94871C7.44984 7.94087 7.14514 7.80764 6.92173 7.57762C6.69832 7.3476 6.57403 7.03914 6.57554 6.71849V3.49461ZM26.2235 16.1303C26.1125 16.2418 25.9806 16.3301 25.8352 16.3903C25.6899 16.4505 25.5341 16.4813 25.3768 16.4809H1.87452C1.5571 16.4809 1.25268 16.3548 1.02823 16.1304C0.80378 15.906 0.677685 15.6015 0.677685 15.2841C0.677685 14.9667 0.80378 14.6623 1.02823 14.4378C1.25268 14.2134 1.5571 14.0873 1.87452 14.0873H5.2971C5.38685 14.0873 5.47292 14.0516 5.53639 13.9882C5.59985 13.9247 5.6355 13.8386 5.6355 13.7489C5.6355 13.6591 5.59985 13.5731 5.53639 13.5096C5.47292 13.4461 5.38685 13.4105 5.2971 13.4105H2.28286C2.32798 11.7592 2.68054 10.0841 3.28578 8.6584C3.88796 7.24808 4.77792 5.97901 5.89873 4.93238V6.71849C5.89624 7.21509 6.0885 7.69288 6.43426 8.04935C6.78002 8.40581 7.25173 8.61254 7.74817 8.62518C7.76814 8.62592 7.78811 8.62597 7.80734 8.62597C8.31291 8.62526 8.79755 8.42402 9.15494 8.06642C9.51233 7.70882 9.71328 7.22406 9.71369 6.71849V3.49461C9.71335 3.20716 9.64811 2.92349 9.52283 2.66478C10.2326 2.39066 10.9681 2.18849 11.7182 2.06129V6.71849C11.7157 7.21509 11.908 7.69287 12.2537 8.04933C12.5995 8.40579 13.0712 8.61253 13.5676 8.62518C13.5876 8.62592 13.6076 8.62597 13.6268 8.62597C14.1324 8.62524 14.617 8.424 14.9744 8.06641C15.3318 7.70881 15.5327 7.22406 15.5332 6.71849V2.05977C16.2836 2.18663 17.0195 2.38844 17.7297 2.66218C17.6037 2.92161 17.5381 3.20619 17.5376 3.49461V6.71849C17.5352 7.21508 17.7274 7.69286 18.0732 8.04933C18.4189 8.40579 18.8906 8.61253 19.387 8.62518C19.407 8.62592 19.427 8.62597 19.4463 8.62597C19.9518 8.62524 20.4365 8.424 20.7938 8.06641C21.1512 7.70881 21.3522 7.22406 21.3526 6.71849V4.92415C22.4756 5.97022 23.3668 7.24003 23.9689 8.65169C24.5749 10.0783 24.9261 11.7558 24.969 13.4105H6.91395C6.86951 13.4105 6.8255 13.4192 6.78444 13.4362C6.74339 13.4532 6.70608 13.4782 6.67466 13.5096C6.64323 13.541 6.61831 13.5783 6.6013 13.6194C6.58429 13.6604 6.57554 13.7044 6.57554 13.7489C6.57554 13.7933 6.58429 13.8373 6.6013 13.8784C6.61831 13.9194 6.64323 13.9567 6.67466 13.9882C6.70608 14.0196 6.74339 14.0445 6.78444 14.0615C6.8255 14.0785 6.86951 14.0873 6.91395 14.0873H25.3768C25.6135 14.0873 25.8448 14.1575 26.0416 14.289C26.2384 14.4205 26.3918 14.6074 26.4824 14.826C26.573 15.0447 26.5968 15.2853 26.5507 15.5174C26.5046 15.7496 26.3908 15.9628 26.2235 16.1303Z" fill="currentColor"/>
  </symbol>
 <symbol id="lock-icon" viewBox="0 0 384 512">
      <path id="Forma_1"  fill="currentColor" data-name="Forma 1" class="cls-1" d="M373.333,192h-32V149.333C341.333,66.99,274.344,0,192,0S42.667,66.99,42.667,149.333V192h-32A10.661,10.661,0,0,0,0,202.667V469.334A42.708,42.708,0,0,0,42.667,512H341.334A42.708,42.708,0,0,0,384,469.333V202.667A10.661,10.661,0,0,0,373.333,192Zm-149.4,222.823a10.669,10.669,0,0,1-10.6,11.844H170.667a10.669,10.669,0,0,1-10.6-11.844l6.729-60.51A42.2,42.2,0,0,1,149.334,320a42.667,42.667,0,0,1,85.334,0,42.2,42.2,0,0,1-17.458,34.313ZM277.333,192H106.667V149.333a85.333,85.333,0,0,1,170.666,0V192Z"/>
    </symbol>

    <symbol id="arrow-right-icon" viewBox="0 0 494.148 494.148">
	<g>
		<path d="M405.284,201.188L130.804,13.28C118.128,4.596,105.356,0,94.74,0C74.216,0,61.52,16.472,61.52,44.044v406.124
			c0,27.54,12.68,43.98,33.156,43.98c10.632,0,23.2-4.6,35.904-13.308l274.608-187.904c17.66-12.104,27.44-28.392,27.44-45.884
			C432.632,229.572,422.964,213.288,405.284,201.188z"  fill="currentColor" />
	</g> 
    </symbol>

    <symbol id="service-step-icon" viewBox="0 0 43 43">
        <path d="M28.8047 13.458C28.3636 13.458 28.0056 13.8144 28.0056 14.2552C28.0056 14.6957 28.3636 15.0527 28.8047 15.0527C29.2466 15.0527 29.6037 14.6957 29.6037 14.2552C29.6037 13.8144 29.2466 13.458 28.8047 13.458Z" fill="currentColor"/>
<path d="M14.2871 27.9473C13.8451 27.9473 13.488 28.3046 13.488 28.7447C13.488 29.1858 13.8451 29.5422 14.2871 29.5422C14.7281 29.5422 15.0861 29.1858 15.0861 28.7447C15.0861 28.3046 14.7281 27.9473 14.2871 27.9473Z" fill="currentColor"/>
<path d="M41.0064 5.99108C40.7368 5.92846 40.4534 6.00977 40.2586 6.20602L36.946 9.53829H35.3579L33.6097 7.73058V6.12347L36.8749 2.81612C37.0681 2.62049 37.1467 2.33919 37.0827 2.0716C37.0191 1.80432 36.8218 1.58876 36.5609 1.50091C35.7406 1.22491 34.8823 1.08504 34.0092 1.08504C31.4068 1.08504 29.0424 2.29621 27.5224 4.40796C26.0997 6.38483 25.6612 8.80748 26.2895 11.1261L20.4038 17.0003L10.5981 7.19134V5.26618C10.5981 4.98613 10.4508 4.72633 10.2101 4.58241L4.56035 1.19874C4.24573 1.01027 3.8434 1.0598 3.58434 1.31867L1.32456 3.57373C1.0655 3.83259 1.01587 4.23414 1.20439 4.54814L4.59406 10.1869C4.73826 10.427 4.99826 10.5738 5.27886 10.5741L7.20716 10.5747L17.0138 20.3837L11.1505 26.2355C8.8274 25.6087 6.39876 26.047 4.41708 27.4678C2.30245 28.984 1.08984 31.3431 1.08984 33.9405C1.08984 34.8115 1.22999 35.6684 1.50653 36.4868C1.59486 36.7488 1.81303 36.9466 2.08271 37.0089C2.3527 37.0715 2.63579 36.9902 2.83087 36.7939L6.14313 33.462H7.73996L9.55933 35.2778V36.8715L6.22085 40.1773C6.02421 40.372 5.94275 40.6545 6.00548 40.924C6.06791 41.1932 6.26611 41.4109 6.5286 41.4991C7.34855 41.7751 8.20721 41.9149 9.0799 41.9149C11.6824 41.9149 14.0458 40.7044 15.5652 38.5939C16.9888 36.6161 17.428 34.1925 16.8 31.8739L21.509 27.1741L22.5877 28.3435L22.0927 28.8372C21.7805 29.1488 21.7805 29.6537 22.0927 29.9652C22.4048 30.2764 22.9104 30.2764 23.2229 29.9652L23.6711 29.5179L33.792 40.4901C33.7995 40.4982 33.8073 40.506 33.8151 40.5137C35.6878 42.3828 38.722 42.3834 40.5957 40.5134C42.4641 38.6478 42.4641 35.6121 40.5957 33.7464C40.5876 33.7383 40.5791 33.7305 40.5707 33.7227L29.5599 23.6409L30.0031 23.1985C30.3153 22.8873 30.3153 22.3823 30.0031 22.0708C29.691 21.7593 29.1854 21.7593 28.8729 22.0708L28.3813 22.5618L27.2074 21.4864L31.9392 16.7639C32.6119 16.9433 33.306 17.0343 34.0092 17.0343C38.4152 17.0343 41.9993 13.4568 41.9993 9.05981C41.9993 8.1885 41.8592 7.33184 41.5826 6.51318C41.4943 6.25119 41.2761 6.05338 41.0064 5.99108ZM8.10421 9.21401C7.95439 9.06417 7.75119 8.98785 7.53895 8.98785L5.73175 8.98723L2.89579 4.26155L4.2732 2.88684L9 5.71788V7.52155C9 7.73276 9.08396 7.93524 9.23347 8.08477L19.2739 18.1283L18.1437 19.256L8.10421 9.21401ZM28.4288 24.7698L39.477 34.8856C40.7112 36.1304 40.7074 38.1459 39.4655 39.3861C38.2207 40.6284 36.2057 40.6321 34.9559 39.397L24.8019 28.389L28.4288 24.7698ZM27.2502 23.6904L23.7185 27.2146L22.6398 26.0451L26.0763 22.615L27.2502 23.6904ZM34.0092 15.4393C33.3104 15.4393 32.6231 15.3275 31.967 15.1069C31.6796 15.0107 31.3618 15.0848 31.1471 15.2988C27.1413 19.2968 18.5098 27.9111 15.3314 31.0836C15.1167 31.2979 15.0421 31.615 15.1392 31.9022C15.8034 33.8707 15.4856 35.9703 14.2671 37.6634C13.052 39.3515 11.1611 40.32 9.0799 40.32C8.84612 40.32 8.61359 40.3072 8.38324 40.2826L10.9211 37.7693C11.0722 37.6198 11.1574 37.416 11.1574 37.2033V34.9473C11.1574 34.7358 11.0731 34.533 10.9233 34.3834L8.63575 32.1004C8.48593 31.9508 8.28274 31.8667 8.07081 31.8667H5.81041C5.59723 31.8667 5.3931 31.9518 5.24296 32.1025L2.72506 34.6355C2.70009 34.4056 2.68761 34.1735 2.68761 33.9402C2.68761 31.8627 3.65769 29.9758 5.3494 28.7631C7.04548 27.5469 9.14951 27.2295 11.1221 27.8927C11.4096 27.9896 11.7273 27.9152 11.9421 27.7008C11.9861 27.6572 27.7465 11.9273 27.7577 11.9161C27.9725 11.7018 28.0467 11.385 27.95 11.0977C27.2855 9.12928 27.6026 7.03029 28.8202 5.33846C30.0362 3.6488 31.9274 2.67999 34.0089 2.67999C34.2499 2.67999 34.4893 2.69339 34.7265 2.71955L32.2414 5.2369C32.0941 5.38612 32.0117 5.58704 32.0117 5.79638V8.05237C32.0117 8.25922 32.0919 8.45765 32.2358 8.60624L34.4434 10.8893C34.5939 11.0451 34.8014 11.1329 35.0183 11.1329H37.2787C37.4916 11.1329 37.6957 11.0482 37.8459 10.8971L40.3638 8.36451C40.3887 8.59441 40.4012 8.82648 40.4012 9.05981C40.4012 12.5774 37.5337 15.4393 34.0092 15.4393Z" fill="currentColor" stroke="currentColor" stroke-width="0.8"/>
<path d="M25.9791 15.9465L15.9802 25.9259C15.6684 26.2371 15.6684 26.7421 15.9802 27.0536C16.2923 27.3651 16.7983 27.3651 17.1104 27.0536L27.1093 17.0742C27.4214 16.763 27.4214 16.258 27.1093 15.9465C26.7972 15.635 26.2912 15.635 25.9791 15.9465Z" fill="currentColor"/>
<path d="M36.0773 37.1308C36.3894 37.4414 36.8953 37.4414 37.2075 37.1289C37.519 36.8171 37.518 36.3121 37.2056 36.0012L30.0033 28.8361C29.6909 28.5252 29.1846 28.5261 28.8735 28.838C28.5616 29.1501 28.5626 29.6548 28.875 29.9657L36.0773 37.1308Z" fill="currentColor"/>
    </symbol>

    <symbol id="address-step-icon" viewBox="0 0 31 44">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.5006 20.0086C13.1902 20.0086 11.3109 18.0758 11.3109 15.7001C11.3109 13.3243 13.1902 11.3915 15.5006 11.3915C17.8111 11.3915 19.6912 13.3243 19.6912 15.7001C19.6912 18.0758 17.8111 20.0086 15.5006 20.0086ZM15.5006 8.10369C11.3776 8.10369 8.023 11.5113 8.023 15.7001C8.023 19.8889 11.3776 23.2965 15.5006 23.2965C19.624 23.2965 22.9791 19.8889 22.9791 15.7001C22.9791 11.5113 19.624 8.10369 15.5006 8.10369ZM15.4987 38.579C14.2291 37.1699 12.223 34.8214 10.2249 31.9878C5.99392 25.9874 3.75769 20.6079 3.75769 16.4309C3.75769 4.67159 12.7453 3.75756 15.5001 3.75756C26.3957 3.75756 27.2425 13.4577 27.2425 16.4309C27.2425 24.7009 18.8289 34.8759 15.4987 38.579ZM26.0442 3.72845C23.3463 1.32455 19.6014 0 15.5 0C11.3986 0 7.65371 1.32455 4.95577 3.72845C1.71345 6.61803 0 11.0102 0 16.4309C0 28.2382 13.5879 42.0736 14.1661 42.6565C14.5188 43.0125 14.9993 43.2121 15.5 43.2121C16.0007 43.2121 16.4812 43.0125 16.8339 42.6565C17.4121 42.0736 31 28.2382 31 16.4309C31 11.0102 29.2865 6.61803 26.0442 3.72845Z" fill="currentColor"/>
    </symbol>

    <symbol id="time-step-icon" viewBox="0 0 39 39">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M26.5495 24.0885C27.2558 24.7961 27.2549 25.9417 26.5473 26.6479C26.1939 27.0008 25.7315 27.1773 25.2687 27.1773C24.8049 27.1773 24.3416 26.9999 23.9883 26.6461L18.7165 21.3652C18.3776 21.0259 18.1876 20.5658 18.1876 20.0862V10.3461C18.1876 9.34668 18.9979 8.53636 19.9973 8.53636C20.9967 8.53636 21.8071 9.34668 21.8071 10.3461V19.3374L26.5495 24.0885ZM19.9969 34.7059C11.9521 34.7059 5.40714 28.1473 5.40714 20.0862C5.40714 12.0251 11.9521 5.46705 19.9969 5.46705C28.0417 5.46705 34.5871 12.0251 34.5871 20.0862C34.5871 28.1473 28.0417 34.7059 19.9969 34.7059ZM4.61543 7.189C4.6005 6.34972 5.11357 5.46883 6.1406 4.56983C7.07986 3.83643 7.9499 3.53284 8.72855 3.66812C9.38187 3.78168 9.95782 4.19566 10.384 4.60648C8.47926 5.7973 6.8084 7.3288 5.45923 9.11819C5.0923 8.67797 4.62946 7.97217 4.61543 7.189ZM31.2668 3.66812C32.0436 3.53329 32.9155 3.83688 33.8547 4.56938C34.875 5.46249 35.3885 6.33796 35.3803 7.17135C35.3731 7.93552 34.9274 8.65127 34.537 9.12045C33.1878 7.33015 31.5165 5.7982 29.6113 4.60648C30.037 4.19566 30.6134 3.78168 31.2668 3.66812ZM36.4668 12.3151C36.9862 11.8677 38.9502 9.99728 38.9991 7.25325C39.0343 5.28378 38.0906 3.45096 36.1944 1.8068C36.1736 1.7887 36.1523 1.77105 36.1301 1.75386C33.8774 -0.0251271 31.8817 -0.121496 30.6045 0.109699C28.3803 0.512822 26.9054 2.08459 26.2426 2.95282C24.2935 2.23797 22.1901 1.84751 19.9971 1.84751C17.8046 1.84751 15.7012 2.23797 13.7525 2.95237C13.0893 2.08459 11.6148 0.512822 9.39059 0.109699C8.11335 -0.121496 6.11765 -0.0246747 3.86496 1.75386C3.84324 1.77105 3.82198 1.7887 3.80116 1.8068C1.90454 3.45096 0.96121 5.28378 0.996048 7.2537C1.04491 9.99683 3.00804 11.8668 3.52789 12.3151C2.41399 14.6741 1.78781 17.3078 1.78781 20.0862C1.78781 24.6757 3.4926 28.8712 6.29636 32.0803C6.27238 32.1116 6.24388 32.1378 6.22126 32.1713L3.59712 36.1156C3.04333 36.9477 3.2691 38.0711 4.10113 38.6249C4.40924 38.8303 4.75762 38.9284 5.10192 38.9284C5.68738 38.9284 6.26152 38.6448 6.61035 38.1208L8.96439 34.5832C12.0283 36.9282 15.8519 38.3253 19.9971 38.3253C24.1736 38.3253 28.0233 36.906 31.099 34.5289L33.4897 38.1208C33.8381 38.6448 34.4127 38.9284 34.9981 38.9284C35.3424 38.9284 35.6904 38.8298 35.9989 38.6249C36.831 38.0711 37.0567 36.9477 36.5029 36.1152L33.8784 32.1713C33.8408 32.1147 33.7947 32.0686 33.7521 32.0179C36.5238 28.8169 38.2068 24.6459 38.2068 20.0862C38.2068 17.3082 37.5807 14.6746 36.4668 12.3151Z" fill="currentColor"/>
    </symbol>

    <symbol id="details-step-icon" viewBox="0 0 34 44">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5001 16.5H21.0001V13H12.5001V16.5ZM24.5 11.25C24.5 10.2835 23.7165 9.50003 22.75 9.50003H10.75C9.78351 9.50003 9.00001 10.2835 9.00001 11.25V18.25C9.00001 19.2165 9.78351 20 10.75 20H22.75C23.7165 20 24.5 19.2165 24.5 18.25V11.25ZM9.01137 25.75C9.01137 24.7835 9.79487 24 10.7614 24H22.6634C23.6299 24 24.4134 24.7835 24.4134 25.75C24.4134 26.7165 23.6299 27.5 22.6634 27.5H10.7614C9.79487 27.5 9.01137 26.7165 9.01137 25.75ZM9.01137 32.75C9.01137 31.7835 9.79487 31 10.7614 31H22.6634C23.6299 31 24.4134 31.7835 24.4134 32.75C24.4134 33.7165 23.6299 34.5 22.6634 34.5H10.7614C9.79487 34.5 9.01137 33.7165 9.01137 32.75ZM4.0001 40H30.0001V3.99999H4.0001V40ZM32 0H2C0.8955 0 0 0.8955 0 2V42C0 43.1045 0.8955 44 2 44H32C33.1045 44 34 43.1045 34 42V2C34 0.8955 33.1045 0 32 0Z" fill="currentColor"/>
    </symbol>

    <symbol id="post-step-icon" viewBox="0 0 42 47">
        <path d="M42 15.1414C42 14.0474 41.5575 12.9983 40.7698 12.2247C39.9822 11.4512 38.9139 11.0166 37.8 11.0166H26.6C26.2287 11.0166 25.8726 11.1615 25.61 11.4193C25.3475 11.6772 25.2 12.0269 25.2 12.3915C25.2 12.7562 25.3475 13.1059 25.61 13.3638C25.8726 13.6216 26.2287 13.7665 26.6 13.7665H37.8C38.1713 13.7665 38.5274 13.9113 38.79 14.1692C39.0525 14.427 39.2 14.7768 39.2 15.1414V33.0156H32.2C31.0861 33.0156 30.0178 33.4502 29.2302 34.2237C28.4425 34.9973 28 36.0464 28 37.1404V44.0151H4.2C3.8287 44.0151 3.4726 43.8702 3.21005 43.6124C2.9475 43.3545 2.8 43.0048 2.8 42.6401V15.1414C2.8 14.7768 2.9475 14.427 3.21005 14.1692C3.4726 13.9113 3.8287 13.7665 4.2 13.7665H15.4C15.7713 13.7665 16.1274 13.6216 16.3899 13.3638C16.6525 13.1059 16.8 12.7562 16.8 12.3915C16.8 12.0269 16.6525 11.6772 16.3899 11.4193C16.1274 11.1615 15.7713 11.0166 15.4 11.0166H4.2C3.08609 11.0166 2.0178 11.4512 1.23015 12.2247C0.442499 12.9983 0 14.0474 0 15.1414L0 42.6401C0 43.7341 0.442499 44.7833 1.23015 45.5568C2.0178 46.3304 3.08609 46.7649 4.2 46.7649H29.4C29.7715 46.7628 30.1274 46.6177 30.3912 46.3607L41.5912 35.3612C41.8511 35.1024 41.9978 34.7541 42 34.3905V15.1414ZM32.2 35.7655H37.2204L30.8 42.0709V37.1404C30.8 36.7757 30.9475 36.426 31.21 36.1682C31.4726 35.9103 31.8287 35.7655 32.2 35.7655Z" fill="currentColor"/>
        <path d="M19.6003 8.01371V15.1414C19.6003 15.506 19.7478 15.8558 20.0104 16.1136C20.2729 16.3715 20.629 16.5163 21.0003 16.5163C21.3716 16.5163 21.7277 16.3715 21.9903 16.1136C22.2528 15.8558 22.4003 15.506 22.4003 15.1414V8.01371C23.3344 7.68937 24.1217 7.05116 24.623 6.21189C25.1243 5.37261 25.3074 4.38631 25.1398 3.42729C24.9723 2.46828 24.4649 1.59831 23.7074 0.971148C22.9499 0.343981 21.9911 0 21.0003 0C20.0095 0 19.0507 0.343981 18.2932 0.971148C17.5357 1.59831 17.0283 2.46828 16.8608 3.42729C16.6932 4.38631 16.8763 5.37261 17.3776 6.21189C17.8789 7.05116 18.6662 7.68937 19.6003 8.01371ZM21.0003 2.76696C21.2772 2.76696 21.5479 2.8476 21.7781 2.99868C22.0083 3.14976 22.1878 3.36449 22.2937 3.61573C22.3997 3.86697 22.4274 4.14342 22.3734 4.41013C22.3194 4.67684 22.186 4.92183 21.9903 5.11412C21.7945 5.30641 21.545 5.43736 21.2734 5.49041C21.0019 5.54346 20.7204 5.51624 20.4645 5.41217C20.2087 5.3081 19.9901 5.13188 19.8362 4.90577C19.6824 4.67966 19.6003 4.41383 19.6003 4.14189C19.6003 3.77724 19.7478 3.42752 20.0104 3.16967C20.2729 2.91182 20.629 2.76696 21.0003 2.76696Z" fill="currentColor"/>
        <path d="M33.5992 19.2666H8.39917V22.0165H33.5992V19.2666Z" fill="currentColor"/>
        <path d="M33.5992 27.5156H8.39917V30.2655H33.5992V27.5156Z" fill="currentColor"/>
        <path d="M25.1992 35.7656H8.39917V38.5155H25.1992V35.7656Z" fill="currentColor"/>
    </symbol>
</svg>
@include('frontend.layout.modelpopup')
<!-- //Svg Icons -->
<!-- jQuery CDN Link -->

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="{{ url('public/user/assets/js/jquery-input-mask-phone-number.js')}}"></script>
<script src="{{ url('/')}}/public/user/assets/js/bootstrap-datepicker.js"></script>
<script src="{{ url('/')}}/public/user/assets/js/image-uploader.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA2UgkEpB0bxgVB_YZNb1bPbOkxerHhS4g&libraries=places"></script>
<script src="{{ url('/public/frontend/assets/js/custom.js')}}"></script>
@include('frontend.layout.ajax')

</body>
</html>