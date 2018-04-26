<?php

namespace App\Http\Middleware;

use Closure;

class LogRequests
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $log                 = new \App\Models\LogRequests();
        $log->request_ip     = $request->ip();
        $log->request_uri    = $request->getUri();
        $log->request_header = json_encode($request->header());
        $log->request_body   = $request->getContent();
        $log->save();

        return $next($request);
    }
}
