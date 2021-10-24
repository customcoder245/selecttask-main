<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Socialite;
use Exception;
use Session;
use DB;
use URL;
use Mail;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
		 //$this->redirectTo = URL::previous();
        $this->middleware('guest')->except('logout');
		 $this->middleware('password-protected');
		  ini_set('memory_limit', '1G'); 
		  ini_set('upload_max_filesize', '1G'); // change as needed, as long as your system can support it

           @ini_set('max_execution_time','3000');
	  @ini_set('post_max_size','3000M');
    }
	
	
    public function showLoginForm()
{
    if(!session()->has('url.intended'))
    {
        session(['url.intended' => url()->previous()]);
    }
    return view('auth.login');
}
/* 	protected function credentials(Request $request)
{        
   return ['email' => $request->{$this->username()}, 'password' => $request->password, 'status' => 1];
} */
	protected function validateLogin(Request $request)
{
    $this->validate($request, [
        $this->username() => 'exists:users,' . $this->username() . ',status,1',
        'password' => 'required|string',
    ], [
        $this->username() . '.exists' => 'The selected email is invalid or the account has been disabled.'
    ]);
}
	
	 protected function authenticated(Request $request, $user)
    {
        // to admin dashboard
		
		   $PublicIP=$this->get_client_ip();
			
			
			
			$json     = file_get_contents("http://ipinfo.io/$PublicIP/geo");
            $json= json_decode($json, true);
         
		 $user_id=$user->id;
		 $ip=$city=$region=$country=$loc=$postal=$timezone='';
		 if(isset($json['ip'])){$ip=$json['ip'];}
		 $city2='';
		 if(isset($json['city'])){ 
		 $city2=$json['city'];
		 }
		 if(isset($json['region'])){ $region=$json['region']; }
		 if(isset($json['country'])){ $country=$json['country']; }
		 if(isset($json['loc'])) { $loc=$json['loc']; }
		 if(isset($json['postal'])){$postal=$json['postal'];}
		 if(isset($json['timezone'])){ $timezone=$json['timezone'];}
		 
		 $loc_data=array('user_id'=>$user_id,'ip'=>$ip,'city'=>$city,'region'=>$region,'country'=>$country,
		 'loc'=>$loc,'postal'=>$postal,'timezone'=>$timezone);
		 $ldata=DB::table('login_location')->where('user_id',$user_id)->where('postal',$postal)->first();
		 
		 if(empty($ldata)){
			$u_data=get_userdata($user_id);
			$to_name = $u_data->name;
			$to_email=$u_data->email;
			$mdata = array("name"=>$to_name, "body" => "Account Create",'city'=>$city2,'state'=>$region,'country'=>$country,'zone'=>$timezone);
			if($user->isServiceprovider()){
			Mail::send("notification.SP_Security-Alert",['data'=>$mdata], function($message) use ($to_name, $to_email) {
			$message->to($to_email, $to_name)->subject("Security alert: Select Task account inquiry");
			$message->from("support@selecttask.com","selecttask");
			});
		}else{
		Mail::send("notification.Security-Alert",['data'=>$mdata], function($message) use ($to_name, $to_email) {
			$message->to($to_email, $to_name)->subject("Security alert: Select Task account inquiry");
			$message->from("support@selecttask.com","selecttask");
			});
		}
			DB::table('login_location')->where('user_id',$user_id)->delete();
		 $db=DB::table('login_location')->insert($loc_data);
		 }
		//return redirect()->intended('/');
		
        if($user->isAdmin()) {
            return redirect(route('home'));
        }else if($user->isCustomer()) {
            return redirect(route('task-list'));
        }
		else if($user->isServiceprovider()){
			 $id= Auth::user()->id;
			 if(get_user_meta($id,'user_status')=="pending"){
				  return redirect(route('signups'));
			 }else{
			 return redirect(route('provider-tasks-list'));
			 }
		}

        abort(404);
    }
	
	public function check_login_location($user_id,$postal){
		
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
	
	
	
	
	 public function redirectToFacebook() {
        return Socialite::driver('facebook')->redirect();
    }
	
	public function handleFacebookCallback() {
        try {
            $user = Socialite::driver('facebook')->user();
			
			$user_type= Session::get('user_type');
			 $phone_no=Session::get('phone_no');
			$enable_mesage= Session::get('enable_mesage');
			$url='';
			
			
			
			if(!empty($user_type)){
				$existingUser=DB::table('users')->where('email',$user->email)->first();
				if($existingUser){
					Session::put('user_type', '');
				return redirect('/login')->withErrors(['User already exist with this facebook Account ']);;
			}else{
				
				$data=array('name'=>$user->name,'email'=>$user->email,'role'=>$user_type,
			'facebook_token'=>$user->token);
			$udata=DB::table('users')->insertGetId($data);
			
			  if($user_type=='customer'){
			  $to_name = $user->name;
		$to_email=$user->email;
		$mdata = array("name"=>$to_name, "body" => "Account Create");
		Mail::send("notification.WelcomeEmail",['data'=>$mdata], function($message) use ($to_name, $to_email) {
			$message->to($to_email, $to_name)->subject(" welcome Mail");
			$message->from("support@selecttask.com","welcome Mail");
			});
		
			  
		  }
		  
		  			
			update_user_meta($udata,'phone',$phone_no);
			update_user_meta($udata,'enable_message',$enable_mesage);
			if($enable_mesage==1){
				 add_user_meta($udata,'task_update',1);
		         add_user_meta($udata,'text_notification',1); 
		         add_user_meta($udata,'new_applicant',1);
			}
			Session::put('user_type', '');
			$user_status=array('user_id' =>$udata,'meta_key'=>'user_status','meta_value' => 'pending');
			DB::table('users_meta')->insert($user_status);
			
			Auth::loginUsingId($udata);
			if($user_type=="customer"){
			$url=route('task-list');
			}elseif($user_type=="service_provider"){
				$url=route('signups');
			}
			
			
			  }
			}else{
			
				$existingUser=DB::table('users')->where('email',$user->email)->first();
			if($existingUser){
				Auth::loginUsingId($existingUser->id);
				
				if($existingUser->role=="customer"){
			     $url=route('task-list');
				}elseif($existingUser->role=="service_provider"){
					$url=route('signups');
				}
				
			}else{
				return redirect('/login')->withErrors(['User Not exist with this facebook account. Please Signup first with this account. ']);;
			}
			
				
			}
			
			return redirect()->to($url);
        }
        catch(Exception $e) {
            return redirect('auth/facebook');
        }
    }
	
	public function admin_login(){
		 $meta_title='';
	   $meta_key='';
	   $meta_desc='';
		
		return view('auth.admin-login')->with('meta_title',$meta_title)->with('meta_key',$meta_key)->with('meta_desc',$meta_desc);
	}
	
	public function redirectToProvider()
		{
			
			return Socialite::driver('google')->redirect();
		}
	
	public function handleProviderCallback()
    {
          
		   
	 
		$url='';
		 $user_type= Session::get('user_type');
		
		  
		  
        try {
            $user = Socialite::driver('google')->user();
        } catch (\Exception $e) {
		 
            return redirect('/login');
        }
       
        // check if they're an existing user
        //$existingUser = User::where('email', $user->email)->first();
		if(!empty($user_type)){
			$existingUser=DB::table('users')->where('email',$user->email)->first();
			
			if($existingUser){
				return redirect('/login')->withErrors(['User already exist with this Google Account ']);;
			}else{
				$phone_no=Session::get('phone_no');
			$enable_mesage= Session::get('enable_mesage');
		    
			
			$data=array('name'=>$user->name,'email'=>$user->email,'role'=>$user_type,
			'google_token'=>$user->token);
			$udata=DB::table('users')->insertGetId($data);
			
			  if($user_type=='customer'){
			  $to_name = $user->name;
		      $to_email=$user->email;
		$mdata = array("name"=>$to_name, "body" => "Account Create");
		Mail::send("notification.WelcomeEmail",['data'=>$mdata], function($message) use ($to_name, $to_email) {
			$message->to($to_email, $to_name)->subject(" welcome Mail");
			$message->from("support@selecttask.com","welcome Mail");
			});
		
			  
		  }
			
			
			update_user_meta($udata,'phone',$phone_no);
			update_user_meta($udata,'enable_message',$enable_mesage);
			if($enable_mesage==1){
				 add_user_meta($udata,'task_update',1);
		         add_user_meta($udata,'text_notification',1); 
		         add_user_meta($udata,'new_applicant',1);
			}
			$user_status=array('user_id' =>$udata,'meta_key'=>'user_status','meta_value' => 'pending');
			DB::table('users_meta')->insert($user_status);
			Auth::loginUsingId($udata);
			if($user_type=="customer"){
			$url=route('task-list');
		}elseif($user_type=="service_provider"){
			$url=route('signups');
		}
			}
			
			Session::forget('user_type');
			
		}else{
			$existingUser=DB::table('users')->where('email',$user->email)->first();
			if($existingUser){
				Auth::loginUsingId($existingUser->id);
				
				if($existingUser->role=="customer"){
			     $url=route('task-list');
				}elseif($existingUser->role=="service_provider"){
					$url=route('signups');
				}
				
			}else{
				return redirect('/login')->withErrors(['User Not exist with this Google account. Please Signup first with this account. ']);;
			}
			
		}
		
		
        return redirect()->to($url);
    }
	
	
	public function save_session(Request $request){
       
      Session::put('phone_no', $request->phone_no);
	  if(isset($request->enable_mesage)){
      Session::put('enable_mesage', $request->enable_mesage);
	  }
	  Session::put('user_type', $request->user_type);
	  $result=array('code'=>200);
	  return  json_encode($result);
	}
	
	
}
