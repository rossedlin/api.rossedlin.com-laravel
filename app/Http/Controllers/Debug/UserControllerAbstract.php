<?php

namespace App\Http\Controllers\Debug;

use App\Http\Controllers\AbstractWebController;
use App\Model\User;
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
class UserControllerAbstract extends AbstractWebController
{
    /**
     * @param Request $request
     */
    public function __invoke(Request $request)
    {
        $user = new User();
        $user->username = 'rossedlin';
        $user->email = "rossedlin@gmail.com";
        $user->setPassword('FNAm57ehihCX46V7');

        exit;
    }
}
