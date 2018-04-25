<?php

namespace App\Http\Controllers\Test;

use \App\Http\Controllers\Base;

/**
 * Created by PhpStorm.
 *
 * User: rossedlin
 * Contact: <contact@rossedlin.com>
 *
 * Date: 22/02/18
 * Time: 10:54
 */
class Post extends Base\ApiController
{
    /**
     * @return array
     */
    protected function getPayload()
    {
        return [
            'body' => $this->getRequest()->getContent(),
        ];
    }
}
