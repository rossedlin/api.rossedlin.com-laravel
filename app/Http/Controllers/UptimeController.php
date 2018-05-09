<?php

namespace App\Http\Controllers;

use App\Models\Migrations;

/**
 * Created by PhpStorm.
 *
 * User: rossedlin
 * Contact: <contact@rossedlin.com>
 *
 * Date: 25/04/18
 * Time: 15:22
 *
 * Class UptimeController
 * @package App\Http\Controllers
 */
class UptimeController extends Base\WebController
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        try {
            $mig = Migrations::all();
            $status = 'up';
        } catch (\Exception $e) {
            $status = 'down';
        }

        return $status;
    }
}
