<?php

use Illuminate\Support\Facades\Route;
//    __________ SHOP ROUTES ____________
use App\Http\Controllers\Shop\AuthController;
use \App\Http\Controllers\Shop\ProductController;

use \App\Http\Controllers\Shop\ShopController ;
//middleware auth:apishop start
Route::group(['middleware'=> ['shop'] , 'prefix' => 'magaza'], function () {

    Route::get('/profilim',[ShopController::class ,'profil'])->name('shop.profil') ;
    Route::get('/cixis-et',[AuthController::class ,'logout']) ->name('shop.logout') ;

    Route::get('/profil-melumatlari',[ShopController::class ,'edit'])->name('shop.profiledit') ;
    Route::post('/profil-melumatlari',[ShopController::class ,'update']) ;

    Route::get('/mehsullar',[ProductController::class ,'index']) ->name('shop.products') ;
    Route::get('/mehsul-elave-et',[ProductController::class ,'create']) ->name('shop.createproduct') ;
    Route::post('/mehsul-elave-et',[ProductController::class ,'store'])  ;
    Route::post('/m-a-t-e',[ProductController::class ,'active'])  ->name('shop.productActive') ;//mehsul activliyini teyin et
    Route::get('/mehsul-{id}-{slug}',[ProductController::class ,'edit'])->name('shop.editproduct') ;
    Route::get('/mehsul-elave-et',[ProductController::class ,'create']) ->name('shop.createproduct') ;


});//middleware auth:apishop end
