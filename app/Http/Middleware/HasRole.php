<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
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
