<?php

namespace App\Models;

use App\Enums\LogRequestsAttributes;

/**
 * Class LogRequests
 * @package App\Model
 *
 * @property int             $id
 * @property string          $request_ip
 * @property string          $request_uri
 * @property string          $request_header
 * @property string          $request_args
 * @property string          $request_body
 * @property string          $response_status
 * @property string          $response_body
 */
class LogRequests extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = LogRequestsAttributes::_TABLE;
}
