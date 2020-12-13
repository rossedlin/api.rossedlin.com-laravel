<?php

namespace App\Http\Controllers;

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
class VueController extends Controller
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
