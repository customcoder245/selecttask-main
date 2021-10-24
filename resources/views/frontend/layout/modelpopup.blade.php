<!--Sign Up modal-->
<div class="modal fade modal600" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">        
        <div class="modal-body p-0">
		<form class="sign_up" action="{{ route('/register')}}">
            <div class="loginFramePad">
                <div class="popupCustomTitle text-center">
                    <h2 class="modalTitle" id="signupModalLabel">Create your free account</h2>
                    <p class="subTitlePopup subtitle_text"></p>
                    <button type="button" class="close closeBtnRT" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
				
				@csrf
                <div class="row">
				    <div class="col-sm-12 form-group">
					
					 <select name="user_type" class="form-control semiBold user_type_cus" required>
					  <option value="">Select User Type</option>
					  <option value="customer">Customer</option>
					  <option value="service_provider">Services Provider</option>
					 </select>
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
                        <input type="text" name="phone" id="business_contact" class="form-control semiBold" placeholder="Phone" required>
                    </div>
                </div>

                <div class="customcheck customRadio squareRadio my-3">
                    <div class="form-check pl-0 pb-2">
                        <input class="form-check-input" type="checkbox" name="enable_message" id="enableTextMessage1" value="1">
                        <label class="form-check-label" for="enableTextMessage1"><span class="enableTxt">Enable text messages (optional)</span>
                            <p class="enableTextMessage">By clicking this box You consent to receive messages from Select Task Inc to provide updates
                          on your account. Message frequency depends on your account activity.
                          You may opt-out by texting "STOP".  Message and data rates may  apply. 						  </p>
                        </label>
                    </div>                    
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="" class="form-control semiBold" placeholder="Choose Password" required>
                </div>
                <div class="customcheck customRadio squareRadio my-md-4 my-3">
                    <div class="form-check pl-0">
                        <input class="form-check-input" type="checkbox" name="term_policy" id="term_policy" value="1" >
                        <label class="form-check-label" for="term_policy">By checking this box you agree to Select Task Inc <a href="{{ url('/')}}/terms" class="underlinelink text-primary">Terms of Use</a> and <a href="{{ url('/')}}/privacy" class="underlinelink text-primary">Privacy Policy</a>.
                        </label>
                    </div>                    
                </div>

                <p class="pt-md-3 btnLogin"> <div class="loader_image" style="display:none;">
		                <img src="{{ url('/')}}/public/user/assets/images/loader.gif"  >
		             </div>
					 <button type="submit" class="btn btn-green btn-green-shadow btnLg w-100 siginup_btn" disabled >Sign Up</button></p>

            </div>
			</form>
            <div class="otherLogin borderTopRegi">
                <div class="loginFramePad">
                   <p class="pTopText">By clicking Continue with Facebook, Google, or Apple, you agree to the Terms of Use and Privacy Policy.</p>
                   <ul class="socialBtns">
                       <li><a href="javascript:void(0)"  data-toggle="modal" data-target="#freesignupModal" class="social-btn fbBTn w-100"><span>Signup with Facebook</span></a></li>
                       <li><a href="javascript:void(0)" data-toggle="modal" data-target="#googlesignupModal" class="social-btn googleBTn w-100"><span>Signup  with Google</span></a></li>
                   </ul>
               </div>
                <div class="text-center greyBox loginFramePad loginBottomText">Already have an account? <a href="#" class="text-primary"><strong>Sign In.</strong></a> </div>
            </div>

            
        </div>
       
      </div>
    </div>
  </div>
<!--//Sign Up modal-->

<div class="modal fade notiModal" id="invalidlocation" tabindex="-1" role="dialog" aria-labelledby="deleteRowModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">       
        <div class="modal-body p-0">
            <div class="deleteContent text-center">
                <!-- <span class="deleteIcon centereditem mx-auto"><img src="http://www.selecttask.com/public/user/assets/images/i.svg" alt=""></span> -->
                <span class="deleteIcon centereditem mx-auto sadIcon"><i class="far fa-frown-open"></i></span>
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



<!--Sign Up Facebook modal-->
<div class="modal fade modal600" id="freesignupModal" tabindex="-1" role="dialog" aria-labelledby="freesignupModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">        
        <div class="modal-body p-0">
            <div class="loginFramePad">
			<form class="facebook_signup_form" action="" method="">
                <div class="popupCustomTitle text-center">
                    <h2 class="modalTitle" id="freesignupModalLabel 44">Create your free account</h2>
                    <p class="subTitlePopup">Sign up to start hearing from service providers.</p>
                    <button type="button" class="close closeBtnRT" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
				
				<div class="form-group">
				<select name="user_type" class="user_type_google form-control " required>
				 <option value="">Select User Type</option>
				 <option value="customer">Customer</option>
				 <option value="service_provider">Service Provider</option>
				</select>
				
				</div>
				
               
                <div class="form-group mb-35">
                    <input type="text" name="phone_no" id="" class="form-control semiBold phone_number" placeholder="Phone" required>
                </div>
                <div class="customcheck customRadio squareRadio my-3">
                    <div class="form-check pl-0 pb-2">
                        <input class="form-check-input" type="checkbox" name="enable_mesage" id="enableTextMessagefbsignup" value="1">
                        <label class="form-check-label" for="enableTextMessagefbsignup"><span class="enableTxt">Enable text messages (optional)</span>
                            <p class="enableTextMessage">By clicking this box You consent to receive messages from Select Task Inc to provide updates
                          on your account. Message frequency depends on your account activity.
                          You may opt-out by texting "STOP".  Message and data rates may  apply.</p>
                        </label>
                    </div>                    
                </div>               

                <p class="pt-md-3 btnLogin"><button type="submit" class="btn social-btn fbBTn w-100"><span><a href="{{ route('auth/facebook')}}" class="facebook_signup">Continue Sign Up with Facebook</a></span></button></p>
               </form>
            </div>
            
        </div>
       
      </div>
    </div>
  </div>
<!--//Sign Up Facebook  modal-->

<!--Sign Up Google modal-->
<div class="modal fade modal600" id="googlesignupModal" tabindex="-1" role="dialog" aria-labelledby="googlesignupModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">        
        <div class="modal-body p-0">
            <div class="loginFramePad">
                <div class="popupCustomTitle text-center">
                    <h2 class="modalTitle 444" id="googlesignupModalLabel">Create your free account</h2>
                    <p class="subTitlePopup">Sign up to start hearing from service providers.</p>
                    <button type="button" class="close closeBtnRT" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
				
				<div class="form-group">
				<select name="user_type" class="user_type_google form-control ">
				 <option value="">Select User Type</option>
				 <option value="customer">Customer</option>
				 <option value="service_provider">Service Provider</option>
				</select>
				
				</div>
               
                <div class="form-group mb-35">
                    <input type="text" name="number" id="phone_number" class="form-control semiBold" placeholder="Phone">
                </div>
                <div class="customcheck customRadio squareRadio my-3">
                    <div class="form-check pl-0 pb-2">
                        <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="enableTextMessage2" value="option1">
                        <label class="form-check-label" for="enableTextMessage2"><span class="enableTxt">Enable text messages (optional)</span>
                            <p class="enableTextMessage">By clicking this box You consent to receive messages from Select Task Inc to provide updates
                          on your account. Message frequency depends on your account activity.
                          You may opt-out by texting "STOP".  Message and data rates may  apply.</p>
                        </label>
                    </div>                    
                </div>               

                <p class="pt-md-3 btnLogin"><button type="submit" class="btn social-btn googleBTn w-100"><span>
				
				<a href="{{  route('google/redirect')}}" class="google_redirect">Continue Sign Up with Google</a></span></button></p>

            </div>
            
        </div>
       
      </div>
    </div>
  </div>
  
  <div class="modal fade modal600" id="googlesignupModalsp" tabindex="-1" role="dialog" aria-labelledby="googlesignupModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">        
        <div class="modal-body p-0">
            <div class="loginFramePad">
                <div class="popupCustomTitle text-center">
                    <h2 class="modalTitle 444" id="googlesignupModalLabel">Create your free account</h2>
                    <p class="subTitlePopup">Sign up to start hearing from service providers.</p>
                    <button type="button" class="close closeBtnRT" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
				
				<div class="form-group">
				<input type="hidden" name="user_type" class="user_type_google" value="service_provider">
				<!--select name="user_type" class="user_type_google form-control ">
				 <option value="">Select User Type</option>
				 <option value="customer">Customer</option>
				 <option value="service_provider">Service Provider</option>
				</select-->
				
				</div>
               
                <div class="form-group mb-35">
                    <input type="text" name="number" id="phone_numbersp" class="form-control semiBold" placeholder="Phone">
                </div>
                <div class="customcheck customRadio squareRadio my-3">
                    <div class="form-check pl-0 pb-2">
                        <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="enableTextMessage2" value="option1">
                        <label class="form-check-label" for="enableTextMessage2"><span class="enableTxt">Enable text messages (optional)</span>
                            <p class="enableTextMessage">By clicking this box You consent to receive messages from Select Task Inc to provide updates
                          on your account. Message frequency depends on your account activity.
                          You may opt-out by texting "STOP".  Message and data rates may  apply.</p>
                        </label>
                    </div>                    
                </div>               

                <p class="pt-md-3 btnLogin"><button type="submit" class="btn social-btn googleBTn w-100"><span>
				
				<a href="{{  route('google/redirect')}}" class="google_redirect">Continue Sign Up with Google</a></span></button></p>

            </div>
            
        </div>
       
      </div>
    </div>
  </div>
<!--//Sign Up Google  modal-->

<div class="modal fade modal600" id="googlesignupModalcustomer" tabindex="-1" role="dialog" aria-labelledby="googlesignupModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">        
        <div class="modal-body p-0">
            <div class="loginFramePad">
                <div class="popupCustomTitle text-center">
                    <h2 class="modalTitle 444" id="googlesignupModalLabel">Create your free account</h2>
                    <p class="subTitlePopup">Sign up to start hearing from service providers.</p>
                    <button type="button" class="close closeBtnRT" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
				
				<div class="form-group">
				<input type="hidden" name="user_type" class="user_type_google" value="customer">
				<!--select name="user_type" class="user_type_google form-control ">
				 <option value="">Select User Type</option>
				 <option value="customer">Customer</option>
				 <option value="service_provider">Service Provider</option>
				</select-->
				
				</div>
               
                <div class="form-group mb-35">
                    <input type="text" name="number" id="phone_numbercustomer" class="form-control semiBold" placeholder="Phone">
                </div>
                <div class="customcheck customRadio squareRadio my-3">
                    <div class="form-check pl-0 pb-2">
                        <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="enableTextMessage_cu" value="option1">
                        <label class="form-check-label" for="enableTextMessage_cu"><span class="enableTxt">Enable text messages (optional)</span>
                            <p class="enableTextMessage">By clicking this box You consent to receive messages from Select Task Inc to provide updates
                          on your account. Message frequency depends on your account activity.
                          You may opt-out by texting "STOP".  Message and data rates may  apply.</p>
                        </label>
                    </div>                    
                </div>               

                <p class="pt-md-3 btnLogin"><button type="submit" class="btn social-btn googleBTn w-100"><span>
				
				<a href="{{  route('google/redirect')}}" class="google_redirect">Continue Sign Up with Google</a></span></button></p>

            </div>
            
        </div>
       
      </div>
    </div>
  </div>