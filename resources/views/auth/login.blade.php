@extends('frontend.layout.app')
@section('content')
<section class="login-widget">
        <div class="login-container">
             <h1 class="text-center">Welcome Back</h1>
             <div class="wtFrame form-group loginFramePad">
			 
			 @if(count($errors) > 0)
 @foreach( $errors->all() as $message )
  <div class="alert alert-danger display-hide">
   <button class="close" data-close="alert"></button>
   <span>{{ $message }}</span>
  </div>
 @endforeach
@endif

      @if(isset($status))
		  <div class="alert alert-danger ">
   <button class="close" data-close="alert"></button>
   <span>{{ $status }}</span>
  </div>
	  @endif
			 
                 <form class="form-signin 55" method="POST"  action="{{ route('login') }}" >
                     @csrf
					 <div class="form-group">
                         <div class="position-relative iconInput">
                            <input type="email" name="email" id="" class="form-control" placeholder="Email address">
                            <span class="inputIcon"><img src="{{ url('/public/frontend/assets/images/login/icon-envelop.svg')}}" alt=""></span>
                             @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                       
					   </div>                         
                     </div>
                     <div class="form-group">
                        <div class="position-relative iconInput">
                           <input type="password" name="password" id="" class="form-control" placeholder="Password">
                           <span class="inputIcon"><img src="{{ url('public/frontend/assets/images/login/icon-lock.svg')}}" alt=""></span>
                        
						 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						</div>                         
                    </div>
                    <div class="d-flex justify-content-between align-items-center text-opensans text-center text-sm-left">
                        <div class="customcheck customRadio squareRadio my-3">
                            <div class="form-check pl-0 text-primary">
                                <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="rememberMe" value="option1">
                                <label class="form-check-label" for="rememberMe">Remember Me</label>
                            </div>
                        </div>
                        <a href="{{ route('password.request')}}" class="forgotPassword my-3 d-inline-block">Forgot Password?</a>
                    </div>
                    <p class="pt-md-3 btnLogin"><button type="submit" class="btn btn-green btn-green-shadow btnLg w-100">Log In</button></p>
                 </form>
             </div>

             <div class="wtFrame otherLogin">
                 <div class="loginFramePad">
                    <p class="pTopText">By clicking Continue with Facebook, Google, or Apple, you agree to the Terms of Use and Privacy Policy.</p>
                    <ul class="socialBtns">
                        <li><a href="{{ route('auth/facebook')}}" class="social-btn fbBTn w-100"><span>Log in with Facebook</span></a></li>
                        <li><a href="{{ route('google/redirect') }}"   class="social-btn googleBTn w-100"><span>Log in with Google</span></a></li>
                    </ul>
                </div>
                 <div class="text-center greyBox loginFramePad loginBottomText">Don’t have an account? <a href="javascript:void(0)" class="text-primary" data-toggle="modal" data-target="#signupModal"><strong>Sign up.</strong></a> </div>
             </div>
        </div>
    </section>

@endsection
