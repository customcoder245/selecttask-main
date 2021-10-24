  @extends('user.layout.app')
@section('content')


 <!--Right Content-->
        <div class="contentArea">
           
            <!--Addresses-->
            <div class="sectionRow profileVH">
                <div class="titleRow d-flex justify-content-between align-items-center mb-sm-4">
                    <h2 class="title-head">My Account</h2>
                    <a href="javascript:void(0)" class="btn bordered-btn text-lato ml-auto" data-toggle="modal" data-target="#addAddressModal">Add new Address</a>
                </div> 
                
                <div class="staticTabs">
                    <ul class="nav nav-tabs tabsWidget border-bottom borderW2">
                         <li>
                            <a class="nav-link " href="{{ route('profile')}}">Personal Information</a>
                        </li>
                        <li>
                            <a class="nav-link active" href="{{ route('address')}}">Addresses</a>
                        </li>   
                        <li>
                            <a class="nav-link" href="{{ route('change-password')}}">Change Password</a>
                        </li>                  
                    </ul>
                </div>

                <div class="grid-widget addressesGrid ">
                      @if (session('status'))
						<div class="alert alert-success">
							{{ session('status') }}
						</div>
					@endif
                    <div class="gridRows rowBlock">
                        
					<div class="gridHeader d-md-flex justify-content-between text-lato semiBold hidden-md">
                        <div class="sNumber text-center">S No.</div>
                        <div class="addressCol text-md-center">Address</div>
                        <div class="d-flex justify-content-between twoColAddress">
                            <div class="unitCol text-md-center">Apt/Unit</div>
                            <div class="addressType text-md-center">Type</div>
                        </div>
                        
                        <div class="Action text-center w200">Action</div>
                    </div>
					<div class="gridRows rowBlock">
					@php 
					  $i=1;
					  @endphp
					@foreach($address as $address)
					
                        <div class="gridRow d-md-flex justify-content-between align-items-center">
                            <div class="sNumber text-center">{{$i++ }}</div>
                            <div class="addressCol text-md-center">
                                <label class="grayLabel d-block d-md-none">Address</label>                                
                                <p class="mSemiBold">{{ $address->address }}</p>
                            </div>
                            <div class="d-flex justify-content-between twoColAddress align-items-center">
                                <div class="unitCol text-md-center">
                                    <label class="grayLabel d-block d-md-none">Apt/Unit</label>  
                                    <p class="mSemiBold">{{ $address->apartment }}</p>
                                </div>
                                <div class="addressType text-right text-md-center">
                                    <label class="grayLabel d-block d-md-none">Type</label>  
                                    <p class="mSemiBold">{{ $address->address_type }}</p>
                                </div>
                            </div>                            
                            <div class="Action text-md-center w200 borderedlastDiv"> 
                              
					<a href="#" class="text-primary edit_address underlinelink" data-id="{{ $address->id}}" data-toggle="modal" data-target="#editAddressModal">
						<img src="{{ url('/public/user')}}/assets/images/edit-icon.svg" alt="">
						</a>
						<a href="{{ url('/user/address/delete/') }}/{{ $address->id }}" class="text-primary delete_address underlinelink" data-toggle="modal" data-target="#deleteRowModal">
						<img src="{{ url('/public/user')}}/assets/images/dustbin.svg" alt="">
						</a>
							  
							  
                            </div>
                        </div>
                 @endforeach

                   </div>
						
                      </div>
                </div>

              
                
                
            </div>
            <!-- //Addresses-->

        </div>
        <!--//Right Content-->

@endsection