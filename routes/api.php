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

/**
 * Projects
 */
Route::group(['prefix' => 'projects'], function ()
{
    /**
     * Api Integration
     */
//    Route::get('/api-integration', 'Projects\ApiIntegration');

    /**
     * Stripe
     */
    Route::group(['prefix' => 'stripe'], function ()
    {
        Route::get('/authorise', 'Projects\Stripe@authorise');
    });

    /**
     * Web Scraping
     */
//    Route::get('/web-scraping', 'Portfolio\WebScraping');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
