<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class SuperAdminOnly
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
        if(auth()->user()->role == 'superadmin') {
            // code...
            return $next($request);
        }
        return redirect('login');
        
    }
}
