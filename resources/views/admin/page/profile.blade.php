@extends('admin.layout.app')
@section('content')
@php 
$user_id=Auth::user()->id;

@endphp

<div id="layoutSidenav_content">
                <main>
				<form method="post" action="{{ route('update-profile')}}" enctype="multipart/form-data">
				 @csrf
				 <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <div class="container-fluid">
                      <section class="content-header">
                        <h1>Profile</h1>
                      </section>
					  	@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
                       <div class="shadowBox mb-4">
                          <div class="boxBody">
                            <div class="row">
                              <div class="col-sm-4">
                                 <div class="picture-container">
                                   <div class="picture">
								  
								   <div  class="profileImageWrap">
								    
                                     <img src="{{ get_admin_profile_image($user_id)}}" class="picture-src" id="wizardPicturePreview" title="">
                                     </div>                                    
									<input type="file" name="image" id="wizard-picture" class="image_upload" onchange="previewFile(this);">
                                   </div>
                                   <h6>Choose Picture</h6>
                                 </div>
                              </div>
                              <div class="col-sm-8">
                                <div class="form-group">
                                    <label class="label">Business Name</label>
                                    <input type="text" class="form-control" name="business_name" value="{{ get_user_meta($user_id,'Business_name')}}">
                                </div>
                                <div class="form-group">
                                  <label class="label">Contact Name</label>
                                  <input type="text" class="form-control" name="contact_name" value="{{ Auth::user()->name }}">
                              </div>
                            </div>

                            <div class="col-sm-6">
                              <div class="form-group">
                                  <label class="label">Contact Number</label>
								  
                                  <input type="text" class="form-control" id="business_contact" name="contact_number" value=" {{ get_user_meta($user_id,'contact_number')}}">
                              </div>
                              <div class="form-group">
                                <label class="label">Email</label>
                                <input type="text" class="form-control" name="email" value="{{ Auth::user()->email }}">
                            </div>
                          </div>
                          <div class="col-sm-6 form-group">
                            <label class="label">Address</label>
                            <textarea type="text" class="form-control" name="address" id="apf-address">{{ get_user_meta($user_id,'address')}}</textarea>
                          </div>
                          <div class="col-sm-4 form-group">                            
                              <label class="label">City</label>
                              <input type="text" class="form-control" name="city" value="{{ get_user_meta($user_id,'city')}}"> 
                          </div>
                          <div class="col-sm-4 form-group">                            
                            <label class="label">State</label>
                            <input type="text" class="form-control" name="state" value="{{ get_user_meta($user_id,'state')}}"> 
                          </div>
                          <div class="col-sm-4 form-group">                            
                            <label class="label">Country</label>
                            <input type="text" class="form-control" name="country" value="{{ get_user_meta($user_id,'country')}}"> 
                          </div>
                            </div><!--Profile Info-->
                            <div class="col-md-12 content-header">
							 <h3> <label class="label">Invoice Details</label></h3>
							</div>
							<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								 <label class="label">Business Name</label>
								 <input type="text" name="invoice_business_name" value="{{ get_user_meta($user_id,'invoice_business_name')}}" class="form-control">
								</div>
								<div class="form-group">
								<label class="label">Email</label>
								<input type="email" name="invoice_email" class="form-control" value="{{ get_user_meta($user_id,'invoice_email')}}">
								</div>
								
							
							</div>
							
							<div class="col-md-6">
							<div class="form-group">
							  <label class="label">Address</label>
							  <textarea class="form-control" name="invoice_address" style="    height: 136px;">{{ get_user_meta($user_id,'invoice_address')}}</textarea>
							</div>
							
							</div>
							</div>
							
							<div class="btnsWidget">
							
							
                              <button type="submit" class="btn btn-green">Edit Profile</button>
                            </div>
                          </div>
                       </div>
                      </div>
					  
					 </form> 
                </main>
                
            </div>
			@endsection