<?php

namespace App\Models;

use App\Enums\LogRequestsAttributes;
use Illuminate\Database\Eloquent\Model;

class LogRequests extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = LogRequestsAttributes::_TABLE;
}
