  @extends('frontend.layout.app')
@section('content')
 <!-- Banner Section -->
    <section class="banner innerbanner helpSupport-Banner">
        <div class="container">
            <div class="row align-items-md-center">
                <div class="col-md-7">
                    <div class="detail wow bounceInLeft" data-wow-delay="0.1s"> 
                        <img src="{{ url('/public/frontend')}}/assets/images/help-support/banner-icon.svg" alt="" class="bannerIcon">                      
                        <h2>Help &amp; Support</h2>
                        <div class="bannerContent">                           
                            <p>Contact us as Customer or Professional, <span class="d-block">We are here to help you 24/7</span></p>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //Banner Section -->

    <!--How to Find a Pro for Your Project Section-->
    <section class="section servicesTopSection postTaskSection">
        <div class="container container1140">
            <ul class="helpLinks d-md-flex nav nav-tabs" id="myTab" role="tablist">
                <li><a  class="active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Help for Professionals</a></li>
                <li><a id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Help for Customers</a></li>
            </ul>
            <div class="tab-content" id="myTabContent">
			  
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                   <form method="post" action="{{ route('help-profession')}}" class="help_profession">                   
				     @csrf
				   <h2 class="mobTitle">Help for Professionals</h2>
                    <div class="row helpFormRow">
                        <div class="col-md-6 formGroup50">
                            <label class="form-label">First Name</label>
                            <input type="text" name="first_name" id="" class="form-control" placeholder="First Name" required>
                        </div>
                        <div class="col-md-6 formGroup50">
                            <label class="form-label">Last Name</label>
                            <input type="text" name="last_name" id="" class="form-control" placeholder="Last Name" required>
                        </div>

                        <div class="col-md-6 formGroup50">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" id="" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="col-md-6 formGroup50">
                            <label class="form-label">Phone</label>
                            <input type="text" name="phone" id="" class="form-control phone_number" placeholder="Phone" required>
                        </div>
                        <div class="col-md-12 formGroup50">
                            <label class="form-label">Select Subject</label>
                            <select class="form-control" name="subject" required>
                                <option value="">Select Subject</option>
								<option value="Billing">Billing</option>
                                <option value="Account Set Up">Account Set Up</option>
                                <option value="General Questions">General Questions</option>
                                <option value="Feedback or Suggestions">Feedback or Suggestions</option>
                                <option value="Other"> Other</option>
                            </select>
                        </div>
                        <div class="col-md-12 formGroup50">
                            <label class="form-label">Tell us your problem</label>
                            <textarea name="problem" id="" cols="30" rows="10" class="form-control" placeholder="Tell us your problem" required></textarea>
                        </div>

                        <div class="col-md-12">
                            <p class="fullWBtn"><center><button type="submit" class="btn btn-primary btn-primary-shadow btnLg">Submit</button></center></p>
                        </div>
                    </div>
                </form>
				</div>
				
         
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                     <form method="post" action="{{ route('help-customer')}}" class="help_customer">        
					
					  @csrf
					<h2 class="mobTitle">Help for Customers</h2>
                    <div class="row helpFormRow">
                        <div class="col-md-6 formGroup50">
                            <label class="form-label">First Name</label>
                            <input type="text" name="first_name" id="" class="form-control" placeholder="First Name" required>
                        </div>
                        <div class="col-md-6 formGroup50">
                            <label class="form-label">Last Name</label>
                            <input type="text" name="last_name" id="" class="form-control" placeholder="Last Name" required>
                        </div>

                        <div class="col-md-6 formGroup50">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" id="" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="col-md-6 formGroup50">
                            <label class="form-label">Phone</label>
                            <input type="text" name="phone" id="" class="form-control phone_number" placeholder="Phone" required>
                        </div>
                        <div class="col-md-12 formGroup50">
                            <label class="form-label">Select Subject</label>
                            <select class="form-control" name="subject" required>
                                <option value="">Select Subject</option>
								<option value="Task Posting Help">Task Posting Help</option>
                                <option value="General Questions">General Questions</option>
                                <option value="Feedback or Suggestions">Feedback or Suggestions</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="col-md-12 formGroup50">
                            <label class="form-label">Tell us your problem</label>
                            <textarea name="problem" id="" cols="30" rows="10" class="form-control" placeholder="Tell us your problem" required></textarea>
                        </div>
                        <div class="col-md-12">
                            <p class="fullWBtn"><center><button type="submit" class="btn btn-primary btn-primary-shadow btnLg">Submit</button></center></p>
                        </div>
                    </div>
					</form>
                </div>
            </div>
            

            
        </div>
    </section>
    <!-- //How to Find a Pro for Your Project Section-->
	
	@endsection