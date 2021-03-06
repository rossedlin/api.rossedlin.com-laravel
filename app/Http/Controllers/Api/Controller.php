<?php

namespace App\Http\Controllers\Api;

use App\Exceptions\ApiException;
use App\Models\LogRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @var Request $request
     */
    private $request;

    /**
     * @return array
     * @throws ApiException
     */
    abstract protected function getPayload();

    /**
     * @param Request $request
     *
     * @return string
     */
    public function __invoke(Request $request)
    {
        $this->request = $request;

        $output = $this->getOutput();

        /**
         * Log Request
         *
         * @var LogRequests $log
         */
        $log                  = $this->getRequest()->attributes->get('log_request');
        $log->response_status = 200; //OK
        $log->response_body   = json_encode($output);
        $log->save();

        return response()->json($output);
    }

    /**
     * @return array
     */
    protected function getOutput()
    {
        try {
            $payload = $this->getPayload();

            return [
                'payload' => $payload,
            ];
        } catch (ApiException $e) {

            /**
             * Display error message
             */
            return [
                'error' => [
                    'message' => $e->getMessage(),
                ]
            ];
        }
    }

    /**
     * @return Request
     */
    protected function getRequest()
    {
        return $this->request;
    }
}
