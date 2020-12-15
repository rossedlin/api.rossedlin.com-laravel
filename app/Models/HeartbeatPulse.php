<?php

namespace App\Models;

use App\Enums\Heartbeat\PulseAttributes;

/**
 * Class HeartbeatPulse
 * @package App\Model
 *
 * @property HeartbeatEntity $heartbeatEntity
 *
 * @property int             $id
 * @property int             $heartbeat_entity_id
 * @property string          $ip_address
 * @property string          $data
 * @property string          $data_type
 * @property string          $created_at
 * @property string          $updated_at
 */
class HeartbeatPulse extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = PulseAttributes::_TABLE;

    /**
     * Get the user that owns the phone.
     */
    public function heartbeatEntity()
    {
        return $this->belongsTo(HeartbeatEntity::class);
    }
}
