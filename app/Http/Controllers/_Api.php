<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class _Api extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @return array
     */
    abstract protected function getPayload();

    /**
     * @return string
     */
    public function __invoke()
    {
        return json_encode($this->getOutput());
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
}
