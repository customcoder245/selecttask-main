  @extends('frontend.layout.app')
@section('content')
<!-- Banner Section -->
    <section class="banner innerbanner NYC-Pricing-innerBanner NYC-winDoor-Banner">
        <div class="container">
            <div class="row align-items-md-center">
                <div class="col-md-7">
                    <div class="detail wow bounceInLeft maxW-350" data-wow-delay="0.1s">
                        <h2><span class="mobNone">How Much Does it</span> Cost to Install a New Window or Door in NYC?</h2>
                        <h3>Find out everything you need to know about New York City window and door installation prices, materials, and more.</h3>
                        <div class="nyc-banner-box">
                            <ul class="nycBox-list">
                                <li>
                                    <h4>Average Window Installation Cost in New York City</h4>
                                    <ul class="listText text-opensans">
                                        <li><strong>$5,979</strong></li>
                                    </ul>                                    
                                </li>
                                <li>
                                    <h4>Average Door Installation Cost in New York City:</h4>
                                    <ul class="listText text-opensans">
                                        <li><strong>$1,002</strong></li>
                                    </ul>                                    
                                </li>
                            </ul>
                        </div>
                        <div class="button">
                            <a href="{{ route('posttask-step1')}}" class="btn btn-green btn-green-shadow mr-md-4 mw-321 btnLg">Get a Quote</a>
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
                        <p>Looking to <strong class="d-block">Hire a Window &amp;</strong> <strong class="d-block">Door Installer?</strong></p>
                        <div class="button mt-4">
                            <a href="{{ route('posttask-step1')}}" class="btn btn-primary btn-primary-shadow btn52 post_a_task">Post a Task</a>
                        </div>                        
                    </div>
                    <div id="sticky-anchor"></div>
                    <div class="rtSection contentLinks d-none d-md-block" id="sidescroller-menu">
                        <h3>Table of Contents</h3>
                        <h4>Navigation</h4>                        
                        <ul class="contentList-price">
                            <li><a href="#content_overview"><span>Overview</span></a>
                                <ul>
                                    <li><a href="#Windows"><span>Windows</span></a>
                                        <ul>
                                            <li><a href="#Typeswindows"><span>Types of windows</span></a></li>
                                            <li><a href="#InstallationsWindow"><span>Installations</span></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#Doors"><span>Doors</span></a>
                                        <ul>
                                            <li><a href="#Typesdoors"><span>Types of doors</span></a></li>
                                            <li><a href="#InstallationsDoor"><span>Installations</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#content_AverageServiceCost"><span>Average Service Costs</span></a>
                                <ul>
                                    <li><a href="#windowCost"><span>Windows</span></a>
                                        <ul>
                                            <li><a href="#windowCostInstall"><span>How Much Does it Cost to Install a New Window?</span></a></li>
                                            <li><a href="#EnergyEfficientWindows"><span>Energy Efficient Windows</span></a></li>
                                        </ul>
                                    </li>                                    
                                    <li><a href="#doorsCost"><span>Doors</span></a>
                                        <ul>
                                            <li><a href="#doorsCostInterior"><span>How Much Does a New Interior Door Cost?</span></a></li>
                                            <li><a href="#doorsCostNew"><span>How Much Does a New Exterior Door Cost?</span></a>
                                                <ul>
                                                    <li><a href="#EntryDoor"><span>Entry Door</span></a></li>
                                                    <li><a href="#Garage"><span>Garage</span></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                  
                                </ul>
                            </li>
                            <li><a href="{{ route('posttask-step1')}}"><span>Find a Carpenter in New York City</span></a></li>
                            <li><a href="#serviceFAQ"><span>FAQs</span></a></li>
                        </ul>
                    </div>

                    

                </div>
                <div class="NYCLeftCol blogCol flex-grow-1 order-md-1" id="content-holder">
                    <div class="priceContent-box boxContent-pad text-opensans text-center">
                        <h2>About NYC Window & Door Installation Prices</h2>
                        <p>How much installing a new window or door costs in New York City greatly depends on the size of the item, what it’s made of, and whether or not the wall needs to be resized. A carpentry contractor typically charges around <strong>$40-$90</strong> per hour for these tasks. Window and door installation can take anywhere from 30 minutes to a few hours or more depending on the work that needs to be done.</p>
                    </div><!--// About NYC Window & Door Installation Prices-->
                    <div class="priceContent-box boxContent-pad text-center">
                        <h2>Do You Need a New Window or Door?</h2>
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
                                    <li><a href="#Windows"><span>Windows</span></a>
                                        <ul>
                                            <li><a href="#Typeswindows"><span>Types of windows</span></a></li>
                                            <li><a href="#InstallationsWindow"><span>Installations</span></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#Doors"><span>Doors</span></a>
                                        <ul>
                                            <li><a href="#Typesdoors"><span>Types of doors</span></a></li>
                                            <li><a href="#InstallationsDoor"><span>Installations</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#content_AverageServiceCost"><span>Average Service Costs</span></a>
                                <ul class="subContent-list">
                                    <li><a href="#windowCost"><span>Windows</span></a>
                                        <ul>
                                            <li><a href="#windowCostInstall"><span>How Much Does it Cost to Install a New Window?</span></a></li>
                                            <li><a href="#EnergyEfficientWindows"><span>Energy Efficient Windows</span></a></li>
                                        </ul>
                                    </li>                                    
                                    <li><a href="#doorsCost"><span>Doors</span></a>
                                        <ul>
                                            <li><a href="#doorsCostInterior"><span>How Much Does a New Interior Door Cost?</span></a></li>
                                            <li><a href="#doorsCostNew"><span>How Much Does a New Exterior Door Cost?</span></a>
                                                <ul>
                                                    <li><a href="#EntryDoor"><span>Entry Door</span></a></li>
                                                    <li><a href="#Garage"><span>Garage</span></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                  
                                </ul>
                            </li>
                             <li><a href="{{ route('posttask-step1')}}"><span>Find a Carpenter in New York City</span></a></li>
                            <li><a href="#serviceFAQ"><span>FAQs</span></a></li>
                        </ul>
                    </div><!--// Table of Contents-->

                    <div class="priceContent-box">
                        <div class="boxContent-pad text-opensans">
                            <div class="subBox-Content" id="content_overview">                                
                                <h2>Overview </h2>
                                <h2 class="mt-4 mt-lg-5" id="Windows">Window Installation</h2>
                                <h3 class="dot_h3" id="Typeswindows">Types of Window</h3>
                                <p>Which window you install on your building is determined by the size of the window jamb, the distance from the ground, and the need for ventilation and fire code requirements. There are many choices for windows that can be installed. Common window types include:</p>
                                <ul class="bulletedList-content smallerBullets mobLeft">
                                    <li><strong>Single- or Double-slung -</strong> two panels where one or both panels slide up and down.</li>
                                    <li><strong>Casement - </strong> open out to the side on a hinge.</li>
                                    <li><strong>Awning -</strong> open downward on a hinge.</li>
                                    <li><strong>Picture -</strong> one panel of glass that does not open.</li>
                                </ul>
                                <p>If the window is being replaced, the easiest and least expensive option is to replace it with the same type of window that is already there.</p>

                                <p class="paintImg"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/window-door-pic1.jpg" alt=""></p>
                                <h3 class="dot_h3" id="InstallationsWindow">Installing a New Window</h3>
                                <p>There are two kinds of window installations: new construction and remodel. New construction naturally allows for the most control over the size and type of window to be installed, while a remodel may limit your options. Hiring a skilled carpenter or contractor who has the tools and knowledge to properly install a window ensures proper ventilation, fire code compliance, and protection from the elements.</p>
                               
                            </div><!--//Overview-->

                            <div class="subBox-Content" id="Doors">
                                <h2>Door Replacement & Installation</h2>
                                <h3 class="dot_h3" id="Typesdoors">Types of Doors</h3>
                                <p>There are many different types of doors that can be installed on the inside or outside of a building. They are classified by the door construction and they way they fit into their entryway. Some common styles of doors include:</p>
                                <ul class="bulletedList-content smallerBullets mobLeft">
                                    <li><strong>Flushed -</strong> flat with no design</li>
                                    <li><strong>Paneled -</strong> designed with indented panels</li>
                                    <li><strong>Arched -</strong> has an arch-shaped design</li>
                                    <li><strong>Glass -</strong> made with glass windows or insets</li>
                                    <li><strong>Pocket -</strong> slides into a pocket in the wall</li>
                                    <li><strong>Bifold -</strong> folds in half at the center</li>
                                    <li><strong>Bypass -</strong> two pieces that slide past each other</li>
                                </ul>
                                <p>Where you’re installing the door will largely determine which type of door will be used. Flushed doors, for example, are used where a plain interior or exterior door would be best. Bifold and bypass doors are commonly used for closets.</p>

                                <h3 class="dot_h3" id="InstallationsDoor">Installing a New Door</h3>
                                <div class="ContentSibling">
                                    <p>The time and cost of installing a new door can vary widely depending on the type of door. You’ll likely be choosing between either a <strong>slab door</strong> or a <strong>pre-hung door.</strong> </p>
                                    <p><srrong>A slab door</srrong> is the most basic form of door you can buy; it is simply a door slab that can be installed on a pre existing frame. Slab doors are usually the best choice when replacing an interior door because the door is not intended for weatherproofing. Imperfect door installation (where the door is not completely flush with the frame) won’t be as much of an issue if the door is simply a barrier from room-to-room.</p>
                                    <p><strong>A pre-hung door</strong> is a slab door that is already attached by hinges to a three-sided door frame. Consider a pre-hung door a complete package, minus the door knob and other decorative fixtures that you may wish to install. These doors are ideal for exterior doors and office buildings where maximum security and weatherproofing is desirable.</p>
                                    <p>Slab doors are typically not difficult to install, however pre-hung doors should be installed by a professional to ensure proper protection from the elements and intruders.</p>
                                </div>
                            </div><!--//Door Replacement & Installation-->
                        
                            <div class="subBox-Content" id="content_AverageServiceCost">
                                <p class="paintImg"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/window-door-pic2.jpg" alt=""></p>
                                <h2>Average Cost of Door & Window Installation in NYC</h2>
                                <h3 id="windowCost">Windows</h3>
                                <h3 class="dot_h3" id="windowCostInstall">How Much Does it Cost to Install a New Window?</h3>
                                <div class="ContentSibling">
                                    <p>As with any repair, maintenance, or installation task, the cost of installing a new window varies greatly depending on a number of factors. Some things you’ll want to consider when you’re replacing an existing window include:</p>
                                    <ul class="bulletedList-content smallerBullets mobLeft">
                                        <li><strong>Condition of the frame.</strong> If the existing frame is made of wood, make sure that the wood is still in good condition.</li>
                                        <li><strong>Type of window.</strong> Standard double- and single-hung windows that come premade are the cheapest option, followed by picture windows and casement windows</li>
                                        <li><strong>Custom windows.</strong> If the existing window jamb does not conform to standard window sizes, you’ll have to invest in custom-cut windows. Custom sizes are commonly required among older homes where standard sizing wasn't used. You can determine if your window is a standard size by measuring the dimensions and searching for a premade window based on the type and size of your window. </li>
                                    </ul>
                                    </div>
                                    <h3>Average Window Cost Guide</h3>
                                    <div class="table-responsive">
                                        <table class="table avrPriceTable text-lato">
                                            <thead>
                                                <tr>
                                                    <th>Window Type</th>
                                                    <th class="th2">Typical Cost</th>
                                                </tr>                                            
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-opensans semiBold">Single-hung</td>
                                                    <td><span class="textGreen latoBlack">$100-$400</span></td>                                            
                                                </tr>
                                                <tr>
                                                    <td class="text-opensans semiBold">Double-hung</td>
                                                    <td><span class="textGreen latoBlack">$150-$650</span></td>                                            
                                                </tr>
                                                <tr>
                                                    <td class="text-opensans semiBold">Picture (fixed)</td>
                                                    <td><span class="textGreen latoBlack">$300-$1,200</span></td>                                            
                                                </tr>
                                                <tr>
                                                    <td class="text-opensans semiBold">Casement or Awning</td>
                                                    <td><span class="textGreen latoBlack">$150-$1,000</span></td>                                            
                                                </tr>
                                            </tbody>
                                        </table></div>
                                        <p>Expect to pay <strong>$100-$300</strong> in labor costs per window for standard window sizes.</p>

                                        <h3 class="dot_h3" id="EnergyEfficientWindows">Energy Efficient Windows</h3>
                                        <div class="ContentSibling">
                                        <p>It is generally recommended to have energy efficient windows installed in lieu of traditional glass windows. While they can cost <strong>10-15%</strong> more than traditional windows, they have been shown to reduce energy costs by <strong>7%-15%</strong> each year. Energy efficient windows use what is called “Low-E coating,” which minimizes the amount of UV and infrared light that can pass through the glass without reducing the amount of transmitted light.</p>
                                        </div>
                               
                            </div><!--//Average Cost of Door & Window Installation in NYC-->
                                             
                            <div class="subBox-Content" id="doorsCost">
                                <p class="paintImg"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/window-door-pic3.jpg" alt=""></p>
                                <h2>Door</h2>
                                <h3 class="dot_h3" id="doorsCostInterior">How Much Does a New Interior Door Cost?</h3>
                                <p>here are many types of doors that can be installed inside of a home. From room-to-room doors, closet doors, and shower doors, each requires different materials and takes a different amount of time to install. Labor for door installation typically runs between <strong>$40-$90</strong> per hour.</p>
                                <p>Average Cost and Length of Time to Install a New Interior Door</p>
                                <div class="table-responsive">
                                    <table class="table avrPriceTable text-lato">
                                        <thead>
                                            <tr>
                                                <th>Type of Door</th>
                                                <th class="th2">Time to Install</th>
                                                <th class="th3">Cost of Door</th>
                                                <th class="th4">Total Cost</th>
                                            </tr>                                            
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-opensans semiBold">Slab Door <span class="d-block">(room-to-room)</span></td>
                                                <td><span class="textGreen latoBlack">3-5 Hours</span></td>
                                                <td><span class="textGreen latoBlack">$30-$300</span></td>
                                                <td><span class="textGreen latoBlack">$150-$750</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-opensans semiBold">Closet Door</td>
                                                <td><span class="textGreen latoBlack">3-5 Hours</span></td>
                                                <td><span class="textGreen latoBlack">$50-$500</span></td>
                                                <td><span class="textGreen latoBlack">$170-$950</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-opensans semiBold">Shower Door</td>
                                                <td><span class="textGreen latoBlack">2-4 Hours</span></td>
                                                <td><span class="textGreen latoBlack">$350-$700</span></td>
                                                <td><span class="textGreen latoBlack">$430-$1,060</span></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table></div>
                                    <h3 class="dot_h3" id="doorsCostNew">How Much Does a New Interior Door Cost?</h3>
                                    <div class="ContentSibling" id="EntryDoor">
                                        <h3>Entry Doors</h3>
                                        <p>When you want to install a new front or back door to your home, you’ll want to determine what type of door you’d like to install. </p>
                                        <p>Front doors are often either regular pre-hung or security doors, which are thicker and heavier than regular doors, thus offering more protection from the weather and intruders. A regular pre-hung exterior door can cost between <strong>$300-$2,000,</strong> while a pre-hung security door costs an average of <strong>$400-$3,000.</strong></p>
                                        <p>A back door may resemble a front door depending on the type of building, but on a residential property you’ll often find different types of doors such as sliding or french doors. Purchasing a new sliding door costs an average of <strong>$300-$4,000.</strong> A new set of french doors will run you about <strong>$500-$4,000.</strong></p>
                                        <p>The typical labor for exterior door installation costs between <strong>$100-$500</strong> per door depending on the type of door and whether the jamb requires any adjustments. </p>
                                        <p>If you want to have a completely different type of door installed than the existing one, consult your contractor to find out how much it will cost to change the dimensions of the door jamb.</p>
                                    </div>
                            </div><!--//How Much Does it Cost to Install Kitchen Cabinets in NYC?-->
                        </div>

                        <div class="boxContent-pad getQuoteBox" id="findPlumberNYC">
                            <p class="mb-4 mb-lg-5"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/getQuote-icon.svg" alt=""></p>
                            <h2>Ready to Get Started?</h2>
                            <p>Post Your Task to Get in Touch with <span class="d-block">Window & Door Installer in New York City.</span> </p>
                            <p class="mt-4 mt-lg-5"><a href="{{ route('posttask-step1')}}" class="btn btn-green btn-green-shadow btn-sm">Get a Quote</a></p>
                        </div><!--// Ready to Get Started?-->

                        <div class="boxContent-pad text-opensans" id="Garage">
                            <h3>Garage Doors</h3>
                            <p>When it’s time to replace your garage door, you can choose from flushed steel or fiberglass foam-filled doors, or a classic wood door with beveled glass panels. You’ll also be able to choose whether or not you install an automatic door opener. It is recommended to have a professional complete the garage door installation to ensure that it is properly mounted to your garage. Garage door installation labor can cost <strong>$500-$800</strong> per door.</p>
                            <p>Steel or fiberglass doors are the most cost-effective, however they usually lack style or personality. If you want this basic style of garage door, you can expect to pay around <strong>$500</strong> for a new door. </p>
                            <p>Wood garage doors are a classic, attractive option that come with a higher price tag. These doors can come with windows and panel designs, and are easily painted for maximum customization. These doors typically cost <strong>$2,500-$3,000.</strong</p>
                            <p>If you want to add an automatic opener to your new garage door, you’ll spend an extra <strong>$150-$500</strong> to purchase one.</p>
                        </div>

                        <div class="boxContent-pad servicesFaq" id="serviceFAQ">
                            <h2>FAQ’s</h2>
                            <div id="accordion" class="faqAccordion">
                                <div class="card collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <div class="card-header" id="headingOne">
                                      <h5 class="mb-0">How do I know if my windows need to be replaced?</h5>
                                      <img src="{{ url('public/frontend')}}/assets/images/chevron-down.svg" alt="">
                                    </div>
                                
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                      <div class="card-body">Your windows will likely need to be replaced if you’ve noticed a sudden spike in your energy bills, a rotting window frame, or condensation buildup between the two window panes. Create a free post on SelectTask to talk to a window specialist about your concerns.</div>
                                    </div>
                                </div>
                
                                <div class="card collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="card-header" id="headingTwo">
                                      <h5 class="mb-0">What should I do to prepare my house for the replacement windows?</h5>
                                      <img src="{{ url('public/frontend')}}/assets/images/chevron-down.svg" alt="">
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                      <div class="card-body">Take down curtains, blinds, or any other window treatments. If you have security sensors, remove them or disconnect them. Create a clear pathway to the window so the installer can easily enter and exit your home.</div>
                                    </div>
                                  </div>
                
                                  <div class="card collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <div class="card-header" id="headingThree">
                                      <h5 class="mb-0">What is the safest type of exterior door?</h5>
                                      <img src="{{ url('public/frontend')}}/assets/images/chevron-down.svg" alt="">
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">While wooden doors are generally the most attractive option, it’s probably unsurprising that metal doors provide the most security. Steel doors won’t buckle, even under extreme impact, and are also resistant to warping due to extreme temperatures.</div>
                                    </div>
                                  </div>
                
                                  <div class="card collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                    <div class="card-header" id="headingfour">
                                      <h5 class="mb-0">How long will I have to wait to have my new window or door installed?</h5>
                                      <img src="{{ url('public/frontend')}}/assets/images/chevron-down.svg" alt="">
                                    </div>
                                    <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                                        <div class="card-body">If you are able to choose a stock window or door, you may not have to wait long for the installation to be complete. If you choose to order custom-made windows or doors, you may have to wait as long as 12 weeks for it to be made and installed.</div>
                                    </div>
                                  </div>
                
                                  
                            </div>
                            <p class="mt-4"><a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class="textGreen underlineLink collapsed">Sources</a></p>
                          <ul class="source-list mt-2 collapse" id="collapseExample" style="">
                                <li><a href="https://www.homeadvisor.com/cost/doors-and-windows/install-a-door/#average" target="_blank">https://www.homeadvisor.com/cost/doors-and-windows/install-a-door/#average</a></li>
                                <li><a href="https://www.angieslist.com/articles/how-hire-window-replacement-contractor.htm" target="_blank">https://www.angieslist.com/articles/how-hire-window-replacement-contractor.htm</a></li>
                                <li><a href="https://www.thebalancesmb.com/types-of-windows-844567" target="_blank">https://www.thebalancesmb.com/types-of-windows-844567</a></li>
                                <li><a href="https://www.thespruce.com/pre-hung-door-vs-slab-door-1822898" target="_blank">https://www.thespruce.com/pre-hung-door-vs-slab-door-1822898</a></li>
                                <li><a href="https://www.homeadvisor.com/cost/doors-and-windows/window" target="_blank">https://www.homeadvisor.com/cost/doors-and-windows/window</a></li>
                                <li><a href="https://www.homeadvisor.com/cost/doors-and-windows/interior-door/" target="_blank">https://www.homeadvisor.com/cost/doors-and-windows/interior-door</a></li>
                                <li><a href="https://www.fixr.com/costs/entry-door-installation" target="_blank">https://www.fixr.com/costs/entry-door-installation</a></li>
                                <li><a href="https://www.inchcalculator.com/garage-door-cost-guide" target="_blank">https://www.inchcalculator.com/garage-door-cost-guide</a></li>
                                <li><a href="https://www.centrawindows.com/blog/5-signs-you-need-new-windows" target="_blank">https://www.centrawindows.com/blog/5-signs-you-need-new-windows</a></li>
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
                    <div class="borderedframe">
                        <p class="servicePic position-relative"><img src="{{ url('public/frontend')}}/assets/images/services/handyman-pic.jpg" alt=""><span class="servicePriceTag text-opensans centereditem">$3k</span></p>
                        <div class="serviceText">
                            <h5><a href="{{ route('NYC-Repair-Price_Handyman')}}">Handyman</a></h5>
                            <p>Don’t settle for a quick fix — let a pro get the job done right.</p>
                        </div>
                    </div>
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
                            <h5><a href="{{ route('NYC-Repair-Price_windowDoor')}}">Windows</a>	</h5>
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
    <section class="section connecting getStarted-doors priceGetStarted">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 wow bounceInleft" data-wow-delay="0.1s">
                    <h2>Find a Window & Door Carpenter in New York City</h2>                    
                    <h3 class="subheadinggray mt-3">Click on your <strong>New York City Borough</strong> <span class="d-md-block">Below to Get Free Quotes from Window & Door Carpenter in Your Neighborhood.</span></h3>
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
                    <a href="" class="btn btn-primary btn-primary-shadow btnLg">Get Started</a>
                </div>
            </div>
        </div>
    </section>
    <!-- //Call to action Section -->
	@endsection 