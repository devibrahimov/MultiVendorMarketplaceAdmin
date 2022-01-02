<?php

use Illuminate\Support\Facades\Route;



//    __________ USER ROUTES ____________

Route::group(['middleware'=> ['user']], function () {

    Route::get('/user-profil',[App\Http\Controllers\USer\AuthController::class ,'userdata']) ;
    Route::get('/user-logout',[App\Http\Controllers\User\AuthController::class ,'logout']) ;


});//middleware auth:apiuser stop


