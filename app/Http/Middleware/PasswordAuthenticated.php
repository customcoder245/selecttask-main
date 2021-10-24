<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class PasswordAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
		 $value =  Session::get('password-protected');
		 
         if(!empty($value))
        {
           
		   if($value=="admin123"){
			 
			   return $next($request);
		   }else{
			   return redirect(route('password-protected'));
		   }
		   
		   
        }else{
			 return redirect(route('password-protected'));
		}

        abort(404);  // for other user throw 404 error
    }
}
