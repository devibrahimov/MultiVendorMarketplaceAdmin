<?php

use Illuminate\Support\Facades\Route;



//    __________ USER ROUTES ____________

Route::group(['middleware'=> ['auth:user']], function () {

    Route::get('/userdata',[App\Http\Controllers\USer\AuthController::class ,'userdata']) ;
    Route::get('/user-logout',[App\Http\Controllers\User\AuthController::class ,'logout']) ;


});//middleware auth:apiuser stop


