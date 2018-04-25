<?php

namespace App\Http\Controllers\Heartbeat;

use \App\Http\Controllers\Base;
use \App\Model\HeartbeatEntity;
use \App\Model\HeartbeatPulse;

/**
 * Created by PhpStorm.
 *
 * User: rossedlin
 * Contact: <contact@rossedlin.com>
 *
 * Date: 25/04/18
 * Time: 17:28
 *
 * Class CheckPulseController
 * @package App\Http\Controllers\Heartbeat
 */
class CheckPulseController extends Base\ApiController
{
    /**
     * @return array
     */
    protected function getPayload()
    {
        return [];
    }
}
