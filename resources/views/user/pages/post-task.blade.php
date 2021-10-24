@extends('user.layout.app')
@section('content')
        <div class="contentArea">
           
            <!--Post task form-->
            <div class="sectionRow profileVH editProfileMode">
                <div class="titleRow d-flex justify-content-between align-items-center mb-md-4">
                    <h2 class="title-head">Post a task</h2>
                </div> 
                <form method="post" action="{{  route('post-task')}}" enctype="multipart/form-data" class="post_task">
				@csrf
                <div class="postTask-Widget">
                    <div class="postTaskRows">
                        <div class="postTaskRow">
                            <div class="postTaskHead d-flex align-items-center">
                                <span class="postTaskRowCount d-inline-flex justify-content-center align-items-center text-lato">1</span>
                                <span class="postTaskIcon"><img src="{{ url('/public/user')}}/assets/images/category-icon.svg" alt=""></span>
                                <h4>Category</h4>
                            </div>
                            <div class="row">
                                <div class="col-lg-5 col-md-6 form-group">
                                    <label class="label text-lato">Select Service Category <span>*</span></label>
                                    <select class="form-control f-14" name="category" required>
                                        <option value="">Choose category</option>
										
									@foreach(get_services_category() as $service_cat)
										<option value="{{ $service_cat->id }}"> {{ $service_cat->name }}</option>
										@endforeach
                                    </select>
                                </div>                               
                            </div>
                        </div><!-- //Category-->

                        <div class="postTaskRow">
                            <div class="postTaskHead d-flex align-items-center">
                                <span class="postTaskRowCount d-inline-flex justify-content-center align-items-center text-lato">2</span>
                                <span class="postTaskIcon"><img src="{{ url('/public/user')}}/assets/images/address-icon.svg" alt=""></span>
                                <h4>Address <span>*</span></h4>
                                <a href="javascript:void(0)" class="btn bordered-btn text-lato ml-auto add_new_address" data-toggle="modal" data-target="#addAddressModal2">Add New Address</a>
                            </div>
							@php 
							$address=get_address();
						    
							@endphp
							
                            <div class="row">
                                <div class="col-lg-5 col-md-6 form-group">
                                    <select class="form-control f-14 choose_address" name="address" required>
                                        <option value="">Choose address</option>
										@foreach($address as $address)
										<option value="{{ $address->id }}">{{ $address->address}} @if(!empty($address->apartment))-{{ $address->apartment}} @endif</option>
										@endforeach
                                    </select>
                                </div>
                               
                            </div>
                        </div><!-- //Address-->

                        <div class="postTaskRow">
                            <div class="postTaskHead d-flex align-items-center">
                                <span class="postTaskRowCount d-inline-flex justify-content-center align-items-center text-lato">3</span>
                                <span class="postTaskIcon"><img src="{{ url('/public/user')}}/assets/images/clock-icon.svg" alt=""></span>
                                <h4>Preferred time to get the job done</h4>
                            </div>
                            
                            <div class="customcheck customRadio squareRadio">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="preferred_time" id="inlineRadio1" value="1">
                                    <label class="form-check-label" for="inlineRadio1">Within the next 24 hours</label>
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
                                    <input class="form-check-input" type="radio" name="preferred_time" id="inlineRadio4" value="4" >
                                    <label class="form-check-label" for="inlineRadio4">Preferred time</label>
                                    <div class="timePopup">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <p class="dateCol relative"><input type="text"  name="start_time" id="date1" placeholder="MM/DD/YY" class="form-control"><img src="assets/images/calendar.svg" alt=""></p>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="dateCol relative">
												<select name="end_time"class="form-control">
												@foreach(get_timestamp_option() as $time_stamp)
												<option value="{{ $time_stamp }}">{{ $time_stamp }}</option>
												@endforeach
												
												<select>
												</p>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                            </div>
                        </div><!-- //Preferred time to get the job done-->

                        <div class="postTaskRow">
                            <div class="postTaskHead d-flex align-items-center">
                                <span class="postTaskRowCount d-inline-flex justify-content-center align-items-center text-lato">4</span>
                                <span class="postTaskIcon"><img src="{{ url('/public/user')}}/assets/images/add-details.svg" alt=""></span>
                                <h4>Add Details</h4>
                            </div>

                            <div class="row">
                                <div class="col-md-5 form-group">
                                    <label class="label text-lato">Add Description</label>
                                    <textarea class="form-control f-14 h200" name="description"></textarea>
                                </div>
                                <div class="col-md-7 col-xl-6 offset-xl-1 form-group">
                                    <label class="label text-lato">Add Images</label>
                                    <div class="input-images-1">
                                       
                                        
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div><!-- //Add Details-->

                        <div class="postTaskRow">
                            <div class="postTaskHead d-flex align-items-center">
                                <span class="postTaskRowCount d-inline-flex justify-content-center align-items-center text-lato">5</span>
                                <span class="postTaskIcon"><img src="{{ url('/public/user')}}/assets/images/bell-icon.svg" alt=""></span>
                                <h4>How would you like to receive quotes?</h4>
                            </div>
                            
                            <div class="customcheck customRadio squareRadio">
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
                        </div><!-- //How would you like to receive quotes?-->

                    </div>

                    <div class="form-group mt-4 mt-md-5 text-center">
                        <div class="wtframe d-inline-block text-lato customCheckbox">
                            <input type="checkbox" id="confirm_input" value="on" name="confirm_input" class="customCheck">
                            <label for="confirm_input" class="d-flex line-height mb-0">I confirm that all details provided are true.</label>
                        </div>
                        <div class="formbtns mt-3">
                            <button class="btn btn-green btnLg btn-green-shadow post_task_submit">Submit</button>
                        </div>
                    </div>

                </div>
				</form>
            </div>
            <!-- //Post task form-->

        </div>
        <!--//Right Content-->
		@endsection