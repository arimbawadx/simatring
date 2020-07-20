<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class customer
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
        if (Auth::check() && Auth::user()->status_user == 'admin') {
            return redirect('/login');
            
        }elseif (Auth::check() && Auth::user()->status_user == 'customer') {
            return $next($request);
        }
    }
}
