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
Route::group(['middleware' => ['auth.api-key']], function () {

    /**
     * Contact
     */
    Route::group(['prefix' => 'contact'], function () {
        Route::post('/me', 'Contact\MeController');
    });

    /**
     * Email
     */
    Route::group(['prefix' => 'mail'], function () {
        Route::post('/send', 'Mail\SendController');
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
