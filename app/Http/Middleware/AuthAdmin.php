<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;
session_start();
class AuthAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Session::get('user') !== NULL && Session::get('user')['user_type'] === 'Admin')
        {
            return $next($request);
        }else{
            session()->flush();
            return redirect()->intended('404'); //not ADM no login
        }
        return $next($request);
    }
}
