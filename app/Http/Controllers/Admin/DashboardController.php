<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Base\WebController;

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
class DashboardController extends WebController
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard.index');
    }
}
