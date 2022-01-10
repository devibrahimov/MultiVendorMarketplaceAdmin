<?php

use Illuminate\Support\Facades\Route;


//    __________ ADMINISTRATOR ROUTES ____________
Route::get('/login',[\App\Http\Controllers\Administrator\AuthController::class, 'login'])->prefix('adminpanel')->name('login');
Route::post('/login', [\App\Http\Controllers\Administrator\AuthController::class, 'logincontrol'])->prefix('adminpanel') ;

Route::group(['middleware'=>'administrator' ,'prefix'=>'adminpanel'],function () {
    Route::post('/exit', [\App\Http\Controllers\Administrator\AuthController::class, 'logout'])->name('logout');

    Route::get('/', [\App\Http\Controllers\Administrator\GeneralController::class, 'dashboard'])->name('dashboard');
    Route::get('/setting',[\App\Http\Controllers\Administrator\SettingController::class,'index'])->name('setting');
    Route::post('/setting',[\App\Http\Controllers\Administrator\SettingController::class,'store']) ;
    Route::post('/setting/update',[\App\Http\Controllers\Administrator\SettingController::class,'update'])->name('setting_update');

    //categories
    Route::get('/category/{id?}',[\App\Http\Controllers\Administrator\CategoriesController::class,'index'])->name('categories');
    Route::post('/category/store/{parentid?}',[\App\Http\Controllers\Administrator\CategoriesController::class,'store'])->name('categorystore');
    Route::get('/category/edit/{id}',[\App\Http\Controllers\Administrator\CategoriesController::class , 'edit'])->name('categoryedit');
    Route::post('/category/update/{id}',[\App\Http\Controllers\Administrator\CategoriesController::class , 'update'])
        ->name('categoryupdate');
    Route::post('/categoryactivestatus',[\App\Http\Controllers\Administrator\CategoriesController::class ,
        'categoryactivestatus'])->name('categoryactivestatus');
    Route::delete('/categorydelete/{id?}',[\App\Http\Controllers\Administrator\CategoriesController::class,'categorydelete'])
        ->name('categorydelete');

    //advertisment
    Route::get('/advertisment/{id?}',[\App\Http\Controllers\Administrator\AdvertismentController::class,'index'])->name
    ('advertisments');
    Route::post('/advertisment/store',[\App\Http\Controllers\Administrator\AdvertismentController::class,'store'])->name
    ('advertismentstore');
    Route::get('/advertisment/edit/{id}',[\App\Http\Controllers\Administrator\AdvertismentController::class , 'edit'])
        ->name
    ('advertismentedit');
    Route::post('/advertisment/update/{id}',[\App\Http\Controllers\Administrator\AdvertismentController::class , 'update'])
        ->name
    ('advertismentupdate');
    Route::delete('/advertismentdelete/{id?}',[\App\Http\Controllers\Administrator\AdvertismentController::class,'advertismentdelete'])->name('advertismentdelete');


    Route::resource('region', \App\Http\Controllers\Administrator\RegionController::class);
    Route::get('/shop/list',[\App\Http\Controllers\Administrator\Shop\AuthController::class,'newregistershops'])->name
    ('newregistershops');


    //Shop



});


