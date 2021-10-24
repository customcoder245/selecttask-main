@extends('admin.layout.app')
@section('content')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                      <section class="content-header">
                        <h1>Customers</h1>
                      </section>
                        
						
						
						
                      <div class="shadowBox mb-4">                       
                        <div class="boxBody">
                          <div class="table-responsive">
                            <table class="table table-bordered table-striped dataTable"  id="example">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Name</th>
                                  <th scope="col">Email</th>
                                  <th scope="col">Contact</th>
                                  <th scope="col">Account Created</th>
                                  <th scope="col">Jobs</th>
								  <th scope="col">Status</th>
                                  <th class="action" scope="col" width="100">Action</th>
                                </tr>
                              </thead>
                              <tbody>
							  @php 
							  $i=1;
							  @endphp
							  
							  
							  @foreach($customer as $customer)
							  @php
                              $d_class='';							  
							  if($customer->status==0){
								   $d_class='inactive';
							  } 
								  
							  
							  @endphp
                                <tr>                                
                                  <td>{{ $i++  }}</td>
                                  <td><a href="{{ route('customer-services-location',['id'=>$customer->id])}}" class="text-green">{{ $customer->name }}</a></td>
                                  <td>{{ $customer->email }}</td>
                                  <td>{{ get_user_meta($customer->id,'phone')}}</td>
                                  <td>{{ date('m/d/Y', strtotime($customer->created_at))}}</td>
                                  <td>{{ get_total_job_by_userid($customer->id)}}</td> 
								  <td class="status_td {{ $d_class }}"> @if($customer->status==1) Active @else <span style="color:red">Inactive</span> @endif</td>
                                  <td class="action">
                                    <select class="btn  action_status " data-id="{{ $customer->id }}" >
									<option value=""> </option>
									 <option value="1" @if($customer->status==1) selected @endif  >Active</option>
									  <option value="0"  @if($customer->status==0) selected @endif>Inactive</option>
									</select>
                                    
                                  </td>
                                </tr>
								
								@endforeach
								
                                  
                              </tbody>
                            </table>
                           </div>
                        </div>
                      </div><!--Tasklist--> 

                    </div>
                </main>
                
            </div>
			
			@endsection