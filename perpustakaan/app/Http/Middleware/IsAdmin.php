<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
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
        // Cek apakah user sudah login dan apakah user adalah admin
        if (Auth::check() && Auth::user()->role_id == 1) { // Anggap 1 adalah role admin
            return $next($request);
        }

        // Jika bukan admin, arahkan ke halaman lain
        return redirect()->route('login');
    }
}
