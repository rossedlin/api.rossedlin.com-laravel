<?php

Route::get('/', 'WelcomeController');
Route::get('/uptime', 'UptimeController');

/**
 * Debug
 */
Route::group(['prefix' => 'debug'], function () {
    Route::get('vue', 'Debug\VueController');
});

/**
 * Admin
 */
Route::group(['prefix' => 'admin'], function () {
    Route::get('dashboard', 'Admin\DashboardController@index')->name('admin.dashboard.index');

    /**
     * Heartbeat
     */
    Route::get('heartbeat/check-pulse', 'Admin\HeartbeatController@checkPulse')->name('admin.heartbeat.check-pulse');
    Route::get('heartbeat/send-pulse', 'Admin\HeartbeatController@sendPulse')->name('admin.heartbeat.send-pulse');
});

/**
 * Authentication
 */
//Route::group(['prefix' => 'auth'], function (){
//    Route::post('login', 'Auth\AuthController@postLogin');
//    Route::get('login', 'Auth\AuthController@getLogin');
//    Route::get('logout', 'Auth\AuthController@getLogout');
//});
//
//Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
//    Route::get('login', 'Auth\AuthController@getLogin');
//});
//Auth::routes();
