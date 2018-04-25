<?php

namespace App\Http\Controllers;

/**
 * Created by PhpStorm.
 *
 * User: rossedlin
 * Contact: <contact@rossedlin.com>
 *
 * Date: 25/04/18
 * Time: 15:22
 *
 * Class WelcomeController
 * @package App\Http\Controllers
 */
class WelcomeControllerAbstract extends AbstractWebController
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return view('welcome');
    }
}
