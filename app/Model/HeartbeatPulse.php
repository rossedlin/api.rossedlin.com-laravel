<?php

namespace App\Model;

use App\Enums\Heartbeat\PulseAttributes;
use Illuminate\Database\Eloquent\Model;

class HeartbeatPulse extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = PulseAttributes::_TABLE;
}
