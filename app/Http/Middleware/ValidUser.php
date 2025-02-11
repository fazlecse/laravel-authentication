<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ValidUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        echo "<h3 class='text-primary'>We are now in ValidUser Middleware</h3>";
        echo "<h3 class='text-primary'>" . $role . '</h3>';

        if (Auth::user()->role == $role) {
            return $next($request);
        } elseif (Auth::user()->role == "reader") {
            return redirect()->route('user');
        } else {
            return redirect()->route('login');
        }

        // if (Auth::check() && Auth::user()->role == $role) {
        //     return $next($request);
        // } else {
        //     return redirect()->route('login');
        // }
    }
    public function terminate(Request $request, Response $response): void
    {
        // echo "<h3 class='text-danger'>We are now Terminating ValidUser Middleware</h3>";
    }
}
