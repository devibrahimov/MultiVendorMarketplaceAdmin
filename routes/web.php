<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\ProductController ;

Route::get('/' ,[App\Http\Controllers\Site\GeneralController::class,'index'])->name('home');

//Shop Registers and logins
Route::get('/magaza-qeydiyyati',[App\Http\Controllers\Shop\AuthController::class ,'register'])->name('shop.register');
Route::post('/magaza-qeydiyyati',[App\Http\Controllers\Shop\AuthController::class ,'registerstore']) ;
Route::get('/magaza-girisi',[App\Http\Controllers\Shop\AuthController::class ,'login'])->name('shop.login');
Route::post('/magaza-girisi',[App\Http\Controllers\Shop\AuthController::class ,'logincontrol']) ;

//Registers and logins
Route::get('/istifadeci-qeydiyyati',[App\Http\Controllers\User\AuthController::class ,'register'])->name('user.register');
Route::post('/istifadeci-qeydiyyati',[App\Http\Controllers\User\AuthController::class ,'registerstore']);
Route::get('/istifadeci-girisi',[App\Http\Controllers\User\AuthController::class ,'login'])->name('user.login');
Route::post('/istifadeci-girisi',[App\Http\Controllers\User\AuthController::class ,'logincontrol']) ;



Route::get('/mehsullar',[ProductController::class,'allproducts'])->name('site.products');
Route::get('/mehsul-m={m}&key={key}',[ProductController::class,'productdetail'])->name('site.productdetail');
