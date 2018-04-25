<?php

namespace App\Http\Controllers;

use \Cryslo\Enums;
use \Cryslo\Core;

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
class PingController extends ApiController
{
    /**
     * @return array
     */
    protected function getPayload()
    {
        return [
            'ip' => Core\Request::server(Enums::REMOTE_ADDR),
        ];
    }
}
