<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role) 
    {
        // Ensure the 'web' guard is used for session-based authentication
        $guard = 'web';
        if (!Auth::guard($guard)->check()) {
            return redirect()->route('login');
        }

        if (Auth::guard($guard)->user()->role !== $role) {
            abort(403, 'Akses ditolak: role tidak diizinkan.');
        }

        return $next($request);
    }

}
