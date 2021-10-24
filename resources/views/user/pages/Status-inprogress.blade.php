  @extends('user.layout.app')
@section('content')

      <!--Right Content-->
        <div class="contentArea">
           
            <!--Job details-->
            <div class="sectionRow">
                <div class="row">
                    <div class="col-md-5">
                        <div class="titleRow flex-wrap d-flex justify-content-between align-items-center">
                            <h2 class="title-head">Job Details</h2>
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#markCompletedModal" class="btn btn-green d-inline-block d-md-none">Complete Task</a>
                            <div class="Titlestatus d-none d-md-inline-flex align-items-center">
                                <label>Status :</label>
                                <a href="javascript:void(0)" class="text-secondary semiBold centereditem">In Progress
                                    <span class="infoIcon centereditem"><img src="{{ url('/public/user')}}/assets/images/i.svg" alt="">
                                    <span>Your project is in the works. Please contact your pro if you have any questions.</span></span>
                                    <img src="{{ url('/public/user')}}/assets/images/downarrow.svg" alt="">
                                </a>
                            </div>
                        </div> 
                        <div class="wtbox">
                            <div class="jobBannerImage relative">
                                <img src="{{ url('/public/user')}}/assets/images/job-image.jpg" alt="">
                                <a href="javascript:void(0)" class="text-lato" data-toggle="modal" data-target="#viewAllImagesModal"><img src="{{ url('/public/user')}}/assets/images/image.svg" alt=""> View all</a>
                            </div>
                            <div class="jobDetails">
                                <div class="JobDetailsTopRow d-flex justify-content-between">
                                    <div class="jobLeft">
                                        <div class="d-none d-md-block">
                                            <label>Date</label>
                                            <p>07/15/2020</p>
                                        </div>
                                        <div class="d-block d-md-none">
                                            <label>Status</label>
                                            <p><a href="#" class="text-secondary semiBold centereditem">In Progress
                                                <span class="infoIcon centereditem"><img src="{{ url('/public/user')}}/assets/images/i.svg" alt="">
                                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</span></span>
                                                <img src="{{ url('/public/user')}}/assets/images/downarrow.svg" alt=""></a></p>                                            
                                        </div>
                                        
                                    </div>
                                    <div class="jobRight">
                                        <label>Assigned to</label>
                                        <p>Mark Spencer</p>
                                    </div>
                                </div>

                                <div class="JobDetailsRow d-flex justify-content-between">
                                    <div class="jobLeft">
                                        <label>Location</label>
                                    </div>
                                    <div class="jobRight">
                                        <p>Sheraton Tribeca New York Hotel, <span class="d-block">Street, Manhattan,</span> <span class="d-block">New York, NY 10013,</span>  </p>
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
                            <a href="javascript:void(0)" class="btn btn-green d-md-inline-block d-none" data-toggle="modal" data-target="#markCompletedModal">Complete Task</a>                            
                        </div>
                        <div class="wtbox applicantsBox">
                            <h3 class="text-lato">Applicants (<span>3</span>)</h3>
                            <div class="applicantLists">
                                <div class="applicantList-row d-flex">
                                    <div class="applicant-image">
                                        <img src="{{ url('/public/user')}}/assets/images/user.jpg" alt="">
                                        <a href="#" class="btn btn-green disabledLink">Assign</a>
                                    </div>
                                    <div class="applicantDetails flex-grow-1">
                                        <div class="d-flex justify-content-between">
                                            <h4>Srajan Gupta</h4>
                                            <a href="#" class="underlinelink text-primary">View Profile</a>
                                        </div>
                                        <div class="applicantsInfoContent d-flex flex-wrap justify-content-between">
                                            <div class="infoContentCol timeHired centereditem">
                                                <span class="iconLT"><img src="{{ url('/public/user')}}/assets/images/time-hired.svg" alt=""></span>
                                                <div class="contentRT">
                                                    <label>Times Hired</label>
                                                    <p>50</p>
                                                </div>
                                            </div>
                                            <div class="infoContentCol contactCol centereditem">
                                                <span class="iconLT"><img src="{{ url('/public/user')}}/assets/images/contacts.svg" alt=""></span>
                                                <div class="contentRT">
                                                    <label>Contact</label>
                                                    <p>(434) 343-4343</p>
                                                </div>
                                            </div>
                                            <div class="infoContentCol starRating mr-0 text-center">
                                                <div class="ratingDiv"><img src="{{ url('/public/user')}}/assets/images/rating.png" alt=""></div>
                                                <p>12 Reviews</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="applicantList-row d-flex">
                                    <div class="applicant-image">
                                        <img src="{{ url('/public/user')}}/assets/images/user.jpg" alt="">
                                        <a href="#" class="btn btn-green disabledLink">Assign</a>
                                    </div>
                                    <div class="applicantDetails flex-grow-1">
                                        <div class="d-flex justify-content-between">
                                            <h4>Srajan Gupta</h4>
                                            <a href="#" class="underlinelink text-primary">View Profile</a>
                                        </div>
                                        <div class="applicantsInfoContent d-flex flex-wrap justify-content-between">
                                            <div class="infoContentCol timeHired centereditem">
                                                <span class="iconLT"><img src="{{ url('/public/user')}}/assets/images/time-hired.svg" alt=""></span>
                                                <div class="contentRT">
                                                    <label>Times Hired</label>
                                                    <p>50</p>
                                                </div>
                                            </div>
                                            <div class="infoContentCol contactCol centereditem">
                                                <span class="iconLT"><img src="{{ url('/public/user')}}/assets/images/contacts.svg" alt=""></span>
                                                <div class="contentRT">
                                                    <label>Contact</label>
                                                    <p>(434) 343-4343</p>
                                                </div>
                                            </div>
                                            <div class="infoContentCol starRating mr-0 text-center">
                                                <div class="ratingDiv"><img src="{{ url('/public/user')}}/assets/images/rating.png" alt=""></div>
                                                <p>12 Reviews</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
               
                
            </div>
            <!-- //Task List-->

        </div>
		@endsection