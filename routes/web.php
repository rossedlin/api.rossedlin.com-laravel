<?php

use Illuminate\Support\Facades\Route;

Route::get('/', App\Http\Controllers\WelcomeController::class);
Route::get('/uptime', App\Http\Controllers\UptimeController::class);

/**
 * Debug
 */
Route::group(['prefix' => 'debug'], function () {
    Route::get('vue', App\Http\Controllers\VueController::class);
});

/**
 * Admin
 */
//Route::group(['prefix' => 'admin'], function () {
//    Route::get('dashboard', 'Admin\DashboardController@index')->name('admin.dashboard.index');
//
//    /**
//     * Heartbeat
//     */
//    Route::get('heartbeat/check-pulse', 'Admin\HeartbeatController@checkPulse')->name('admin.heartbeat.check-pulse');
//    Route::get('heartbeat/send-pulse', 'Admin\HeartbeatController@sendPulse')->name('admin.heartbeat.send-pulse');
//});


/**
 * Authentication
 */
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
