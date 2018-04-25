<?php

namespace App\Http\Controllers\Base;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class WebController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
