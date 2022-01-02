<?php

use Illuminate\Support\Facades\Route;
//    __________ SHOP ROUTES ____________

//middleware auth:apishop start
Route::group(['middleware'=> ['shop']], function () {

    Route::get('/shop-profil',[App\Http\Controllers\Shop\AuthController::class ,'shop'])->name('shop') ;
    Route::get('/shop-logout',[App\Http\Controllers\Shop\AuthController::class ,'logout']) ;

});//middleware auth:apishop end

