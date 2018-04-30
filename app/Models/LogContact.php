<?php

namespace App\Models;

use App\Enums\LogContactAttributes;
use Illuminate\Database\Eloquent\Model;

/**
 * Created by PhpStorm.
 *
 * @author  Ross Edlin <contact@rossedlin.com>
 *
 * Date: 30/04/2018
 * Time: 12:17
 *
 * Class LogContact
 * @package App\Models
 */
class LogContact extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = LogContactAttributes::_TABLE;
}
