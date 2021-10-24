<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\Image;
use App\User;
use Twilio\Rest\Client;
use Illuminate\Support\Facades\Hash;
use Mail;
class FrontendController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('password-protected');
		
    }

      

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   public function index(){
	   $meta_title='SelectTask - Home | Find a Handyman or Contractor in NYC';
	   $meta_key='';
	   $meta_desc='Post your home-improvement task on SelectTask for FREE – Find a handyman or contractor in Brooklyn, Manhattan, Queens, Staten Island, and the Bronx NYC';
	    return view('frontend.pages.index')->with('meta_title',$meta_title)->with('meta_key',$meta_key)->with('meta_desc',$meta_desc);
   }
   
   public function get_jobs_NYC(){
	    $meta_title='SelectTask | Search for Handyman Jobs in NYC on SelectTask';
	   $meta_key='';
	   $meta_desc='Get access to hundreds of new handyman jobs in NYC with a SelectTask Pro account. Sign up for free, get discounted leads, and find more jobs on SelectTask.';
	   return view('frontend.pages.Get-Jobs-NYC')->with('meta_title',$meta_title)->with('meta_key',$meta_key)->with('meta_desc',$meta_desc);
   }
   
   public function HowitWorks_customer(){
	    $meta_title='SelectTask | How to Post a FREE job to Find a NYC Handyman';
	   $meta_key='';
	   $meta_desc='Learn how to find a handyman or contractor when you post a FREE task in Brooklyn, Manhattan, Queens, Staten Island, the Bronx, and Long Island NYC';
	   
	   return view('frontend.pages.HowitWorks-customer')->with('meta_title',$meta_title)->with('meta_key',$meta_key)->with('meta_desc',$meta_desc);;
   }
   
   public function HowitWorks_ServiceProviders(){
	    $meta_title='SelectTask | How to get Cheap Job Leads for Handyman NYC';
	   $meta_key='';
	   $meta_desc='Learn how to find cheap job leads in NYC for painter, plumber, electrician, handyman, general contractor, carpenter, window installer, and more on SelectTask.';
	   return view('frontend.pages.HowitWorks-ServiceProviders')->with('meta_title',$meta_title)->with('meta_key',$meta_key)->with('meta_desc',$meta_desc);;
   }
	
	public function posttask_step1(){
		 $meta_title='SelectTask | Post a FREE task to Find a NYC Handyman Fast';
	   $meta_key='';
	   $meta_desc='Post your repair or maintenance task for FREE on SelectTask to find NYC electrician, plumber, painter, handyman, general contractors in Brooklyn, Queens...';
		return view('frontend.pages.posttask-step1')->with('meta_title',$meta_title)->with('meta_key',$meta_key)->with('meta_desc',$meta_desc);;
	}
	public function posttask_step2(){
		 $meta_title='';
	   $meta_key='';
	   $meta_desc='';
		return view('frontend.pages.posttask-step2')->with('meta_title',$meta_title)->with('meta_key',$meta_key)->with('meta_desc',$meta_desc);;
	}
	
	public function posttask_step3(){
		 $meta_title='';
	   $meta_key='';
	   $meta_desc='';
		return view('frontend.pages.posttask-step3')->with('meta_title',$meta_title)->with('meta_key',$meta_key)->with('meta_desc',$meta_desc);;
	}
	
	public function posttask_step4(){
		 $meta_title='';
	   $meta_key='';
	   $meta_desc='';
		return view('frontend.pages.posttask-step4')->with('meta_title',$meta_title)->with('meta_key',$meta_key)->with('meta_desc',$meta_desc);;
	}
	
	public function posttask_step5(){
		 $meta_title='';
	   $meta_key='';
	   $meta_desc='';
		return view('frontend.pages.posttask-step5')->with('meta_title',$meta_title)->with('meta_key',$meta_key)->with('meta_desc',$meta_desc);;
	}
	
	public function help_support(){
		 $meta_title='SelectTask | Post a FREE task to Find a NYC Handyman Fast';
	   $meta_key='';
	   $meta_desc='Post your repair or maintenance task for FREE on SelectTask to find NYC electrician, plumber, painter, handyman, general contractors in Brooklyn, Queens...';
		return view('frontend.pages.help-support')->with('meta_title',$meta_title)->with('meta_key',$meta_key)->with('meta_desc',$meta_desc);;
	}
	
	public function NYC_Repair_Prices_Main(){
		 $meta_title='SelectTask - Resources | Find NYC Handyman Jobs and Leads';
	   $meta_key='';
	   $meta_desc='SelectTask gives you the tools you need to find the best electrician, painter, plumber, and handyman jobs in NYC, Brooklyn, Manhattan, Long Island, Queens, S...';
		return view('frontend.pages.NYC-Repair-Prices_Main')->with('meta_title',$meta_title)->with('meta_key',$meta_key)->with('meta_desc',$meta_desc);;
	}
	
	public function NYC_Repair_Price_windowDoor(){
		 $meta_title='How Much Does it Cost to Install a New Window or Door in NYC?';
	   $meta_key='';
	   $meta_desc='Find out how much it costs for a window installer to replace a window or door on your NYC apartment or house.';
		return view('frontend.pages.NYC-Repair-Price_windowDoor')->with('meta_title',$meta_title)->with('meta_key',$meta_key)->with('meta_desc',$meta_desc);;
	}
	
	public function NYC_Repair_Price_roofing(){
		 $meta_title='How Much Does a Plumber in NYC Cost Per Hour?';
	   $meta_key='';
	   $meta_desc='Find out how much it costs for a NYC plumber to fix leaky pipes, unclog drains, install a dishwasher, and more.';
		return view('frontend.pages.NYC-Repair-Price_roofing')->with('meta_title',$meta_title)->with('meta_key',$meta_key)->with('meta_desc',$meta_desc);;
	}
	
	public function NYC_Repair_Price_plumbing(){
		 $meta_title='How Much Does a Plumber in NYC Cost Per Hour?';
	   $meta_key='';
	   $meta_desc='Find out how much it costs for a NYC plumber to fix leaky pipes, unclog drains, install a dishwasher, and more.';
		return view('frontend.pages.NYC-Repair-Price_plumbing')->with('meta_title',$meta_title)->with('meta_key',$meta_key)->with('meta_desc',$meta_desc);;
	}
	
	public function NYC_Repair_Price_painting(){
		 $meta_title='SelectTask - Resources | Find NYC Handyman Jobs and Leads';
	   $meta_key='';
	   $meta_desc='SelectTask gives you the tools you need to find the best electrician, painter, plumber, and handyman jobs in NYC, Brooklyn, Manhattan, Long Island, Queens, S...';
		return view('frontend.pages.NYC-Repair-Price_painting')->with('meta_title',$meta_title)->with('meta_key',$meta_key)->with('meta_desc',$meta_desc);;
	}
	
	public function NYC_Repair_Price_HVAC_Repair(){
		 $meta_title='How Much Does it Cost to Fix an AC Unit or Heater in NYC?';
	   $meta_key='';
	   $meta_desc='Find out how much it costs to fix an air conditioner in NYC, or how much it costs to fix a heater or furnace in NYC.';
		return view('frontend.pages.NYC-Repair-Price_HVAC-Repair')->with('meta_title',$meta_title)->with('meta_key',$meta_key)->with('meta_desc',$meta_desc);;
	}
	
	public function NYC_Repair_Price_Handyman(){
		 $meta_title='How Much Does a NYC Handyman Cost Per Hour?';
	   $meta_key='';
	   $meta_desc='Find out how much it costs to hire a handyman in NYC to fix a leaky faucet, install wifi, mount a tv, and more.';
		return view('frontend.pages.NYC-Repair-Price_Handyman')->with('meta_title',$meta_title)->with('meta_key',$meta_key)->with('meta_desc',$meta_desc);;
	}
	
	public function NYC_Repair_Price_GeneralContractor(){
		 $meta_title='How Much Does it Cost to Hire a General Contractor in NYC?';
	   $meta_key='';
	   $meta_desc='Find out how much general contractors in NYC charge to remodel a kitchen or bathroom, build a new house, and more.';
		return view('frontend.pages.NYC-Repair-Price_GeneralContractor')->with('meta_title',$meta_title)->with('meta_key',$meta_key)->with('meta_desc',$meta_desc);;
	}
	public function NYC_Repair_Price_Electrician(){
		 $meta_title='How Much Does a Plumber in NYC Cost Per Hour?';
	   $meta_key='';
	   $meta_desc='Find out how much it costs for a NYC plumber to fix leaky pipes, unclog drains, install a dishwasher, and more.';
		return view('frontend.pages.NYC-Repair-Price_Electrician')->with('meta_title',$meta_title)->with('meta_key',$meta_key)->with('meta_desc',$meta_desc);;
	}
	public function NYC_Repair_Price_CarpentryCabinets(){
		 $meta_title='How Much Does it Cost to Fix an AC Unit or Heater in NYC?';
	   $meta_key='';
	   $meta_desc='Find out how much it costs to fix an air conditioner in NYC, or how much it costs to fix a heater or furnace in NYC.';
		return view('frontend.pages.NYC-Repair-Price_CarpentryCabinets')->with('meta_title',$meta_title)->with('meta_key',$meta_key)->with('meta_desc',$meta_desc);;
	}
	
	public function about_us(){
		 $meta_title='SelectTask - About | Find a Handyman or Contractor in NYC';
	   $meta_key='';
	   $meta_desc='SelectTask connects service pros with homeowners who need help with repair and maintenance tasks. Find NYC plumbers, electricians, handyman, general contract...';
		return view('frontend.pages.about-us')->with('meta_title',$meta_title)->with('meta_key',$meta_key)->with('meta_desc',$meta_desc);;
	}
	
	public function privacy(){
		 $meta_title='SelectTask - Resources | Find NYC Handyman Jobs and Leads';
	   $meta_key='';
	   $meta_desc='SelectTask gives you the tools you need to find the best electrician, painter, plumber, and handyman jobs in NYC, Brooklyn, Manhattan, Long Island, Queens, S...';
		return view('frontend.pages.privacy')->with('meta_title',$meta_title)->with('meta_key',$meta_key)->with('meta_desc',$meta_desc);;
	}
	
	public function service_locations(){
		 $meta_title='SelectTask - Resources | Find NYC Handyman Jobs and Leads';
	   $meta_key='';
	   $meta_desc='SelectTask gives you the tools you need to find the best electrician, painter, plumber, and handyman jobs in NYC, Brooklyn, Manhattan, Long Island, Queens, S...';
		return view('frontend.pages.service-locations')->with('meta_title',$meta_title)->with('meta_key',$meta_key)->with('meta_desc',$meta_desc);;
	}
	
	public function Services_Location_Brooklyn(){
		 $meta_title='SelectTask - Resources | Find NYC Handyman Jobs and Leads';
	   $meta_key='';
	   $meta_desc='SelectTask gives you the tools you need to find the best electrician, painter, plumber, and handyman jobs in NYC, Brooklyn, Manhattan, Long Island, Queens, S...';
		return view('frontend.pages.Services-Location-Brooklyn')->with('meta_title',$meta_title)->with('meta_key',$meta_key)->with('meta_desc',$meta_desc);;
	}
	
	public function Services_Location_Manhattan(){
		 $meta_title='SelectTask - Resources | Find NYC Handyman Jobs and Leads';
	   $meta_key='';
	   $meta_desc='SelectTask gives you the tools you need to find the best electrician, painter, plumber, and handyman jobs in NYC, Brooklyn, Manhattan, Long Island, Queens, S...';
		return view('frontend.pages.Services-Location-Manhattan')->with('meta_title',$meta_title)->with('meta_key',$meta_key)->with('meta_desc',$meta_desc);;
	}
	
	public function Services_Location_Queens(){
		 $meta_title='SelectTask - Resources | Find NYC Handyman Jobs and Leads';
	   $meta_key='';
	   $meta_desc='SelectTask gives you the tools you need to find the best electrician, painter, plumber, and handyman jobs in NYC, Brooklyn, Manhattan, Long Island, Queens, S...';
		return view('frontend.pages.Services-Location-Queens')->with('meta_title',$meta_title)->with('meta_key',$meta_key)->with('meta_desc',$meta_desc);;
	}
	
	public function Services_Location_StatenIsland(){
		 $meta_title='SelectTask - Resources | Find NYC Handyman Jobs and Leads';
	   $meta_key='';
	   $meta_desc='SelectTask gives you the tools you need to find the best electrician, painter, plumber, and handyman jobs in NYC, Brooklyn, Manhattan, Long Island, Queens, S...';
		return view('frontend.pages.Services-Location-StatenIsland')->with('meta_title',$meta_title)->with('meta_key',$meta_key)->with('meta_desc',$meta_desc);;
	}
	
	public function Services_Location_TheBronx(){
		 $meta_title='SelectTask - Resources | Find NYC Handyman Jobs and Leads';
	   $meta_key='';
	   $meta_desc='SelectTask gives you the tools you need to find the best electrician, painter, plumber, and handyman jobs in NYC, Brooklyn, Manhattan, Long Island, Queens, S...';
		return view('frontend.pages.Services-Location-TheBronx')->with('meta_title',$meta_title)->with('meta_key',$meta_key)->with('meta_desc',$meta_desc);;
	}
	
	public function sitemap(){
		 $meta_title='SelectTask - Resources | Find NYC Handyman Jobs and Leads';
	   $meta_key='';
	   $meta_desc='SelectTask gives you the tools you need to find the best electrician, painter, plumber, and handyman jobs in NYC, Brooklyn, Manhattan, Long Island, Queens, S...';
		return view('frontend.pages.sitemap')->with('meta_title',$meta_title)->with('meta_key',$meta_key)->with('meta_desc',$meta_desc);;
	}
	
	public function terms(){
		 $meta_title='SelectTask - Resources | Find NYC Handyman Jobs and Leads';
	   $meta_key='';
	   $meta_desc='SelectTask gives you the tools you need to find the best electrician, painter, plumber, and handyman jobs in NYC, Brooklyn, Manhattan, Long Island, Queens, S...';
		return view('frontend.pages.terms')->with('meta_title',$meta_title)->with('meta_key',$meta_key)->with('meta_desc',$meta_desc);
	}
	
	public function login_function(Request $request){
		$request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $result=array();
       
        if (Auth::attempt(array('email'=>$request->email,'password' => $request->password))) {
          
		   $result=array('code'=>200,'message'=>'successfuly login');
        }else{
			
			  $result=array('code'=>201,'message'=>'Email and/or password invalid.');
		}
		return json_encode($result);
	}
	
	public function frontend_posttask(Request $request){
		
		
		$user_id=Auth::user()->id;
		$address_type=$request->address_type;
		$address=$request->address;
		$apt_no=$request->apt_no;
		$add_data=array('user_id'=>$user_id,'address_type'=>$address_type,'address'=>$address,'apartment'=>$apt_no);
		$add_id=DB::table('address')->insertGetId($add_data);
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
			  $start_time=$request->post_date;
		  }
		  if(isset($request->end_time)){
			  $end_time=$request->post_time;
		  }
		  $confirm_input='';
		  if(isset($request->confirm_input)){
			  $confirm_input=$request->confirm_input;
		  }
		  $data=array('user_id'=>$user_id,'category'=>$request->service,'address'=>$add_id,'preferred_time'=>$request->preferred_time,
		  'description'=>$request->job_desc,"quotes"=>json_encode($request->quotes),'images'=>json_encode($images),'confirm_input'=>$confirm_input,
		  'end_time'=>$end_time,'start_time'=>$start_time,'status'=>'open');
		  $p_id=DB::table('task')->insertGetId($data);
		  $result=array('code'=>200,'message'=>'job Save successfully','action'=>route('status-open',['id'=>$p_id]));
		  
		  return json_encode($result);
		  
		
	}
	
	public function logout_custom()
     {
		Auth::logout();
		 $result=array('code'=>200,'message'=>'job Save successfully');
		return json_encode($result);
   }
	

	
	
	
	public function address_test(Request $request){
		$address=$request->address;
		//$address=str_replace(" ","",$address);
		//$add=explode(',',$address);
		if(preg_match('/NY/',$address) || preg_match('/ny/',$address)){
		$result=array('code'=>200);	
		}else{
		$result=array('code'=>201);
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
	
	
	
	
	
	public function help_profession(Request $request){
		$mdata=array();
		$mdata['first_name']=$request->first_name;
		$mdata['last_name']=$request->last_name;
		$mdata['email']=$request->email;
		$mdata['phone']=$request->phone;
		$mdata['subject']=$request->subject;
		$mdata['problem']=$request->problem;
		$to_name=$request->first_name;
		$to_email=$request->email;
		$subject=$request->subject;
		Mail::send("notification.custom_page_2",['data'=>$mdata], function($message) use ($to_name, $to_email,$subject) {
			 $message->to($to_email, $to_name)->subject($subject);
			$message->from("support@selecttask.com",$subject); 
			});
			
			$to_email2="support@selecttask.com";
			$to_name2="selecttask";
		Mail::send("notification.custom_page",['data'=>$mdata], function($message) use ($to_name2, $to_email2,$to_email, $subject) {
			 $message->to($to_email2, $to_name2)->subject($subject);
			$message->from("support@selecttask.com",$subject);
             $message->replyTo($to_email, $subject);			
			});	
  
       $result=array('code'=>200);

       return json_encode($result);	   
		
		
	}
	
	
	
	public function help_customer(Request $request){
		$mdata=array();
		$mdata['first_name']=$request->first_name;
		$mdata['last_name']=$request->last_name;
		$mdata['email']=$request->email;
		$mdata['phone']=$request->phone;
		$mdata['subject']=$request->subject;
		$mdata['problem']=$request->problem;
		$to_name=$request->first_name;
		$to_email=$request->email;
		$subject=$request->subject;
		Mail::send("notification.custom_page_2",['data'=>$mdata], function($message) use ($to_name, $to_email,$subject) {
			 $message->to($to_email, $to_name)->subject($subject);
			$message->from("support@selecttask.com",$subject); 
			});
			$to_email2="support@selecttask.com";
			$to_name2="selecttask";
		Mail::send("notification.custom_page",['data'=>$mdata], function($message) use ($to_name2, $to_email2,$to_email,$subject) {
			 $message->to($to_email2, $to_name2)->subject($subject);
			$message->from("support@selecttask.com",$subject); 
			$message->replyTo($to_email, $subject);
			});
          $result=array('code'=>200);

       return json_encode($result);	 
			
	}
	
	
	
	
	
	
}
