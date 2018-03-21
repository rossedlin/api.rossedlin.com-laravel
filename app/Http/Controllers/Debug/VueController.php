<?php

namespace App\Http\Controllers\Debug;

use App\Http\Controllers\_WebController;
use Illuminate\Http\Request;

/**
 * Created by PhpStorm.
 *
 * User: rossedlin
 * Contact: <contact@rossedlin.com>
 *
 * Date: 15/03/18
 * Time: 10:42
 */
class VueController extends _WebController
{
    /**
     * @param Request $request
     *
     * @return \Illuminate\View\View
     */
    public function __invoke(Request $request)
    {
        return view('debug/vue');
    }
}
