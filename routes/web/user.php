<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User\AuthController;

//    __________ USER ROUTES ____________

Route::group(['middleware'=> ['user']], function () {

    Route::get('/user-logout',[AuthController::class ,'logout'])->name('user.logout') ;


    Route::get('/user-profil',[AuthController::class ,'userprofil'])->name('user.profil') ;


});//middleware auth:apiuser stop


