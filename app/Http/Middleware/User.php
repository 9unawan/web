<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Response;

class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        if (in_array($request->user()->role, $roles)) {
            return $next($request);
        }
        if (Auth::user()->role == 'admin') {
            return Redirect::to('/admin/dashboard');
        } elseif (Auth::user()->role == 'user') {
            return Redirect::to('/dash');
        }
    }
}
