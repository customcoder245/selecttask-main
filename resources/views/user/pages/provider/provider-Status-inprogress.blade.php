@extends('user.layout.app')
@section('content')

        <!--Right Content-->
        <div class="contentArea">
          
            <!--Job details-->
            <div class="sectionRow">
                <div class="row">
                    <div class="col-md-5">
                        <div class="titleRow flex-wrap d-flex justify-content-between align-items-center">
                            <h2 class="title-head">Task Details</h2>                           
                            <a href="#" class="textgreen underlinelink Bold d-inline-block d-md-none ml-auto text-lato mr-3">View Invoice</a>  
                            <a href="#" class="btn btn-green d-inline-block d-md-none f-12 text-lato">Task Completed</a>                         
                            <div class="Titlestatus d-none d-md-inline-flex align-items-center">
                                <label>Status :</label>
                                <a href="#" class="text-secondary semiBold f-14">In Progress</a>
                                <span class="infoIcon centereditem"><img src="{{ url('/public/user/')}}/assets/images/i.svg" alt="">
                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</span></span>
                            </div>
                        </div> 
                        <div class="wtbox">
                            <div class="jobBannerImage relative">
                                <img src="{{ url('/public/user/')}}/assets/images/job-image.jpg" alt="">
                                <a href="javascript:void(0)" class="text-lato" data-toggle="modal" data-target="#viewAllImagesModal"><img src="{{ url('/public/user/')}}/assets/images/image.svg" alt=""> View all</a>
                            </div>
                            <div class="jobDetails jobDetails-provider">
                                <div class="JobDetailsTopRow d-flex justify-content-between">
                                    <div class="jobLeft">
                                        <div class="d-none d-md-block">
                                            <label>Date</label>
                                            <p>07/15/2020</p>
                                        </div>
                                        <div class="d-block d-md-none">
                                            <label>Status</label>
                                            <p><a href="#" class="text-secondary semiBold">In Progress</a>
                                                <span class="infoIcon centereditem"><img src="{{ url('/public/user/')}}/assets/images/i.svg" alt="">
                                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</span></span></p>                                            
                                        </div>                                        
                                    </div>
                                   
                                </div>

                                <div class="JobDetailsRow d-md-none d-flex justify-content-between">
                                    <div class="jobLeft">
                                        <label>Date</label>
                                    </div>
                                    <div class="jobRight">
                                        <p>07/15/2020</p>
                                    </div>
                                </div>

                                <div class="JobDetailsRow d-flex justify-content-between">
                                    <div class="jobLeft">
                                        <label>Service Categories:</label>
                                    </div>
                                    <div class="jobRight">
                                        <p>Handyman</p>
                                    </div>
                                </div>
                               
                                <div class="JobDetailsRow d-flex justify-content-between">
                                    <div class="jobLeft">
                                        <label>Service Type</label>
                                    </div>
                                    <div class="jobRight">
                                        <p>Non Emergency</p>
                                    </div>
                                </div>
                                <div class="JobDetailsRow d-flex justify-content-between">
                                    <div class="jobLeft">
                                        <label>Preferred Time</label>
                                    </div>
                                    <div class="jobRight">
                                        <p>My timing is flexible</p>
                                    </div>
                                </div>

                                <div class="JobDetailsRow d-flex justify-content-between">
                                    <div class="jobLeft">
                                        <label>Preferred Contact</label>
                                    </div>
                                    <div class="jobRight">
                                        <p>Email</p>
                                    </div>
                                </div>

                                <div class="JobDetailsRow d-flex justify-content-between">
                                    <div class="jobLeft">
                                        <label>Job Description</label>
                                    </div>
                                    <div class="jobRight">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do ei</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="topButtons text-right text-lato f-16 mb-2">
                            <a href="#" class="textgreen underlinelink Bold  d-md-inline-block d-none">View Invoice</a>
                            <a href="#" class="btn btn-green d-md-inline-block d-none">Task Completed</a>
                           
                        </div>
                        <div class="applicantInfo">
                            <div class="wtbox">
                                <div class="jobDetails jobDetails-provider"> 
                                    <div class="JobDetailsRow d-flex justify-content-between">
                                        <div class="jobLeft">
                                            <label>Total Applicants</label>
                                        </div>
                                        <div class="jobRight">
                                            <p>23</p>
                                        </div>
                                    </div>
                                    <div class="JobDetailsRow d-flex justify-content-between">
                                        <div class="jobLeft">
                                            <label>Price</label>
                                        </div>
                                        <div class="jobRight">
                                            <p>$10</p>
                                        </div>
                                    </div>                                    
                                </div>  
                                                              
                            </div>
                           
                        </div>
                        <div class="wtbox applicantsBox custmerBox mt-3">
                            <h3 class="text-lato">Customer Info</h3>
                            <div class="jobDetails jobDetails-provider">
                                <div class="JobDetailsRow d-flex justify-content-between">
                                    <div class="jobLeft">
                                        <label>Name</label>
                                    </div>
                                    <div class="jobRight">
                                        <p>John Doe</p>
                                    </div>
                                </div>
                                <div class="JobDetailsRow d-flex justify-content-between">
                                    <div class="jobLeft">
                                        <label>Customer Email</label>
                                    </div>
                                    <div class="jobRight">
                                        <p>jnsncs@gmail.com</p>
                                    </div>
                                </div>
                                <div class="JobDetailsRow d-flex justify-content-between">
                                    <div class="jobLeft">
                                        <label>Customer Contact</label>
                                    </div>
                                    <div class="jobRight">
                                        <p>989- 9845-4466</p>
                                    </div>
                                </div>
                                <div class="JobDetailsRow d-flex justify-content-between">
                                    <div class="jobLeft">
                                        <label>Additional Contact</label>
                                    </div>
                                    <div class="jobRight">
                                        <p>989- 9845-4466</p>
                                    </div>
                                </div>
                                <div class="JobDetailsRow d-flex justify-content-between">
                                    <div class="jobLeft">
                                        <label>Customer Address</label>
                                    </div>
                                    <div class="jobRight">
                                        <p>Sheraton Tribeca, Canal Street, 
                                            Manhattan, 
                                            New York, NY 10013,</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
               
                
            </div>
            <!-- //Task List-->
        </div>
        <!--//Right Content-->
			@endsection