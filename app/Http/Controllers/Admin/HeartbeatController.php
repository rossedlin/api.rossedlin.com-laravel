<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Base\WebController;
use App\Models\HeartbeatEntity;
use App\Models\HeartbeatPulse;

/**
 * Created by PhpStorm.
 *
 * User: Ross Edlin
 * Contact: <contact@rossedlin.com>
 *
 * Date: 12 December 2020
 * Time: 10:04
 *
 * Class HeartbeatController
 * @package App\Http\Controllers
 */
class HeartbeatController extends WebController
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function checkPulse()
    {
        $heartbeatEntities = HeartbeatEntity::all();

        return view('admin.heartbeat.check-pulse', [
            'heartbeatEntities' => $heartbeatEntities,
        ]);
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function sendPulse()
    {
        return view('admin.heartbeat.index');
    }
}
