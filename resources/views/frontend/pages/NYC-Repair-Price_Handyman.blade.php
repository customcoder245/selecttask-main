@extends('frontend.layout.app')
@section('content')
<!-- Banner Section -->
    <section class="banner innerbanner NYC-Pricing-innerBanner NYC-handyman-Banner">
        <div class="container">
            <div class="row align-items-md-center">
                <div class="col-md-7">
                    <div class="detail wow bounceInLeft maxW-350" data-wow-delay="0.1s">
                        <h2>The Cost to Hire a Handyman in NYC</h2>
                        <h3>Find out everything you need to know about New York City handyman prices, services, and more.</h3>
                        <div class="nyc-banner-box">
                            <ul class="nycBox-list">
                                <li>
                                    <h4>Average Handyman Service Call Cost in New York City:</h4>
                                    <ul class="listText text-opensans">
                                        <li><strong>$390</strong></li>
                                    </ul>                                    
                                </li>
                                <li>
                                    <h4>Average Hourly Cost of a Handyman in New York City:</h4>
                                    <ul class="listText text-opensans">
                                        <li><strong>$60 - $125</strong></li>
                                    </ul>                                    
                                </li>
                            </ul>
                        </div>
                        <div class="button">
                            <a href="{{ route('posttask-step1')}}?cat=2" class="btn btn-green btn-green-shadow mr-md-4 mw-321 btnLg">Get a Quote</a>
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
                            <img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/hire_hanyman.svg" class="img-fluid">
                        </div>
                        <p>Looking to <strong class="d-block">Hire a Handyman?</strong></p>
                        <div class="button mt-4">
                            <a href="{{ route('posttask-step1')}}?cat=2" class="btn btn-primary btn-primary-shadow btn52 post_a_task">Post a Task</a>
                        </div>                        
                    </div>
                    <div id="sticky-anchor"></div>
                    <div class="rtSection contentLinks d-none d-md-block" id="sidescroller-menu">
                        <h3>Table of Contents</h3>
                        <h4>Navigation</h4>                        
                        <ul class="contentList-price">
                            <li><a href="#content_overview"><span>Overview</span></a>
                                <ul>
                                    <li><a href="#HandymanDo"><span>What Can a Handyman Do?</span></a></li>
                                    <li><a href="#HandymanGeneral"><span>Handyman vs General Contractor</span></a></li>
                                    <li><a href="#HiringHandyman"><span>Hiring a Handyman in NYC</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#content_AverageServiceCost"><span>Average Service Costs</span></a>
                                <ul>
                                    <li><a href="#HandymanPricingWorks"><span>How Handyman Pricing Works</span></a></li>
                                    <li><a href="#CostInstallation"><span>Cost of InstallationTasks</span></a>
                                        <ul>
                                            <li><a href="#Lightfixtures"><span>Light fixtures & switches</span></a></li>
                                            <li><a href="#Appliances"><span>Appliances</span></a></li>
                                            <li><a href="#Kitchencabinets"><span>Kitchen cabinets</span></a></li>
                                            <li><a href="#Cable"><span>Cable &amp; Wi-Fi routers</span></a></li>
                                            <li><a href="#TVwallmounts"><span>TV wall mounts</span></a></li>
                                            <li><a href="#Furnitureassembly"><span>Furniture assembly</span></a></li>
                                            <li><a href="#Garagedooropeners"><span>Garage door openers</span></a></li>
                                            <li><a href="#Guttercleaning"><span>Gutter cleaning</span></a></li>
                                            <li><a href="#Additionaltasks"><span>Additional tasks</span></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#minorRepairs"><span>Cost of Minor Repair Tasks</span></a>
                                        <ul>
                                            <li><a href="#DrywallRepair"><span>Drywall repair</span></a></li>
                                            <li><a href="#kitchenBath"><span>Kitchen &amp; bath</span></a></li>
                                            <li><a href="#ApplianceRepair"><span>Appliance repair</span></a></li>
                                            
                                        </ul>
                                    </li>
                                  
                                </ul>
                            </li>
                            <li><a href="{{ route('posttask-step1')}}?cat=2"><span>Hire a Handyman in New York City</span></a></li>
                            <li><a href="#serviceFAQ"><span>FAQs</span></a></li>
                        </ul>
                    </div>

                    

                </div>
                <div class="NYCLeftCol blogCol flex-grow-1 order-md-1" id="content-holder">
                    <div class="priceContent-box boxContent-pad text-opensans text-center">
                        <h2>About NYC Handyman Services & Prices</h2>
                        <p>A handyman can provide many services, from installing new lighting to repairing holes in drywall. This complete guide will give you the information you need to choose the best professionals to get the job done right.</p>
                        <p>How much it costs to hire a handyman in New York City depends on the job you need performed. Where a simple installation or repair tasks may cost around <strong>$150-$250,</strong> larger projects that require multiple hours can cost closer to <strong>$1,000.</strong></p>
                    </div><!--// About NYC Handyman Services & Prices-->
                    <div class="priceContent-box boxContent-pad text-center">
                        <h2>Need a Handyman</h2>
                        <ul class="nyc-painting d-flex flex-wrap mt-md-4 mt-xl-5">
                            <li><a href="{{ route('service-locations')}}">New York City</a></li>
                        <li><a href="{{ route('Services-Location-TheBronx')}}">The Bronx</a></li>
                        <li><a href="{{ route('Services-Location-Brooklyn')}}">Brooklyn</a></li>
                        <li><a href="{{ route('Services-Location-Queens')}}">Queens</a></li>
                        <li><a href="{{ route('Services-Location-StatenIsland')}}">Staten Island</a></li>
                        <li><a href="{{ route('Services-Location-Manhattan')}}">Manhattan</a></li>
                        </ul>
                    </div><!--// Do You Need a New Cabinet?-->
                    <div class="priceContent-box text-opensans">
                        <h2 class="boxContent-pad mb-0">Table of Contents</h2>
                      
                        <ul class="tableContent-list mobLeft">
                            <li><a href="#content_overview"><span>Overview</span></a>
                                <ul class="subContent-list">
                                    <li><a href="#HandymanDo"><span>What Can a Handyman Do?</span></a></li>
                                    <li><a href="#HandymanGeneral"><span>Handyman vs General Contractor</span></a></li>
                                    <li><a href="#HiringHandyman"><span>Hiring a Handyman in NYC</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#content_AverageServiceCost"><span>Average Service Costs</span></a>
                                <ul class="subContent-list">
                                    <li><a href="#HandymanPricingWorks"><span>How Handyman Pricing Works</span></a></li>
                                    <li><a href="#CostInstallation"><span>Cost of InstallationTasks</span></a>
                                        <ul>
                                            <li><a href="#Lightfixtures"><span>Light fixtures & switches</span></a></li>
                                            <li><a href="#Appliances"><span>Appliances</span></a></li>
                                            <li><a href="#Kitchencabinets"><span>Kitchen cabinets</span></a></li>
                                            <li><a href="#Cable"><span>Cable &amp; Wi-Fi routers</span></a></li>
                                            <li><a href="#TVwallmounts"><span>TV wall mounts</span></a></li>
                                            <li><a href="#Furnitureassembly"><span>Furniture assembly</span></a></li>
                                            <li><a href="#Garagedooropeners"><span>Garage door openers</span></a></li>
                                            <li><a href="#Guttercleaning"><span>Gutter cleaning</span></a></li>
                                            <li><a href="#Additionaltasks"><span>Additional tasks</span></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#minorRepairs"><span>Cost of Minor Repair Tasks</span></a>
                                        <ul>
                                            <li><a href="#DrywallRepair"><span>Drywall repair</span></a></li>
                                            <li><a href="#kitchenBath"><span>Kitchen &amp; bath</span></a></li>
                                            <li><a href="#ApplianceRepair"><span>Appliance repair</span></a></li>
                                            
                                        </ul>
                                    </li>
                                  
                                </ul>
                            </li>
                             <li><a href="{{ route('posttask-step1')}}?cat=2"><span>Hire a Handyman in New York City</span></a></li>
                            <li><a href="#serviceFAQ"><span>FAQs</span></a></li>
                        </ul>
                    </div><!--// Table of Contents-->

                    <div class="priceContent-box">
                        <div class="boxContent-pad text-opensans">
                            <div class="subBox-Content" id="content_overview">                                
                                <h2>Overview </h2>
                                <h2 class="mt-4 mt-lg-5" id="HandymanDo">What Can a Handyman Do?</h2>
                                <p>A handyman is a “jack of all trades” service worker who is equipped to handle many different small repair and installation jobs around your home. When a simple home improvement task goes untouched for weeks or months, you can hire a handyman to help you check it off your to-do list.</p>
                                <p>A handyman can help you install things like:</p>
                                <ul class="bulletedList-content smallerBullets mobLeft">
                                    <li>New light fixtures & switches</li>
                                    <li>Appliances</li>
                                    <li>Kitchen cabinets</li>
                                    <li>Cable & Wi-Fi routers</li>
                                    <li>TV wall mounts</li>
                                    <li>Security systems</li>
                                    <li>Furniture assembly</li>
                                    <li>Garage door opener</li>
                                </ul>
                                <p>A handyman can also help fix broken things around your house, such as:</p>
                                <ul class="bulletedList-content smallerBullets mobLeft">
                                    <li>NFaulty outlets</li>
                                    <li>Holes in drywall</li>
                                    <li>Leaky faucets & pipes</li>
                                    <li>Clogged drains</li>
                                    <li>Doors & hinges</li>
                                </ul>                               
                            </div><!--//Overview-->

                            <div class="subBox-Content" id="HandymanGeneral">
                                <p class="paintImg"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/handyman-pic1.jpg" alt=""></p>
                                <h2>Handyman vs. General Contractor</h2>
                                <p>When you require more than help with simple tasks around the house, you may want to consider hiring a general contractor instead of a handyman. Though they have similar skills, and often similar qualifications, general contractors are equipped to work on larger projects that can span weeks, or even months, such as remodels or new construction. A NYC handyman is usually the right choice when you have a list of small tasks that require a day or so to fix. Even if you need a handyman for many projects that take longer than a couple days, consider what type of jobs you need performed before deciding whether to hire a handyman or general contractor. A running list of small, odd-job tasks should be handled by a handyman. Call a general contractor when larger projects make up the majority of your needs. You’ll also want to opt for a contractor when the project requires multiple workers.</p>
                            </div><!--//Handyman vs. General Contractor-->
                        
                            <div class="subBox-Content" id="HiringHandyman">
                                <h2>Hiring a Handyman in NYC</h2>
                                <p>If you don’t wish to hire a contractor or technician to handle basic tasks, or you have more than one small project that needs to be worked on, a handyman is a great option. A handyman doesn’t require a license to do small tasks, and can often help with multiple jobs in one day. When you post your job listing using SelectTask, include as many details about the work you need done as possible. A skilled NYC handyman will provide a detailed quote for their services based on the information you give them, so including as much info as possible is the best way to receive an accurate quote.</p>
                               
                            </div><!--//Hiring a Handyman in NYC-->
                                             
                            <div class="subBox-Content" id="content_AverageServiceCost">
                                <p class="paintImg"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/handyman-pic2.jpg" alt=""></p>
                                <h2>Average Service Costs</h2>
                                <h3 id="HandymanPricingWorks">How Handyman Pricing Works</h3>
                                <p>A vast majority of skilled handymen charge for their services on an hourly basis. You can expect to pay between <strong>$60-$125</strong> per hour for a handyman. A NYC handyman will often have a minimum service call price, which means that they charge a bit more for the first 1-2 hours of work to compensate for travel time and other expenses like tools and safety equipment. A handyman service call-out minimum can range from <strong>$75-$200.</strong> While considering a handyman for a task around your home, ask them about their minimum service call fee so that you know exactly what you are paying for. When you need multiple small tasks done around your home, you can hire a handyman to do them all on the same day to save money on hiring separate contractors, who all have their own minimum service call fees. Just be sure to communicate exactly what you need done before they come to your home to ensure that the handyman has the time and equipment necessary to perform each task.
                                </p>
                            </div><!--//Average Cost of Door & Window Installation in NYC-->

                            <div class="subBox-Content" id="CostInstallation">                               
                               
                                <!--p>A vast majority of skilled handymen charge for their services on an hourly basis. You can expect to pay between <strong>$60-$125</strong> per hour for a handyman. A NYC handyman will often have a minimum service call price, which means that they charge a bit more for the first 1-2 hours of work to compensate for travel time and other expenses like tools and safety equipment. A handyman service call-out minimum can range from <strong>$75-$200.</strong> While considering a handyman for a task around your home, ask them about their minimum service call fee so that you know exactly what you are paying for. When you need multiple small tasks done around your home, you can hire a handyman to do them all on the same day to save money on hiring separate contractors, who all have their own minimum service call fees. Just be sure to communicate exactly what you need done before they come to your home to ensure that the handyman has the time and equipment necessary to perform each task.</p-->
                                <p class="paintImg"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/handyman-pic3.jpg" alt=""></p>
                                 <h2>Cost of Handyman Installation Tasks</h2>
								<h3 id="Lightfixtures">Light Fixtures & Switches</h3>
                                <p>A handyman can install new light fixtures in your home quickly, and most importantly, safely. Even small electrical tasks can be dangerous, and are best left to those who have experience working with electrical wiring. </p>
                                <p>Just as there are many available light fixture styles for you to choose from, the cost to have them installed can vary. Standard light installation cost will typically cost about <strong>$150-$250</strong> per fixture. This includes traditional wall- and ceiling-mounted lighting, with or without a ceiling fan, track lighting, and recessed lighting. If you wish to have a chandelier or hanging light installed, you can expect to pay between <strong>$200-$500</strong> per fixture. Add <strong>$150</strong> to that if you need a new lightswitch for the fixture for standard or dimmer-style switches.</p>
                                <p>Whether or not the necessary wiring already exists can significantly affect the cost of installation, so the handyman may need to assess the location of the new fixture before providing an exact quote.</p>
                                <p>If you need multiple fixtures installed, you may be able to reduce the cost per fixture if they are installed at the same time.</p>

                                <h3 id="Appliances">Appliances</h3>
                                <p>Handymen are well-equipped to properly install new appliances in your home. The type of appliance and existing electrical, water, and gas line hookups will determine the cost of this service. Below is what you can expect to pay for standard installation where wiring and plumbing lines are already in place.</p>
                                <h3>Average Appliance Installation Cost</h3>
                                <div class="table-responsive">
                                    <table class="table avrPriceTable text-lato">
                                        <thead>
                                            <tr>
                                                <th>Appliance</th>
                                                <th class="th2">Average Cost</th>
                                                <th class="th3">Time to Install</th>
                                            </tr>                                            
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-opensans semiBold">Refrigerator</td>
                                                <td><span class="textGreen latoBlack">$100-$200</span></td>
                                                <td><span class="textGreen latoBlack">&lt;1 Hour</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-opensans semiBold">Stove/Oven</td>
                                                <td><span class="textGreen latoBlack">$150-$275</span></td>
                                                <td><span class="textGreen latoBlack">1-2 Hours</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-opensans semiBold">Dishwasher</td>
                                                <td><span class="textGreen latoBlack">$200-$500</span></td>
                                                <td><span class="textGreen latoBlack">2-3 Hours</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-opensans semiBold">Washer & Dryer</td>
                                                <td><span class="textGreen latoBlack">$150-$250</span></td>
                                                <td><span class="textGreen latoBlack">1 Hour</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-opensans semiBold">Old Appliance Removal</td>
                                                <td><span class="textGreen latoBlack">$100</span></td>
                                                <td><span class="textGreen latoBlack">1 Hour</span></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table></div>

                                    <p class="paintImg"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/handyman-pic4.jpg" alt=""></p>
                                <h3 id="Kitchencabinets">Kitchen Cabinets</h3>
                                <p>Among their many other skills, a NYC handyman can repair, resurface, or install new kitchen cabinets. Kitchen cabinet repairs or replacement can be time consuming, and sometimes require special tools to ensure a proper fit.</p>
                                <p>When you’re replacing old cabinets, be sure to factor in the cost of demolition. Removing old cabinets usually costs between <strong>$400-$1,500</strong> depending on the number of cabinets and size of the kitchen.</p>
                                <p>A standard 10x10 kitchen contains about 12 cabinets, with each one taking <strong>1-1.5 hours</strong> to install. Installing new kitchen cabinets usually costs a total of <strong>$700-$1,500</strong> in labor for a kitchen this size.</p>
                                <p>When you don’t want to replace your existing cabinets but still wish to update the look of your kitchen, cabinet resurfacing is a good option. Where the majority of the cost to replace cabinets comes from the purchase of the cabinets themselves, the majority of the cost to resurface cabinets comes from the labor and a few materials like sanders and paint or stain. Resurfacing cabinets <strong>costs about 50% less than replacing them</strong>, plus you can still use your kitchen while the job is in progress.</p>

                                <h3 id="Cable">Cable and Wi-Fi Routers</h3>
                                <p>When tasks like setting up cable and internet in your home seem daunting, you can hire a pro to do it for you. Hiring a handyman is the simplest option to have your Wi-Fi running smoothly in no time. They are experienced and equipped to handle any unexpected issues that can arise from a cable installation, such as faulty wires or connections. You’ll probably pay around <strong>$100-$350</strong> for a one-time basic or premium home internet installation, and up to <strong>$1,000</strong> for a custom wireless network for a business with multiple connections, a router and modem, and premium VPN (virtual private network).</p>

                                <h3 id="TVwallmounts">TV Wall Mounts</h3>
                                <p>Having a pro install your TV wall mount ensures that the television is perfectly straight and secure, as well as properly connected to devices. While DIY might seem like a simpler option for this task, professionals know how to install them properly and create minimal damage on your wall. Most people spend between <strong>$250-$375</strong> to have a professional handyman install a TV wall mount.</p>

                                <h3 id="Furnitureassembly">Furniture Assembly</h3>
                                <p>New furniture is an exciting addition or upgrade to a home’s functionality and aesthetics. Unfortunately, assembling furniture can be confusing, and if you choose to DIY you run the risk of damaging it or assembling it incorrectly. Luckily, there are many furniture assembly  professionals and handymen that can take the hassle out of purchasing new furniture.</p>
                                <p>If you purchase multiple new pieces, it’s best to have them all assembled at the same time as the cost per piece often goes down when the job includes more than one. Having a handyman visit your home to assemble one piece of furniture will usually cost around <strong>$120 for a single item</strong>. This number per piece drastically reduces when more pieces are added to the job, with the national average to have 5 pieces assembled at the same time is about <strong>$55 per piece</strong>. </p>

                                <h3 id="Garagedooropeners">Garage Door Openers</h3>
                                <p>Having a handyman install a new garage door opener costs an average of <strong>$450</strong> in New York City, slightly higher than the national average of <strong>$350</strong>. This project can take anywhere from two to six hours depending on where the garage door is located, what type of opener is being installed, and whether an opener was previously installed on the door.</p>
                                <p class="paintImg"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/handyman-pic5.jpg" alt=""></p>
                            </div><!--//Average Cost of Door & Window Installation in NYC-->

                            <div class="subBox-Content" id="minorRepairs">
                                <h2>Cost of Handyman Repair Tasks</h2>
                                <h3 id="DrywallRepair">Drywall Repair</h3>
                                <p>Drywall can require repairs for a number of reasons, from small accidental holes to water damage. Repairing minor drywall issues, regardless of the cause of damage, costs between <strong>$50-$75</strong> per hole after the handyman’s service call minimum is met. Drywall damage can occur due to larger problems like roofing or foundation issues; if this is the case, you’ll want to enlist the help of a general contractor.</p>

                                <h3 id="kitchenBath">Kitchen & Bathroom Faucets</h3>
                                <p>Leaks in kitchen and bathroom fixtures are a common occurrence that handymen encounter all the time. Repairing a simple pipe or faucet leak is usually a quick task when handled by a professional plumber or handyman. Here are some small kitchen- and bathroom-related tasks and the cost to hire a pro to fix them:</p>
                                <ul class="bulletedList-content smallerBullets mobLeft">
                                    <li>Unclogging a drain: <strong>$150-$200</strong></li>
                                    <li>Stopping a dripping faucet: <strong>$65-$150 </strong></li>
                                    <li>Fixing a running toilet: <strong>$100-$200</strong></li>
                                    <li>Repairing leaky pipes: <strong>$120-$170 </strong></li>
                                    <li>Fixing a sink bowl: <strong>$100-$200 </strong></li>
                                    <li>Replacing a faucet or sink: <strong>$150-$400</strong></li>
                                    <li>Garbage disposal repair: <strong>$70-$400</strong></li>
                                </ul>

                                <h3 id="ApplianceRepair">Appliance Repair</h3>
                                <p>Appliances can malfunction for many different reasons. A handyman, who works with appliances and home repairs on a daily basis, can quickly determine the cause of the problem and perform a same-day repair(except when a special part must be ordered from the manufacturer). </p>
                                <div class="table-responsive">
                                    <table class="table avrPriceTable text-lato">
                                        <thead>
                                            <tr>
                                                <th>Appliance</th>
                                                <th class="th2">Average Cost</th>
                                                <th class="th3">Time to Install</th>
                                            </tr>                                            
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-opensans semiBold">Refrigerator</td>
                                                <td><span class="textGreen latoBlack">$100-$200</span></td>
                                                <td><span class="textGreen latoBlack">&lt;1 Hour</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-opensans semiBold">Stove/Oven</td>
                                                <td><span class="textGreen latoBlack">$150-$275</span></td>
                                                <td><span class="textGreen latoBlack">1-2 Hours</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-opensans semiBold">Dishwasher</td>
                                                <td><span class="textGreen latoBlack">$200-$500</span></td>
                                                <td><span class="textGreen latoBlack">2-3 Hours</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-opensans semiBold">Washer & Dryer</td>
                                                <td><span class="textGreen latoBlack">$150-$250</span></td>
                                                <td><span class="textGreen latoBlack">1 Hour</span></td>
                                            </tr>
                                        </tbody>
                                    </table></div>
                                    <p>Our home appliances are essential to keeping everyday life running smoothly — you can post a free task on SelectTask to find an appliance repair pro today.</p>

                            </div><!--//Cost of Handyman Repair Tasks-->

                        </div>

                        <div class="boxContent-pad getQuoteBox" id="findPlumberNYC">
                            <p class="mb-4 mb-lg-5"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/getQuote-icon.svg" alt=""></p>
                            <h2>Ready to Get Started?</h2>
                            <p>Post Your Task to Get in Touch with <span class="d-block">Handyman in New York City.</span> </p>
                            <p class="mt-4 mt-lg-5"><a href="{{ route('posttask-step1')}}?cat=2" class="btn btn-green btn-green-shadow btn-sm">Get a Quote</a></p>
                        </div><!--// Ready to Get Started?-->

                        <div class="boxContent-pad servicesFaq" id="serviceFAQ">
                            <h2>FAQ’s</h2>
                            <div id="accordion" class="faqAccordion">
                                <div class="card collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <div class="card-header" id="headingOne">
                                      <h5 class="mb-0">Do I have to purchase the materials for the job myself?</h5>
                                      <img src="{{ url('public/frontend')}}/assets/images/chevron-down.svg" alt="">
                                    </div>
                                
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                      <div class="card-body">Depending on the handyman, you’ll probably have the choice to either purchase the item yourself or let them do it for you. A handyman will typically upcharge the materials by about 20% if they buy them for you.</div>
                                    </div>
                                </div>
                
                                <div class="card collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="card-header" id="headingTwo">
                                      <h5 class="mb-0">What can’t a handyman in NYC do?</h5>
                                      <img src="{{ url('public/frontend')}}/assets/images/chevron-down.svg" alt="">
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                      <div class="card-body">While a handyman is trained and equipped to perform many different jobs, they may not always be a one-size-fits-all professional. Before you hire a handyman, make sure that they have the skills to perform your task. Larger projects that require more than a day or two typically call for a different kind of professional.</div>
                                    </div>
                                  </div>
                
                                  <div class="card collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <div class="card-header" id="headingThree">
                                      <h5 class="mb-0">I need this task done ASAP. How fast can a NYC handyman come to my home?</h5>
                                      <img src="{{ url('public/frontend')}}/assets/images/chevron-down.svg" alt="">
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">You can get same-day quotes from a handyman in NYC when you use SelectTask. Be sure to include the service location to find handymen close to you.</div>
                                    </div>
                                  </div>
                
                                  <!-- <div class="card collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                    <div class="card-header" id="headingfour">
                                      <h5 class="mb-0">How long will I have to wait to have my new window or door installed?</h5>
                                      <img src="assets/images/chevron-down.svg" alt="">
                                    </div>
                                    <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                                        <div class="card-body">If you are able to choose a stock window or door, you may not have to wait long for the installation to be complete. If you choose to order custom-made windows or doors, you may have to wait as long as 12 weeks for it to be made and installed.</div>
                                    </div>
                                  </div> -->
                
                                  
                            </div>
                            <p class="mt-4"><a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class="textGreen underlineLink collapsed">Sources</a></p>
                        <ul class="source-list mt-2 collapse" id="collapseExample" style="">
                                <li><a href="https://www.homeadvisor.com/cost/handyman/" target="_blank">https://www.homeadvisor.com/cost/handyman</a></li>
                                    <li><a href="https://homeguide.com/costs/handyman-prices" target="_blank">https://homeguide.com/costs/handyman-prices</a></li>
                                    <li><a href="https://www.inchcalculator.com/light-fixture-installation-cost-guide" target="_blank">https://www.inchcalculator.com/light-fixture-installation-cost-guide</a></li>
                                    <li><a href="https://www.houselogic.com/by-room/kitchen/refacing-kitchen-cabinets">https://www.houselogic.com/by-room/kitchen/refacing-kitchen-cabinets</a></li>
                                    <li><a href="https://www.fixr.com/costs/install-wireless-computer-network" target="_blank">https://www.fixr.com/costs/install-wireless-computer-network</a></li>
                                    <li><a href="https://www.angieslist.com/articles/need-wall-mount-your-flat-screen-tv-hire-pro.htm" target="_blank">https://www.angieslist.com/articles/need-wall-mount-your-flat-screen-tv-hire-pro.htm</a></li>
                                    <li><a href="https://www.thumbtack.com/p/furniture-assembly-cost" target="_blank">https://www.thumbtack.com/p/furniture-assembly-cost</a></li>
                                    <li><a href="https://www.inchcalculator.com/cost-to-install-garage-door-opener" target="_blank">https://www.inchcalculator.com/cost-to-install-garage-door-opener</a></li>
                                    <li><a href="https://www.angieslist.com/articles/how-much-does-drywall-repair-cost-small-holes.htm" target="_blank">https://www.angieslist.com/articles/how-much-does-drywall-repair-cost-small-holes.htm</a></li>
                                    <li><a href="https://www.thumbtack.com/p/sink-repair-cost" target="_blank">https://www.thumbtack.com/p/sink-repair-cost</a></li>
                                    <li><a href="https://www.homeadvisor.com/cost/kitchens/garbage-disposal-repair" target="_blank">https://www.homeadvisor.com/cost/kitchens/garbage-disposal-repair</a></li>
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
            <div class="title text-center" id="OtherCategories">
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
                   <a href="{{ route('NYC-Repair-Price_windowDoor')}}"> <div class="borderedframe">
                        <p class="servicePic position-relative"><img src="{{ url('public/frontend')}}/assets/images/services/windows-pic.jpg" alt=""><span class="servicePriceTag text-opensans centereditem">$3k</span></p>
                        <div class="serviceText">
                            <h5>Windows</h5>
                            <p>Hire a pro to install new energy-efficient windows </p>
                        </div>
                    </div></a>
                </div>

                <div class="col-md-4 col-sm-6 services-widget">
                   <a href="{{ route('NYC-Repair-Price_roofing')}}"> <div class="borderedframe">
                        <p class="servicePic position-relative"><img src="{{ url('public/frontend')}}/assets/images/services/roofing-pic.jpg" alt=""><span class="servicePriceTag text-opensans centereditem">$3k</span></p>
                        <div class="serviceText">
                            <h5>Roofing</h5>
                            <p>Our roofing experts take excellent service to new heights.</p>
                        </div>
                    </div></a>
                </div>

                <div class="col-md-4 col-sm-6 services-widget">
                   <a href="{{ route('NYC-Repair-Price_GeneralContractor')}}"> <div class="borderedframe">
                        <p class="servicePic position-relative"><img src="{{ url('public/frontend')}}/assets/images/services/carpentry-pic.jpg" alt=""><span class="servicePriceTag text-opensans centereditem">$3k</span></p>
                        <div class="serviceText">
                            <h5>General Contracting</h5>
                            <p>For big home-improvement jobs, talk to a general contractor</p>
                        </div>
                    </div></a>
                </div>

                <div class="col-md-4 col-sm-6 services-widget">
                    <a href="{{ route('NYC-Repair-Price_HVAC-Repair')}}"><div class="borderedframe">
                        <p class="servicePic position-relative"><img src="{{ url('public/frontend')}}/assets/images/services/security-pic.jpg" alt=""><span class="servicePriceTag text-opensans centereditem">$3k</span></p>
                        <div class="serviceText">
                            <h5>HVAC Repairs</h5>
                            <p>Maintain your heating and cooling systems to prevent malfunctions</p>
                        </div>
                    </div></a>
                </div>

            </div>
        </div>
    </section>
    <!-- //Service Categories-->

    <!--banner-->
    <section class="section connecting getStarted-handyman priceGetStarted">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 wow bounceInleft" data-wow-delay="0.1s">
                    <h2>Find a Handyman in New York City</h2>                    
                    <h3 class="subheadinggray mt-3">Click on your <strong>New York City Borough</strong> <span class="d-md-block">Below to Get Free Quotes from Handyman in Your Neighborhood.</span></h3>
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
                    <a href="{{ route('posttask-step1')}}?cat=2" class="btn btn-primary btn-primary-shadow btnLg">Get Started</a>
                </div>
            </div>
        </div>
    </section>
    <!-- //Call to action Section -->
	@endsection