<?php

namespace App\Http\Middleware;

use App\Exceptions\UnauthorizedErrorr;
use Closure;
use Illuminate\Http\Request;

class AuthMiddleware
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

        if ($request->header('X-Api-Key') !== 'my-secret-token-x') {
           throw new UnauthorizedErrorr();
        }

        return $next($request);
    }
}
