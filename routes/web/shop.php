<?php

use Illuminate\Support\Facades\Route;
//    __________ SHOP ROUTES ____________
use App\Http\Controllers\Shop\AuthController;
use \App\Http\Controllers\Shop\ProductController;
use \App\Http\Controllers\Shop\ImageUploadController;
//middleware auth:apishop start
Route::group(['middleware'=> ['shop']], function () {

    Route::get('/shop-profil',[AuthController::class ,'shop'])->name('shop.profil') ;
    Route::get('/shop-logout',[AuthController::class ,'logout']) ->name('shop.logout') ;

});//middleware auth:apishop end

Route::get('/mehsullar',[ProductController::class ,'index']) ->name('shop.products') ;
Route::get('/mehsul-elave-et',[ProductController::class ,'create']) ->name('shop.createproduct') ;
Route::post('/mehsul-elave-et',[ProductController::class ,'store'])  ;
Route::post('/mehsul-shekillerini-yukle',[ImageUploadController::class ,'imageupload'])->name('shop.imageupload') ;
