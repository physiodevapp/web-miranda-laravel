<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckPostmanRequest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->header('User-Agent') !== 'PostmanRuntime/7.41.2') {
            return response()->json([
                'message' => 'Unauthorized',
            ], 401);
        }


        return $next($request);
    }
}
