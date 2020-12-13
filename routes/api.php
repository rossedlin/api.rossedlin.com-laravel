<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/**
 * Ping
 */
Route::get('/ping', App\Http\Controllers\Api\PingController::class);



/**
 * Test Methods
 */
Route::group(['prefix' => 'test'], function () {
    Route::post('/post', App\Http\Controllers\Api\Test\Post::class);
});



/**
 * Main Security Group
 */
Route::group(['middleware' => ['auth.api-key']], function () {

    /**
     * Contact
     */
//    Route::group(['prefix' => 'contact'], function () {
//        Route::post('/me', 'Contact\MeController');
//    });

    /**
     * Email
     */
//    Route::group(['prefix' => 'mail'], function () {
//        Route::post('/send', 'Mail\SendController');
//    });

    /**
     * Heartbeat
     */
//    Route::group(['prefix' => 'heartbeat'], function () {
//        Route::post('/send-pulse', 'Heartbeat\SendPulseController');
//        Route::get('/check-pulse/{code}/{offset_time?}', 'Heartbeat\CheckPulseController');
//    });
});



/**
 *
 */
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
