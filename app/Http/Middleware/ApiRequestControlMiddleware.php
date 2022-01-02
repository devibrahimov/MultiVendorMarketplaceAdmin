<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ApiRequestControlMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle(Request $request, Closure $next)
    {
        if ($request->header('header_token') !== 'A_D*3S)M765_+=N19.05Y43-*/TKN_1SUM09BA'){
            return redirect(env('PROJECT_DOMAIN'));
        }else{
            return $next($request);
        }
    }
}
