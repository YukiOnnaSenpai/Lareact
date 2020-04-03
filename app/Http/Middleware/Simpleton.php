<?php

namespace App\Http\Middleware;

use Closure;

class Simpleton
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
        info($request);
        //error_log($request);
        return $next($request);
    }
}
