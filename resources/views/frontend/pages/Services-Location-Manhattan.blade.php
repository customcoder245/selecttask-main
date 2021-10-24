@extends('frontend.layout.app')
@section('content')
 <!-- Banner Section -->
    <section class="banner innerbanner locationInnerBanner manhattanBanner">
        <div class="container">
            <div class="row align-items-md-center">
                <div class="col-md-7">
                    <div class="detail wow bounceInLeft" data-wow-delay="0.1s">
                        <h2><span class="d-block">Repair &amp; Installation Costs in</span> Manhattan, NY </h2>
                        <div class="bannerContent">
                            <p>Are you looking for help with your project but don’t know where to start? </p>
                            <p>Use this quick reference to learn more about Manhattan handyman prices, services, and more.</p>
                        </div>
                        <div class="nyc-banner-box">
                            <h4 class="mb-0">Post Your <strong>Free Task</strong> to Find Service Providers in <strong>Manhattan, New York</strong></h4>
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
            <span class="tpText">Cost to Hire a Handyman in Manhattan</span>
            <img src="{{ url('/public/frontend')}}/assets/images/arrow-right.svg" alt="">
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
                        <span class="tpText">Cost to Hire a Handyman in Manhattan</span>
                    </a>
                </li>
                <li>
                    <a href="#gcServ">
                        <span class="tpIcon">
                            <svg width="42" height="42" class="icon">
                                <use xlink:href="#gc-icon" ></use>
                            </svg>
                        </span>
                        <span class="tpText">Cost to Hire a General Contractor in Manhattan</span>
                    </a>
                </li>
                <li>
                    <a href="#plumberServ">
                        <span class="tpIcon">
                            <svg width="33" height="42" class="icon">
                                <use xlink:href="#plumber-icon" ></use>
                            </svg>
                        </span>
                        <span class="tpText">Cost to Hire a Plumber in Manhattan</span>
                    </a>
                </li>
                <li>
                    <a href="#painterServ">
                        <span class="tpIcon">
                            <svg width="27" height="42" class="icon">
                                <use xlink:href="#painter-icon" ></use>
                            </svg>
                        </span>
                        <span class="tpText">Cost to Hire a Painter in Manhattan</span>
                    </a>
                </li>
                <li>
                    <a href="#electricianServ">
                        <span class="tpIcon">
                            <svg width="42" height="42" class="icon">
                                <use xlink:href="#electrician-icon" ></use>
                            </svg>
                        </span>
                        <span class="tpText">Cost to Hire an Electrician in Manhattan</span>
                    </a>
                </li>
                <li>
                    <a href="#roofingServ">
                        <span class="tpIcon">
                            <svg width="42" height="42" class="icon">
                                <use xlink:href="#roof-icon" ></use>
                            </svg>
                        </span>
                        <span class="tpText">Cost to Hire a Roofing Contractor in Manhattan</span>
                    </a>
                </li>
                <li>
                    <a href="#acServ">
                        <span class="tpIcon">
                            <svg width="38" height="38" class="icon">
                                <use xlink:href="#ac-icon"></use>
                            </svg>
                        </span>
                        <span class="tpText">Cost to Fix AC in Manhattan</span>
                    </a>
                </li>
                <li>
                    <a href="#cabinetServ">
                        <span class="tpIcon">
                            <svg width="38" height="38" class="icon">
                                <use xlink:href="#cabinet-icon"></use>
                            </svg>
                        </span>
                        <span class="tpText">Cost to Replace Kitchen Cabinets in Manhattan</span>
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
                <h2 class="wow bounceInDown" data-wow-delay="0.1s"><span class="mobBlock">How Much Does it Cost</span> to Hire a Handyman <span class="d-lg-block">in Manhattan, NY?</span></h2>
                <h4 class="wow bounceInLeft" data-wow-delay="0.1s">A handyman is a skilled service professional who is equipped to perform many small tasks around your home.</h4>
            </div>
            <!--//Title-->

            <div class="row serviceBorderTop">
                <div class="col-md-6 order-md-2">
                    <p class="locServPic"><img src="{{ url('/public/frontend')}}/assets/images/location/handyman-pic.jpg" alt=""></p>
                </div>
                <div class="col-md-6">
                    <div class="servLocContent text-opensans">
                        <p>This type of service provider is a “jack of all trades” who can do anything from fix a running toilet to mount a TV on the wall. </p>
                        <p>Handymen typically charge for their services by the hour with a minimum service call-out fee. Hiring a handyman in Manhattan, NYC costs <strong>$60-$125</strong> per hour. Most also have a minimum service call fee of <strong>$75-$200</strong> for their visit.</p>
                        <p class="text-lato">
                            <a href="{{ route('NYC-Repair-Price_Handyman')}}" class="btn btn-green btn-green-shadow buttonArrow"><span class="d-block Bold">Learn More About Manhattan</span> Handyman Prices &amp; Service</a>
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
                <h2 class="wow bounceInDown" data-wow-delay="0.1s">Cost of General Contractors in Manhattan, NY</h2>
                <h4 class="wow bounceInLeft" data-wow-delay="0.1s">When you have a big remodel or new construction project in Manhattan, NYC, general contractors are the best pros for the job.</h4>
            </div>
            <!--//Title-->

            <div class="row serviceBorderTop">
                <div class="col-md-6 order-md-2">
                    <p class="locServPic"><img src="{{ url('/public/frontend')}}/assets/images/location/general-contractors-pic.jpg" alt=""></p>
                </div>
                <div class="col-md-6">
                    <div class="servLocContent text-opensans">
                        <p>They are adept at managing big construction projects, usually handling each aspect of the project from start to finish. Property owners who work with general contractors can rely on their expertise, as well as their connections to subcontractors, to complete the project quickly and on-budget.</p>
                        <p>General contractors in Manhattan usually charge their fee as a percentage of the entire project. You can expect to pay a markup of <strong>10%-25%</strong> for the services of a general contractor.</p>
                        <p class="text-lato">
                            <a href="{{ route('NYC-Repair-Price_GeneralContractor')}}" class="btn btn-green btn-green-shadow buttonArrow"><span class="d-block Bold">Learn More About Manhattan</span> General Contractor Prices &amp; Service</a>
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
                <h2 class="wow bounceInDown" data-wow-delay="0.1s">How Much Do Plumbers in Manhattan, NY Charge?</h2>
                <h4 class="wow bounceInLeft" data-wow-delay="0.1s">When you encounter a plumbing problem in your building, or are considering doing a kitchen or bathroom remodel, you’ll probably want to seek the help of a plumber.</h4>
            </div>
            <!--//Title-->

            <div class="row serviceBorderTop">
                <div class="col-md-6 order-md-2">
                    <p class="locServPic"><img src="{{ url('/public/frontend')}}/assets/images/location/plumber-pic.jpg" alt=""></p>
                </div>
                <div class="col-md-6">
                    <div class="servLocContent text-opensans">
                        <p>Plumbers in Manhattan usually charge by the hour with a minimum service call-out fee. The average plumbing service call in Manhattan costs about <strong>$388,</strong> which covers their hourly rate and service-call out fee.</p>
                        <p>The size and complexity of plumbing jobs can vary quite a lot, so make sure you include as much information as you can about the project to get the most accurate quote.</p>
                        <p class="text-lato">
                            <a href="{{ route('NYC-Repair-Price_plumbing')}}" class="btn btn-green btn-green-shadow buttonArrow"><span class="d-block Bold">Learn More About Manhattan</span> Plumber Prices & Service</a>
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
                <h2 class="wow bounceInDown" data-wow-delay="0.1s"><span class="mobBlock">How Much Does it</span> Cost to Paint a Condo <span class="d-md-block">in Manhattan, NY?</span> </h2>
                <h4 class="wow bounceInLeft" data-wow-delay="0.1s">Painters in Manhattan usually charge by the area to <span class="d-md-block">be painted in square feet.</span></h4>
            </div>
            <!--//Title-->

            <div class="row serviceBorderTop">
                <div class="col-md-6 order-md-2">
                    <p class="locServPic"><img src="{{ url('/public/frontend')}}/assets/images/location/paint-pic.jpg" alt=""></p>
                </div>
                <div class="col-md-6">
                    <div class="servLocContent text-opensans">
                        <p>The area is calculated by the professional painter, who measures the size of the walls in the room and subtracts the size of windows and doors from their final quote.</p>
                        <p>Painters in Manhattan charge between <strong>$3.71</strong> per sq ft on the low end, and <strong>$7.92</strong> per sq ft on the high end for an average of <strong>$5.82</strong> per sqft. Paint prices can also vary, however, on average cost <strong>$32.50</strong> per gallon, with one gallon providing 350 sqft of coverage. Factoring in the cost of labor and materials together, you can expect to pay about <strong>$6,000</strong> to paint 1,000 sq ft of space based on the average prices.</p>
                        <p class="text-lato">
                            <a href="{{ route('NYC-Repair-Price_painting')}}" class="btn btn-green btn-green-shadow buttonArrow"><span class="d-block Bold">Learn More About Manhattan</span> Painter Prices &amp; Service</a>
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
            <div class="title text-center locationTitle-widget">
                <p class="locServiceIcon"><svg width="73" height="73" class="icon">
                    <use xlink:href="#electrician-icon" ></use>
                </svg></p>
                <h2 class="wow bounceInDown" data-wow-delay="0.1s"><span class="mobBlock">How Much Does it</span> Cost to Hire an Electrician <span class="d-md-block">in Manhattan, NY?</span> </h2>
                <h4 class="wow bounceInLeft" data-wow-delay="0.1s">Electrical tasks are always best left to trained professionals.</h4>
            </div>
            <!--//Title-->

            <div class="row serviceBorderTop">
                <div class="col-md-6 order-md-2">
                    <p class="locServPic"><img src="{{ url('/public/frontend')}}/assets/images/location/electrician-pic.jpg" alt=""></p>
                </div>
                <div class="col-md-6">
                    <div class="servLocContent text-opensans">
                        <p>Working with a building’s wiring and electrical systems can be very dangerous, and can lead to fire and health hazards when done improperly. Like plumbers and many other service professionals, electricians in Manhattan charge by the hour with a minimum service call-out fee. The average cost for electricians in Manhattan is <strong>$97</strong> per hour, with a typical service call costing <strong>$388.</strong></p>
                        <p>Remember, electrical work can be extremely dangerous. While it may be alright to DIY small tasks like changing out a light fixture, ALWAYS leave projects that involve the building’s electrical panel or internal wiring to certified professionals.</p>
                        <p class="text-lato">
                            <a href="{{ route('NYC-Repair-Price_Electrician')}}" class="btn btn-green btn-green-shadow buttonArrow"><span class="d-block Bold">Learn More About Manhattan</span> Electrician Prices &amp; Service</a>
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
                <h2 class="wow bounceInDown" data-wow-delay="0.1s">Cost to Replace a Roof <span class="mobBlock">in Manhattan, NY</span></h2>
                <h4 class="wow bounceInLeft" data-wow-delay="0.1s">You may have heard that New York City has recently (2019) implemented a new set of laws regarding roofing construction and repairs.</h4>
            </div>
            <!--//Title-->

            <div class="row serviceBorderTop">
                <div class="col-md-6 order-md-2">
                    <p class="locServPic"><img src="{{ url('/public/frontend')}}/assets/images/location/roof-pic.jpg" alt=""></p>
                </div>
                <div class="col-md-6">
                    <div class="servLocContent text-opensans">
                        <p>The new regulations state that when a new roof deck is required on a New York City residential or commercial building, they must be fitted with vegetation, solar panels, and/or wind turbines.</p>
                        <p>As long as your roof does not require deck replacement, this will not apply to your roof repairs. The cost of repairing or replacing a roof can range from about <strong>$1,500-$8,500+</strong> depending on the size and material of the roof. Small repairs can cost as little as <strong>$300</strong> for tasks like replacing a couple shingles or sealing a small leak.</p>
                        <p class="text-lato">
                            <a href="{{ route('NYC-Repair-Price_roofing')}}" class="btn btn-green btn-green-shadow buttonArrow"><span class="d-block Bold">Learn More About Manhattan</span> Roofer Prices &amp; Service</a>
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
                <h2 class="wow bounceInDown" data-wow-delay="0.1s"><span class="mobBlock">How Much Does it Cost to</span> Fix an Air Conditioner <span class="d-md-block">in Manhattan, NY?</span></h2>
                <h4 class="wow bounceInLeft" data-wow-delay="0.1s">NYC HVAC technicians are responsible for repairing and maintaining the heating, cooling, and ventilation systems in a building.</h4>
            </div>
            <!--//Title-->

            <div class="row serviceBorderTop">
                <div class="col-md-6 order-md-2">
                    <p class="locServPic"><img src="{{ url('/public/frontend')}}/assets/images/location/ac-pic.jpg" alt=""></p>
                </div>
                <div class="col-md-6">
                    <div class="servLocContent text-opensans">
                        <p>Regular maintenance of your furnace and AC are essential to ensure that they function properly when they’re needed most. Yearly tune-ups for AC and furnaces are recommended to keep them in the best condition and prevent malfunction.</p>
                        <p>HVAC technicians typically charge <strong>$75-$150</strong> per hour for their services, with the average AC repair in Manhattan costing for parts and labor.</p>
                        <p class="text-lato">
                            <a href="{{ route('NYC-Repair-Price_HVAC-Repair')}}" class="btn btn-green btn-green-shadow buttonArrow"><span class="d-block Bold">Learn More About Manhattan</span> HVAC Tech Prices &amp; Service</a>
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
                <h2 class="wow bounceInDown" data-wow-delay="0.1s"><span class="mobBlock">How Much Do</span> New Kitchen Cabinets Cost <span class="d-md-block">in Manhattan, NY?</span></h2>
                <h4 class="wow bounceInLeft" data-wow-delay="0.1s">New cabinets are a great way to update the look and feel of your kitchen without opting for a full remodel.</h4>
            </div>
            <!--//Title-->

            <div class="row serviceBorderTop">
                <div class="col-md-6 order-md-2">
                    <p class="locServPic"><img src="{{ url('/public/frontend')}}/assets/images/location/cabinet-pic.jpg" alt=""></p>
                </div>
                <div class="col-md-6">
                    <div class="servLocContent text-opensans">
                        <p>You can hire a skilled carpenter or kitchen cabinet installer in Manhattan to measure your kitchen, recommend cabinets, and properly install them.</p>
                        <p>Kitchen cabinets are priced by the linear foot. When you purchase stock, or premade kitchen cabinets, you can expect to pay <strong>$180-$380</strong> per linear foot of cabinets. The average cost to replace kitchen cabinets in NYC is <strong>$2,500-$10,500</strong> depending on the size of the kitchen and your choice in cabinets.</p>
                        <p class="text-lato">
                            <a href="{{ route('NYC-Repair-Price_CarpentryCabinets')}}" class="btn btn-green btn-green-shadow buttonArrow"><span class="d-block Bold">Learn More About Manhattan</span> Kitchen Cabinet Installer Prices &amp; Service</a>
                        </p>
                    </div>
                </div>
            </div>
           
        </div>
    </section>
    <!-- //Cost of Cabinets-->

    <!--Get Discounts with Reward Credits-->
    <section class="section connecting postTask-locations fullHeight">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 wow bounceInleft" data-wow-delay="0.1s">
                    <h2>Hire Repair &amp; Maintenance <span class="d-block">Pros in Manhattan, NYC</span> <span class="latoBlack">With SelectTask</span></h2> 
                    <div class="button mt-4">
                        <a href="{{ route('posttask-step1') }}" class="btn btn-primary btn-primary-shadow mw-300 btnLg post_a_task">Post a Task</a>
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
                <h2 class="wow bounceInDown" data-wow-delay="0.1s">SelectTask Service Location: Manhattan, NY</h2>                
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
                <a href="{{ route('posttask-step1') }}" class="btn btn-green btn-green-shadow mw-321 btnLg post_a_task">Post a Task</a>
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
                <a href="{{ route('posttask-step1') }}" class="btn btn-primary btn-primary-shadow btnLg post_a_task">Post a Task</a>
            </div>
        </div>
    </div>
</section>
<!-- //Call to action Section -->
@endsection
