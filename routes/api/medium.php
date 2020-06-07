<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::namespace('Api\Medium')->name('api')
    ->group(function () {
        Route::prefix('array_string')->group(function () {
            Route::get('three_sum', 'ArrayController@threeSum');
        });
    });
