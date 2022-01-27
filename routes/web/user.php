<?php

use App\Http\Controllers\User\ResetPasswordController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\WishlistController;
use App\Http\Controllers\User\UserController;
//    __________ USER ROUTES ____________

Route::group(['middleware'=> ['user'],'prefix' => 'istifadeci'], function () {

    Route::get('/user-logout',[AuthController::class ,'logout'])->name('user.logout') ;
    Route::get('/profil-melumatlari',[AuthController::class ,'edit'])->name('user.profiledit');
    Route::post('/profil-melumatlari/',[AuthController::class ,'update']) ;

    Route::get('/profil',[UserController::class ,'userprofil'])->name('user.profil') ;
    Route::get('/beyendiklerim',[WishlistController::class ,'wishlist'])->name('user.wishlist') ;
    Route::get('/beyendiyim-mehsul',[WishlistController::class ,'wishproduct'])->name('user.wishproduct') ;

    Route::get('reset-password', [ResetPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
    Route::post('reset-password', [ResetPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');




});//middleware auth:apiuser stop


