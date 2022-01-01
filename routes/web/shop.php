<?php

use Illuminate\Support\Facades\Route;
//    __________ SHOP ROUTES ____________

//middleware auth:apishop start
Route::group(['middleware'=> ['auth:shop']], function () {

    Route::get('/shop-user',[App\Http\Controllers\Shop\AuthController::class ,'shop']) ;
    Route::get('/shop-logout',[App\Http\Controllers\Shop\AuthController::class ,'logout']) ;

});//middleware auth:apishop end

