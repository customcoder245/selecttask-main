@extends('frontend.layout.app')
@section('content')
<!-- Banner Section -->
    <section class="banner innerbanner NYC-Pricing-innerBanner NYC-roofing-Banner">
        <div class="container">
            <div class="row align-items-md-center">
                <div class="col-md-7">
                    <div class="detail wow bounceInLeft maxW-350" data-wow-delay="0.1s">
                        <h2><span class="mobNone">How Much Does it</span> Cost to Repair or <span class="mobBlock">Replace a Roof in NYC?</span></h2>
                        <h3>Find out how much it costs to repair or replace your asphalt shingle, tile, or metal roof in NYC.</h3>
                        <div class="nyc-banner-box">
                            <ul class="nycBox-list">
                                <li>
                                    <h4>Average Roof Repair Cost in New York City:</h4>
                                    <ul class="listText text-opensans">
                                        <li><strong>$343</strong></li>
                                    </ul>                                    
                                </li>
                                <li>
                                    <h4>Average Roof Replacement Cost in New York City:</h4>
                                    <ul class="listText text-opensans">
                                        <li><strong>$5.50-$9.40 per sqft</strong></li>
                                    </ul>                                    
                                </li>
                            </ul>
                        </div>
                        <div class="button">
                            <a href="{{ route('posttask-step1')}}?cat=6" class="btn btn-green btn-green-shadow mr-md-4 mw-321 btnLg">Get a Quote</a>
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
                            <img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/hire_roofing.svg" class="img-fluid">
                        </div>
                        <p>Looking to <strong class="d-block">Hire a Roofing?</strong></p>
                        <div class="button mt-4">
                            <a href="{{ route('posttask-step1')}}?cat=6" class="btn btn-primary btn-primary-shadow btn52 post_a_task">Post a Task</a>
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
                                            <li><a href="#InstallationUpgrades"><span>Roof Installation</span></a></li>
                                            <li><a href="#RoofMaintenance"><span>Roof Maintenance</span></a></li>
                                            <li><a href="#Repairs"><span>Repair or Replace?</span></a></li>
                                            <li><a href="#NYCRoofingLaws"><span>NYC Roofing Laws: “New Green Deal”</span></a></li>
                                        </ul>
                                    </li> 
                                    
                                    <li><a href="#content_hiringPlumber"><span>Hiring a Roofing Contractor</span></a></li>                                    
                                </ul>
                            </li>
                            <li><a href="#content_AverageServiceCost"><span>Average Service Costs</span></a>
                                <ul>
                                    <li><a href="#content_pricingWorks"><span>How Roofer Pricing Works</span></a></li>
                                    <li><a href="#content_RoofMaintenance"><span>Regular Roof Maintenance</span></a></li>
                                    <li><a href="#content_RepairRoofsMaterial"><span>Cost to Repair Roofs by Material</span></a>
                                        <ul>
                                            <li><a href="#AsphaltShingles"><span>Asphalt Shingles</span></a></li>
                                            <li><a href="#Tile"><span>Tile</span></a></li>
                                            <li><a href="#Rubber"><span>Rubber</span></a></li>
                                            <li><a href="#Copper"><span>Copper</span></a></li>
                                            <li><a href="#Aluminium"><span>Aluminium</span></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#content_RepairRoofs"><span>Cost to Repair Roofs</span></a></li>
                                  
                                </ul>
                            </li>
                            <li><a href="{{ route('posttask-step1')}}?cat=6"><span>Find a Roofer in New York City</span></a></li>
                            <li><a href="#serviceFAQ"><span>FAQs</span></a></li>
                            <li><a href="#OtherCategories"><span>Other Categories</span></a></li>
                        </ul>
                    </div>

                    

                </div>
                <div class="NYCLeftCol blogCol flex-grow-1 order-md-1" id="content-holder">
                    <div class="priceContent-box boxContent-pad text-opensans text-center">
                        <h2>About NYC Roofing Repair & Replacement Prices</h2>
                        <p>How much roofing repair or replacement costs in New York City greatly depends on the size of the roof, the area to be repaired, and the material you wish to install. Where a small roof repair may cost around <strong>$300-$500</strong>, larger projects like replacing part or all of the shingles on a roof can cost <strong>$1,500-$12,000</strong> due to the amount of time these tasks take to complete, and the cost of materials to be installed. </p>
                        <p>If your roof requires decking replacement due to water damage or rot, the cost could be much higher due to recently passed green roof laws in New York City. The cost of installing a green roof starts at around <strong>$10</strong> per square foot for simpler roofing, and <strong>$25</strong> per square foot for more complex roof structures. Annual maintenance of a green roof costs range from <strong>75 cents-$1.50</strong> per square foot.</p>
                    </div><!--// About NYC Roofing Repair & Replacement Prices-->
                    <div class="priceContent-box boxContent-pad text-center">
                        <h2>Need Roof Repairs?</h2>
                        <ul class="nyc-painting d-flex flex-wrap mt-md-4 mt-xl-5">
                             <li><a href="{{ route('service-locations')}}">New York City</a></li>
                        <li><a href="{{ route('Services-Location-TheBronx')}}">The Bronx</a></li>
                        <li><a href="{{ route('Services-Location-Brooklyn')}}">Brooklyn</a></li>
                        <li><a href="{{ route('Services-Location-Queens')}}">Queens</a></li>
                        <li><a href="{{ route('Services-Location-StatenIsland')}}">Staten Island</a></li>
                        <li><a href="{{ route('Services-Location-Manhattan')}}">Manhattan</a></li>
                        </ul>
                    </div><!--// Need Roof Repairs?-->
                    <div class="priceContent-box text-opensans">
                        <h2 class="boxContent-pad mb-0">Table of Contents</h2>
                        
                      
                        <ul class="tableContent-list mobLeft">
                            <li><a href="#content_overview"><span>Overview</span></a>
                                <ul class="subContent-list">
                                    <li><a href="#content_plumbingServices"><span>Services</span></a>
                                        <ul>
                                            <li><a href="#InstallationUpgrades"><span>Roof Installation</span></a></li>
                                            <li><a href="#RoofMaintenance"><span>Roof Maintenance</span></a></li>
                                            <li><a href="#Repairs"><span>Repair or Replace?</span></a></li>
                                            <li><a href="#NYCRoofingLaws"><span>NYC Roofing Laws: “New Green Deal”</span></a></li>
                                        </ul>
                                    </li> 
                                    
                                    <li><a href="#content_hiringPlumber"><span>Hiring a Roofing Contractor</span></a></li>                                    
                                </ul>
                            </li>
                            <li><a href="#content_AverageServiceCost"><span>Average Service Costs</span></a>
                                <ul class="subContent-list">
                                    <li><a href="#content_pricingWorks"><span>How Roofer Pricing Works</span></a></li>
                                    <li><a href="#content_RoofMaintenance"><span>Regular Roof Maintenance</span></a></li>
                                    <li><a href="#content_RepairRoofsMaterial"><span>Cost to Repair Roofs by Material</span></a>
                                        <ul>
                                            <li><a href="#AsphaltShingles"><span>Asphalt Shingles</span></a></li>
                                            <li><a href="#Tile"><span>Tile</span></a></li>
                                            <li><a href="#Rubber"><span>Rubber</span></a></li>
                                            <li><a href="#Copper"><span>Copper</span></a></li>
                                            <li><a href="#Aluminium"><span>Aluminium</span></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#content_RepairRoofs"><span>Cost to Repair Roofs</span></a></li>
                                  
                                </ul>
                            </li>
                            <li><a href="{{ route('posttask-step1')}}?cat=6"><span>Find a Roofer in New York City</span></a></li>
                            <li><a href="#serviceFAQ"><span>FAQs</span></a></li>
                            <li><a href="#OtherCategories"><span>Other Categories</span></a></li>
                        </ul>
                    </div><!--// Table of Contents-->

                    <div class="priceContent-box">
                        <div class="boxContent-pad text-opensans">
                            <div class="subBox-Content" id="content_overview">                                
                                <h2>Overview </h2>
                                <p>The roof is one of the most important architectural components of any building, providing shelter and safety from outdoor elements. A functional, well-maintained roof is also essential to staying up to code with New York City building regulations</p>
                                <p class="paintImg"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/roofing-pic1.jpg" alt=""></p>
                               
                            </div><!--//Overview-->

                            <div class="subBox-Content" id="content_plumbingServices">
                                <h2>Roofing Services</h2>
                                <h3 class="dot_h3" id="InstallationUpgrades">Roof Installation</h3>
                                <div class="ContentSibling">
                                    <p>Installing a new roof is an important facet of erecting a new building that is safe and that complies with New York City’s building laws. Proper installation is essential to the building’s structural integrity, and making sure that it lasts for a long time. Hiring a reputable roofing contractor is the best way to ensure that a roof is built correctly. It can be a dangerous job, especially on taller buildings, and is best left to professionals. One important decision you’ll make when installing a new roof is the materials that you use.</p>
                                </div>
                                
                                <h3 class="dot_h3" id="RoofMaintenance">Roof Maintenance</h3>
                                <div class="ContentSibling">
                                    <p>If your roof is in relatively good condition, you’ll want to make sure that you have regular inspections and cleanings to prevent bigger issues down the line. Roofs sustain a lot of damage from the weather and other outdoor elements, and require maintenance every few months (or at a minimum once a year). Roofing contractors can inspect your roof for minor damage such as missing nails or shingles and clean debris from the rooftop to ensure that it stays in good condition for a long time.</p>
                                </div>
                                    <h3 class="dot_h3" id="Repairs">Repair or Replace?</h3>
                                    <div class="ContentSibling">
                                        <p>When your roof needs to be repaired due to significant damage, you’ll want to consider whether or not to replace it altogether. While some roof problems won’t require roof replacement, an onslaught of significant issues is probably a sign that it’s time for a new roof. </p>
                                        <p>You may want to consider replacing your roof if any of these apply:</p>
                                        <ul class="bulletedList-content smallerBullets mobLeft">
                                            <li><strong>The roof is 20-25 years old.</strong> Many experts agree that this is the lifespan of most roofs, however metal roofs can last for 50 years or longer.</li>
                                            <li><strong>You notice shingle issues like curling, cracking, or discoloration.</strong> In this instance, you’ll want to resurface the roof, although the underlayment and decking may still be intact.</li>
                                            <li><strong>The roof has a dip, or feels spongy when you walk on it.</strong> In this case, the underlying decking is probably weakened from moisture. </li>
                                        </ul>
                                    
                                </div>

                                <h3 class="dot_h3" id="NYCRoofingLaws">NYC Roofing Laws: “New Green Deal”</h3>
                                    <div class="ContentSibling">
                                        <p>As part of the Climate Mobilization Act, also known as the “Green New Deal,” New York City passed new local laws in April 2019 mandating the installation of rooftop solar panels and/or green roofs on buildings across the city. The new requirements apply to all new buildings and any existing buildings completing a full roof deck replacement. Officials estimate that the solar and green roof installations mandated by these bills will account for 2.5% of the city’s emissions reduction goals.
                                            Though most roofs will be required to comply with these regulations, there are areas that have been deemed “not available,” and are excluded from the requirements. </p>
                                        <p>These areas include:</p>
                                </div>
                                <div class="grayList-Widget">
                                    <ul class="bulletedList-content smallerBullets mobLeft m-0">
                                        <li><strong>Areas obstructed by rooftop structures, mechanical equipment, towers, parapets, guardrails, solar thermal systems, cisterns, etc.</strong> </li>
                                        <li><strong>Fire access pathways and zoning setbacks</strong> </li>
                                        <li><strong>Recreational spaces that are recorded in the Certificate of Occupancy</strong> </li>
                                    </ul>
                                </div>

                                <p>When you’re considering replacing your roof decking, consult your roofing contractor about whether or not these “Green New Deal” roofing laws apply to you, and how you can install a green roof if necessary.
                                    </p><p>If you do determine that you are required to install a green roof, you can expect to pay about <strong>$10</strong> per sq ft for simpler roofing, to <strong>$25</strong> per square foot for more complex roofs. Keep in mind that they have been shown to save consumers money in the long run. Annual maintenance costs for either type may range from <strong>$0.75-$1.50</strong> per square foot.
                                    </p>
                            </div><!--//Services Electricians Offer-->
                          
                            <div class="subBox-Content" id="content_hiringPlumber">
                                <p class="paintImg"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/roofing-pic2.jpg" alt=""></p>
                                <h2>Hiring a Roofing Contractor in New York City</h2>
                                <p>When it’s time to have your roof inspected, repaired, or replaced, your best bet is to hire a roofing contractor. Performing any work on a roof can be dangerous and complicated. Roofers are trained and certified by OSHA (the Occupational Safety and Health Administration) to work in unsafe conditions such as those atop buildings, and they have experience inspecting and working on many different types of roofs. </p>
                                <p>You can find a reliable roofer when you post a task for free on SelectTask. When you suspect that your roof needs to be looked at, you can create your free account and provide a description of the issue. Local pros will respond to your post and give you quotes, and you can check out their reviews and choose the best one for the job.</p>
                            </div><!--//Hiring a Professional Plumber-->
                           
                        </div>                        
                        <div class="boxContent-pad getQuoteBox" id="findPlumberNYC">
                            <p class="mb-4 mb-lg-5"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/getQuote-icon.svg" alt=""></p>
                            <h2>Ready to Get Started?</h2>
                            <p>Post Your Task to Get in Touch with <span class="d-block">Roofing in New York City.</span> </p>
                            <p class="mt-4 mt-lg-5"><a href="{{ route('posttask-step1')}}?cat=6" class="btn btn-green btn-green-shadow btn-sm">Get a Quote</a></p>
                        </div><!--// Ready to Get Started?-->

                        <div class="boxContent-pad text-opensans" id="content_AverageServiceCost">
                            <div class="subBox-Content">
                                <h2>Average Service Costs</h2>
                                <h2 class="mt-4 mt-lg-5" id="content_pricingWorks">How Roofer Pricing Works</h2>
                                <p>Many roofing contractors charge for their work using what are known as "squares," or one 100 sq ft patch of roof. The average residential roof measures between 22 and 34 squares depending on the size of the building and slope of the roof. On average, roofers in New York City charge about <strong>$350-$550</strong> per square <strong>($3.50-$5.50 per sqft)</strong> for roof repairs and <strong>$550-$940</strong> per square <strong>($5.50-$9.40 per sqft)</strong> for roof replacement.</p>
                                <p>Not sure how big your roof is? Many roofing contractors will provide a free inspection to assess what kinds of repairs your roof needs and how much it will cost to perform the work. You can expect to receive a fixed price quote once the roofer has inspected the building and calculated the labor and material costs.</p>
                            </div><!--//How Roofer Pricing Works-->
                                             
                            <div class="subBox-Content" id="content_RoofMaintenance">
                                <p class="paintImg"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/roofing-pic3.jpg" alt=""></p>
                                <h2>Cost of Regular Roof Maintenance</h2>
                                <p>The best way to avoid major repairs or premature roof replacement is to properly maintain your home or building’s roof. Many roof problems can go undetected for long periods of time, allowing further damage to occur from what may have originally been a simple repair. Unfortunately, roof maintenance is often overlooked by property owners due to an “out of sight, out of mind” mentality.</p>
                                <p>Industry studies show that maintaining a roof can make it last up to 50% longer than an unmaintained roof; they also show that consistent proactive maintenance can significantly lower the average life-cycle cost of a roof. </p>
                                <p>Some roofing contractors offer maintenance programs for roofs. A basic maintenance plan includes 2-3 yearly inspections, small preventative repairs, and regular cleaning for a fraction of the cost of normal repairs. Generally speaking, roof maintenance programs cost 1%-3% per year of what a complete roof replacement is projected to cost. So, if your roof costs <strong>$15,000</strong> to install,<strong> you’ll pay about $300-$450 per year for basic maintenance.</strong></p>                                                     
                            </div><!--//Cost of Regular Roof Maintenance-->
                            <div class="subBox-Content" id="content_RepairRoofsMaterial">
                                <h2>Cost to Repair a Roof</h2>
                                <p>Roofs that aren’t properly maintained or older than 8 years will likely require repairs from time to time. Roof issues can often be solved with simple repairs that cost just a few hundred dollars as long as they are promptly taken care of. A few components of your roof that may require repairs include:</p>
                                <div class="grayList-Widget">
                                    <ul class="bulletedList-content smallerBullets mobLeft m-0">
                                        <li><strong>Chimney</strong> </li>
                                        <li><strong>Flashing</strong> </li>
                                        <li><strong>Valleys</strong> </li>
                                        <li><strong>Venting fixtures</strong> </li>
                                        <li><strong>Shingles, tiles, or sheets</strong> </li>
                                        <li><strong>Skylights</strong> </li>
                                        <li><strong>Underlayment</strong> </li>
                                        <li><strong>Seams</strong> </li>
                                    </ul>
                                </div>
                                <p>Inspecting your roof every 6-12 months is the best way to check for minor roof problems. The material of your roof will determine how much you’ll likely spend on your roof repair.</p>

                                <h3 class="dot_h3">Asphalt</h3>
                                <p>Unsurprisingly, asphalt is one of the most commonly used roofing materials, because it is inexpensive and easy to install. Asphalt shingles come in two configurations: a standard, single-thickness variety and thicker, laminated products. Repairing an asphalt roof costs homeowners <strong>$710</strong> on average for shingle replacement and labor.  Shingle replacement and fixture sealing are two of the most common asphalt roof repairs.</p>

                                <h3 class="dot_h3">Wood</h3>
                                <p>Wood is an attractive, wind-resistant roofing material that also provides insulation. Wood roofs usually incur damage from moss build up or pests doing damage to the wood shingles. Repairing a roof in New York City costs an average of <strong>$750.</strong> </p>

                                <h3 class="dot_h3">Metal</h3>
                                <p>Metal roofs are the most durable roofing option, lasting over 50 years and requiring minimal maintenance. They are lightweight and wind-resistant, and also generally regarded as environmentally friendly. Metal roofs can require repairs due to leaks along seams and where protrusions occur, like skylights and vents due to the expanding and contracting of metal in extreme temperatures. Repairing a metal roof costs an average of <strong>$1,500.</strong></p>
                                
                            </div><!--//Cost to Repair a Roof-->

                            <div class="subBox-Content" id="content_RepairRoofs">
                                <p class="paintImg"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/roofing-pic4.jpg" alt=""></p>
                                <h2>Cost to Replace a Roof</h2>
                                <p>If your roof is older and requires constant repairs, the best option is to replace the roof altogether. Roof replacement costs vary depending on the size of your home and the material of roof you wish to install. Materials for roof replacement typically make up 40% of the total cost of the project, with the labor making up the other 60%. Replacing a roof can add significant value to your home, between <strong>$10,000-$20,000</strong> depending on the type of roof you install. The average residential roof size in the US is about 1,700 square feet or 17 squares, with the cost of a new roof averaging between <strong>$7,500-$14,500</strong> depending on the material you choose. If you have to install a green roof in accordance with New York City’s new green roof regulations</p>
                                <h3>Cost of Roof Replacement by Material</h3>
                                <div class="table-responsive">
                                    <table class="table avrPriceTable text-lato">
                                        <thead>
                                            <tr>
                                                <th>Material</th>
                                                <th class="th2">Cost Per sq ft</th>
                                                <th class="th3">Whole Roof Cost <span class="d-block">(1,700 sq ft)</span></th>
                                            </tr>                                            
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-opensans semiBold">Asphalt</td>
                                                <td><span class="textGreen latoBlack">$6,750</span></td>
                                                <td><span class="textGreen latoBlack"> $4.50</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-opensans semiBold">Wood</td>
                                                <td><span class="textGreen latoBlack">$11,475</span></td>
                                                <td><span class="textGreen latoBlack">$6.75</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-opensans semiBold">Metal</td>
                                                <td><span class="textGreen latoBlack">$14,500</span></td>
                                                <td><span class="textGreen latoBlack">$8.52</span></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table></div>
                                    <p class="paintImg"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/roofing-pic5.jpg" alt=""></p>
                                
                            </div><!--//Cost to Replace a Roof-->

                           
                        </div>

                        <div class="boxContent-pad servicesFaq" id="serviceFAQ">
                            <h2>FAQ’s</h2>
                            <div id="accordion" class="faqAccordion">
                                <div class="card collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <div class="card-header" id="headingOne">
                                      <h5 class="mb-0">How do I know if my roof needs repairs?</h5>
                                      <img src="{{ url('public/frontend')}}/assets/images/chevron-down.svg" alt="">
                                    </div>
                                
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                      <div class="card-body">There are many different signs that your roof may require repairs. If you notice issues like leaks in your attic, a sagging appearance, or frequent shingle loss, you’ll want to have a pro inspect the roof.</div>
                                    </div>
                                </div>
                
                                <div class="card collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="card-header" id="headingTwo">
                                      <h5 class="mb-0">Can I DIY my roof repair?</h5>
                                      <img src="{{ url('public/frontend')}}/assets/images/chevron-down.svg" alt="">
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                      <div class="card-body">As with any type of repair or maintenance work, unless you’re an experienced DIYer, having a professional roofer inspect and repair your roof is the best option. A professional roofing contractor knows how to safely perform these repairs so that they help your roof last longer.</div>
                                    </div>
                                  </div>
                
                                  <div class="card collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <div class="card-header" id="headingThree">
                                      <h5 class="mb-0">How long is my roof supposed to last?</h5>
                                      <img src="{{ url('public/frontend')}}/assets/images/chevron-down.svg" alt="">
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">On average, a well-maintained roof lasts around 20 years. The best way to increase the longevity of your roof is to have it inspected at least once a year to catch potential problems before they get worse.</div>
                                    </div>
                                  </div>
                
                                  <div class="card collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                    <div class="card-header" id="headingfour">
                                      <h5 class="mb-0">What material is best to use on my new roof?</h5>
                                      <img src="{{ url('public/frontend')}}/assets/images/chevron-down.svg" alt="">
                                    </div>
                                    <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                                        <div class="card-body">While the most obvious choice may be to replace the roof with the same material that was previously used, consult with your roofing contractor to find out if a different roofing material would be a better choice.</div>
                                    </div>
                                  </div>
                
                                  
                            </div>
                            <p class="mt-4"><a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class="textGreen underlineLink collapsed">Sources</a></p>
                        <ul class="source-list mt-2 collapse" id="collapseExample" style="">
                                <li><a href="https://www.brickunderground.com/improve/sustainability-drainage-requirements-for-new-NYC-green-roof-law" target="_blank">https://www.brickunderground.com/improve/sustainability-drainage-requirements-for-new-NYC-green-roof-law</a></li>
                                <li><a href="https://www.inchcalculator.com/roof-repair-cost-guide/" target="_blank">https://www.inchcalculator.com/roof-repair-cost-guide</a></li>
                                <li><a href="https://longroofing.com/blog/how-do-i-know-if-i-have-rotted-roof-decking" target="_blank">https://longroofing.com/blog/how-do-i-know-if-i-have-rotted-roof-decking</a></li>
                                <li><a href="https://www.networx.com/article/cost-of-a-roofer-service-call" target="_blank">https://www.networx.com/article/cost-of-a-roofer-service-call</a></li>
                                <li><a href="https://www.homeadvisor.com/cost/roofing/install-a-roof" target="_blank">https://www.homeadvisor.com/cost/roofing/install-a-roof</a></li>
                                <li><a href="https://www.angieslist.com/articles/7-warning-signs-you-need-new-roof.htm" target="_blank">https://www.angieslist.com/articles/7-warning-signs-you-need-new-roof.htm</a></li>
                                <li><a href="https://www.dwell.com/article/new-york-city-requires-green-roofs-on-new-buildings-ede4deb8" target="_blank">https://www.dwell.com/article/new-york-city-requires-green-roofs-on-new-buildings-ede4deb8</a></li>
                                <li><a href="https://www.weroof.net/weroof/roofing-blog/51-how-do-roofer-s-charge.html" target="_blank">https://www.weroof.net/weroof/roofing-blog/51-how-do-roofer-s-charge.html</a></li>
                                <li><a href="https://www.roofingcontractor.com/articles/89106-making-a-case-for-roof-maintenance" target="_blank">https://www.roofingcontractor.com/articles/89106-making-a-case-for-roof-maintenance</a></li>
                                <li><a href="https://canyonstateroofs.com/the-budget-says-it-all-why-annual-roof-maintenance-is-a-necessity" target="_blank">https://canyonstateroofs.com/the-budget-says-it-all-why-annual-roof-maintenance-is-a-necessity</a></li>
                                <li><a href="https://www.roofingcalc.com/roof-repair-cost" target="_blank">https://www.roofingcalc.com/roof-repair-cost</a></li>
                                <li><a href="https://www.homeadvisor.com/cost/roofing/repair-a-roof/#wood" target="_blank">https://www.homeadvisor.com/cost/roofing/repair-a-roof/#wood</a></li>
                                <li><a href="https://www.superstormrestoration.com/blog/how-much-does-a-new-roof-cost" target="_blank">https://www.superstormrestoration.com/blog/how-much-does-a-new-roof-cost</a></li>
                                <li><a href="https://www.swinter.com/party-walls/new-york-city-ll-92-and-94-sustainable-rooftops" target="_blank">https://www.swinter.com/party-walls/new-york-city-ll-92-and-94-sustainable-rooftops</a></li>
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
    <section class="section connecting getStarted-roofing priceGetStarted">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 wow bounceInleft" data-wow-delay="0.1s">
                    <h2>Find a Roofing in New York City</h2>                    
                    <h3 class="subheadinggray mt-3">Click on your <strong>New York City Borough</strong> <span class="d-md-block">Below to Get Free Quotes from Roofing in Your Neighborhood.</span></h3>
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
                    <a href="{{ route('posttask-step1')}}?cat=6" class="btn btn-primary btn-primary-shadow btnLg">Get Started</a>
                </div>
            </div>
        </div>
    </section>
    <!-- //Call to action Section -->
	@endsection 