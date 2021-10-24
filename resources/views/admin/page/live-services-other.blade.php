@extends('admin.layout.app')
@section('content')

 <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                      <section class="content-header">
                        <h1>Services </h1>
                      </section>
                       <div class="shadowBox mb-4">
                          <div class="boxBody">
                            <div class="table-responsive">
                              <table class="table table-bordered table-striped" id="example">
                                <thead>
                                  <tr>
                                    <th scope="col" width="80" class="text-center">S No.</th>
                                    <th scope="col">Service</th>
                                   
                                  </tr>
                                </thead>
                                <tbody>
								@php
								$i=1;
								$phpdv=get_location_service_other_list();
								
								@endphp
								
								@if(count($phpdv)>0)
									@foreach($phpdv as $phpdv)
								  <tr>
								    <td class="text-center">{{ $i++ }}</td>
									<td>{{ get_user_meta($phpdv,'other_info')}}</td>
									
								  </tr>
								   @endforeach
								   @endif
                                </tbody>
                          </div>
                       </div>
                      </div>
                </main>
                
            </div>
        </div>
        @endsection