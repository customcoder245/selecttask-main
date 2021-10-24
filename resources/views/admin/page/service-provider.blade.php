@extends('admin.layout.app')
@section('content')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                      <section class="content-header">
                        <h1>Service Provider</h1>
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
							 
							  @foreach($sp as $sp_data)
							  @php
                              $d_class='';							  
							  if($sp_data->status==0){
								   $d_class='inactive';
							  } 
								  
							  
							  @endphp
                                <tr>                                
                                  <td>{{$i++}}</td>
                                  <td><a href="{{ route('service-provider-location',['id'=>$sp_data->id])}}" class="text-green">	{{ $sp_data->name }}</a></td>
                                  <td>{{ $sp_data->email }}</td>
                                  <td>{{ get_user_meta($sp_data->id,'phone')}}</td>
                                  <td>{{ date('m/d/Y',strtotime($sp_data->created_at))}}</td>
                                  <td>{{ sp_total_job($sp_data->id)}}</td>
								  <td class="status_td {{$d_class }}"> @if($sp_data->status==1) Active @else <span style="color:red"> Inactive</span> @endif</td>
                                  <td class="action">
                                    
									<select class="btn  action_status " data-id="{{ $sp_data->id }}" >
									
									 <option value="1" @if($sp_data->status==1) selected @endif >Active</option>
									  <option value="0" @if($sp_data->status==0) selected @endif>Inactive</option>
									</select>
                                    
                                  </td>
                                </tr>
								
								@endforeach
								
                               
                              </tbody>
                            </table>
                           </div>
                          <!-- <ul class="pagination">
                            <li class="disabled"><span>«</span></li>                       
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#" rel="next">»</a></li>
                          </ul> -->
                        </div>
                      </div><!--Tasklist--> 

                    </div>
                </main>
                
            </div>
			
			@endsection