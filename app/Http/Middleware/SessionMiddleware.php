<?php

namespace App\Http\Middleware;

use Closure;

class SessionMiddleware
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
        if(!session()->has("date")){
            return redirect("sessionForm");
        }

        return $next($request);
    }
}
