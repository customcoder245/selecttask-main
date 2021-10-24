   @extends('frontend.layout.app')
@section('content')
 
 <!-- Banner Section -->
    <section class="banner innerbanner postTask-Banner">
        <div class="container">
            <div class="row align-items-md-center">
                <div class="col-md-7">
                    <div class="detail wow bounceInLeft" data-wow-delay="0.1s"> 
                        <img src="{{ url('/public/frontend')}}/assets/images/post-task/banner-icon.svg" alt="" class="bannerIcon">                      
                        <h2 class="Bold">You Can Post Your Task to any of These <span class="d-md-block">New York City Locations</span></h2>
                        <div class="bannerContent Bannerlocations d-flex">
                            <div class="BlocationName"><span>Manhattan</span></div>
                            <div class="BlocationName"><span>Brooklyn</span></div>
                            <div class="BlocationName"><span>Queens</span></div>
                            <div class="BlocationName"><span>The Bronx</span></div>
                            <div class="BlocationName"><span>Staten Island</span></div>
                            <div class="BlocationName"><span>New York City</span></div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //Banner Section -->
 <form method="post" action="{{ route('frontend-posttask')}}"class="frontend_form_post">
   @csrf
   
    <!--How to Find a Pro for Your Project Section-->
    <section class="section servicesTopSection postTaskSection step1">
        <div class="container">
            <ul class="mobDotsSteps d-flex justify-content-between">
                <li class="active"><span>1</span></li>
                <li><span>2</span></li>
                <li><span>3</span></li>
                <li><span>4</span></li>
                <li><span>5</span></li>
            </ul>
            <div class="postStepsWidget text-center d-flex justify-content-between">
                <div class="postStepCol active">                   
                    <p class="PostStepIcon centereditem">
                        <svg width="43" height="43" class="icon">
                            <use xlink:href="#service-step-icon" ></use>
                        </svg>
                    </p>
                    <p class="postLabel">Service</p>
                </div>
                <div class="postStepCol">                   
                    <p class="PostStepIcon centereditem">
                        <svg width="31" height="44" class="icon">
                            <use xlink:href="#address-step-icon" ></use>
                        </svg>
                    </p>
                    <p class="postLabel">Address</p>
                </div>
                <div class="postStepCol">                   
                    <p class="PostStepIcon centereditem">
                        <svg width="39" height="39" class="icon">
                            <use xlink:href="#time-step-icon" ></use>
                        </svg>
                    </p>
                    <p class="postLabel">Time</p>
                </div>
                <div class="postStepCol">                   
                    <p class="PostStepIcon centereditem">
                        <svg width="34" height="43" class="icon">
                            <use xlink:href="#details-step-icon" ></use>
                        </svg>
                    </p>
                    <p class="postLabel">Details</p>
                </div>
                <div class="postStepCol">                   
                    <p class="PostStepIcon centereditem">
                        <svg width="42" height="47" class="icon">
                            <use xlink:href="#post-step-icon" ></use>
                        </svg>
                    </p>
                    <p class="postLabel">Post</p>
                </div>
            </div>
			@php 
            $current_service='';
           if(isset($_GET['cat'])){
			   $current_service=$_GET['cat'];
		   }			
			@endphp
            <div class="stepSectionContet">
                <h2>Select the category <span class="mobBlock">that best describe your Task</span></h2>
                <div class="row justify-content-center">
                    <div class="col-md-6 form-group30">
                        <label class="label">Select service category</label>
                        <select class="form-control select_cat" name="service" >
						<option value=""> Select Services</option>
						@foreach(get_services_category() as $services)
                            <option value="{{ $services->id }}" @if($current_service==$services->id) selected @endif >{{ $services->name }}</option>
                        @endforeach
						</select>
                    </div>
                    
                </div>
            </div>
			@php 
			$login_status='NO';
			@endphp
			@if (Auth::check())
				@php 
			$login_status='yes';
			@endphp
			@endif

            <p class="nextBtnSection text-center"><a href="javascript:void(0)" class="btn btn-green btn-green-shadow btnLg step-btn"  data-next="step2" >Next</a></p>
        </div>
    </section>
	
	<section class="section servicesTopSection postTaskSection step2" style="display:none">
        <div class="container">
            <ul class="mobDotsSteps d-flex justify-content-between">
                <li class="completed"><span>1</span></li>
                <li class="active"><span>2</span></li>
                <li><span>3</span></li>
                <li><span>4</span></li>
                <li><span>5</span></li>
            </ul>
            <div class="postStepsWidget text-center d-flex justify-content-between">
                <div class="postStepCol">                   
                    <p class="PostStepIcon centereditem">
                        <svg width="43" height="43" class="icon">
                            <use xlink:href="#service-step-icon" ></use>
                        </svg>
                    </p>
                    <p class="postLabel">Service</p>
                </div>
                <div class="postStepCol active">                   
                    <p class="PostStepIcon centereditem">
                        <svg width="31" height="44" class="icon">
                            <use xlink:href="#address-step-icon" ></use>
                        </svg>
                    </p>
                    <p class="postLabel">Address</p>
                </div>
                <div class="postStepCol">                   
                    <p class="PostStepIcon centereditem">
                        <svg width="39" height="39" class="icon">
                            <use xlink:href="#time-step-icon" ></use>
                        </svg>
                    </p>
                    <p class="postLabel">Time</p>
                </div>
                <div class="postStepCol">                   
                    <p class="PostStepIcon centereditem">
                        <svg width="34" height="43" class="icon">
                            <use xlink:href="#details-step-icon" ></use>
                        </svg>
                    </p>
                    <p class="postLabel">Details</p>
                </div>
                <div class="postStepCol">                   
                    <p class="PostStepIcon centereditem">
                        <svg width="42" height="47" class="icon">
                            <use xlink:href="#post-step-icon" ></use>
                        </svg>
                    </p>
                    <p class="postLabel">Post</p>
                </div>
            </div>
            <div class="stepSectionContet">
                <h2>Add your Task address below</h2>
                <label class="label">Add address</label>
                <div class="row">                    
                    <div class="col-md-4 form-group30">
                        <select class="form-control" name="address_type">
                           <option value="">Select address type</option>
						<option value="residential">Residential</option>
						<option value="commercial">Commercial</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group30">
                        <input type="text" name="address" id="business_address_add2" class="form-control" placeholder="Address">
                    </div>
                    <div class="col-md-4 form-group30">
                        <input type="text" name="apt_no" id="" class="form-control" placeholder="Apartment No">
                    </div>
                </div>
            </div>

            <p class="nextBtnSection text-center"><a href="javascript:void(0)" class="btn btn-green btn-green-shadow btnLg step-btn" data-next="step3" >Next</a></p>
        </div>
    </section>
	
    <!--How to Find a Pro for Your Project Section-->
    <section class="section servicesTopSection postTaskSection step3" style="display:none">
        <div class="container">
            <ul class="mobDotsSteps d-flex justify-content-between">
                <li class="completed"><span>1</span></li>
                <li class="completed"><span>2</span></li>
                <li class="active"><span>3</span></li>
                <li><span>4</span></li>
                <li><span>5</span></li>
            </ul>
            <div class="postStepsWidget text-center d-flex justify-content-between">
                <div class="postStepCol">                   
                    <p class="PostStepIcon centereditem">
                        <svg width="43" height="43" class="icon">
                            <use xlink:href="#service-step-icon" ></use>
                        </svg>
                    </p>
                    <p class="postLabel">Service</p>
                </div>
                <div class="postStepCol">                   
                    <p class="PostStepIcon centereditem">
                        <svg width="31" height="44" class="icon">
                            <use xlink:href="#address-step-icon" ></use>
                        </svg>
                    </p>
                    <p class="postLabel">Address</p>
                </div>
                <div class="postStepCol active">                   
                    <p class="PostStepIcon centereditem">
                        <svg width="39" height="39" class="icon">
                            <use xlink:href="#time-step-icon" ></use>
                        </svg>
                    </p>
                    <p class="postLabel">Time</p>
                </div>
                <div class="postStepCol">                   
                    <p class="PostStepIcon centereditem">
                        <svg width="34" height="43" class="icon">
                            <use xlink:href="#details-step-icon" ></use>
                        </svg>
                    </p>
                    <p class="postLabel">Details</p>
                </div>
                <div class="postStepCol">                   
                    <p class="PostStepIcon centereditem">
                        <svg width="42" height="47" class="icon">
                            <use xlink:href="#post-step-icon" ></use>
                        </svg>
                    </p>
                    <p class="postLabel">Post</p>
                </div>
            </div>
            <div class="stepSectionContet">
                <h2>When do you want to start your Task?</h2>
                <label class="label">Select your preferred timeline below</label>
                               
                <div class="customcheck customRadio drkbdr squareRadio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="preferred_time" id="inlineRadio1" value="1">
                        <label class="form-check-label" for="inlineRadio1">Within the Next 24 Hours</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="preferred_time" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2">Within the next few days</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="preferred_time" id="inlineRadio3" value="3">
                        <label class="form-check-label" for="inlineRadio3">My timing is flexible</label>
                        </div>
                        <div class="form-check form-check-inline openPopup">
                        <input class="form-check-input" type="radio" name="preferred_time" id="inlineRadio4" value="4">
                        <label class="form-check-label" for="inlineRadio4">Preferred time</label>
                        <div class="timePopup">
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="dateCol relative">
									<input type="text" name="post_date" placeholder="MM/DD/YY" id="date1" class="form-control">
									</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="dateCol relative">
									<select name="post_time"  class="form-control">
									 @foreach(get_timestamp_option() as $timestamp)
									 <option value="{{ $timestamp }}">{{ $timestamp }}</option>
									 @endforeach
									</select>
									</p>
                                </div>
                            </div>
                        </div>
                        </div>
                </div>
            
            </div>

            <p class="nextBtnSection text-center"><a href="javascript:void(0)" class="btn btn-green btn-green-shadow btnLg step-btn" data-next="step4" >Next</a></p>
        </div>
    </section>
	
	
	<!--How to Find a Pro for Your Project Section-->
    <section class="section servicesTopSection postTaskSection step4 " style="display:none">
        <div class="container">
            <ul class="mobDotsSteps d-flex justify-content-between">
                <li class="completed"><span>1</span></li>
                <li class="completed"><span>2</span></li>
                <li class="completed"><span>3</span></li>
                <li class="active"><span>4</span></li>
                <li><span>5</span></li>
            </ul>
            <div class="postStepsWidget text-center d-flex justify-content-between">
                <div class="postStepCol">                   
                    <p class="PostStepIcon centereditem">
                        <svg width="43" height="43" class="icon">
                            <use xlink:href="#service-step-icon" ></use>
                        </svg>
                    </p>
                    <p class="postLabel">Service</p>
                </div>
                <div class="postStepCol">                   
                    <p class="PostStepIcon centereditem">
                        <svg width="31" height="44" class="icon">
                            <use xlink:href="#address-step-icon" ></use>
                        </svg>
                    </p>
                    <p class="postLabel">Address</p>
                </div>
                <div class="postStepCol">                   
                    <p class="PostStepIcon centereditem">
                        <svg width="39" height="39" class="icon">
                            <use xlink:href="#time-step-icon" ></use>
                        </svg>
                    </p>
                    <p class="postLabel">Time</p>
                </div>
                <div class="postStepCol active">                   
                    <p class="PostStepIcon centereditem">
                        <svg width="34" height="43" class="icon">
                            <use xlink:href="#details-step-icon" ></use>
                        </svg>
                    </p>
                    <p class="postLabel">Details</p>
                </div>
                <div class="postStepCol">                   
                    <p class="PostStepIcon centereditem">
                        <svg width="42" height="47" class="icon">
                            <use xlink:href="#post-step-icon" ></use>
                        </svg>
                    </p>
                    <p class="postLabel">Post</p>
                </div>
            </div>
            <div class="stepSectionContet">
                <h2>Submit Task Details</h2>
                <div class="row">
                    <div class="col-md-6 form-group30">
                        <label class="label">Write Description</label>
                        <textarea class="form-control taskTextArea" cols="10" rows="5" name="job_desc"></textarea>
                    </div>
                    <div class="col-md-6 form-group30">
                        <label class="label">Attach Images</label>
                        <div class="addimages ">
						<div class="input-images-1">
                                       
                                        
                                    </div>
                           
                           
                        </div>
                    </div>
                </div>
            
            </div>

            <p class="nextBtnSection text-center"><a href="javascript:void(0)" class="btn btn-green btn-green-shadow btnLg step-btn" data-next="step5" >Next</a></p>
        </div>
    </section>
	
	<section class="section servicesTopSection postTaskSection step5" style="display:none">
        <div class="container">
            <ul class="mobDotsSteps d-flex justify-content-between">
                <li class="completed"><span>1</span></li>
                <li class="completed"><span>2</span></li>
                <li class="completed"><span>3</span></li>
                <li class="completed"><span>4</span></li>
                <li class="active"><span>5</span></li>
            </ul>
            <div class="postStepsWidget text-center d-flex justify-content-between">
                <div class="postStepCol">                   
                    <p class="PostStepIcon centereditem">
                        <svg width="43" height="43" class="icon">
                            <use xlink:href="#service-step-icon" ></use>
                        </svg>
                    </p>
                    <p class="postLabel">Service</p>
                </div>
                <div class="postStepCol">                   
                    <p class="PostStepIcon centereditem">
                        <svg width="31" height="44" class="icon">
                            <use xlink:href="#address-step-icon" ></use>
                        </svg>
                    </p>
                    <p class="postLabel">Address</p>
                </div>
                <div class="postStepCol">                   
                    <p class="PostStepIcon centereditem">
                        <svg width="39" height="39" class="icon">
                            <use xlink:href="#time-step-icon" ></use>
                        </svg>
                    </p>
                    <p class="postLabel">Time</p>
                </div>
                <div class="postStepCol">                   
                    <p class="PostStepIcon centereditem">
                        <svg width="34" height="43" class="icon">
                            <use xlink:href="#details-step-icon" ></use>
                        </svg>
                    </p>
                    <p class="postLabel">Details</p>
                </div>
                <div class="postStepCol active">                   
                    <p class="PostStepIcon centereditem">
                        <svg width="42" height="47" class="icon">
                            <use xlink:href="#post-step-icon" ></use>
                        </svg>
                    </p>
                    <p class="postLabel">Post</p>
                </div>
            </div>
            <div class="stepSectionContet text-center">
                <h2>How would you like to be <span class="mobBlock">notified about quotes?</span></h2>
                <label class="label d-md-inline-block">Please select from the following options</label>
                <div class="customcheck customRadio drkbdr squareRadio f-18">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="quotes[]" id="quote-inlineRadio1" value="email">
                        <label class="form-check-label" for="quote-inlineRadio1">Email</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="quotes[]" id="quote-inlineRadio2" value="text">
                        <label class="form-check-label" for="quote-inlineRadio2">Text</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="quotes[]" id="quote-inlineRadio3" value="call">
                        <label class="form-check-label" for="quote-inlineRadio3">Service provider may call directly</label>
                      </div>                                 
                </div>

                
                <div class="form-group mt-4 mt-md-5 text-center">
                    <div class="wtframe d-inline-block customCheckbox boxShadow f-18">
                        <input type="checkbox" id="checkinput" class="customCheck" name="confirm_input" value="1">
                        <label for="checkinput" class="d-flex line-height mb-0">I certify that all of the information I have provided in this post is valid and correct.
                        </label>
                    </div>                  
                </div>
            </div>

            <p class="nextBtnSection text-center"><button type="button" class="btn btn-green btn-green-shadow btnLg step-btn step5-btn" data-next="complete" data-status="{{ $login_status }}" disabled>Post Task</button></p>
        </div>
    </section>
	</form>
    <!-- //How to Find a Pro for Your Project Section-->
	
	
	
    <!-- //How to Find a Pro for Your Project Section-->
@endsection
    