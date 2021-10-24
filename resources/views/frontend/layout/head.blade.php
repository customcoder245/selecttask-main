<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@if(isset($meta_title)){{ $meta_title }} @endif</title>
    <meta name="description" content=" @if(isset($meta_desc)){{ $meta_desc }} @endif">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('/public/frontend/assets/images/favicon.png') }}">
		

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" data-url="{{ asset('/')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,700|Montserrat:300,400,500,600,700|Source+Code+Pro&amp;display=swap" rel="stylesheet">
		  <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,700|Montserrat:300,400,500,600,700|Source+Code+Pro&display=swap"
          rel="stylesheet">
		  
		  <link href="{{ url('/')}}/public/user/assets/css/image-uploader.min.css" rel="stylesheet" type="text/css">
    <!-- Theme CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css">
    <link href="{{ url('/public/frontend/assets/css/style.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ url('/public/frontend/assets/css/dev-style.css')}}" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>
@php 
$log_main_class='';
@endphp
	@if (Auth::check())
		@php
	
	    if(Auth::user()->isCustomer()){
			$log_main_class="customer_window";
		}elseif(Auth::user()->isServiceprovider()){
			$log_main_class="services_window";
			}elseif(Auth::user()->isAdmin()){
			$log_main_class="admin_window";
			}
	   @endphp
	@endif

<body class="{{ $log_main_class }}" data-url="{{ url('/')}}" data-ukk="">
<!-- Wrapper -->
<div class="wrapper">