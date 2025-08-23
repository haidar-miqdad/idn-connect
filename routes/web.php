<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('pages.auth.login');
});

Route::middleware(['auth'])->get('home', function(){
    return view('pages.dashboard');
});

Route::resource('user', UserController::class);
Route::resource('news', NewsController::class);
Route::resource('category', CategoryController::class);
