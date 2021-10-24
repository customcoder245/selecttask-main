<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Image;
use Auth;
use DB;
use Twilio\Rest\Client;
use Mail;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
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
   
	
	public function my_profile(){
		return view('user.pages.profile');
	}
	public function my_address(){
		$id=Auth::user()->id;
		$addres=DB::table('address')->where('user_id',$id)->get();
		return view('user.pages.address')->with('address',$addres);
	}
	public function change_password(){
		return view('user.pages.change-password');
	}
	public function edit_profile(){
		return view('user.pages.edit-profile');
	}
	
	public function profile_update(Request $request){
		
		$user_id=$request->user_id;
        $request->validate([
            'name' =>'required|string|max:255',
            'email'=>'required|email|string|max:255'
            ]);
			if(isset($request->image)){
				request()->validate(['image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',]);
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        $input['image'] = $imageName;
        request()->image->move(public_path('uploads/user/profile'), $imageName);
		
		if(!empty(get_user_meta($user_id,'profile_image'))){
			update_user_meta($user_id,'profile_image',$imageName);
		}else{
			add_user_meta($user_id,'profile_image',$imageName);
		}
			}
		update_user_meta($user_id,'phone',$request->phone);
		$user =Auth::user();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->save();
		return redirect()->route('profile')->with('status', 'Profile updated!');
		
		
	}
	
	
	public function password_update(Request $request){
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
				
				
				
				return redirect()->route('profile')->with('status', 'Password Update Succesfully');
			}else{
			   return redirect()->route('change-password')->with('status', 'Confirm Password Not Match');	
			}
			
			
		}else{
			return redirect()->route('change-password')->with('status', 'Old Password Not Correct! Please Try Again.');
		}
	}
	
	public function address_save(Request $request){
		
		$address=$request->address;
		
		//$address=str_replace(" ","",$address);
		//$add=explode(',',$address);
		if(preg_match('/NY/',$address) || preg_match('/ny/',$address)){
				
		$user_id=Auth::user()->id;
		$array=array('user_id'=>$user_id,'address_type'=>$request->address_type,'address'=>$request->address,'apartment'=>$request->apartment);
		$data=DB::table('address')->insert($array);
		if($data){
			$data=array('code'=>200,'status'=>'Address Added Successfully');
		}else{
			$data=array('code'=>201,'status'=>'Something Went Wrong! Please Try Again');
		}
		}else{
		$data=array('code'=>204,'status'=>'Invlid address');
		}
		
		return json_encode($data);
		
	}
	public function address_delete($id){
		
		DB::table('address')->where('id',$id)->delete();
		return redirect()->route('address')->with('status', 'Address Delete Successfully');
	}
	
	public function address_edit($id){
		$data=DB::table('address')->where('id',$id)->first();
		if(!empty($data)){
			$result=array('code'=>200,'data'=>$data);
		}else{
			$result=array('code'=>201,'data'=>$data);
		}
		return json_encode($result);
		
	}
	public function address_update(Request $request){
		$array=array('address_type'=>$request->address_type,'address'=>$request->address,'apartment'=>$request->apartment);
		$id=$request->id;
		$data=DB::table('address')->where('id',$id)->update($array);
		if(!empty($data)){
			$data=array('code'=>200,'status'=>'Address update Successfully');
		}else{
			$data=array('code'=>201,'status'=>'Something Went Wrong! Please Try Again');
		}
		return json_encode($data);
	}
	
	public function notification_setting(){
		return view('user.pages.notification-settings');
	}
	
	public function notification_setting_save(Request $request){
		
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
		$url=route('notification-setting');
		return redirect()->to($url)->with('status','Record Update successfully');
		
		
	}
	
	
	
	public function text_notification(){
		return view('user.pages.text-notification');
	}
	
	public function update_user_info(Request $request){
		$user_id=$request->user_id;
		$meta_key=$request->meta_key;
		$meta_value=$request->meta_value;
		if(!empty(get_user_meta($user_id,$meta_key))){
			update_user_meta($user_id,$meta_key,$meta_value);
			
		}else{
			add_user_meta($user_id,$meta_key,$meta_value);
		}
		$result=array('code'=>200,'message'=>'record save successfully');
		return json_encode($result);
	}
	
	public function status_awaiting_assignment(){
		return view('user.pages.Status-Awaiting-assignment');
	}
	
	public function status_inprogress(){
		return view('user.pages.Status-inprogress');
	}
	
	public function status_open($id){
		$data=DB::table('task')->where('id',$id)->first();
		
		return view('user.pages.Status-open')->with('data',$data);
	}
	
	public function statusCompleted_withoutreview(){
		return view('user.pages.StatusCompleted-withoutreview');
	}
	public function statusCompleted_withreview(){
		return view('user.pages.StatusCompleted-withreview');
	}
	
	public function profile_preview($id){
		$user_id=$id;
		$p_data=DB::table('portfolio')->where('user_id',$user_id)->get();
		
		$r_data=DB::table('reviews')->where('user_id',$user_id)->get();
		$b_data=DB::table('business_license_info')->where('user_id',$user_id)->get();
		return view('user.pages.about-preview')->with('user_id',$user_id)->with('p_data',$p_data)->with('r_data',$r_data)->with('b_data',$b_data);
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
	
	
	public function assign_job(Request $request){
		
		$user_id=$request->user_id;
		$task_id=$request->task_id;
		
		$user_task=get_user_meta($user_id,'task_list');
		
		$user_task=json_decode($user_task);
		
		$user_update_array=array();
		$hire_user=array();
		$apply=array();
		$com_user=array();
		$hire_user1=array();
		
		if(isset($user_task->apply)){
		foreach($user_task->apply as $user_task_apply){
			if($user_task_apply !== $task_id){
				$apply[]=$user_task_apply;
			}
		  }
		}
		if(isset($user_task->hire)){
			$hire_user=$user_task->hire;
			array_push($hire_user,$task_id);
		}
	
		if(isset($user_task->complete)){
			$com_user=$user_task->complete;
			
		}
		
		
		$user_update_array['apply']=$apply;
		$user_update_array['hire']=$hire_user;
		$user_update_array['complete']=$com_user;
		
		
		$user_list=get_task_meta($task_id,'applicant_user');
		$user_list=json_decode($user_list);
		
		$up_user_arr=array();
		$apply_user_arr=array();
		if(isset($user_list->apply_user)){
			foreach($user_list->apply_user as $apply_user){
				
				if($apply_user !== $user_id){
					$apply_user_arr[]=$apply_user;
				}
			}
		}
		
		$user_status=get_user_noti_text_status($user_id);
		if($user_status=="yes"){
			 $phone=get_user_meta($user_id,'phone');
			 $phone=update_phone_no($phone);
			 $task_url=route('status-open',['id'=>$task_id]);
			 
			$mess_text='A job you applied to has been assigned to you. Check out your profile now and contact your customer ASAP to get started! ( '.$task_url.' )';
			$this->send_text_message($phone,$mess_text);
		}
		
		
		
		$up_user_arr['apply_user']=$apply_user_arr;
		$up_user_arr['hire']=$user_id;
		$invoice=uniqid();
		
		$cus_user_id=Auth::user()->id;
		$m_data=get_userdata($cus_user_id);
		
		$sp_data=get_userdata($user_id);
		 $to_name2 = $m_data->name;
		$to_email2=$m_data->email;
		
		 $to_name = $sp_data->name;
		$to_email=$sp_data->email;
		
		$address_id=get_job_by_id($task_id)->address;
		$address_name='';
		if(!empty(get_address_by_id($address_id))){
			$address_name=get_address_by_id($address_id)->address;
		}
		
		$mdata = array("name"=>$to_name2, 'email'=>$to_email2,'phone'=>get_user_meta($cus_user_id,'phone'),'address'=>$address_name,'task_id'=>$task_id);
		Mail::send("notification.SP_Assigned-for-Task",['data'=>$mdata], function($message) use ($to_name, $to_email) {
			$message->to($to_email, $to_name)->subject(" Assigned A New Task");
			$message->from("support@selecttask.com","SelectTask");
			});
		
		
		
		
		add_task_meta($task_id,'invoice_no',$invoice);
		update_task_meta($task_id,'applicant_user',$up_user_arr);
		update_user_meta($user_id,'task_list',$user_update_array);
		$result=array('code'=>200,'message'=>"Job assign successfully");
		
		return json_encode($result);
		
	}
	
	public function address_option(){
		$user_id=Auth::user()->id;
		$data=DB::table('address')->where('user_id',$user_id)->orderBy('id','desc')->get();
         $html='<option value="">Choose address</option>';		
 		if(count($data)>0){
			$i=0;
			foreach($data as $data){
				$db_sel='';
				if($i==0){
					$db_sel='selected';
				}
				++$i;
				$html .='<option value="'.$data->id.'" '.$db_sel.'>'.$data->address;
				 
				 if(!empty($data->apartment)){
					 $html .='-'.$data->apartment;
				 }
				 
				
				$html .='</option>';
			}
		}
		$result=array('code'=>200,'html'=>$html);
		return json_encode($result);
	}
	
	public function get_portfolio_by_id_customer(Request $request){
		$id=$request->id;
		$data=DB::table('portfolio')->where('id',$id)->first();
		$result_arr=array();
		$result_arr['title']=$data->portfolio_title;
		$result_arr['location']=$data->location;
		$result_arr['cost']=$data->cost;
		$result_arr['completion_date']=$data->completion_date;
		$result_arr['description']=$data->description;
		$img_arr=array();
		if(!empty($data->portfolio_image)){
			$img=json_decode($data->portfolio_image);
			
			foreach($img as $img_src){
				$img_arr[]=$img_src;
			}
		}
		$result_arr['images']=$img_arr;
		$result=array('code'=>200, 'html'=>$result_arr);
		return json_encode($result);
		
	}
	
	
	public function user_list_filter(Request $request){
		
		$user_id=$request->user_id;
		$cat=$request->services_cat;
		$job_status=$request->job_status;
		if(!empty($cat)){
			$data=DB::table("task")->where('category',$cat)->where('user_id',$user_id)->orderBy('id','desc')->get();
		}else{
			$data=DB::table("task")->where('user_id',$user_id)->orderBy('id','desc')->get();
		}
		$html='';
		 foreach($data as $data){
			  $task_meta=get_task_meta($data->id,'applicant_user');	
			  if(isset($task_meta)){
				   $task_meta=json_decode($task_meta);
				 if(empty($job_status)){
					$status="Open";
                   
					  if(isset( $task_meta->apply_user)){
						  $status="Awaiting Assignment";
					  } 
					  if(isset($task_meta->hire)){
						   $status="In Progress";
					  } 
					  if(isset($task_meta->complete)){
						   $status="Completed";
					  }	
                    $html .='<div class="col-lg-4 col-md-6 form-group" data-position="'.$data->id.'">
                        <div class="wtBox listDetailsBox">
                            <div class="listTopRow">
                                <label>Job Location</label>
                                <p>';
								
					   if(!empty(get_address_by_id($data->address))){
								
						 $html .=get_address_by_id($data->address)->address;
					   }
							$html .='	 </p>
                            </div>
                            <div class="listBottomRows">
                                <div class="listDetailsRow d-flex justify-content-between">
                                    <div class="listDetailsLeft">
                                        <label>Category</label>
                                        <p>';
                                       if(!empty(get_services_category_by_id($data->category))){
										$html .=get_services_category_by_id($data->category);   
									   }
										$html .='</p>
                                    </div>
                                    <div class="listDetailsRight text-right">
                                        <label>Status</label>
                                        <p class="readyToHire Bold">'.$status .'</p>
                                    </div>
                                </div>
                                <div class="listDetailsRow d-flex justify-content-between">
                                    <div class="listDetailsLeft viewApplicants">
                                        <label>Applicants </label>
                                        <p><a href="'. route("status-open",["id"=>$data->id]).'" class="text-primary semiBold underlinelink">View</a></p>
                                    </div>
                                    <div class="listDetailsRight text-right">
                                        <label>Preferred Time</label>';
										if($data->preferred_time==4){
										$html .='	 <p>'.date('d/m/Y',strtotime($data->start_time)).''. date('h:s a',strtotime($data->end_time)) .'</p>';
										}else{ 
                                       $html .=' <p>'.get_preferred_time($data->preferred_time).'</p>';
										}
                                  $html .='  </div>
                                </div>
                                <div class="listDetailsRow d-flex justify-content-between">
                                    <div class="listDetailsLeft">
                                        <label>Date</label>
                                        <p>'. date("d/m/Y",strtotime($data->date)).'</p>
                                    </div>
                                    <div class="listDetailsRight text-right">
                                        <label>Time</label>
                                        <p>'.  date("h:i:sa",strtotime($data->time)).'</p>
                                    </div>
                                </div>
                            </div>
                            <div class="buttonRowList text-center">   
                                <a href="'. route('status-open',['id'=>$data->id]).'" class="text-primary semiBold underlinelink f-16">Task Details</a>                                                        
                            </div>
                        </div>
                    </div>';
               					  
			  }elseif($job_status=="awaiting_ass"){
				  if(isset($task_meta->apply_user)  && !isset($task_meta->hire) && !isset($task_meta->complete)){
				  $status="Awaiting Assignment";
				   $html .='<div class="col-lg-4 col-md-6 form-group" data-position="'.$data->id.'">
                        <div class="wtBox listDetailsBox">
                            <div class="listTopRow">
                                <label>Job Location</label>
                                <p>';
								
					   if(!empty(get_address_by_id($data->address))){
								
						 $html .=get_address_by_id($data->address)->address;
					   }
							$html .='	 </p>
                            </div>
                            <div class="listBottomRows">
                                <div class="listDetailsRow d-flex justify-content-between">
                                    <div class="listDetailsLeft">
                                        <label>Category</label>
                                        <p>';
                                       if(!empty(get_services_category_by_id($data->category))){
										$html .=get_services_category_by_id($data->category);   
									   }
										$html .='</p>
                                    </div>
                                    <div class="listDetailsRight text-right">
                                        <label>Status</label>
                                        <p class="readyToHire Bold">'.$status .'</p>
                                    </div>
                                </div>
                                <div class="listDetailsRow d-flex justify-content-between">
                                    <div class="listDetailsLeft viewApplicants">
                                        <label>Applicants </label>
                                        <p><a href="'. route("status-open",["id"=>$data->id]).'" class="text-primary semiBold underlinelink">View</a></p>
                                    </div>
                                    <div class="listDetailsRight text-right">
                                        <label>Preferred Time</label>';
										if($data->preferred_time==4){
										$html .='	 <p>'.date('d/m/Y',strtotime($data->start_time)).''. date('h:s a',strtotime($data->end_time)) .'</p>';
										}else{ 
                                       $html .=' <p>'.get_preferred_time($data->preferred_time).'</p>';
										}
                                  $html .='  </div>
                                </div>
                                <div class="listDetailsRow d-flex justify-content-between">
                                    <div class="listDetailsLeft">
                                        <label>Date</label>
                                        <p>'. date("d/m/Y",strtotime($data->date)).'</p>
                                    </div>
                                    <div class="listDetailsRight text-right">
                                        <label>Time</label>
                                        <p>'.  date("h:i:sa",strtotime($data->time)).'</p>
                                    </div>
                                </div>
                            </div>
                            <div class="buttonRowList text-center">   
                                <a href="'. route('status-open',['id'=>$data->id]).'" class="text-primary semiBold underlinelink f-16">Task Details</a>                                                        
                            </div>
                        </div>
                    </div>';
				  }
			  }elseif($job_status=="progress"){
				  if(isset($task_meta->hire) && !isset($task_meta->complete)){
				  $status="In Progress";
				   $html .='<div class="col-lg-4 col-md-6 form-group" data-position="'.$data->id.'">
                        <div class="wtBox listDetailsBox">
                            <div class="listTopRow">
                                <label>Job Location</label>
                                <p>';
								
					   if(!empty(get_address_by_id($data->address))){
								
						 $html .=get_address_by_id($data->address)->address;
					   }
							$html .='	 </p>
                            </div>
                            <div class="listBottomRows">
                                <div class="listDetailsRow d-flex justify-content-between">
                                    <div class="listDetailsLeft">
                                        <label>Category</label>
                                        <p>';
                                       if(!empty(get_services_category_by_id($data->category))){
										$html .=get_services_category_by_id($data->category);   
									   }
										$html .='</p>
                                    </div>
                                    <div class="listDetailsRight text-right">
                                        <label>Status</label>
                                        <p class="readyToHire Bold">'.$status .'</p>
                                    </div>
                                </div>
                                <div class="listDetailsRow d-flex justify-content-between">
                                    <div class="listDetailsLeft viewApplicants">
                                        <label>Applicants </label>
                                        <p><a href="'. route("status-open",["id"=>$data->id]).'" class="text-primary semiBold underlinelink">View</a></p>
                                    </div>
                                    <div class="listDetailsRight text-right">
                                        <label>Preferred Time</label>';
										if($data->preferred_time==4){
										$html .='	 <p>'.date('d/m/Y',strtotime($data->start_time)).''. date('h:s a',strtotime($data->end_time)) .'</p>';
										}else{ 
                                       $html .=' <p>'.get_preferred_time($data->preferred_time).'</p>';
										}
                                  $html .='  </div>
                                </div>
                                <div class="listDetailsRow d-flex justify-content-between">
                                    <div class="listDetailsLeft">
                                        <label>Date</label>
                                        <p>'. date("d/m/Y",strtotime($data->date)).'</p>
                                    </div>
                                    <div class="listDetailsRight text-right">
                                        <label>Time</label>
                                        <p>'.  date("h:i:sa",strtotime($data->time)).'</p>
                                    </div>
                                </div>
                            </div>
                            <div class="buttonRowList text-center">   
                                <a href="'. route('status-open',['id'=>$data->id]).'" class="text-primary semiBold underlinelink f-16">Task Details</a>                                                        
                            </div>
                        </div>
                    </div>';
				  }
					
				  
			  }elseif($job_status=="complete"){
				  if(isset($task_meta->complete) ){
				  $status="Completed";
				   $html .='<div class="col-lg-4 col-md-6 form-group" data-position="'.$data->id.'" >
                        <div class="wtBox listDetailsBox">
                            <div class="listTopRow">
                                <label>Job Location</label>
                                <p>';
								
					   if(!empty(get_address_by_id($data->address))){
								
						 $html .=get_address_by_id($data->address)->address;
					   }
							$html .='	 </p>
                            </div>
                            <div class="listBottomRows">
                                <div class="listDetailsRow d-flex justify-content-between">
                                    <div class="listDetailsLeft">
                                        <label>Category</label>
                                        <p>';
                                       if(!empty(get_services_category_by_id($data->category))){
										$html .=get_services_category_by_id($data->category);   
									   }
										$html .='</p>
                                    </div>
                                    <div class="listDetailsRight text-right">
                                        <label>Status</label>
                                        <p class="readyToHire Bold">'.$status .'</p>
                                    </div>
                                </div>
                                <div class="listDetailsRow d-flex justify-content-between">
                                    <div class="listDetailsLeft viewApplicants">
                                        <label>Applicants </label>
                                        <p><a href="'. route("status-open",["id"=>$data->id]).'" class="text-primary semiBold underlinelink">View</a></p>
                                    </div>
                                    <div class="listDetailsRight text-right">
                                        <label>Preferred Time</label>';
										if($data->preferred_time==4){
										$html .='	 <p>'.date('d/m/Y',strtotime($data->start_time)).''. date('h:s a',strtotime($data->end_time)) .'</p>';
										}else{ 
                                       $html .=' <p>'.get_preferred_time($data->preferred_time).'</p>';
										}
                                  $html .='  </div>
                                </div>
                                <div class="listDetailsRow d-flex justify-content-between">
                                    <div class="listDetailsLeft">
                                        <label>Date</label>
                                        <p>'. date("d/m/Y",strtotime($data->date)).'</p>
                                    </div>
                                    <div class="listDetailsRight text-right">
                                        <label>Time</label>
                                        <p>'.  date("h:i:sa",strtotime($data->time)).'</p>
                                    </div>
                                </div>
                            </div>
                            <div class="buttonRowList text-center">   
                                <a href="'. route('status-open',['id'=>$data->id]).'" class="text-primary semiBold underlinelink f-16">Task Details</a>                                                        
                            </div>
                        </div>
                    </div>';
				  }
			    }elseif($job_status=="open"){
					  if(!isset($task_meta->apply_user)  && !isset($task_meta->hire) && !isset($task_meta->complete)){
				  $status="Open";
				   $html .='<div class="col-lg-4 col-md-6 form-group" data-position="'.$data->id.'" >
                        <div class="wtBox listDetailsBox">
                            <div class="listTopRow">
                                <label>Job Location</label>
                                <p>';
								
					   if(!empty(get_address_by_id($data->address))){
								
						 $html .=get_address_by_id($data->address)->address;
					   }
							$html .='	 </p>
                            </div>
                            <div class="listBottomRows">
                                <div class="listDetailsRow d-flex justify-content-between">
                                    <div class="listDetailsLeft">
                                        <label>Category</label>
                                        <p>';
                                       if(!empty(get_services_category_by_id($data->category))){
										$html .=get_services_category_by_id($data->category);   
									   }
										$html .='</p>
                                    </div>
                                    <div class="listDetailsRight text-right">
                                        <label>Status</label>
                                        <p class="readyToHire Bold">'.$status .'</p>
                                    </div>
                                </div>
                                <div class="listDetailsRow d-flex justify-content-between">
                                    <div class="listDetailsLeft viewApplicants">
                                        <label>Applicants </label>
                                        <p><a href="'. route("status-open",["id"=>$data->id]).'" class="text-primary semiBold underlinelink">View</a></p>
                                    </div>
                                    <div class="listDetailsRight text-right">
                                        <label>Preferred Time</label>';
										if($data->preferred_time==4){
										$html .='	 <p>'.date('d/m/Y',strtotime($data->start_time)).''. date('h:s a',strtotime($data->end_time)) .'</p>';
										}else{ 
                                       $html .=' <p>'.get_preferred_time($data->preferred_time).'</p>';
										}
                                  $html .='  </div>
                                </div>
                                <div class="listDetailsRow d-flex justify-content-between">
                                    <div class="listDetailsLeft">
                                        <label>Date</label>
                                        <p>'. date("d/m/Y",strtotime($data->date)).'</p>
                                    </div>
                                    <div class="listDetailsRight text-right">
                                        <label>Time</label>
                                        <p>'.  date("h:i:sa",strtotime($data->time)).'</p>
                                    </div>
                                </div>
                            </div>
                            <div class="buttonRowList text-center">   
                                <a href="'. route('status-open',['id'=>$data->id]).'" class="text-primary semiBold underlinelink f-16">Task Details</a>                                                        
                            </div>
                        </div>
                    </div>';
				  }
					
				}
			 
			  }
			 
			 
		 }
		 
		 if(empty($html)){
			$html ='<div class="noData-Div col-md-12">
                    <p class="noApplicantText">Sorry No Data Found</p>
                    <p><a href="'. route('post-task').'" class="btn btn-orange-outline text-lato">Post a Task</a></p>
                    <p class="charImage"><img src="'. url('/public/user').'/assets/images/no-data.svg" alt=""></p>
                </div>	'; 
		 }
		 $result=array('code'=>200,'html'=>$html);
		return json_encode($result);
		
	}
	
	public function user_deactivate_request(){
		return view('user.pages.deactivate-request');
	}
	
	public function user_deactivate_request_save(Request $request){
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
	
	
	
}
