<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminOnly
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
        if (auth()->user()->role == 'admin') {
            // code...
             return $next($request);
        }
        return redirect('login');
    }
}
