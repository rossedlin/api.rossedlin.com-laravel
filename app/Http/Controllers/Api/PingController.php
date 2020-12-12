<?php

namespace App\Http\Controllers\Api;


/**
 * Created by PhpStorm.
 *
 * @author  Ross Edlin <contact@rossedlin.com>
 *
 * Date: 13/02/2018
 * Time: 11:11
 *
 * Class Ping
 *
 * @package App\Http\Controllers
 */
class PingController extends Controller
{
    /**
     * @return array
     */
    protected function getPayload()
    {
        return [
            'ip' => \Edlin\Request::server(\Edlin\Enums::REMOTE_ADDR),
        ];
    }
}
