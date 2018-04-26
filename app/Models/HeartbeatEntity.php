<?php

namespace App\Models;

use App\Enums\Heartbeat\EntityAttributes;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Builder;
/**
 * Class HeartbeatEntity
 * @package App\Model
 *
 * @method static where($column, $operator = null, $value = null, $boolean = 'and') Builder
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
