@extends('admin.layout.app')
@section('content')

 <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                      <section class="content-header">
                        <h1>Setting</h1>
                      </section>
                       <div class="shadowBox mb-4">
                          <div class="boxBody">
                            <div class="table-responsive col-md-6">
							
							<form method="post" action="{{ route('save-seting')}}">
							  @csrf
							  <div class="form-group">
							   <label>Active Message </label>
							   
								<select name="message_active" class="form-control">
								 <option value="1" @if(get_option('message_active')==1) selected @endif >Enable</option>
								 <option value="0" @if(get_option('message_active')==0) selected @endif >Disable</option>
								</select>
							  </div>
							  <div class="form-group">
							   <label>Twilio SID </label>
							    <input name="sid" type="text"  class="form-control" value="{{ get_option('sid')}}">
							  </div>
							  <div class="form-group">
							   <label>Twilio Token  </label>
							    <input name="token" type="text"  class="form-control" value="{{ get_option('token')}}">
							  </div>
							  <div class="form-group">
							   <label>Twilio Phone </label>
							    <input name="phone" type="text"  class="form-control t_phone" value="{{ get_option('phone')}}">
							  </div>
							 
							 <button type="submit" class="btn btn-primary" >Save</button>
							
							
							</form>
							
                             </div>
                           </div>
                         </div>
					  </div>
                </main>
                
            </div>
        </div>
        @endsection