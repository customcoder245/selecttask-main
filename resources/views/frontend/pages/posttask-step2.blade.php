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

    <!--How to Find a Pro for Your Project Section-->
    <section class="section servicesTopSection postTaskSection">
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
                        <select class="form-control">
                            <option>Select Address Type</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group30">
                        <input type="text" name="" id="" class="form-control" placeholder="Address">
                    </div>
                    <div class="col-md-4 form-group30">
                        <input type="text" name="" id="" class="form-control" placeholder="Apartment No">
                    </div>
                </div>
            </div>

            <p class="nextBtnSection text-center"><a href="#" class="btn btn-green btn-green-shadow btnLg"  data-toggle="modal" data-target="#taskAddressModal">Next</a></p>
        </div>
    </section>
    <!-- //How to Find a Pro for Your Project Section-->

    @endsection