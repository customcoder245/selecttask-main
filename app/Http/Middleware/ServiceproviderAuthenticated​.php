<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class ServiceproviderAuthenticated​
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
         if( Auth::check() )
        {
            // if user admin take him to his dashboard
            if ( Auth::user()->isAdmin() ) {
                 return redirect(route('home'));
            }

            // allow user to proceed with request
            else if ( Auth::user()->isCustomer() ) {
                  return redirect(route('profile'));
            }else if( Auth::user()->isServiceprovider()){
				
				return $next($request);
				
			}
        }

        abort(404);  // for other user throw 404 error
    }
}
