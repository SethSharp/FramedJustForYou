<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class HasRole
{
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        if (! $request->user()->hasRole($roles)) {
            // If the user doesn't have the required role, throw an exception
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}
