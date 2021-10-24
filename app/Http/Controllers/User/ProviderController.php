<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Image;
use Auth;
use DB;
use Twilio\Rest\Client;
use Stripe;
use Mail;
use Illuminate\Support\Facades\Hash;

class ProviderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
		$this->middleware('signups');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   
	public function provider_business_details(){
		return view('user.pages.provider.provider-business-details');
	}
	
	public function provider_change_password(){
		return view('user.pages.provider.provider-change-password');
	}
	
	public function provider_update_password(Request $request){
		
		$pass=Auth::user()->password;
		$user_id=$request->user_id;
		$old_pass=$request->old_password;
		$new_pass=$request->new_password;
		$con_pass=$request->confirm_password;
		
		if(Hash::check($old_pass,$pass)){
			if($new_pass==$con_pass){
				
				$user =Auth::user();
                $user->password = Hash::make($new_pass);
                $user->save();
				
		$to_name = Auth::user()->name;
		$to_email=Auth::user()->email;
		$mdata = array("name"=>$to_name, "body" => "Account Create");
		Mail::send("notification.DeactivationConfirmation",['data'=>$mdata], function($message) use ($to_name, $to_email) {
			$message->to($to_email, $to_name)->subject("Select Task password update");
			$message->from("support@selecttask.com","Selecttask");
			});
				
				return redirect()->route('provider-my-profile')->with('status', 'Password Update Succesfully');
			}else{
			   return redirect()->route('provider-change-password')->with('status', 'Confirm Password Not Match');	
			}
			
			
		}else{
			return redirect()->route('provider-change-password')->with('status', 'Old Password Not Correct! Please Try Again.');
		}
		
	}
	
	
	public function provider_company_info(){
		return view('user.pages.provider.provider-company-info');
	}
	
	/**********************  company info update ****************/
	
	public function provider_company_info_save(Request $request){
		$user_id=$request->user_id;
		
		if(isset($request->profile_image)){
			$file=$request->file('profile_image');
			$name=$file->getClientOriginalName();
			$file->move(public_path('uploads/service_provider/profile'),$name);
					
			if(!empty(get_user_meta($user_id,'profile_image'))){
				    update_user_meta($user_id,'profile_image',$name);
				}else{
					add_user_meta($user_id,'profile_image',$name);
				}
			}
			if(isset($request->cover_image)){
				$file2=$request->file('cover_image');
			$name2=$file2->getClientOriginalName();
			$file2->move(public_path('uploads/service_provider/cover'),$name2);
					
					if(!empty(get_user_meta($user_id,'cover_image'))){
				    update_user_meta($user_id,'cover_image',$name2);
				}else{
					add_user_meta($user_id,'cover_image',$name2);
				}
				
			}
			if(isset($request->about_me)){
					if(!empty(get_user_meta($user_id,'about_me'))){
				      update_user_meta($user_id,'about_me',$request->about_me);
				     }else{
					  add_user_meta($user_id,'about_me',$request->about_me);
				     }
			}
			
			if(isset($request->unit_number)){
					if(!empty(get_user_meta($user_id,'unit_number'))){
				      update_user_meta($user_id,'unit_number',$request->unit_number);
				     }else{
					  add_user_meta($user_id,'unit_number',$request->unit_number);
				     }
			}
			
			
			$business_data=array('businss_name'=>$request->business_name,'business_start_date'=>$request->business_start_date,
			'business_contact'=>$request->business_contact,'business_address'=>$request->business_address);
			DB::table('business_info')->where('user_id',$user_id)->update($business_data);
		    DB::table('users')->where('id',$user_id)->update(array('email'=>$request->email));	 
			return redirect()->route('provider-company-info')->with('status','Record update successfully');
		
	}
	
	
	
	
	public function provider_deactivate_request(){
		return view('user.pages.provider.provider-deactivate-request');
	}
	
	public function provider_deactivate_request_save(Request $request){
		$user_id=$request->user_id;
		DB::table('users')->where('id',$user_id)->update(['status'=>0]);
		
		
		
		 $to_name = Auth::user()->name;
		$to_email=Auth::user()->email;
		
		$mdata = array("name"=>$to_name, "body" => "Account Create");
		Mail::send("notification.DeactivationConfirmation",['data'=>$mdata], function($message) use ($to_name, $to_email) {
			$message->to($to_email, $to_name)->subject("Account Deactivation Request");
			$message->from("support@selecttask.com","selecttask");
			});
		
		
		$result=array('code'=>200,'message'=>"Account deactivate successfully");
		return json_encode($result);
	}
	
	
	public function provider_edit_profile(){
		return view('user.pages.provider.provider-edit-profile');
	}
	
	public function provider_update_profile(Request $request){
	   
		    $user_id=$request->user_id;
			if(isset($request->profile_image)){
			$file=$request->file('profile_image');
			$name=time().$file->getClientOriginalName();
			$file->move(public_path('uploads/service_provider/profile'),$name);
					
			if(!empty(get_user_meta($user_id,'profile_image'))){
				    update_user_meta($user_id,'profile_image',$name);
				}else{
					add_user_meta($user_id,'profile_image',$name);
				}
			}
			if(!empty(get_user_meta($user_id,'phone'))){
				    update_user_meta($user_id,'phone',$request->phone);
				}else{
					add_user_meta($user_id,'phone',$request->phone);
				}
			
			$data=array('name'=>$request->name,'email'=>$request->email);
			DB::table('users')->where('id',$user_id)->update($data);
			return redirect()->route('provider-my-profile')->with('status','Record update successfully');
			
	}
	
	
	
	public function provider_location_settings(){
		return view('user.pages.provider.provider-location-settings');
	}
	
	public function provider_my_profile(){
		return view('user.pages.provider.provider-my-profile');
	}
	
	public function provider_notification_settings_combined(){
		return view('user.pages.provider.provider-notification-settings-combined');
	}
	
	public function provider_notification_settings(){
		return view('user.pages.provider.provider-notification-settings');
	}
	public function provider_notification_settings_save(Request $request){
		
		
		$user_id=$request->user_id;
		
		if(isset($request->new_applicant)){
			$new_applicant=1;
		}else{
			$new_applicant=2;
		}
		if(!empty(get_user_meta($user_id,'new_applicant'))){
			update_user_meta($user_id,'new_applicant',$new_applicant);
			
		}else{
			add_user_meta($user_id,'new_applicant',$new_applicant);
		}
		
		
		
		
		if(isset($request->text_notification)){
			$text_notification=1;
		}else{
			$text_notification=2;
		}
		if(!empty(get_user_meta($user_id,'text_notification'))){
			update_user_meta($user_id,'text_notification',$text_notification);
			
		}else{
			add_user_meta($user_id,'text_notification',$text_notification);
		}
		
		
		
		if(isset($request->task_reminder)){
			$task_reminder=1;
		}else{
			$task_reminder=2;
		}
		if(!empty(get_user_meta($user_id,'task_reminder'))){
			update_user_meta($user_id,'task_reminder',$task_reminder);
			
		}else{
			add_user_meta($user_id,'task_reminder',$task_reminder);
		}
		
		
		
		if(isset($request->task_update)){
			$task_update=1;
		}else{
			$task_update=2;
		}
		if(!empty(get_user_meta($user_id,'task_update'))){
			update_user_meta($user_id,'task_update',$task_update);
		}else{
			add_user_meta($user_id,'task_update',$task_update);
		}
		$url=route('provider-notification-settings');
		return redirect()->to($url)->with('status','Record Update successfully');
	}
	
	
	public function provider_payment_information(){
		return view('user.pages.provider.provider-payment-information');
	}
	
	public function provider_portfolio(){
		return view('user.pages.provider.provider-portfolio');
	}
	
	public function provider_search_task(){
		return view("user.pages.provider.provider-search-task");
	}
	
	public function provider_service_settings(){
		return view('user.pages.provider.provider-service-settings');
	}
	
	public function provider_Status_AssignedtoAnotherProfessional(){
		return view('user.pages.provider.provider-Status-AssignedtoAnotherProfessional');
	}
	
	public function provider_Status_inprogress(){
		return view('user.pages.provider.provider-Status-inprogress');
	}
	
	public function provider_Status_open(Request $request){
		 $id=$request->id;
		
		$data=DB::table("task")->where("id",$id)->first();
		
		return view("user.pages.provider.provider-Status-open-1")->with('data',$data);
	}
	
	public function provider_StatusAwaitingAssignment_Open(){
		return view('user.pages.provider.provider-StatusAwaitingAssignment-Open');
	}
	
	public function provider_tasks_list(){
		
		return view('user.pages.provider.provider-tasks-list');
	}
	
	public function provider_text_notification(){
		return view('user.pages.provider.provider-text-notification');
	}
	
	public function provider_transaction_history(){
		
		$user_id=Auth::user()->id;
		$data=DB::table('transaction')->where('user_id',$user_id)->get();
		
		return view('user.pages.provider.provider-transaction-history')->with('data1',$data);
	}
	
	public function about_preview(){
		return view('user.pages.provider.about-preview');
	}
	
	public function provider_projects_listing(){
		
		$user_id=Auth::user()->id;
	    
	    $db=DB::table('portfolio')->where('user_id',$user_id)->get();
		return view('user.pages.provider.provider-projects-listing')->with('data',$db);
	}
	
	public function provider_ratings_reviews(){
		
		$user_id=Auth::user()->id;
		$data=DB::table('reviews')->where('user_id',$user_id)->get();
		return view('user.pages.provider.provider-ratings-reviews')->with('data',$data);
	}
	
	public function provider_licence_details(){
		
		$user_id=Auth::user()->id;
		$data=DB::table('business_license_info')->where('user_id',$user_id)->get();
		
		return view('user.pages.provider.provider-licence-details')->with('data',$data);
	}
	
	public function post_task_images(Request $request){
		$id=$request->id;
		$data=DB::table("task")->where("id",$id)->first();
		if(!empty($data)){
			$image=json_decode($data->images);
			if(!empty($image)){
				$html='';
				$i=0;
				foreach($image as $image){
					$class='';
					if($i==0){
						$class='active';
					}
					$html .='<div class="carousel-item '.$class.'">
                      <img src="'. url("/").'/public/uploads/user/post-task/'.$image.'">
                     </div>';
					 ++$i;
				}
				
				$result=array('code'=>200,'html'=>$html,'message'=>'Record Show Succesfully');
			}else{
				$html ='<div class="carousel-item active">
                      <img src="'. url('/').'/public/user/assets/images/No_Image_Available.jpg">
                     </div>';
			 $result=array('code'=>200,'html'=>$html,'message'=>'Record Show Succesfully');
			}
		}else{
			$result=array('code'=>201,'message'=>'invalid Task Record');
		}
		return json_encode($result);
		
	}
	
	
	public function send_text_message($contact_no, $message){
	 	
		 if(get_option('message_active')==1){
			 $sid=get_option('sid');
			 $token=get_option('token');;
			 $num=get_option('phone');;
		$client = new Client($sid, $token);
		
		  $message = $client->messages 
                  ->create($contact_no, 
                           array(  
                               "messagingServiceSid" => "MG015ed206162a76ab864f4826b86a08ba",      
                               "body" =>$message
                           ) 
                  ); 
				  
		 }
		
	}
	
	public function apply_task(Request $request){
		
		$task_id=$request->id;
		$task_data=get_job_by_id($task_id);
		$user_id=$request->user_id;
		$task_user_id=$task_data->user_id;
		$task_url=route('status-open',['id'=>$task_id]);
		$mess_text='Pros are applying to your Task on Select Task - be sure to assign one to the project ASAP to get started.( '.$task_url.' )';
		$c_mess='Thanks You for apply the job.( '.$task_url.' )';
		 $user_status=get_user_noti_text_status($task_user_id);
		 $pay_data=DB::table('payment_card')->where('user_id',$user_id)->get();
		 
		
		 Stripe\Stripe::setApiKey('sk_test_51GwbedCc07NNKuuNFG2HzktHxxwFBYOcnDWK4zyJXDiIXsl4IrvYVlgo6CyxL4qD9buVPLtFeti0tDd4gUt2RPum001FLMZCBm');
        
		 	
		
		 
		 
		if($user_status=="yes"){
			
			$phone=get_user_meta($task_user_id,'phone');
			 $phone=str_replace("-","",str_replace(")","",str_replace("(","",str_replace(" ","",$phone))));
			
			$this->send_text_message($phone,$mess_text);
		}
		 $cuser_status=get_user_noti_text_status($user_id);
			/**********  customer info ***********/
			if($cuser_status=="yes"){
			$c_phone=get_user_meta($user_id,'phone');
			 $c_phone=str_replace("-","",str_replace(")","",str_replace("(","",str_replace(" ","",$c_phone))));
			
			$this->send_text_message($c_phone,$c_mess);
				 
		}
		
		
		
		
		$task_id=$request->id;
		
		$task_arr=array();
		if(!empty(get_task_meta($task_id,'applicant_user'))){
			$task_arrd=get_task_meta($task_id,'applicant_user');
			$task_arr=json_decode($task_arrd);
			$task_arr=(array)$task_arr;
			$aa=$task_arr['apply_user'];
			array_push($aa,$user_id);
			$aa1=array_unique($aa);
			$task_arr['apply_user']=$aa1;
			update_task_meta($task_id,'applicant_user',json_encode($task_arr));
		}else{
			$task_arr['apply_user']=array($user_id);
			add_task_meta($task_id,'applicant_user',json_encode($task_arr));
		}
	$charge = \Stripe\Charge::create(['amount' => 1000,'currency' => 'usd','customer' =>$request->card_info,]);
		     $trans_data=array('user_id'=>$user_id,'task_id'=>$task_id,'transaction_id'=>$charge->id,'amount'=>10,'invoice_no'=>uniqid());
			 DB::table('transaction')->insert($trans_data);
		$task_list=array();
		if(!empty(get_user_meta($user_id,'task_list'))){
			$task_list=get_user_meta($user_id,'task_list');
			$task_list=json_decode($task_list);
			$task_list=(array)$task_list;
			
				 $kk=$task_list['apply'];
				
			 array_push($kk,$task_id);
			  $bb=array_unique($kk);
			  $task_list['apply']=$bb;
			 update_user_meta($user_id,'task_list',json_encode( $task_list));
		}else{
            $task_list['apply']=array($task_id);
			add_user_meta($user_id,'task_list',json_encode($task_list));
		}
		
		$task_data=get_job_by_id($task_id);
		$task_user=get_userdata($task_data->user_id);
		$to_name = $task_user->name;
		$to_email=$task_user->email;
		
		
		$mdata = array("name"=>$to_name, 'email'=>$to_email,'user_id'=>$user_id,'task_id'=>$task_id);
		Mail::send("notification.TaskBid_NewApplicant",['data'=>$mdata], function($message) use ($to_name, $to_email) {
			$message->to($to_email, $to_name)->subject(" Assigned A New Task");
			$message->from("support@selecttask.com","SelectTask");
			});
		
		
		
		$result=array('code'=>200,'message'=>'Task Apply Succesfully','action'=>route('provider-Status-open',['id'=>$task_id]));
		return json_encode($result);
		
	}
	
	public function view_invoice($id){
		$data=DB::table('task')->where('id',$id)->first();
		return view('user.pages.provider.view-invoice')->with('task_id',$id)->with('data',$data);
	}
	
	
	  
	
	
	
	
	public function provider_list_filter(Request $request){
		
	if(isset($request->search_task)){
		$html='';
		$user_id=$request->user_id;
		$result=array();
		if(isset($request->services_cat)){
		$data=DB::table("task")->where('category',$request->services_cat)->get();
		}else{
			$data=DB::table("task")->get();
		}
		$total_job=0;
	foreach($data as $data){
		 $hired=0;
		  $complete=0;
		   $task_meta=get_task_meta($data->id,'applicant_user');
		   
		   if(isset($task_meta)){
						$task_meta1=json_decode($task_meta);
						if(isset($task_meta1->hire)){
							$hired=$task_meta1->hire;
						}
						if(isset($task_meta1->complete)){
							$complete=$task_meta1->complete;
						}
					}
					
					 if( empty($hired) && empty($complete)){
						 $disabledd='';
							$task_user_id=get_task_meta($data->id,'applicant_user');
							$task_user_id=json_decode($task_user_id);
							
							if(isset($task_user_id->apply_user)){
								if(in_array($user_id,$task_user_id->apply_user)){
									$disabledd='disabled_link';
								}
							}
						 
						 if(empty($disabledd)){
							 ++$total_job;
						 }
						 
		$html .='<div class="col-lg-4 col-md-6 form-group '.$disabledd.'" data-position="'. $data->id .'">
                        <div class="wtBox listDetailsBox">                           
                            <div class="listBottomRows">
                               
                                <div class="listDetailsRow d-flex justify-content-between">
                                    <div class="listDetailsLeft">
                                        <label>Job Location</label>
                                        <p>';
										
									if(!empty(get_address_by_id($data->address))){
										$html .= get_address_by_id($data->address)->address;
									}
									$html .='</p>
                                    </div>
									<div class="listDetailsLeft text-right">
                                        <label>Category</label>
                                        <p>'.get_services_category_by_id($data->category) .'</p>
                                    </div>
                                </div>
                                <div class="listDetailsRow d-flex justify-content-between">
                                    
                                    <div class="listDetailsLeft ">
                                        <label>Price</label>
                                        <p>$10</p>
                                    </div>
									 <div class="listDetailsLeft text-right">
                                        <label>Total Applicants</label>
                                        <p>2</p>
                                    </div>
                                </div>
                                

                                <div class="listDetailsRow d-flex justify-content-between">
                                    <div class="listDetailsLeft">
                                        <label>Date</label>
                                        <p>'.date("d/m/y", strtotime($data->date)).'</p>
                                    </div>
                                    <div class="listDetailsLeft text-right">
                                        <label>Time</label>
                                        <p>'.date("h:ia",strtotime($data->time)) .'</p>
                                    </div>
                                </div>
                               
                               
                            </div>';
							
							
							
                           $html .=' <div class="buttonRowList d-flex justify-content-between align-items-center">
                                <a href="'. route('provider-Status-open',['id'=>$data->id]) .'" class="text-primary semiBold underlinelink f-16">Read More</a>
                                <a href="#" class="btn btnLg btn-green btn-secondary-shadow applynow_popup '.$disabledd .'" data-id="'.$data->id .'" data-user_id="'.$user_id .'" data-toggle="modal"  data-target="#applyJobModal">Apply Now </a>
                            </div>
                        </div>
                    </div>';
					 }
	}
	if($total_job==0){
		$html='';
	}
	if(!empty($html)){
		$result=array('code'=>200,'html'=>$html);
	}else{
				$html='<div class="noData-Div col-md-12">
								<p class="noApplicantText">Sorry No Data Found</p>
								<p><a href="'.route('provider-search-task').'" class="btn btn-orange-outline text-lato">Search Task</a></p>
								<p class="charImage"><img src="'. url('/public/user/').'/assets/images/no-data.svg" alt=""></p>
							</div> 	';
							
		$result=array('code'=>200,'html'=>$html);
			}
	
	$result=array('code'=>200,'html'=>$html);
	return json_encode($result);
		
	}else{
		
		$user_id=$request->user_id;
		$status=$request->job_status;
		$cat= $request->services_cat;
		$task_list=get_user_meta($user_id,'task_list');
		$job_all_array=array();
		$job_all=json_decode($task_list);
		$hired=array();
		$complete_arr=array();
		
		if(empty($status) ){
			
			if(isset($job_all->apply)){
				foreach($job_all->apply as $jaa){
					$job_all_array[]=$jaa;
				}
			}
			if(isset($job_all->hire)){
				$hired=$job_all->hire;
				foreach($job_all->hire as $jah){
					$job_all_array[]=$jah;
					
				}
			}
			if(isset($job_all->complete)){
				$complete_arr=$job_all->complete;
				foreach($job_all->complete as $jah){
					$job_all_array[]=$jah;
					
				}
			}
			
			
		}elseif($status=='awaiting_ass'){
			if(isset($job_all->apply)){
				$job_apply=array();
				foreach($job_all->apply as $jo){
					if(get_assign_to_another($jo,$user_id)!=1){
					$job_apply[]=$jo;
					}
				}
				
			$job_all_array=$job_apply;
			}
		}elseif($status=='progress'){
			if(isset($job_all->hire)){
			$job_all_array=$job_all->hire;
			$hired=$job_all->hire;
			}
		}elseif($status=='complete'){
			if(isset($job_all->complete)){
			$job_all_array=$job_all->complete;
			$complete_arr=$job_all->complete;
			}
		}elseif($status=='awaiting_ass_to_another'){
			$job_another_p=array();
			if(isset($job_all->apply)){
				foreach($job_all->apply as $jo){
					if(get_assign_to_another($jo,$user_id)==1){
					$job_another_p[]=$jo;
					}
				}
			
			}
			$job_all_array=$job_another_p;
		}
	
		
	  
		$html='';
		$result=array();
		if(count($job_all_array)>0){
			$st_arr=array();
			foreach($job_all_array as $com_arr){
				
				if(!empty($cat)){
					$apply_data=get_job_by_id_with_category($com_arr,$cat);
				}else{
					$apply_data=get_job_by_id($com_arr);
				}
				 
				 if(!empty($apply_data)){
					 $html .='<div class="col-lg-4 col-md-6 form-group" data-position="'.$com_arr.'">
                        <div class="wtBox listDetailsBox">                           
                            <div class="listBottomRows">
                                <div class="listDetailsRow d-flex justify-content-between">
                                    <div class="listDetailsLeft">
                                        <label>Job Location</label>
                                        <p>';
						if(!empty(get_address_by_id($apply_data->address))){
					$html .=get_address_by_id($apply_data->address)->address;
						}
					$html .='</p>
                                    </div>  
                                    <div class="listDetailsRight text-right">
                                        <label>Category</label>
                                        <p>'.get_services_category_by_id($apply_data->category).'</p>
                                    </div>                                 
                                </div>
                                <div class="listDetailsRow d-flex justify-content-between">
                                    <div class="listDetailsLeft">
                                        <label>Contact Name</label>
                                        <p>';
									if(!empty(get_userdata($apply_data->user_id))){
										$html .=get_userdata($apply_data->user_id)->name;
									}	
									$html .='	</p>
                                    </div>
                                    <div class="listDetailsRight text-right">
                                        <label>Contact Number</label>
                                        <p>'.get_user_meta($apply_data->user_id,"phone" ).'</p>
                                    </div>
                                </div>
                                <div class="listDetailsRow d-flex justify-content-between">
                                    <div class="listDetailsLeft">
                                        <label>Date</label>
                                        <p>'. date("d/m/y", strtotime($apply_data->date)).'</p>
                                    </div>
                                    <div class="listDetailsLeft text-right">
                                        <label>Time</label>
                                        <p> '.date("h:ia",strtotime($apply_data->time)) .'</p>
                                    </div>
                                </div>
                                <div class="listDetailsRow d-flex justify-content-between align-items-center">
                                    <div class="listDetailsLeft">
                                        <label>Status</label>';
										if(get_assign_to_another($com_arr,$user_id)==1){
										$html .=' <p class="readyToHire Bold">Assigned to another professional</p>';
										}elseif(in_array($com_arr,$hired)){
										$html .=' <p class="readyToHire Bold">In Progress</p>';
									    }elseif(in_array($com_arr, $complete_arr)){
										$html .='	<p class="readyToHire Bold">Complete</p>';
										}else{									
                                       $html .=' <p class="readyToHire Bold">Awaiting Assignment</p>';
										}
									
                                    $html .=' </div>
                                    <div class="listDetailsRight text-right">
                                        <a href="'. route("provider-Status-open",["id"=>$apply_data->id]).'" class="text-primary semiBold underlinelink f-16">Read More</a>
                                    </div>
                                </div> 
                            </div>
                          
                        </div>
                    </div>';
					 
					 
				 }else{
					$st_arr[]=$com_arr;
				 }
			}
			
			if(!empty($html)){
		$result=array('code'=>200,'html'=>$html);
			}else{
				$html='<div class="noData-Div col-md-12">
								<p class="noApplicantText">Sorry No Data Found</p>
								<p><a href="'.route('provider-search-task').'" class="btn btn-orange-outline text-lato">Search Task</a></p>
								<p class="charImage"><img src="'. url('/public/user/').'/assets/images/no-data.svg" alt=""></p>
							</div> 	';
							
		$result=array('code'=>200,'html'=>$html);
			}
			
		}else{
			$html='<div class="noData-Div col-md-12">
								<p class="noApplicantText">Sorry No Data Found</p>
								<p><a href="'.route('provider-search-task').'" class="btn btn-orange-outline text-lato">Search Task</a></p>
								<p class="charImage"><img src="'. url('/public/user/').'/assets/images/no-data.svg" alt=""></p>
							</div> 	';
							
		$result=array('code'=>200,'html'=>$html);
			
		}
		
		return json_encode($result);
        		
	   }
	}
	
	
public function get_client_ip()
{
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP'])) {
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    } else if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else if (isset($_SERVER['HTTP_X_FORWARDED'])) {
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    } else if (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    } else if (isset($_SERVER['HTTP_FORWARDED'])) {
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    } else if (isset($_SERVER['REMOTE_ADDR'])) {
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    } else {
        $ipaddress = 'UNKNOWN';
    }

    return $ipaddress;
}
	public function provider_trans(Request $request){
		
	       
         
			
	 
	     $user_id=Auth::user()->id;
		 $data=array();
		 $data_date=array('to'=>'','from'=>'');
		 if(isset($request->day)){
		 $day=$request->day;
		
		if($day=="last-week"){
		 $date = \Carbon\Carbon::today()->subDays(7);
		 
		 $currentDate = \Carbon\Carbon::now();
		 $to2=  date("Y-m-d", strtotime("last week monday"));
         $from2 = date("Y-m-d", strtotime("last sunday"));; 
		 $to3=date('m/d/Y',strtotime($to2));
		 $from3=date('m/d/Y',strtotime($from2));
		$data_date=array('to'=>$to3,'from'=>$from3);
		 
		$data=DB::table('transaction')->where('user_id',$user_id)->whereBetween('created_at',[$to2,$from2])->get();
		}else if($day=="last-month"){
			$last_month= date('m',strtotime(date('Y-m')." -1 month"));
			
			$to_from=date("m/d/Y",strtotime(date('Y-m')." -1 month"));
			$to2=date('m/01/Y', strtotime($to_from));
			$from2=date('m/t/Y', strtotime($to_from));
			
			
			$data_date=array('to'=>$to2,'from'=>$from2);
		$data=DB::table('transaction')->where('user_id',$user_id)->whereMonth('created_at', $last_month)->whereYear('created_at', date('Y'))->get();
		}else if($day=="last-year"){
			
			$year = date('Y') - 1;
			 $to2 = "01/01/".$year;
             $from2 = "12/31/".$year;
			$data_date=array('to'=>$to2,'from'=>$from2);
			 $last_year= date('Y',strtotime(date('Y-m')." -1 year"));
		$data=DB::table('transaction')->where('user_id',$user_id)->whereYear('created_at', $last_year)->get();
		     }
		 }
		 $from='';
		 $to='';
		 if(isset($request->to) && isset($request->from)){
			 $from=$request->from;
			 $to=$request->to;
			
			 $startDate = \Carbon\Carbon::createFromFormat('m/d/Y', $from);
            $endDate = \Carbon\Carbon::createFromFormat('m/d/Y', $to);
			$data=DB::table('transaction')->whereBetween('created_at',[$startDate,$endDate])->get();
		
		 }
		 
		$html='';
		if(count($data)>0){
			foreach($data as $data){
				/* if(!empty($from) && !empty($to)){
					$created_at=date("d/m/Y",strtotime($data->created_at));
					$from=date("d/m/Y",strtotime($from));
					$to=date("d/m/Y",strtotime($to));
					
					if(($created_at >=$from) && ($created_at <=$to)){
						
					}else{
						continue;
					}
				}
				 */
				$html .=' <div class="gridRow line-content  justify-content-between" data-position="'.$data->id.'">
                            <div class="transHisCol transHisCol-1 d-flex justify-content-between">
                                <div class="servicesCatColLeft">
                                    <label class="grayLabel d-block d-md-none">Payment Date</label>
                                    <p class="mSemiBold">'.date("m/d/Y",strtotime($data->created_at)).'</p>
                                </div>
                                <div class="servicesCatColRight">
                                    <label class="grayLabel d-block d-md-none">Amount Paid</label>
                                    <p class="mSemiBold">$'. $data->amount .'</p>
                                </div>
                            </div>

                            <div class="transHisCol transHisCol-Category">
                                <label class="grayLabel d-block d-md-none">Category</label>';
								
								$cate_name='';
								  $task_data=get_job_by_id($data->task_id);
								  if(!empty($task_data)){
									  $cat_id=$task_data->category;
									 $cate_name= get_services_category_by_id($cat_id);
								  }
								  
								  
								
								
                           $html .=' <p class="mSemiBold">'. $cate_name .'</p> 
                            </div>

                            <div class="transHisCol transHisCol-4 d-flex justify-content-between">
                                <div class="servicesCatColLeft">
                                    <label class="grayLabel d-block d-md-none">Job Detail</label>
                                    <p class="mSemiBold"><a href="'. route('provider-Status-open',['id'=>$data->task_id]).'" class="underlinelink textgreen semiBold f-16">View</a></p>
                                </div>
                                <div class="servicesCatColRight">
                                    <label class="grayLabel d-block d-md-none">Invoice No.</label>
                                    <a href="'.route('view-invoice',['id'=>$data->task_id]).'" class="underlinelink text-secondary uppercase">#'.$data->invoice_no .'</a>
                                </div>
                            </div>                           
                        </div>';
			}
		}
		
		if(empty($html)){
			 $html .='<div class="noData-Div col-md-12">
								<p class="noApplicantText">Sorry No Data Found</p>
								
								<p class="charImage"><img src="'. url('/public/user/').'/assets/images/no-data.svg" alt=""></p>
							</div> ';
		}
		
		$result=array('code'=>200,'html'=>$html,'date'=>$data_date);
		return json_encode($result);
		
	}
	
}
