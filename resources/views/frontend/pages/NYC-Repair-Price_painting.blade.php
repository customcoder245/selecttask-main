@extends('frontend.layout.app')
@section('content')
<!-- Banner Section -->
    <section class="banner innerbanner NYC-Pricing-innerBanner">
        <div class="container">
            <div class="row align-items-md-center">
                <div class="col-md-7">
                    <div class="detail wow bounceInLeft maxW-350" data-wow-delay="0.1s">
                        <h2>The Cost to <span class="mobBlock">Hire a Painter in NYC</span></h2>
                        <h3>Find out everything you need to know about New York City painting prices, services, and more.</h3>
                        <div class="nyc-banner-box">
                            <ul class="nycBox-list">
                                <li>
                                    <h4>Average Cost to Paint a Room in <span class="d-md-block">New York City:</span></h4>
                                    <ul class="listText text-opensans">
                                        <li>Per Room: <strong>$745 – $1,585</strong></li>
                                    </ul>                                    
                                </li>
                                <li>
                                    <h4>Average Cost to Paint Siding and Exteriors in New York City:</h4>
                                    <ul class="listText text-opensans">
                                        <li>Per Square Foot: <strong>$1.50 - $4</strong></li>
                                    </ul>                                    
                                </li>
                            </ul>
                        </div>
                        <div class="button">
                            <a href="{{ route('posttask-step1')}}?cat=4" class="btn btn-green btn-green-shadow mr-md-4 mw-321 btnLg">Get a Quote</a>
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
                            <img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/painting-icon.svg" class="img-fluid" width="125" height="125">
                        </div>
                        <p>Looking to <strong class="d-block">Hire a Painter?</strong></p>
                        <div class="button mt-4">
                            <a href="{{ route('posttask-step1')}}?cat=4" class="btn btn-primary btn-primary-shadow btn52 post_a_task">Post a Task</a>
                        </div>                        
                    </div>
                    <div id="sticky-anchor"></div>
                    <div class="rtSection contentLinks d-none d-md-block" id="sidescroller-menu">
                        <h3>Table of Contents</h3>
                        <h4>Navigation</h4>                        
                        <ul class="contentList-price">
                            <li><a href="#content_overview"><span>Overview</span></a>
                                <ul>
                                    <li><a href="#content_ChoosingYourPaint"><span>Choosing Your Paint</span></a>
                                        <ul>
                                            <li><a href="#interiorPaint"><span>Interior</span></a></li>
                                            <li><a href="#exteriorPaint"><span>Exterior</span></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#content_hiringPainter"><span>Hiring a Professional Painter</span></a></li>
                                    <li><a href="#content_paintJob"><span>Preparing for a Professional Paint Job</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#content_AverageCostGuide"><span>Average Service Costs</span></a>
                                <ul>
                                    <li><a href="#content_pricingWorks"><span>How Does Painter Pricing Work?</span></a>
                                        <ul>
                                            <li><a href="#paintPricingID"><span>Paint Prices</span></a></li>
                                            <li><a href="#costofLaborID"><span>Cost of Labor</span></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#content_homeInteriors"><span>Home Interior Painting Cost</span></a></li>
                                    <li><a href="#content_HomeExteriors"><span>Home Exterior Painting Cost</span></a></li>
                                    <li><a href="#content_commercial"><span>Commercial &amp; Specialty Paint Jobs</span></a>
                                        <ul>
                                            <li><a href="#fauxPaintingID"><span>Faux Painting</span></a></li>
                                            <li><a href="#content_commercial"><span>Offices &amp; Commercial Buildings</span></a></li>
                                            <li><a href="#content_AdditionalServices"><span>Painting a Historical Building</span></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#content_AdditionalServices"><span>Additional Services</span></a>
                                        <ul>
                                            <li><a href="#wallpaperRemoval"><span>Wallpaper Removal Cost</span></a></li>
                                            <li><a href="#powerWashing"><span>Power Washing Cost</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#findPainterNYC"><span>Find a Painter in New York City</span></a></li>
                            <li><a href="#accordion"><span>FAQs</span></a></li>
                        </ul>
                    </div>

                    

                </div>
                <div class="NYCLeftCol blogCol flex-grow-1 order-md-1" id="content-holder">
                    <div class="priceContent-box boxContent-pad text-opensans text-center">
                        <h2>About NYC Paint Prices &amp; Services</h2>
                        <p>Getting ready to paint your home? From choosing the right paint to determining how much a professional paint job might cost, this complete guide to hiring a painter in New York City gives you the info you need to get started.
                            When you’re ready to hire a pro, you can post about your job for free when you use SelectTask.</p>
                    </div><!--// About NYC Paint Prices &amp; Services-->
                    <div class="priceContent-box boxContent-pad text-center">
                        <h2>Get Free Quotes from Painters in NYC</h2>
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
                                    <li><a href="#content_ChoosingYourPaint"><span>Choosing Your Paint</span></a>
                                        <ul>
                                            <li><a href="#interiorPaint"><span>Interior</span></a></li>
                                            <li><a href="#exteriorPaint"><span>Exterior</span></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#content_hiringPainter"><span>Hiring a Professional Painter</span></a></li>
                                    <li><a href="#content_paintJob"><span>Preparing for a Professional Paint Job</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#content_AverageCostGuide"><span>Average Service Costs</span></a>
                                <ul class="subContent-list">
                                    <li><a href="#content_pricingWorks"><span>How Does Painter Pricing Work?</span></a>
                                        <ul>
                                            <li><a href="#paintPricingID"><span>Paint Prices</span></a></li>
                                            <li><a href="#costofLaborID"><span>Cost of Labor</span></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#content_homeInteriors"><span>Home Interior Painting Cost</span></a></li>
                                    <li><a href="#content_HomeExteriors"><span>Home Exterior Painting Cost</span></a></li>
                                    <li><a href="#content_commercial"><span>Commercial &amp; Specialty Paint Jobs</span></a>
                                        <ul>
                                            <li><a href="#fauxPaintingID"><span>Faux Painting</span></a></li>
                                            <li><a href="#content_commercial"><span>Offices &amp; Commercial Buildings</span></a></li>
                                            <li><a href="#content_AdditionalServices"><span>Painting a Historical Building</span></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#content_AdditionalServices"><span>Additional Services</span></a>
                                        <ul>
                                            <li><a href="#wallpaperRemoval"><span>Wallpaper Removal Cost</span></a></li>
                                            <li><a href="#powerWashing"><span>Power Washing Cost</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#findPainterNYC"><span>Find a Painter in New York City</span></a></li>
                            <li><a href="#accordion"><span>FAQs</span></a></li>
                        </ul>
                    </div><!--// Table of Contents-->

                    <div class="priceContent-box">
                        <div class="boxContent-pad text-opensans">
                            <div class="subBox-Content" id="content_overview">
                                <h2>Overview </h2>
                                <p>Adding new paint to the interior or exterior of a home is an easy way to liven up the look and feel of any space. With endless paint options, colors, brands, and finishes to choose from, painting your home can seem like a daunting task.</p>
                                <p>Luckily, many New York City painters have the insights and expertise to help. They complete paint jobs faster (and usually better) than if you choose to DIY, and offer advice about paint brands and finishes to help you achieve the best look. Hiring a professional painter also ensures that your paint job will look fantastic for years to come.
                                </p>
                            </div><!--//Overview-->

                            <div class="subBox-Content" id="content_ChoosingYourPaint">
                                <h2>Choosing Your Paint</h2>
                                <p>Buying the right paint is perhaps the most important choice you will make as you begin your project. Endless brand, color, finish, and primer options can make choosing the best materials for your paint job seem almost impossible.</p>
                                <p class="semiBold">Here are some tips to keep in mind as you begin shopping for your new paint palette.</p>
                                <h3 class="dot_h3" id="interiorPaint">Interior</h3>
                                <div class="ContentSibling">
                                    <p>Take your time when selecting your paint colors — remember, you’re probably going to be looking at them every day! You should also make sure to invest in a high-quality paint that can withstand the conditions of the area it will cover. Satin or eggshell finishes are typically better suited for high traffic areas such as hallways and bathrooms, while flat finishes are ideal for ceilings and other areas where strong light reflection is undesirable. Semi-gloss or gloss are easier to clean than other finishes, making it the best choice for surfaces that need to be cleaned often, like those in kitchens and bathrooms.</p>
                                    <p>If you’re still unsure of which finish to use, here’s a quick cheat sheet for determining the best finish by room and surface type:</p>

                                    <ul class="bulletedList-content mobLeft">
                                        <li><strong class="mobBlock">Kitchens and bathrooms:</strong> Semi-Gloss</li>
                                        <li><strong class="mobBlock">Bedrooms, Dining Rooms, Hallways and Doors:</strong> Satin</li>
                                        <li><strong class="mobBlock">Ceilings:</strong> Flat finish</li>
                                        <li><strong class="mobBlock">Decorative areas:</strong> Eggshell</li>
                                        <li><strong class="mobBlock">Wood Surfaces (doors, cabinets and trim):</strong> High-Gloss</li>
                                    </ul>
                                </div>
                                <p><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/painting-pic1.jpg" alt=""></p>

                                <h3 class="dot_h3" id="exteriorPaint">Exterior</h3>
                                <div class="ContentSibling">
                                    <p>Exterior paints have similar finish options to choose from, however, there are other things to consider when painting the outside of your home. Different paint types may be required to adhere to different siding surfaces. Acrylic latex is the most common type of exterior paint due to its resilience in various weather conditions, however sometimes mineral-based or “masonry paint” may be a better choice for brick and stone. Though vinyl does not typically require paint, latex urethane paint can be used on this material if you want to upgrade the look of your home’s exterior.</p>
                                    <p>Working with a professional painter is the best way to ensure that you choose the right kind of paint for your exterior. They have experience working with different surfaces and types of paint, and will be able to recommend the best paint to complete your project. </p>
                                </div>
                                
                            </div><!--//Choosing Your Paint-->
                            <div class="subBox-Content" id="content_hiringPainter">
                                <p class="paintImg"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/painting-pic2.jpg" alt=""></p>
                                <h2>Hiring a Professional Painter</h2>
                                <p>When you hire a professional painter or paint company, there are a few important things to keep in mind. Reputable painters in NYC must have a license and insurance to operate their business legally. The New York City local government requires professional painters to carry a license, which must be renewed every two years. Many professional painters also offer guarantees; before hiring a painter, ask them about their guarantees to ensure that they will provide quality workmanship. When you use SelectTask, you can read reviews left by past customers on the service provider’s profile to learn more about the quality of their work.</p>
                            </div><!--//Hiring a Professional Painter-->
                            <div class="subBox-Content" id="content_paintJob">
                                <h2>Preparing for a Professional Paint Job</h2>
                                <p>There are a few things you’ll want to do before the professional painter enters your home to start the job. Perhaps the most obvious is to remove any decor or fixtures (lights, outlet covers, etc.) from the area that is to be painted. Double check that the painter provides furniture and floor covers to protect your pieces from damage; if not, make sure to thoroughly cover these items with tarps or plastic. Even though the covers will be in place during the project, it is best to remove any irreplaceable items or heirlooms from the room to ensure that they will not be damaged in the event of an accident.</p>
                                <p>The painter will evaluate the surface prior to the job to determine whether or not any additional preparation is required. In some cases, drywall removal or repair, wallpaper removal, or cleaning may be necessary before new paint can be applied. The painter will also need unobstructed access to the work area and adequate space for their equipment, which may include ladders, paint trays and cans, and other related items.</p>
                            </div><!--//Preparing for a Professional Paint Job-->
                        </div>                        
                        <div class="boxContent-pad getQuoteBox" id="findPainterNYC">
                            <p class="mb-4 mb-lg-5"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/getQuote-icon.svg" alt=""></p>
                            <h2>Ready to Get Started?</h2>
                            <p>Post Your Task to Get in Touch with <span class="d-block">Painters in New York City.</span> </p>
                            <p class="mt-4 mt-lg-5"><a href="{{ route('posttask-step1')}}?cat=4" class="btn btn-green btn-green-shadow btn-sm">Get a Quote</a></p>
                        </div><!--// Ready to Get Started?-->
                        <div class="boxContent-pad text-opensans">
                            <div class="subBox-Content" id="content_AverageCostGuide">
                                <h2>Average Service Costs</h2>
                                <p>The cost of many home improvement services can vary by borough. Check out the overall cost of hiring a painter for interior and exterior jobs in the different boroughs of New York City below.</p>
                            </div><!--//Average Cost Guide-->
                            <div class="subBox-Content" id="content_pricingWorks">
                                <h2>How Does Professional Painter Pricing Works?</h2>
                                <p>The cost of a paint job is usually determined by the surface area that needs to be painted. Purchasing the correct amount of paint, along with the labor required to complete the project will determine how much the paint job will cost.</p>
                                <h3 class="dot_h3" id="paintPricingID">Paint Pricing</h3>
                                <div class="ContentSibling">
                                    <p>When you’re deciding which paint to purchase, always opt for higher quality paint. Low quality paint won’t last as long, and you may find that you need new paint sooner than if you use better paint. <strong>One gallon of paint typically covers 350 sq ft of space.</strong> You’ll also want to consider whether or not you will need primer; adding primer is usually recommended when painting over dark colors. Be sure to factor the cost of primer into the total cost of materials for your paint project.
                                    </p>
                                    <h3>Average Paint Prices</h3>
                                    <div class="table-responsive">
                                    <table class="table avrPriceTable text-lato">
                                        <thead>
                                            <tr>
                                                <th width="35%">Cost per Gallon</th>
                                                <th class="th2">Low</th>
                                                <th class="th3">Average</th>
                                                <th class="th4">High</th>
                                            </tr>                                            
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-opensans semiBold">Interior</td>
                                                <td><span class="textGreen latoBlack">$15</span></td>
                                                <td><span class="textGreen latoBlack">$32.50</span></td>
                                                <td><span class="textGreen latoBlack">$50</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-opensans semiBold">Exterior</td>
                                                <td><span class="textGreen latoBlack">$30</span></td>
                                                <td><span class="textGreen latoBlack">$50</span></td>
                                                <td><span class="textGreen latoBlack">$70</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>

                                    <h3>Average Primer Prices</h3>
                                    <div class="table-responsive">
                                    <table class="table avrPriceTable text-lato">
                                        <thead>
                                            <tr>
                                                <th width="35%">Cost per 5 Gallons</th>
                                                <th class="th2">Low</th>
                                                <th class="th3">Average</th>
                                                <th class="th4">High</th>
                                            </tr>                                            
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-opensans semiBold">Interior</td>
                                                <td><span class="textGreen latoBlack">$40</span></td>
                                                <td><span class="textGreen latoBlack">$70</span></td>
                                                <td><span class="textGreen latoBlack">$100</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-opensans semiBold">Exterior</td>
                                                <td><span class="textGreen latoBlack">$80</span></td>
                                                <td><span class="textGreen latoBlack">$115</span></td>
                                                <td><span class="textGreen latoBlack">$150</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    <p class="text-center tableInfo">These prices are based on standard acrylic latex paint.</p>
                                </div>

                                <h3 class="dot_h3" id="costofLaborID">Cost of Labor</h3>
                                <div class="ContentSibling">
                                    <p>Painters usually charge per square foot. You can expect to pay about <strong>$5.81 per sq ft</strong> in your New York City home. When calculating hourly, the cost usually works out to be between <strong>$50-$100</strong> per hour depending on how quickly the paint contractor finishes the job.</p>
                                </div>

                                <h3 class="dot_h3" id="otherCostsID">Other Costs</h3>
                                <div class="ContentSibling">
                                    <p>Sometimes additional costs have to be added to account for various factors, such as drywall repairs or working around ivy. If you ever receive a quote from a painter that doesn’t add up to just the materials and labor for the square footage of the job, ask for an itemized invoice.</p>
                                    <p class="grayBoxContent">Keep in mind that although your home may be a certain square footage, there are other considerations that will determine the area that will be covered. A 2,000 sq ft home with more windows and doors that aren’t being painted may end up requiring only 1,300 sq ft of coverage. The true size of the area to be painted will be determined by the painter’s measurements.
                                    </p>
                                </div>                                
                            </div><!--//How Does Professional Painter Pricing Works?-->
                            <div class="subBox-Content" id="content_homeInteriors">
                                <p class="paintImg"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/painting-pic3.jpg" alt=""></p>
                                <h2>Home Interiors</h2>
                                <p>When you post your paint project on SelectTask, be sure to include all of the parts of your home that need coverage. Evaluate the spaces that you want to be painted, and take note of all of the features that may also require new paint, such as:</p>
                                <ul class="bulletedList-content">
                                    <li><strong>Walls</strong></li>
                                    <li><strong>Ceilings</strong></li>
                                    <li><strong>Doors</strong></li>
                                    <li><strong>Baseboards</strong></li>
                                    <li><strong>Crown Molding</strong></li>
                                    <li><strong>Cupboards</strong></li>
                                    <li><strong>Built-in Shelving</strong></li>
                                </ul>
                                <p>Whether you are only painting the walls or painting many different features of the interior of your home can significantly affect the cost.</p>
                                <p>Refer to the <a href="#content_ChoosingYourPaint" class="underlineLink Bold">Choosing Your Paint</a>  section of this guide to learn about which paint finishes are best for different surfaces and rooms in your home.</p>

                                <h3>Average Primer Prices</h3>
                                <div class="table-responsive">
                                <table class="table avrPriceTable text-lato">
                                    <thead>
                                        <tr>
                                            <th class="mobWidth">Interior Size</th>
                                            <th class="th2">350 sq ft</th>
                                            <th class="th3">800 sq ft</th>
                                            <th class="th4">1,200 sq ft</th>
                                            <th class="th5">2,500 sq ft</th>
                                        </tr>                                            
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-opensans semiBold">Paint Cost</td>
                                            <td><span class="textGreen latoBlack">$45</span></td>
                                            <td><span class="textGreen latoBlack">$142.5</span></td>
                                            <td><span class="textGreen latoBlack">$200</span></td>
                                            <td><span class="textGreen latoBlack">$327.5</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-opensans semiBold">Labor Cost</td>
                                            <td><span class="textGreen latoBlack">$2,033.50</span></td>
                                            <td><span class="textGreen latoBlack">$4,648</span></td>
                                            <td><span class="textGreen latoBlack">$6,972</span></td>
                                            <td><span class="textGreen latoBlack">$14,525</span></td>
                                        </tr>
                                        <tr class="totalCostRow">
                                            <td class="text-opensans semiBold">Total Cost</td>
                                            <td><span class="textGreen latoBlack">$2,078.5</span></td>
                                            <td><span class="textGreen latoBlack">$4,790.5</span></td>
                                            <td><span class="textGreen latoBlack">$7,172</span></td>
                                            <td><span class="textGreen latoBlack">$14,852.5</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                               
                            </div><!--//Home Interiors-->

                            <div class="subBox-Content" id="content_HomeExteriors">
                                <p class="paintImg"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/painting-pic4.jpg" alt=""></p>
                                <h2>Home Exteriors</h2>
                                <p>Just like with any other home improvement project, the cost of painting a home’s exterior can depend on a few different factors. Here are some things to consider when you’re looking to revamp your home’s curb appeal.</p>
                                <p>When calculating the cost of a project, most painters will use a formula based on the square footage of the home and the linear footage of the trim. This will give them an idea of how much paint will be needed on the home, and how much time it will take to complete the job.</p>
                                <h3>Average Cost of Exterior Painting in New York City</h3>
                                <div class="table-responsive">
                                <table class="table avrPriceTable text-lato">
                                    <thead>
                                        <tr>
                                            <th>Exterior Size</th>
                                            <th class="th2">1,500 sq ft</th>
                                            <th class="th3">2,000 sq ft</th>
                                            <th class="th4">2,500 sq ft</th>
                                        </tr>                                            
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-opensans semiBold">Paint Cost</td>
                                            <td><span class="textGreen latoBlack">$200</span></td>
                                            <td><span class="textGreen latoBlack">$300</span></td>
                                            <td><span class="textGreen latoBlack">$350</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-opensans semiBold">Labor Cost</td>
                                            <td><span class="textGreen latoBlack">$4,125</span></td>
                                            <td><span class="textGreen latoBlack">$5,500</span></td>
                                            <td><span class="textGreen latoBlack">$6,875</span></td>
                                        </tr>
                                        <tr class="totalCostRow">
                                            <td class="text-opensans semiBold">Total Cost</td>
                                            <td><span class="textGreen latoBlack">$4,325</span></td>
                                            <td><span class="textGreen latoBlack">$5,800</span></td>
                                            <td><span class="textGreen latoBlack">$7,225</span></td>
                                        </tr>
                                    </tbody>
                                </table></div>
                                <p class="text-center tableInfo">Remember that different types of siding may require different types of paint. Talk to your service provider about which paint type is best suited for your exterior surface.</p>
                                
                            </div><!--//Home Exteriors-->

                            <div class="subBox-Content" id="content_commercial">
                                <p class="paintImg"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/painting-pic5.jpg" alt=""></p>
                                <h2>Commercial &amp; Specialty Paint Jobs</h2>
                                <p>Painting a commercial building in New York City is often more expensive than painting a residential property. Depending on the use of the commercial space, painters may be required to work outside of business hours, increasing their hourly rate and the overall cost of the project. Specific building features such as vaulted ceilings, the presence of commercial equipment, or landlord requirements can also contribute to added costs.
                                </p>

                                <h3 class="dot_h3" id="fauxPaintingID">Faux Painting</h3>
                                <div class="ContentSibling">
                                    <p>Faux painting is the process of adding special textures to interior walls to make them appear that they are made from a different material than drywall. This can make a room appear more interesting and luxurious than a regular paint job, and come with a significant upcharge for the craftsmanship, time, and materials that go into creating these effects.
                                    </p>
                                </div>

                                <h3 id="FauxPaintingPrices">Faux Painting Prices</h3>
                                <div class="table-responsive">
                                <table class="table avrPriceTable text-lato">
                                    <thead>
                                        <tr>
                                            <th>&nbsp;</th>
                                            <th class="th2">Low</th>
                                            <th class="th3">Average</th>
                                            <th class="th4">High</th>
                                        </tr>                                            
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-opensans semiBold">Marbling</td>
                                            <td><span class="textGreen latoBlack">$8</span></td>
                                            <td><span class="textGreen latoBlack">$10.50</span></td>
                                            <td><span class="textGreen latoBlack">$13</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-opensans semiBold">Metallic</td>
                                            <td><span class="textGreen latoBlack">$9</span></td>
                                            <td><span class="textGreen latoBlack">$11.50</span></td>
                                            <td><span class="textGreen latoBlack">$14</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-opensans semiBold">Stencils</td>
                                            <td><span class="textGreen latoBlack">$7</span></td>
                                            <td><span class="textGreen latoBlack">$9.50</span></td>
                                            <td><span class="textGreen latoBlack">$12</span></td>
                                        </tr>
                                    </tbody>
                                </table></div>
                            </div><!--//Commercial &amp; Specialty Paint Jobs-->

                            <div class="subBox-Content" id="content_buildingPainting">
                                <p class="paintImg"><img src="{{ url('public/frontend')}}/assets/images/nyc-repair-pricing/painting-pic6.jpg" alt=""></p>
                                <h2>Historical Building Painting</h2>
                                <p>If you are the owner or proprietor of a historic building, always use a paint contractor that is familiar with working on extremely old surfaces. Historic buildings are a national treasure, and should be treated with extra care. Painters specializing in historic homes understand which paints to use on aged materials, and how to properly restore an antiquated building to its former glory.</p>
                            </div><!--//Historical Building Painting-->

                            <div class="subBox-Content" id="content_AdditionalServices">
                                <h2>Additional Services</h2>
                                <h3 class="dot_h3" id="wallpaperRemoval">Wallpaper Removal</h3>
                                <div class="ContentSibling">
                                    Sometimes wallpaper removal is necessary before paint can be applied to the interior of a home or commercial property. If you’ve ever tried to do this yourself, you know that it can be frustrating and time consuming. Removing wallpaper costs about the same as applying new paint, around <strong>$3-$7 per square foot.</strong>
                                </div>
                                <h3 class="dot_h3" id="powerWashing">Power Washing</h3>
                                <div class="ContentSibling">Building exteriors may require a good scrub for the paint to stick to the surface. Power washing is a quick way to ensure that your new paint will last for a long time. Power washing only takes a few hours to complete, and your painter can begin their task the next day. If power washing is required, it will typically cost around <strong>$250 – $650+</strong> depending on the size of the project.</div>
                            </div><!--//Additional Services-->

                        </div>

                        <div class="boxContent-pad servicesFaq">
                            <h2>FAQ’s</h2>
                            <div id="accordion" class="faqAccordion">
                                <div class="card collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <div class="card-header" id="headingOne">
                                      <h5 class="mb-0">Can I leave my home while the painters are there?</h5>
                                      <img src="{{ url('public/frontend')}}/assets/images/chevron-down.svg" alt="">
                                    </div>
                                
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                      <div class="card-body">As long as you hire a reputable, well-reviewed, and most importantly, insured painter, you should be able to leave your home for work or errands while they are performing the job. Painter’s insurance covers general liability, so if any damage is done or items are stolen you will be covered.</div>
                                    </div>
                                </div>
                
                                <div class="card collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="card-header" id="headingTwo">
                                      <h5 class="mb-0">How long will it take to paint my house?</h5>
                                      <img src="{{ url('public/frontend')}}/assets/images/chevron-down.svg" alt="">
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                      <div class="card-body">While this depends on the size of the area to be painted, you can expect that a 2,000 sq ft interior paint job will be finished in a week or less.</div>
                                    </div>
                                  </div>
                
                                  <div class="card collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <div class="card-header" id="headingThree">
                                      <h5 class="mb-0">How do I know if my home has lead paint?</h5>
                                      <img src="{{ url('public/frontend')}}/assets/images/chevron-down.svg" alt="">
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">Any home built before 1978 likely has lead paint. If you’re concerned that lead paint may be present in your home, you can ask for a lab test to be done from a small sample of the wall’s previous paint. Luckily, there are established processes for removing lead paint.</div>
                                    </div>
                                  </div>
                
                                  <div class="card collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                    <div class="card-header" id="headingfour">
                                      <h5 class="mb-0">How do I maintain my new paint job?</h5>
                                      <img src="{{ url('public/frontend')}}/assets/images/chevron-down.svg" alt="">
                                    </div>
                                    <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                                        <div class="card-body">You can care for your new paint job by checking for dirt every so often in high-traffic areas, and removing the dirt with a mild detergent and soft cloth. You can use harsh chemicals for stubborn grime, but only use it as a last resort as these can cause the paint to deteriorate more quickly.</div>
                                    </div>
                                  </div>
                
                                  <!-- <div class="card collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                    <div class="card-header" id="headingfive">
                                      <h5 class="mb-0">Can I have a list of references with contact information?</h5>
                                      <img src="assets/images/arrow-right.svg" alt="">
                                    </div>
                                    <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordion">
                                        <div class="card-body">---</div>
                                    </div>
                                  </div>
                
                                  <div class="card collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    <div class="card-header" id="headingSix">
                                      <h5 class="mb-0">Do you offer a warranty or guarantee your work?
                                    </h5>
                                      <img src="assets/images/arrow-right.svg" alt="">
                                    </div>
                                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                                        <div class="card-body">---</div>
                                    </div>
                                  </div>
                
                                  <div class="card collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    <div class="card-header" id="headingSeven">
                                      <h5 class="mb-0">If you get paint on the furniture, are you liable?
                                    </h5>
                                      <img src="assets/images/arrow-right.svg" alt="">
                                    </div>
                                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                                        <div class="card-body">---</div>
                                    </div>
                                  </div>                 -->
                            </div>
                            <p class="mt-4"><a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class="textGreen underlineLink collapsed">Sources</a></p>
                          <ul class="source-list mt-2 collapse " id="collapseExample" style="">
                                <li><a href="https://www.inchcalculator.com/room-painting-cost-guide/" target="_blank">https://www.inchcalculator.com/room-painting-cost-guide</a></li>
                                    <li><a href="https://www.homeadvisor.com/cost/painting/paint-a-home-interior/" target="_blank">https://www.homeadvisor.com/cost/painting/paint-a-home-interior</a></li>
                                    <li><a href="https://house-painters.promatcher.com/cost/new-york-ny-house-painters-costs-prices.aspx" target="_blank">https://house-painters.promatcher.com/cost/new-york-ny-house-painters-costs-prices.aspx</a></li>
                                    <li><a href="https://www.nextinsurance.com/blog/painter-license-requirements-state-comprehensive-guide/">https://www.nextinsurance.com/blog/painter-license-requirements-state-comprehensive-guide</a></li>
                                    <li><a href="https://www.paintersinc.net/commercial-painting-cost" target="_blank">https://www.paintersinc.net/commercial-painting-cost</a></li>
                                    <li><a href="https://www.nelsongreerpainting.com/painting/how-much-do-commercial-painters-charge/" target="_blank">https://www.nelsongreerpainting.com/painting/how-much-do-commercial-painters-charge</a></li>
                                    <li><a href="https://hommcps.com/prepare-home-professional-painting-job/" target="_blank">https://hommcps.com/prepare-home-professional-painting-job</a></li>
                                    <li><a href="https://www.historicnewengland.org/historic-restoration-and-painting-in-new-england/" target="_blank">https://www.historicnewengland.org/historic-restoration-and-painting-in-new-england</a></li>
                                    <li><a href="http://www.classicshades.com/faq-about-painting/" target="_blank">http://www.classicshades.com/faq-about-painting</a></li>
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
    <section class="section connecting getStarted-paintings priceGetStarted">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7 wow bounceInleft" data-wow-delay="0.1s">
                    <h2>Find a Painter <span class="mobBlock">in New York City</span></h2>                    
                    <h3 class="subheadinggray mt-3">Click on your <strong>New York City Borough</strong> <span class="d-md-block">Below to Get Free Quotes from Painters in Your Neighborhood.</span></h3>
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