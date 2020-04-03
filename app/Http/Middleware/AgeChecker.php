<?php

namespace App\Http\Middleware;

use Closure;

class AgeChecker
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
        $age = $request->route()->parameter('age');

        if ( $age > 18 &&  $age != null) {
            return response()->view('welcome', [], 400);
        }else {
            return abort(403);
        }

        return $next($request);
    }
}
