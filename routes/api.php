<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/ping', 'Ping');

/**
 * Projects
 */
Route::group(['prefix' => 'projects'], function ()
{
    /**
     * 
     */
});

Route::group(['prefix' => 'mail'], function ()
{
    /**
     *
     */
    Route::get('/test', function () {
        return view('welcome');
    });

});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
