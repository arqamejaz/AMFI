<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class CheckWalletSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the session contains the auth number
        if (Session::has('auth_number')) {
            return $next($request);
        }

        // Redirect to login or deny access if not authenticated
        return redirect('/')->withErrors('Access denied. Please log in.');
    }
}
