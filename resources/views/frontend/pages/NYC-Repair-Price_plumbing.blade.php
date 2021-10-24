@extends('frontend.layout.app')
@section('content')
<!-- Banner Section -->
    <section class="banner innerbanner NYC-Pricing-innerBanner NYC-plumbing-Banner">
        <div class="container">
            <div class="row align-items-md-center">
                <div class="col-md-7 pr-md-0">
                    <div class="detail wow bounceInLeft maxW-350" data-wow-delay="0.1s">
                        <h2>The Cost to Hire a Plumber in NYC</h2>
                        <h3>Find out everything you need to know about New York City plumbing prices, services, and more.</h3>
                        <div class="nyc-banner-box">
                            <ul class="nycBox-list">
                                <li>
                                    <h4>Average Plumber Service Call Cost in <span class="d-md-block">New York City:</span></h4>
                                    <ul class="listText text-opensans">
                                        <li><strong>$350</strong></li>
                                    </ul>                                    
                                </li>
                                <li>
                                    <h4>Average Price Per Hour for Plumbers in New York City:</h4>
                                    <ul class="listText text-opensans">
                                        <li>Per Hour: <strong>$125</strong></li>
                                    </ul>                                    
                                </li>
                            </ul>
                        </div>
                        <div class="button">
                            <a href="{{ route('posttask-step1')}}?cat=5" class="btn btn-green btn-green-shadow mr-md-4 mw-321 btnLg">Get a Quote</a>
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
                            <img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/hire_plumber.svg" class="img-fluid" width="125" height="125">
                        </div>
                        <p>Looking to <strong class="d-block">Hire a Plumber?</strong></p>
                        <div class="button mt-4">
                            <a href="{{ route('posttask-step1')}}?cat=5" class="btn btn-primary btn-primary-shadow btn52 post_a_task">Post a Task</a>
                        </div>                        
                    </div>
                    <div id="sticky-anchor"></div>
                    <div class="rtSection contentLinks d-none d-md-block" id="sidescroller-menu">
                        <h3>Table of Contents</h3>
                        <h4>Navigation</h4>                        
                        <ul class="contentList-price">
                            <li><a href="#content_overview"><span>Overview</span></a>
                                <ul>
                                    <li><a href="#content_plumbingServices"><span>Services</span></a>
                                        <ul>
                                            <li><a href="#MinorRepairs"><span>Minor Repairs</span></a></li>
                                            <li><a href="#MajorRepairs"><span>Major Repairs</span></a></li>
                                            <li><a href="#RemodelsInstallation"><span>Remodels &amp; Installation</span></a></li>
                                            <li><a href="#RepipingLink"><span>Repiping</span></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#content_hiringPlumber"><span>Hiring a Professional</span></a></li>
                                    <li><a href="#content_PermitsJob"><span>Permits</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#content_AverageServiceCost"><span>Average Service Costs</span></a>
                                <ul>
                                    <li><a href="#content_pricingWorks"><span>How Plumber Pricing Works</span></a>
                                        <ul>
                                            <li><a href="#MinorPlumbingRepairs"><span>Minor Plumbing Repairs</span></a>
                                                <ul>
                                                    <li><a href="#KitchenSinks"><span>Kitchen Sinks &amp; Appliances</span></a></li>
                                                    <li><a href="#BathroomRepairs"><span>Bathroom Repairs</span></a></li>
                                                    <li><a href="#LaundryBasement"><span>Laundry &amp; Basement</span></a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#RemodelingAppliance"><span>Remodeling & Appliance Installation</span></a>
                                                <ul>
                                                    <li><a href="#KitchenAppliances"><span>Kitchen Appliances &amp; Fixtures</span></a></li>
                                                    <li><a href="#BathroomFixtures"><span>Bathroom Fixtures</span></a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#MajorPlumbingProblems"><span>Major Plumbing &amp; Sewage Problems</span></a>
                                                <ul>
                                                    <li><a href="#RepipingBuilding"><span>Repiping a Building</span></a></li>
                                                    <li><a href="#SewageLineReplacement"><span>Sewage Line Replacement</span></a></li>
                                                    <li><a href="#WaterMainReplacement"><span>Water Main Replacement</span></a></li>
                                                </ul>
                                            </li>

                                        </ul>
                                    </li>
                                    
                                    <li><a href="#content_AdditionalServices"><span>Additional Services</span></a>
                                        <ul>
                                            <li><a href="#GasLineRepairCost"><span>Gas Line Repair Cost</span></a></li>
                                            <li><a href="#WaterDamageRepair"><span>Water Damage Repair</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{ route('posttask-step1')}}?cat=5"><span>Find a Plumber in New York City</span></a></li>
                            <li><a href="#serviceFAQ"><span>FAQs</span></a></li>
                        </ul>
                    </div>

                    

                </div>
                <div class="NYCLeftCol blogCol flex-grow-1 order-md-1" id="content-holder">
                    <div class="priceContent-box boxContent-pad text-opensans text-center">
                        <h2>About NYC Plumbing Services &amp; Prices</h2>
                        <p>Plumbing services can vary widely in cost depending on the service that you need and location of the project. This complete guide will give you the information you need to choose the best professionals to get the job done right.
                            How much it costs to hire a plumber in New York City greatly depends on the type of job because the time to complete most plumbing tasks is different. Where a simple drain unclogging or cleaning service may cost around <strong>$100-$250</strong>, larger projects like faucet installation, moving a water line, or sewage repairs can cost over <strong>$1,000</strong> due to the amount of time these tasks take to complete, along with the skills and tools necessary to perform the job safely and effectively.</p>
                    </div><!--// About NYC Plumbing Services &amp; Prices-->
                    <div class="priceContent-box boxContent-pad text-center">
                        <h2>Need a Plumber?</h2>
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
                                    <li><a href="#content_plumbingServices"><span>Services</span></a>
                                        <ul>
                                            <li><a href="#MinorRepairs"><span>Minor Repairs</span></a></li>
                                            <li><a href="#MajorRepairs"><span>Major Repairs</span></a></li>
                                            <li><a href="#RemodelsInstallation"><span>Remodels &amp; Installation</span></a></li>
                                            <li><a href="#RepipingLink"><span>Repiping</span></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#content_hiringPlumber"><span>Hiring a Professional</span></a></li>
                                    <li><a href="#content_PermitsJob"><span>Permits</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#content_AverageServiceCost"><span>Average Service Costs</span></a>
                                <ul class="subContent-list">
                                    <li><a href="#content_pricingWorks"><span>How Plumber Pricing Works</span></a>
                                        <ul>
                                            <li><a href="#MinorPlumbingRepairs"><span>Minor Plumbing Repairs</span></a>
                                                <ul>
                                                    <li><a href="#KitchenSinks"><span>Kitchen Sinks &amp; Appliances</span></a></li>
                                                    <li><a href="#BathroomRepairs"><span>Bathroom Repairs</span></a></li>
                                                    <li><a href="#LaundryBasement"><span>Laundry &amp; Basement</span></a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#RemodelingAppliance"><span>Remodeling &amp; Appliance Installation</span></a>
                                                <ul>
                                                    <li><a href="#KitchenAppliances"><span>Kitchen Appliances &amp; Fixtures</span></a></li>
                                                    <li><a href="#BathroomFixtures"><span>Bathroom Fixtures</span></a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#MajorPlumbingProblems"><span>Major Plumbing &amp; Sewage Problems</span></a>
                                                <ul>
                                                    <li><a href="#RepipingBuilding"><span>Repiping a Building</span></a></li>
                                                    <li><a href="#SewageLineReplacement"><span>Sewage Line Replacement</span></a></li>
                                                    <li><a href="#WaterMainReplacement"><span>Water Main Replacement</span></a></li>
                                                </ul>
                                            </li>

                                        </ul>
                                    </li>
                                    
                                    <li><a href="#content_AdditionalServices"><span>Additional Services</span></a>
                                        <ul>
                                            <li><a href="#GasLineRepairCost"><span>Gas Line Repair Cost</span></a></li>
                                            <li><a href="#WaterDamageRepair"><span>Water Damage Repair</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{ route('posttask-step1')}}?cat=5"><span>Find a Plumber in New York City</span></a></li>
                            <li><a href="#serviceFAQ"><span>FAQs</span></a></li>
                        </ul>
                    </div><!--// Table of Contents-->

                    <div class="priceContent-box">
                        <div class="boxContent-pad text-opensans">
                            <div class="subBox-Content" id="content_overview">
                                <h2>Overview </h2>
                                <p>Property owners and tenants often require services from skilled plumbers to handle issues that may arise in their building’s water infrastructure. From leaky faucets to sewage backups, plumbers are certified professionals with the tools to fix these problems safely and effectively. Plumbers can also assist with projects like remodelling and appliance installation.</p>
                            </div><!--//Overview-->

                            <div class="subBox-Content" id="content_plumbingServices">
                                <p class="paintImg"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/plumbing-pic1.jpg" alt=""></p>
                                <h2>Plumbing Services</h2>
                                
                                <h3 class="dot_h3" id="MinorRepairs">Minor Repairs</h3>
                                <div class="ContentSibling">
                                    <p>Small repairs that take one day or less typically fall under this category. Finding a plumber to handle minor repairs is usually a fairly simple process, as most plumbers are equipped to handle these less intensive tasks quickly and effectively.</p>
                                    <p>These repairs may include:</p>
                                    <div class="grayList-Widget">
                                        <ul class="bulletedList-content mobLeft m-0">
                                            <li><strong>Small burst pipes, such as those under a sink or toilet</strong></li>
                                            <li><strong>Leaky shower &amp; sink faucets</strong></li>
                                            <li><strong>Drain cleaning &amp; unclogging</strong></li>
                                            <li><strong>Dishwasher, washing machine, &amp; other appliance repairs</strong></li>
                                        </ul>
                                    </div>
                                    <p>Depending on the service, plumbers in New York City typically charge around <strong>$200-$400</strong> for labor and materials to complete these repairs. Check out the <a href="#content_AverageServiceCost" class="underlineLink Bold">Average Service Cost</a> section of this guide for more info on minor plumbing repair prices.</p>
                                </div>
                                
                                <h3 class="dot_h3" id="MajorRepairs">Major Repairs</h3>
                                <div class="ContentSibling">
                                    <p>Projects that take more than a day to complete usually classify as major plumbing repairs. Problems that require major repair services often stem from extensive damage to a building’s water infrastructure, and require more time, more tools, and more experience to properly assess and fix.</p>
                                    <p>These repairs may include:</p>
                                    <div class="grayList-Widget">
                                        <ul class="bulletedList-content mobLeft m-0">
                                            <li><strong>Repiping a building</strong></li>
                                            <li><strong>Fixing a water heater</strong></li>
                                            <li><strong>Extensive water damage</strong></li>
                                            <li><strong>Burst internal pipes &amp; sewer line</strong></li>
                                        </ul>
                                    </div>
                                    <p>These jobs can take much longer to complete, and often require more expensive materials. Unfortunately, problems of this nature can also snowball quite easily once they arise; for example, when a significant leak is discovered in an older home with outdated pipe materials, the entire building may need to be repiped in order to be considered safe. </p>
                                    <p>While these major repairs can be stressful and costly, they will save you money in the long run. Letting a major plumbing problem go unresolved for an extended period of time will cause even greater damage to your property, so it is best to have them fixed right away. Once the plumber assesses the issue, they will offer advice on the best course of action to ensure that any other potential issues are avoided.</p>
                                </div>

                                <h3 class="dot_h3" id="RemodelsInstallation">Remodels &amp; Installation</h3>
                                <div class="ContentSibling">
                                    <p>Updating a space with chic, energy-efficient appliances is certainly exciting, but installing them correctly can be a challenge. Plumbers can install new water and gas furnishings faster than DIY, as well as adjust the lines within the walls accordingly. Hiring a professional plumber to perform these tasks is the best way to ensure proper installation.</p>
                                    <p>Appliances and fixtures that usually require installation from a professional plumber include:</p>
                                    <div class="grayList-Widget">
                                        <ul class="bulletedList-content mobLeft m-0">
                                            <li><strong>Faucets</strong></li>
                                            <li><strong>Refrigerators</strong></li>
                                            <li><strong>Gas heaters &amp; stoves</strong></li>
                                            <li><strong>Burst internal pipes &amp; sewer line</strong></li>
                                            <li><strong>Dishwashers</strong></li>
                                            <li><strong>Washers &amp; Dryers</strong></li>
                                            <li><strong>Water Heaters</strong></li>
                                        </ul>
                                    </div>
                                    <p>Whether you’re looking to upgrade your space or build a new one, be sure to seek the help of an experienced plumber to get the job done right.</p>
                                </div>
                                
                                
                            </div><!--//Plumbing Services-->

                            <div class="subBox-Content" id="content_hiringPlumber">
                                <h2>Hiring a Professional Plumber</h2>
                                <p>When hiring a professional plumber, there are a few important things you’ll want to look for. State mandates require plumbers to carry a valid plumber’s license and a minimum insurance policy of <strong>$300,000</strong> for property damage, and <strong>$100,000</strong> for general liability. Verifying that a plumber has a valid license and good reviews from past customers is the best way to ensure that you’ll get great service.</p>
                            </div><!--//Hiring a Professional Plumber-->
                            <div class="subBox-Content" id="content_PermitsJob">
                                <h2>Permits</h2>
                                <p>Before you hire a plumber for your task, make sure you look into required permits for certain repairs in accordance with city laws. While small repairs don’t require permits, major jobs like repiping, sewage line replacement, and water heater replacement may necessitate a new permit for your property to stay up to code with city regulations. If you are unsure whether or not you’ll need a permit for your project, talk to a master plumber who is familiar with local codes and regulations.</p>
                            </div><!--//Permits-->
                        </div>                        
                        <div class="boxContent-pad getQuoteBox" id="findPlumberNYC">
                            <p class="mb-4 mb-lg-5"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/getQuote-icon.svg" alt=""></p>
                            <h2>Ready to Get Started?</h2>
                            <p>Post Your Task to Get in Touch with <span class="d-block">Plumbers in New York City.</span> </p>
                            <p class="mt-4 mt-lg-5"><a href="{{ route('posttask-step1')}}?cat=5" class="btn btn-green btn-green-shadow btn-sm">Get a Quote</a></p>
                        </div><!--// Ready to Get Started?-->
                        <div class="boxContent-pad text-opensans">
                            <div class="subBox-Content" id="content_AverageServiceCost">
                                <h2>Average Service Costs</h2>
                                <h2 id="content_pricingWorks">How Plumber Pricing Works?</h2>
                                <p>The cost of hiring a plumber can vary a lot depending on the cost of materials, the time to complete the job, and even your location. Hiring a plumber may seem unduly expensive, but, keep in mind that plumbers are highly specialized tradesmen with years of experience in their field. You must also consider that in addition to their experience, professional plumbers must invest in the proper tools, vehicles, and licenses to operate their business. Hiring a local professional plumber, while costly, is the only way to ensure that your plumbing task is handled correctly. Attempting to handle plumbing problems yourself may worsen the problem, and ultimately cost more in the long run.</p>
                            </div><!--//How Plumber Pricing Works?-->
                            <div class="subBox-Content" id="content_pricingWorks">
                                <h2>Cost of Service Calls for Plumbers</h2>
                                <p>When a plumber is called for a quick service call, they will usually charge either a <strong>service call minimum</strong> or an <strong>hourly rate.</strong> Calling a plumber to assess and fix minor problems can cost a minimum of anywhere from <strong>$100-$200</strong> depending on how they bill their service calls. This typically accounts for their travel time and additional expenses like tools, vehicles, and parking. </p>
                                <p>Some plumbers will bill for a minimum of <strong>2-3 hours</strong> at their regular hourly rate, even if the job takes less time than that. Other plumbers may set a <strong>higher hourly rate for the first 2 hours</strong> of service. Some may just charge their hourly rate, but add an <strong>additional flat fee</strong> to account for other expenses and time spent. Every plumber charges their service minimums differently, so be sure to ask before you hire one. Choosing a reputable plumber in your New York City borough is the best way to ensure that you are charged a fair price for your plumbing service call.</p>
                                                     
                            </div><!--//Cost of Service Calls for Plumbers-->
                            <div class="subBox-Content" id="content_homeInteriors">
                                <h2>Cost of Plumbing Services</h2>
                                <p>If you’d like to learn more about how much your plumbing repair or installation task might cost, check out the guide below to see the average prices plumbers in New York City charge for a variety of common services. 
                                </p>
                            </div><!--//Cost of Plumbing Services-->

                            <div class="subBox-Content" id="MinorPlumbingRepairs">
                                <h2>Cost of Hiring a Plumber for Minor Repairs</h2>
                                <h3 class="dot_h3">Faucets &amp Fixtures</h3>
                                <p>Plumbers are well equipped to fix problems that may arise from essential plumbing fixtures that you’ll find in a kitchen, bathroom, laundry room, etc. These issues can usually be repaired quickly without recurrence, except for in the instance where it is the result of a larger problem.</p>
                                <h3>Repair Prices for Faucets &amp; Fixtures</h3>
                                <div class="table-responsive">
                                <table class="table avrPriceTable text-lato">
                                    <thead>
                                        <tr>
                                            <th>Repair Task</th>
                                            <th class="th2">Average Cost</th>
                                        </tr>                                            
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-opensans semiBold">Leaky Faucets &amp; Pipes</td>
                                            <td><span class="textGreen latoBlack">$85-$170</span></td>                                            
                                        </tr>
                                        <tr>
                                            <td class="text-opensans semiBold">Running Toilet</td>
                                            <td><span class="textGreen latoBlack">$100-$200</span></td>                                            
                                        </tr>
                                        <tr>
                                            <td class="text-opensans semiBold">Clogged Drain</td>
                                            <td><span class="textGreen latoBlack">$150-$200</span></td>                                            
                                        </tr>
                                        <tr>
                                            <td class="text-opensans semiBold">Garbage Disposal Repair</td>
                                            <td><span class="textGreen latoBlack">$70-$400</span></td>                                            
                                        </tr>
                                        
                                    </tbody>
                                </table></div>
                                <p class="text-center tableInfo">These prices are based on standard acrylic latex paint.</p>

                                <h3 class="dot_h3">Appliances</h3>
                                <p>Like anything else that we use every day, appliances can require repairs from time to time. Plumbers are quite familiar with how these machines work, and in turn how to repair them properly. Some appliance repairs are a simple 1-2 hour job, while others may require more intensive maintenance. Ordering parts from the manufacturer can often delay the process even further. If you have a warranty on your appliance, the manufacturer may cover the cost of repairing it, or even replace it altogether. In the event that your warranty has expired, you can usually expect to pay between <strong>$100-$500</strong> for appliance repairs.
                                </p>

                                <h3>Repair Prices for Appliances</h3>
                                <div class="table-responsive">
                                    <table class="table avrPriceTable text-lato">
                                        <thead>
                                            <tr>
                                                <th>Appliance</th>
                                                <th class="th2">Average Repair Cost</th>
                                                <th class="th3">Time to Install</th>
                                            </tr>                                            
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-opensans semiBold">Refrigerator</td>
                                                <td><span class="textGreen latoBlack">$100-$200</span></td>
                                                <td><span class="textGreen latoBlack"> &#60;1 Hour </span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-opensans semiBold">Stove/Oven</td>
                                                <td><span class="textGreen latoBlack">$150-$275</span></td>
                                                <td><span class="textGreen latoBlack"> 1-2 Hours</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-opensans semiBold">Dishwasher</td>
                                                <td><span class="textGreen latoBlack">$200-$500</span></td>
                                                <td><span class="textGreen latoBlack">2-3 Hours</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-opensans semiBold">Washer &amp; Dryer</td>
                                                <td><span class="textGreen latoBlack">$150-$250</span></td>
                                                <td><span class="textGreen latoBlack">1 Hour</span></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table></div>
                                
                            </div><!--//Cost of Hiring a Plumber for Minor Repairs-->

                            <div class="subBox-Content" id="content_commercial">
                                <p class="paintImg"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/plumbing-pic2.jpg" alt=""></p>
                                <h2>Cost of Hiring a Plumber for Remodeling and Appliance Installation</h2>
                                <h3 class="dot_h3" id="KitchenAppliances">Kitchen Remodel.</h3>
                                <p>When you decide to update your kitchen with new appliances and fixtures like sinks and faucets, seeking help from a professional plumber is the best way to ensure the job is done properly. Plumbing is an important piece to factor into the cost of any kitchen remodel. Appliance installation and remodel tasks usually cost something like this: </p>

                                <h3>Cost to Remodel a Kitchen in New York City</h3>
                                <div class="table-responsive">
                                <table class="table avrPriceTable text-lato">
                                    <thead>
                                        <tr>
                                            <th>Appliance</th>
                                            <th class="th2">Average Cost</th>
                                        </tr>                                            
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-opensans semiBold">New Sink</td>
                                            <td><span class="textGreen latoBlack">$220-$580</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-opensans semiBold">Refrigerator</td>
                                            <td><span class="textGreen latoBlack">$430-$10,600</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-opensans semiBold">Dishwasher</td>
                                            <td><span class="textGreen latoBlack">$330-$1,900</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-opensans semiBold">Gas Stove</td>
                                            <td><span class="textGreen latoBlack">$410-$7,500</span></td>
                                        </tr>
                                    </tbody>
                                </table></div>
                                <p>If you’re looking to remodel an entire kitchen, you’ll be looking at a cost of <strong>$30,000-$60,000</strong> for a comprehensive renovation. This cost is determined by the size of the space, the price of new appliances, cabinets, and fixtures, and whether or not any water or gas lines need to be rerouted. </p>

                                <h3 class="dot_h3" id="BathroomFixtures">Bathroom Remodel.</h3>
                                <p>Like kitchen remodels, factoring in the cost of hiring a professional plumber is very important when you plan to update your bathroom. Showers, faucets, and toilets are certainly the most important part of a bathroom, and you want to make sure that they are installed correctly. The prices below reflect the cost of materials and installation, and can vary depending on your choice of fixtures.</p>
                                <h3>Cost to Remodel a Bathroom in New York City</h3>
								<div class="table-responsive">
                                    <table class="table avrPriceTable text-lato">
                                        <thead>
                                            <tr>
                                                <th>Installation</th>
                                                <th class="th2">Average Cost</th>
                                                <th class="th3">Time to Repair</th>
                                            </tr>                                            
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-opensans semiBold">Vanity &amp; Sink</td>
                                                <td><span class="textGreen latoBlack">$1500</span></td>
                                                <td><span class="textGreen latoBlack">4 Hours</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-opensans semiBold">Toilet</td>
                                                <td><span class="textGreen latoBlack">$300</span></td>
                                                <td><span class="textGreen latoBlack"> 6 Hours</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-opensans semiBold">Shower</td>
                                                <td><span class="textGreen latoBlack">$4625</span></td>
                                                <td><span class="textGreen latoBlack">3 -5 Days</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-opensans semiBold">Bathtub</td>
                                                <td><span class="textGreen latoBlack">$2000</span></td>
                                                <td><span class="textGreen latoBlack">1 Day</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-opensans semiBold">Jacuzzi Tub</td>
                                                <td><span class="textGreen latoBlack">$9250</span></td>
                                                <td><span class="textGreen latoBlack">2 Days</span></td>
                                            </tr>
                                        </tbody>
                                    </table></div>
                                    <p>A whole-bathroom remodel will typically cost between <strong>$4,000</strong> for a partial, low-end remodel and <strong>$40,000</strong> for a large, brand-new luxury bathroom. Talk to your general contractor or plumber to determine exactly how much a new custom bathroom will cost.
                                    </p>
                                    <h3 class="dot_h3" id="LaundryBasement">Laundry.</h3>
                                    <p>If you have a new washer and dryer that requires a professional to install, you can expect to pay around <strong>$300-$1,200</strong> for a washer and <strong>$250-$1,000</strong> for a dryer. If pipes need to be rerouted for your new appliances, consult your plumbing professional to find out the exact cost as this can vary depending on where the appliances are installed. </p>
                            </div><!--//Cost of Hiring a Plumber for Remodeling and Appliance Installation-->

                            <div class="subBox-Content" id="content_buildingPainting">
                                <p class="paintImg"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/plumbing-pic3.jpg" alt=""></p>
                                <h2>Cost of Major Plumbing &amp; Sewage Jobs</h2>
                                <h3 class="dot_h3" id="RepipingBuilding">Repiping</h3>
                                <p>A building may need to be repiped if it is old or has been poorly maintained. This can be a lengthy and expensive undertaking, but may be essential to keeping your building safe and up to code. If you notice problems like irregular water pressure, metallic-tasting water, discoloration, or multiple leaky pipes throughout your home, it is probably time for the piping system to be replaced. You can expect to pay anywhere from <strong>$4,000-$15,000</strong> for a complete piping system replacement.
                                </p>

                                <h3 class="dot_h3" id="SewageLineReplacement">Water Heater Repairs</h3>
                                <p>Water heaters can be especially prone to issues because of how often they are used in both the summer and winter. The average cost to repair a water heater is <strong>$500.</strong> If your water heater requires frequent repairs, or is <strong>10-20</strong> years old, you may want to consider replacing it altogether. Installing a new water heater costs about <strong>$2,000</strong> for a standard tank water heater, or <strong>$4,000+</strong> for a tankless or high-efficiency heater.</p>

                                <h3 class="dot_h3" id="WaterMainReplacement">Sewer &amp; Main Water Line Repairs</h3>
                                <p>The building’s connection to the city water system and sewage system is essential to keeping it up to modern standards of living. When a problem arises with the building’s main water connections, it can quickly lead to other major issues. The main water line brings fresh water from the city into your home, while the main sewage line takes the wastewater away. Any damage that occurs to either line must be handled immediately to prevent any further damage to your property. </p>
                                <p>You have a couple of options for the materials used in these jobs. Once you determine the length of pipe you’ll need and factor in the labor cost for the plumber, you’ll have a pretty good idea for how much replacing these essential parts of your home’s infrastructure may cost.</p>
                                <div class="table-responsive">
                                    <table class="table avrPriceTable text-lato">
                                        <thead>
                                            <tr>
                                                <th>Material</th>
                                                <th class="th2">Cost per Linear Foot</th>
                                                <th class="th3">Fast Facts</th>
                                            </tr>                                            
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-opensans semiBold">PVC</td>
                                                <td><span class="textGreen latoBlack">$5</span></td>
                                                <td><span class="textGreen latoBlack">Inexpensive and durable 
                                                    except in hot climates</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-opensans semiBold">Galvanized Iron</td>
                                                <td><span class="textGreen latoBlack">$10</span></td>
                                                <td><span class="textGreen latoBlack">Strong material that 
                                                    resists corrosion, heat, 
                                                    and impact</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-opensans semiBold">Brass</td>
                                                <td><span class="textGreen latoBlack">$15</span></td>
                                                <td><span class="textGreen latoBlack">Less expensive, though slightly less durable than copper pipes</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-opensans semiBold">Copper</td>
                                                <td><span class="textGreen latoBlack">$20</span></td>
                                                <td><span class="textGreen latoBlack">Highest durability except in high pH soils</span></td>
                                            </tr>
                                           
                                        </tbody>
                                    </table></div>
                                    <p>Projects of this nature can cost anywhere from <strong>$2,000-$20,000+</strong> depending on the size of your property, the method of replacement you choose, and the cost of the plumbing contractor’s labor hours to complete the job.
                                    </p>
                            </div><!--//Cost of Major Plumbing &amp; Sewage Jobs-->

                            <div class="subBox-Content" id="content_AdditionalServices">
                                <p class="paintImg"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/plumbing-pic4.jpg" alt=""></p>
                                <h2>Additional Services</h2>
                                <p>Plumbers are equipped to handle a wide array of repairs and installation tasks. Some other jobs you might hire a plumber for include:</p>
                                <h3 class="dot_h3" id="GasLineRepairCost">Gas Line Repair &amp; Installation</h3>
                                <div class="ContentSibling">
                                   <p>When you suddenly notice issues like a rotten egg smell, a hissing sound near gas appliances, or dead or discolored grass near the gas line, your home likely has a gas line leak. If this is the case, <strong>stay away from the leak or vacate the premises altogether.</strong> Gas leaks can pose a serious health risk and should be handled swiftly by a trained professional. </p>
                                   <p>If the leak is coming from a small pipe that hooks up to a single appliance, you can expect to pay anywhere from <strong>$150-$700</strong> to repair it. If it turns out that the gas line leading into your home is damaged, repairing it could cost anywhere from <strong>$3,000-$7,000</strong> depending on the size of the leak and the length of pipe to be replaced. </p>
                                </div>
                                <h3 class="dot_h3" id="WaterDamageRepair">Water Damage Restoration in New York City</h3>
                                <div class="ContentSibling">
                                    <p>Water damage can be a devastating occurrence when it affects your home. Personal belongings, photographs, and heirlooms can be destroyed by a simple few feet of water flooding a basement, or rooms may have to be redone when the water damages the walls. There are three categories of water that can cause damage, and the cost to repair each varies.</p>
                                    <h3 class="dot_h3">Clean Water</h3>
                                    <p>This is water that has not yet been used. Repairing damage caused by clean water costs about <strong>$3.75</strong> per sq ft.</p>
                                    <h3 class="dot_h3">Gray Water</h3>
                                    <p>This type of water comes from appliances like dishwashers or washing machines. This will usually cost about <strong>$4.50</strong> per sq ft to fix.</p>
                                    <h3 class="dot_h3">Black Water</h3>
                                    <p>Black water is heavily contaminated water, usually originating from a sewage pipe. If the damage can be repaired at all, it will cost <strong>$7</strong> or more per sq ft.</p>
                                </div>
                            </div><!--//Additional Services-->

                        </div>

                        <div class="boxContent-pad servicesFaq" id="serviceFAQ">
                            <h2>FAQ’s</h2>
                            <div id="accordion" class="faqAccordion">
                                <div class="card collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <div class="card-header" id="headingOne">
                                      <h5 class="mb-0">Why does my home have low water pressure?</h5>
                                      <img src="{{ url('public/frontend')}}/assets/images/chevron-down.svg" alt="">
                                    </div>
                                
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                      <div class="card-body">This can be caused by a number of things. The water running into your home from the city’s municipal water system could have reduced pressure. You could also have clogged pipes in your building.</div>
                                    </div>
                                </div>
                
                                <div class="card collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="card-header" id="headingTwo">
                                      <h5 class="mb-0">Why does my drain smell bad?</h5>
                                      <img src="{{ url('public/frontend')}}/assets/images/chevron-down.svg" alt="">
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                      <div class="card-body">Most pipes have curves in them to catch trash before it goes to the sewer (like food, grease, or solid waste). You can hire a plumber to take the U-bend apart and clean it, or you can try bleach or vinegar to break up the gunk. </div>
                                    </div>
                                  </div>
                
                                  <div class="card collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <div class="card-header" id="headingThree">
                                      <h5 class="mb-0">Why is my water so hot?</h5>
                                      <img src="{{ url('public/frontend')}}/assets/images/chevron-down.svg" alt="">
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">Hot water coming from a faucet should never be hotter than 110º F, as a higher temperature could pose safety risks to small children and the elderly. If the water coming from your faucet is exorbitantly hot, check your water heater to see what setting the thermostat is set to.</div>
                                    </div>
                                  </div>
                
                                  <div class="card collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                    <div class="card-header" id="headingfour">
                                      <h5 class="mb-0">Why are my water bills suddenly so high?</h5>
                                      <img src="{{ url('public/frontend')}}/assets/images/chevron-down.svg" alt="">
                                    </div>
                                    <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                                        <div class="card-body">Even small plumbing problems like a running toilet or leaky faucet can quickly add up to a high water bill. Save money on your water bill and invest in the services of a NYC plumber to help when you notice these issues.</div>
                                    </div>
                                  </div>
                
                                  
                            </div>
                            <p class="mt-4"><a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class="textGreen underlineLink">Sources</a></p>
                        <ul class="collapse source-list mt-2" id="collapseExample">
                                    <li><a href="https://clovered.com/repiping-a-house-guide/" target="_blank">https://clovered.com/repiping-a-house-guide</a></li>
                                    <li><a href="https://newliferestoration.net/what-is-the-typical-cost-for-water-damage-restoration" target="_blank">https://newliferestoration.net/what-is-the-typical-cost-for-water-damage-restoration</a></li>
                                    <li><a href="https://howmuch.net/costs/plumbing-kitchen-remodel" target="_blank">https://howmuch.net/costs/plumbing-kitchen-remodel</a></li>
                                    <li><a href="https://work.chron.com/average-salary-master-plumber-1371.html" target="_blank">https://work.chron.com/average-salary-master-plumber-1371.html</a></li>
                                    <li><a href="https://spieplumbing.com/sewer-line-repair/what-is-the-average-cost-of-sewer-line-repair" target="_blank">https://spieplumbing.com/sewer-line-repair/what-is-the-average-cost-of-sewer-line-repair</a></li>
                                    <li><a href="https://spieplumbing.com/sewer-line-repair/what-is-the-average-cost-of-sewer-line-repair" target="_blank">https://www.homewyse.com/services/cost_to_repair_water_damage.html</a></li>
                                    <li><a href="https://spieplumbing.com/sewer-line-repair/what-is-the-average-cost-of-sewer-line-repair" target="_blank">https://www.homewyse.com/maintenance_costs/cost_to_repair_washing_machine.html</a></li>
                                    <li><a href="https://spieplumbing.com/sewer-line-repair/what-is-the-average-cost-of-sewer-line-repair" target="_blank">https://www.homewyse.com/maintenance_costs/cost_to_repair_washing_machine.html</a></li>
                                    <li><a href="https://www.kompareit.com/homeandgarden/hvac-finding-repairing-gas-line-leak.html" target="_blank">https://www.kompareit.com/homeandgarden/hvac-finding-repairing-gas-line-leak.html</a></li>
                                    <li><a href="https://www.angieslist.com/articles/how-much-does-bathroom-remodel-cost.htm" target="_blank">https://www.angieslist.com/articles/how-much-does-bathroom-remodel-cost.htm</a></li>
                                    <li><a href="https://www.homeadvisor.com/cost/plumbing/install-a-bathtub/#whirlpool" target="_blank">https://www.homeadvisor.com/cost/plumbing/install-a-bathtub/#whirlpool</a></li>
                                    <li><a href="https://www.homeadvisor.com/cost/plumbing/install-a-shower" target="_blank">https://www.homeadvisor.com/cost/plumbing/install-a-shower</a></li>
                                    <li><a href="https://www.homewyse.com/maintenance_costs/cost_to_repair_washing_machine.html" target="_blank">https://www.homewyse.com/maintenance_costs/cost_to_repair_washing_machine.html</a></li>
                                    <li><a href="https://spieplumbing.com/sewer-line-repair/what-is-the-average-cost-of-sewer-line-repair" target="_blank">https://spieplumbing.com/sewer-line-repair/what-is-the-average-cost-of-sewer-line-repair</a></li>
                                    <li><a href="https://www.housecallpro.com/working-in-the-trades/plumbing-licensing/new-york" target="_blank">https://www.housecallpro.com/working-in-the-trades/plumbing-licensing/new-york</a></li>
                                    <li><a href="https://work.chron.com/average-salary-master-plumber-1371.html" target="_blank">https://work.chron.com/average-salary-master-plumber-1371.html</a></li>
                                    <li><a href="https://howmuch.net/costs/bathroom-remodeling" target="_blank">https://howmuch.net/costs/bathroom-remodeling</a></li>
                                    <li><a href="https://www.easyac.net/plumbing-and-electrical-repair-articles/how-much-does-it-cost-to-repair-a-water-heater.html" target="_blank">https://www.easyac.net/plumbing-and-electrical-repair-articles/how-much-does-it-cost-to-repair-a-water-heater.html</a></li>
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
    <section class="section connecting getStarted-plumbings priceGetStarted">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7 wow bounceInleft" data-wow-delay="0.1s">
                    <h2>Find a Plumber in New York City</h2>                    
                    <h3 class="subheadinggray mt-3">Click on your <strong>New York City Borough</strong> <span class="d-md-block">Below to Get Free Quotes from Plumbers in Your Neighborhood.</span></h3>
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
                    <a href="{{ route('posttask-step1')}}?cat=5" class="btn btn-primary btn-primary-shadow btnLg">Get Started</a>
                </div>
            </div>
        </div>
    </section>
    <!-- //Call to action Section -->
	@endsection 