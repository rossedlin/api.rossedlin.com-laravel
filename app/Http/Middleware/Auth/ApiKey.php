<?php

namespace App\Http\Middleware\Auth;

use Closure;

class ApiKey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $key = $request->header('key');

        if ($key !== env('API_KEY')) {
            return response()->json(['error' => ['message' => 'Permission denied']], 403);
        }

        return $next($request);
    }
}
