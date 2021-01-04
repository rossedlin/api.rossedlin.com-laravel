<?php

namespace App\Models;

use App\Enums\Heartbeat\EntityAttributes;

/**
 * Class HeartbeatEntity
 * @package App\Model
 *
 * @property int                 $id
 * @property string              $code
 * @property string              $created_at
 * @property string              $updated_at
 * @property HeartbeatPulse|null $latestHeartbeatPulse
 */
class HeartbeatEntity extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = EntityAttributes::_TABLE;

    /**
     * Get the comments for the blog post.
     */
    public function heartbeatPulses()
    {
        return $this->hasMany(HeartbeatPulse::class);
    }

    /**
     * @return HeartbeatPulse|null
     */
    public function getLatestHeartbeatPulseAttribute()
    {
        $heartbeatPulse = HeartbeatPulse::where('heartbeat_entity_id', '=', $this->id)
                                        ->orderBy('created_at', 'DESC')
                                        ->first();

        if ($heartbeatPulse instanceof HeartbeatPulse) {
            return $heartbeatPulse;
        }

        return null;
    }

    /**
     * @param int $offsetTimeSeconds - Seconds
     *
     * @return bool
     */
    public function isAlive(int $offsetTimeSeconds = 60): bool
    {
        $heartbeatPulse = $this->latestHeartbeatPulse;

        if ($heartbeatPulse instanceof HeartbeatPulse && $heartbeatPulse->timestamps) {

            $pulseTime = strtotime($heartbeatPulse->created_at);
            $nowTime   = time();

            if ($nowTime < ($pulseTime + $offsetTimeSeconds)) {
                return true;
            }
        }

        return false;
    }
}
