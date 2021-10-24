 @extends('frontend.layout.app')
@section('content')
 <!-- Banner Section -->
    <section class="banner innerbanner NYC-Pricing-innerBanner NYC-GC-Banner">
        <div class="container">
            <div class="row align-items-md-center">
                <div class="col-md-7">
                    <div class="detail wow bounceInLeft maxW-350" data-wow-delay="0.1s">
                        <h2><span class="mobNone">The Cost to Hire a General Contractor in NYC</h2>
                        <h3>Find out everything you need to know about New York City general contractor prices, services, and more.</h3>
                        <div class="nyc-banner-box">
                            <ul class="nycBox-list">
                                <li>
                                    <h4>Average General Contractor Markup in New York City:</h4>
                                    <ul class="listText text-opensans">
                                        <li><strong>10% - 25%</strong></li>
                                    </ul>                                    
                                </li>
                                <li>
                                    <h4>Average Cost to Remodel a 2,000 sq ft House in New York City:</h4>
                                    <ul class="listText text-opensans">
                                        <li><strong>$300,000</strong></li>
                                    </ul>                                    
                                </li>
                            </ul>
                        </div>
                        <div class="button">
                            <a href="{{ route('posttask-step1')}}?cat=3" class="btn btn-green btn-green-shadow mr-md-4 mw-321 btnLg">Get a Quote</a>
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
                            <img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/hire_gc.svg" class="img-fluid">
                        </div>
                        <p>Looking to <strong class="d-block">General</strong> <strong class="d-block">Contractor?</strong></p>
                        <div class="button mt-4">
                            <a href="{{ route('posttask-step1')}}?cat=3" class="btn btn-primary btn-primary-shadow btn52 post_a_task">Post a Task</a>
                        </div>                        
                    </div>
                    <div id="sticky-anchor"></div>
                    <div class="rtSection contentLinks d-none d-md-block" id="sidescroller-menu">
                        <h3>Table of Contents</h3>
                        <h4>Navigation</h4>                        
                        <ul class="contentList-price">
                            <li><a href="#content_overview"><span>Overview</span></a>
                                <ul>
                                    <li><a href="#HandymanDo"><span>What Is a General Contractor?</span></a></li>
                                    <li><a href="#HandymanGeneral"><span>General Contractor vs. Subcontractor</span></a></li>
                                    <li><a href="#HiringHandyman"><span>Hiring a General Contractor in NYC</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#content_AverageServiceCost"><span>Average Service Costs</span></a>
                                <ul>
                                    <li><a href="#HandymanPricingWorks"><span>How General Contractor Pricing Works</span></a></li>
                                    <li><a href="#HomeRemodelCosts"><span>Home Remodel Costs</span></a>
                                        <ul>
                                            <li><a href="#Bathroom"><span>Bathroom</span></a></li>
                                            <li><a href="#Kitchen"><span>Kitchen</span></a></li>
                                            <li><a href="#BedroomLivingRoom"><span>Bedroom & living room</span></a></li>                                            
                                        </ul>
                                    </li>
                                    <li><a href="#ConstructionCosts"><span>New Construction Costs</span></a>
                                        <ul>
                                            <li><a href="#Productionhomes"><span>Production homes</span></a></li>
                                            <li><a href="#Customhomes"><span>Custom homes</span></a></li>
                                            
                                        </ul>
                                    </li>
                                  
                                </ul>
                            </li>
                            <li><a href="{{ route('posttask-step1')}}?cat=3"><span>Hire a General Contractor in New York City</span></a></li>
                            <li><a href="#serviceFAQ"><span>FAQs</span></a></li>
                        </ul>
                    </div>

                    

                </div>
                <div class="NYCLeftCol blogCol flex-grow-1 order-md-1" id="content-holder">
                    <div class="priceContent-box boxContent-pad text-opensans text-center">
                        <h2>About NYC General Contractor Services & Prices</h2>
                        <p>General contractors are experts in many different fields of construction, making them the perfect pros to oversee large construction projects such as remodels or new builds.</p>
                        <p>A general contractor provides everything property owners need to ensure that their project is completed successfully, on time, and within their budget. They do everything from manage the subcontractors’ tasks and schedules, coordinate orders, and track the expenses of the project.</p>
                        <p>When you hire a NYC general contractor, you can expect to pay the contractor a lump sum for the project, which includes the cost of all of the materials and subcontractor labor, plus a <strong>10%-25%</strong> markup for their services.</p>
                    </div><!--// About NYC General Contractor Services & Prices-->
                    <div class="priceContent-box boxContent-pad text-center">
                        <h2>Do You Need Contractor Services?</h2>
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
                                    <li><a href="#HandymanDo"><span>What Is a General Contractor?</span></a></li>
                                    <li><a href="#HandymanGeneral"><span>General Contractor vs. Subcontractor</span></a></li>
                                    <li><a href="#HiringHandyman"><span>Hiring a General Contractor in NYC</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#content_AverageServiceCost"><span>Average Service Costs</span></a>
                                <ul class="subContent-list">
                                    <li><a href="#HandymanPricingWorks"><span>How General Contractor Pricing Works</span></a></li>
                                    <li><a href="#HomeRemodelCosts"><span>Home Remodel Costs</span></a>
                                        <ul>
                                            <li><a href="#Bathroom"><span>Bathroom</span></a></li>
                                            <li><a href="#Kitchen"><span>Kitchen</span></a></li>
                                            <li><a href="#BedroomLivingRoom"><span>Bedroom & living room</span></a></li>                                            
                                        </ul>
                                    </li>
                                    <li><a href="#ConstructionCosts"><span>New Construction Costs</span></a>
                                        <ul>
                                            <li><a href="#Productionhomes"><span>Production homes</span></a></li>
                                            <li><a href="#Customhomes"><span>Custom homes</span></a></li>
                                            
                                        </ul>
                                    </li>
                                  
                                </ul>
                            </li>
                             <li><a href="{{ route('posttask-step1')}}?cat=3"><span>Hire a General Contractor in New York City</span></a></li>
                            <li><a href="#serviceFAQ"><span>FAQs</span></a></li>
                        </ul>
                    </div><!--// Table of Contents-->

                    <div class="priceContent-box">
                        <div class="boxContent-pad text-opensans">
                            <div class="subBox-Content" id="content_overview">                                
                                <h2>Overview </h2>
                                <h2 class="mt-4 mt-lg-5" id="HandymanDo">What is a General Contractor?</h2>
                                <p>New construction and remodel projects often consist of a few different parties, including the property owner, general contractor, subcontractor, and material supplier. A general contractor, also known as a construction manager, is a skilled worker who directs or oversees large residential and commercial construction projects. Whether the project is new construction or a large-scale remodel, property owners hire general contractors for their expertise in multiple fields of trade work, including plumbing, electrical, carpentry, and more. The overall responsibilities of a general contractor typically include:
                                </p>
                                <ul class="bulletedList-content smallerBullets mobLeft">
                                    <li>Obtaining materials needed for the project</li>
                                    <li>Furnishing their own equipment, vehicles, and tools</li>
                                    <li>Hiring subcontractors for specific parts of the project</li>
                                    <li>Overseeing the quality and timeliness of all work performed</li>
                                    <li>Monitoring scheduling, payments, and cash flow</li>
                                    <li>Keeping administrative records of all aspects of the project</li>
                                    <li>Ensures that safety measures are upheld at all times</li>
                                </ul>
                                <p>The contractor will work directly with the property owners to determine their needs as far as design, budget, and timeline. They will then hire subcontractors to implement the construction plan and manage the project from start to finish. </p>                                                          
                            </div><!--//Overview-->

                            <div class="subBox-Content" id="HandymanGeneral">
                                <p class="paintImg"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/gc-pic1.jpg" alt=""></p>
                                <h2>General Contractor vs. Subcontractor</h2>
                                <p>Though the term “general contractor” is often used to describe a construction project manager who oversees subcontractors, sometimes more specialized contractors can also be called “general contractors.” The key to defining a general contractor is determining which party works directly for the property owner. If, for example, the owner hires a roofing company to replace their roof, the roofing company is considered the “general contractor,” and thus their responsibilities resemble those listed above. Conversely, when a roofing company is hired by the general contractor of a project, the company is then considered a “subcontractor.” For large projects, subcontractors usually consist of professionals like plumbers, electricians, painters, roofers, window installers, etc. </p>

                                <p>The only person or party the property owner deals with directly is the general contractor. Property owners don’t typically need to know much about the subcontractors as long as they have chosen a reputable general contractor. A seasoned general contractor will have relationships with subcontractors that have consistently provided good work for their past projects. </p>
                                <p>For the purpose of this article, the term “general contractor” refers to a person or company who oversees all facets of large construction projects including hiring and scheduling subcontractors, managing expenses, and tracking the progress of the project.</p>
                            </div><!--//General Contractor vs. Subcontractor-->
                        
                            <div class="subBox-Content" id="HiringHandyman">
                                <p class="paintImg"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/gc-pic2.jpg" alt=""></p>
                                <h2>Hiring a General Contractor in New York City</h2>
                                <p>When you’re considering remodeling your property, or building a new one altogether, finding a reputable general contractor will be the first step. Contractors are familiar with the procedures and processes that go into a construction project before the work actually begins. They’ll often begin by providing an in-person consultation to assess the building or site, create a quote that details each part of the process, how long it will take and how much it will cost, and adjust the scope of work based on the property owner’s feedback. </p>
                                <p>The best way to ensure that the project is handled correctly from start to finish is by hiring a general contractor. They understand every part of the demolition and construction process, and can guide the project towards its end goal in the most efficient and cost-effective way.</p>
                               
                            </div><!--//Hiring a Handyman in NYC-->
                        </div>

                        <div class="boxContent-pad getQuoteBox" id="findPlumberNYC">
                            <p class="mb-4 mb-lg-5"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/getQuote-icon.svg" alt=""></p>
                            <h2>Ready to Get Started?</h2>
                            <p>Post Your Task to Get in Touch with <span class="d-block">General Contactor in New York City.</span> </p>
                            <p class="mt-4 mt-lg-5"><a href="{{ route('posttask-step1')}}?cat=3" class="btn btn-green btn-green-shadow btn-sm">Get a Quote</a></p>
                        </div><!--// Ready to Get Started?-->

                        <div class="boxContent-pad text-opensans">
                            <div class="subBox-Content" id="content_overview">
                                <h2>Average Service Costs</h2>
                                <h3>How General Contractor Pricing Works</h3>
                                <p>General contractor pricing may seem complicated when you consider all of the different costs that go into a large construction project, but hiring a contractor actually makes managing the expenses of a project much easier than trying to do it all yourself. Because general contractors work with so many different parties, from various subcontractors to suppliers, they usually charge a percentage of the total project cost for their services. A general contractor typically charges a markup of <strong>10%-25%</strong> of the total cost of the project.</p>
                                <p>When you take on a large home improvement or commercial property project that requires a general contractor’s services, chances are the project will cost thousands, if not tens of thousands of dollars. Contractors will create a payment plan for the project once the property owner agrees to the scope of work. Depending on the total amount, they may also refer you to a financing company that can give you a loan for your home improvement project.</p>
                            </div><!--Average Service Costs-->

                            <div class="subBox-Content" id="content_overview">
                                <h2>Home Remodelling Costs</h2>
                                <h3 class="dot_h3">Cost to Remodel a Bathroom in NYC</h3>
                                <div class="ContentSibling">
                                    <p>Bathrooms are one of the most important spaces in any home or commercial building. When you decide to remodel your bathroom, you’ll have a wide range of new furnishings and fixtures to choose from, including:</p>
                                    <ul class="bulletedList-content smallerBullets mobLeft">
                                        <li>Bathtub & shower</li>
                                        <li>Toilet</li>
                                        <li>Vanity</li>
                                        <li>Sink bowl</li>
                                        <li>Faucets</li>
                                        <li>Flooring</li>
                                        <li>Light fixtures</li>
                                    </ul>
                                </div>
                                <p>Each of these fixtures comes in a wide variety of different sizes, materials, and of course — prices. Bathroom furnishings can cost anywhere from <strong>$400</strong> on the low end and <strong>$5,000+</strong> on the high end. Fixtures like lighting and faucets cost between <strong>$100-$400</strong> each. You can cut down on these costs by reusing or repurposing existing items in your bathroom. In total, the average whole-bathroom remodel in New York City costs about <strong>$46,175.</strong> </p>

                                <h3 class="dot_h3">Cost to Remodel a Bathroom in NYC</h3>
                                <div class="ContentSibling">
                                    <p>Kitchen renovations can open up all kinds of new culinary possibilities for any home chef. Updated kitchens are a focal point of any home, and can even increase the home’s value by up to <strong>$40,000.</strong> When you’re considering remodeling your kitchen, you’ll want to ask yourself a few questions, such as which items you’d like to keep in your new kitchen and which ones you should keep. </p>
                                    <p>If you’re looking to add a collection of new appliances, here’s what you can expect to pay for each item:</p>
                                    <p>Average Cost of Kitchen Appliances in New York City</p>
                                </div>
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
                                                <td class="text-opensans semiBold">Refrigerator</td>
                                                <td><span class="textGreen latoBlack">$430-$10,600</span></td>                                            
                                            </tr>
                                            <tr>
                                                <td class="text-opensans semiBold">Stove</td>
                                                <td><span class="textGreen latoBlack">$410-$7,500</span></td>                                            
                                            </tr>
                                            <tr>
                                                <td class="text-opensans semiBold">Range Hood</td>
                                                <td><span class="textGreen latoBlack">$45-$2,450</span></td>                                            
                                            </tr>
                                            <tr>
                                                <td class="text-opensans semiBold">Dishwasher</td>
                                                <td><span class="textGreen latoBlack">$330-$1,900</span></td>                                            
                                            </tr>
                                            
                                        </tbody>
                                    </table></div>
                                    <p>Cabinets are another significant expense of kitchen remodels. A great way to cut down on the cost of a kitchen remodel is to have the cabinets resurfaced instead of replaced; resurfacing cabinets costs about half of what new cabinets cost, uses less waste, and takes less time than purchasing new ones. New cabinets can cost anywhere from <strong>$100-$1,200 per linear foot</strong>, depending on whether you choose stock, semi-custom, or custom cabinets. </p>
                                    <p>All in all, the total cost to remodel a kitchen in New York City averages between <strong>$30,000-$60,000</strong> depending on the size of the kitchen and which fixtures and appliances you choose.</p>

                                    <h3 class="dot_h3">Cost to Remodel a Bedroom or Living Room in NYC</h3>
                                    <div class="ContentSibling">
                                        <p>Bedrooms and living rooms are far easier to remodel than kitchens and bathrooms. Every home consists of two room categories: wet and dry. Kitchens, bathrooms, or any other room connected to running water is considered a “wet room.” Any other room, such as a living room, bedroom, or home office is considered a “dry room.” When remodeling a dry room, the only elements of the room that can be changed are the ceiling, walls, and floor. The biggest expense of a dry room remodel often comes from the furniture, not the home renovation. When redoing a living room or bedroom, the cost for the contractor and subcontractors can range from <strong>$1,500-$5,500</strong> for new floors and fresh paint. Other possible upgrades like resurfacing a ceiling or adding crown molding or baseboards to the room will add <strong>$500-$2,000</strong> to this cost.</p>
                                    </div>
                            </div><!--Home Remodelling Costs-->

                            <div class="subBox-Content" id="content_overview">
                                <p class="paintImg"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/gc-pic3.jpg" alt=""></p>
                                <h2>New Construction Costs</h2>
                                <p>If you’re considering building an entirely new home, a general contracting company has all of the resources and experience to manage the process from start to finish and give you your dream home. When building a new home, you’ll be able to choose between a <strong>production home</strong> or a <strong>custom-built home.</strong></p>

                                <h3 class="dot_h3">Production Homes</h3>
                                <div class="ContentSibling">
                                    <p>A production home, also known as a “stock” or “tract” home, comes as a set of construction plans that can be purchased right away from a construction or design company. Tract homes are often built in neighborhoods consisting of many similar, or even the same design of home. If you choose to purchase a production home before it is built, you’ll be able to personalize small elements of the design like cabinets, countertops, and faucets. If you work closely with a designer and the general contractor, you may be able to make other changes; however, this will be at the discretion of the contractor. </p>
                                    <p>Production homes take an average of <strong>7 months</strong> to be move-in ready. A new construction tract home in New York City costs about <strong>$350 per sq ft</strong>, or <strong>$700,000</strong> for a 2,000 sq ft home including materials and labor.</p>
                                </div>

                                <h3 class="dot_h3">Custom & Luxury Homes</h3>
                                <div class="ContentSibling">
                                    <p>If you want a completely personalized, one-of-a-kind home for your family to enjoy, you always have the option to build a custom home. Building a custom home entails working with an architect in addition to a general contractor. The architect will ask you about all of your goals and needs for your new home and create an architectural program. Once you have decided on the features and layout of your new home, it’s time to hire a New York City general contractor. From there, the architect and contractor will collaborate and implement the construction phase of the custom design.</p>
                                    <p>Custom homes take <strong>9-12 months</strong> to be move-in ready and can cost as much as <strong>$500 per sq ft</strong> or more. A 2,000 sq ft custom home in New York City costs an average of <strong>$1M</strong> including labor and materials.</p>
                                </div>
                            </div><!--//New Construction Costs-->
                            
                        </div>

                        <div class="boxContent-pad servicesFaq" id="serviceFAQ">
                            <h2>FAQ’s</h2>
                            <div id="accordion" class="faqAccordion">
                                <div class="card collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <div class="card-header" id="headingOne">
                                      <h5 class="mb-0">What is the difference between a general contractor and a subcontractor?</h5>
                                      <img src="{{ url('public/frontend')}}/assets/images/chevron-down.svg" alt="">
                                    </div>
                                
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                      <div class="card-body">General contractors oversee the entire project, from the idea phase to the finished product. They work directly with the customer.
                                          <p>A subcontractor is a specialized worker who has a contract with a general contractor to perform specific tasks and follow their instructions. </p>
                                      </div>
                                    </div>
                                </div>
                
                                <div class="card collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="card-header" id="headingTwo">
                                      <h5 class="mb-0">What kinds of projects can general contractors in New York City work on?</h5>
                                      <img src="{{ url('public/frontend')}}/assets/images/chevron-down.svg" alt="">
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                      <div class="card-body">A general contractor is equipped to handle most residential and commercial construction projects. Some of those include kitchen, bathroom, and living space remodels, and overseeing new construction and home additions. Whenever you’re seeking help for a large renovation, restoration, or new construction project, you’ll probably want to hire a general contractor.</div>
                                    </div>
                                  </div>
                
                                  <div class="card collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <div class="card-header" id="headingThree">
                                      <h5 class="mb-0">Do I need to hire an architect before I hire a general contractor in NYC?</h5>
                                      <img src="{{ url('public/frontend')}}/assets/images/chevron-down.svg" alt="">
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">It is recommended that the architect and general contractor are hired around the same time, during the planning stages of the build or remodel. Some general contracting firms offer design and build services, so you’ll only need to work with one company for both services.</div>
                                    </div>
                                  </div>
                
                                  <div class="card collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                    <div class="card-header" id="headingfour">
                                      <h5 class="mb-0">This project is expensive! How do I pay a NYC general contractor?</h5>
                                      <img src="{{ url('public/frontend')}}/assets/images/chevron-down.svg" alt="">
                                    </div>
                                    <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                                        <div class="card-body">The general contractor will typically offer a few solutions regarding payment for the project. Because the contractor takes the entire payment for the project, you can either get financing for the project from a bank or negotiate a payment plan with the contractor if you are unable to pay for the project out-of-pocket in a lump sum.</div>
                                    </div>
                                  </div>
                
                                  
                            </div>
                            <p class="mt-4"><a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class="textGreen underlineLink collapsed">Sources</a></p>
                           <ul class="source-list mt-2 collapse" id="collapseExample" style="">
                                <li><a href="https://therealdeal.com/2017/05/17/high-construction-wages-material-costs-make-nyc-the-worlds-most-expensive-place-to-build-report" target="_blank">https://therealdeal.com/2017/05/17/high-construction-wages-material-costs-make-nyc-the-worlds-most-expensive-place-to-build-report</a></li>
                                <li><a href="https://fontanarchitecture.com/cost-to-build-a-house-in-nyc" target="_blank">https://fontanarchitecture.com/cost-to-build-a-house-in-nyc</a></li>
                                <li><a href="https://www.homelight.com/blog/which-renovations-increase-home-value" target="_blank">https://www.homelight.com/blog/which-renovations-increase-home-value</a></li>
                                <li><a href="https://www.homeadvisor.com/cost/additions-and-remodels/remodel-multiple-rooms/#bathroom" target="_blank">https://www.homeadvisor.com/cost/additions-and-remodels/remodel-multiple-rooms/#bathroom</a></li>
                                <li><a href="https://www.homeadvisor.com/cost/additions-and-remodels/general-contractor-rates/#avg" target="_blank">https://www.homeadvisor.com/cost/additions-and-remodels/general-contractor-rates/#avg</a></li>
                                <li><a href="https://sebringdesignbuild.com/subcontractor-vs-contractor-what-does-a-general-contractor-do" target="_blank">https://sebringdesignbuild.com/subcontractor-vs-contractor-what-does-a-general-contractor-do</a></li>
                                <li><a href="https://www.levelset.com/blog/general-contractor-definition" target="_blank">https://www.levelset.com/blog/general-contractor-definition</a></li>
                                <li><a href="https://www.indeed.com/career/general-contractor/faq" target="_blank">https://www.indeed.com/career/general-contractor/faq</a></li>
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
                    <a href="{{ route('NYC-Repair-Price_Handyman')}}"><div class="borderedframe">
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
    <section class="section connecting getStarted-GC priceGetStarted">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 wow bounceInleft" data-wow-delay="0.1s">
                    <h2>Find a General Contractor in New York City</h2>                    
                    <h3 class="subheadinggray mt-3">Click on your <strong>New York City Borough</strong> <span class="d-md-block">Below to Get Free Quotes from General Contractor in Your Neighborhood.</span></h3>
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
                    <a href="{{ route('posttask-step1')}}?cat=3" class="btn btn-primary btn-primary-shadow btnLg">Get Started</a>
                </div>
            </div>
        </div>
    </section>
    <!-- //Call to action Section -->
@endsection