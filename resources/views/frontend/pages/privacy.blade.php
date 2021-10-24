@extends('frontend.layout.app')
@section('content')
<!-- Banner Section -->
    <section class="banner termsBanner smlBanner">
        <div class="container">
            <div class="row align-items-md-center">
                <div class="col-md-6 order-md-2 text-center my-3"><img src="{{ url('/public/frontend')}}/assets/images/privacy-icon.svg" alt="" class="bannerIcon"></div>
                <div class="col-md-6 order-md-1">
                    <div class="detail wow bounceInLeft pt-0" data-wow-delay="0.1s">                       
                        <h2>Our Privacy Policy</h2>
                        <p>Last Updated: March 31, 2018.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //Banner Section -->

    <!--The Provider’s Guide-->
    <section class="section cmsTopSection borderBottom">
        <div class="container position-relative leftContentsContainer" id="stickyLeftLinks">
            <div id="sticky-anchor"></div>
            <div class="leftContents" id="top-menu">
                <div class="stickyLeftLinks">
                    <h2>Contents</h2>
                    <ul>
                        <li><a href="#InGeneral">In General</a></li>
                        <li><a href="#ChangesPolicy">Changes in Privacy Policy</a></li>
                        <li><a href="#CollectionInformation">Collection of Information</a></li>
                        <li><a href="#Location-BasedServices">Location-Based Services</a></li>
                        <li><a href="#informationUsed">How Information is Used</a></li>
                        <li><a href="#trackingCookies">Tracking, Use of Cookies, Web Beacons and Similar Devices</a></li>
                        <li><a href="#protectingInformation">Protecting Your Information</a></li>
                        <li><a href="#DataProcessing">Data Processing</a></li>
                        <li><a href="#DisclosureThirdParties">Disclosure to Third Parties</a></li>
                        <li><a href="#yourChoices">Your Choices</a></li>
                        <li><a href="#governingLaw">Governing Law</a></li>
                        <li><a href="#privacyPreferences">Opting-Out or Updating Your Personal Information and Privacy Preferences</a></li>
                        <li><a href="#privacyComplaints">Privacy Complaints</a></li>
                    </ul>
                </div>
            </div><!--left Content-->
            <div id="content-holder">
                <div id="accordion" class="mobileAccordion">
                    <div class="cmsContent-section" id="InGeneral">
                        <h2 class="cmsTitle" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><span>1.</span> In General</h2>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="cmsContent-text">                    
                                <p>SelectTask Inc. (“we” or “us”) values our customers and respects their privacy. This privacy policy (“Privacy Policy”) governs our collection and use of data in connection our website (the “Site”), our applications, and any services we offer (collectively, the “Services”). Terms capitalized but not defined in this Privacy Policy shall have the meaning ascribed to them in our Terms of Use.</p>
                                <p>This Privacy Policy sets forth the nature, purpose, use and sharing of any information that identifies or can be used to identify you, the visitors to the Site, and users of our Services (“Personal Information”). This Privacy Policy does not govern privacy practices associated with offline activities, websites other than ours, or practices of third parties that we do not own or control, such as our partners, third party service providers featured on the Site or in the Services or advertisers. If you have objections to the Privacy Policy, you should immediately discontinue use of the Services and follow the procedure described in the section entitled “Opting-Out or Updating Your Personal Information and Privacy Preferences.”</p>
                                <p>The Site and the Services are intended for adult audiences only, and we do not knowingly collect any Personal Information from anyone under 13 years of age. If you are under age 13, please do not provide any Personal Information about yourself to us. If we learn that we have collected Personal Information from a child under age 13, we will delete that information as quickly as possible. If you believe that we might have any Personal Information from a child under the age of 13, please contact us immediately.</p>
                            </div>
                        </div>
                        
                    </div><!--//1. In General-->
                    <div class="cmsContent-section" id="ChangesPolicy">
                        <h2 class="cmsTitle collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><span>2.</span> Changes in Privacy Policy</h2>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="cmsContent-text">                    
                                <p>Any Personal Information that we collect and maintain will be subject to this Privacy Policy, as amended from time to time. We may change the Privacy Policy at our sole discretion. However, if at any time we make material changes to the Privacy Policy, we will notify you of those changes on the Site and through the publishing of an updated Privacy Policy. If as the result of such changes you want to alter the ways in which we are allowed to use your Personal Information, you can do so by following the procedure described in the section entitled “Opting-Out or Updating Your Personal Information and Privacy Preferences.”</p>
                            </div>
                        </div>                        
                    </div><!--//2. Changes in Privacy Policy-->

                    <div class="cmsContent-section" id="CollectionInformation">
                        <h2 class="cmsTitle collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><span>3.</span> Collection of Information</h2>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="cmsContent-text">                    
                                <ul class="cmsListing cmsListing-icon twoColList">
                                    <li>We collect the Personal Information you give us when you register with the Site or use the Services, including name, address, credit card or bank information, and other Personal Information requested as part of your use of the Site or the Services.</li>
                                    <li>We automatically collect certain kinds of non-personal information from you when you use the Site or the Services, including device, browser type, operating system, CPU speed, referring or exit webpages, click patterns, Session ID, and your computer’s IP address.</li>
                                    <li>We may on occasion supplement or correct the Personal Information you submit to us and your IP address with information in our other databases or information from third-party sources in order to reduce errors in our database, authenticate our users, prevent fraud and prevent abuse of our Site, as well as to provide more consistent, relevant experiences to our users.</li>
                                    <li>We may collect general information about use of the Site and the Services, such as what pages visitors access, the number of visits, average time spent on the Site and other similar factors. This information is generally collected in aggregate form, without identifying any user individually, although IP addresses and Session ID in tracked as part of our fraud prevention efforts.</li>
                                </ul>
                                <p class="blueInfoText">You agree not to submit any sensitive personally-identifiable information to the Services.</p>
                            </div>
                        </div>
                        
                    </div><!--//3. Collection of Information-->

                    <div class="cmsContent-section" id="Location-BasedServices">
                        <h2 class="cmsTitle collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><span>4.</span> Location-Based Services</h2>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="cmsContent-text">   
                                <h3>This Section applies to Clients.</h3>                 
                                <p>Some Services may contain functionality that can enable us to access your location and tailor your experience based on your location (“Location-based Services”). To use Location-based Services, you must enable certain features of your mobile device (e.g., GPS, WiFi, or Bluetooth) to allow us to identify your location. To the extent your location is collected through Wi-Fi or Bluetooth sensors, such sensors, and the associated data services, may be provided by a third party that may access such information for the purpose of providing such data services to us.</p>
                                <p>You agree to such access by such third parties. You may enable or disable such Location-based Services at any time via a menu within the Services. If you choose to disable any Location-based Services on your device and/or opt out of any Location-based Services through the menu, you will not be able to utilize certain features of the Services. By enabling Location-based Services on your device, you agree and acknowledge that (i) device data we collect from you is directly relevant to your use of the Services, (ii) we may provide Location-based Services related to and based on your then-current location, and (iii) we may use any such information collected in connection with the provision of Location-based Services in providing the Services. 
                                </p>
                                <p class="blueInfoText">Please note that location data may not always be accurate, and we disclaim any and all warranties related to location-based services.</p>
                            </div>
                        </div>                        
                    </div><!--//4. Location-Based Services-->
                    <div class="cmsContent-section" id="informationUsed">
                        <h2 class="cmsTitle collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"><span>5.</span> How Your Information is Used</h2>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                            <div class="cmsContent-text">   
                                <p>Except as provided herein, we collect and use your personal and non-personal information for internal purposes only or for gather aggregate and anonymized data. We may use your information in the following ways:</p>             
                                <ul class="cmsListing cmsListing-icon twoColList">
                                    <li>To conduct routine business operations such as billing, identification, authentication, contact purposes and general research.</li>
                                    <li>To employ internal marketing techniques such as tracking customer preferences to provide a customized Site experience.</li>
                                    <li>To enhance the Services.</li>
                                    <li>To gather generic product, location and other contributed.</li>
                                    <li>To comply with court and governmental orders.</li>
                                    <li>Job.If a Client hires you for a Job and indicates</li>
                                </ul>
                            </div>
                        </div>                        
                    </div><!--//5. How Your Information is Used-->
                    <div class="cmsContent-section" id="trackingCookies">
                        <h2 class="cmsTitle collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix"><span>6.</span> Tracking, Use of Cookies, Web Beacons and Similar Devices</h2>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                            <div class="cmsContent-text">   
                                <p>In order to improve our Services and provide more convenient, relevant experiences to our customers, we and our agents may use “cookies,” “web beacons,” and similar devices to track your activities. A cookie is a small amount of data that is transferred to your browser by a web server and can only be read by the server that gave it to you. It functions as your identification card and enables us to record your passwords and preferences. It cannot be executed as code or deliver viruses. </p> 
                                <p>A web beacon is a small transparent .gif image that is embedded in an HTML page or email used to track when the page or email has been viewed. Most browsers are initially set to accept cookies, and most services that include similar devices are typically initially activated to collect data. You can set your browser to notify you when you receive a cookie, giving you the chance to decide whether or not to accept it. We do not support browsers’ Do Not Track features. You can enable or disable Do Not Track by visiting the preferences or settings page of your browser.</p>
                            </div>
                        </div>                        
                    </div><!--//6. Tracking, Use of Cookies, Web Beacons and Similar Devices-->

                    <div class="cmsContent-section" id="protectingInformation">
                        <h2 class="cmsTitle collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven"><span>7.</span> Protecting Your Information</h2>
                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                            <div class="cmsContent-text">   
                                <p>In order to improve our Services and provide more convenient, relevant experiences to our customers, we and our agents may use “cookies,” “web beacons,” and similar devices to track your activities. A cookie is a small amount of data that is transferred to your browser by a web server and can only be read by the server that gave it to you. It functions as your identification card and enables us to record your passwords and preferences. It cannot be executed as code or deliver viruses. </p> 
                                <p>A web beacon is a small transparent .gif image that is embedded in an HTML page or email used to track when the page or email has been viewed. Most browsers are initially set to accept cookies, and most services that include similar devices are typically initially activated to collect data. You can set your browser to notify you when you receive a cookie, giving you the chance to decide whether or not to accept it. We do not support browsers’ Do Not Track features. You can enable or disable Do Not Track by visiting the preferences or settings page of your browser.</p>            
                                
                            </div>
                        </div>
                        
                    </div><!--//7. Protecting Your Information-->

                    <div class="cmsContent-section" id="DataProcessing">
                        <h2 class="cmsTitle collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight"><span>8.</span> Data Processing</h2>
                        <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                            <div class="cmsContent-text">   
                                <p>In submitting any third-party personal data within the context of the Services (“Third-Party Data”), the parties agree that you shall be the Data Controller and you appoint us as a Data Processor of such data, for the purpose of providing the Services. To the extent that we are a “Data Processor” for you in respect of such Third-Party Data, we will:</p>
                                <ul class="cmsListing cmsListing-icon twoColList">
                                    <li><span class="cmsGreenTitle">A:</span>Implement appropriate technical and organizational measures to safeguard the Third-Party Data against any unauthorized or unlawful access, loss, destruction, theft, use or disclosure. We implement basic level security in accordance with United States Llaw. If higher levels of security are required, please contact us.</li>
                                    <li><span class="cmsGreenTitle">B:</span>Limit access to the Third-Party Data only to those employees who need to know it to enable the Processor to perform the Services, and shall take appropriate steps to ensure the reliability of those of our employees or subcontractors who have access to such Third-Party Data.</li>
                                    <li><span class="cmsGreenTitle">C:</span>Only process the personal data as specified by this Agreement and in accordance with your instructions, and will not use the Third-Party Data for any purposes other than those related.</li>
                                    <li><span class="cmsGreenTitle">D:</span>Upon the expiry or termination of this Agreement, or upon your request, cease any and all use of the Third-Party Data and destroy or return it to you.</li>
                                </ul>
                                <p>We as Data Processor may provide access to a subcontractor processor to any such Third-Party Data if we reasonably consider such access and processing necessary to the performance of the Services. In the event of such access and before the access takes place, we will ensure that an agreement with the third-party is in place which is sufficient to require it to treat personal data in accordance with the applicable provisions of this Agreement and applicable law. In particular, you authorize us to subcontract the provision of technology and commercial services to members of our corporate group.</p>
                                <p>You represent and warrant that you have all the appropriate consents from data subjects whose personal data are submitted to us in the course of the provision of the Services.</p>
                            </div>
                        </div>                        
                    </div><!--//8. Data Processing-->

                    <div class="cmsContent-section" id="DisclosureThirdParties">
                        <h2 class="cmsTitle collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine"><span>9.</span> Disclosure to Third Parties</h2>
                        <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
                            <div class="cmsContent-text">   
                                <p>We will not share your Personal Information with third parties without your express consent, except in the limited circumstances described below:</p>             
                                <ul class="cmsListing cmsListing-icon twoColList">
                                    <li>We may share your Personal Information third party service providers for the limited purposes described in the section entitled “How Your Information is Used.” </li>
                                    <li>We will share your Personal Information when required by law, regulation, or litigation, and as necessary for purposes of national security, law enforcement, or other issues of public importance.</li>
                                    <li>If we sell assets or are acquired by or merged with another entity, we may provide such entity customer information without obtaining your further consent. We may provide notice of such asset sales, acquisitions, or mergers on the Site.</li>
                                </ul>
                            </div>
                        </div>                        
                    </div><!--//9. Disclosure to Third Parties-->

                    <div class="cmsContent-section" id="yourChoices">
                        <h2 class="cmsTitle collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen"><span>10.</span> Your Choices</h2>
                        <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion">
                            <div class="cmsContent-text">   
                                <p>We will not share your Personal Information with third parties without your express consent, except in the limited circumstances described below:</p>             
                                <ul class="cmsListing cmsListing-icon twoColList">
                                    <li>If at any time you are uncomfortable with our use of your Personal Information for internal marketing purposes and for the purpose of creating aggregate reports.</li>
                                    <li>You may similarly opt out of receiving communications from us, although we may find it necessary to continue to communicate with you regarding your use of the Services.</li>
                                    <li>For our websites, you may set your browser to refuse all or some browser cookies, or to alert you when cookies are being sent. If you disable or refuse cookies, please note that some parts of this Site may then be inaccessible or not function properly.</li>
                                </ul>
                            </div>
                        </div>                        
                    </div><!--//10. Your Choices-->
                    <div class="cmsContent-section" id="governingLaw">
                        <h2 class="cmsTitle collapsed" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven"><span>11.</span> Governing Law</h2>
                        <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordion">
                            <div class="cmsContent-text">   
                                <p>The terms of this Privacy Policy are governed by and in accordance with the laws of the state of New York, and, where applicable, the laws of the countries where our servers are located. You should not provide us with any Personal Information unless you consent to the application of United States law and, where applicable, New York law, and to the use and disclosure of your information in accordance with the terms of this Privacy Policy.</p>
                            </div>
                        </div>                        
                    </div><!--//11. Governing Law-->
                    <div class="cmsContent-section" id="privacyPreferences">
                        <h2 class="cmsTitle collapsed" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve"><span>12.</span> Opting-Out or Updating Your Personal Information and Privacy Preferences</h2>
                        <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordion">
                            <div class="cmsContent-text">   
                                <p>You have the right to access, correct and delete inaccuracies in your Personal Information and privacy preferences on the Services at any time by signing into your account and editing your Personal Information in your account profile. You may also do so by contacting us via telephone, postal mail, or email.</p>
                                <p>If at any time you wish to withdraw your consent to our processing of your data or opt out of our use of your information for internal marketing purposes or for compiling aggregate risk reports, you may do so by sending a written notice to: Support@handsomeservice.com. Note that your withdrawal of consent may prevent us from providing the Services to you.</p>
                            </div>
                        </div>                        
                    </div><!--//12. Opting-Out or Updating Your Personal Information and Privacy Preferences-->
                    <div class="cmsContent-section" id="privacyComplaints">
                        <h2 class="cmsTitle collapsed" data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen"><span>13.</span> Privacy Complaints</h2>
                        <div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen" data-parent="#accordion">
                            <div class="cmsContent-text">   
                                <p>We take our users’ privacy concerns seriously. If you believe that we have not complied with this Privacy Policy with respect to your Personal Information, you may write to us at the address noted above.</p>
                                <p>Also, please note that we are not responsible for the content or privacy practices of third-party websites or integrated products to which the Site or the Services may link. You should review the privacy policies of such sites before using the associated sites.</p>
                                <p>The Services are intended for users in the United States and those not governed by privacy policies of other countries. Users outside the United States are advised not to disclose Personal Information to us.</p>
                            </div>
                        </div>                        
                    </div><!--//13. Privacy Complaints-->
                </div>
            </div>

        </div>
    </section>
	<script>
	$(function () {
  $(window).scroll(sticky_relocate);
  sticky_relocate();
}); 
	</script>
    <!-- //4. Your Relationship with Us-->
	@endsection
