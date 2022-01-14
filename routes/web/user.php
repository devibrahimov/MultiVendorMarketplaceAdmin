<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\WishlistController;
use App\Http\Controllers\User\UserController;
//    __________ USER ROUTES ____________

Route::group(['middleware'=> ['user'],'prefix' => 'istifadeci'], function () {

    Route::get('/user-logout',[AuthController::class ,'logout'])->name('user.logout') ;


    Route::get('/profil',[UserController::class ,'userprofil'])->name('user.profil') ;
    Route::get('/beyendiklerim',[WishlistController::class ,'wishlist'])->name('user.wishlist') ;
    Route::get('/beyendiyim-mehsul',[WishlistController::class ,'wishproduct'])->name('user.wishproduct') ;


});//middleware auth:apiuser stop


