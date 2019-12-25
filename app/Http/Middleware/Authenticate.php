<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

class Authenticate// extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }

    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->guest()){
            if ($request->ajax()){
                return response('Unauthorized', 401);
            } else {
                return redirect()->route('home');
            }
        }
        return $next($request);
    }
}
