@extends('user.layout.app')
@section('content')
<!--Right Content-->
         <!--Right Content-->
        <div class="contentArea">
           
            <!--Task List-->
            <div class="sectionRow profileVH">
                <div class="titleRow d-flex justify-content-between align-items-center mb-sm-4">
                    <h2 class="title-head">Company</h2>
                    <div class="rightBottonsAbout topButtons text-right">
                        <a href="{{ route('about-preview')}}" class="textgreen f-16 underlinelink text-lato Bold ">Preview Profile</a>   
                    </div>
                    
                </div> 
                
                <div class="staticTabs">
                    <ul class="nav nav-tabs tabsWidget border-bottom borderW2">
                        <li>
                            <a class="nav-link" href="{{ route('provider-company-info')}}">Company Information</a>
                        </li>                        
                        <li>
                            <a class="nav-link active" href="{{ route('provider-payment-information')}}">Payment Information</a>
                        </li>                  
                    </ul>
                </div>

                
                <div class="formSectionRow">
                    <div class="titleSection d-flex align-items-center justify-content-between flex-wrap">
                        <h4 class="">Saved Credit Cards</h4>
                        <a href="javascript:void(0)" class="btn order-md-3 btn-green-outline btn-sm minW-auto" data-toggle="modal" data-target="#addnewModal">Add new</a>
                        <p class="order-md-2 stripeLogo ml-md-auto"><span>Powered By :</span><img src="{{ url('/public/user/')}}/assets/images/stripe_logo.png" alt=""></a>
                    </div>
                    <div class="autoApplyLists payment_card_list" data-url="{{ route('payment-card-list')}}">
                       

                        

                    </div>
					<div class="no_data" style="display:none">
							  <div class="noData-Div">
											<p class="noApplicantText">Sorry No Data Found</p>
										  
											<p class="charImage"><img src="{{ url('/public/user/')}}/assets/images/no-data.svg" alt=""></p>
										</div> 
							</div>
                </div>
            </div>
            <!-- //Task List-->

        </div>
        <!--//Right Content-->
            <!-- //Task List-->
			@endsection