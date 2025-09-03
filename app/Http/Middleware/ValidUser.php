<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class ValidUser
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     */

    // using gate in middleware

    public function handle(Request $request, Closure $next): Response
    {
//        echo $role;
//        if (Auth::check() && Auth::user()->role === $role) {
//            return $next($request);
//        } else {
//            return redirect()->route('login.get');
//        }

        if (Gate::denies('isAdmin')) abort(403);

        return $next($request);
    }
}
