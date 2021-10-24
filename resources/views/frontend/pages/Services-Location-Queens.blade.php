@extends('frontend.layout.app')
@section('content')
<!-- Banner Section -->
    <section class="banner innerbanner locationInnerBanner queensBanner">
        <div class="container">
            <div class="row align-items-md-center">
                <div class="col-md-7">
                    <div class="detail wow bounceInLeft" data-wow-delay="0.1s">
                        <h2><span class="d-md-block">Repair and Installation Costs in</span> Queens, NY </h2>
                        <div class="bannerContent">
                            <p>Are you looking for help with your project, but don’t know where to start?</p>
                            <p>This guide can help you learn more about Queens handyman prices, services, and more. You’ll also find links to helpful articles about each service to help you understand more about your repair task.</p>
                        </div>
                        <div class="nyc-banner-box">
                            <h4 class="mb-0">Post Your <strong>Free Task</strong> to Find Service Providers in <strong>Queens, New York</strong></h4>
                        </div>
                        <div class="button">
                            <a href="{{ route('posttask-step1')}}" class="btn btn-green btn-green-shadow mr-md-4 mw-321 btnLg post_a_task">Post a Task</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //Banner Section -->

    <!--Top Categoories-->
    <section class="topCategories-widget" id="accordion">
        <div class="d-flex d-md-none mobLinkAccordion" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <span class="tpIcon">
                <svg width="37" height="42" class="icon">
                    <use xlink:href="#handyman-icon" ></use>
                </svg>
            </span>
            <span class="tpText">Cost to Hire a Handyman in Queens</span>
            <img src="assets/images/arrow-right.svg" alt="">
        </div>
        <div class="container collapse"  id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordion">           
            <ul class="d-md-flex flex-wrap" id="top-menu">
                <li>
                    <a href="#handymanServ">
                        <span class="tpIcon">
                            <svg width="37" height="42" class="icon">
                                <use xlink:href="#handyman-icon" ></use>
                            </svg>
                        </span>
                        <span class="tpText">Cost to Hire a Handyman in Queens</span>
                    </a>
                </li>
                <li>
                    <a href="#gcServ">
                        <span class="tpIcon">
                            <svg width="42" height="42" class="icon">
                                <use xlink:href="#gc-icon" ></use>
                            </svg>
                        </span>
                        <span class="tpText">Cost to Hire a General Contractor in Queens</span>
                    </a>
                </li>
                <li>
                    <a href="#plumberServ">
                        <span class="tpIcon">
                            <svg width="33" height="42" class="icon">
                                <use xlink:href="#plumber-icon" ></use>
                            </svg>
                        </span>
                        <span class="tpText">Cost to Hire a Plumber in Queens</span>
                    </a>
                </li>
                <li>
                    <a href="#painterServ">
                        <span class="tpIcon">
                            <svg width="27" height="42" class="icon">
                                <use xlink:href="#painter-icon" ></use>
                            </svg>
                        </span>
                        <span class="tpText">Cost to Hire a Painter in Queens</span>
                    </a>
                </li>
                <li>
                    <a href="#electricianServ">
                        <span class="tpIcon">
                            <svg width="42" height="42" class="icon">
                                <use xlink:href="#electrician-icon" ></use>
                            </svg>
                        </span>
                        <span class="tpText">Cost to Hire an Electrician in Queens</span>
                    </a>
                </li>
                <li>
                    <a href="#roofingServ">
                        <span class="tpIcon">
                            <svg width="42" height="42" class="icon">
                                <use xlink:href="#roof-icon" ></use>
                            </svg>
                        </span>
                        <span class="tpText">Cost to Hire a Roofing Contractor in Queens</span>
                    </a>
                </li>
                <li>
                    <a href="#acServ">
                        <span class="tpIcon">
                            <svg width="38" height="38" class="icon">
                                <use xlink:href="#ac-icon"></use>
                            </svg>
                        </span>
                        <span class="tpText">Cost to Fix AC in Queens</span>
                    </a>
                </li>
                <li>
                    <a href="#cabinetServ">
                        <span class="tpIcon">
                            <svg width="38" height="38" class="icon">
                                <use xlink:href="#cabinet-icon"></use>
                            </svg>
                        </span>
                        <span class="tpText">Cost to Replace Kitchen Cabinets in Queens</span>
                    </a>
                </li>
            </ul>           
        </div>
    </section>
    <!--//Top Categoories-->

    <!--Cost of Handyman-->
    <section class="section handymanSection" id="handymanServ">
        <div class="container">
            <!--Title-->
            <div class="title text-center locationTitle-widget">
                <p class="locServiceIcon"><svg width="66" height="74" class="icon">
                    <use xlink:href="#handyman-icon" ></use>
                </svg></p>
                <h2 class="wow bounceInDown" data-wow-delay="0.1s">The Cost to Hire a Handyman in Queens, New York City</h2>
                <h4 class="wow bounceInLeft" data-wow-delay="0.1s">A handyman, unlike many other service professionals, is equipped to perform many different types of home improvement tasks.</h4>
            </div>
            <!--//Title-->

            <div class="row serviceBorderTop">
                <div class="col-md-6 order-md-2">
                    <p class="locServPic"><img src="{{ url('/public/frontend')}}/assets/images/location/handyman-pic.jpg" alt=""></p>
                </div>
                <div class="col-md-6">
                    <div class="servLocContent text-opensans">
                        <p>They are essentially the “jack of all trades” in the repair and maintenance sphere, having the tools and knowledge to install appliances, fix running toilets, install new light fixtures, repair drywall, and more.</p>
                        <p>A handyman in Queens, NYC will charge you by the hour for their services, usually at a rate of <strong>$60-$125</strong> per hour. They also often have minimum fees just for calling them out to inspect a problem. This fee can be as low as <strong>$75,</strong> and as high as <strong>$200.</strong></p>
                        <p class="text-lato">
                            <a href="{{ route('NYC-Repair-Price_Handyman')}}" class="btn btn-green btn-green-shadow buttonArrow"><span class="d-block Bold">Learn More About Queens</span> Handyman Prices &amp; Service</a>
                        </p>
                    </div>
                    
                </div>
            </div>
           
        </div>
    </section>
    <!-- //Cost of Handyman-->

    <!--Cost of General Contractors-->
    <section class="section GeneralContractorsSection grayBG" id="gcServ">
        <div class="container">
            <!--Title-->
            <div class="title text-center locationTitle-widget">
                <p class="locServiceIcon"><svg width="74" height="74" class="icon">
                    <use xlink:href="#gc-icon" ></use>
                </svg></p>
                <h2 class="wow bounceInDown" data-wow-delay="0.1s">How General Contractors in Queens, NY Charge for Their Services</h2>
                <h4 class="wow bounceInLeft" data-wow-delay="0.1s">General contractors are specialized construction managers who oversee large new construction and remodel projects.</h4>
            </div>
            <!--//Title-->

            <div class="row serviceBorderTop">
                <div class="col-md-6 order-md-2">
                    <p class="locServPic"><img src="{{ url('/public/frontend')}}/assets/images/location/general-contractors-pic.jpg" alt=""></p>
                </div>
                <div class="col-md-6">
                    <div class="servLocContent text-opensans">
                        <p>They handle each part of the process from start to finish, assisting with everything from recommending and hiring subcontractors, to tracking project cost to ensure that it stays within budget. A contractor is the perfect consultant to help you with your next big project.</p>
                        <p>General contractors in Queens charge a percentage of the project cost as their fee. You can expect to pay a markup of <strong>10%-25%</strong> for their services.</p>
                        <p class="text-lato">
                            <a href="{{ route('NYC-Repair-Price_GeneralContractor')}}" class="btn btn-green btn-green-shadow buttonArrow"><span class="d-block Bold">Learn More About Queens</span> General Contractor Prices &amp; Service</a>
                        </p>
                    </div>
                </div>
            </div>
           
        </div>
    </section>
    <!-- //Cost of General Contractors-->

    <!--Cost of Plumbers-->
    <section class="section plumbersSection" id="plumberServ">
        <div class="container">
            <!--Title-->
            <div class="title text-center locationTitle-widget ttl875">
                <p class="locServiceIcon"><svg width="57" height="74" class="icon">
                    <use xlink:href="#plumber-icon" ></use>
                </svg></p>
                <h2 class="wow bounceInDown" data-wow-delay="0.1s">How Much Do Plumbers in Queens, NYC Charge?</h2>
                <h4 class="wow bounceInLeft" data-wow-delay="0.1s">When the plumbing in your building acts up, a plumber is the best pro to call to help you resolve the issue. </h4>
            </div>
            <!--//Title-->

            <div class="row serviceBorderTop">
                <div class="col-md-6 order-md-2">
                    <p class="locServPic"><img src="{{ url('/public/frontend')}}/assets/images/location/plumber-pic.jpg" alt=""></p>
                </div>
                <div class="col-md-6">
                    <div class="servLocContent text-opensans">
                        <p>They usually have the tools on-hand needed to fix minor plumbing issues, as well as the expertise to properly identify the cause. Plumbers in Queens charge about <strong>$110 per hour</strong> for their services, along with a minimum service call-out fee equivalent to two hours of their regular hourly rate to compensate them for their time spent traveling and in your home.</p>
                        <p>Make sure you include a lot of information about the project to get the most accurate quote from your Queens plumber.</p>
                        <p class="text-lato">
                            <a href="{{ route('NYC-Repair-Price_plumbing')}}" class="btn btn-green btn-green-shadow buttonArrow"><span class="d-block Bold">Learn More About Queens</span> Plumber Prices & Service</a>
                        </p>
                    </div>
                </div>
            </div>
           
        </div>
    </section>
    <!-- //Cost of Plumbers-->

     <!--Cost of Painter-->
     <section class="section paintSection grayBG" id="painterServ">
        <div class="container">
            <!--Title-->
            <div class="title text-center locationTitle-widget">
                <p class="locServiceIcon"><svg width="48" height="74" class="icon">
                    <use xlink:href="#painter-icon" ></use>
                </svg></p>
                <h2 class="wow bounceInDown" data-wow-delay="0.1s">How Much Does it Cost to Paint a House in Queens?</h2>
                <h4 class="wow bounceInLeft" data-wow-delay="0.1s">When you’re looking to have your house painted, there are many professional painters who can help you maximize your new paint investment.</h4>
            </div>
            <!--//Title-->

            <div class="row serviceBorderTop">
                <div class="col-md-6 order-md-2">
                    <p class="locServPic"><img src="{{ url('/public/frontend')}}/assets/images/location/paint-pic.jpg" alt=""></p>
                </div>
                <div class="col-md-6">
                    <div class="servLocContent text-opensans">
                        <p>While paint can certainly be DIY’d, hiring a professional painter ensures that the job will be finished quickly and evenly. Painters in Queens charge <strong>$3-$7 per square foot</strong> for interior and exterior painting services, with the average paint job costing an extra <strong>$150-$200</strong> total for the paint.</p>
                        <p>Painting a 2,500 sq ft house in Queens costs an average of <strong>$15,000</strong> for a whole-home interior paint job for labor and materials.</p>
                        <p class="text-lato">
                            <a href="{{ route('NYC-Repair-Price_painting')}}" class="btn btn-green btn-green-shadow buttonArrow"><span class="d-block Bold">Learn More About Queens</span> Painter Prices &amp; Service</a>
                        </p>
                    </div>
                </div>
            </div>
           
        </div>
    </section>
    <!-- //Cost of Painter-->

    <!--Cost of Electrician-->
    <section class="section electricianSection" id="electricianServ">
        <div class="container">
            <!--Title-->
            <div class="title text-center locationTitle-widget ttl875">
                <p class="locServiceIcon"><svg width="73" height="73" class="icon">
                    <use xlink:href="#electrician-icon" ></use>
                </svg></p>
                <h2 class="wow bounceInDown" data-wow-delay="0.1s">How Much Do Electricians in Queens, NY Charge?</h2>
                <h4 class="wow bounceInLeft" data-wow-delay="0.1s">When you need work done to your home’s electrical system, call a licensed electrician to determine the cause of the issue.</h4>
            </div>
            <!--//Title-->

            <div class="row serviceBorderTop">
                <div class="col-md-6 order-md-2">
                    <p class="locServPic"><img src="{{ url('/public/frontend')}}/assets/images/location/electrician-pic.jpg" alt=""></p>
                </div>
                <div class="col-md-6">
                    <div class="servLocContent text-opensans">
                        <p>Home electrical systems are complex, and can be dangerous to work with if you don’t know what you’re doing. Hiring a trained electrician to take care of the electrical work in your home can also save you money in the long run by ensuring that all of the electrical work is done properly.</p>
                        <p>Electricians in Queens charge <strong>$50-$100 per hour</strong> for their repair and installation services. Call an electrician when you need help installing appliances, cable, or smart homes, or when you have a faulty outlet or light fixture.</p>
                        <p class="text-lato">
                            <a href="{{ route('NYC-Repair-Price_Electrician')}}" class="btn btn-green btn-green-shadow buttonArrow"><span class="d-block Bold">Learn More About Queens</span> Electrician Prices &amp; Service</a>
                        </p>
                    </div>
                </div>
            </div>
           
        </div>
    </section>
    <!-- //Cost of Electrician-->

    <!--Cost of Roofing-->
    <section class="section roofSection grayBG" id="roofingServ">
        <div class="container">
            <!--Title-->
            <div class="title text-center locationTitle-widget">
                <p class="locServiceIcon"><svg width="68" height="68" class="icon">
                    <use xlink:href="#roof-icon" ></use>
                </svg></p>
                <h2 class="wow bounceInDown" data-wow-delay="0.1s">How Much Does it Cost to Repair a Roof in Queens, New York City?</h2>
                <h4 class="wow bounceInLeft" data-wow-delay="0.1s">The New York City local government recently enacted new roofing laws as a part of their effort to reduce the city’s emissions.</h4>
            </div>
            <!--//Title-->

            <div class="row serviceBorderTop">
                <div class="col-md-6 order-md-2">
                    <p class="locServPic"><img src="{{ url('/public/frontend')}}/assets/images/location/roof-pic.jpg" alt=""></p>
                </div>
                <div class="col-md-6">
                    <div class="servLocContent text-opensans">
                        <p>These new laws require all new residential or commercial buildings, or those whose roof decking needs to be replaced, to install a green roof in lieu of a traditional shingle or tile roof. A green roof consists of one or a combination of vegetation, solar panels, and/or wine turbines.</p>
                        <p>If your roof does not require deck replacement, you won’t need to purchase green roof materials. The cost to repair a traditional roof can range from <strong>$300</strong> to over <strong>$1,000</strong> for basic repairs and maintenance.</p>
                        <p class="text-lato">
                            <a href="{{ route('NYC-Repair-Price_roofing')}}" class="btn btn-green btn-green-shadow buttonArrow"><span class="d-block Bold">Learn More About Queens</span> Roofer Prices &amp; Service</a>
                        </p>
                    </div>
                </div>
            </div>
           
        </div>
    </section>
    <!-- //Cost of Roofing-->

    <!--Cost to Fix an Air Conditioner-->
    <section class="section ACSection" id="acServ">
        <div class="container">
            <!--Title-->
            <div class="title text-center locationTitle-widget ttl875">
                <p class="locServiceIcon"><svg width="74" height="70" class="icon">
                    <use xlink:href="#ac-icon" ></use>
                </svg></p>
                <h2 class="wow bounceInDown" data-wow-delay="0.1s"><span class="mobBlock">How Much Does it Cost to Do Air Conditioner Maintenance in Queens, NYC?</h2>
                <h4 class="wow bounceInLeft" data-wow-delay="0.1s">Hiring an HVAC technician in New York City is the best option when you need AC or furnace repairs and maintenance.</h4>
            </div>
            <!--//Title-->

            <div class="row serviceBorderTop">
                <div class="col-md-6 order-md-2">
                    <p class="locServPic"><img src="{{ url('/public/frontend')}}/assets/images/location/ac-pic.jpg" alt=""></p>
                </div>
                <div class="col-md-6">
                    <div class="servLocContent text-opensans">
                        <p>Maintaining your AC ensures that it will work properly in the hot New York summers, and won’t fail when you need it most. A regularly maintained AC unit can last for up to five years longer than one that is irregularly maintained. AC maintenance in Queens costs <strong>$100-$150</strong> per year, versus over <strong>$400</strong> for the average repair.</p>
                        <p class="text-lato">
                            <a href="{{ route('NYC-Repair-Price_HVAC-Repair')}}" class="btn btn-green btn-green-shadow buttonArrow"><span class="d-block Bold">Learn More About Queens</span> HVAC Tech Prices &amp; Service</a>
                        </p>
                    </div>
                </div>
            </div>
           
        </div>
    </section>
    <!-- //Cost to Fix an Air Conditioner-->

    <!--Cost of Cabinets-->
    <section class="section cabinetsSection grayBG" id="cabinetServ">
        <div class="container">
            <!--Title-->
            <div class="title text-center locationTitle-widget">
                <p class="locServiceIcon"><svg width="74" height="74" class="icon">
                    <use xlink:href="#cabinet-icon" ></use>
                </svg></p>
                <h2 class="wow bounceInDown" data-wow-delay="0.1s">How Much Does it Cost to Install a New Door in Queens, NYC?</h2>
                <h4 class="wow bounceInLeft" data-wow-delay="0.1s">Depending on the type of door you choose to install, the project can take anywhere from 2-5 hours to complete.</h4>
            </div>
            <!--//Title-->

            <div class="row serviceBorderTop">
                <div class="col-md-6 order-md-2">
                    <p class="locServPic"><img src="{{ url('/public/frontend')}}/assets/images/location/door-pic.jpg" alt=""></p>
                </div>
                <div class="col-md-6">
                    <div class="servLocContent text-opensans">
                        <p>A carpenter or door installer typically charges <strong>$40-$90 per hour</strong> for new door installation, with the cost of the new door ranging from <strong>$30-$1,000+.</strong> </p>
                        <p class="text-lato">
                            <a href="{{ route('NYC-Repair-Price_CarpentryCabinets')}}" class="btn btn-green btn-green-shadow buttonArrow"><span class="d-block Bold">Learn More About Queens</span> Kitchen Cabinet Installer Prices &amp; Service</a>
                        </p>
                    </div>
                </div>
            </div>
           
        </div>
    </section>
    <!-- //Cost of Cabinets-->

    <!--Get Discounts with Reward Credits-->
    <section class="section connecting postTask-locations postTask-queens fullHeight">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 wow bounceInleft" data-wow-delay="0.1s">
                    <h2>Hire Repair &amp; Maintenance <span class="d-block">Pros in Queens, NYC</span> <span class="latoBlack">With SelectTask</span></h2> 
                    <div class="button mt-4">
                        <a href="{{ route('posttask-step1')}}" class="btn btn-primary btn-primary-shadow mw-300 btnLg post_a_task">Post a Task</a>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    <!--//Get Discounts with Reward Credits-->

    <section class="section zipcodeSection">
        <div class="container">
             <!--Title-->
             <div class="title text-center">
                <h2 class="wow bounceInDown" data-wow-delay="0.1s">Queens Select Task Service Zip Codes</h2>
            </div>
            <!--//Title-->
            <div class="mobileZipCode text-opensans d-block d-md-none">
                <p>Select from drop-down</p>
                <select class="form-control">
                    <option>10026</option>
                    <option>10027</option>
                    <option>10030</option>
                    <option>10037</option>
                    <option>10039</option>
                    <option>10001</option>
                    <option>10011</option>
                    <option>10018</option>
                    <option>10019</option>

                    <option>10020</option>
                    <option>10036</option>
                    <option>10029</option>
                    <option>10035</option>
                    <option>10010</option>
                    <option>10016</option>
                    <option>10017</option>
                    <option>10022</option>
                    <option>10012</option>

                    <option>10013</option>
                    <option>10014</option>
                    <option>10004</option>
                    <option>10005</option>
                    <option>10006</option>
                    <option>10007</option>
                    <option>10038</option>
                    <option>10280</option>
                    <option>10002</option>

                    <option>10003</option>
                    <option>10009</option>
                    <option>10021</option>
                    <option>10028</option>
                    <option>10044</option>
                    <option>10065</option>
                    <option>10075</option>
                    <option>10128</option>
                    <option>10023</option>

                    <option>10024</option>
                    <option>10025</option>
                    <option>10031</option>
                    <option>10032</option>
                    <option>10033</option>
                    <option>10034</option>
                    <option>10040</option>
                </select>
            </div>
            

            <ul class="zipcodes d-flex justify-content-center mobNone">
                <li><a href="#">10026</a></li>
                <li><a href="#">10027</a></li>
                <li><a href="#">10030</a></li>
                <li><a href="#">10037</a></li>
                <li><a href="#">10039</a></li>
                <li><a href="#">10001</a></li>
                <li><a href="#">10011</a></li>
                <li><a href="#">10018</a></li>
                <li><a href="#">10019</a></li>

                <li><a href="#">10020</a></li>
                <li><a href="#">10036</a></li>
                <li><a href="#">10029</a></li>
                <li><a href="#">10035</a></li>
                <li><a href="#">10010</a></li>
                <li><a href="#">10016</a></li>
                <li><a href="#">10017</a></li>
                <li><a href="#">10022</a></li>
                <li><a href="#">10012</a></li>

                <li><a href="#">10013</a></li>
                <li><a href="#">10014</a></li>
                <li><a href="#">10004</a></li>
                <li><a href="#">10005</a></li>
                <li><a href="#">10006</a></li>
                <li><a href="#">10007</a></li>
                <li><a href="#">10038</a></li>
                <li><a href="#">10280</a></li>
                <li><a href="#">10002</a></li>

                <li><a href="#">10003</a></li>
                <li><a href="#">10009</a></li>
                <li><a href="#">10021</a></li>
                <li><a href="#">10028</a></li>
                <li><a href="#">10044</a></li>
                <li><a href="#">10065</a></li>
                <li><a href="#">10075</a></li>
                <li><a href="#">10128</a></li>
                <li><a href="#">10023</a></li>

                <li><a href="#">10024</a></li>
                <li><a href="#">10025</a></li>
                <li><a href="#">10031</a></li>
                <li><a href="#">10032</a></li>
                <li><a href="#">10033</a></li>
                <li><a href="#">10034</a></li>
                <li><a href="#">10040</a></li>
            </ul>
        </div>
    </section>

    <!--Here’s How it Works-->
    <section class="section locationHIW">
        <div class="container">
            <!--Title-->
            <div class="title text-center maxW-350">
                <h2 class="wow bounceInDown" data-wow-delay="0.1s">How it Works</h2>
                <h4 class="wow bounceInLeft" data-wow-delay="0.1s">Let Taskers help tackle your to-do list!</h4>
            </div>
            <!--//Title-->
            <div class="row whyNYC text-center text-opensans responsive mobileSlickDots">
                <div class="col-md-4 whyNYCCol">
                    <div class="whyNYS-box">
                        <div class="icon centereditem"><img src="{{ url('/public/frontend')}}/assets/images/location/post-icon.svg" alt=""></div>
                        <div class="leftContentBox flex-grow-1">
                            <h3>Post a Task</h3>
                            <p>Posting is fast and easy. Just fill in the information needed, including photos of the job.</p>
                        </div>
                    </div>
                    
                </div>

                <div class="col-md-4 whyNYCCol">
                    <div class="whyNYS-box">
                        <div class="icon centereditem"><img src="{{ url('/public/frontend')}}/assets/images/location/assign-icon.svg" alt=""></div>
                        <div class="leftContentBox flex-grow-1">
                            <h3>Assign</h3>
                            <p>Review your applicants and assign the applicant that is a good fit for the job.</p>
                        </div>
                    </div>
                    
                </div>

                <div class="col-md-4 whyNYCCol">
                    <div class="whyNYS-box">
                        <div class="icon centereditem"><img src="{{ url('/public/frontend')}}/assets/images/location/complete-icon.svg" alt=""></div>
                        <div class="leftContentBox flex-grow-1">
                            <h3>Complete Job</h3>
                            <p>As soon as the job is completed change the statues to complete and give your review.</p>
                        </div>
                    </div>                    
                </div>
                
            </div>
        </div>
        
        
    </section>
    <!-- //Here’s How it Works-->

    <!-- Service Section -->
    <section class="section services diffStyle gray-BG">
        <div class="container">
            <!-- Title -->
            <div class="title text-center">
                <h2 class="wow bounceInDown" data-wow-delay="0.1s">Top Service Categories</h2>
                
            </div>
            <!-- //Title -->
            <div class="row customRow10 justify-content-center">
                <!-- Box Column -->
                <div class="col-sm-6 col-md-4 col-lg-3 custonCol10">
                    <a href="{{ route('posttask-step1')}}?cat=4">
					<div class="service-box wow bounceInLeft" data-wow-delay="0.1s">
					
                        <div class="icon">
                            <img src="{{ url('/public/frontend')}}/assets/images/painting-icon.svg" class="img-fluid" />
                        </div>
                        <h3>Painting</h3>
						
                    </div>
					</a>
                </div>
                <!-- //Box Column -->
                <!-- Box Column -->
                <div class="col-sm-6 col-md-4 col-lg-3 custonCol10">
				 <a href="{{ route('posttask-step1')}}?cat=2">
                    <div class="service-box wow bounceInLeft" data-wow-delay="0.1s">
                        <div class="icon">
                            <img src="{{ url('/public/frontend')}}/assets/images/handyman-icon.svg" class="img-fluid" />
                        </div>
                        <h3>Handyman</h3>
                    </div>
					</a>
                </div>
                <!-- //Box Column -->
                <!-- Box Column -->
                <div class="col-sm-6 col-md-4 col-lg-3 custonCol10">
				 <a href="{{ route('posttask-step1')}}?cat=5">
                    <div class="service-box wow bounceInRight" data-wow-delay="0.1s">
                        <div class="icon">
                            <img src="{{ url('/public/frontend')}}/assets/images/plumbing-icon.svg" class="img-fluid" />
                        </div>
                        <h3>Plumbing</h3>
                    </div>
					</a>
                </div>
                <!-- //Box Column -->
                <!-- Box Column -->
                <div class="col-sm-6 col-md-4 col-lg-3 custonCol10">
				 <a href="{{ route('posttask-step1')}}?cat=7">
                    <div class="service-box wow bounceInRight" data-wow-delay="0.1s">
                        <div class="icon">
                            <img src="{{ url('/public/frontend')}}/assets/images/elctric-icon.svg" class="img-fluid" />
                        </div>
                        <h3>Electric</h3>
                    </div>
					</a>
                </div>
                <!-- //Box Column -->
                <!-- Box Column -->
                <div class="col-sm-6 col-md-4 col-lg-3 custonCol10">
				 <a href="{{ route('posttask-step1')}}?cat=1">
                    <div class="service-box wow bounceInLeft" data-wow-delay="0.1s">
                        <div class="icon">
                            <img src="{{ url('/public/frontend')}}/assets/images/heating-icon.svg" class="img-fluid" />
                        </div>
                        <h3>Heating <span class="d-md-block">&amp; Cooling</span></h3>
                    </div>
					</a>
                </div>
                <!-- //Box Column -->
                <!-- Box Column -->
                <div class="col-sm-6 col-md-4 col-lg-3 custonCol10">
				 <a href="{{ route('posttask-step1')}}?cat=6">
                    <div class="service-box wow bounceInLeft" data-wow-delay="0.1s">
                        <div class="icon">
                            <img src="{{ url('/public/frontend')}}/assets/images/roofing-icon.svg" class="img-fluid" />
                        </div>
                        <h3>Roofing</h3>
                    </div>
					</a>
                </div>
                <!-- //Box Column -->
                <!-- Box Column -->
                <div class="col-sm-6 col-md-4 col-lg-3 custonCol10">
				 <a href="{{ route('posttask-step1')}}?cat=3">
                    <div class="service-box wow bounceInRight" data-wow-delay="0.1s">
                        <div class="icon">
                            <img src="{{ url('/public/frontend')}}/assets/images/general-contracting-icon.svg" class="img-fluid" />
                        </div>
                        <h3>General <span class="d-md-block">Contracting</span></h3>
                    </div>
					</a>
                </div>
                <!-- //Box Column -->
                <!-- Box Column -->
                <div class="col-sm-6 col-md-4 col-lg-3 custonCol10">
				 <a href="{{ route('posttask-step1')}}?cat=8">
                    <div class="service-box wow bounceInRight" data-wow-delay="0.1s">
                        <div class="icon">
                            <img src="{{ url('/public/frontend')}}/assets/images/carpentry-icon.svg" class="img-fluid" />
                        </div>
                        <h3>Carpentry</h3>
                    </div>
					</a>
                </div>
                <!-- //Box Column -->
                
            </div>

            <!--div class="text-center mt-4 mt-md-5 wow bounceInDown" data-wow-delay="0.1s">
                <a href="{{ route('posttask-step1')}}" class="btn btn-green btn-green-shadow mw-321 btnLg post_a_task">Post a Task</a>
            </div-->
           
        </div>
    </section>
    <!-- //Service Section -->

    <!-- Service Location Section -->
   <section class="section serviceLocAbout">
    <div class="container">
        
        <div class="row align-items-center">
            <div class="col-md-5 text-opensans headLato rightPad">
                <div class="title">
                    <h2>Service Locations</h2>
                    <p>Connect with professionals in your neighborhood.</p>
                </div>
            </div>
            <div class="col-md-7 leftBordr">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-4 col-6">
                        <a href="{{ route('Services-Location-TheBronx')}}" class="locItem text-center d-block">
                            <span class="locImageCol d-block"><img src="{{ url('/public/frontend')}}/assets/images/bronx-img.jpg" alt=""></span>
                            <span class="locName">The Bronx</span>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-4 col-6">
                        <a href="{{ route('Services-Location-Brooklyn')}}" class="locItem text-center d-block">
                            <span class="locImageCol d-block"><img src="{{ url('/public/frontend')}}/assets/images/brooklyn-img.jpg" alt=""></span>
                            <span class="locName">Brooklyn</span>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-4 col-6">
                        <a href="{{ route('Services-Location-Queens')}}" class="locItem text-center d-block">
                            <span class="locImageCol d-block"><img src="{{ url('/public/frontend')}}/assets/images/queens-img.jpg" alt=""></span>
                            <span class="locName">Queens</span>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-4 col-6">
                        <a href="{{ route('Services-Location-StatenIsland')}}" class="locItem text-center d-block">
                            <span class="locImageCol d-block"><img src="{{ url('/public/frontend')}}/assets/images/staten-Island-img.jpg" alt=""></span>
                            <span class="locName">Staten Island</span>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-4 col-6">
                        <a href="{{ route('service-locations')}}" class="locItem text-center d-block">
                            <span class="locImageCol d-block"><img src="{{ url('/public/frontend')}}/assets/images/newyork.jpg" alt=""></span>
                            <span class="locName">New York City</span>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-4 col-6">
                        <a href="{{ route('Services-Location-Manhattan')}}" class="locItem text-center d-block">
                            <span class="locImageCol d-block"><img src="{{ url('/public/frontend')}}/assets/images/manhattan.jpg" alt=""></span>
                            <span class="locName">Manhattan</span>
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- //Service Location Section -->

<!-- Call to action Section -->
<section class="calltoaction nyccalltoaction">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center">
            <div class="text">
                <h2>Start a Project today!</h5>
                <p>SelectTask accepts only the best pros.</p>
            </div>
            <div class="button ml-auto">
                <a href="{{ route('posttask-step1')}}" class="btn btn-primary btn-primary-shadow btnLg post_a_task">Post a Task</a>
            </div>
        </div>
    </div>
</section>
<!-- //Call to action Section -->
@endsection