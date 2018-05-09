<?php

namespace App\Models;

use App\Enums\MigrationsAttributes;
use Illuminate\Database\Eloquent\Model;

/**
 * Created by PhpStorm.
 *
 * User: rossedlin
 * Contact: <contact@rossedlin.com>
 *
 * Date: 09/05/18
 * Time: 16:52
 *
 * Class Migrations
 * @package App\Models
 */
class Migrations extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = MigrationsAttributes::_TABLE;
}
