<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
class OnlyMaleCanAccess 
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
        // nếu gender = 1 thì mới qua được middleware
        if(Auth::user()->gender == 1) {
            return $next($request);
        }
        return redirect()->route('403');
    }
}
