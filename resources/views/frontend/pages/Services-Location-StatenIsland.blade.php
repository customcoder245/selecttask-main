@extends('frontend.layout.app')
@section('content') 
 <!-- Banner Section -->
    <section class="banner innerbanner locationInnerBanner statenislandBanner">
        <div class="container">
            <div class="row align-items-md-center">
                <div class="col-md-7">
                    <div class="detail wow bounceInLeft" data-wow-delay="0.1s">
                        <h2><span class="d-md-block">Repair and Installation Costs in</span> Staten Island, NY</h2>
                        <div class="bannerContent">
                            <p>Do you need help with your project, but don’t know where to start?</p>
                            <p>Use this quick reference guide to learn more about Staten Island handyman prices, services, and more. Click the links in each section to read helpful articles about each service and understand more about your repair task.</p>
                        </div>
                        <div class="nyc-banner-box">
                            <h4 class="mb-0">Post Your <strong>Free Task</strong> to Find Service Providers in <strong>Staten Island, New York</strong></h4>
                        </div>
                        <div class="button">
                            <a href="{{ route('posttask-step1')}}" class="btn btn-green btn-green-shadow mr-md-4 mw-321 btnLg">Post a Task</a>
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
            <span class="tpText">Cost to Hire a Handyman in Staten Island</span>
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
                        <span class="tpText">Cost to Hire a Handyman in Staten Island</span>
                    </a>
                </li>
                <li>
                    <a href="#gcServ">
                        <span class="tpIcon">
                            <svg width="42" height="42" class="icon">
                                <use xlink:href="#gc-icon" ></use>
                            </svg>
                        </span>
                        <span class="tpText">Cost to Hire a General Contractor in Staten Island</span>
                    </a>
                </li>
                <li>
                    <a href="#plumberServ">
                        <span class="tpIcon">
                            <svg width="33" height="42" class="icon">
                                <use xlink:href="#plumber-icon" ></use>
                            </svg>
                        </span>
                        <span class="tpText">Cost to Hire a Plumber in Staten Island</span>
                    </a>
                </li>
                <li>
                    <a href="#painterServ">
                        <span class="tpIcon">
                            <svg width="27" height="42" class="icon">
                                <use xlink:href="#painter-icon" ></use>
                            </svg>
                        </span>
                        <span class="tpText">Cost to Hire a Painter in Staten Island</span>
                    </a>
                </li>
                <li>
                    <a href="#electricianServ">
                        <span class="tpIcon">
                            <svg width="42" height="42" class="icon">
                                <use xlink:href="#electrician-icon" ></use>
                            </svg>
                        </span>
                        <span class="tpText">Cost to Hire an Electrician in Staten Island</span>
                    </a>
                </li>
                <li>
                    <a href="#roofingServ">
                        <span class="tpIcon">
                            <svg width="42" height="42" class="icon">
                                <use xlink:href="#roof-icon" ></use>
                            </svg>
                        </span>
                        <span class="tpText">Cost to Hire a Roofing Contractor in Staten Island</span>
                    </a>
                </li>
                <li>
                    <a href="#acServ">
                        <span class="tpIcon">
                            <svg width="38" height="38" class="icon">
                                <use xlink:href="#ac-icon"></use>
                            </svg>
                        </span>
                        <span class="tpText">Cost to Fix AC in Staten Island</span>
                    </a>
                </li>
                <li>
                    <a href="#cabinetServ">
                        <span class="tpIcon">
                            <svg width="38" height="38" class="icon">
                                <use xlink:href="#cabinet-icon"></use>
                            </svg>
                        </span>
                        <span class="tpText">Cost to Replace Kitchen Cabinets in Staten Island</span>
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
                <h2 class="wow bounceInDown" data-wow-delay="0.1s">How Much Does a Handyman in Staten Island Cost?</h2>
                <h4 class="wow bounceInLeft" data-wow-delay="0.1s">When you have small odd jobs or repair tasks that need to be done around your home, a handyman is the pro to call</h4>
            </div>
            <!--//Title-->

            <div class="row serviceBorderTop">
                <div class="col-md-6 order-md-2">
                    <p class="locServPic"><img src="{{ url('/public/frontend')}}/assets/images/location/handyman-pic.jpg" alt=""></p>
                </div>
                <div class="col-md-6">
                    <div class="servLocContent text-opensans">
                        <p>A handyman can perform a variety of services such as repairing minor plumbing issues, building furniture, resurfacing cabinets, and more.</p>
                        <p>Handymen in NYC typically charge an hourly rate of <strong>$60-$125</strong> for their services, though many also implement minimum service call fees. You can expect to pay <strong>$75-$200</strong> for a handyman service call.</p>
                        <p class="text-lato">
                            <a href="{{ route('NYC-Repair-Price_Handyman')}}" class="btn btn-green btn-green-shadow buttonArrow"><span class="d-block Bold">Learn More About Staten Island</span> Handyman Prices &amp; Service</a>
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
                <h2 class="wow bounceInDown" data-wow-delay="0.1s">Cost to Hire a General Contractor in Staten Island, NY </h2>
                <h4 class="wow bounceInLeft" data-wow-delay="0.1s">General contractors in Staten Island, NYC are highly skilled professionals who oversee large construction projects from start to finish.</h4>
            </div>
            <!--//Title-->

            <div class="row serviceBorderTop">
                <div class="col-md-6 order-md-2">
                    <p class="locServPic"><img src="{{ url('/public/frontend')}}/assets/images/location/general-contractors-pic.jpg" alt=""></p>
                </div>
                <div class="col-md-6">
                    <div class="servLocContent text-opensans">
                        <p>They understand each aspect of remodels and new construction, from creating the initial plans, to hiring subcontractors, to managing expenses, and more. Property owners usually pay a lump sum for the project to the general contractor, who then implements the construction plan.</p>
                        <p>General contractors typically charge a percentage markup of the entire cost of the project to compensate them for their time and expertise. When you hire a general contractor in Staten Island, you can expect to pay a markup of <strong>10%-25%</strong> for their services.</p>
                        <p class="text-lato">
                            <a href="{{ route('NYC-Repair-Price_GeneralContractor')}}" class="btn btn-green btn-green-shadow buttonArrow"><span class="d-block Bold">Learn More About Staten Island</span> General Contractor Prices &amp; Service</a>
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
                <h2 class="wow bounceInDown" data-wow-delay="0.1s">Cost to Hire a Plumber in Staten Island, NYC</h2>
                <h4 class="wow bounceInLeft" data-wow-delay="0.1s">NYC plumbers can help with any potential water- or gas-line issues that you may encounter in your home, or they can assist with new construction and remodels of kitchens and bathrooms.</h4>
            </div>
            <!--//Title-->

            <div class="row serviceBorderTop">
                <div class="col-md-6 order-md-2">
                    <p class="locServPic"><img src="{{ url('/public/frontend')}}/assets/images/location/plumber-pic.jpg" alt=""></p>
                </div>
                <div class="col-md-6">
                    <div class="servLocContent text-opensans">
                        <p>Staten Island plumbers usually charge hourly for their services, along with a minimum service call-out fee. Hiring a plumber in Staten Island costs an average of <strong>$113.60</strong> per hour.</p>
                        <p>The size and complexity of plumbing jobs varies, so make sure you include as much information as you can about the project to get the most accurate quote.</p>
                        <p class="text-lato">
                            <a href="{{ route('NYC-Repair-Price_plumbing')}}" class="btn btn-green btn-green-shadow buttonArrow"><span class="d-block Bold">Learn More About Staten Island</span> Plumber Prices & Service</a>
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
                <h2 class="wow bounceInDown" data-wow-delay="0.1s">How Much Does it Cost to Paint an Apartment in Staten Island?</h2>
                <h4 class="wow bounceInLeft" data-wow-delay="0.1s">Painters in Staten Island measure and calculate the area to be painted to determine an accurate quote for their services. </h4>
            </div>
            <!--//Title-->

            <div class="row serviceBorderTop">
                <div class="col-md-6 order-md-2">
                    <p class="locServPic"><img src="{{ url('/public/frontend')}}/assets/images/location/paint-pic.jpg" alt=""></p>
                </div>
                <div class="col-md-6">
                    <div class="servLocContent text-opensans">
                        <p>Painters typically charge per sq ft for their services, with an average price of <strong>$3.71-$7.92 per sq ft.</strong> Their quote will be based on the size of the room, minus the area of the doors and windows that do not require paint.</p>
                        <p>A gallon of paint costs an average of <strong>$32.50.</strong> One gallon of paint covers about 350 sq ft of space. Once the cost of labor and materials are factored in, you can expect to pay about <strong>$9,000</strong> to paint 1,500 sq ft of space.</p>
                        <p class="text-lato">
                            <a href="{{ route('NYC-Repair-Price_painting')}}" class="btn btn-green btn-green-shadow buttonArrow"><span class="d-block Bold">Learn More About Staten Island</span> Painter Prices &amp; Service</a>
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
                <h2 class="wow bounceInDown" data-wow-delay="0.1s">Cost to Hire an Electrician in Staten Island, NY</h2>
                <h4 class="wow bounceInLeft" data-wow-delay="0.1s">Electrical tasks, even small ones, can be dangerous and should be handled by trained electricians.</h4>
            </div>
            <!--//Title-->

            <div class="row serviceBorderTop">
                <div class="col-md-6 order-md-2">
                    <p class="locServPic"><img src="{{ url('/public/frontend')}}/assets/images/location/electrician-pic.jpg" alt=""></p>
                </div>
                <div class="col-md-6">
                    <div class="servLocContent text-opensans">
                        <p>Attempting DIY electrical work without the proper experience and tools can lead to fire and health hazards. Similar to many other service professionals, Staten Island electricians usually charge hourly with a minimum service call fee. The average cost for electricians in Staten Island is <strong>$50-$110</strong> per hour.</p>
                        <p>Call a Staten Island electrician when you need help with tasks like electrical outlet repair, cable & home theater installation, light fixture installation, appliance repair, and more.</p>
                        <p class="text-lato">
                            <a href="{{ route('NYC-Repair-Price_Electrician')}}" class="btn btn-green btn-green-shadow buttonArrow"><span class="d-block Bold">Learn More About Staten Island</span> Electrician Prices &amp; Service</a>
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
                <h2 class="wow bounceInDown" data-wow-delay="0.1s">How Much Does it Cost to Replace a Roof in Staten Island, NYC</h2>
                <h4 class="wow bounceInLeft" data-wow-delay="0.1s">New York City passed a new set of laws in 2019 regarding roofing construction, known as the “green new deal.”</h4>
            </div>
            <!--//Title-->

            <div class="row serviceBorderTop">
                <div class="col-md-6 order-md-2">
                    <p class="locServPic"><img src="{{ url('/public/frontend')}}/assets/images/location/roof-pic.jpg" alt=""></p>
                </div>
                <div class="col-md-6">
                    <div class="servLocContent text-opensans">
                        <p>These new regulations have been implemented to help improve the city’s air quality and reduce the carbon footprint. The laws state that New York City residential or commercial buildings must be fitted with vegetation, solar panels, and/or wind turbines when the roof decking is replaced.</p>
                        <p>Provided that your roof does not require deck replacement, these laws will not apply to you. The cost of partial or complete replacement of a roof in Staten Island can cost between <strong>$1,500-$12,000</strong> depending how big your roof is and what it’s made from. Small repairs can cost about <strong>$300-$500</strong> when the roof requires minor shingle replacement or leak seals.</p>
                        <p class="text-lato">
                            <a href="{{ route('NYC-Repair-Price_roofing')}}" class="btn btn-green btn-green-shadow buttonArrow"><span class="d-block Bold">Learn More About Staten Island</span> Roofer Prices &amp; Service</a>
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
                <h2 class="wow bounceInDown" data-wow-delay="0.1s">How Much Does it Cost to Fix a Furnace in Staten Island, NY?</h2>
                <h4 class="wow bounceInLeft" data-wow-delay="0.1s">HVAC technicians in Staten Island are skilled pros with experience maintaining and repairing a building’s heating, cooling, and ventilation systems.</h4>
            </div>
            <!--//Title-->

            <div class="row serviceBorderTop">
                <div class="col-md-6 order-md-2">
                    <p class="locServPic"><img src="{{ url('/public/frontend')}}/assets/images/location/furnace-pic.jpg" alt=""></p>
                </div>
                <div class="col-md-6">
                    <div class="servLocContent text-opensans">
                        <p>When a furnace is properly maintained, it often does not require repairs during the cold winter months when it is needed most. Yearly furnace maintenance costs an average of <strong>$100-$150.</strong></p>
                        <p>If your furnace does happen to malfunction, Staten Island NYC HVAC technicians usually charge about <strong>$75-$100 per hour</strong> for their services. The total cost of the repair can vary depending on the part that is broken, and even the time of year.</p>
                        <p class="text-lato">
                            <a href="{{ route('NYC-Repair-Price_HVAC-Repair')}}" class="btn btn-green btn-green-shadow buttonArrow"><span class="d-block Bold">Learn More About Staten Island</span> HVAC Tech Prices &amp; Service</a>
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
                <h2 class="wow bounceInDown" data-wow-delay="0.1s">How Much Does it Cost to Install a New Window in Staten Island, NYC?</h2>
                <h4 class="wow bounceInLeft" data-wow-delay="0.1s">While they are sturdy components of a building, windows still do not last forever. Windows typically need to be replaced every 15-20 years.</h4>
            </div>
            <!--//Title-->

            <div class="row serviceBorderTop">
                <div class="col-md-6 order-md-2">
                    <p class="locServPic"><img src="{{ url('/public/frontend')}}/assets/images/location/window-pic.jpg" alt=""></p>
                </div>
                <div class="col-md-6">
                    <div class="servLocContent text-opensans">
                        <p>When it’s time to install a new window, you can hire a carpenter or window installer to measure the area, recommend the correct type of window, and properly fix the window to the building.</p>
                        <p>There are many different types of windows that can be installed in a home, such as single- or double-slung, casement, awning, or picture windows. Single- and double-slung are the most common, and least expensive window choices. Purchasing a new single- or double-slung window costs about <strong>$100-$400,</strong> plus <strong>$100-$300</strong> in labor cost for the installation.</p>
                        <p class="text-lato">
                            <a href="{{ route('NYC-Repair-Price_CarpentryCabinets')}}" class="btn btn-green btn-green-shadow buttonArrow"><span class="d-block Bold">Learn More About Staten Island</span> Kitchen Cabinet Installer Prices &amp; Service</a>
                        </p>
                    </div>
                </div>
            </div>
           
        </div>
    </section>
    <!-- //Cost of Cabinets-->

    <!--Get Discounts with Reward Credits-->
    <section class="section connecting postTask-locations postTask-statenisland fullHeight">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 wow bounceInleft" data-wow-delay="0.1s">
                    <h2>Hire Repair &amp; Maintenance <span class="d-block">Pros in Staten Island, NYC</span> <span class="latoBlack">With SelectTask</span></h2> 
                    <div class="button mt-4">
                        <a href="{{ route('posttask-step1')}}" class="btn btn-primary btn-primary-shadow mw-300 btnLg">Post a Task</a>
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
                <h2 class="wow bounceInDown" data-wow-delay="0.1s">Staten Island Select Task Service Zip Codes</h2>
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
                <a href="{{ route('posttask-step1')}}" class="btn btn-green btn-green-shadow mw-321 btnLg">Post a Task</a>
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
                <a href="{{ route('posttask-step1')}}" class="btn btn-primary btn-primary-shadow btnLg">Post a Task</a>
            </div>
        </div>
    </div>
</section>
<!-- //Call to action Section -->
@endsection