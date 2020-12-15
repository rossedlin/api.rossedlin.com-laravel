<?php

namespace App\Http\Controllers\Admin\Heartbeat;

use App\Http\Controllers\Controller;
use App\Models\HeartbeatEntity;
use App\Models\HeartbeatPulse;
use Illuminate\Http\Request;

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
class CheckPulseController extends Controller
{
    /**
     * @param Request         $request
     * @param HeartbeatEntity $heartbeatEntity
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function __invoke(Request $request, HeartbeatEntity $heartbeatEntity)
    {
        $heartbeatPulses = HeartbeatPulse::where('heartbeat_entity_id', '=', $heartbeatEntity->id)
                                         ->orderBy('created_at', 'DESC')
                                         ->limit(100)
                                         ->get();

        return view('admin.heartbeat.check-pulse', [
            'heartbeatPulses' => $heartbeatPulses,
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
