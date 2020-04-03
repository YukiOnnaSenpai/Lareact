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

        if ( !empty($age) && $age < 18 ) {
            abort(403);
        }

        return response()->view('welcome', [], 200);
    }
}
