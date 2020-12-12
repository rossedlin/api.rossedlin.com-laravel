<?php

namespace App\Models;

use App\Enums\Heartbeat\EntityAttributes;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HeartbeatEntity
 * @package App\Model
 *
 * @method static where($column, $operator = null, $value = null, $boolean = 'and') Builder
 *
 * @property int    $id
 * @property string $code
 * @property string $created_at
 * @property string $updated_at
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
