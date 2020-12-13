<?php

namespace App\Http\Controllers\Api\Heartbeat;

use \App\Http\Controllers\Api\Controller;

use App\Exceptions\ApiException;

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
class SendPulseController extends Controller
{
    /**
     * @return array
     * @throws ApiException
     */
    protected function getPayload()
    {
        $new_entity     = false;
        $recorded_pulse = false;
        $code           = $this->getRequest()->post('code', false);
        $data           = $this->getRequest()->post('data', null);
        $data_type      = $this->getRequest()->post('data_type', null);

        /**
         * Validation
         */
        if ($code === false || $code === null) {
            throw new ApiException("Code is missing");
        }

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

        /**
         * Handle Data
         */
        if ($data !== null) {
            $data_type_int = $this->isDataTypeValid($data_type);

            $pulse->data      = $data;
            $pulse->data_type = $data_type_int;
        }

        /**
         * Save Pulse
         */
        if ($pulse->save()) {
            $recorded_pulse = true;
        }

        return [
            'code'           => $code,
            'alive'          => true,
            'recorded_pulse' => $recorded_pulse,
            'new_entity'     => $new_entity,
            'entity'         => $entity,
            'pulse'          => $pulse,
        ];
    }

    /**
     * @param $data_type
     *
     * @return int
     * @throws ApiException
     */
    private function isDataTypeValid($data_type): int
    {
        switch ($data_type) {
            case 'json':
                return 1;
            case 'xml':
                return 2;
        }

        throw new ApiException("Invalid Data Type");
    }
}
