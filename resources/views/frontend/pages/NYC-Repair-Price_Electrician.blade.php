  @extends('frontend.layout.app')
@section('content')
 <!-- Banner Section -->
    <section class="banner innerbanner NYC-Pricing-innerBanner NYC-electrician-Banner">
        <div class="container">
            <div class="row align-items-md-center">
                <div class="col-md-8">
                    <div class="detail wow bounceInLeft maxW-350" data-wow-delay="0.1s">
                        <h2>The Cost to Hire an <span class="mobBlock">Electrician in NYC</span></h2>
                        <h3>Find out how much it costs for a NYC electrician to install a light fixture, fix a circuit breaker box, install an air conditioner, and more</h3>
                        <div class="nyc-banner-box">
                            <ul class="nycBox-list">
                                <li>
                                    <h4>Average Electrician Service Call Cost in <span class="d-md-block">New York City:</span></h4>
                                    <ul class="listText text-opensans">
                                        <li><strong>$350</strong></li>
                                    </ul>                                    
                                </li>
                                <li>
                                    <h4>Average Price Per Hour of Electricians in <span class="d-md-block">New York City:</span></h4>
                                    <ul class="listText text-opensans">
                                        <li>Per Hour: <strong>$50 - $110</strong></li>
                                    </ul>                                    
                                </li>
                            </ul>
                        </div>
                        <div class="button">
                            <a href="{{ route('posttask-step1')}}?cat=7" class="btn btn-green btn-green-shadow mr-md-4 mw-321 btnLg">Get a Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //Banner Section -->

    <!--Service Categories-->
    <section class="section servicesTopSection NYCPrices-section">
        <div class="container">
            <div class="row">
                <div class="NYCRightCol blogCol flex-grow-1 order-md-2">
                    <div class="rtSection blogLinks d-none d-md-block">
                        <h3>Other Services Prices</h3>
                        <ul>
                             <li><a href="{{ route('NYC-Repair-Price_plumbing')}}">Plumbing Cost</a></li>
                            <li><a href="{{ route('NYC-Repair-Price_Electrician')}}">Electrician Cost</a></li>
                            <li><a href="{{ route('NYC-Repair-Price_roofing')}}">Roofing Cost</a></li>
                            <li><a href="{{ route('NYC-Repair-Price_HVAC-Repair')}}">HVAC Repair Cost</a></li>
                            <li><a href="{{ route('NYC-Repair-Price_CarpentryCabinets')}}">Carpentry - Cabinets Cost</a></li>
                            <li><a href="{{ route('NYC-Repair-Price_windowDoor')}}">Carpentry - Windows &amp; Doors Cost</a></li>
                            <li><a href="{{ route('NYC-Repair-Price_Handyman')}}">Cost to Hire a Handyman</a></li>
                            <li><a href="{{ route('NYC-Repair-Price_GeneralContractor')}}">Cost to Hire a General Contractor</a></li>
                            <li><a href="{{ route('NYC-Repair-Price_painting')}}">Cost To Hire a Professional Painter</a></li>
                       </ul>
                    </div><!--Other Services Prices-->
                    <div class="rtSection orangeBox rtBox d-none d-md-block">
                        <div class="icon postIcon justify-content-center">
                            <img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/hire_electrician.svg" class="img-fluid" width="125" height="125">
                        </div>
                        <p>Looking to <strong class="d-block">Hire a Electrician?</strong></p>
                        <div class="button mt-4">
                            <a href="{{ route('posttask-step1')}}?cat=7" class="btn btn-primary btn-primary-shadow btn52 post_a_task">Post a Task</a>
                        </div>                        
                    </div>
                    <div id="sticky-anchor"></div>
                    <div class="rtSection contentLinks d-none d-md-block" id="sidescroller-menu">
                        <h3>Table of Contents</h3>
                        <h4>Navigation</h4>                        
                        <ul class="contentList-price">
                            <li><a href="#content_overview"><span>Overview</span></a>
                                <ul>
                                    <li><a href="#content_plumbingServices"><span>Services Electricians Offer</span></a>
                                        <ul>
                                            <li><a href="#InstallationUpgrades"><span>Installation & Upgrades</span></a>
                                                <ul>
                                                    <li><a href="#AppliancesFixtures"><span>Appliances &amp; Fixtures</span></a></li>
                                                    <li><a href="#InternetCableSetup"><span>Internet &amp; Cable Setup</span></a></li>
                                                    <li><a href="#SmartHomesSecurity"><span>Smart Homes &amp; Security</span></a></li>
                                                </ul>
                                            </li>     
                                            <li><a href="#Repairs"><span>Repairs</span></a></li>                                       
                                        </ul>
                                    </li> 
                                    
                                    <li><a href="#content_hiringPlumber"><span>Hiring a Professional</span></a></li>
                                    <li><a href="#content_PermitsJob"><span>Safety Information</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#content_AverageServiceCost"><span>Average Service Costs</span></a>
                                <ul>
                                    <li><a href="#content_pricingWorks"><span>How Electrician Pricing Works</span></a></li>

                                    <li><a href="#content_ApplianceInstallation"><span>Cost of Appliance Installation & Upgrades</span></a>
                                        <ul>
                                            <li><a href="#HomeAppliances"><span>Home Appliances</span></a></li>
                                            <li><a href="#Lighting"><span>Lighting</span></a></li>
                                            <li><a href="#SmartHomesSecurity"><span>Smart Homes &amp; Security</span></a></li>
                                            <li><a href="#HomeTheater"><span>TV &amp; Home Theater</span></a></li>
                                            <li><a href="#GeneratorsSolar"><span>Generators &amp; Solar</span></a></li>
                                        </ul>
                                    </li>
                                    
                                    <li><a href="#content_minorRepairs"><span>Cost of Minor Electrical Repairs</span></a>
                                        <ul>
                                            <li><a href="#ReplacingPowerOutlets"><span>Replacing Power Outlets</span></a></li>
                                            <li><a href="#LightingRepairs"><span>Lighting Repairs</span></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#content_mmajorRepairs"><span>Cost of Major Electrical Repairs</span></a>
                                        <ul>
                                            <li><a href="#RewiringHome"><span>Rewiring a Home</span></a></li>
                                            <li><a href="#ReplacingElectrical"><span>Replacing an Electrical Panel</span></a></li>
                                            <li><a href="#DownedPowerLines"><span>Downed Power Lines</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{ route('posttask-step1')}}?cat=7"><span>Find a Electrician in New York City</span></a></li>
                            <li><a href="#serviceFAQ"><span>FAQs</span></a></li>
                        </ul>
                    </div>

                    

                </div>
                <div class="NYCLeftCol blogCol flex-grow-1 order-md-1" id="content-holder">
                    <div class="priceContent-box boxContent-pad text-opensans text-center">
                        <h2>About NYC Electrician Services & Prices</h2>
                        <p>An electrician can provide many services, which can vary widely in cost depending on the service and location of the project. This complete guide will give you the information you need to choose the best professionals to get the job done right.</p>
                        <p>How much it costs to hire an electrician in New York City greatly depends on the type of job. Where a simple outlet repair or appliance installation may cost around <strong>$250-$400</strong>, larger projects like rewiring a home or repairing a weatherhead can cost over <strong>$1,000.</strong></p>
                    </div><!--// About NYC Electrician Services & Prices-->
                    <div class="priceContent-box boxContent-pad text-center">
                        <h2>Need a Electrician?</h2>
                        <ul class="nyc-painting d-flex flex-wrap mt-md-4 mt-xl-5">
                             <li><a href="{{ route('service-locations')}}">New York City</a></li>
                        <li><a href="{{ route('Services-Location-TheBronx')}}">The Bronx</a></li>
                        <li><a href="{{ route('Services-Location-Brooklyn')}}">Brooklyn</a></li>
                        <li><a href="{{ route('Services-Location-Queens')}}">Queens</a></li>
                        <li><a href="{{ route('Services-Location-StatenIsland')}}">Staten Island</a></li>
                        <li><a href="{{ route('Services-Location-Manhattan')}}">Manhattan</a></li>
                        </ul>
                    </div><!--// Get Free Quotes from Painters in NYC-->
                    <div class="priceContent-box text-opensans">
                        <h2 class="boxContent-pad mb-0">Table of Contents</h2>
                        
                        <ul class="tableContent-list mobLeft">
                            <li><a href="#content_overview"><span>Overview</span></a>
                                <ul class="subContent-list">
                                    <li><a href="#content_plumbingServices"><span>Services Electricians Offer</span></a>
                                        
                                        <ul>
                                            <li><a href="#InstallationUpgrades"><span>Installation & Upgrades</span></a>
                                                <ul>
                                                    <li><a href="#AppliancesFixtures"><span>Appliances &amp; Fixtures</span></a></li>
                                                    <li><a href="#InternetCableSetup"><span>Internet &amp; Cable Setup</span></a></li>
                                                    <li><a href="#SmartHomesSecurity"><span>Smart Homes &amp; Security</span></a></li>
                                                </ul>
                                            </li>     
                                            <li><a href="#Repairs"><span>Repairs</span></a></li>                                       
                                        </ul>
                                    </li> 
                                   
                                    <li><a href="#content_hiringPlumber"><span>Hiring a Professional</span></a></li>
                                    <li><a href="#content_PermitsJob"><span>Safety Information</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#content_AverageServiceCost"><span>Average Service Costs</span></a>
                                <ul class="subContent-list">
                                    <li><a href="#content_pricingWorks"><span>How Electrician Pricing Works</span></a></li>

                                    <li><a href="#content_ApplianceInstallation"><span>Cost of Appliance Installation & Upgrades</span></a>
                                        <ul>
                                            <li><a href="#HomeAppliances"><span>Home Appliances</span></a></li>
                                            <li><a href="#Lighting"><span>Lighting</span></a></li>
                                            <li><a href="#SmartHomesSecurity"><span>Smart Homes &amp; Security</span></a></li>
                                            <li><a href="#HomeTheater"><span>TV &amp; Home Theater</span></a></li>
                                            <li><a href="#GeneratorsSolar"><span>Generators &amp; Solar</span></a></li>
                                        </ul>
                                    </li>
                                    
                                    <li><a href="#content_minorRepairs"><span>Cost of Minor Electrical Repairs</span></a>
                                        <ul>
                                            <li><a href="#ReplacingPowerOutlets"><span>Replacing Power Outlets</span></a></li>
                                            <li><a href="#LightingRepairs"><span>Lighting Repairs</span></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#content_mmajorRepairs"><span>Cost of Major Electrical Repairs</span></a>
                                        <ul>
                                            <li><a href="#RewiringHome"><span>Rewiring a Home</span></a></li>
                                            <li><a href="#ReplacingElectrical"><span>Replacing an Electrical Panel</span></a></li>
                                            <li><a href="#DownedPowerLines"><span>Downed Power Lines</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{ route('posttask-step1')}}?cat=7"><span>Find a Electrician in New York City</span></a></li>
                            <li><a href="#serviceFAQ"><span>FAQs</span></a></li>
                        </ul>
                    </div><!--// Table of Contents-->

                    <div class="priceContent-box">
                        <div class="boxContent-pad text-opensans">
                            <div class="subBox-Content" id="content_overview">                                
                                <h2>Overview </h2>
                                <p class="paintImg"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/electrician-pic1.jpg" alt=""></p>
                               
                            </div><!--//Overview-->

                            <div class="subBox-Content" id="content_plumbingServices">
                                <h2>Services Electricians Offer</h2>
                                <p class="mb-4">Small electrical repairs or appliance installation make up the vast majority of typical electrician service calls. Electricians are licensed to perform such tasks, and have the experience to handle them quickly and safely.</p>
                                <h2 id="InstallationUpgrades">Installation & Upgrades</h2>
                                <h3 class="dot_h3" id="AppliancesFixtures">Appliances & Fixtures</h3>
                                <div class="ContentSibling">
                                    <p>You may want to seek the help of an electrician when you decide to add or upgrade light fixtures in your home to ensure that the wiring and switches are properly in place. Electricians are also well equipped to correctly install a variety of home appliances, replace air conditioning units, and connect backup generators. Looking to add solar panels to your home? They can do that too!</p>
                                </div>
                                
                                <h3 class="dot_h3" id="SmartHomesSecurity">Smart Homes & Security</h3>
                                <div class="ContentSibling">
                                    <p>Connecting your home or office to the ever-expanding “Internet of things” adds modern convenience to your space, and gives you control over your environment. Wi-Fi speakers, smart lights, and smart locks are all increasingly common devices that you may want to add to your home. You can also include high-tech security devices to your smart home setup for maximum home protection and peace of mind.</p>
                                    
                                </div>
                            </div><!--//Services Electricians Offer-->
                            <div class="subBox-Content" id="Repairs">
                                <h2>Minor Repairs</h2>
                                <p>Electricians are trained to safely examine and repair things like electrical circuit panels, broken outlets, lighting, and other common issues. When you encounter a problem with the wiring or electrical systems in your home, always opt to hire a professional; electrical work can be very dangerous, and often requires equipment that doesn’t come in a standard tool kit.</p> 
                                <p>Repairs that fall under this category include:</p>
                                <div class="grayList-Widget">
                                    <ul class="bulletedList-content mobLeft m-0">
                                        <li><strong>Circuit panel repairs</strong></li>
                                        <li><strong>Outlet repairs </strong></li>
                                        <li><strong>A/C &eating repairs</strong></li>
                                    </ul>
                                </div>
                                <p>Depending on the service, electricians in New York City typically charge around <strong>$150-$400</strong> for a service call to fix these problems. Check out our complete cost guide for more info on minor electrical repair prices.</p>
                                <h2 class="mt-4">Major Repairs</h2>
                                <p>When major electrical issues plague your property, calling an electrician immediately is the best course of action. They can quickly evaluate the cause of the problem, and most importantly, determine if the issue presents a fire or safety hazard to those who inhabit the building.</p>
                                <p>Major electrical repairs include:</p>
                                <div class="grayList-Widget">
                                    <ul class="bulletedList-content mobLeft m-0">
                                        <li><strong>Rewiring a building</strong></li>
                                        <li><strong>Replacing a circuit breaker panel</strong></li>
                                        <li><strong>Weatherheadepairs</strong></li>
                                    </ul>
                                </div>
                                <p><strong>NEVER</strong> try to handle issues like these yourself. Electrical work can be extremely dangerous, and is best left to those with proper training, experience, and tools.</p>
                            </div><!--//Repair-->

                            <div class="subBox-Content" id="content_hiringPlumber">
                                <p class="paintImg"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/electrician-pic2.jpg" alt=""></p>
                                <h2>Hiring a Professional Electrician</h2>
                                <p>All electrical work in New York City must be performed by a licensed electrician. In order to obtain a license, electricians must meet certain requirements established by the New York City local government and pass an exam. Once these requirements are met, they are granted either a <strong>Master Electrician</strong> or <strong>Special Electrician</strong> license. These licenses are renewed on a yearly basis.</p>
                                <p>Another thing to keep in mind when you have an electrician perform an installation or repair is the warranty they provide for their work. Most electrical companies offer some kind of guarantee for all of the services they perform, and may also include a warranty with any qualifying services or parts they provide. Ask the electrical contractor about what kind of guarantees they offer to ensure great service.</p>
                            </div><!--//Hiring a Professional Plumber-->
                            <div class="subBox-Content" id="content_PermitsJob">
                                <h2>Safety Information</h2>
                                <p>Though many repair or installation tasks can be DIY’d, any jobs that involve messing with the electrical systems in your home should ALWAYS be performed by a licensed electrician. Electrical jobs, big and small, can pose serious safety risks both to you and others in the building. Fire and electrocution hazards lie around every corner when it comes to electrical work. Even if you feel absolutely certain that you can handle an electrical task, <strong>hiring a professional is always the safest and best option.</strong></p>
                            </div><!--//Safety Information-->
                        </div>                        
                        <div class="boxContent-pad getQuoteBox" id="findPlumberNYC">
                            <p class="mb-4 mb-lg-5"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/getQuote-icon.svg" alt=""></p>
                            <h2>Ready to Get Started?</h2>
                            <p>Post Your Task to Get in Touch with <span class="d-block">Electrician in New York City.</span> </p>
                            <p class="mt-4 mt-lg-5"><a href="{{ route('posttask-step1')}}?cat=7" class="btn btn-green btn-green-shadow btn-sm">Get a Quote</a></p>
                        </div><!--// Ready to Get Started?-->

                        <div class="boxContent-pad text-opensans" id="content_AverageServiceCost">
                            <div class="subBox-Content">
                                <h2>Average Service Costs</h2>
                                <h2 id="content_pricingWorks">How Electrician Pricing Works?</h2>
                                <p>The cost of hiring an electrician for your project can vary depending on factors like the cost of materials and the time to complete the job. Hiring a local electrician is the best way to ensure that your electrical repair or installation task is handled correctly.</p>
                                <p>When an electrician is called for a regular service call, they will usually charge either a <strong>service call minimum</strong> or <strong>hourly rate.</strong> Depending on the task, calling an electrician in New York City to evaluate and fix minor problems can cost anywhere from <strong>$150-$400.</strong> This typically accounts for their travel time and additional expenses like tools, vehicles, and parking. </p>
                                <p>Electricians in NYC cost <strong>$65-$130</strong> per hour. Most electricians charge a call-out fee or a first-hour rate of <strong>$75-$150</strong> to ensure that they are adequately compensated for their time and expertise when assessing the job, even if you do not end up using their services. After the first hour or two, the electrician will revert to their typical hourly rate. The electrician may also have a fixed price for certain standard installation and repair tasks.</p>
                            </div>
                        </div><!--//How Plumber Pricing Works?-->

                        <!--div class="boxContent-pad getQuoteBox orangeBox" id="findPlumberNYC">
                            <p class="mb-4 mb-lg-5"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/hire_electrician.svg" alt=""></p>
                            <h2>Ready to Get Started?</h2>
                            <p>Find a Great Electrician in New York City with  <span class="d-block">SelectTask</span> </p>
                            <p class="mt-4 mt-lg-5"><a href="{{ route('posttask-step1')}}?cat=7" class="btn btn-primary btn-primary-shadow btn-sm post_a_task">Post a Task</a></p>
                        </div--><!--// Ready to Get Started?-->

                        <div class="boxContent-pad text-opensans">                            
                            <div class="subBox-Content" id="content_ApplianceInstallation">
                                <h2>Cost of Electrical Services</h2>
                                <h3 class="dot_h3">Cost of Appliance Installation & Upgrades</h3>
                                <h3 id="HomeAppliances">A. Home Appliances</h3>
                                <p>Installing new appliances is one of the most common tasks for an electrician. They have the necessary tools and know how to reroute wiring and properly hook up electrical connections and water or gas lines.</p>
                                <h3>Cost of Installing Appliances in New York City</h3>
                                <div class="table-responsive">
                                    <table class="table avrPriceTable text-lato">
                                        <thead>
                                            <tr>
                                                <th>Appliance</th>
                                                <th class="th2">Average  Labor Cost</th>
                                                <th class="th3">Time to Install</th>
                                            </tr>                                            
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-opensans semiBold">Refrigerator</td>
                                                <td><span class="textGreen latoBlack">$150-$250</span></td>
                                                <td><span class="textGreen latoBlack">&lt;1 Hour</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-opensans semiBold">Stove</td>
                                                <td><span class="textGreen latoBlack">$100-$200</span></td>
                                                <td><span class="textGreen latoBlack">1-2 Hours</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-opensans semiBold">Rangehood</td>
                                                <td><span class="textGreen latoBlack">$300-$600</span></td>
                                                <td><span class="textGreen latoBlack">2.5 Hours</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-opensans semiBold">Dishwasher</td>
                                                <td><span class="textGreen latoBlack">$200-$500</span></td>
                                                <td><span class="textGreen latoBlack">2-3 Hours</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-opensans semiBold">Washer & Dryer</td>
                                                <td><span class="textGreen latoBlack">$100-$175</span></td>
                                                <td><span class="textGreen latoBlack">1 Hour</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-opensans semiBold">Air Conditioner</td>
                                                <td><span class="textGreen latoBlack">$500-$2,500</span></td>
                                                <td><span class="textGreen latoBlack">4-8 Hours</span></td>
                                            </tr>
                                        </tbody>
                                    </table></div>
                                    <p>These prices reflect the cost to install normal home appliances. Consult your electrician for the cost to install industrial and smart home appliances.</p>
                                    <p>Here is a quick reference for how much you might pay for new appliances if you have not yet purchased them.</p>
                                    <p>
                                        <span class="d-block">Refrigerator - <strong>$430-$10,600</strong></span>
                                        <span class="d-block">Stove - <strong>$410-$7,500</strong></span>
                                        <span class="d-block">Range Hood - <strong>$45-$2,450</strong></span>
                                        <span class="d-block">Dishwasher - <strong>$330-$1,900</strong></span> 
                                        <span class="d-block">Washer  - <strong>$445-$2,300</strong></span>
                                        <span class="d-block">Dryer - <strong>$445-$2,100</strong></span>
                                        <span class="d-block">Air Conditioner - <strong>$1,500-$4,000</strong></span>
                                    </p>

                                    <h3 id="Lighting">B. Lighting</h3>
                                    <p>Lighting installation is another common task that electricians can perform. Though this can often be DIY’d, you may want to consider hiring an electrician for this job when any kind of ceiling or switch wiring is involved. You can expect to pay an electrician <strong>$75-$200</strong> per fixture, though certain types of fixtures may cost <strong>$300+</strong> to install. Your cost per fixture will likely go down if you install multiple fixtures on the same day.</p>

                                    <h3 id="SmartHomesSecurity">C. Smart Homes & Security</h3>
                                    <p>Electricians are trained and equipped to set up an array of smart home devices, from smart appliances, speaker systems, and home security systems. Smart devices need to be properly connected to your home’s electrical system and Wi-Fi network, and could also require fixing or mounting the physical device.</p>
                                    <h2 class="mt-4 mt-lg-5">Cost to Install Smart Homes in New York City</h2>
                                    <p>An electrician will likely charge an hourly rate for smart device installation. Because electricians usually charge a call-out fee or first-hour fee, having multiple devices installed at once is the most cost-effective option for this kind of task</p>
                                    <h3>Hourly Rates for Electricians in New York City</h3>
									<h3>Manhattan</h3>
                                 <div class="table-responsive">
                                        <table class="table avrPriceTable text-lato">
                                            <thead>
                                                <tr>
                                                    <th class="th2">Low</th>
                                                    <th class="th3">Average</th>
                                                    <th class="th4">High</th>
                                                </tr>  
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><span class="textGreen latoBlack">$65</span></td>
                                                    <td><span class="textGreen latoBlack">$100</span></td>
                                                    <td><span class="textGreen latoBlack">$130</span></td>
                                                </tr>
                                            </tbody>
                                        </table></div>
										<h3>Brooklyn, The Bronx, Staten Island, Queens</h3>
										<div class="table-responsive">
                                            <table class="table avrPriceTable text-lato">
                                                <thead>
                                                    <tr>
                                                        <th class="th2">Low</th>
                                                        <th class="th3">Average</th>
                                                        <th class="th4">High</th>
                                                    </tr>  
                                                </thead>
                                                <tbody> 
                                                    <tr>
                                                        <td><span class="textGreen latoBlack">$50</span></td>
                                                        <td><span class="textGreen latoBlack">$80</span></td>
                                                        <td><span class="textGreen latoBlack">$100</span></td>
                                                    </tr>                
                                                </tbody>
                                            </table></div>
										
                                    <h3 id="HomeTheater">D. TV & Home Theater</h3>
                                    <p>Home theaters are an exciting addition to any home. Film buffs and football enthusiasts alike can better enjoy their hobbies with large HD or 4K television setups, premium seating, surround sound, and more. An electrician can set up and consolidate the wiring required for home theater systems, so you can enjoy it hassle-free for years to come.</p>
                                    <p>What is a home theater? A home theater system is much more involved than simply mounting a TV and hooking up a speaker bar. Installing a home theater often entails custom design, rewiring, TV and surround sound installation, and dimmable lighting systems.</p>
                                    <p>Home theater systems, including the equipment, devices, and labor typically cost between <strong>$2,500-$33,000.</strong> </p>
                                    <h3 id="GeneratorsSolar">E. Backup Generators & Solar Power</h3>
                                    <h2>Cost to Install a Backup Generator in New York City</h2>
                                    <p>Backup generators are the best way to protect your home, family, or business in the event of a power outage. They add convenience when you find yourself in such situations and can even make your property safer.</p>
                                    <p>
                                        <span class="d-block"><strong>7-10 kW</strong> - <strong>$350-$1,400</strong></span>
                                        <span class="d-block"><strong>12-20 kW</strong> - <strong>$1,800-$4,000</strong></span>
                                        <span class="d-block"><strong>22-45 kW</strong> - <strong>$5,000-$9,000</strong></span>
                                        <span class="d-block"><strong>>45 kW</strong> - <strong>$10,000+</strong></span>                                        
                                    </p>

                                    <h2 class="mt-4 mt-lg-5">Cost to Install Solar Panels in New York City</h2>
                                    <p>Solar panels are a great way to cut your energy costs, and you can often receive government incentives for installing them. The upfront cost of installing solar panels sometimes incites a bit of sticker shock, but it can be a good investment in the long run. The total cost to install solar panels in New York City can range between <strong>$2.50-$3 per watt</strong> , or <strong>$9,255-$24,552</strong> total for the typical residential power requirements of 6-8 kW of continuous power. 
                                    </p>
                                                     
                            </div><!--//Cost of Service Calls for Plumbers-->
                            <div class="subBox-Content" id="content_minorRepairs">
                                <p class="paintImg"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/electrician-pic3.jpg" alt=""></p>
                                <h2>Cost of Hiring an Electrician for Minor Repairs</h2>
                                <h3>A. Replacing Power Outlets </h3>
                                <p>When flipping the breaker switch doesn’t fix an outlet that isn’t receiving power, you’ll likely need an electrician to repair the wiring connected to the outlet. If you notice burn marks or heat emanating from the outlet, or notice a slight buzzing noise, call an electrician immediately. They can safely disassemble the outlet to determine what the issue may be</p>
                                <h3>Cost to Replace a Power Outlet in New York City</h3>
                                <p>Electricians usually charge by the hour for this type of repair. Replacing power outlets does not take long for a seasoned professional, so you can expect to pay somewhere near their minimum service call-out fee. See how electrician pricing works to learn more about electrician call-out fees.</p>
                                <p>Depending on the type of outlet, you’ll need a different part to replace the old one. The electrician will include the cost of the part(s) along with their labor cost when they give you a quote.</p>
                                <div class="table-responsive">
                                    <table class="table avrPriceTable text-lato">
                                        <thead>
                                            <tr>
                                                <th>Outlet Type</th>
                                                <th class="th2">Cost of Part</th>
                                            </tr>                                            
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-opensans semiBold">Standard: 15-amp 120V</td>
                                                <td><span class="textGreen latoBlack">$3-$5 or $13-$22 with USB</span></td>                                            
                                            </tr>
                                            <tr>
                                                <td class="text-opensans semiBold">Large Appliances: 220V-250V</td>
                                                <td><span class="textGreen latoBlack">$10-$20</span></td>                                            
                                            </tr>
                                            <tr>
                                                <td class="text-opensans semiBold">GFCI (Grounded Outlet for Rooms Near Water): 125V-250V</td>
                                                <td><span class="textGreen latoBlack">$7-$25</span></td>                                            
                                            </tr>                         
                                        </tbody>
                                    </table></div>
                                
                                    <h3>B. Lighting Repairs</h3>
                                    <p>An electrician can easily examine and repair any issues you may be having with your home’s lighting. Issues like overlamping – or using bulbs that draw more power than is approved for the fixture – can be solved by simply replacing the bulb with the proper wattage; however, if you require more light for that area of your home, an electrician can install a new fixture with a higher power rating. Click here to see how much it costs to install a new light fixture.</p>
                                    <p>Flickering lights often result from simple wiring issues relating to the fixture or switch. For repairs of this nature, an electrician in New York will typically charge their regular service call-out fee and hourly rate. You can expect to pay <strong>$150-$400</strong> for this type of service, which can be completed in as little as an hour or two as long as no special parts are required.</p>
                            </div><!--//Cost of Hiring an Electrician for Minor Repairs-->

                            <div class="subBox-Content" id="content_mmajorRepairs">
                                <p class="paintImg"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/electrician-pic4.jpg" alt=""></p>
                                <h2>Cost of Major Electrical Repairs</h2>
                                <p>Major electrical repairs should ALWAYS be left to the professionals. If you suspect that your property has any of the following issues, contact an electrician immediately to have the issue assessed. Major electrical problems present imminent safety and fire hazards, and should only be repaired by trained electricians who have the expertise and tools to perform the job safely. </p>
                                <h3 id="RewiringHome">A. Rewiring an Existing Building</h3>
                                <p>Rewiring a building is an extensive project that requires time, patience, and an experienced technician. Depending on the age of the building and complexity of the project, rewiring a home in New York City can cost anywhere from <strong>$3,000-$10,000+</strong> for parts and labor. If the project requires wall and ceiling repairs, the cost can quickly exceed <strong>$15,000</strong> for larger properties. Because these projects can vary greatly for each building, you’ll want the electrician to perform a thorough inspection and give an exact quote for the work to be performed.
                                </p>
                                <h3 id="ReplacingElectrical">B. Replacing an Electrical Panel</h3>
                                <p>When a circuit breaker panel goes bad, there is little chance that it can be repaired. The electrical systems in many homes still operate from outdated circuit boxes, which can become easily overloaded with the increasing use of technology that we see today. The cost of replacing an electrical panel in New York City can range from <strong>$1,000-$4,000+</strong> for the unit and installation, depending on the needed amperage of the building. Consult the electrician if you own a large property that may have larger electrical needs than a typical home.</p>

                                <h3 id="DownedPowerLines">C. Downed Power Lines</h3>
                                <p>For a project of this nature, you’ll likely want to hire an electrician with at least 10 years of experience. Consult the electrician and utility company for exact quotes if your home has lost power due to a downed line.</p>
                                <p>“In New York City, the local utility company (<a href="https://www.coned.com/en" _target="blank" class="underlineLink Bold">Con Edison</a>) is responsible for properly mounting downed power lines back to the house or where they fell from. The customer is responsible for hiring an electrician to reconnect the power lines to their own incoming service.” - Pasquale Ceriello of Ceriello Electric in Brooklyn, N.Y.</p>
                                
                                
                            </div><!--//Cost of Major Electrical Repairs-->

                           
                        </div>

                        <div class="boxContent-pad servicesFaq" id="serviceFAQ">
                            <h2>FAQ’s</h2>
                            <div id="accordion" class="faqAccordion">
                                <div class="card collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <div class="card-header" id="headingOne">
                                      <h5 class="mb-0">How do I know if my home needs to be rewired?</h5>
                                      <img src="{{ url('public/frontend')}}/assets/images/chevron-down.svg" alt="">
                                    </div>
                                
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                      <div class="card-body">Old or faulty home wiring poses a serious fire hazard, and should be replaced as soon as it is discovered. If your home was built between 1920 and 1960 and still has the original wiring, you should hire an electrician to rewire it to prevent fire hazards.</div>
                                    </div>
                                </div>
                
                                <div class="card collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="card-header" id="headingTwo">
                                      <h5 class="mb-0">What causes blown fuses?</h5>
                                      <img src="{{ url('public/frontend')}}/assets/images/chevron-down.svg" alt="">
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                      <div class="card-body">An overloaded circuit is the most common cause of a blown fuse, often caused by high-wattage appliances like microwaves, air conditioners, space heaters, or hair dryers.</div>
                                    </div>
                                  </div>
                
                                  <div class="card collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <div class="card-header" id="headingThree">
                                      <h5 class="mb-0">Should I install a generator?</h5>
                                      <img src="{{ url('public/frontend')}}/assets/images/chevron-down.svg" alt="">
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">While you may not frequently use a generator, they can prevent potential health and safety hazards that result from power outages. Even having a small generator ensures that you’ll be able to run essential equipment, such as a space heater in sub-zero winter temperature.</div>
                                    </div>
                                  </div>
                
                                  <div class="card collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                    <div class="card-header" id="headingfour">
                                      <h5 class="mb-0">Why are the lights inside of my home flickering?</h5>
                                      <img src="{{ url('public/frontend')}}/assets/images/chevron-down.svg" alt="">
                                    </div>
                                    <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                                        <div class="card-body">Flickering lights can have a number of causes. The most common ones include problems with the bulb itself, loose light plugs, or faulty fixtures and switches. Your light fixture could also have a wiring issue related to your home’s electrical system.</div>
                                    </div>
                                  </div>
                
                                  
                            </div>
                            <p class="mt-4"><a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class="textGreen underlineLink collapsed">Sources</a></p>
                            <ul class="source-list mt-2 collapse" id="collapseExample" style="">
                                <li><a href="https://raleighelectricians.com/5-electrical-repairs-for-professionals" target="_blank">https://raleighelectricians.com/5-electrical-repairs-for-professionals</a></li>
                                <li><a href="https://studentscholarships.org/salary/407/electricians.php" target="_blank">https://studentscholarships.org/salary/407/electricians.php</a></li>
                                <li><a href="https://homeguide.com/costs/electrician-cost-per-hour" target="_blank">https://homeguide.com/costs/electrician-cost-per-hour</a></li>
                                <li><a href="https://www.homeadvisor.com/cost/kitchens/install-an-appliance" target="_blank">https://www.homeadvisor.com/cost/kitchens/install-an-appliance</a></li>
                                <li><a href="https://www.homedepot.com/services/c/light-fixture-installation/3135f7cf8" target="_blank">https://www.homedepot.com/services/c/light-fixture-installation/3135f7cf8</a></li>
                                <li><a href="https://www.inchcalculator.com/electrical-work-cost-guide" target="_blank">https://www.inchcalculator.com/electrical-work-cost-guide</a></li>
                                <li><a href="https://www.fixr.com/costs/install-backup-generator" target="_blank">https://www.fixr.com/costs/install-backup-generator</a></li>
                                <li><a href="https://www.consumeraffairs.com/solar-energy/how-much-do-solar-panels-cost.html" target="_blank">https://www.consumeraffairs.com/solar-energy/how-much-do-solar-panels-cost.html</a></li>
                                <li><a href="https://modernize.com/solar/panel-cost-calculator" target="_blank">https://modernize.com/solar/panel-cost-calculator</a></li>
                                <li><a href="https://www.homeadvisor.com/cost/electrical/install-an-outlet" target="_blank">https://www.homeadvisor.com/cost/electrical/install-an-outlet</a></li>
                                <li><a href="https://romanelectrichome.com/outlet-doesnt-work" target="_blank">https://romanelectrichome.com/outlet-doesnt-work</a></li>
                                <li><a href="https://www.bouldenbrothers.com/5-simple-electrical-repairs" target="_blank">https://www.bouldenbrothers.com/5-simple-electrical-repairs</a></li>
                            </ul>
						
						</div><!--FAQ's-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //Service Categories-->

    <!--Service Categories-->
    <section class="section NYCPrices-section diffGray" id="scrollingBottomPoint">
        <div class="container">
            <div class="title text-center">
                <h2 class="wow bounceInDown" data-wow-delay="0.1s">Other category prices in NYC</h2>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 services-widget">
                   <a href="{{ route('NYC-Repair-Price_Handyman')}}">
     				   <div class="borderedframe">
                        <p class="servicePic position-relative"><img src="{{ url('public/frontend')}}/assets/images/services/handyman-pic.jpg" alt=""><span class="servicePriceTag text-opensans centereditem">$3k</span></p>
                        <div class="serviceText">
                            <h5>Handyman</h5>
                            <p>Don’t settle for a quick fix — let a pro get the job done right.</p>
                        </div>
                    </div>
					</a>
                </div>

                <div class="col-md-4 col-sm-6 services-widget">
                   <a href="{{ route('NYC-Repair-Price_painting')}}">
    				   <div class="borderedframe">
                        <p class="servicePic position-relative"><img src="{{ url('public/frontend')}}/assets/images/services/painting-pic.jpg" alt=""></p>
                        <div class="serviceText">
                            <h5>Painting</h5>
                            <p>Making your life a little more colorful, one wall at a time.</p>
                        </div>
                    </div>
					</a>
                </div>

                <div class="col-md-4 col-sm-6 services-widget">
                   <a href="{{ route('NYC-Repair-Price_plumbing')}}">
				   <div class="borderedframe">
                        <p class="servicePic position-relative"><img src="{{ url('public/frontend')}}/assets/images/services/plumbing-pic.jpg" alt=""><span class="servicePriceTag text-opensans centereditem">$90</span></p>
                        <div class="serviceText">
                            <h5>Plumbing</h5>
                            <p>Solve your kitchen and bathroom woes with ease.</p>
                        </div>
                    </div>
					</a>
                </div>

                <div class="col-md-4 col-sm-6 services-widget">
                   <a href="{{ route('NYC-Repair-Price_Electrician')}}">
    				   <div class="borderedframe">
                        <p class="servicePic position-relative"><img src="{{ url('public/frontend')}}/assets/images/services/electric-pic.jpg" alt=""><span class="servicePriceTag text-opensans centereditem">$3k</span></p>
                        <div class="serviceText">
                            <h5>Electric</h5>
                            <p>Certified electricians are always the safest (and best) option.</p>
                        </div>
                    </div>
					</a>
                </div>

                <div class="col-md-4 col-sm-6 services-widget">
                    <a href="{{ route('NYC-Repair-Price_CarpentryCabinets')}}">
					<div class="borderedframe">
                        <p class="servicePic position-relative"><img src="{{ url('public/frontend')}}/assets/images/services/cabinets-pic.jpg" alt=""><span class="servicePriceTag text-opensans centereditem">$3k</span></p>
                        <div class="serviceText">
                            <h5>Cabinets</h5>
                            <p>Elevate your space with professionally installed cabinets</p>
                        </div>
                    </div>
					</a>
                </div>

                <div class="col-md-4 col-sm-6 services-widget">
                  <a href="{{ route('NYC-Repair-Price_windowDoor')}}">
         				  <div class="borderedframe">
                        <p class="servicePic position-relative"><img src="{{ url('public/frontend')}}/assets/images/services/windows-pic.jpg" alt=""><span class="servicePriceTag text-opensans centereditem">$3k</span></p>
                        <div class="serviceText">
                            <h5>Windows</h5>
                            <p>Hire a pro to install new energy-efficient windows </p>
                        </div>
                    </div>
					</a>
                </div>

                <div class="col-md-4 col-sm-6 services-widget">
                    <a href="{{ route('NYC-Repair-Price_roofing')}}">
					 <div class="borderedframe">
                        <p class="servicePic position-relative"><img src="{{ url('public/frontend')}}/assets/images/services/roofing-pic.jpg" alt=""><span class="servicePriceTag text-opensans centereditem">$3k</span></p>
                        <div class="serviceText">
                            <h5>Roofing</h5>
                            <p>Our roofing experts take excellent service to new heights.</p>
                        </div>
                    </div>
					</a>
                </div>

                <div class="col-md-4 col-sm-6 services-widget">
                    <a href="{{ route('NYC-Repair-Price_GeneralContractor')}}">
					  <div class="borderedframe">
                        <p class="servicePic position-relative"><img src="{{ url('public/frontend')}}/assets/images/services/carpentry-pic.jpg" alt=""><span class="servicePriceTag text-opensans centereditem">$3k</span></p>
                        <div class="serviceText">
                            <h5>General Contracting</h5>
                            <p>For big home-improvement jobs, talk to a general contractor</p>
                        </div>
                    </div>
					</a>
                </div>

                <div class="col-md-4 col-sm-6 services-widget">
                   <a href="{{ route('NYC-Repair-Price_HVAC-Repair')}}">
   				   <div class="borderedframe">
                        <p class="servicePic position-relative"><img src="{{ url('public/frontend')}}/assets/images/services/security-pic.jpg" alt=""><span class="servicePriceTag text-opensans centereditem">$3k</span></p>
                        <div class="serviceText">
                            <h5>HVAC Repairs</h5>
                            <p>Maintain your heating and cooling systems to prevent malfunctions</p>
                        </div>
                    </div>
					</a>
                </div>

            </div>
        </div>
    </section>
    <!-- //Service Categories-->

    <!--banner-->
    <section class="section connecting getStarted-electric priceGetStarted">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 wow bounceInleft" data-wow-delay="0.1s">
                    <h2>Find a Electrician <span class="mobBlock">in New York City</span></h2>                    
                    <h3 class="subheadinggray mt-3">Click on your <strong>New York City Borough</strong> <span class="d-md-block">Below to Get Free Quotes from Electrician in Your Neighborhood.</span></h3>
                    <ul class="nyc-painting d-flex flex-wrap mt-md-4 mt-xl-5">
                         <li><a href="{{ route('service-locations')}}">New York City</a></li>
                        <li><a href="{{ route('Services-Location-TheBronx')}}">The Bronx</a></li>
                        <li><a href="{{ route('Services-Location-Brooklyn')}}">Brooklyn</a></li>
                        <li><a href="{{ route('Services-Location-Queens')}}">Queens</a></li>
                        <li><a href="{{ route('Services-Location-StatenIsland')}}">Staten Island</a></li>
                        <li><a href="{{ route('Services-Location-Manhattan')}}">Manhattan</a></li>
                    </ul>
                </div>
               
            </div>
        </div>
    </section>
    <!--//banner-->

    <!--How it Works-->
    <section class="section locationHIW">
        <div class="container">
            <!--Title-->
            <div class="title text-center maxW-350">
                <h2 class="wow bounceInDown" data-wow-delay="0.1s">How it works.</h2>
                <h4 class="wow bounceInLeft" data-wow-delay="0.1s">Let Taskers help tackle your to-do list!</h4>
            </div>
            <!--//Title-->
            <div class="row whyNYC text-center text-opensans responsive mobileSlickDots">
                <div class="col-md-4 whyNYCCol">
                    <div class="whyNYS-box">
                        <div class="icon centereditem"><img src="{{ url('public/frontend')}}/assets/images/location/post-icon.svg" alt=""></div>
                        <div class="leftContentBox flex-grow-1">
                            <h3>Post a Task</h3>
                            <p>Posting is fast and easy. Just fill in the information needed, including photos of the job.</p>
                        </div>
                    </div>
                    
                </div>

                <div class="col-md-4 whyNYCCol">
                    <div class="whyNYS-box">
                        <div class="icon centereditem"><img src="{{ url('public/frontend')}}/assets/images/location/assign-icon.svg" alt=""></div>
                        <div class="leftContentBox flex-grow-1">
                            <h3>Assign</h3>
                            <p>Review your applicants and assign the applicant that is a good fit for the job.</p>
                        </div>
                    </div>
                    
                </div>

                <div class="col-md-4 whyNYCCol">
                    <div class="whyNYS-box">
                        <div class="icon centereditem"><img src="{{ url('public/frontend')}}/assets/images/location/complete-icon.svg" alt=""></div>
                        <div class="leftContentBox flex-grow-1">
                            <h3>Complete Job</h3>
                            <p>As soon as the job is completed change the statues to complete and give your review.</p>
                        </div>
                    </div>                    
                </div>
                
            </div>
        </div>
        
        
    </section>
    <!-- //How it Works-->

   <!-- Service Location Section -->
   <section class="section serviceLocAbout grayBGServices">
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
                                <span class="locImageCol d-block"><img src="{{ url('public/frontend')}}/assets/images/bronx-img.jpg" alt=""></span>
                                <span class="locName">The Bronx</span>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-4 col-6">
                            <a href="{{ route('Services-Location-Brooklyn')}}" class="locItem text-center d-block">
                                <span class="locImageCol d-block"><img src="{{ url('public/frontend')}}/assets/images/brooklyn-img.jpg" alt=""></span>
                                <span class="locName">Brooklyn</span>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-4 col-6">
                            <a href="{{ route('Services-Location-Queens')}}" class="locItem text-center d-block">
                                <span class="locImageCol d-block"><img src="{{ url('public/frontend')}}/assets/images/queens-img.jpg" alt=""></span>
                                <span class="locName">Queens</span>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-4 col-6">
                            <a href="{{ route('Services-Location-StatenIsland')}}" class="locItem text-center d-block">
                                <span class="locImageCol d-block"><img src="{{ url('public/frontend')}}/assets/images/staten-Island-img.jpg" alt=""></span>
                                <span class="locName">Staten Island</span>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-4 col-6">
                            <a href="{{ route('service-locations')}}" class="locItem text-center d-block">
                                <span class="locImageCol d-block"><img src="{{ url('public/frontend')}}/assets/images/newyork.jpg" alt=""></span>
                                <span class="locName">New York City</span>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-4 col-6">
                            <a href="{{ route('Services-Location-Manhattan')}}" class="locItem text-center d-block">
                                <span class="locImageCol d-block"><img src="{{ url('public/frontend')}}/assets/images/manhattan.jpg" alt=""></span>
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
                    <h2>Start Your Project Today!</h5>
                    <p>SelectTask accepts only the best pros.</p>
                </div>
                <div class="button ml-auto">
                    <a href="{{ route('posttask-step1')}}?cat=7" class="btn btn-primary btn-primary-shadow btnLg">Get Started</a>
                </div>
            </div>
        </div>
    </section>
    <!-- //Call to action Section -->
	@endsection