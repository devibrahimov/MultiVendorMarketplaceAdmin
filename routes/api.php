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

Route::group(['middleware'=> ['apitoken']], function () {
    //start API endpoints


    Route::get('/test',function (){ return 123; });

    //Registers and logins
    Route::post('/shop-register',[App\Http\Controllers\Api\Shop\AuthController::class ,'register']);
 //   Route::post('/provider-register',[App\Http\Controllers\Api\Provider\AuthController::class ,'register']);
    Route::post('/user-register',[App\Http\Controllers\Api\User\AuthController::class ,'register']);

   //end API endpoints
});
