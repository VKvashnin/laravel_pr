<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckStatus
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
        $response = $next($request);
        if(Auth::check() && Auth::user()->status_id == '2'){
            Auth::logout();
            return redirect()->route('login')->with('alert', 'Данный пользователь заблокирован');
        }
        return $response;
    }
}
