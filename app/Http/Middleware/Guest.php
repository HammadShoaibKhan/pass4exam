<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Guest
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
        if ((auth()->check() && auth()->user()->type == 2) || !auth()->check()) {
            return $next($request);
        }
        return redirect()->route('admin.dashboard');
    }
}
