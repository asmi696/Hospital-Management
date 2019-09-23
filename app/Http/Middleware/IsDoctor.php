<?php

namespace App\Http\Middleware;

use Closure;

class IsDoctor
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
        if(auth()->user()->isDoctor()) {
            return $next($request);
        }
        return redirect('home');
    }
}
