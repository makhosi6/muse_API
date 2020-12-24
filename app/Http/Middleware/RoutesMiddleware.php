<?php

namespace App\Http\Middleware;

use Closure;
use Facade\FlareClient\Http\Exceptions\NotFound;
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
        if ($request->routeIs('api/*')) {
            return $next($request);
        }
        // throw new NotFound();
    }
}
