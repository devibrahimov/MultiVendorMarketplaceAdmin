<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function (){
    echo 'homepage';
})->name('dashboard');
