  @extends('frontend.layout.app')
@section('content')

<!-- Banner Section -->
    <section class="banner innerbanner NYC-Pricing-innerBanner NYC-cabinets-Banner">
        <div class="container">
            <div class="row align-items-md-center">
                <div class="col-md-7">
                    <div class="detail wow bounceInLeft maxW-350" data-wow-delay="0.1s">
                        <h2><span class="mobNone">How Much Does it</span> Cost to Install New Cabinets in NYC?</h2>
                        <h3>Find out how much it costs to install new stock or custom kitchen cabinets in NYC.</h3>
                        <div class="nyc-banner-box">
                            <ul class="nycBox-list">
                                <li>
                                    <h4>Average Kitchen Cabinet Installation Cost in New York City:</h4>
                                    <ul class="listText text-opensans">
                                        <li><strong>$3,500-$18,000+</strong></li>
                                    </ul>                                    
                                </li>
                                <li>
                                    <h4>Average Cost of Custom Cabinets in New York City:</h4>
                                    <ul class="listText text-opensans">
                                        <li><strong>$6,000-$15,000+</strong></li>
                                    </ul>                                    
                                </li>
                            </ul>
                        </div>
                        <div class="button">
                            <a href="{{ route('posttask-step1')}}?cat=8" class="btn btn-green btn-green-shadow mr-md-4 mw-321 btnLg">Get a Quote</a>
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
                            <img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/hire_cabinet.svg" class="img-fluid">
                        </div>
                        <p>Looking to <strong class="d-block">Hire a Kitchen</strong> <strong class="d-block">Cabinet Installer?</strong></p>
                        <div class="button mt-4">
                            <a href="{{ route('posttask-step1')}}?cat=8" class="btn btn-primary btn-primary-shadow btn52 post_a_task">Post a Task</a>
                        </div>                        
                    </div>
                    <div id="sticky-anchor"></div>
                    <div class="rtSection contentLinks d-none d-md-block" id="sidescroller-menu">
                        <h3>Table of Contents</h3>
                        <h4>Navigation</h4>                        
                        <ul class="contentList-price">
                            <li><a href="#content_overview"><span>Overview</span></a>
                                <ul>
                                    <li><a href="#CabinetInstallation"><span>Kitchen Cabinet Installation</span></a></li>
                                    <li><a href="#CustomCabinets"><span>Custom Cabinets</span></a></li>
                                    <li><a href="#content_hiringExpert"><span>Hiring a Contractor</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#content_AverageServiceCost"><span>Average Service Costs</span></a>
                                <ul>
                                    <li><a href="#content_pricingWorks"><span>How Much Do Kitchen Cabinets Cost?</span></a>
                                        <ul>
                                            <li><a href="#StockCabinets"><span>Stock Cabinets</span></a></li>
                                            <li><a href="#CustomCabinetsCost"><span>Custom Cabinets</span></a></li>
                                        </ul>
                                    </li>                                    
                                    <li><a href="#content_workCost"><span>How Much Does it Cost to Install Kitchen Cabinets?</span></a></li>
                                  
                                </ul>
                            </li>
                            <li><a href="{{ route('posttask-step1')}}?cat=8"><span>Find a Carpenter in New York City</span></a></li>
                            <li><a href="#serviceFAQ"><span>FAQs</span></a></li>
                        </ul>
                    </div>

                    

                </div>
                <div class="NYCLeftCol blogCol flex-grow-1 order-md-1" id="content-holder">
                    <div class="priceContent-box boxContent-pad text-opensans text-center">
                        <h2>About NYC Kitchen Cabinet Installation Prices</h2>
                        <p>The cost of replacing or installing new kitchen cabinets depends on the number of cabinets, what they’re made from, and the material you wish to install. Where a small kitchen with stock cabinets may cost around <strong>$3,500</strong> for materials and labor, a high-end remodel with custom cabinets in an irregularly shaped kitchen can cost over <strong>$20,000</strong>. A skilled carpenter, handyman, or interior designer will be able to assess the space and give a detailed quote for how much your NYC kitchen remodel will cost.</p>
                    </div><!--// About NYC Kitchen Cabinet Installation Prices-->
                    <div class="priceContent-box boxContent-pad text-center">
                        <h2>Do You Need a New Cabinet?</h2>
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
                                    <li><a href="#CabinetInstallation"><span>Kitchen Cabinet Installation</span></a></li>
                                    <li><a href="#CustomCabinets"><span>Custom Cabinets</span></a></li>
                                    <li><a href="#content_hiringExpert"><span>Hiring a Contractor</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#content_AverageServiceCost"><span>Average Service Costs</span></a>
                                <ul class="subContent-list">
                                    <li><a href="#content_pricingWorks"><span>How Much Do Kitchen Cabinets Cost?</span></a>
                                        <ul>
                                            <li><a href="#StockCabinets"><span>Stock Cabinets</span></a></li>
                                            <li><a href="#CustomCabinetsCost"><span>Custom Cabinets</span></a></li>
                                        </ul>
                                    </li>                                    
                                    <li><a href="#content_workCost"><span>How Much Does it Cost to Install Kitchen Cabinets?</span></a></li>
                                  
                                </ul>
                            </li>
                            <li><a href="{{ route('posttask-step1')}}?cat=8"><span>Find a Carpenter in New York City</span></a></li>
                            <li><a href="#serviceFAQ"><span>FAQs</span></a></li>
                        </ul>
                    </div><!--// Table of Contents-->

                    <div class="priceContent-box">
                        <div class="boxContent-pad text-opensans">
                            <div class="subBox-Content" id="content_overview">                                
                                <h2>Overview </h2>
                                <h2 class="mt-4 mt-lg-5" id="CabinetInstallation">Kitchen Cabinet Installation</h2>
                                <p>Replacing old kitchen cabinets is an easy way to revive a drab, outdated kitchen. While there are many materials that can be used for kitchen cabinets, wood remains the most common and least expensive option. If you choose to add new wood cabinets to your kitchen, you’ll have a few different types to choose from:</p>
                                <ul class="bulletedList-content smallerBullets mobLeft">
                                    <li><strong>Hardwood</strong> is a solid piece of the wood of your choosing. Popular choices include maple, pine, and oak. Hardwood is the sturdiest choice.</li>
                                    <li><strong>Plywood</strong> is manufactured from thin layers, or "plies," of wood veneer that are glued together and pressed. Plywood is also quite sturdy.</li>
                                    <li><strong>Particle board</strong> is another composite manufactured from wood chips and synthetic resin, which is pressed and extruded to form a solid piece.</li>
                                    <li><strong>Fiberboard</strong> is a composite made from recycled fibers, resin, and wax pressed together under high pressure. Fiberboard and particle board are the least sturdy (but most affordable) choices.</li>
                                </ul>
                                <p>All manufactured woods (all of the above except hardwood) will come in an array of veneer finishes for you to choose from.</p>
                                <p>Learn more about how much kitchen cabinets cost in the <a href="#content_AverageServiceCost" class="underlineLink Bold">Average Service Costs </a> section of this guide.</p>                                
                               
                            </div><!--//Overview-->

                            <div class="subBox-Content" id="CustomCabinets">
                                <p class="paintImg"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/cabinet-pic1.jpg" alt=""></p>
                                <h2>Custom Cabinets</h2>
                                <p>When you choose custom cabinets over in-stock cabinets (those that come premade), your choices for the look and size of your new kitchen cabinets are endless. Custom cabinets are a good choice when you:</p>
                                <ul class="bulletedList-content smallerBullets mobLeft">
                                    <li><strong>Have an irregularly shaped kitchen</strong></li>
                                    <li><strong>Want ultimate style personalization</strong></li>
                                    <li><strong>Need specific organization and functionality</strong></li>
                                </ul>
                                <p>While opting for custom cabinets has its drawbacks – as they take some time to build and are more costly than premade cabinets there are many benefits to hiring a carpenter to build your cabinets to your preferred specifications.</p>
                            </div><!--//Custom Cabinets-->
                         

                            <div class="subBox-Content" id="content_hiringExpert">
                                <h2>Hiring a Contractor</h2>
                                <p>When you need kitchen cabinets installed, you’ll want to find a skilled carpenter to handle the job. They have the tools and knowledge to precisely cut wooden fixtures and install them properly. If you choose to DIY, you run the risk of ruining your new cabinets if you don’t know what you’re doing; when you hire a cabinet installer, they’ll likely do the job more efficiently, and even cover the damage if the cabinet is improperly cut or installed.</p>
                                <p>One cabinet typically takes a little over an hour to install, with the average 10x10 kitchen holding 12 cabinets. The size and layout of the kitchen will have a big impact on the amount of time the job takes, and therefore how much the labor costs. </p>
                            </div><!--//Hiring a Contractor-->                           
                        
                            <div class="subBox-Content" id="content_AverageServiceCost">
                                <p class="paintImg"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/cabinet-pic2.jpg" alt=""></p>
                                <h2>Average Service Costs</h2>
                                <h3 id="content_pricingWorks">How Much Do Kitchen Cabinets Cost?</h3>
                                <p>Premade, or stock cabinets, are the most affordable option when you’re looking to install new kitchen cabinets. Most stock cabinets are made from particle board or fiberboard, which are composite materials made by pressing wood chips and/or recycled fibers together with resin to form a hard surface. The composites are then lined with an outer veneer with different finishes to make up the cabinets you see in most kitchens</p>
                                <h3 id="StockCabinets">How Much Do Stock Cabinets Cost?</h3>
                                <p>You can expect to pay anywhere from <strong>$180-$380 per linear foot</strong> for stock cabinets, not including the installation. For a kitchen remodel you’ll spend about <strong>$2,500-$10,500</strong> on your new cabinets depending on how many you need and the material you choose.</p>

                                <h3 id="CustomCabinetsCost">How Much Do Custom Cabinets Cost?</h3>
                                <p>Custom kitchen cabinets cost between <strong>$300-$750 per linear foot,</strong> excluding installation. For a kitchen full of brand new fully custom cabinets, you should budget <strong>$6,000-$15,000+</strong> for your new cabinets.</p>
                            </div><!--//Average Service Costs-->
                                             
                            <div class="subBox-Content" id="content_workCost">
                                <p class="paintImg"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/cabinet-pic3.jpg" alt=""></p>
                                <h2>How Much Does it Cost to Install Kitchen Cabinets in NYC?</h2>
                                <p>There are a few factors to consider when you’re installing new kitchen cabinets. If you’re installing cabinets for the first time, or have already removed the old ones, the installation will cost less than one where the carpenter or handyman has to tear the old ones out. Kitchen demo for a remodel can take a couple of days, which will end up costing a few hundred to a thousand extra dollars than starting from a blank slate.</p>
                                <p>Carpenters and handymen usually charge about <strong>$60-$90</strong> per hour for labor, so demo alone can cost anywhere from <strong>$400-$1,500</strong> depending on how much is being removed from the area.</p>
                                <p>The installation of the new cabinets, however, constitutes the bulk of the labor cost. It can take about <strong>1-1.5 hours</strong> to install each cabinet, and the average 10x10 kitchen contains about <strong>12 cabinets.</strong> That means the installation of your new cabinets can cost anywhere from <strong>$700-$1,500</strong> for a remodel of this size. If your kitchen is irregularly shaped or has other unique features that may make installation more difficult, consult the contractor to find out how long the extra labor required for the job may take.</p>
                                    
                            </div><!--//How Much Does it Cost to Install Kitchen Cabinets in NYC?-->
                        </div>

                        <div class="boxContent-pad getQuoteBox" id="findPlumberNYC">
                            <p class="mb-4 mb-lg-5"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/getQuote-icon.svg" alt=""></p>
                            <h2>Ready to Get Started?</h2>
                            <p>Post Your Task to Get in Touch with <span class="d-block">HVAC Repair in New York City.</span> </p>
                            <p class="mt-4 mt-lg-5"><a href="{{ route('posttask-step1')}}" class="btn btn-green btn-green-shadow btn-sm">Get a Quote</a></p>
                        </div><!--// Ready to Get Started?-->

                        <div class="boxContent-pad servicesFaq" id="serviceFAQ">
                            <h2>FAQ’s</h2>
                            <div id="accordion" class="faqAccordion">
                                <div class="card collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <div class="card-header" id="headingOne">
                                      <h5 class="mb-0">How long does it take to have new cabinets installed?</h5>
                                      <img src="{{ url('public/frontend')}}/assets/images/chevron-down.svg" alt="">
                                    </div>
                                
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                      <div class="card-body">It can take four to nine weeks from purchase to installation, depending on whether cabinets are stock or custom.</div>
                                    </div>
                                </div>
                
                                <div class="card collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="card-header" id="headingTwo">
                                      <h5 class="mb-0">How do I prepare for installation?</h5>
                                      <img src="{{ url('public/frontend')}}/assets/images/chevron-down.svg" alt="">
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                      <div class="card-body">Remove all contents from your existing cabinets and drawers, but do not uninstall your old cabinets. Clear the countertops and remove all antiques, breakables, and valuables from the area.</div>
                                    </div>
                                  </div>
                
                                  <div class="card collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <div class="card-header" id="headingThree">
                                      <h5 class="mb-0">How do I measure my new cabinets?</h5>
                                      <img src="assets/images/chevron-down.svg" alt="">
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">Kitchen cabinet installation requires precise measurements. The service provider will take the measurements and recommend which cabinets to purchase.</div>
                                    </div>
                                  </div>
                
                                  <div class="card collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                    <div class="card-header" id="headingfour">
                                      <h5 class="mb-0">How do I care for my new cabinets?</h5>
                                      <img src="{{ url('public/frontend')}}/assets/images/chevron-down.svg" alt="">
                                    </div>
                                    <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                                        <div class="card-body">Maintenance will vary based on the material of your cabinets. We recommend you reference the manufacturer’s care and maintenance materials in order to learn how to best clean your new cabinets.</div>
                                    </div>
                                  </div>
                
                                  
                            </div>
                            <p class="mt-4"><a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class="textGreen underlineLink collapsed">Sources</a></p>
                        <ul class="source-list mt-2 collapse" id="collapseExample" style="">
                                <li><a href="https://www.lowes.com/l/cabinet-installation.html" target="_blank">https://www.lowes.com/l/cabinet-installation.html</a></li>
                                <li><a href="https://www.pedinimiami.com/improving-house-decor-choosing-the-best-material-for-your-kitchen-cabinets" target="_blank">https://www.pedinimiami.com/improving-house-decor-choosing-the-best-material-for-your-kitchen-cabinets</a></li>
                                <li><a href="https://www.erendesign.com/blog/how-long-does-it-take-to-install-new-kitchen-cabinets" target="_blank">https://www.erendesign.com/blog/how-long-does-it-take-to-install-new-kitchen-cabinets</a></li>
                                <li><a href="https://www.inchcalculator.com/new-cabinets-cost-guide" target="_blank">https://www.inchcalculator.com/new-cabinets-cost-guide</a></li>
                                <li><a href="https://www.fixr.com/costs/cabinets-installation" target="_blank">https://www.fixr.com/costs/cabinets-installation</a></li>
                                <li><a href="https://www.pedinimiami.com/improving-house-decor-choosing-the-best-material-for-your-kitchen-cabinets" target="_blank">https://www.pedinimiami.com/improving-house-decor-choosing-the-best-material-for-your-kitchen-cabinets</a></li>
                                <li><a href="https://www.pedinimiami.com/improving-house-decor-choosing-the-best-material-for-your-kitchen-cabinets" target="_blank">https://www.homedepot.com/services/c/cabinet-installation/4954fb9e1</a></li>
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
                  <a href="{{ route('NYC-Repair-Price_Handyman')}}">  <div class="borderedframe">
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
                    <div class="borderedframe">
                        <p class="servicePic position-relative"><img src="{{ url('public/frontend')}}/assets/images/services/cabinets-pic.jpg" alt=""><span class="servicePriceTag text-opensans centereditem">$3k</span></p>
                        <div class="serviceText">
                            <h5><a href="{{ route('NYC-Repair-Price_CarpentryCabinets')}}">Cabinets</a></h5>
                            <p>Elevate your space with professionally installed cabinets</p>
                        </div>
                    </div>
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
    <section class="section connecting getStarted-cabinets priceGetStarted">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 wow bounceInleft" data-wow-delay="0.1s">
                    <h2>Find a Cabinet Carpenter in New York City</h2>                    
                    <h3 class="subheadinggray mt-3">Click on your <strong>New York City Borough</strong> <span class="d-md-block">Below to Get Free Quotes from Cabinet Carpenter in Your Neighborhood.</span></h3>
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
                    <a href="{{ route('posttask-step1')}}?cat=8" class="btn btn-primary btn-primary-shadow btnLg">Get Started</a>
                </div>
            </div>
        </div>
    </section>
    <!-- //Call to action Section -->
	@endsection