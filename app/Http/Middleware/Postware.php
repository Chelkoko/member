<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class Postware
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
        if(Auth::check()){
            $user = Auth::user();
            if($user->hasRole('postwriter')){
                return $next($request);
            }else if($user->hasRole('Manager')){
                return $next($request);
            }
            else{
                return redirect(url('/'));
            }
        }
        else{
            return redirect(url('users/login'));
        }
        return $next($request);
    }
}
