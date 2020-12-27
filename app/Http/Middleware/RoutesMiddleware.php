<?php

namespace App\Http\Middleware;

use App\Exceptions\NotAllowed;
use Closure;
use Illuminate\Http\Request;

class RoutesMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$request->is('api/*')) {
            return response()->json([
                "status_message" => "Method Not Allowed",
                "status_code" => 405,
                "path" => $request->path(),
                "method" => $request->method(),
            ], 405);

        }
        return $next($request);
    }
}
