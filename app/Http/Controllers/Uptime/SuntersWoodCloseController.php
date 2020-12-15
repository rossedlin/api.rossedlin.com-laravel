<?php

namespace App\Http\Controllers\Uptime;

use App\Http\Controllers\Controller;
use App\Models\HeartbeatEntity;

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
            $heartbeatEntity = \App\Models\HeartbeatEntity::where('code', '=', 'sunters-wood-close')->get();

            if ($heartbeatEntity instanceof HeartbeatEntity && $heartbeatEntity->isAlive(300)) {
                return 'alive';
            }
        } catch (\Exception $e) {
        }

        return 'dead';
    }
}
