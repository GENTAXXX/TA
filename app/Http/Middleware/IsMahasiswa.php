<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsMahasiswa
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
        if (auth()->user()->role_id == 5) {
            return $next($request);
        }

        return redirect('home')->with('error', "You don't have Mahasiswa access.");
    }
}