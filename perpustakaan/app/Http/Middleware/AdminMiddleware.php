<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Memeriksa apakah user login dan role_id adalah admin
        if (Auth::check() && Auth::user()->role_id == 1) {
            return $next($request);
        }
        if (Auth::check() && Auth::user()->role_id == 3) {
            return $next($request);
        }

        // Jika bukan admin, redirect ke dashboard user atau halaman error
        return redirect()->route('login')->with('error', 'Unauthorized access.');
    }
}
