<!--Prices Modal -->
 <!--Filter Section for provider -->
 @if(Auth::user()->isServiceprovider())
  <div class="filterRight {{ Request::segment(2) }}">
      <div class="d-flex justify-content-between align-items-center filerhead mb-4">
          <h4>Filter By</h4>
          <a href="{{ route('provider-tasks-list')}}" class="text-green underlinelink">Reset Filter</a>
      </div>
      <form method="post" action="{{ route('provider-tasklist-filter')}}" class="filterForm">
         @csrf
		 
		 @if(Request::segment(2)=='provider-search-task')
			 <input type="hidden" name="search_task" value="1">
		 @endif
		 
		 <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
		 
          <div class="form-group">
            <label class="label">Category</label>
            <select name="services_cat" id="" class="form-control">
                <option value="">All</option>
				@foreach(get_services_category() as $services_cat)
				<option value="{{ $services_cat->id }}">{{ $services_cat->name }}</option>
				@endforeach
            </select>
        </div>
        <div class="form-group job-status">
            <label class="label">Job Status</label>
            <select name="job_status" id="" class="form-control">
                <option value="">Select</option>
                <option value="awaiting_ass">Awaiting Assignment</option>
                <option value="awaiting_ass_to_another">Assigned to Another Professional</option>
                <option value="progress">In Progress</option>
                <option value="complete">Completed</option>
            </select>
        </div>

        <div class="d-flex justify-content-between align-items-center">
            <a href="#" class="text-secondary underlinelink semiBold cancellink">Cancel</a>
            <button type="submit" class="btn btn-primary">Apply Filter</button>
        </div>
      </form>
  </div>
  @endif
  <!--------------------  Filter for customer  area-------------------->
   @if(Auth::user()->isCustomer())
  <div class="filterRight">
      <div class="d-flex justify-content-between align-items-center filerhead mb-4">
          <h4>Filter By</h4>
          <a href="{{ route('task-list')}}" class="text-green underlinelink">Reset Filter</a>
      </div>
      <form method="post" action="{{ route('user-tasklist-filter')}}" class="filterForm">
         @csrf
		 <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
		 
          <div class="form-group">
            <label class="label">Category</label>
            <select name="services_cat" id="" class="form-control">
                <option value="">All</option>
				@foreach(get_services_category() as $services_cat)
				<option value="{{ $services_cat->id }}">{{ $services_cat->name }}</option>
				@endforeach
            </select>
        </div>
        <div class="form-group">
            <label class="label">Job Status</label>
            <select name="job_status" id="" class="form-control">
                <option value="">Select</option>
				<option value="open">Open</option>
                <option value="awaiting_ass">Awaiting Assignment</option>
               <option value="progress">In Progress</option>
                <option value="complete">Completed</option>
            </select>
        </div>

        <div class="d-flex justify-content-between align-items-center">
            <a href="#" class="text-secondary underlinelink semiBold cancellink">Cancel</a>
            <button type="submit" class="btn btn-primary">Apply Filter</button>
        </div>
      </form>
  </div>
  
  @endif
  
  
  <!------------------------------------------------------------>
  

 <div class="modal fade notiModal" id="addnewModal" tabindex="-1" role="dialog" aria-labelledby="addnewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addnewModalLabel">Add New Card</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><img src="{{ url('/public/user/assets/images/popup-close.svg')}}" alt=""></span>
          </button>
        </div>
        <div class="modal-body">
           <form method="post" action="{{ route('add-payment-card')}}" class="add_payment_card">
		   @csrf
		   <input type="hidden" name="stripeToken4" value="{{ env('STRIPE_KEY') }}">
		   <input type="hidden"  name="user_id" value="{{ Auth::user()->id }}">
               <div class="row">
                   <div class="col-sm-12 form-group">
                       <label class="label">CardHolder Name</label>
                       <input type="text" name="card_holder_name" id="" class="form-control" required>
                   </div>
                   
                    
                    
                    <div class="col-sm-12 form-group">
                        <label class="label">Card Number</label>
                        <input type="text" name="card_number" id=""  maxlength="19" class="form-control card_number edit_card_number" placeholder="3672 6272 2282 1717" required >
                    </div>
                    <div class="col-sm-4 form-group">
                        <label class="label">Expiration</label>
                        <input type="text" name="exp" id="inputExpDate"  class="form-control card_exp edit_exp"  maxlength="5" placeholder="MM / YY"  required>
                    </div>
                    <div class="col-sm-4 form-group">
                        <label class="label">CVC</label>
                        <input type="text" name="cvc" id="" class="form-control edit_cvc" required>
                    </div>
					<div class="col-sm-4 form-group">
                        <label class="label">Zip</label>
                        <input type="text" name="zip" id="" class="form-control" required >
                    </div>
               </div>
			   <div class="loader_image" style="display:none;">
		      <img src="{{ url('/')}}/public/user/assets/images/loader.gif"  >
		   </div>
               <p class="text-center smlButton">
			   <button  type="submit" class="btn btn-green text-lato btnLg add_new_cards">Add </button></p>
           </form>
        </div>        
      </div>
    </div>
  </div>
  
  
  <!---------------------------  edit payment card  info ************------------->
  
  <div class="modal fade notiModal" id="editpaymentModal" tabindex="-1" role="dialog" aria-labelledby="addnewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addnewModalLabel">Edit Card</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><img src="{{ url('/public/user/assets/images/popup-close.svg')}}" alt=""></span>
          </button>
        </div>
        <div class="modal-body">
           <form method="post" action="{{ route('edit-payment-card')}}" class="edit_payment_card">
		   @csrf
		     <input type="hidden" name="stripeToken" value="" class="stripeToken">
		   <input type="hidden"  name="user_id" value="{{ Auth::user()->id }}">
		   <input type="hidden" name="id" id="edit_id">
               <div class="row">
                   <div class="col-sm-12 form-group">
                       <label class="label">CardHolder Name</label>
                       <input type="text" name="card_holder_name" id="card_holder_name" class="form-control" required>
                   </div>
                   
                   
                    
                    <div class="col-sm-12 form-group">
                        <label class="label">Card Number</label>
                        <input type="text" name="card_number" id="edit_card_number"  maxlength="19" class="form-control card_number edit_card_number" placeholder="3672 6272 2282 1717" required >
                    </div>
                    <div class="col-sm-4 form-group">
                        <label class="label">Expiration</label>
                        <input type="text" name="exp" id="edit_exp"  class="form-control card_exp edit_exp"  maxlength="5" placeholder="MM / YY"  required>
                    </div>
                    <div class="col-sm-4 form-group">
                        <label class="label">CVC</label>
                        <input type="text" name="cvc" id="edit_cvc" class="form-control edit_cvc" required>
                    </div>
					<div class="col-sm-4 form-group">
                        <label class="label">Zip</label>
                        <input type="text" name="zip" id="edit_zip" class="form-control" required >
                    </div>
               </div>
			   
			   <div class="loader_image" style="display:none;">
		      <img src="{{ url('/')}}/public/user/assets/images/loader.gif"  >
		   </div>
			   
               <p class="text-center smlButton">
			   <button  type="submit" class="btn btn-green text-lato  edit_payment_card btnLg">Edit</button></p>
           </form>
        </div>        
      </div>
    </div>
  </div>
  
  
  
  
  
  
  
  <!--Add Services Modal -->
<div class="modal fade notiModal" id="addServicesModal" tabindex="-1" role="dialog" aria-labelledby="addServicesModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addServicesModalLabel">Add Services</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><img src="{{ url('/public/user/assets/images/popup-close.svg') }}" alt=""></span>
          </button>
        </div>
        <div class="modal-body">
            <form action="" class="addServicesForm">
                <div class="customcheck customRadio squareRadio row">
				 @foreach(get_services_category() as $servicess)
				
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input servicesRadio1" type="checkbox" name="service_cat[]" id="servicesRadio{{ $servicess->id }}" data-id="{{ $servicess->id }}" data-name='{{$servicess->name }}' value="{{ $servicess->id }}">
                            <label class="form-check-label" for="servicesRadio{{ $servicess->id }}">{{ $servicess->name }}</label>
                        </div>
                    </div>
					@endforeach
				<div class="col-md-12 text-center">
                        <div class="form-check mb-3 pt-3">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="servicesRadioAll" value="option1">
                            <label class="form-check-label" for="servicesRadioAll">Add All Services</label>
                        </div>
                    </div>
                </div>                  
                <p class="text-center smlButton"><a href="#" class="btn btn-green text-lato btnLg insertservices">Add</a></p>
                
            </form>
           
        </div>        
      </div>
    </div>
  </div>

  <!--Edit Services Modal -->
<div class="modal fade notiModal" id="editServicesModal" tabindex="-1" role="dialog" aria-labelledby="editServicesModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editServicesModalLabel">Edit Services</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><img src="{{ url('/public/user/assets/images/popup-close.svg')}}" alt=""></span>
          </button>
        </div>
        <div class="modal-body">
            <form action="" class="addServicesForm">
                <div class="customcheck customRadio squareRadio row">
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions1" id="servicesRadio1" value="option1" checked>
                            <label class="form-check-label-1" for="servicesRadio1-1">Heating and Cooling Systems</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions1" id="servicesRadio2-1" value="option1" checked>
                            <label class="form-check-label" for="servicesRadio2-1">General Contracting</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions1" id="servicesRadio3-1" value="option1" checked>
                            <label class="form-check-label" for="servicesRadio3-1">Painting</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions1" id="servicesRadio4-1" value="option1">
                            <label class="form-check-label" for="servicesRadio4-1">Plumbing</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions1" id="servicesRadio5-1" value="option1">
                            <label class="form-check-label" for="servicesRadio5-1">Electric</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions1" id="servicesRadio6-1" value="option1" checked>
                            <label class="form-check-label" for="servicesRadio6-1">Roofing</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions1" id="servicesRadio7-1" value="option1">
                            <label class="form-check-label" for="servicesRadio7-1">Extermination &amp; Pest Control</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions1" id="servicesRadio8-1" value="option1">
                            <label class="form-check-label" for="servicesRadio8-1">Security &amp; Alarm</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions1" id="servicesRadio9-1" value="option1">
                            <label class="form-check-label" for="servicesRadio9-1">Design</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions1" id="servicesRadio10-1" value="option1">
                            <label class="form-check-label" for="servicesRadio10-1">Handyman</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions1" id="servicesRadio11-1" value="option1">
                            <label class="form-check-label" for="servicesRadio11-1">Flooring</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions1" id="servicesRadio12-1" value="option1">
                            <label class="form-check-label" for="servicesRadio12-1">Locksmith</label>
                        </div>
                    </div>

                    <div class="col-md-12 text-center">
                        <div class="form-check mb-3 pt-3">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions1" id="servicesRadioAll-1" value="option1">
                            <label class="form-check-label" for="servicesRadioAll-1">Add All Services</label>
                        </div>
                    </div>
                </div>                  
                <p class="text-center smlButton"><a href="#" class="btn btn-green text-lato btnLg">Add</a></p>
                
            </form>
           
        </div>        
      </div>
    </div>
  </div>

  <!--Add Services Modal -->
<div class="modal fade notiModal" id="addLocationModal" tabindex="-1" role="dialog" aria-labelledby="addLocationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addLocationModalLabel">Select Borough</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><img src="{{ url('/public/user/assets/images/popup-close.svg')}}" alt=""></span>
          </button>
        </div>
        <div class="modal-body">
              <form action="" class="addLocation">
                <div class="customcheck customRadio squareRadio row">
				 @foreach(get_location() as $location)
				
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input locationradio1" type="checkbox" name="service_cat[]" id="locationRadio{{ $location->id }}" data-id="{{ $location->id }}" data-name='{{$location->name }}' value="{{ $location->id }}">
                            <label class="form-check-label" for="locationRadio{{ $location->id }}">{{ $location->name }}</label>
                        </div>
                    </div>
					@endforeach
				<div class="col-md-12 text-center">
                        <div class="form-check mb-3 pt-3">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="locationRadioAll" value="option1">
                            <label class="form-check-label" for="locationRadioAll">Add All Location</label>
                        </div>
                    </div>
                </div>                  
                <p class="text-center smlButton"><a href="#" class="btn btn-green text-lato btnLg insertlocation">Add</a></p>
                
            </form>
           
        </div>        
      </div>
    </div>
  </div>
  

   <!--Delete Notification Modal -->
<div class="modal fade notiModal" id="deleteRowModal" tabindex="-1" role="dialog" aria-labelledby="deleteRowModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">       
        <div class="modal-body p-0">
            <div class="deleteContent text-center">
                <span class="deleteIcon centereditem mx-auto"><img src="{{ url('/public/user/assets/images/trash.svg')}}" alt=""></span>
                <h4>Want to delete</h4>
                <p class="notiMessage f-14 pb-2">Are you sure you want to delete this?</p>
                <p class="popupBTns mt-4">
                    <a href="#" class="btn btn-danger">Delete</a>
                    <a href="javascript:void(0)" class="btn btn-cancel" data-dismiss="modal" aria-label="Close">Cancel</a>
                </p>
            </div>
        </div>        
      </div>
    </div>
  </div>
  
  
  <!-- my profile popup-->
  
  <div class="modal fade notiModal" id="notificationModal" tabindex="-1" role="dialog" aria-labelledby="notificationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="notificationModalLabel">Notifications <span>(456)</span></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><img src="{{ url('/public/user')}}/assets/images/popup-close.svg" alt=""></span>
          </button>
        </div>
        <div class="modal-body p-0">
            <div class="notificationWidget">
                <div class="notificationRow d-flex align-items-center">
                    <div class="notiImage"><img src="{{ url('/public/user')}}/assets/images/noti-img.jpg" alt=""></div>
                    <div class="notiRight flex-grow-1">
                        <h3>Flooring</h3>
                        <p>A new provider has applied to a job you posted.</p>
                    </div>
                    <img src="{{ url('/public/user')}}/assets/images/dustbin.svg" alt="">
                </div>

                <div class="notificationRow d-flex align-items-center">
                    <div class="notiImage"><img src="{{ url('/public/user')}}/assets/images/noti-img.jpg" alt=""></div>
                    <div class="notiRight flex-grow-1">
                        <h3>Painting</h3>
                        <p>A new provider has applied to a job you posted.</p>
                    </div>
                    <img src="{{ url('/public/user')}}/assets/images/dustbin.svg" alt="">
                </div>

                <div class="notificationRow d-flex align-items-center">
                    <div class="notiImage"><img src="{{ url('/public/user')}}/assets/images/noti-img.jpg" alt=""></div>
                    <div class="notiRight flex-grow-1">
                        <h3>Flooring</h3>
                        <p>A new provider has applied to a job you posted.</p>
                    </div>
                    <img src="{{ url('/public/user')}}/assets/images/dustbin.svg" alt="">
                </div>
                <div class="notificationRow d-flex align-items-center">
                    <div class="notiImage"><img src="{{ url('/public/user')}}/assets/images/noti-img.jpg" alt=""></div>
                    <div class="notiRight flex-grow-1">
                        <h3>Flooring</h3>
                        <p>A new provider has applied to a job you posted.</p>
                    </div>
                    <img src="{{ url('/public/user')}}/assets/images/dustbin.svg" alt="">
                </div>

                <div class="notificationRow d-flex align-items-center">
                    <div class="notiImage"><img src="{{ url('/public/user')}}/assets/images/noti-img.jpg" alt=""></div>
                    <div class="notiRight flex-grow-1">
                        <h3>Painting</h3>
                        <p>A new provider has applied to a job you posted.</p>
                    </div>
                    <img src="{{ url('/public/user')}}/assets/images/dustbin.svg" alt="">
                </div>

                <div class="notificationRow d-flex align-items-center">
                    <div class="notiImage"><img src="{{ url('/public/user')}}/assets/images/noti-img.jpg" alt=""></div>
                    <div class="notiRight flex-grow-1">
                        <h3>Flooring</h3>
                        <p>A new provider has applied to a job you posted.</p>
                    </div>
                    <img src="{{ url('/public/user')}}/assets/images/dustbin.svg" alt="">
                </div>
                <div class="notificationRow d-flex align-items-center">
                    <div class="notiImage"><img src="{{ url('/public/user')}}/assets/images/noti-img.jpg" alt=""></div>
                    <div class="notiRight flex-grow-1">
                        <h3>Flooring</h3>
                        <p>A new provider has applied to a job you posted.</p>
                    </div>
                    <img src="{{ url('/public/user')}}/assets/images/dustbin.svg" alt="">
                </div>

                <div class="notificationRow d-flex align-items-center">
                    <div class="notiImage"><img src="{{ url('/public/user')}}/assets/images/noti-img.jpg" alt=""></div>
                    <div class="notiRight flex-grow-1">
                        <h3>Painting</h3>
                        <p>A new provider has applied to a job you posted.</p>
                    </div>
                    <img src="{{ url('/public/user')}}/assets/images/dustbin.svg" alt="">
                </div>

                <div class="notificationRow d-flex align-items-center">
                    <div class="notiImage"><img src="{{ url('/public/user')}}/assets/images/noti-img.jpg" alt=""></div>
                    <div class="notiRight flex-grow-1">
                        <h3>Flooring</h3>
                        <p>A new provider has applied to a job you posted.</p>
                    </div>
                    <img src="{{ url('/public/user')}}/assets/images/dustbin.svg" alt="">
                </div>
            </div>
        </div>        
      </div>
    </div>
  </div>
  <!--Notification Modal -->
<div class="modal fade notiModal" id="notificationModal" tabindex="-1" role="dialog" aria-labelledby="notificationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="notificationModalLabel">Notifications <span>(456)</span></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><img src="{{ url('/public/user')}}/assets/images/popup-close.svg" alt=""></span>
          </button>
        </div>
        <div class="modal-body p-0">
            <div class="notificationWidget">
                <div class="notificationRow d-flex align-items-center">
                    <div class="notiImage"><img src="{{ url('/public/user')}}/assets/images/noti-img.jpg" alt=""></div>
                    <div class="notiRight flex-grow-1">
                        <h3>Flooring</h3>
                        <p>A new provider has applied to a job you posted.</p>
                    </div>
                    <img src="{{ url('/public/user')}}/assets/images/dustbin.svg" alt="">
                </div>

                <div class="notificationRow d-flex align-items-center">
                    <div class="notiImage"><img src="{{ url('/public/user')}}/assets/images/noti-img.jpg" alt=""></div>
                    <div class="notiRight flex-grow-1">
                        <h3>Painting</h3>
                        <p>A new provider has applied to a job you posted.</p>
                    </div>
                    <img src="{{ url('/public/user')}}/assets/images/dustbin.svg" alt="">
                </div>

                <div class="notificationRow d-flex align-items-center">
                    <div class="notiImage"><img src="{{ url('/public/user')}}/assets/images/noti-img.jpg" alt=""></div>
                    <div class="notiRight flex-grow-1">
                        <h3>Flooring</h3>
                        <p>A new provider has applied to a job you posted.</p>
                    </div>
                    <img src="{{ url('/public/user')}}/assets/images/dustbin.svg" alt="">
                </div>
                <div class="notificationRow d-flex align-items-center">
                    <div class="notiImage"><img src="{{ url('/public/user')}}/assets/images/noti-img.jpg" alt=""></div>
                    <div class="notiRight flex-grow-1">
                        <h3>Flooring</h3>
                        <p>A new provider has applied to a job you posted.</p>
                    </div>
                    <img src="{{ url('/public/user')}}/assets/images/dustbin.svg" alt="">
                </div>

                <div class="notificationRow d-flex align-items-center">
                    <div class="notiImage"><img src="{{ url('/public/user')}}/assets/images/noti-img.jpg" alt=""></div>
                    <div class="notiRight flex-grow-1">
                        <h3>Painting</h3>
                        <p>A new provider has applied to a job you posted.</p>
                    </div>
                    <img src="{{ url('/public/user')}}/assets/images/dustbin.svg" alt="">
                </div>

                <div class="notificationRow d-flex align-items-center">
                    <div class="notiImage"><img src="{{ url('/public/user')}}/assets/images/noti-img.jpg" alt=""></div>
                    <div class="notiRight flex-grow-1">
                        <h3>Flooring</h3>
                        <p>A new provider has applied to a job you posted.</p>
                    </div>
                    <img src="{{ url('/public/user')}}/assets/images/dustbin.svg" alt="">
                </div>
                <div class="notificationRow d-flex align-items-center">
                    <div class="notiImage"><img src="{{ url('/public/user')}}/assets/images/noti-img.jpg" alt=""></div>
                    <div class="notiRight flex-grow-1">
                        <h3>Flooring</h3>
                        <p>A new provider has applied to a job you posted.</p>
                    </div>
                    <img src="{{ url('/public/user')}}/assets/images/dustbin.svg" alt="">
                </div>

                <div class="notificationRow d-flex align-items-center">
                    <div class="notiImage"><img src="{{ url('/public/user')}}/assets/images/noti-img.jpg" alt=""></div>
                    <div class="notiRight flex-grow-1">
                        <h3>Painting</h3>
                        <p>A new provider has applied to a job you posted.</p>
                    </div>
                    <img src="{{ url('/public/user')}}/assets/images/dustbin.svg" alt="">
                </div>

                <div class="notificationRow d-flex align-items-center">
                    <div class="notiImage"><img src="{{ url('/public/user')}}/assets/images/noti-img.jpg" alt=""></div>
                    <div class="notiRight flex-grow-1">
                        <h3>Flooring</h3>
                        <p>A new provider has applied to a job you posted.</p>
                    </div>
                    <img src="{{ url('/public/user')}}/assets/images/dustbin.svg" alt="">
                </div>
            </div>
        </div>        
      </div>
    </div>
  </div>

<!--Add New Address Modal -->
<div class="modal fade notiModal" id="addAddressModal" tabindex="-1" role="dialog" aria-labelledby="addAddressModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addAddressModalLabel">Add new Address</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><img src="{{ url('/public/user')}}/assets/images/popup-close.svg" alt=""></span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('address')}}" class="addLocationForm text-lato">
			@csrf
                <div class="form-group">
                    <select class="form-control" name="address_type" required>
                        <option value="">Select address type</option>
						<option value="residential">Residential</option>
						<option value="commercial">Commercial</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" name="address" id="business_address_add" class="form-control" placeholder="Address" required >
                </div>  
                <div class="form-group">
                    <input type="text" name="apartment" id="" class="form-control" placeholder="Apt/Unit" >
                </div>  
                <p class="text-center mt-5 smlButton">
				<button type="submit" class="btn btn-green text-lato btnLg">Add</button>
				</p>
                
            </form>
           
        </div>        
      </div>
    </div>
  </div>
  
  
  <!--- Post task address -------------------->
  
  <div class="modal fade notiModal" id="addAddressModal2" tabindex="-1" role="dialog" aria-labelledby="addAddressModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addAddressModalLabel">Add new Address</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><img src="{{ url('/public/user')}}/assets/images/popup-close.svg" alt=""></span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('address')}}" class="addLocationForm2 text-lato">
			@csrf
                <div class="form-group">
                    <select class="form-control" name="address_type" required>
                        <option value="">Select address type</option>
						<option value="residential">Residential</option>
						<option value="commercial">Commercial</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" name="address" id="business_address_add2" class="form-control" placeholder="Address" required >
                </div>  
                <div class="form-group">
                    <input type="text" name="apartment" id="" class="form-control" placeholder="Apt/Unit" >
                </div>  
                <p class="text-center mt-5 smlButton">
				<button type="submit" class="btn btn-green text-lato btnLg">Add</button>
				</p>
                
            </form>
           
        </div>        
      </div>
    </div>
  </div>
  
  
  
  <!-- edit address  -->
  
  <!--Add New Address Modal -->
<div class="modal fade notiModal" id="editAddressModal" tabindex="-1" role="dialog" aria-labelledby="addAddressModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addAddressModalLabel">Edit new Address</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><img src="{{ url('/public/user')}}/assets/images/popup-close.svg" alt=""></span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('address_update')}}" class="editLocationForm text-lato">
			@csrf
			<input type="hidden" name="id" class="edit_id" value="">
			
                <div class="form-group">
                    <select class="form-control address_type_edit" name="address_type" required>
                        <option value="">Select address type</option>
						<option value="residential">Residential</option>
						<option value="commercial">Commercial</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" name="address" id="business_address_edit" class="form-control address_edit" placeholder="Address" required >
                </div>  
                <div class="form-group">
                    <input type="text" name="apartment" id="" class="form-control apartment_edit" placeholder="Apartment" >
                </div>  
                <p class="text-center mt-5 smlButton">
				<button type="submit" class="btn btn-green text-lato btnLg">Update</button>
				</p>
                
            </form>
           
        </div>        
      </div>
    </div>
  </div>

  <!--License Modal -->
<div class="modal fade notiModal" id="newLicenceModal" tabindex="-1" role="dialog" aria-labelledby="newLicenceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="newLicenceModalLabel">Add new License</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><img src="{{url('/public/user')}}/assets/images/popup-close.svg" alt=""></span>
          </button>
        </div>
        <div class="modal-body">
           <form class="addLicenseForm"  action="{{ route('addlicenseform')}}">
		   @csrf
		   <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
               <div class="row">
                   <div class="col-sm-6 form-group">
                       <label class="label">License Title <span class="req float-right">*</span></label>
                       <input type="text" name="license_title" id="license_title" class="form-control license_title" required>
                   </div>
                   <div class="col-sm-6 form-group">
                        <label class="label">License Number<span class="req float-right">*</span></label>
                        <input type="text" name="license_number" id="license_number" class="form-control license_number" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label class="label">Issued By<span class="req float-right">*</span></label>
                        <input type="text" name="issued_by" id="issued_by" class="form-control issued_by" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label class="label">License Expiry Date <span class="req float-right">*</span></label>
                        <input type="text" name="license_exp_date" id="license_exp_date" class="form-control license_exp_date" placeholder="MM/DD/YY" required>
                    </div>
                    <div class="col-sm-12 form-group">
                        <div class="title-Section d-flex align-items-center flex-wrap">
                            <label class="label d-block">Additional Information <span class="req float-right">*</span></label>
                            <a href="javascript:void(0)" class="ml-auto text-primary formInfo license_description_count"><span>200</span> Character Left</a>
                        </div>
                        <textarea name="license_description" id="license_description" cols="30" rows="5" class="form-control license_description" required></textarea>
                    </div>
                    <div class="col-sm-12 form-group">
                        <label class="label">Upload License Image <span class="req float-right">*</span></label>
                        
						<div class="d-md-flex justify-content-center popupBrowse">
						<div class="license_imagee"></div>
                            <div class="text-center coverImageWrap centereditem gray-frame border-radius-5 flex-column ">
                                <p class="mb-2">Drag &amp; Drop Image</p>
                                <p class="position-relative"><a href="javascript:void(0)" class="btn order-lg-3 btn-primary btn-sm ml-auto minW-auto">Browse</a>
                                <input type="file" name="license_image" id="" class="invisibleInput license_image" onchange="license_imagee(this)" required></p>
                            </div>
                        </div>
                    </div>
               </div>
               <p class="text-center smlButton"><button class="btn btn-green text-lato btnLg" type="submit">Add </button></p>
           </form>
        </div>        
      </div>
    </div>
  </div>

<!-- edit location --->

 <!--License Modal -->
<div class="modal fade notiModal" id="editLicenceModal" tabindex="-1" role="dialog" aria-labelledby="newLicenceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="newLicenceModalLabel">edit new License</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><img src="{{url('/public/user')}}/assets/images/popup-close.svg" alt=""></span>
          </button>
        </div>
        <div class="modal-body">
           <form class="editLicenseForm"  action="{{ route('update-business-license')}}">
		   @csrf
		   <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
		   <input type="hidden" name="id" value="" class="bl_id">
               <div class="row">
                   <div class="col-sm-6 form-group">
                       <label class="label">License Title <span class="req float-right">*</span></label>
                       <input type="text" name="license_title" id="license_title" class="form-control license_title" required>
                   </div>
                   <div class="col-sm-6 form-group">
                        <label class="label">License Number<span class="req float-right">*</span></label>
                        <input type="text" name="license_number" id="license_number" class="form-control license_number" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label class="label">Issued By<span class="req float-right">*</span></label>
                        <input type="text" name="issued_by" id="issued_by" class="form-control issued_by" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label class="label">License Expiry Date <span class="req float-right">*</span></label>
                        <input type="text" name="license_exp_date" id="license_exp_date_edit" class="form-control license_exp_date" placeholder="MM/DD/YY" required>
                    </div>
                    <div class="col-sm-12 form-group">
                        <div class="title-Section d-flex align-items-center flex-wrap">
                            <label class="label d-block">Additional Information <span class="req float-right">*</span></label>
                            <a href="javascript:void(0)" class="ml-auto text-primary formInfo"><span>200</span> Character Left</a>
                        </div>
                        <textarea name="license_description" id="license_description" cols="30" rows="5" class="form-control" required></textarea>
                    </div>
                    <div class="col-sm-12 form-group">
                        <label class="label">Upload License Image <span class="req float-right">*</span></label>
                        
						<div class="d-md-flex justify-content-center popupBrowse">
						<div class="license_imagee"></div>
                            <div class="text-center coverImageWrap centereditem gray-frame border-radius-5 flex-column ">
                                <p class="mb-2">Drag &amp; Drop Image</p>
                                <p class="position-relative"><a href="javascript:void(0)" class="btn order-lg-3 btn-primary btn-sm ml-auto minW-auto">Browse</a>
                                <input type="file" name="license_image" id="" class="invisibleInput license_image" onchange="license_imagee_edit(this)" ></p>
                            </div>
                        </div>
                    </div>
               </div>
               <p class="text-center smlButton"><button class="btn btn-green text-lato btnLg" type="submit">update </button></p>
           </form>
        </div>        
      </div>
    </div>
  </div>

<!---------------------    portfolio details ------------------------->
<!--Prices Modal -->
<div class="modal fade notiModal" id="newPortfolioModal" tabindex="-1" role="dialog" aria-labelledby="newPortfolioModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="newPortfolioModalLabel">Add new Portfolio</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><img src="{{ url('/public/user')}}/assets/images/popup-close.svg" alt=""></span>
          </button>
        </div>
        <div class="modal-body">
           <form class="addPortfolioForm" action="{{ route('add-portfolio')}}">
		   @csrf
		   <input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
               <div class="row">
                   <div class="col-sm-6 form-group">
                       <label class="label">Portfolio Title <span class="req float-right">*</span></label>
                       <input type="text" name="portfolio_title" id="portfolio_title" class="form-control" required>
                   </div>
                   <div class="col-sm-6 form-group">
                        <label class="label">Location <span class="req float-right">*</span></label>
                        <input type="text" name="location" id="location" class="form-control" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label class="label">Cost <span class="req float-right">*</span></label>
                        <input type="text" name="cost" id="cost" class="form-control" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label class="label">Completion Date <span class="req float-right">*</span></label>
                        <input type="text" name="completion_date" id="completion_date" class="form-control" placeholder="MM/DD/YY" required>
                    </div>
                    <div class="col-sm-12 form-group">
                        <div class="title-Section d-flex align-items-center flex-wrap">
                            <label class="label d-block">Description <span class="req float-right">*</span></label>
                            <span class="ml-auto text-primary formInfo p_description_count"><span>200</span> Character Left</span>
                        </div>
                        <textarea name="description" id="p_description" cols="30" rows="5" class="form-control" required></textarea>
                    </div>
                    <div class="col-sm-12 form-group">
                        <label class="label">Portfolio Images <span class="req float-right">*</span></label>
                        <div class="row popupBrowse">
                            <div class="col-sm-12 form-group">
                                
									 <div class="input-images-1" style="padding-top: .5rem;"></div>
                              
                            </div>

                          
                           
                        </div>
                    </div>
               </div>
               <p class="text-center smlButton"><button class="btn btn-green text-lato btnLg">Add</button></p>
           </form>
        </div>        
      </div>
    </div>
  </div>


<!--Prices Modal -->
<div class="modal fade notiModal" id="editPortfolioModal" tabindex="-1" role="dialog" aria-labelledby="newPortfolioModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="newPortfolioModalLabel">Edit Portfolio</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><img src="{{ url('/public/user')}}/assets/images/popup-close.svg" alt=""></span>
          </button>
        </div>
        <div class="modal-body">
           <form class="editPortfolioForm" action="{{ route('update-portfolio')}}">
		    @csrf
			<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
		    <input type="hidden" name="id" class="p_id">
               <div class="row">
                   <div class="col-sm-6 form-group">
                       <label class="label">Portfolio Title</label>
                       <input type="text" name="portfolio_title" id="portfolio_title" class="form-control portfolio_title" required>
                   </div>
                   <div class="col-sm-6 form-group">
                        <label class="label">Location</label>
                        <input type="text" name="location" id="location" class="form-control p_location" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label class="label">Cost</label>
                        <input type="text" name="cost" id="cost" class="form-control p_cost" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label class="label">Completion Date</label>
                        <input type="text" name="completion_date" id="completion_date" class="form-control p_completion_date" placeholder="MM/DD/YY" required>
                    </div>
                    <div class="col-sm-12 form-group">
                        <div class="title-Section d-flex align-items-center flex-wrap">
                            <label class="label d-block">Description</label>
                            <span class="ml-auto text-primary formInfo"><span>200</span> Character Left</span>
                        </div>
                        <textarea name="description" id="" cols="30" rows="5" class="form-control p_description" required></textarea>
                    </div>
                    <div class="col-sm-12 form-group">
                        <label class="label">Portfolio Images</label>
                        <div class="row popupBrowse">
						<div class="col-md-12">
                           <div class="input-images-6" style="padding-top: .5rem;"></div>
                           </div>
                        </div>
                    </div>
               </div>
               <p class="text-center smlButton"><button class="btn btn-green text-lato btnLg">Update</button></p>
           </form>
        </div>        
      </div>
    </div>
  </div>

 <!--View All images Modal -->
<div class="modal fade projectDetailsPopup portfolio_view" id="projectDetailsModal" tabindex="-1" role="dialog" aria-labelledby="projectDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <button type="button" class="close rightClosebtn centereditem" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="centereditem"><img src="{{ url('/public/user')}}/assets/images/popup-close.svg" alt=""></span>
        </button>
        <div class="modal-body p-0">
            <div class="d-md-flex projectWrapDetails">
                <div class="projectDetailsLeft">
                    <div id='carousel-custom' class='carousel slide' data-ride='carousel'>
                        <!-- Wrapper for slides -->
                        <div class='carousel-inner'>
						<div class="carousel-inner-image">
                            <div class='carousel-item active'>
                                <img src='{{ url("/public/user")}}/assets/images/projectPic.jpg' alt='' />
                            </div>
                            <div class='carousel-item'>
                                <img src='{{ url("/public/user")}}/assets/images/projectPic.jpg' alt='' />
                            </div>
                            <div class='carousel-item'>
                                <img src='{{ url("/public/user")}}/assets/images/projectPic.jpg' alt='' />
                            </div>
                                
                            <div class='carousel-item'>
                                <img src='{{ url("/public/user")}}/assets/images/projectPic.jpg' alt='' />
                            </div>
                            <div class='carousel-item'>
                                <img src='{{ url("/public/user")}}/assets/images/projectPic.jpg' alt='' />
                            </div>
                           </div>
                            
                            <!-- Controls -->
                            <a class='left carousel-control' href='#carousel-custom' data-slide='prev'>
                                <span class='glyphicon glyphicon-chevron-left'></span>
                            </a>
                            <a class='right carousel-control' href='#carousel-custom' data-slide='next'>
                                <span class='glyphicon glyphicon-chevron-right'></span>
                            </a>
                            
                        </div>   
                    <!-- Indicators -->
                    <ol class='carousel-indicators'>
                        <li data-target='#carousel-custom' data-slide-to='0' class='active'><img src='{{ url("/public/user")}}/assets/images/projectPicThumb.jpg' alt='' /></li>
                        <li data-target='#carousel-custom' data-slide-to='1'><img src='{{ url("/public/user")}}/assets/images/projectPicThumb.jpg' alt='' /></li>
                        <li data-target='#carousel-custom' data-slide-to='2'><img src='{{ url("/public/user")}}/assets/images/projectPicThumb.jpg' alt='' /></li>
                        <li data-target='#carousel-custom' data-slide-to='3'><img src='{{ url("/public/user")}}/assets/images/projectPicThumb.jpg' alt='' /></li>
                        <li data-target='#carousel-custom' data-slide-to='4'><img src='{{ url("/public/user")}}/assets/images/projectPicThumb.jpg' alt='' /></li>
                    </ol>
                </div>
                </div><!--/Left-->
                <div class="projectDetailsRight">
                    <div class="listDetailsBox noShadow">
                        <div class="listDetailsRow d-flex justify-content-between">
                            <div class="listDetailsLeft">
                                <label>Title </label>
                                <p class="port_title">Portfolio 1</p>
                            </div>
                            <div class="listDetailsRight text-right">
                                <label>Completion Date</label>
                                <p class="port_date">09/22/20</p>
                            </div>
                        </div>
                        <div class="listDetailsRow d-flex justify-content-between">
                            <div class="listDetailsLeft">
                                <label>Location </label>
                                <p class="port_loc">New York</p>
                            </div>
                            <div class="listDetailsRight text-right">
                                <label>Price</label>
                                <p class="port_price">$34.56</p>
                            </div>
                        </div>
                        <div class="listTopRow mb-0">
                            <label>Description</label>
                            <p class="normalFont port_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consquat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum doore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, unt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                   </div>
                </div><!--/Right-->
            </div>
        </div>
        </div>        
      </div>
    </div>
<!--- license  popup image ------------------>
 <!--View All images Modal -->
<div class="modal fade imageSlidePopup" id="viewAllImagesModal" tabindex="-1" role="dialog" aria-labelledby="viewAllImagesModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <button type="button" class="close rightClosebtn centereditem" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="centereditem"><img src="{{ url('/public/user')}}/assets/images/popup-close.svg" alt=""></span>
        </button>
        <div class="modal-body">
            <div id="carouselExample" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  
                
                </div>
                <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
        </div>        
      </div>
    </div>
	
	
<!--- -->
<div class="modal fade imageSlidePopup" id="viewlicenseModal" tabindex="-1" role="dialog" aria-labelledby="viewAllImagesModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <button type="button" class="close rightClosebtn centereditem" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="centereditem"><img src="{{ url('/public/user')}}/assets/images/popup-close.svg" alt=""></span>
        </button>
        <div class="modal-body">
            <div id="carouselExample" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner viewlicenseModal_img">
                  
                
                </div>
                <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
        </div>        
      </div>
    </div>	
	
	
<!---- Notification  delete ------->	
	<div class="modal fade notiModal noheader" id="deletenotificationModal" tabindex="-1" role="dialog" aria-labelledby="deletenotificationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">         
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><img src="{{ url('/public/user')}}/assets/images/popup-close.svg" alt=""></span>
          </button>
        </div>
        <div class="modal-body p-0">
            <div class="deleteContent text-center">
                <span class="deleteIcon centereditem mx-auto"><img src="{{ url('/public/user')}}/assets/images/tickVector.svg" alt=""></span>
                <h4>Good Job</h4>
                <p class="notiMessage f-14">Category deleted successfully</p>
            </div>
        </div>        
      </div>
    </div>
  </div>
<!--Status Mark Task as Completed Modal -->
<div class="modal fade notiModal" id="markCompletedModal" tabindex="-1" role="dialog" aria-labelledby="markCompletedModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
      <div class="modal-content">
	  <form method="post" class="markCompletedModalForm" action="{{ route('u-markCompletedjob')}}">
	    @csrf
        <input type="hidden" name="user_id" class="com_user_id">
       <input type="hidden"  name="task_id" class="com_task_id">		
        <div class="modal-header">
		
          <h5 class="modal-title" id="markCompletedModalLabel">Status</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><img src="{{ url('/public/user')}}/assets/images/popup-close.svg" alt=""></span>
          </button>
        </div>
        <div class="modal-body">
           <div class="text-center">
               <p class="mb-3">Mark Task as Completed</p>
               <p><button type="submit" class="btn btn-green-outline text-lato btn-sm">Mark as Completed</button></p>
           </div>
        </div>
    </form>        
      </div>
    </div>
  </div>


<!--Apply to Job Modal -->
<div class="modal fade notiModal" id="applyJobModal" tabindex="-1" role="dialog" aria-labelledby="applyJobModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
      <div class="modal-content">
	  <form method="post" action="{{ route('apply-task')}}">
	   @csrf
	   
	   @php
	   $user_id=Auth::user()->id;
         $card=get_payment_card_history($user_id);	
       $d_class='';		 
	   if(empty($card)){
		   $d_class='disabled';
	   }
	   @endphp
	   
	   <input type="hidden" name="user_id" class="class_user_id" >
	   <input type="hidden" name="id" class="class_id">
	   <input type="hidden" name="action" value="applyjob">
        <div class="modal-header">
          <h5 class="modal-title" id="applyJobModalLabel">Apply to Job</h5>
		  
		 
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
            <span aria-hidden="true"><img src="{{ url('/')}}/public/user/assets/images/popup-close.svg" alt=""></span>
          </button>
        </div>
        <div class="modal-body">
<div class="message"></div>		
           <div class="row mx-0">
		   @if(!empty($card))
		   
                <div  class="form-group col-md-12  p-0">
	   <label></label>
	   <select name="card_info" class="form-control" required>
	     <option value="">Select card</option>
		 
		 @foreach($card as $card)
		  <option value="{{$card['customer_id']}}" @if($card['default_card']==1) selected @endif >XXXX XXXX XXXX {{ $card['card'] }}</option>		 
		 @endforeach
		
		 
		 
	   </select>
	   </div>
	   @else
		  <div class="alert alert-danger">Please add the card first</div> 
	    @endif

		   
               <div class="JobDetailsItms form-group30 text-center jobPriceSec ">
                    <label class="label">Price</label>
                    <p class="Bold">$10</p>
               </div>
               <div class="ml-auto d-flex align-items-center form-group30"><a href="{{ route('provider-payment-information')}}" class="text-primary underlinelink" target="_blank">Payment Settings</a></div>
           </div>
           
		   <div class="loader_image" style="display:none;">
		      <img src="{{ url('/')}}/public/user/assets/images/loader.gif"  >
		   </div>
		   
		   
           <button class="btn btnLg btn-green btn-secondary-shadow w-100 applyJobModal" type="submit" {{ $d_class }}>Apply Now</button>

        </div>  
      </form>
		
      </div>
    </div>
  </div>
  
  
  
  <!--Add Review Modal -->
<div class="modal fade notiModal" id="addReviewModal" tabindex="-1" role="dialog" aria-labelledby="addReviewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addReviewModalLabel">Add Review</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><img src="{{ url('/public/user')}}/assets/images/popup-close.svg" alt=""></span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('add-reviews')}}" class="addRatingForm">
			@csrf
			<input type="hidden"  name="user_id" class="rev_user_id">
			<input type="hidden"  name="task_id" class="rev_task_id">
			
                <div class="form-group">
                    <label class="text-lato" for="">Ratings</label>
                     <input id="input-21b" value="0"  name="rating" type="text" class="rating" data-theme="krajee-fas" data-min=0 data-max=5 data-step=0.2 data-size="xm"
               required title="">
                </div>
                <div class="form-group">
                    <label class="text-lato" for="reviewMessage">Review</label>
                    <textarea   name="comment"  id="reviewMessage" cols="20" rows="5" class="form-control" required ></textarea>
                </div>                           
                <p class="text-center"><button type="submit" class="btn btn-green text-lato btn-sm">Save</button></p>
                
            </form>
           
        </div>        
      </div>
    </div>
  </div>



   <!--Delete Notification Modal -->
<div class="modal fade notiModal" id="invalidlocation" tabindex="-1" role="dialog" aria-labelledby="deleteRowModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">       
        <div class="modal-body p-0">
            <div class="deleteContent text-center">
                <!-- <span class="deleteIcon centereditem mx-auto"><img src="{{ url('/public/user/assets/images/i.svg')}}" alt=""></span> -->
                <span class="deleteIcon centereditem mx-auto sadIcon"><i class="far fa-frown-open"></i></span>
                <h4>Oops!</h4>
                <p class="notiMessage f-14 pb-2">Add Your Service location in NYC only.</p>
                <p class="popupBTns mt-4">
                    
                    <a href="javascript:void(0)" class="btn btn-primary" data-dismiss="modal" aria-label="Close">OK</a>
                </p>
            </div>
        </div>        
      </div>
    </div>
  </div>