@extends('frontend.layout.app')
@section('content')
 <section class="login-widget">
        <div class="login-container">
	
	
         <h1 class="text-center">Reset Your Password</h1>
               
               @if (session('status'))
                        <div class="alert alert-success" role="alert">
					
                            {{ session('status') }}
                        </div>
                    @endif
					 @if ($errors->has('error'))
                    <div class="alert alert-danger">{{ $errors->first('error') }}</div>
                @endif
                
				
				<div class="wtFrame form-group loginFramePad">
                    <form method="POST"class="form-signin3" action="{{ route('reset-password') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                       <div class="form-group">                        
                        <div class="position-relative iconInput">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       <div class="form-group">                        
                        <div class="position-relative iconInput">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="New Password">
                                 <span class="inputIcon"><img src="{{ url('/')}}/public/login2/images/login/icon-lock.svg" alt=""></span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">                        
                        <div class="position-relative iconInput">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Re-enter Password">
                            <span class="inputIcon"><img src="{{ url('/')}}/public/login2/images/login/icon-lock.svg" alt=""></span>
							</div>
                        </div>

                       <p class="pt-md-3 btnLogin"><button type="submit" class="btn btn-green btn-green-shadow btnLg w-100">Reset Password</button></p>  
                    </form>
                </div>
            </div>
       



</div>
@endsection
