<?php

namespace App\Http\Middleware\Auth;

use Closure;

class UsernamePassword
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
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}
