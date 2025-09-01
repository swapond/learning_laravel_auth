<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TestUser
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        echo "Test User";
        return $next($request);
    }

    public function terminate(Request $request, \Illuminate\Support\Facades\Response $response): void
    {
        echo "We are now terminating testuser";
    }

}
