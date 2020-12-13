<?php

namespace App\Http\Controllers\Api\Test;

use \App\Http\Controllers\Api\Controller;

/**
 * Created by PhpStorm.
 *
 * User: rossedlin
 * Contact: <contact@rossedlin.com>
 *
 * Date: 22/02/18
 * Time: 10:54
 */
class Post extends Controller
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
