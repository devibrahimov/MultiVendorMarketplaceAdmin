<?php

use Illuminate\Support\Facades\Route;
//    __________ SHOP ROUTES ____________
use App\Http\Controllers\Shop\AuthController;
use \App\Http\Controllers\Shop\ProductController;
//middleware auth:apishop start
Route::group(['middleware'=> ['shop']], function () {

    Route::get('/shop-profil',[AuthController::class ,'shop'])->name('shop.profil') ;
    Route::get('/shop-logout',[AuthController::class ,'logout']) ->name('shop.logout') ;

});//middleware auth:apishop end

Route::get('/mehsul-elave-et',[ProductController::class ,'create']) ->name('createproduct') ;
Route::post('/mehsul-elave-et',[ProductController::class ,'store'])  ;
