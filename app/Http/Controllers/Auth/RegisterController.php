<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use DB;
use Auth;
use Mail;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
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
	
	public function user_create(Request $request)
  {
	  
	
	  
	  
      $validator=Validator::make($request->all(), [
            'first_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string' ],
        ]);
		
		
	
	  
    if ($validator->fails()) {
		 $result=array('code'=>201,'message'=> $validator->errors()->first());
	 
	}else{
      $user = User::create([
          'name' => $request->first_name,
          'email' => $request->email,
          'password' => Hash::make($request->password),
		  'role'=>$request->user_type,
      ]);
	$id = $user->id;
	    $PublicIP=$this->get_client_ip();
		$json     = file_get_contents("http://ipinfo.io/$PublicIP/geo");
        $json= json_decode($json, true);
         $ip=$city=$region=$country=$loc=$postal=$timezone='';
		 if(isset($json['ip'])){$ip=$json['ip'];}
		 if(isset($json['city'])){ 
		 //$city=htmlspecialchars_decode($json['city']);
		 }
		 if(isset($json['region'])){ $region=$json['region']; }
		 if(isset($json['country'])){ $country=$json['country']; }
		 if(isset($json['loc'])) { $loc=$json['loc']; }
		 if(isset($json['postal'])){$postal=$json['postal'];}
		 if(isset($json['timezone'])){ $timezone=$json['timezone'];}
		 
		 $loc_data=array('user_id'=>$id,'ip'=>$ip,'city'=>$city,'region'=>$region,'country'=>$country,
		 'loc'=>$loc,'postal'=>$postal,'timezone'=>$timezone);
	     $db=DB::table('login_location')->insert($loc_data);
	
	
	  if($user){
		  if($request->user_type=='customer'){
			  $to_name = $request->first_name;
		$to_email=$request->email;
		$mdata = array("name"=>$to_name, "body" => "Account Create");
		Mail::send("notification.WelcomeEmail",['data'=>$mdata], function($message) use ($to_name, $to_email) {
			$message->to($to_email, $to_name)->subject(" welcome Mail");
			$message->from("support@selecttask.com","selecttask");
			});
		
			  
		  }
		  
		  if($request->user_type=='service_provider'){
	     $to_name = $request->first_name;
		$to_email=$request->email;
		$mdata = array("name"=>$to_name, "body" => "Account Create");
		Mail::send("notification.SP_WelcomeEmail",['data'=>$mdata], function($message) use ($to_name, $to_email) {
			$message->to($to_email, $to_name)->subject(" welcome Mail");
			$message->from("support@selecttask.com","selecttask");
			});
		  }
		  
		  
	  
     $firstname = array('user_id' => $id,'meta_key'=>'first_name','meta_value' => $request->first_name);
	 $last_name = array('user_id' => $id,'meta_key'=>'last_name','meta_value' => $request->last_name);
	 $user_status=array('user_id' => $id,'meta_key'=>'user_status','meta_value' => 'pending');
	 $user_phone=array('user_id'=>$id,'meta_key'=>'phone','meta_value'=>$request->phone);
	 $user_role=array('user_id' => $id,'meta_key'=>'role','meta_value' => $request->user_type);
	
	 DB::table('users_meta')->insert($firstname);
	 DB::table('users_meta')->insert($last_name);
	 DB::table('users_meta')->insert($user_status);
	 DB::table('users_meta')->insert($user_phone);
	 DB::table('users_meta')->insert($user_role);
	 if(isset($request->enable_message)){
		 add_user_meta($id,'task_update',1);
		 add_user_meta($id,'text_notification',1); 
		 add_user_meta($id,'new_applicant',1);
		 
		DB::table('users_meta')->insert(array('user_id'=>$id,'meta_key'=>'enable_message','meta_value'=>$request->enable_message)); 
	 }
	 if(isset($request->term_policy)){
	DB::table('users_meta')->insert(array('user_id'=>$id,'meta_key'=>'term_policy','meta_value'=>$request->term_policy)); 
		 
	 }
	 
	  Auth::loginUsingId($id);
	    $result=array('code'=>200,'message'=>'Account Create Scussfully');
	  }else{
	    $result=array('code'=>201,'message'=>'Something went wrong! Please try again');
	  }
	}
	  return json_encode($result);
	
  }
}
