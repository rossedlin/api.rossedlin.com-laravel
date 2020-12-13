<?php

namespace App\Http\Controllers\Admin\Heartbeat;

use App\Http\Controllers\Controller;
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
class CheckEntityController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
//        dd(route('admin.heartbeat.check-pulse', [1]));
        $heartbeatEntities = HeartbeatEntity::all();

        return view('admin.heartbeat.check-entity', [
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
