<?php

use Illuminate\Support\Facades\Route;


Route::get('/login',function (){  return view('login'); })->name('login');
Route::post('/login', [\App\Http\Controllers\General\AuthController::class, 'logincontrol']) ;

Route::group(['middleware'=>'auth' ],function () {
    Route::post('/exit', [\App\Http\Controllers\General\AuthController::class, 'logout'])->name('logout');

    Route::get('/', [\App\Http\Controllers\General\GeneralController::class, 'dashboard'])->name('dashboard');
    Route::get('/setting',[\App\Http\Controllers\General\SettingController::class,'index'])->name('setting');
    Route::post('/setting',[\App\Http\Controllers\General\SettingController::class,'store']) ;
    Route::post('/setting/update',[\App\Http\Controllers\General\SettingController::class,'update'])->name('setting_update');

    Route::get('/category/{id?}',[\App\Http\Controllers\General\CategoriesController::class,'index'])->name('categories');
    Route::post('/category/store/{parentid?}',[\App\Http\Controllers\General\CategoriesController::class,'store'])
        ->name('categorystore');
    Route::get('/category/edit/{id}',[\App\Http\Controllers\General\CategoriesController::class , 'edit'])->name('categoryedit');
    Route::post('/category/update/{id}',[\App\Http\Controllers\General\CategoriesController::class , 'update'])->name
    ('categoryupdate');
    Route::post('/categoryactivestatus',[\App\Http\Controllers\General\CategoriesController::class , 'categoryactivestatus'])->name('categoryactivestatus');
    Route::delete('/categorydelete/{id?}',[\App\Http\Controllers\General\CategoriesController::class,
        'categorydelete'])->name('categorydelete');

    Route::resource('region', \App\Http\Controllers\General\RegionController::class);



});

