<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Mail;
use DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
	
	
	public function reset_password(Request $request){
		
		if($request->password == $request->password_confirmation){
			 $tokenData1 = DB::table('password_resets')->where('email', $request->email)->first();
			$tokenData=(array)$tokenData1;
			if(count($tokenData)>0){
				DB::table('password_resets')->where('email', $request->email)->delete();
				$pdata=array('password'=>Hash::make($request->password));
				$user1 = DB::table('users')->where('email', $request->email)->update($pdata);
				$udata=DB::table('users')->where('email', $request->email)->first();
				 $to_name = $udata->name;
		      $to_email=$udata->email;
		$mdata = array("name"=>$to_name);
		Mail::send("notification.Password-successfully-changed",['data'=>$mdata], function($message) use ($to_name, $to_email) {
			$message->to($to_email, $to_name)->subject("Password Update");
			$message->from("support@selecttask.com","Password Update");
			}); 
			$url=route('login');
            return redirect()->to($url)->with('status','Password successfully change! Please login with new password. ');			
			}else{
				return redirect()->back()->withErrors(['error' => trans('Reset Password link expire!')]);
			}
			
		}else{
			  return redirect()->back()->withErrors(['error' => trans('Confirm password not match')]);
		}
		
	}
}
