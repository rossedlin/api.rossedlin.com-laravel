<?php

namespace App\Models;

use App\Enums\Heartbeat\PulseAttributes;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Builder;

/**
 * Class HeartbeatPulse
 * @package App\Model
 *
 * @method static where($column, $operator = null, $value = null, $boolean = 'and') Builder
 */
class HeartbeatPulse extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = PulseAttributes::_TABLE;
}
