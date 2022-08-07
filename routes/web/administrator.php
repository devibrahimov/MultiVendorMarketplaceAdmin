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
    Route::get('/categoryathome',[\App\Http\Controllers\Administrator\CategoriesController::class,'categoryathome'])
        ->name('categoryathome');

    //carousel
    Route::get('/carousel/{id?}',[\App\Http\Controllers\Administrator\AdvertismentController::class,'index'])->name
    ('advertisments');
    Route::post('/carousel/store',[\App\Http\Controllers\Administrator\AdvertismentController::class,'store'])->name
    ('advertismentstore');
    Route::get('/carousel/edit/{id}',[\App\Http\Controllers\Administrator\AdvertismentController::class , 'edit'])
        ->name
    ('advertismentedit');
    Route::post('/carousel/update/{id}',[\App\Http\Controllers\Administrator\AdvertismentController::class , 'update'])
        ->name
    ('advertismentupdate');
    Route::delete('/advertismentdelete/{id?}',[\App\Http\Controllers\Administrator\AdvertismentController::class,'advertismentdelete'])->name('advertismentdelete');


    Route::resource('region', \App\Http\Controllers\Administrator\RegionController::class);
//    Route::get('/shop/list',[\App\Http\Controllers\Administrator\Shop\AuthController::class,'newregistershops'])->name
//    ('newregistershops');


    //faq
    Route::resource('faqs', \App\Http\Controllers\Administrator\FaqController::class);


    //corporative page
    Route::get('/corporative/{id?}',[\App\Http\Controllers\Administrator\CorporativePagesController::class,'index'])->name
    ('corporative');
    Route::post('/corporative/store',[\App\Http\Controllers\Administrator\CorporativePagesController::class,'store'])->name
    ('corporativestore');
    Route::get('/corporative/edit/{id}',[\App\Http\Controllers\Administrator\CorporativePagesController::class , 'edit'])
        ->name
        ('corporativeedit');
    Route::post('/corporative/update/{id}',[\App\Http\Controllers\Administrator\CorporativePagesController::class , 'update'])
        ->name
        ('corporativeupdate');
    Route::delete('/corporative/{id?}',[\App\Http\Controllers\Administrator\CorporativePagesController::class,'corporativedelete'])->name('corporativedelete');



    //contracts
    Route::get('/contracts/{id?}',[\App\Http\Controllers\Administrator\ContractsController::class,'index'])->name
    ('contracts');
    Route::post('/contracts/store',[\App\Http\Controllers\Administrator\ContractsController::class,'store'])->name
    ('contractsstore');
    Route::get('/contracts/edit/{id}',[\App\Http\Controllers\Administrator\ContractsController::class , 'edit'])
        ->name
        ('contractsedit');
    Route::post('/contracts/update/{id}',[\App\Http\Controllers\Administrator\ContractsController::class , 'update'])
        ->name
        ('contractsupdate');
    Route::delete('/contracts/{id?}',[\App\Http\Controllers\Administrator\ContractsController::class,'contractdelete'])->name('contractdelete');

    //users
    Route::resource('users', \App\Http\Controllers\Administrator\UserController::class);

    //shop_information
    Route::resource('shop_informations', \App\Http\Controllers\Administrator\ShopİnformationController::class);


    //shop_information
    Route::resource('shops', \App\Http\Controllers\Administrator\ShopsController::class);

});


