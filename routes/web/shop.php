<?php

use Illuminate\Support\Facades\Route;
//    __________ SHOP ROUTES ____________
use App\Http\Controllers\Shop\AuthController;
//middleware auth:apishop start
Route::group(['middleware'=> ['shop']], function () {

    Route::get('/shop-profil',[AuthController::class ,'shop'])->name('shop.profil') ;
    Route::get('/shop-logout',[AuthController::class ,'logout']) ->name('shop.logout') ;

});//middleware auth:apishop end

