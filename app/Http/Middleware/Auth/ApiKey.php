<?php

namespace App\Http\Middleware\Auth;

use App\Models\LogRequests;
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

            /**
             * Sleep for 2 seconds to delay brunt force
             */
            sleep(2);

            /**
             * Log Request
             *
             * @var LogRequests $log
             */
            $log                  = $request->attributes->get('log_request');
            $log->response_status = 403; //OK
            $log->response_body   = json_encode(['error' => ['message' => 'Permission denied']]);
            $log->save();

            return response()->json(['error' => ['message' => 'Permission denied']], 403);
        }

        return $next($request);
    }
}
