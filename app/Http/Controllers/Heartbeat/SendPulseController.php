<?php

namespace App\Http\Controllers\Heartbeat;

use \App\Http\Controllers\Base;
use App\Model\HeartbeatEntity;

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
        $inserted = false;
        $code     = $this->getRequest()->post('code');
        $status   = $this->getRequest()->post('status');

        /**
         * @var \App\Model\HeartbeatEntity $entity
         */
        $entity = HeartbeatEntity::where('code', '=', $code)->first();

        if ($entity === null) {
            $inserted     = true;
            $entity       = new HeartbeatEntity;
            $entity->code = $code;
            $entity->save();
        }

        return [
            'code'     => $code,
            'status'   => $status,
            'inserted' => $inserted,
            'entity'   => $entity,
        ];
    }

}
