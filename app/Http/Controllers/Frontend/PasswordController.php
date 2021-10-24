<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\Image;
use App\User;
use Twilio\Rest\Client;
use Session;
use Illuminate\Support\Facades\Hash;
use Mail;
class PasswordController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
		
    }

     public function welcome(){
		   return view('welcome');
	  }

     public function password_protected(){
		 return view('password');
	 }
	 public function password_save(Request $request){
		
		$request->session()->put('password-protected', $request->password);
		//session(['password-protected' => $request->password]);
		$url=url('/');
		return redirect()->to($url);
		
	 }
	 
	 
	 	public function carpentry(){
		 $meta_title='';
	   $meta_key='';
	   $meta_desc='';
		return view('comming.carpentry')->with('meta_title',$meta_title)->with('meta_key',$meta_key)->with('meta_desc',$meta_desc);
	}
	
	public function electrical(){
		 $meta_title='';
	   $meta_key='';
	   $meta_desc='';
		return view('comming.electrical')->with('meta_title',$meta_title)->with('meta_key',$meta_key)->with('meta_desc',$meta_desc);
	}
	
	public function general_contracting(){
		 $meta_title='';
	   $meta_key='';
	   $meta_desc='';
		return view('comming.general-contracting')->with('meta_title',$meta_title)->with('meta_key',$meta_key)->with('meta_desc',$meta_desc);
	}
	
	public function handyman(){
		 $meta_title='';
	   $meta_key='';
	   $meta_desc='';
		return view('comming.handyman')->with('meta_title',$meta_title)->with('meta_key',$meta_key)->with('meta_desc',$meta_desc);
	}
	
	public function hvac_technician(){
		 $meta_title='';
	   $meta_key='';
	   $meta_desc='';
		return view('comming.hvac-technician')->with('meta_title',$meta_title)->with('meta_key',$meta_key)->with('meta_desc',$meta_desc);
	}
	
	public function painting(){
		 $meta_title='';
	   $meta_key='';
	   $meta_desc='';
		return view('comming.painting')->with('meta_title',$meta_title)->with('meta_key',$meta_key)->with('meta_desc',$meta_desc);
	}
	
	public function plumbing(){
		 $meta_title='';
	   $meta_key='';
	   $meta_desc='';
		return view('comming.plumbing')->with('meta_title',$meta_title)->with('meta_key',$meta_key)->with('meta_desc',$meta_desc);
	}
	
	public function roofing(){
	     $meta_title='';
	   $meta_key='';
	   $meta_desc='';
		
       return view('comming.roofing')->with('meta_title',$meta_title)->with('meta_key',$meta_key)->with('meta_desc',$meta_desc);

		
	}
	
	public function register(){
		 $meta_title='';
	   $meta_key='';
	   $meta_desc='';
		return view('frontend/signup-form.Signup-form')->with('meta_title',$meta_title)->with('meta_key',$meta_key)->with('meta_desc',$meta_desc);;
	}
	
	public function sign_up_save(Request $request){
		$address=$request->address;
		
		/* if(preg_match('/NY/',$address) || preg_match('/ny/',$address)){
		$result=array('code'=>200);	
		}else{
		$result=array('code'=>203);
		return json_encode($result);
		} */
		
		
		if(!isset($request->location)){
			$result=array('code'=>202,'msg'=>"Location field are required");
			return json_encode($result);
		}
		if(!isset($request->services)){
			$result=array('code'=>202,'msg'=>"Services field are required");
			return json_encode($result);
		}
		
		
		$email=$request->email;
		$data=DB::table('users')->where('email',$email)->count();
		if($data==0){
			$pass = substr(str_shuffle("0123456789abcdefghijklmnopqrstvwxyz"), 0, 6);
			$u_data=array('name'=>$request->name,'email'=>$request->email,'password'=> Hash::make($pass),'role'=>'service_provider','user_type'=>'1');
			 
			 
			 $id=DB::table('users')->insertGetId($u_data);
			
			 $user_status=array('user_id' => $id,'meta_key'=>'user_status','meta_value' => 'pending');
			 DB::table('users_meta')->insert($user_status);
			 
			 if(!empty(get_user_meta($id,'services'))){
				    update_user_meta($id,'services',json_encode($request->services));
				}else{
					add_user_meta($id,'services',json_encode($request->services));
				}
				if(!empty(get_user_meta($id,'location'))){
				    update_user_meta($id,'location',json_encode($request->location));
				}else{
					add_user_meta($id,'location',json_encode($request->location));
				}
				
				if(!empty(get_user_meta($id,'phone'))){
				    update_user_meta($id,'phone',$request->phone);
				}else{
					add_user_meta($id,'phone', $request->phone);
				}
				
				if(!empty(get_user_meta($id,'business_name'))){
				    update_user_meta($id,'business_name',$request->business_name);
				}else{
					add_user_meta($id,'business_name',$request->business_name);
				}
				
				if(!empty(get_user_meta($id,'cell_number'))){
				    update_user_meta($id,'cell_number',$request->cell_number);
				}else{
					add_user_meta($id,'cell_number',$request->cell_number);
				}
				
				if(!empty(get_user_meta($id,'other_info'))){
				    update_user_meta($id,'other_info',$request->other_info);
				}else{
					add_user_meta($id,'other_info',$request->other_info);
				}
				
			 $result=array('code'=>200,'msg'=>"Account create successfully");
			  return json_encode($result);
			 
			 
		}else{
			 $result=array('code'=>201,'msg'=>"Email Already Exists! please try again");
			  return json_encode($result);
		}
		
	}
	
	 
	public function unsubscriber_functional($id){
	 
		update_user_meta($id,'task_update',0);
		update_user_meta($id,'task_reminder',0);
		update_user_meta($id,'text_notification',0);
		update_user_meta($id,'new_applicant',0);
		
	}
	
	
}
