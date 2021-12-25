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


//    __________ SHOP ROUTES ____________

    //Registers and logins
    Route::post('/shop-register',[App\Http\Controllers\Api\Shop\AuthController::class ,'register']);
    Route::post('/shop-login',[App\Http\Controllers\Api\Shop\AuthController::class ,'login']);

    //middleware auth:apishop start
    Route::group(['middleware'=> ['auth:apishop']], function () {

        Route::get('/shop-user',[App\Http\Controllers\Api\Shop\AuthController::class ,'shop']) ;
        Route::get('/shop-logout',[App\Http\Controllers\Api\Shop\AuthController::class ,'logout']) ;

    });//middleware auth:apishop end








//    __________ USER ROUTES ____________
    //Registers and logins
    Route::post('/user-register',[App\Http\Controllers\Api\User\AuthController::class ,'register']);
    Route::post('/user-login',[App\Http\Controllers\Api\User\AuthController::class ,'login']);
    //middleware auth:apiuser start
    Route::group(['middleware'=> ['auth:apiuser']], function () {

        Route::get('/userdata',[App\Http\Controllers\Api\USer\AuthController::class ,'userdata']) ;
        Route::get('/user-logout',[App\Http\Controllers\Api\User\AuthController::class ,'logout']) ;


    });//middleware auth:apiuser stop



   //end API endpoints
});
