<?php

namespace App\Http\Controllers\Api\Heartbeat;

use \App\Http\Controllers\Api\Controller;

use App\Enums\TimeAttributes;
use App\Exceptions\ApiException;

use \App\Models\HeartbeatEntity;
use \App\Models\HeartbeatPulse;

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
class CheckPulseController extends Controller
{
    /**
     * @return array
     * @throws ApiException
     */
    protected function getPayload()
    {
        $code       = $this->getRequest()->route('code');
        $offsetTime = (int)$this->getRequest()->route('offset_time');

        /**
         * Check GET vars
         */
        if (trim($code) === '') {
            throw new ApiException("Code is blank");
        }

        /**
         * @var \App\Models\HeartbeatEntity $entity
         */
        $entity = HeartbeatEntity::where('code', '=', $code)->first();

        if ($entity === null) {
            throw new ApiException("Entity not found");
        }

        /**
         * @var \App\Models\HeartbeatEntity $entity
         */
        $pulse = HeartbeatPulse::where('heartbeat_entity_id', '=', $entity->id)
                               ->orderBy('created_at', 'desc')
                               ->first();

        if ($pulse === null) {
            throw new ApiException("Pulse not found");
        }

        /**
         * Check if Alive
         */


        return [
            'code'        => $code,
            'offset_time' => $offsetTime,
            'alive'       => $entity->isAlive(),
            'last_pulse'  => (time() - strtotime($pulse->created_at)),
            'entity'      => $entity,
            'pulse'       => $pulse,
        ];
    }
}
