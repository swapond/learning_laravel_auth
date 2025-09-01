<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ValidUser
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        echo $role;
        if (Auth::check() && Auth::user()->role === $role) {
            return $next($request);
        } else {
            return redirect()->route('login.get');
        }
    }
}
