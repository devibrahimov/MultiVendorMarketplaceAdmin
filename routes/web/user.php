<?php

use Illuminate\Support\Facades\Route;



//    __________ USER ROUTES ____________

//Registers and logins
Route::post('/user-register',[App\Http\Controllers\User\AuthController::class ,'register']);
Route::post('/user-login',[App\Http\Controllers\User\AuthController::class ,'login']);
//middleware auth:apiuser start


Route::group(['middleware'=> ['auth:user']], function () {

    Route::get('/userdata',[App\Http\Controllers\USer\AuthController::class ,'userdata']) ;
    Route::get('/user-logout',[App\Http\Controllers\User\AuthController::class ,'logout']) ;


});//middleware auth:apiuser stop

