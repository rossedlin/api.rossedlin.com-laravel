<?php

Route::get('/', 'WelcomeController');

/**
 * Debug
 */
Route::group(['prefix' => 'debug'], function () {
    Route::get('vue', 'Debug\VueController');
    Route::get('user', 'Debug\UserController');
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
