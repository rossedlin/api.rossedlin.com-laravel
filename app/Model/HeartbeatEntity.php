<?php

namespace App\Model;

use App\Enums\Heartbeat\EntityAttributes;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HeartbeatEntity
 * @package App\Model
 *
 * @method static where($column, $operator = null, $value = null, $boolean = 'and') \Illuminate\Database\Eloquent\Builder
 */
class HeartbeatEntity extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = EntityAttributes::_TABLE;
}
