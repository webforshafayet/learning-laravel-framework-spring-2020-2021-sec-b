<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SessionVerify
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next) // all page secured ----the go to kernal
    {
        if($request->session()->has('username')){
            return $next($request);
        }else{
            $request->session()->flash('msg', 'invalid request...login first!');
            return redirect('/login');
        }
    }
}
