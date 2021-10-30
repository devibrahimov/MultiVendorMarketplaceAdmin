<?php

use Illuminate\Support\Facades\Route;


Route::get('/login',function (){  return view('login'); })->name('login');
Route::post('/login', [\App\Http\Controllers\General\AuthController::class, 'logincontrol']) ;

Route::group(['middleware'=>'auth'],function () {
    Route::post('/exit', [\App\Http\Controllers\General\AuthController::class, 'logout'])->name('logout');

    Route::get('/', [\App\Http\Controllers\General\GeneralController::class, 'dashboard'])->name('dashboard');
    Route::get('/setting',[\App\Http\Controllers\General\SettingController::class,'index'])->name('setting');
    Route::post('/setting',[\App\Http\Controllers\General\SettingController::class,'store']) ;
});
