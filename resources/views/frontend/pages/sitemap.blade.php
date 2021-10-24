@extends('frontend.layout.app')
@section('content')
<!-- Banner Section -->
    <section class="banner sitemapBanner smlBanner">
        <div class="container">
            <div class="row align-items-md-center">
                <div class="col-md-6 order-md-2 text-center my-3"><img src="{{ url('/public/frontend')}}/assets/images/sitemap-icon.svg" alt="" class="bannerIcon"></div>
                <div class="col-md-6 order-md-1">
                    <div class="detail wow bounceInLeft pt-0" data-wow-delay="0.1s">                       
                        <h2>Sitemap</h2>
                        <p>Last Updated: October 31, 2020.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //Banner Section -->

    <!--The Provider’s Guide-->
    <section class="section cmsTopSection borderBottom">
        <div class="container">
            <div class="sitemapLinks form-group">
                <div class="servicesSections sitemapRow d-flex flex-wrap mobSpaceBetween">
                    <div class="sitemapCol py-0">
                        <ul class="linksWidget">
                            <li><a href="#">Home</a></li>                           
                        </ul>
                    </div>
                    <div class="sitemapCol py-0">
                        <ul class="linksWidget">                           
                            <li><a href="{{ route('about-us')}}">About Us</a></li>                           
                        </ul>
                    </div>
                    <div class="sitemapCol py-0">
                        <ul class="linksWidget">                          
                            <li><a href="{{ route('service-locations')}}">Services</a></li>
                        </ul>
                    </div>
                </div>              
            </div>

            <div id="accordion" class="mobileAccordion">
                <div class="servicesLinks">
                    <h2 class="linksTitle Bold" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Post a Task</h2>
                   
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="servicesSections sitemapRow d-md-flex flex-wrap">
                            <div class="sitemapCol">
                                <ul class="linksWidget">
                                    <li><a href="{{ route('posttask-step1',['cat'=>1])}}">Heating and Cooling Systems</a></li>
                                    <li><a href="{{ route('posttask-step1',['cat'=>7])}}">Electric</a></li>
                                    <li><a href="{{ route('posttask-step1',['cat'=>3])}}">General Contracting</a></li>
                                </ul>
                            </div>
                            <div class="sitemapCol">
                                <ul class="linksWidget">
                                    <li><a href="{{ route('posttask-step1',['cat'=>4])}}">Painting</a></li>
                                    <li><a href="{{ route('posttask-step1',['cat'=>6])}}">Roofing</a></li>
                                    <li><a href="{{ route('posttask-step1',['cat'=>8])}}">Carpentry</a></li>
                                </ul>
                            </div>
                            <div class="sitemapCol">
                                <ul class="linksWidget">
                                    <li><a href="{{ route('posttask-step1',['cat'=>5])}}">Plumbing</a></li>
                                    <li><a href="{{ route('posttask-step1',['cat'=>2])}}">Handyman</a></li>
                                </ul>
                            </div>
                            
                        </div>  
                    </div>
                </div><!--//Post a Task-->

                <div class="otherLinks form-group">
                    <h2 class="linksTitle Bold collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Service Locations</h2>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="servicesSections sitemapRow d-md-flex flex-wrap">
                            <div class="sitemapCol">
                                <ul class="linksWidget">
                                    <li><a href="{{ route('Services-Location-Manhattan')}}">Manhattan</a></li>  
                                    <li><a href="{{ route('Services-Location-TheBronx')}}">The Bronx</a></li>                           
                                </ul>
                            </div>
                            <div class="sitemapCol">
                                <ul class="linksWidget">
                                    <li><a href="{{ route('Services-Location-Brooklyn')}}">Brooklyn</a></li>  
                                    <li><a href="{{ route('Services-Location-StatenIsland')}}">Staten Island</a></li>
                                </ul>
                            </div>
                            <div class="sitemapCol">
                                <ul class="linksWidget">
                                    <li><a href="{{ route('Services-Location-Queens') }}">Queens</a></li>  
                                    <li><a href="{{ route('service-locations')}}">New York City</a></li>
                                </ul>
                            </div>
                        </div> 
                    </div>                                 
                </div><!--//Service Locations-->

                <div class="otherLinks form-group">
                    <h2 class="linksTitle Bold collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">NYC Repair Prices</h2>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="servicesSections sitemapRow d-md-flex flex-wrap">
                            <div class="sitemapCol">
                                <ul class="linksWidget">
                                    <li><a href="{{ route('NYC-Repair-Price_HVAC-Repair')}}">Heating &amp; Cooling Systems</a></li>  
                                    <li><a href="{{ route('NYC-Repair-Price_Electrician')}}">Electric</a></li>
                                    <li><a href="{{ route('NYC-Repair-Price_Handyman')}}">Handyman</a></li> 
                                    <li><a href="{{ route('NYC-Repair-Price_GeneralContractor')}}">General Contracting</a></li>                            
                                </ul>
                            </div>
                            <div class="sitemapCol">
                                <ul class="linksWidget">
                                    <li><a href="{{ route('NYC-Repair-Price_painting')}}">Painting</a></li>  
                                    <li><a href="{{ route('NYC-Repair-Price_painting')}}#interiorPaint">Interior Painting</a></li>
                                    <li><a href="{{ route('NYC-Repair-Price_painting')}}#exteriorPaint">Exterior Painting</a></li>
                                </ul>
                            </div>
                            <div class="sitemapCol">
                                <ul class="linksWidget">
                                    <li><a href="{{ route('NYC-Repair-Price_plumbing')}}">Plumbing</a></li>  
                                    <li><a href="{{ route('NYC-Repair-Price_roofing')}}">Roofing</a></li>
                                    <li><a href="{{ route('NYC-Repair-Price_CarpentryCabinets')}}">Carpentry</a></li>
                                </ul>
                            </div>
                        </div> 
                    </div>
                                
                </div><!--//NYC Repair Prices-->

                <div class="otherLinks form-group">
                    <h2 class="linksTitle Bold collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">How it Works</h2>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                        <div class="servicesSections sitemapRow d-md-flex flex-wrap">
                            <div class="sitemapCol">
                                <ul class="linksWidget">
                                    <li><a href="{{ route('HowitWorks-customer')}}">How it Works (Customer)</a></li>
                                </ul>
                            </div>
                            <div class="sitemapCol">
                                <ul class="linksWidget">
                                    <li><a href="{{ route('HowitWorks-ServiceProviders')}}">How it Works (Service Prodvider)</a></li>
                                </ul>
                            </div>
                        
                        </div> 
                    </div>                                 
                </div><!--//How it Works-->

               
                
            </div><!--Accordion-->         

            <div class="sitemapLinks form-group">
                <div class="servicesSections sitemapRow d-flex flex-wrap mobTwoCol">
                    <div class="sitemapCol py-0">
                        <ul class="linksWidget">
                            <li><a href="{{ route('terms')}}">Terms &amp; Conditions</a></li>
                            <li><a href="{{ route('sitemap')}}">Sitemap</a></li>
                            <li><a href="{{ route('help-support')}}">Help &amp; Support</a></li>
                        </ul>
                    </div>
                    <div class="sitemapCol py-0">
                        <ul class="linksWidget">                           
                            <li><a href="{{ route('Get-Jobs-NYC')}}">Become a Pro</a></li>
                            <li><a href="{{ route('privacy')}}">Privacy Policy</a></li>
                            <li><a href="{{ route('login')}}">Login</a></li>
                        </ul>
                    </div>
                   
                </div>              
            </div>
            

        </div>
    </section>
    <!-- //The Provider’s Guide-->
	
	@endsection