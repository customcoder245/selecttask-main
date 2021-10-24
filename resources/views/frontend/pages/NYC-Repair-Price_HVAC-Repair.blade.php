@extends('frontend.layout.app')
@section('content')
<!-- Banner Section -->
    <section class="banner innerbanner NYC-Pricing-innerBanner NYC-hvac-Banner">
        <div class="container">
            <div class="row align-items-md-center">
                <div class="col-md-7">
                    <div class="detail wow bounceInLeft maxW-350" data-wow-delay="0.1s">
                        <h2>Cost of HVAC Repairs in New York City</h2>
                        <h3>Find out everything you need to know about New York City HVAC technician prices, materials, and more.</h3>
                        <div class="nyc-banner-box">
                            <ul class="nycBox-list">
                                <li>
                                    <h4>Average Cost to Repair a Furnace in NYC:</h4>
                                    <ul class="listText text-opensans">
                                        <li><strong>$350</strong></li>
                                    </ul>                                    
                                </li>
                                <li>
                                    <h4>Average Cost to Repair AC in NYC:</h4>
                                    <ul class="listText text-opensans">
                                        <li><strong>$435</strong></li>
                                    </ul>                                    
                                </li>
                            </ul>
                        </div>
                        <div class="button">
                            <a href="{{ route('posttask-step1')}}?cat=1" class="btn btn-green btn-green-shadow mr-md-4 mw-321 btnLg">Get a Quote</a>
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
                            <img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/hire_hvac.svg" class="img-fluid">
                        </div>
                        <p>Looking to <strong class="d-block">Hire a HVAC?</strong></p>
                        <div class="button mt-4">
                            <a href="{{ route('posttask-step1')}}?cat=1" class="btn btn-primary btn-primary-shadow btn52 post_a_task">Post a Task</a>
                        </div>                        
                    </div>
                    <div id="sticky-anchor"></div>
                    <div class="rtSection contentLinks d-none d-md-block" id="sidescroller-menu">
                        <h3>Table of Contents</h3>
                        <h4>Navigation</h4>                        
                        <ul class="contentList-price">
                            <li><a href="#content_overview"><span>Overview</span></a>
                                <ul>
                                    <li><a href="#content_Furnaces"><span>Furnaces</span></a>
                                        <ul>
                                            <li><a href="#FurnaceMaintenance"><span>Furnace Maintenance</span></a></li>
                                            <li><a href="#BrokenFurnaceCauses"><span>Broken Furnace Causes</span></a></li>
                                            <li><a href="#Repairs"><span>Repair or Replace?</span></a></li>
                                           
                                        </ul>
                                    </li> 
                                    
                                    <li><a href="#content_AirConditioners"><span>Air Conditioners</span></a>
                                        <ul>
                                            <li><a href="#ACMaintenance"><span>AC Maintenance</span></a></li>
                                            <li><a href="#BrokenACCauses"><span>Broken AC Causes</span></a></li>
                                            <li><a href="#RepairsAC"><span>Repair or Replace?</span></a></li>
                                           
                                        </ul>
                                    </li> 
                                    <li><a href="#content_hiringExpert"><span>Hiring an HVAC Professional</span></a></li>                                   
                                </ul>
                            </li>
                            <li><a href="#content_AverageServiceCost"><span>Average Service Costs</span></a>
                                <ul>
                                    <li><a href="#content_pricingWorks"><span>How HVAC Repair Pricing Works</span></a></li>
                                    <li><a href="#content_RepairFurnaces"><span>Furnaces</span></a>
                                        <ul>
                                            <li><a href="#FurnacesRepairsCost"><span>How Much Do Furnace Repairs Cost?</span></a></li>
                                            <li><a href="#NewFurnacesCost"><span>How Much Does a New Furnace Cost?</span></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#content_CostAirConditioners"><span>Air Conditioners</span></a>
                                        <ul>
                                            <li><a href="#ACRepairCost"><span>How Much Do AC Repairs Cost?</span></a></li>
                                            <li><a href="#newUnitCost"><span>How Much Does a New AC Unit Cost?</span></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#content_RepairDuctwork"><span>How Much Does Ductwork Cost?</span></a></li>
                                  
                                </ul>
                            </li>
                            <li><a href="{{ route('posttask-step1')}}?cat=1"><span>Find a HVAC Contractor in New York City</span></a></li>
                            <li><a href="#serviceFAQ"><span>FAQs</span></a></li>
                            <li><a href="#OtherCategories"><span>Other Categories</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="NYCLeftCol blogCol flex-grow-1 order-md-1" id="content-holder">
                    <div class="priceContent-box boxContent-pad text-opensans text-center">
                        <h2>About NYC Furnace & AC Repair Prices</h2>
                        <p>HVAC stands for “heating, ventilation, and air conditioning.” When your furnace or air conditioner starts acting up, especially during months with extreme weather, you’ll want to get help from a New York City HVAC technician. The cost and time to complete the project depends on what part of the unit is broken. Repairing smaller broken parts on a furnace or AC can cost as little as <strong>$100,</strong> while larger issues can cost over <strong>$2,000.</strong> </p>
                    </div><!--// About NYC Furnace & AC Repair Prices-->
                    <div class="priceContent-box boxContent-pad text-center">
                        <h2>Do You Need an HVAC Pro?</h2>
                        <ul class="nyc-painting d-flex flex-wrap mt-md-4 mt-xl-5">
                            <li><a href="{{ route('service-locations')}}">New York City</a></li>
                        <li><a href="{{ route('Services-Location-TheBronx')}}">The Bronx</a></li>
                        <li><a href="{{ route('Services-Location-Brooklyn')}}">Brooklyn</a></li>
                        <li><a href="{{ route('Services-Location-Queens')}}">Queens</a></li>
                        <li><a href="{{ route('Services-Location-StatenIsland')}}">Staten Island</a></li>
                        <li><a href="{{ route('Services-Location-Manhattan')}}">Manhattan</a></li>
                        </ul>
                    </div><!--// Do You Need an HVAC Pro?-->
                    <div class="priceContent-box text-opensans">
                        <h2 class="boxContent-pad mb-0">Table of Contents</h2>
                        <ul class="tableContent-list mobLeft">
                            <li><a href="#content_overview"><span>Overview</span></a>
                                <ul class="subContent-list">
                                    <li><a href="#content_Furnaces"><span>Furnaces</span></a>
                                        <ul>
                                            <li><a href="#FurnaceMaintenance"><span>Furnace Maintenance</span></a></li>
                                            <li><a href="#BrokenFurnaceCauses"><span>Broken Furnace Causes</span></a></li>
                                            <li><a href="#Repairs"><span>Repair or Replace?</span></a></li>
                                        </ul>
                                    </li> 
                                    
                                    <li><a href="#content_AirConditioners"><span>Air Conditioners</span></a>
                                        <ul>
                                            <li><a href="#ACMaintenance"><span>AC Maintenance</span></a></li>
                                            <li><a href="#BrokenACCauses"><span>Broken AC Causes</span></a></li>
                                            <li><a href="#RepairsAC"><span>Repair or Replace?</span></a></li>
                                           
                                        </ul>
                                    </li>  
                                    <li><a href="#content_hiringExpert"><span>Hiring an HVAC Professional</span></a></li>
                                                                      
                                </ul>
                            </li>
                            <li><a href="#content_AverageServiceCost"><span>Average Service Costs</span></a>
                                <ul class="subContent-list">
                                    <li><a href="#content_pricingWorks"><span>How HVAC Repair Pricing Works</span></a></li>
                                    <li><a href="#content_RepairFurnaces"><span>Furnaces</span></a>
                                        <ul>
                                            <li><a href="#FurnacesRepairsCost"><span>How Much Do Furnace Repairs Cost?</span></a></li>
                                            <li><a href="#NewFurnacesCost"><span>How Much Does a New Furnace Cost?</span></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#content_CostAirConditioners"><span>Air Conditioners</span></a>
                                        <ul>
                                            <li><a href="#ACRepairCost"><span>How Much Do AC Repairs Cost?</span></a></li>
                                            <li><a href="#newUnitCost"><span>How Much Does a New AC Unit Cost?</span></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#content_RepairDuctwork"><span>How Much Does Ductwork Cost?</span></a></li>
                                  
                                </ul>
                            </li>
                             <li><a href="{{ route('posttask-step1')}}?cat=1"><span>Find a HVAC Contractor in New York City</span></a></li>
                            <li><a href="#serviceFAQ"><span>FAQs</span></a></li>
                            <li><a href="#OtherCategories"><span>Other Categories</span></a></li>
                        </ul>
                    </div><!--// Table of Contents-->

                    <div class="priceContent-box">
                        <div class="boxContent-pad text-opensans">
                            <div class="subBox-Content" id="content_overview">                                
                                <h2>Overview </h2>
                                <p>HVAC technicians are certified and equipped to repair the key ventilation systems in a building. Good ventilation is essential to maintaining climate control and air quality of indoor spaces. A well-maintained furnace or air conditioning unit will run far more efficiently than a neglected one, and will last much longer.</p>
                                <p class="paintImg"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/hvac-pic1.jpg" alt=""></p>
                               
                            </div><!--//Overview-->

                            <div class="subBox-Content" id="content_Furnaces">
                                <h2>Furnaces</h2>
                                <h3 class="dot_h3" id="FurnaceMaintenance">Maintenance</h3>
                                <div class="ContentSibling">
                                    <p>The easiest way to extend the life of your furnace and keep it running without issues is to hire a certified technician to perform maintenance and repairs once a year, preferably during the warmer months when it is not being used. Furnaces need to be regularly cleaned in order to run efficiently and keep the air circulating throughout your home as clean as possible. </p>
                                </div>

                                <h3 class="dot_h3" id="BrokenFurnaceCauses">Causes of Broken Furnaces</h3>
                                <div class="ContentSibling">
                                    <p>Furnaces have a lot of moving parts that can break or that may need replacing. Some of these parts are inexpensive and easy to repair, while others are more complex and require more time to properly fix. Components of your furnace that can require repairs include:</p>
                                    <div class="grayList-Widget">
                                        <ul class="bulletedList-content smallerBullets mobLeft m-0">
                                            <li><strong>Flame sensor</strong></li>
                                            <li><strong>Transformer</strong></li>
                                            <li><strong>Heat exchanger</strong></li>
                                            <li><strong>Thermocouple</strong></li>
                                            <li><strong>Thermostat</strong></li>
                                            <li><strong>Blower motor capacitor</strong></li>
                                            <li><strong>Igniter</strong></li>
                                            <li><strong>Relay switch</strong></li>
                                            <li><strong>Oil combustion chamber</strong></li>
                                            <li><strong>Control & circuit board</strong></li>
                                            <li><strong>Gas valve</strong></li>
                                            <li><strong>Draft inducer motor</strong></li>
                                            <li><strong>Flue pipe</strong></li>
                                            <li><strong>Condenser & evaporator coil</strong></li>
                                        </ul>
                                    </div>
                                    <p>While this list may seem intimidating, many of these parts cost less than <strong>$300</strong> to repair. Your HVAC technician can give you more details when they inspect your furnace.</p>
                                </div>

                                <h3 class="dot_h3" id="Repairs">Repair or Replace?</h3>
                                <div class="ContentSibling">
                                    <p>Most home furnaces are designed to operate for an average of 15 to 30 years. The lifespan of an old furnace depends on the type of fuel   it utilizes to heat your home. Electric furnaces boast a long average lifespan of 20-30 years, while gas furnaces have a lifespan of 15-20 years. Although new gas furnaces don’t last as long, they cost less money to operate when compared to new electric furnaces. Gas furnaces are also able to heat your home faster than an electric system.</p>
                                </div>
                                
                                
                            </div><!--//Furnaces-->
                          
                            <div class="subBox-Content" id="content_AirConditioners">
                                <p class="paintImg"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/hvac-pic2.jpg" alt=""></p>
                                <h2>Air Conditioners</h2>
                                <h3 class="dot_h3" id="ACMaintenance">Maintenance</h3>
                                <div class="ContentSibling">
                                    <p>Similar to a heating system like a furnace, you’ll want to regularly maintain your AC to keep it running smoothly. Keeping the AC clean is one of the most important steps you can take to increasing the longevity of your cold air ventilation system. If you fail to properly maintain your air conditioning unit, it may malfunction when you subject it to rigorous use, leaving you without AC in the middle of a sweltering summer day.</p>
                                </div>

                                <h3 class="dot_h3" id="BrokenACCauses">Broken AC Causes</h3>
                                <div class="ContentSibling">
                                    <p>AC units often stop working due to simple malfunctions that are easy to repair, and are often preventable. Some common reasons air conditioners stop working include:</p>
                                    <ul class="bulletedList-content smallerBullets mobLeft">
                                        <li><strong>Frozen evaporator coils.</strong> The evaporator coils’ job is to absorb the heat from the air. Oddly enough, the coils need warm air circulating around them to function properly. When the warm air around the coil is interrupted, a layer of ice can build up on the outside, resulting in warm airflow in the building instead of cold.</li>
                                        <li><strong>Low Refrigerant.</strong> Refrigerant is the substance that removes the heat and humidity from the air. When your system develops a leak in the refrigerant lines, there won’t be enough refrigerant to effectively cool the air.</li>
                                        <li><strong>Frozen evaporator coils.</strong> The evaporator coils’ job is to absorb the heat from the air. Oddly enough, the coils need warm air circulating around them to function properly. When the warm air around the coil is interrupted, a layer of ice can build up on the outside, resulting in warm airflow in the building instead of cold.</li>
                                        <li><strong>Dirty condenser coils.</strong> This part of the AC expels the warm air removed from the building outdoors. The condenser coil won’t work properly when it gets covered with a layer of dirt and grime, which is unsurprisingly a common problem in NYC.</li>
                                        <li><strong>Broken fans.</strong> An AC unit has two fans — one that blows air over the evaporator coil before it enters and cools the building, and one that blows the warm air from inside away from the outdoor unit. If either fan malfunctions the AC won’t do its job properly.</li>
                                        <li><strong>Faulty thermostat.</strong> Thermostats, particularly older models, can incorrectly read the air temperature and cause the AC to prematurely turn off.</li>
                                    </ul>
                                </div>

                                <h3 class="dot_h3" id="RepairsAC">Repair or Replace?</h3>
                                <div class="ContentSibling">
                                    <p>There are a few things to consider when you’re contemplating whether or not to replace your air conditioner. First, determine the age of the AC unit. Air conditioners are manufactured to last an average of 10-15 years before they’ll likely need to be replaced; however, if it was properly maintained it could last up to 20 years. If the air conditioner frequently breaks down, or your summertime energy bills have skyrocketed, it may be time to invest in a new AC unit. Air conditioners can certainly break down from time to time, but frequent problems can add up and might just end up costing more than replacing the unit. Another thing to consider is the type of refrigerant the air conditioner uses. Some older models use a chemical called R-22 Freon, which is no longer manufactured in the United States as of 2020 due to its harmful effects on the environment. If the unit breaks down due to low refrigerant, you may have no choice but to replace it.</p>
                                </div>
                            </div><!--//Air Conditioners-->

                            <div class="subBox-Content" id="content_hiringExpert">
                                <p class="paintImg"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/hvac-pic3.jpg" alt=""></p>
                                <h2>Hiring a New York City HVAC Technician</h2>
                                <p>When you experience issues with the heating or cooling system in your building, it’s best to hire a professional to assess and fix the problem. While simple maintenance tasks might be simple to DIY, when the system acts up an HVAC technician can quickly figure out what’s wrong, and has fast access to the proper tools and parts to repair it.</p>
                                <p>Ask about the technician’s experience with HVAC and their licenses before you hire them. New York City requires certain licences for techs who work on high-pressure boilers and oil furnaces. If your building has one of these systems, it’s important to hire a licensed HVAC technician who can safely repair your system.</p>
                            </div><!--//Hiring a New York City HVAC Technician-->
                           
                        </div>                        
                        <div class="boxContent-pad getQuoteBox" id="findPlumberNYC">
                            <p class="mb-4 mb-lg-5"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/getQuote-icon.svg" alt=""></p>
                            <h2>Ready to Get Started?</h2>
                            <p>Post Your Task to Get in Touch with <span class="d-block">HVAC Repair in New York City.</span> </p>
                            <p class="mt-4 mt-lg-5"><a href="{{ route('posttask-step1')}}?cat=1" class="btn btn-green btn-green-shadow btn-sm">Get a Quote</a></p>
                        </div><!--// Ready to Get Started?-->

                        <div class="boxContent-pad text-opensans" id="content_AverageServiceCost">
                            <div class="subBox-Content">
                                <h2>Average Service Cost</h2>
                                <h2 class="mt-4 mt-lg-5" id="content_pricingWorks">How NYC HVAC Repair Pricing Works</h2>
                                <p>Most HVAC technicians charge hourly for their repair and maintenance services. The average homeowner spends between <strong>$100-$150 per year</strong> for regular tune-ups and cleaning of their AC and furnace systems, making for a total of <strong>$200-$300</strong> to keep both running smoothly.</p>
                                <p>HVAC technicians in New York City typically charge between <strong>$75-$150 per hour</strong> depending on their location and level of experience, with an average minimum service call price of <strong>$150.</strong></p>
                            </div><!--//How Roofer Pricing Works-->
                                             
                            <div class="subBox-Content" id="content_RepairFurnaces">
                                <p class="paintImg"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/hvac-pic4.jpg" alt=""></p>
                                <h2>Furnaces</h2>
                                <h3 class="dot_h3" id="FurnacesRepairsCost">How Much Do Furnace Repairs Cost?</h3>
                                <div class="ContentSibling">
                                    <p>There are many moving parts on a furnace that either need to be repaired or replaced when your furnace malfunctions. Once you determine the problem(s), you’ll be able to roughly estimate the cost based on the chart below. These costs account for the cost of the repair in addition to the HVAC technician’s minimum service call-out fee.</p>
                                </div> 
                                <h3>Furnace Part Repair Cost</h3>   
                                <div class="table-responsive">
                                    <table class="table avrPriceTable text-lato">
                                        <thead>
                                            <tr>
                                                <th>Part</th>
                                                <th class="th2">Cost to Repair</th>
                                            </tr>                                            
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-opensans semiBold">Flame Sensor</td>
                                                <td><span class="textGreen latoBlack">$80</span></td>                                            
                                            </tr>
                                            <tr>
                                                <td class="text-opensans semiBold">Blower Motor</td>
                                                <td><span class="textGreen latoBlack">$150</span></td>                                            
                                            </tr>
                                            <tr>
                                                <td class="text-opensans semiBold">Circuit Board</td>
                                                <td><span class="textGreen latoBlack">$50</span></td>                                            
                                            </tr>
                                            <tr>
                                                <td class="text-opensans semiBold">Heat Exchanger</td>
                                                <td><span class="textGreen latoBlack">$100</span></td>                                            
                                            </tr>
                                        </tbody>
                                    </table></div>  
                                
                                    <div class="ContentSibling">
                                        <p>Unfortunately, most furnace parts require replacement rather than repairs. Furnaces often malfunction when a part breaks, and the HVAC technician will have to supply the part, remove the old one, and install the new one in order for your furnace to function properly.</p>
                                    </div>
                                    <h3>Furnace Part Replacement Cost</h3>   
                                    <div class="table-responsive">
                                        <table class="table avrPriceTable text-lato">
                                            <thead>
                                                <tr>
                                                    <th>Part</th>
                                                    <th class="th2">Cost to Repair</th>
                                                </tr>                                            
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-opensans semiBold">Flame Sensor</td>
                                                    <td><span class="textGreen latoBlack">$250</span></td>                                            
                                                </tr>
                                                <tr>
                                                    <td class="text-opensans semiBold">Blower Motor</td>
                                                    <td><span class="textGreen latoBlack">$450</span></td>                                            
                                                </tr>
                                                <tr>
                                                    <td class="text-opensans semiBold">Circuit Board</td>
                                                    <td><span class="textGreen latoBlack">$350</span></td>                                            
                                                </tr>
                                                <tr>
                                                    <td class="text-opensans semiBold">Heat Exchanger</td>
                                                    <td><span class="textGreen latoBlack">$1675</span></td>                                            
                                                </tr>
                                                <tr>
                                                    <td class="text-opensans semiBold">Thermostat</td>
                                                    <td><span class="textGreen latoBlack">$150</span></td>                                            
                                                </tr>
                                                <tr>
                                                    <td class="text-opensans semiBold">Ignitor</td>
                                                    <td><span class="textGreen latoBlack">$350</span></td>                                            
                                                </tr>
                                                <tr>
                                                    <td class="text-opensans semiBold">Gas Valve</td>
                                                    <td><span class="textGreen latoBlack">$150</span></td>                                            
                                                </tr>
                                                <tr>
                                                    <td class="text-opensans semiBold">Gas Valve</td>
                                                    <td><span class="textGreen latoBlack">$350</span></td>                                            
                                                </tr>
                                            </tbody>
                                        </table></div> 
                                    <div class="ContentSibling">
                                        <p>If the technician finds that multiple parts on the furnace are broken, you may want to consider replacing it altogether to avoid continuous costly repairs, which will likely end up costing more in the long run.</p>
                                    </div>

                                    <h3 class="dot_h3" id="NewFurnacesCost">How Much Does a New Furnace Cost?</h3>
                                    <div class="ContentSibling">
                                        <p>If you ultimately determine that it’s time to replace your furnace, you can expect to pay <strong>$2,150-$9,400,</strong> with the national average coming in at around <strong>$6,000</strong>. Furnaces are very large systems that are essential to maintaining the air quality and climate of indoor spaces. Investing in a new furnace ensures that you’ll stay warm in the winter. When you decide to purchase a new furnace, make sure to start yearly maintenance while it’s new to keep it running smoothly for as long as possible.</p>
                                    </div>
                                    
                            </div><!--//Furnaces-->
                            <div class="subBox-Content" id="content_CostAirConditioners">
                                <p class="paintImg"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/hvac-pic5.jpg" alt=""></p>
                                <h2>Air Conditioners</h2>
                                <h3 class="dot_h3" id="ACRepairCost">How Much Do AC Repairs Cost?</h3>
                                <div class="ContentSibling">
                                    <p>Yearly AC maintenance is the best way to prevent major issues when running the unit at full blast during the summer. Parts on an AC unit often need to be replaced if it malfunctions, though certain issues like leaks can be repaired with minimal new materials.</p>
                                    <p>When your air conditioner has a refrigerant leak, it can cost anywhere from <strong>$225-$1,500</strong> to repair. If the evaporator coil leaks, you’ll pay between <strong>$1,300-$2,000</strong> for the repair.</p>
                                    <p>Due to the many important parts in air conditioners that endure extreme temperatures, a faulty AC system often requires part replacement. Luckily, replacing a part on an AC unit can actually be cheaper than the repairs mentioned above. Check out the guide below to see how much air conditioner part replacement might cost.</p>
                                </div>

                                <div class="table-responsive">
                                    <table class="table avrPriceTable text-lato">
                                        <thead>
                                            <tr>
                                                <th>Part</th>
                                                <th class="th2">Cost to Repair</th>
                                            </tr>                                            
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-opensans semiBold">Capacitor</td>
                                                <td><span class="textGreen latoBlack">$135</span></td>                                            
                                            </tr>
                                            <tr>
                                                <td class="text-opensans semiBold">Evaporator Coil</td>
                                                <td><span class="textGreen latoBlack">$880</span></td>                                            
                                            </tr>
                                            <tr>
                                                <td class="text-opensans semiBold">Fan Motor</td>
                                                <td><span class="textGreen latoBlack">$450</span></td>                                            
                                            </tr>
                                            <tr>
                                                <td class="text-opensans semiBold">Condenser Coil</td>
                                                <td><span class="textGreen latoBlack">$2400</span></td>                                            
                                            </tr>
                                            <tr>
                                                <td class="text-opensans semiBold">Condensate Pump or Drain Tube</td>
                                                <td><span class="textGreen latoBlack">$150</span></td>                                            
                                            </tr>
                                            <tr>
                                                <td class="text-opensans semiBold">Thermostat</td>
                                                <td><span class="textGreen latoBlack">$325</span></td>                                            
                                            </tr>
                                            <tr>
                                                <td class="text-opensans semiBold">Circuit Board</td>
                                                <td><span class="textGreen latoBlack">$250</span></td>                                            
                                            </tr>
                                            
                                        </tbody>
                                    </table></div> 
                                    <div class="ContentSibling">
                                        <p>Keep in mind that these are only average estimates. If your unit does require repairs, the HVAC technician will be able to give you an exact quote.
                                        </p>
                                    </div>
                                    <h3 class="dot_h3" id="newUnitCost">How Much Does a New Air Conditioner Cost?</h3>
                                    <div class="ContentSibling">
                                        <p>When it’s time to purchase a new air conditioner, you can expect to pay <strong>$4,400-$13,000</strong> for the unit and installation. The least expensive option is a single-stage air conditioner, followed by double-stage and variable-speed options. Single-stage refers to the speed at which the compressor can operate; it can only function at one speed, so the unit will cool the home at full blast until it reaches the desired temperature. Double-stage units have a high and low setting, and variable speed units can operate at many different speeds for maximum control and efficiency.
                                        </p>
                                    </div>
                                
                            </div><!--//Air Conditioners-->

                            <div class="subBox-Content" id="content_RepairDuctwork">
                                <h2>How Much Does Ductwork Cost?</h2>
                                <p>Sometimes issues with your indoor climate control don’t have anything to do with your AC or furnace. If you notice inconsistent or incorrect temperatures throughout your home, faulty ductwork could be the culprit. Repairing existing ductwork can cost about <strong>$2-$4 per linear foot,</strong> while replacing ductwork can cost <strong>$35-$55 per linear foot.</strong> Most homes contain 30 to 90 feet of ducting, with the cost of complete duct replacement in a typical home totalling between <strong>$1,500-$4,000.</strong></p>
                                
                            </div><!--//How Much Does Ductwork Cost?-->

                           
                        </div>

                        <div class="boxContent-pad servicesFaq" id="serviceFAQ">
                            <h2>FAQ’s</h2>
                            <div id="accordion" class="faqAccordion">
                                <div class="card collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <div class="card-header" id="headingOne">
                                      <h5 class="mb-0">How can I increase the efficiency of my heating and cooling systems?</h5>
                                      <img src="{{ url('public/frontend')}}/assets/images/chevron-down.svg" alt="">
                                    </div>
                                
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                      <div class="card-body">Cleaning and replacing filters frequently is the most important thing you can do to keep your systems efficient. You should also insulate your home with shades, drapes, shutters, or screens to avoid exposure to extreme sunlight.</div>
                                    </div>
                                </div>
                
                                <div class="card collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="card-header" id="headingTwo">
                                      <h5 class="mb-0">How often should I replace my filters?</h5>
                                      <img src="{{ url('public/frontend')}}/assets/images/chevron-down.svg" alt="">
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                      <div class="card-body">For the best efficiency and filtration, it is recommended that you replace your filters once a month. If you have washable filters, they should be cleaned once a month.</div>
                                    </div>
                                  </div>
                
                                  <div class="card collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <div class="card-header" id="headingThree">
                                      <h5 class="mb-0">Is there anything I should check prior to calling for service?</h5>
                                      <img src="{{ url('public/frontend')}}/assets/images/chevron-down.svg" alt="">
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">Check to see if the furnace or AC unit is plugged in. Make sure that the breakers and the disconnects are turned on, and that the thermostat is set correctly.</div>
                                    </div>
                                  </div>
                
                                  <div class="card collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                    <div class="card-header" id="headingfour">
                                      <h5 class="mb-0">What temperature should I set my thermostat?</h5>
                                      <img src="{{ url('public/frontend')}}/assets/images/chevron-down.svg" alt="">
                                    </div>
                                    <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                                        <div class="card-body">In the summer months, keep the thermostat slightly higher than room temperature for maximum efficiency, and in the winter set it slightly cooler. These small temperature adjustments can save you hundreds of dollars per year on your power bill and help your systems last for a long time.</div>
                                    </div>
                                  </div>
                
                                  
                            </div>
                            <p class="mt-4"><a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class="textGreen underlineLink collapsed">Sources</a></p>
                            <ul class="source-list mt-2 collapse" id="collapseExample" style="">
                                <li><a href="https://www.fourseasonsheatingcooling.com/blog/4-signs-its-time-to-replace-your-air-conditioner" target="_blank">https://www.fourseasonsheatingcooling.com/blog/4-signs-its-time-to-replace-your-air-conditioner</a></li>
                                <li><a href="https://aristair.com/blog/top-7-causes-of-air-conditioner-problems-and-how-to-prevent-them" target="_blank">https://aristair.com/blog/top-7-causes-of-air-conditioner-problems-and-how-to-prevent-them</a></li>
                                <li><a href="https://indoortemp.com/resources/air-conditioner-replacement-cost" target="_blank">https://indoortemp.com/resources/air-conditioner-replacement-cost</a></li>
                                <li><a href="https://homeguide.com/costs/hvac-repair-cost" target="_blank">https://homeguide.com/costs/hvac-repair-cost</a></li>
                                <li><a href="https://www.fixr.com/costs/annual-air-conditioner-maintenance" target="_blank">https://www.fixr.com/costs/annual-air-conditioner-maintenance</a></li>
                                <li><a href="https://www.fixr.com/costs/annual-air-conditioner-maintenance" target="_blank">https://www.specialtyheating.com/hvac-faq-2</a></li>
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
                   <a href="{{ route('NYC-Repair-Price_Handyman')}}"> <div class="borderedframe">
                        <p class="servicePic position-relative"><img src="{{ url('public/frontend')}}/assets/images/services/handyman-pic.jpg" alt=""><span class="servicePriceTag text-opensans centereditem">$3k</span></p>
                        <div class="serviceText">
                            <h5>Handyman</h5>
                            <p>Don’t settle for a quick fix — let a pro get the job done right.</p>
                        </div>
                    </div></a>
                </div>

                <div class="col-md-4 col-sm-6 services-widget">
                    <div class="borderedframe">
                        <p class="servicePic position-relative"><img src="{{ url('public/frontend')}}/assets/images/services/painting-pic.jpg" alt=""></p>
                        <div class="serviceText">
                            <h5><a href="{{ route('NYC-Repair-Price_painting')}}">Painting</a></h5>
                            <p>Making your life a little more colorful, one wall at a time.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 services-widget">
                    <div class="borderedframe">
                        <p class="servicePic position-relative"><img src="{{ url('public/frontend')}}/assets/images/services/plumbing-pic.jpg" alt=""><span class="servicePriceTag text-opensans centereditem">$90</span></p>
                        <div class="serviceText">
                            <h5><a href="{{ route('NYC-Repair-Price_plumbing')}}">Plumbing</a></h5>
                            <p>Solve your kitchen and bathroom woes with ease.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 services-widget">
                    <div class="borderedframe">
                        <p class="servicePic position-relative"><img src="{{ url('public/frontend')}}/assets/images/services/electric-pic.jpg" alt=""><span class="servicePriceTag text-opensans centereditem">$3k</span></p>
                        <div class="serviceText">
                            <h5><a href="{{ route('NYC-Repair-Price_Electrician')}}">Electric</a></h5>
                            <p>Certified electricians are always the safest (and best) option.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 services-widget">
                    <div class="borderedframe">
                        <p class="servicePic position-relative"><img src="{{ url('public/frontend')}}/assets/images/services/cabinets-pic.jpg" alt=""><span class="servicePriceTag text-opensans centereditem">$3k</span></p>
                        <div class="serviceText">
                            <h5><a href="{{ route('NYC-Repair-Price_CarpentryCabinets')}}">Cabinets</a></h5>
                            <p>Elevate your space with professionally installed cabinets</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 services-widget">
                    <div class="borderedframe">
                        <p class="servicePic position-relative"><img src="{{ url('public/frontend')}}/assets/images/services/windows-pic.jpg" alt=""><span class="servicePriceTag text-opensans centereditem">$3k</span></p>
                        <div class="serviceText">
                            <h5><a href="{{ route('NYC-Repair-Price_windowDoor')}}">Windows</a></h5>
                            <p>Hire a pro to install new energy-efficient windows </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 services-widget">
                    <div class="borderedframe">
                        <p class="servicePic position-relative"><img src="{{ url('public/frontend')}}/assets/images/services/roofing-pic.jpg" alt=""><span class="servicePriceTag text-opensans centereditem">$3k</span></p>
                        <div class="serviceText">
                            <h5><a href="{{ route('NYC-Repair-Price_roofing')}}">Roofing</a></h5>
                            <p>Our roofing experts take excellent service to new heights.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 services-widget">
                    <div class="borderedframe">
                        <p class="servicePic position-relative"><img src="{{ url('public/frontend')}}/assets/images/services/carpentry-pic.jpg" alt=""><span class="servicePriceTag text-opensans centereditem">$3k</span></p>
                        <div class="serviceText">
                            <h5><a href="{{ route('NYC-Repair-Price_GeneralContractor')}}">General Contracting</a></h5>
                            <p>For big home-improvement jobs, talk to a general contractor</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 services-widget">
                    <div class="borderedframe">
                        <p class="servicePic position-relative"><img src="{{ url('public/frontend')}}/assets/images/services/security-pic.jpg" alt=""><span class="servicePriceTag text-opensans centereditem">$3k</span></p>
                        <div class="serviceText">
                            <h5><a href="{{ route('NYC-Repair-Price_HVAC-Repair')}}">HVAC Repairs</a></h5>
                            <p>Maintain your heating and cooling systems to prevent malfunctions</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- //Service Categories-->

    <!--banner-->
    <section class="section connecting getStarted-hvac priceGetStarted">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 wow bounceInleft" data-wow-delay="0.1s">
                    <h2>Find a HVAC in New York City</h2>                    
                    <h3 class="subheadinggray mt-3">Click on your <strong>New York City Borough</strong> <span class="d-md-block">Below to Get Free Quotes from HVAC in Your Neighborhood.</span></h3>
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
                    <a href="{{ route('posttask-step1')}}?cat=1" class="btn btn-primary btn-primary-shadow btnLg">Get Started</a>
                </div>
            </div>
        </div>
    </section>
    <!-- //Call to action Section -->
@endsection 