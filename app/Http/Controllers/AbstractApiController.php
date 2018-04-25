<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class AbstractApiController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @var Request $request
     */
    private $request;

    /**
     * @return array
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

        return json_encode($this->getOutput(), JSON_PRETTY_PRINT);
    }

    /**
     * @return array
     */
    protected function getOutput()
    {
        return [
            'payload' => $this->getPayload(),
        ];
    }

    /**
     * @return Request
     */
    protected function getRequest()
    {
        return $this->request;
    }
}
