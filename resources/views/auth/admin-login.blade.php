<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin</title>
        <link href="{{ url('/public/assets/css/styles.css')}}" rel="stylesheet" />
        <link href="{{ url('/public/assets/css/login.css')}}" rel="stylesheet" />
    </head>
<body>

<div class="login-container">
        <div class="wtFrame loginFramePad">
            <img id="profile-img" class="profile-img-card" src="{{ url('/public/assets/images/avatar_2x.png')}}" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="POST"  action="{{ route('login') }}">
                 @csrf
				<span id="reauth-email" class="reauth-email"></span>
                <div class="position-relative iconInput form-group"> 
                    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
                    <span class="inputIcon"><img src="{{ url('/public/assets/images/icon-envelop.svg')}}" alt=""></span>
					 @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>

                <div class="position-relative iconInput form-group"> 
                    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                    <span class="inputIcon"><img src="{{ url('/public/assets/images/icon-lock.svg')}}" alt=""></span>
					
					  @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
								
                </div>

                <div class="d-flex justify-content-between align-items-center text-opensans text-center text-sm-left">
                    <div class="customcheck customRadio squareRadio my-3">
                        <div class="form-check pl-0 text-primary">
                            <input class="form-check-input" type="checkbox" name="remember" id="rememberMe" value="option1" {{ old('remember') ? 'checked' : '' }} >
                            <label class="form-check-label" for="rememberMe">Remember Me</label>
                        </div>
                    </div>
                    <a href="{{ route('password.request') }}" class="forgotPassword my-3 d-inline-block">Forgot Password?</a>
                </div>
                <p class="pt-md-3 btnLogin"><button type="submit" class="btn btn-green btn-green-shadow btnLg w-100">Sign In</button></p>
                
            </form><!-- /form -->
            
        </div>
        
    </div><!-- /card-container -->

<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</body>
</html>