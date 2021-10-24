<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Image;
use Auth;
use DB;
use Twilio\Rest\Client;
use Illuminate\Support\Facades\Hash;
use Mail;

class PosttaskController extends Controller
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
   
	
	
	
	public function post_task(){
		return view('user.pages.post-task');
	}
	
	public function task_list(){
		$user_id=Auth::user()->id;
		$data=DB::table("task")->where('user_id',$user_id)->orderBy('id','desc')->get();
		
		return view('user.pages.task-list')->with('data',$data);
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
	
	
	public function post_task_save(Request $request){
		
		
		
		$user_id=Auth::user()->id;
		$images=array();
		if($files=$request->file('images')){
				foreach($files as $file){
					$name=$file->getClientOriginalName();
					
					$file->move(public_path('uploads/user/post-task'),$name);
					$images[]=$name;
				}
          }
		  $start_time='';
		  $end_time='';
		  if(isset($request->start_time)){
			  $start_time=$request->start_time;
		  }
		  if(isset($request->end_time)){
			  $end_time=$request->end_time;
		  }
		  
		 $data=array('user_id'=>$user_id,'category'=>$request->category,'address'=>$request->address,'preferred_time'=>$request->preferred_time,
		  'description'=>$request->description,"quotes"=>json_encode($request->quotes),'images'=>json_encode($images),'confirm_input'=>$request->confirm_input,
		  'end_time'=>$end_time,'start_time'=>$start_time,'status'=>'open');
		  $ids=DB::table('task')->insertGetId($data);
		  
		  $ut_data=get_userdata($user_id);
		   $to_name =$ut_data->name;
		   $to_email=$ut_data->email;
			  
		 $mdata = array("name"=>$to_name, "task_id" =>$ids);
		    Mail::send("notification.YourPost-HasBeen-Submitted",['data'=>$mdata], function($message) use ($to_name, $to_email) {
			 $message->to($to_email, $to_name)->subject("New Job Posted ");
			  $message->from("support@selecttask.com","New Job Posted");  
			}); 
		  
		  
		   $data_user=DB::table("users")->where('role','service_provider')->where('status',1)->get();
		  
		  
		 
		  foreach($data_user as $data_user){
			$data_user2=$data_user->id;
            $user_status=get_user_noti_text_status($data_user2);
		    if($user_status=="yes"){
			 $phone=get_user_meta($data_user2,'phone');
			 $services2=get_user_meta($data_user2,'services');
			 $services=explode(',',$services2);
			 
			 $phone=update_phone_no($phone);
			 $task_url=route('status-open',['id'=>$ids]);
			 $services_name=get_services_category_by_id($request->category);
		     	$mess_text='A new job for '.$services_name.' has been posted in New York - check it out now! ( '.$task_url.' )';
                if(in_array($request->category,$services)){			   
			       $this->send_text_message($phone,$mess_text);
				   
				   $this->send_email_new_post($data_user->name,$data_user->email,$ids);
				}
		    }		 

		 } 
		  
		  
		  $url_red=route('status-open',['id'=>$ids]);
		  return redirect()->route('status-open',['id'=>$ids])->with('status','Task Added Successfully');
		
	}
	
	public function send_email_new_post($uname,$uemail,$task_id){
		$to_name =$uname;
		$to_email=$uemail;
			  
		 $mdata = array("name"=>$to_name, "task_id" => $task_id);
		   Mail::send("notification.SP_New-Job-Post_ifnotautoapplied",['data'=>$mdata], function($message) use ($to_name, $to_email) {
			 $message->to($to_email, $to_name)->subject("New Job Posted ");
			$message->from("support@selecttask.com","New Job Posted"); 
			});
	}
	
	
	public function user_post_task_images(Request $request){
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
	
	public function markCompletedjob(Request $request){
		
		$user_id=$request->user_id;
		$task_id=$request->task_id;
		/*****************  task meta update ********/
		$hire='';
		$task_meta1=array();
		$user_meta1=array();
		$tstatus=0;
		$ustatus=0;
		$task_meta=get_task_meta($task_id,'applicant_user');
		if(isset($task_meta)){
			
			$task_meta=json_decode($task_meta);
			
			$task_meta1['apply_user']=$task_meta->apply_user;
			if(isset($task_meta->hire)){
				$hire=$task_meta->hire;
				$user_id=$hire;
				$task_meta1['hire']='';
				$task_meta1['complete']=$hire;
			}
			
			$tstatus=1;
		}
		$user_id2=$hire;
		/************ user meta update *************/
		$user_meta=get_user_meta($user_id2,'task_list');
		
		if(isset($user_meta)){
			$user_meta2=json_decode($user_meta);
			
			$u_apply=array();
			$u_hire=array();
			$u_complete=array();
			if(isset($user_meta2->apply)){
				$u_apply=$user_meta2->apply;
			}
			
			$user_meta1['apply']=$u_apply;
			if(isset($user_meta2->hire)){
				$uhire=$user_meta2->hire;
				
				foreach($uhire as $uhire1){
					if($uhire1 !==$task_id){
						$u_hire[]=$uhire1;
					}
				}
				}
				$user_meta1['hire']=$u_hire;
			if(isset($user_meta2->complete)){
				$u_complete=$user_meta2->complete;
				
			}
			
			array_push($u_complete,$task_id);
			$user_meta1['complete']=$u_complete;
			$ustatus=1;
			
		}

		
		if(($ustatus==1) && ($tstatus==1)){
			add_task_meta($task_id,'review_status',0);
			update_task_meta($task_id,'applicant_user',json_encode($task_meta1));
			
			update_user_meta($user_id2,'task_list',json_encode($user_meta1));
			
			$task_data=get_job_by_id($task_id);
			$task_user=$task_data->user_id;
			
			$task_u_data=get_userdata($task_user);
			
			  $to_name = $task_u_data->name;
		      $to_email=$task_u_data->email;
		
		   $mdata = array("name"=>$to_name, "task_id" => $task_id,'user_id'=>$task_u_data->id,'phone'=>get_user_meta($task_u_data->id,'phone'));
		   Mail::send("notification.Leave-review",['data'=>$mdata], function($message) use ($to_name, $to_email) {
			$message->to($to_email, $to_name)->subject("Give Review");
			$message->from("support@selecttask.com","Give review");
			});
			
			
			
			$result=array('code'=>200,'message'=>'Task Compete Successfully');
		}else{
			$result=array('code'=>201,'message'=>'Something went wrong! Please reload page again.');
		}
		
		
		return json_encode($result);
		
	}
	
	public function add_reviews(Request $request){
		$task_id=$request->task_id;
		$data=array("user_id"=>$request->user_id,'task_id'=>$request->task_id,'comment'=>$request->comment,"rating"=>$request->rating);
		$db_data=DB::table('reviews')->insert($data);
		
		$u_data=get_userdata($request->user_id);
		
		$to_name = $u_data->name;
		$to_email=$u_data->email;
			  
		 $mdata = array("name"=>$to_name, "task_id" => $task_id);
		   Mail::send("notification.SP_ReceivedReview",['data'=>$mdata], function($message) use ($to_name, $to_email) {
			$message->to($to_email, $to_name)->subject("SelectTask Review");
			$message->from("support@selecttask.com","SelectTask Review");
			});
			
			
			
		 /************  customer mail content *************/
           $task_data=get_job_by_id($task_id);
		   $task_user_id=$task_data->user_id;
		   $task_u_data=get_userdata($task_user_id);
		   $t_username = $task_u_data->name;
		   $t_useremail=$task_u_data->email;
			  
		 $tdata = array("name"=>$t_username, "task_id" => $task_id);
		   Mail::send("notification.Thanks-for-your-review",['data'=>$tdata], function($message) use ($t_username, $t_useremail) {
			$message->to($t_useremail, $t_username)->subject("SelectTask Review");
			$message->from("support@selecttask.com","SelectTask Review");
			});
          		 
		
		
		$result=array("code"=>200,"message"=>"Record save successfully");
		update_task_meta($task_id,'review_status',1);
		return json_encode($result);
		
	}
	
	
	
	
	
	
	
	
	
	
}
