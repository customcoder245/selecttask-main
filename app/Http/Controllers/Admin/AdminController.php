<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\Image;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
		
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		 $task_data=DB::table('task')->get();
       return view('admin.page.task-list')->with('task_data',$task_data);
    }
	
	public function task_list(){
	
	   $task_data=DB::table('task')->get();
	  
		return view('admin.page.task-list')->with('task_data',$task_data);
	}
	public function customer_services_location($id){
		$task_data=DB::table('task')->where('user_id',$id)->orderBy('id','desc')->get();
		
		
	return view('admin.page.customer_services-location')->with('customer_id',$id)->with('task_data',$task_data);
	}
	
	public function job_details($user_type,$id){
		
		$task_data=DB::table('task')->where('id',$id)->first();
		
		return view('admin.page.job-details')->with('task_id',$id)->with('task_data',$task_data)->with('user_type',$user_type);
	}
	
	public function service_provider(){
		$sp=DB::table('users')->where('role','service_provider')->where('user_type',0)->get();
		
		return view('admin.page.service-provider')->with('sp',$sp);
	}
	
	public function service_provider_service_location($id){
		return view('admin.page.service-provider_service-location')->with('sp_id',$id);
	}
	public function service(){
		return view('admin.page.services');
	}
	
	public function setting(){
		return view('admin.page.setting');
	}
	
	
	public function live_services(){
		return view('admin.page.live-service');
	}
	
	public function live_services_details($id){
		return view('admin.page.live-service-details')->with('id',$id);
	}
	
	public function profile(){
		return view('admin.page.profile');
	}
	public function service_details($id){
	    
		return view('admin.page.service-details')->with('id',$id);
	}
	
	public function customer_info(){
	$customer=DB::table('users')->where('role','customer')->get();
		return view('admin.page.customer')->with('customer',$customer);
	}
	
	public function profileinfoupdate(Request $request){
		$id=$request->id;
		
		$status=$request->status;
		
		   $code=201;
			if($status==0){
				$st_text="inactive";
				$code=200;
			}elseif($status==1){
				$st_text="active";
				$code=200;
			}else{
				$code=201;
				$st_text='';
			}
			if($code==200){
		$data=DB::table('users')->where('id',$id)->update(array('status'=>$status));
			}
		$result=array('code'=>200,'message'=>'status changes','status'=>$st_text);
		
		
		return json_encode($result);
	}
	
	
	public function customer_filter(Request $request){
		$st=0;
		if($request->sort_name=="ASC"){
		$data=DB::table('task')->where('user_id',$request->user_id)->orderBy('id','ASC')->get();
		$st=1;
		}elseif($request->sort_name=="DESC"){
		$data=DB::table('task')->where('user_id',$request->user_id)->orderBy('id','desc')->get();
		$st=1;
		}else{
		$data=DB::table('task')->where('user_id',$request->user_id)->get();
		$st=2;
		}
		$html='';
		$i=1;
		foreach($data as $task_data){
			$task_meta=get_task_meta($task_data->id,'applicant_user');
              $status="Open";
			$task_meta=json_decode($task_meta);
				if(isset($task_meta)){
					
					
											  
											  
					if(isset( $task_meta->apply_user)){
					 $status="Awaiting Assignment";
											  } 
					if(isset($task_meta->hire)){
					  $status="In Progress";
											  } 
					if(isset($task_meta->complete)){
					  $status="Completed";
						 }
					  }
					  if($st==2){
						  if($request->sort_name=="Open"){
							  if(empty($task_meta)){
							  	$html .='<div class="jobsDetailsRow">
                                           <div class="jobsDetailsHead d-sm-flex centeredItem border-bottom">
                                                <h4>'. get_services_category_by_id($task_data->category).'</h4>
                                                <div class="d-sm-flex justify-content-between align-items-center">
                                                  <span class="dateWidget ml-sm-2 order-sm-3">'.date("m/d/Y",strtotime($task_data->date)) .'  <span class="timeSec">'. date('h:s:a',strtotime($task_data->date)) .'</span></span>
                                                  <a href="'. route("job-details",["id"=>$task_data->id,'user_type'=>'customer']) .'" class="btn btn-primary btnSML">Job Details</a>
                                                </div>
                                           </div>
                                           <div class="jobDetailsContent d-md-flex justify-content-between flex-wrap">
                                              <div class="jobsDetailsCol jobsDetailsCol-l  d-flex justify-content-between">
                                                 
                                                  <div class="jobsDetailsMobRight">
                                                      <label>Hiring Process</label>
                                                      <p>Ready</p>
                                                  </div>
                                              </div>
                                              <div class="jobsDetailsCol jobsDetailsCol-2 d-flex justify-content-between">
                                                <div class="jobsDetailsMobLeft">
                                                    <label>Preferred Time</label>
                                                    <p>'.get_preferred_time($task_data->preferred_time).'</p>
                                                </div>
                                                <div class="jobsDetailsMobRight">
                                                    <label>Preferred Contact</label>
                                                    <p>';
													if(!empty($task_data->quotes)){
														 $html .=implode(' ',json_decode($task_data->quotes)); 
													}
													$html .='	</p>
                                                </div>
                                              </div>
                                              <div class="jobsDetailsCol jobsDetailsCol-3 d-flex justify-content-between">
                                                <div class="jobsDetailsMobLeft">
                                                    <label>Address</label>
                                                    <p>';
													if(isset($task_data->address)){
														$html .=get_address_by_id($task_data->address)->address;
														}
														$html .='</p>
                                                </div>
                                                <div class="jobsDetailsMobRight">
                                                    <label>Status</label>
                                                    <p>'.$status .'</p>
                                                </div>
                                              </div>
                                              <div class="jobsDetailsCol jobsDetailsCol-des mt-3">
                                                <label>Description</label>
                                                <p class="normalFont">'.$task_data->description .'</p>
                                            </div>
                                           </div>
                                      </div>';
						  }
						  }elseif($request->sort_name=="awaiting_approval"){
							  if(!isset($task_meta->hire) && !isset($task_meta->complete)){
							  $html .='<div class="jobsDetailsRow">
                                           <div class="jobsDetailsHead d-sm-flex centeredItem border-bottom">
                                                <h4>'. get_services_category_by_id($task_data->category).'</h4>
                                                <div class="d-sm-flex justify-content-between align-items-center">
                                                  <span class="dateWidget ml-sm-2 order-sm-3">'.date("m/d/Y",strtotime($task_data->date)) .'  <span class="timeSec">'. date('h:s:a',strtotime($task_data->date)) .'</span></span>
                                                  <a href="'. route("job-details",["id"=>$task_data->id,'user_type'=>'customer']) .'" class="btn btn-primary btnSML">Job Details</a>
                                                </div>
                                           </div>
                                           <div class="jobDetailsContent d-md-flex justify-content-between flex-wrap">
                                              <div class="jobsDetailsCol jobsDetailsCol-l  d-flex justify-content-between">
                                                 
                                                  <div class="jobsDetailsMobRight">
                                                      <label>Hiring Process</label>
                                                      <p>Ready</p>
                                                  </div>
                                              </div>
                                              <div class="jobsDetailsCol jobsDetailsCol-2 d-flex justify-content-between">
                                                <div class="jobsDetailsMobLeft">
                                                    <label>Preferred Time</label>
                                                    <p>'.get_preferred_time($task_data->preferred_time).'</p>
                                                </div>
                                                <div class="jobsDetailsMobRight">
                                                    <label>Preferred Contact</label>
                                                    <p>';
													if(!empty($task_data->quotes)){
														 $html .=implode(' ',json_decode($task_data->quotes)); 
													}
													$html .='	</p>
                                                </div>
                                              </div>
                                              <div class="jobsDetailsCol jobsDetailsCol-3 d-flex justify-content-between">
                                                <div class="jobsDetailsMobLeft">
                                                    <label>Address</label>
                                                    <p>';
													if(isset($task_data->address)){
														$html .=get_address_by_id($task_data->address)->address;
														}
														$html .='</p>
                                                </div>
                                                <div class="jobsDetailsMobRight">
                                                    <label>Status</label>
                                                    <p>'.$status .'</p>
                                                </div>
                                              </div>
                                              <div class="jobsDetailsCol jobsDetailsCol-des mt-3">
                                                <label>Description</label>
                                                <p class="normalFont">'.$task_data->description .'</p>
                                            </div>
                                           </div>
                                      </div>';
						  }
						  }elseif($request->sort_name=="in_progress"){
							 
							  if(isset($task_meta->hire) && !isset($task_meta->complete)){
								  $html .='<div class="jobsDetailsRow">
                                           <div class="jobsDetailsHead d-sm-flex centeredItem border-bottom">
                                                <h4>'. get_services_category_by_id($task_data->category).'</h4>
                                                <div class="d-sm-flex justify-content-between align-items-center">
                                                  <span class="dateWidget ml-sm-2 order-sm-3">'.date("m/d/Y",strtotime($task_data->date)) .'  <span class="timeSec">'. date('h:s:a',strtotime($task_data->date)) .'</span></span>
                                                  <a href="'. route("job-details",["id"=>$task_data->id,'user_type'=>'customer']) .'" class="btn btn-primary btnSML">Job Details</a>
                                                </div>
                                           </div>
                                           <div class="jobDetailsContent d-md-flex justify-content-between flex-wrap">
                                              <div class="jobsDetailsCol jobsDetailsCol-l  d-flex justify-content-between">
                                                 
                                                  <div class="jobsDetailsMobRight">
                                                      <label>Hiring Process</label>
                                                      <p>Ready</p>
                                                  </div>
                                              </div>
                                              <div class="jobsDetailsCol jobsDetailsCol-2 d-flex justify-content-between">
                                                <div class="jobsDetailsMobLeft">
                                                    <label>Preferred Time</label>
                                                    <p>'.get_preferred_time($task_data->preferred_time).'</p>
                                                </div>
                                                <div class="jobsDetailsMobRight">
                                                    <label>Preferred Contact</label>
                                                    <p>';
													if(!empty($task_data->quotes)){
														 $html .=implode(' ',json_decode($task_data->quotes)); 
													}
													$html .='	</p>
                                                </div>
                                              </div>
                                              <div class="jobsDetailsCol jobsDetailsCol-3 d-flex justify-content-between">
                                                <div class="jobsDetailsMobLeft">
                                                    <label>Address</label>
                                                    <p>';
													if(isset($task_data->address)){
														$html .=get_address_by_id($task_data->address)->address;
														}
														$html .='</p>
                                                </div>
                                                <div class="jobsDetailsMobRight">
                                                    <label>Status</label>
                                                    <p>'.$status .'</p>
                                                </div>
                                              </div>
                                              <div class="jobsDetailsCol jobsDetailsCol-des mt-3">
                                                <label>Description</label>
                                                <p class="normalFont">'.$task_data->description .'</p>
                                            </div>
                                           </div>
                                      </div>';
							  }
						  }elseif($request->sort_name=="Completed"){
						  if(isset($task_meta->complete)){
								  $html .='<div class="jobsDetailsRow">
                                           <div class="jobsDetailsHead d-sm-flex centeredItem border-bottom">
                                                <h4>'. get_services_category_by_id($task_data->category).'</h4>
                                                <div class="d-sm-flex justify-content-between align-items-center">
                                                  <span class="dateWidget ml-sm-2 order-sm-3">'.date("m/d/Y",strtotime($task_data->date)) .'  <span class="timeSec">'. date('h:s:a',strtotime($task_data->date)) .'</span></span>
                                                  <a href="'. route("job-details",["id"=>$task_data->id,'user_type'=>'customer']) .'" class="btn btn-primary btnSML">Job Details</a>
                                                </div>
                                           </div>
                                           <div class="jobDetailsContent d-md-flex justify-content-between flex-wrap">
                                              <div class="jobsDetailsCol jobsDetailsCol-l  d-flex justify-content-between">
                                                 
                                                  <div class="jobsDetailsMobRight">
                                                      <label>Hiring Process</label>
                                                      <p>Ready</p>
                                                  </div>
                                              </div>
                                              <div class="jobsDetailsCol jobsDetailsCol-2 d-flex justify-content-between">
                                                <div class="jobsDetailsMobLeft">
                                                    <label>Preferred Time</label>
                                                    <p>'.get_preferred_time($task_data->preferred_time).'</p>
                                                </div>
                                                <div class="jobsDetailsMobRight">
                                                    <label>Preferred Contact</label>
                                                    <p>';
													if(!empty($task_data->quotes)){
														 $html .=implode(' ',json_decode($task_data->quotes)); 
													}
													$html .='	</p>
                                                </div>
                                              </div>
                                              <div class="jobsDetailsCol jobsDetailsCol-3 d-flex justify-content-between">
                                                <div class="jobsDetailsMobLeft">
                                                    <label>Address</label>
                                                    <p>';
													if(isset($task_data->address)){
														$html .=get_address_by_id($task_data->address)->address;
														}
														$html .='</p>
                                                </div>
                                                <div class="jobsDetailsMobRight">
                                                    <label>Status</label>
                                                    <p>'.$status .'</p>
                                                </div>
                                              </div>
                                              <div class="jobsDetailsCol jobsDetailsCol-des mt-3">
                                                <label>Description</label>
                                                <p class="normalFont">'.$task_data->description .'</p>
                                            </div>
                                           </div>
                                      </div>';
							  }
						  }
					  }else{
			
			$html .='<div class="jobsDetailsRow">
                                           <div class="jobsDetailsHead d-sm-flex centeredItem border-bottom">
                                                <h4>'. get_services_category_by_id($task_data->category).'</h4>
                                                <div class="d-sm-flex justify-content-between align-items-center">
                                                  <span class="dateWidget ml-sm-2 order-sm-3">'.date("m/d/Y",strtotime($task_data->date)) .'  <span class="timeSec">'. date('h:s:a',strtotime($task_data->date)) .'</span></span>
                                                  <a href="'. route("job-details",["id"=>$task_data->id,'user_type'=>'customer']) .'" class="btn btn-primary btnSML">Job Details</a>
                                                </div>
                                           </div>
                                           <div class="jobDetailsContent d-md-flex justify-content-between flex-wrap">
                                              <div class="jobsDetailsCol jobsDetailsCol-l  d-flex justify-content-between">
                                                 
                                                  <div class="jobsDetailsMobRight">
                                                      <label>Hiring Process</label>
                                                      <p>Ready</p>
                                                  </div>
                                              </div>
                                              <div class="jobsDetailsCol jobsDetailsCol-2 d-flex justify-content-between">
                                                <div class="jobsDetailsMobLeft">
                                                    <label>Preferred Time</label>
                                                    <p>'.get_preferred_time($task_data->preferred_time).'</p>
                                                </div>
                                                <div class="jobsDetailsMobRight">
                                                    <label>Preferred Contact</label>
                                                    <p>';
													if(!empty($task_data->quotes)){
														 $html .=implode(' ',json_decode($task_data->quotes)); 
													}
													$html .='	</p>
                                                </div>
                                              </div>
                                              <div class="jobsDetailsCol jobsDetailsCol-3 d-flex justify-content-between">
                                                <div class="jobsDetailsMobLeft">
                                                    <label>Address</label>
                                                    <p>';
													if(isset($task_data->address)){
														$html .=get_address_by_id($task_data->address)->address;
														}
														$html .='</p>
                                                </div>
                                                <div class="jobsDetailsMobRight">
                                                    <label>Status</label>
                                                    <p>'.$status .'</p>
                                                </div>
                                              </div>
                                              <div class="jobsDetailsCol jobsDetailsCol-des mt-3">
                                                <label>Description</label>
                                                <p class="normalFont">'.$task_data->description .'</p>
                                            </div>
                                           </div>
                                      </div>';
		    }
		}
		
		$result=array('code'=>200,'mesage'=>'status changes','html'=>$html);
		return json_encode($result);
		
		
		
		
	}
	
	public function sp_filter(Request $request){
		$user_id=$request->user_id;
		$status=$request->sort_name;
		$task_list=get_user_meta($user_id,'task_list');
		$task_list=json_decode($task_list);
		
		$total_arr=array();
		$complete_arr=array();
		$hired=array();
		if($request->sort_name=="DESC"){
			if(isset($task_list->apply)){
				$total_arr=array_merge($total_arr,$task_list->apply);
			}
			if(isset($task_list->hire)){
				$total_arr=array_merge($total_arr,$task_list->hire);
			}
			if(isset($task_list->complete)){
				$total_arr=array_merge($total_arr,$task_list->complete);
			}
			rsort($total_arr);
			
		}elseif($request->sort_name=="ASC"){
			
			if(isset($task_list->apply)){
				$total_arr=array_merge($total_arr,$task_list->apply);
			}
			if(isset($task_list->hire)){
				$total_arr=array_merge($total_arr,$task_list->hire);
			}
			if(isset($task_list->complete)){
				$total_arr=array_merge($total_arr,$task_list->complete);
			}
			sort($total_arr);
			
			
		}elseif($request->sort_name=="Open"){
			
		}elseif($request->sort_name=="Awaiting Approval"){
			if(isset($task_list->apply)){
				$total_arr=array_merge($total_arr,$task_list->apply);
			}
		}elseif($request->sort_name=="In Progress"){
			if(isset($task_list->hire)){
				$total_arr=array_merge($total_arr,$task_list->hire);
				$hired=$task_list->hire;
			}
		}elseif($request->sort_name=="Completed"){
			if(isset($task_list->complete)){
				$total_arr=array_merge($total_arr,$task_list->complete);
				$complete_arr=$task_list->complete;
			}
		}
		$html='';
		if(count($total_arr)>0){
			foreach($total_arr as $total_arr){
				$apply_data=get_job_by_id($total_arr);
				if(!empty($apply_data)){
				$html .=' <div class="jobsDetailsRow">
                                           <div class="jobsDetailsHead d-sm-flex centeredItem border-bottom">
                                                <h4>'. get_services_category_by_id($apply_data->category).'</h4>
                                                <div class="d-sm-flex justify-content-between align-items-center">
                                                  <span class="dateWidget ml-sm-2 order-sm-3">'.date("m/d/Y",strtotime($apply_data->date)) .'<span class="timeSec">'. date("h:s:a",strtotime($apply_data->date)) .'</span></span>
                                                  <a href="'. route('job-details',['id'=>$apply_data->id,'user_type'=>'sp']).'" class="btn btn-primary btnSML">Job Details</a>
                                                </div>
                                           </div>
                                           <div class="jobDetailsContent d-md-flex justify-content-between flex-wrap">
                                              <div class="jobsDetailsCol jobsDetailsCol-l  d-flex justify-content-between">
                                                
                                                  <div class="jobsDetailsMobRight">
                                                      <label>Hiring Process</label>
                                                      <p>Ready</p>
                                                  </div>
                                              </div>
                                              <div class="jobsDetailsCol jobsDetailsCol-2 d-flex justify-content-between">
                                                <div class="jobsDetailsMobLeft">
                                                    <label>Preferred Time</label>
                                                    <p>'. get_preferred_time($apply_data->preferred_time).'</p>
                                                </div>
                                                <div class="jobsDetailsMobRight">
                                                    <label>Preferred Contact</label>
                                                    <p>';
													if(!empty($apply_data->quotes)) {
               											$html .=implode(' ',json_decode($apply_data->quotes));
														}
												$html .='</p>
                                                </div>
                                              </div>
                                              <div class="jobsDetailsCol jobsDetailsCol-3 d-flex justify-content-between">
                                                <div class="jobsDetailsMobLeft">
                                                    <label>Address</label>
                                                    <p>';
													if(isset($apply_data->address)){
														$html .=get_address_by_id($apply_data->address)->address; 
														}
														$html .='</p>
                                                </div>
                                                <div class="jobsDetailsMobRight">
                                                    <label>Status</label>';
											if(get_assign_to_another($total_arr,$user_id)==1){
										     $html .='<p >Assigned to another professional</p>';
											}elseif(in_array($total_arr,$hired)){
										     $html .='<p >In Progress</p>';
											}elseif(in_array($total_arr, $complete_arr)){
											$html .='<p >Complete</p>';
											}else{									
                                            $html .='<p >Awaiting Assignment</p>';
											}
													
                                                    
                                              $html .='  </div>
                                              </div>
                                              <div class="jobsDetailsCol jobsDetailsCol-des mt-3">
                                                <label>Description</label>
                                                <p class="normalFont">'.$apply_data->description .'</p>
                                            </div>
                                           </div>
                                      </div>';
			   }
			}
			
			
		}
		$result=array('code'=>200,'html'=>$html);
		return json_encode($result);
		
	}
	
	public function my_profile(){
		return view('admin.page.profile');
		
	}
	
	
	public function admin_task_list_filter(Request $request){
		$query=array();
		$date_from=$request->from;
		$date_to=$request->to;
		$service_category=$request->service_category;
		$cat=$a2='';
		if(!empty($service_category)){
			$query['category']=$service_category;
		}
		$preferred_time=$request->preferred_time;
		if(!empty($preferred_time)){
			$query['preferred_time']=$preferred_time;
		}
		
		$request_status=$request->request_status;
		$search=$request->search;
		$searchwhere='';
		if(!empty($search)){
			$searchwhere='->where("description","like",$search)';
		}
		$location=$request->location;
		
		if(count($query)>0  && empty($search)){
			$data=DB::table('task')->where($query)->get();
		}elseif(!empty($search) && count($query)<=0){
			
			$data=DB::table('task')->where("description","like","%".$search."%")->get();
		}elseif(!empty($search) && count($query)>0){
			$data=DB::table('task')->where($query)->where("description","like","%".$search."%")->get();
			
		}else{
		$data=DB::table('task')->get();	
		}
		
		$html='<table class="table table-bordered table-striped dataTable"  id="example2">
		   <thead>
                                <tr>
                                  <th scope="col">Date</th>
                                  <th scope="col">Posted by</th>
                                  <th scope="col">Location</th>
                                  <th scope="col">Category</th>
                                  <th scope="col">Status</th>
                                  <th class="action" scope="col" width="100">Action</th>
                                </tr>
                              </thead>
							  <tbody>
		
		';
		foreach($data as $task_data){
			$task_meta=get_task_meta($task_data->id,'applicant_user');	
							  if(isset($task_meta)){
								  $status="Open";
								  $task_meta=json_decode($task_meta);
								  if(isset( $task_meta->apply_user)){
									  $status="Awaiting Assignment";
								  } 
								  if(isset($task_meta->hire)){
									   $status="In Progress";
								  } 
								  if(isset($task_meta->complete)){
									   $status="Completed";
								  }
							  }
							if(!empty($request_status)){
								
								if($status==$request_status){
									
									
								}else{
									continue;
								}
							}  
							
							 $job_date=date('m/d/Y',strtotime($task_data->date));
							if(!empty($date_from) && !empty($date_to)){
								
							if((strtotime($date_to) >= strtotime($job_date)) && (strtotime($job_date) > strtotime($date_from))){
								
								
							}else{
								continue;
							}
							}
							
							
							
							  
			         $html .='<tr>                                
                                  <td>'.date('m/d/Y',strtotime($task_data->date)).' </td>
                                  <td><a href="#" class="text-green">'. get_userdata($task_data->user_id)->name .'</a></td>
                                  <td>';
								  if(isset($task_data->address)){ 
								  $html.=get_address_by_id($task_data->address)->address;
								  }
								  $html.='</td>
                                  <td>'.get_services_category_by_id($task_data->category).'</td>
                                  <td class="opened-status semiBold">'.$status .'</td>
                                  <td class="action"><a href="'. route('job-details',['id'=>$task_data->id,'user_type'=>'task_list']).'" class="btn btn-primary">View Details</a></td>
                                </tr>';
		}
		$html.='</tbody>
                            </table>';
		
		$result=array('code'=>200,'html'=>$html);
		return json_encode($result);
		
	}
	
   public function update_profile(Request $request){
	 
	
	 
	   $user_id=$request->user_id;
	   if(isset($request->image)){
		request()->validate(['image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',]);
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        $input['image'] = $imageName;
        request()->image->move(public_path('uploads/image'), $imageName);
		if(!empty(check_user_meta($user_id,'profile_image'))){
			   update_user_meta($user_id,'profile_image',$imageName);
		    }else{
			add_user_meta($user_id,'profile_image',$imageName);
		   }
		}
		
		if(!empty(check_user_meta($user_id,'business_name'))){
			update_user_meta($user_id,'business_name',$request->business_name);
		}else{
			add_user_meta($user_id,'business_name',$request->business_name);
		}
		

		if(!empty(check_user_meta($user_id,'contact_name'))){
			update_user_meta($user_id,'contact_name',$request->contact_name);
		}else{
			add_user_meta($user_id,'contact_name',$request->contact_name);
		}
		
		if(!empty(check_user_meta($user_id,'invoice_business_name'))){
			update_user_meta($user_id,'invoice_business_name',$request->invoice_business_name);
		}else{
			add_user_meta($user_id,'invoice_business_name',$request->invoice_business_name);
		}
	
		if(!empty(check_user_meta($user_id,'invoice_email'))){
			update_user_meta($user_id,'invoice_email',$request->invoice_email);
		}else{
			add_user_meta($user_id,'invoice_email',$request->invoice_email);
		}
	
		if(!empty(check_user_meta($user_id,'invoice_address'))){
			update_user_meta($user_id,'invoice_address',$request->invoice_address);
		}else{
			add_user_meta($user_id,'invoice_address',$request->invoice_address);
		}
	
		
		
		if(!empty(check_user_meta($user_id,'contact_number'))){
			update_user_meta($user_id,'contact_number',$request->contact_number);
		}else{
			add_user_meta($user_id,'contact_number',$request->contact_number);
		}
		
	
		
		if(!empty(check_user_meta($user_id,'address'))){
			update_user_meta($user_id,'address',$request->address);
		}else{
			add_user_meta($user_id,'address',$request->address);
		}
		
		
		
		if(!empty(check_user_meta($user_id,'city'))){
			update_user_meta($user_id,'city',$request->city);
		}else{
			add_user_meta($user_id,'city',$request->city);
		}
		
		
		
		if(!empty(check_user_meta($user_id,'state'))){
			update_user_meta($user_id,'state',$request->state);
		}else{
			add_user_meta($user_id,'state',$request->state);
		}
		
		
	
		if(!empty(check_user_meta($user_id,'country'))){
			update_user_meta($user_id,'country',$request->country);
		}else{
			add_user_meta($user_id,'country',$request->country);
		}
		
		
		DB::table('users')->where('id',$user_id)->update(array('email'=>$request->email,'name'=>$request->contact_name));
		return redirect()->route('my-profile')->with('status', 'Profile updated!');
		
	 }	
	 
	 public function post_task_view($status){
		 $data=DB::table('task')->get();	
		 
		
		 $html='<table class="table table-bordered table-striped dataTable"  id="example2">
		   <thead>
                                <tr>
                                  <th scope="col">Date</th>
                                  <th scope="col">Posted by</th>
                                  <th scope="col">Location</th>
                                  <th scope="col">Category</th>
                                  <th scope="col">Status</th>
                                  <th class="action" scope="col" width="100">Action</th>
                                </tr>
                              </thead>
							  <tbody>
		
		';
		foreach($data as $task_data){
			$task_meta=get_task_meta($task_data->id,'applicant_user');	
							  if(isset($task_meta)){
								  $st="Open";
								  $st1='Open';
								  $task_meta=json_decode($task_meta);
								  if(isset( $task_meta->apply_user)){
									  $st="Awaiting Assignment";
									  $st1='awaiting';
								  } 
								  if(isset($task_meta->hire)){
									   $st="In Progress";
									   $st1='in_progress';
								  } 
								  if(isset($task_meta->complete)){
									   $st="Completed";
									   $st1="completed";
								  }
							  }
							if(!empty($status)){
								
								if($status==$st1){
									
									
								}else{
									continue;
								}
							}  
							
							
							
							
							
							  
			         $html .='<tr>                                
                                  <td>'.date('m/d/Y',strtotime($task_data->date)).' </td>
                                  <td><a href="#" class="text-green">'. get_userdata($task_data->user_id)->name .'</a></td>
                                  <td>';
								  if(isset($task_data->address)){ 
								  $html.=get_address_by_id($task_data->address)->address;
								  }
								  $html.='</td>
                                  <td>'.get_services_category_by_id($task_data->category).'</td>
                                  <td class="opened-status semiBold">'.$st .'</td>
                                  <td class="action"><a href="'. route('job-details',['id'=>$task_data->id,'user_type'=>'task_list']).'" class="btn btn-primary">View Details</a></td>
                                </tr>';
		}
		$html.='</tbody>
                            </table>';
		
		$result=array('code'=>200,'html'=>$html);
		return json_encode($result);
		 
		 
	 }
	
	public function admin_live_user(){
		$data=DB::table('users')->where('user_type',1)->get();
		return view('admin.page.live-user')->with('data',$data);
	}
	
	public function services_other(){
		return view('admin.page.live-services-other');
	}
	
	public function save_setting(Request $request){
		
		
		foreach($request->all() as $key=>$value){
			if($key != '_token'){
				if(empty($value)){
					$value=0;
				}
				save_option($key,$value);
			}
		}
		$url=route('setting');
		return redirect()->to($url);
		
	}
	
	
}
