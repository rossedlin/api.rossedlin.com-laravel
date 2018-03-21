<?php

namespace App\Http\Middleware;

use Closure;

/**
 * Created by PhpStorm.
 *
 * User: rossedlin
 * Contact: <contact@rossedlin.com>
 *
 * Date: 21/03/18
 * Time: 11:18
 *
 * Class ForceHttps
 * @package App\Http\Middleware
 */
class ForceHttps
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /**
         * Check for HTTP and redirect to HTTPS on Stage & Production
         */
        if (!$request->secure() && in_array(env('APP_ENV'), ['stage', 'production'])) {
            return redirect()->secure($request->getRequestUri());
        }

        return $next($request);
    }
}