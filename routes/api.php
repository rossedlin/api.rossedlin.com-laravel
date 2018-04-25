<?php

use Illuminate\Http\Request;

/**
 * Ping
 */
Route::get('/ping', 'PingController');



/**
 * Test Methods
 */
Route::group(['prefix' => 'test'], function () {
    Route::post('/post', 'Test\Post');
});



/**
 * Main Security Group
 */
Route::group(['middleware' => ['auth.username-password']], function () {

    /**
     * Email
     */
    Route::group(['prefix' => 'email'], function () {
        Route::post('/send', 'Email\SendController');
    });

    /**
     * Heartbeat
     */
    Route::group(['prefix' => 'heartbeat'], function () {
        Route::post('/send-pulse', 'Heartbeat\SendPulseController');
        Route::post('/check-pulse', 'Heartbeat\CheckPulseController');
    });
});



/**
 *
 */
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
