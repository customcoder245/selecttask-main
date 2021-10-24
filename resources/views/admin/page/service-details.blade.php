@extends('admin.layout.app')
@section('content')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                      <section class="content-header d-md-flex justify-content-between">
                        <h1>{{get_services_category_by_id($id) }}</h1>
                        <ol class="breadcrumb my-2">
                          <li class="breadcrumb-item"><a href="{{ route('service')}}"><span class="linkIcon"><svg width="12" height="12">
                            <use xlink:href="#services-icon"></use>
                        </svg></span> Services</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Heating and Cooling Systems</li>
                        </ol>
                      </section>
					  <pre>
					  @php 
					   $location=get_location_by_category($id);
					   $loc_rr=array();
					   if(count($location)>0){
						   foreach($location as $key=>$value){
							   if(!empty($value)){
								   foreach($value as $val){
									   if(!empty($val)){
										 $loc_rr[]=  $val;
									   }
								   }
							   }
						   }
					   }
					  $loc_rr= array_unique($loc_rr);
					 $i=1;
					  @endphp
					  
					  </pre>
					  
                       <div class="shadowBox mb-4">
                          <div class="boxBody">
                            <div class="table-responsive">
                              <table class="table table-bordered table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col" width="80" class="text-center">S No.</th>
                                    <th scope="col">Location</th>
                                    <th scope="col" width="120" class="text-center">Total</th>
                                  </tr>
                                </thead>
                                <tbody>
								@foreach($loc_rr as $loc_rr)
								@if(!empty(get_location_by_id($loc_rr)))
                                  <tr>
                                    <td class="text-center">{{ $i++ }} </td>
                                    <td>{{get_location_by_id($loc_rr)}}</td>
                                    <td class="text-center">{{get_services_provider_by_location($loc_rr) }}</td>
                                  </tr>
								  @endif
								  @endforeach
                                  
                                 
                                </tbody>
                          </div>
                       </div>
                      </div>
                </main>
                
            </div>
        </div>
        
			@endsection