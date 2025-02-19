<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the authenticated user is an admin
        if ($request->user() && $request->user()->is_admin) {
            return $next($request);
        }

        return response()->json(['message' => 'Unauthorized'], 403);
    }
}