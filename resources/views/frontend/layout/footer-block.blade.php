<div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-item">
                        <h5>Company </h5>
                        <ul class="footer-nav">
                            <li> <a href="{{ url('/')}}">Home </a> </li>
                            <li> <a href="{{ route('about-us')}}">About Us </a> </li>
                            <li> <a href="{{ route('help-support')}}">Help &amp; Support </a> </li>
                            <li> <a href="{{ route('sitemap')}}">Sitemap </a> </li>
                        </ul>
                    </div>
                    <div class="footer-item footer-social">
                        <h5>Follow Us</h5>
                        <ul class="social-list">
                            <li><a href="https://twitter.com/SelectTask"> <i class="fab fa-twitter"></i></a></li>                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-item">
                        <h5>Services </h5>
                        <ul class="footer-nav">
                           @php
								 $cs='';
									   if(isset($_GET['cat'])){
										   $cs=$_GET['cat'];
									   }
									   $cs=40;
		                             @endphp
								    <li><a class="@if($cs==1) active @endif" href="{{ route('posttask-step1')}}?cat=1">Heating &amp; Cooling</a></li>
                                    <li><a class="@if($cs==2) active @endif" href="{{ route('posttask-step1')}}?cat=2">Handyman</a></li>
									<li><a class="@if($cs==3) active @endif" href="{{ route('posttask-step1')}}?cat=3">General Contracting</a></li>
									<li><a class="@if($cs==4) active @endif" href="{{ route('posttask-step1')}}?cat=4">Painting</a></li>
                                    
                                    <li><a class="@if($cs==5) active @endif" href="{{ route('posttask-step1')}}?cat=5">Plumbing</a></li>
									<li><a class="@if($cs==6) active @endif" href="{{ route('posttask-step1')}}?cat=6">Roofing</a></li>
                                    <li><a class="@if($cs==7) active @endif" href="{{ route('posttask-step1')}}?cat=7">Electric</a></li>
                                    <li><a class="@if($cs==8) active @endif" href="{{ route('posttask-step1')}}?cat=8">Carpentry</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-item">
                        <h5>Service Locations </h5>
                        <ul class="footer-nav">
                            <li><a href="{{ route('Services-Location-Manhattan')}}">Manhattan </a> </li>
                            <li><a href="{{ route('Services-Location-TheBronx')}}">The Bronx </a> </li>
                            <li><a href="{{ route('Services-Location-Brooklyn')}}">Brooklyn </a> </li>
                            <li><a href="{{ route('Services-Location-Queens')}}">Queens </a> </li>
                            <li><a href="{{ route('Services-Location-StatenIsland')}}">Staten Island </a> </li>
                            <li><a href="{{ route('service-locations')}}">New Your City </a> </li>
                        </ul>
                    </div>
                </div>
            <div class="col-lg-3">
                <div class="footer-item">
                    <h5>Customer </h5>
                    <ul class="footer-nav">                        
                        <li> <a href="{{ route('HowitWorks-customer')}}">How It Works</a></li>
                        <li> <a href="{{ route('NYC-Repair-Prices_Main')}}">NYC Repair Prices </a></li>
                        <li> <a href="{{ route('posttask-step1')}}">Get Free Quotes</a></li>
                    </ul>
                </div>
                <div class="footer-item">
                    <h5>Provider </h5>
                    <ul class="footer-nav">                        
                        <li><a href="{{ route('HowitWorks-ServiceProviders')}}">How it Works</a></li>
                        <li><a href="{{ route('Get-Jobs-NYC')}}">Become a Pro</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="d-flex flex-wrap footer-bottom align-items-center">
            <div class="footer-item footer-social">
                <h5>Follow Us</h5>
                <ul class="social-list"> 
                    <li><a href=""> <i class="fab fa-twitter"></i></a></li>
                </ul>
            </div>
            <div class="footerlinks">
                <ul>
                    <li><a href="{{ route('terms')}}">Terms</a></li>
                    <li><a href="{{ route('privacy')}}">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="copyright ml-auto">
                &copy; 2020 Select Task
            </div>
        </div>
        </div>