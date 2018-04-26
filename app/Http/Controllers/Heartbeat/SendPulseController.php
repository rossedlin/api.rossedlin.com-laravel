<?php

namespace App\Http\Controllers\Heartbeat;

use \App\Http\Controllers\Base;
use \App\Models\HeartbeatEntity;
use \App\Models\HeartbeatPulse;

/**
 * Created by PhpStorm.
 *
 * @author  Ross Edlin <contact@rossedlin.com>
 *
 * Date: 13/02/2018
 * Time: 11:11
 *
 * Class HeartBeatController
 *
 * @package App\Http\Controllers
 */
class SendPulseController extends Base\ApiController
{
    /**
     * @return array
     */
    protected function getPayload()
    {
        $new_entity     = false;
        $recorded_pulse = false;
        $code           = $this->getRequest()->post('code');

        /**
         * @var \App\Models\HeartbeatEntity $entity
         */
        $entity = HeartbeatEntity::where('code', '=', $code)->first();

        if ($entity === null) {
            $new_entity   = true;
            $entity       = new HeartbeatEntity;
            $entity->code = $code;
            $entity->save();
        }

        $pulse                      = new HeartbeatPulse();
        $pulse->heartbeat_entity_id = $entity->id;
        $pulse->ip_address          = $this->getRequest()->ip();

        if ($pulse->save()) {
            $recorded_pulse = true;
        }

        return [
            'code'           => $code,
            'alive'         => true,
            'recorded_pulse' => $recorded_pulse,
            'new_entity'     => $new_entity,
            'entity'         => $entity,
            'pulse'          => $pulse,
        ];
    }
}
