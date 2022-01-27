<?php

use App\Http\Controllers\User\ResetPasswordController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\WishlistController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\CartController;
//    __________ USER ROUTES ____________

Route::group(['middleware'=> ['user'],'prefix' => 'istifadeci'], function () {

    Route::get('/user-logout',[AuthController::class ,'logout'])->name('user.logout') ;
    Route::get('/profil-melumatlari',[AuthController::class ,'edit'])->name('user.profiledit');
    Route::post('/profil-melumatlari/',[AuthController::class ,'update']) ;

    Route::get('/profil',[UserController::class ,'userprofil'])->name('user.profil') ;
    Route::get('/beyendiklerim',[WishlistController::class ,'wishlist'])->name('user.wishlist') ;
    Route::get('/beyendiyim-mehsul',[WishlistController::class ,'wishproduct'])->name('user.wishproduct') ;
    Route::post('user-addtowishlist',[WishlistController::class,'addtowishlist'])->name('user.addtowishlist');
    Route::get('reset-password', [ResetPasswordController::class, 'showResetPasswordForm'])->name('user.password');
    Route::post('reset-password', [ResetPasswordController::class, 'submitResetPasswordForm']) ;
    Route::post('user-changeAvatar',[UserController::class,'changeAvatar'])->name('user.changeAvatar');


    Route::get('sebetim',[CartController::class,'productlist'])->name('user.cartlist');
    Route::post('sebete-elave-et',[CartController::class,'addtocart'])->name('user.addtocart');


    Route::get('reset-password', [ResetPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
    Route::post('reset-password', [ResetPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');




});//middleware auth:apiuser stop


