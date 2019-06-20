<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
//        dd(auth()->user());
        if(Auth::user()->isAdmin() == 1){
            return $next($request);
        }
        return redirect('index')->with('error','Siz Admin huquqiga ega bo\'lishingiz kerak');
    }
}
