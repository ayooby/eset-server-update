<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class IsAdminCheck
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
        if (Auth::user()->admin == '0'){
            return redirect('/down');
        }
            return $next($request);
    }

}
