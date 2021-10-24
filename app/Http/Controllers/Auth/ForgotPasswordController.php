<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Mail;
use DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;
	
	  public function forgot(Request $request) {
		  
		  print_r($request->all());
		  die();
       /*  $credentials = request()->validate(['email' => 'required|email']);

        Password::sendResetLink($credentials); */

        return response()->json(["msg" => 'Reset password link sent on your email id.']);
    }
	
	public function reset_email(Request $request){
		$user=array();
		
		$user1 = DB::table('users')->where('email', $request->email)->first();
		
		
		
		if(!empty($user1)){
			$user=(array)$user1;
		}
		
		
		
		if (count($user) < 1) {
               return redirect()->back()->withErrors(['email' => trans('User does not exist')]);
            }
			$token=Str::random(40);
		DB::table('password_resets')->insert(['email' => $request->email,'token' =>$token,
         'created_at' => Carbon::now()]);
		 
		 $tokenData = DB::table('password_resets')->where('email', $request->email)->first();
		 $link = url('/') . '/password/reset/' . $token . '?email=' . urlencode($user1->email);
		 $to_name = $user1->name;
		$to_email=$request->email;
		$mdata = array("name"=>$to_name, "link" => $link,'user_id'=>$user1->id);
		Mail::send("notification.forgot-password",['data'=>$mdata], function($message) use ($to_name, $to_email) {
			$message->to($to_email, $to_name)->subject("Forgot password");
			$message->from("support@selecttask.com","Forgot password");
			}); 
		 
		 
		 return redirect()->back()->with('status', trans('A reset link has been sent to your email address.'));
			
	
		
	}
	
	
}
