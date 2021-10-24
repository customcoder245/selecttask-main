@extends('frontend.layout.app')
@section('content')


 <!--Login Content-->
    <section class="login-widget">
        <div class="login-container">
             <h1 class="text-center">Forgot Password?</h1>
             <p class="subTitlePopup text-center line-height">Don't worry just fill your email address and we'll sent you a <span class="d-sm-block">link to reset your password.</span></p>            
             <div class="wtFrame form-group loginFramePad"> 
               @if (session('status'))
                        <div class="alert alert-success" role="alert">
					
                            {{ session('status') }}
                        </div>
                    @endif
					 @if ($errors->has('email'))
                    <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                @endif
						  @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror		 
                 <form class="form-signin" method="POST" action="{{ route('reset-email') }}">
                    
					@csrf
					<div class="form-group">
                         <div class="position-relative iconInput">
                            <input type="text" name="email" id="" class="form-control" placeholder="Email address">
                            <span class="inputIcon"><img src="{{ url('/')}}/public/login2/images/login/icon-envelop.svg" alt=""></span>
                         </div>                         
                     </div>                    
                   
                    <p class="pt-md-3 btnLogin"><button type="submit" class="btn btn-green btn-green-shadow btnLg w-100">Submit</button></p>
                    <div class="text-opensans text-center">                       
                        <a href="{{url('/')}}/login" class="forgotPassword mt-4 d-inline-block"><i class="fa fa-angle-left mr-2"></i>Back to Login</a>
                    </div>
                 </form>
             </div>

        </div>
    </section>



@endsection
