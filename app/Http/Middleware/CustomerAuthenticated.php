<?php

namespace App\Http\Middleware;

use Closure;

class CustomerAuthenticated
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
            }else if(Auth::user()->isServiceprovider()){
				return redirect(route('provider-my-profile'));
			}

            // allow user to proceed with request
            else if ( Auth::user()->isCustomer() ) {
                 return $next($request);
            }
        }

        abort(404);  // for other user throw 404 error
    }
}
