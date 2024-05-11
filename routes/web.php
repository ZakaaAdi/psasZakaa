<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OutletController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('/outlets', OutletController::class);