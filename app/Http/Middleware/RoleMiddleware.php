<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle(Request $request, Closure $next)
    {
        // Get the authenticated user


        // Check if the user is authenticated
        if (Auth::check()) {

            // Check if the user has the "admin" role
            if (Auth::user()->role == "admin") {
                return $next($request);
            }

            if (Auth::user()->role == "user") {
                return redirect()->route('home');
            }

        }

        // User does not have the required roles, redirect or return an error response
        return redirect('/')->with('error', 'Unauthorized access.');
    }
}
