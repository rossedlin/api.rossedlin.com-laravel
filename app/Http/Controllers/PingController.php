<?php
namespace App\Http\Controllers;

use \App\Http\Controllers;
use \Cryslo\Api;
use \Cryslo\Core;
use \Cryslo\Object;

/**
 * Created by PhpStorm.
 *
 * @author  Ross Edlin <contact@rossedlin.com>
 *
 * Date: 13/02/2018
 * Time: 11:11
 *
 * Class Ping
 *
 * @package App\Http\Controllers
 */
class PingController extends _ApiController
{
	/**
	 * @return array
	 */
	protected function getPayload()
	{
		return [
			'ip' => Core\Request::server(Core\Consts::REMOTE_ADDR),
		];
	}

}