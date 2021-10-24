@extends('user.layout.app')
@section('content')

       <!--Right Content-->
        <div class="contentArea">          

            <!--Auto Apply Settings list-->
           <div class="sectionRow autoApply-List">   
                <div class="titleRow pb-0">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h2 class="title-head my-0">Transaction History</h2>
                    </div>
                    <div class="transFilter d-md-flex justify-content-end align-items-center pt-md-2">
                        
                        <div class="rightFilter mb-3">
                            <ul class="flex-wrap filterOptions">
                                <li class="customDD">
                                    <label for="filterBy">Filter By:</label>
                                    <a href="javascript:void(0)" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="underlinelink semiBold ddmenuOption monthly_filter">Last month</a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="custTypeButton">
                                        <ul class="submenuLinks">
										  <li><a href="javascript:void(0)" data-week="last-week" >Last Week</a></li>
                                            <li><a href="javascript:void(0)" data-week="last-month" >Last Month</a></li>                                          
                                            <li><a href="javascript:void(0)" data-week="last-year" >Last Year</a></li>
                                        </ul>                
                                    </div>
                                </li>
                                <li>
                                    <label for="filterBy">Filter By Date:</label>
                                    <span class="underlinelink semiBold ddmenuOption">
									
				<input type="text" name="daterange" id="from" placeholder="MM/DD/YYYY - MM/DD/YYYY" value="" />

									</span>
                                </li>
                                <li class="customDD">
                                    <label class="sortBy">Sort By:</label>
                                    <a href="javascript:void(0)" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="underlinelink semiBold ddmenuOption">Newest</a>
                                    <!-- <select class="form-control" id="sortBy">
                                        <option>Newest</option>
                                        <option>Oldest</option>                                    
                                    </select> -->
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="custTypeButton">
                                        <ul class="submenuLinks submenuLinks3">
                                            <li><a href="javascript:void(0)" data-order="newest">Newest</a></li>
                                            <li><a href="javascript:void(0)" data-order="oldest">Oldest</a></li>
                                           
                                        </ul>                
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                </div>         
                
                <div class="grid-widget">
                    <div class="gridHeader d-md-flex justify-content-between text-lato semiBold hidden-md f-16">
                        <div class="transHisCol transHisCol-1 d-flex justify-content-between">
                            <div class="servicesCatColLeft">Payment Date</div>
                            <div class="servicesCatColRight">Amount Paid</div>
                        </div>
                        <div class="transHisCol transHisCol-Category">Category</div>
                       
                        <div class="transHisCol transHisCol-4 d-flex justify-content-between">
                            <div class="servicesCatColLeft">Job Detail</div>
                            <div class="servicesCatColRight">Invoice No.</div>
                        </div>
                    </div>
                    <div class="gridRows rowBlock filterr_row">
					   
					    
					      @if(count($data1)>0)
							  @foreach($data1 as $data)
						  <div class="gridRow  justify-content-between line-content" data-position="{{ $data->id }}">
                            <div class="transHisCol transHisCol-1 d-flex justify-content-between">
                                <div class="servicesCatColLeft">
                                    <label class="grayLabel d-block d-md-none">Payment Date</label>
                                    <p class="mSemiBold"> {{ date("m/d/Y",strtotime($data->created_at))}}</p>
                                </div>
                                <div class="servicesCatColRight">
                                    <label class="grayLabel d-block d-md-none">Amount Paid</label>
                                    <p class="mSemiBold">${{ $data->amount}}</p>
                                </div>
                            </div>

                            <div class="transHisCol transHisCol-Category">
                                <label class="grayLabel d-block d-md-none">Category</label>
								@php 
								$cate_name='';
								  $task_data=get_job_by_id($data->task_id);
								  if(!empty($task_data)){
									  $cat_id=$task_data->category;
									 $cate_name= get_services_category_by_id($cat_id);
								  }
								  
								  
								@endphp
								
                                <p class="mSemiBold">{{ $cate_name }}</p> 
                            </div>

                            <div class="transHisCol transHisCol-4 d-flex justify-content-between">
                                <div class="servicesCatColLeft">
                                    <label class="grayLabel d-block d-md-none">Job Detail</label>
                                    <p class="mSemiBold"><a href="{{ route('provider-Status-open',['id'=>$data->task_id])}}" class="underlinelink textgreen semiBold f-16">View</a></p>
                                </div>
                                <div class="servicesCatColRight">
                                    <label class="grayLabel d-block d-md-none">Invoice No.</label>
                                    <a href="{{ route('view-invoice',['id'=>$data->task_id])}}" class="underlinelink text-secondary uppercase">#{{ $data->invoice_no }}</a>
                                </div>
                            </div>                           
                        </div>
						  @endforeach
						  
						  @else
						  
                          <div class="noData-Div col-md-12">
								<p class="noApplicantText">Sorry No Data Found</p>
								
								<p class="charImage"><img src="{{ url('/public/user/')}}/assets/images/no-data.svg" alt=""></p>
							</div> 
							
						@endif	
                        
                      </div>
					  <div class="custom_pagination">
						   <ul id="pagin">
         
                             </ul>
						  </div>
                </div><!--//Grid Widget-->
            </div>
            <!-- //Auto Apply Settings list-->
        </div>
        <!--//Right Content-->
		
	
		
			@endsection