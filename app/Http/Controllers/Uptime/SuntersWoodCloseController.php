<?php

namespace App\Http\Controllers\Uptime;

use App\Http\Controllers\Controller;
use App\Models\HeartbeatEntity;
use Edlin\Enums\Time;

/**
 * Created by PhpStorm.
 *
 * User: rossedlin
 * Contact: <contact@rossedlin.com>
 *
 * Date: 25/04/18
 * Time: 15:22
 *
 * Class UptimeController
 * @package App\Http\Controllers
 */
class SuntersWoodCloseController extends Controller
{
    /**
     * @return string
     */
    public function __invoke()
    {
        try {
            /** @var HeartbeatEntity $heartbeatEntity */
            $heartbeatEntity = \App\Models\HeartbeatEntity::where('code', '=', 'sunters-wood-close')
                                                          ->first();

            if ($heartbeatEntity instanceof HeartbeatEntity && $heartbeatEntity->isAlive(Time::MINUTE * 30)) {
                return 'alive';
            }
        } catch (\Exception $e) {
        }

        return 'dead';
    }
}
