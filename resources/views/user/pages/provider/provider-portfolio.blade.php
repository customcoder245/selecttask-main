@extends('user.layout.app')
@section('content')
<!--Right Content-->
        <!--Right Content-->
        <div class="contentArea">
           
            <!--Task List-->
            <div class="sectionRow profileVH">
                <div class="titleRow d-flex justify-content-between align-items-center mb-sm-4">
                    <h2 class="title-head">Company</h2>
                    <div class="rightBottonsAbout">
                        <a href="{{ route('about-preview')}}" class="textgreen text-lato f-16 underlinelink Bold ">Preview Profile</a>
                       
                    </div>
                    
                </div> 
                
                <div class="staticTabs">
                    <ul class="nav nav-tabs tabsWidget border-bottom borderW2">
                        <li>
                            <a class="nav-link active" href="{{ route('provider-company-info')}}">Company Information</a>
                        </li>                        
                        <li>
                            <a class="nav-link" href="{{ route('provider-payment-information')}}">Payment Information</a>
                        </li>                  
                    </ul>
                </div>
                
                <div class="wtbox">
                   
                    <ul class="aboutTabs d-flex">
                        <li><a href="{{ route('provider-company-info')}}">About</a></li>
                        <li><a href="{{ route('provider-business-details')}}">Business &amp; License Details</a></li>
                        <li class="active"><a href="{{ route('provider-portfolio')}}">Portfolio</a></li>
                    </ul>
                   <div class="tabContentWidget">
                    <form class="companyInfoForm businessLicenceForm">
                        
                        <div class="formSectionRow">
                            <div class="titleSection d-flex align-items-center flex-wrap">
                                <h4 class="">Portfolio</h4>
                                <a href="javascript:void(0)" class="btn order-lg-3 btn-green-outline btn-sm ml-auto minW-auto" data-toggle="modal" data-target="#newPortfolioModal">Add New Portfolio</a>
                            </div>
                            <div class="autoApplyLists portfolio_list" data-url="{{ route('portfolio-list')}}">
                                 

                               
    
                            </div>
							<div class="no_data" style="display:none">
							  <div class="noData-Div">
											<p class="noApplicantText">Sorry No Data Found</p>
										  
											<p class="charImage"><img src="{{ url('/public/user/')}}/assets/images/no-data.svg" alt=""></p>
										</div> 
							</div>
                        </div>
                    </form>
                   </div>
                    
                </div>
            </div>
            <!-- //Task List-->

        </div>
        <!--//Right Content-->
        <!--//Right Content-->
            <!-- //Task List-->
			@endsection