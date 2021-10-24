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
                                    <th scope="col" width="120" class="text-center">Total</th>
                                  </tr>
                                </thead>
                                <tbody>
								@php
								$i=1;
								@endphp
								
								@foreach(get_services_category() as $get_services_category)
                                  <tr>
                                    <td class="text-center">{{ $i++ }}</td>
                                    <td>{{ $get_services_category->name }}</td>
                                    <td class="text-center"><a href="{{ route('service-details',['id'=> $get_services_category->id])}}" class="text-green Bold">{{ get_services_provider_by_category($get_services_category->id) }}</a></td>
                                  </tr>
								  @endforeach
								   
                                </tbody>
                          </div>
                       </div>
                      </div>
                </main>
                
            </div>
        </div>
        @endsection