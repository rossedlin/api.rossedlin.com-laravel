<?php

Route::get('/home', 'Home@index')->name('home');

// Authentication Routes...
//$this->get('login', 'Auth\Login@showLoginForm')->name('login');
//$this->post('login', 'Auth\Login@login');
//$this->post('logout', 'Auth\Login@logout')->name('logout');

// Registration Routes...
//$this->get('register', 'Auth\Register@showRegistrationForm')->name('register');
//$this->post('register', 'Auth\Register@register');

// Password Reset Routes...
//$this->get('password/reset', 'Auth\ForgotPassword@showLinkRequestForm')->name('password.request');
//$this->post('password/email', 'Auth\ForgotPassword@sendResetLinkEmail')->name('password.email');
//$this->get('password/reset/{token}', 'Auth\ResetPassword@showResetForm')->name('password.reset');
//$this->post('password/reset', 'Auth\ResetPassword@reset');

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
