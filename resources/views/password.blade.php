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
    <style>
        .passwordProtected{background-color:#f1f1f1; height:100vh; width:100%; display:-ms-flexbox; display: flex; align-items: center; justify-content: center;}
        .cardWidget{background-color:#fff; padding:25px; border-radius: 10px; -webkit-box-shadow: 0 50px 100px 0 rgba(0,0,0,0.2); -moz-box-shadow: 0 50px 100px 0 rgba(0,0,0,0.2); box-shadow: 0 50px 100px 0 rgba(0,0,0,0.2);}
        .form-control {
            background-color: #FBFBFB;
            border: 1px #DADADA solid;
            border-radius: 5px;
            font-family: 'open sans', sans-serif;
            height: 58px;
            font-size: 15px;
        }
        .form-control:focus{box-shadow: none;}
        .btn{ border: 0px;  font-weight: 600; border-radius: 4px; min-width: 132px; text-transform: capitalize;}
        .btn:hover, .btn:focus{ box-shadow: none; outline: 0px;}

        .form-label{display: block; color: #002838; text-align: left; margin-bottom: 20px;}
        .formGroup30 {margin-bottom: 20px;}

        .btnLg { padding: 12px 25px; font-size: 20px; line-height: 32px; border-radius: 10px;}

        @media (min-width: 768px){
            .form-control {font-size: 16px; padding: 15px 25px;}
            .form-label {font-size: 20px;}
            .cardWidget{min-width: 500px;}
            .formGroup30 {margin-bottom: 30px;}
        }

        @media (min-width: 1300px){
            .form-control {font-size: 17px;}            
            .form-label {font-size: 24px;}
        }

        @media (max-width: 767px){
            .btnLg {font-size: 18px; min-width: 235px; padding: 10px 20px;}
        }



    </style>
</head>
<body data-url="{{ asset('/')}}">
    <div class="wrapper passwordProtected">
        <div class="cardWidget">
            <form method="post" action="{{ route('password-protected')}}">
                @csrf
                <div class="formGroup30">
                <label class="form-label"> Password </label>
                <input type="password" name="password" class="form-control" required>
                </div>
                
                <button class="btn btn-primary btnLg" type="submit">Submit</button>
                
            </form>
        </div>
        

        <!-- <section class="section videoWidget">
            <div class="container">
                <div class="videosection p-6 mx-auto d-flex justify-content-center align-items-center">
				<div class="row ">
				<div class="col-12">
                    <form method="post" action="{{ route('password-protected')}}">
					 @csrf
					 <div class="form-group">
					 <label> Password </label>
					 <input type="password" name="password" class="form-control" required>
					 </div>
					 <div class="form-group">
					   <label></label>
					   <button class="btn btn-primary" type="submit">Submit</button>
					 </div>
					</form>
					</div>
                    </div>
                </div>
                
            </div>
        </section> -->

        
    </div>

<!-- jQuery CDN Link -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="{{ url('/')}}/public/comingsoon/js/custom.js"></script>
</body>
</html>