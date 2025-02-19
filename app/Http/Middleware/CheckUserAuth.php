<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserAuth
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // Jika user belum login, arahkan ke halaman login
        if (!Auth::check()) {
            return redirect()->route('loginUser')->with('error', 'Silakan login terlebih dahulu.');
        }

        return $next($request);
    }
}
