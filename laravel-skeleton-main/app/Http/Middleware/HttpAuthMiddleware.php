<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HttpAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $credentials = [
            'username' => $request->getUser(),
            'password' => $request->getPassword(),
        ];

        if ($credentials['username'] === config('auth.http.username') && $credentials['password'] === config('auth.http.password')) return $next($request);

        return response('Unauthorized.', 401, ['WWW-Authenticate' => 'Basic']);
    }

}
