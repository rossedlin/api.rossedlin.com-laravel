<?php

namespace App\Http\Controllers\Debug;

use App\Http\Controllers\Base;
use App\Models\User;
use Illuminate\Http\Request;

/**
 * Created by PhpStorm.
 *
 * User: rossedlin
 * Contact: <contact@rossedlin.com>
 *
 * Date: 21/03/18
 * Time: 17:55
 *
 * Class UserController
 * @package App\Http\Controllers\Debug
 */
class UserController extends Base\WebController
{
    /**
     * @param Request $request
     */
    public function __invoke(Request $request)
    {
        $user = new User();
        $user->username = 'rossedlin';
        $user->email = "rossedlin@gmail.com";
        $user->setPassword('FNAm57ehihCX46V7'); //todo remove

        exit;
    }
}
