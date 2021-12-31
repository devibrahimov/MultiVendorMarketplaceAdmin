<?php

use Illuminate\Support\Facades\Route;
//    __________ SHOP ROUTES ____________

//Registers and logins
Route::post('/shop-register',[App\Http\Controllers\Api\Shop\AuthController::class ,'register'])->name('shopregister');
Route::post('/shop-login',[App\Http\Controllers\Api\Shop\AuthController::class ,'login']);

//middleware auth:apishop start
Route::group(['middleware'=> ['auth:shop']], function () {

    Route::get('/shop-user',[App\Http\Controllers\Api\Shop\AuthController::class ,'shop']) ;
    Route::get('/shop-logout',[App\Http\Controllers\Api\Shop\AuthController::class ,'logout']) ;

});//middleware auth:apishop end

