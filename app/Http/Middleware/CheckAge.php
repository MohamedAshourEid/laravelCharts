<?php

namespace App\Http\Middleware;

use Closure;

class CheckAge
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
//        echo "you dont have access to view this page";
        if($request->age && $request->age < 20){
            echo "you dont have access to view this page";
        }
        return $next($request);
    }
}
