<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class _Api extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    /** @var array $data */
    private $data = [];

    /**
     * @return array
     */
    abstract protected function invoke();

    /**
     * @return string
     */
    public function __invoke()
    {
        return json_encode($this->getData());
    }

    /**
     * @return array
     */
    protected function getData()
    {
        return $this->data;
    }
}
