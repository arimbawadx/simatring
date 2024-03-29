<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class admin
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
            return $next($request);
        }elseif (Auth::check() && Auth::user()->status_user == 'customer') {
            return redirect('/login');
        }
        
    }
}
