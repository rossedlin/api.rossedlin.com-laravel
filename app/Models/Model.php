<?php

namespace App\Models;

use \Illuminate\Database\Eloquent\Builder;

/**
 * Class HeartbeatPulse
 * @package App\Model
 *
 * @method static Builder find($id, $columns = ['*'])
 * @method static Builder select($columns = ['*'])
 * @method static Builder selectRaw($expression, array $bindings = [])
 * @method static Builder join($table, $first, $operator = null, $second = null, $type = 'inner', $where = false)
 * @method static Builder where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static Builder whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static Builder orderBy($column, $direction = 'asc')
 *
 * @property int             $id
 * @property string          $created_at
 * @property string          $updated_at
 */
class Model extends \Illuminate\Database\Eloquent\Model
{
    //placeholder
}
