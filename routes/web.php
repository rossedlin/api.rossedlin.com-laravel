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
Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard', App\Http\Controllers\Admin\DashboardController::class)
         ->name('admin.dashboard.index');

    /**
     * Heartbeat
     */
    Route::get('heartbeat/check-entity', \App\Http\Controllers\Admin\Heartbeat\CheckEntityController::class)
         ->name('admin.heartbeat.check-entity');

    Route::get('heartbeat/check-pulse/{heartbeatEntity}', \App\Http\Controllers\Admin\Heartbeat\CheckPulseController::class)
         ->name('admin.heartbeat.check-pulse');

    Route::get('heartbeat/send-pulse', App\Http\Controllers\VueController::class)
         ->name('admin.heartbeat.send-pulse');
});


/**
 * Authentication
 */
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
