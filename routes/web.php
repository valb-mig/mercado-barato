<?php

use Illuminate\Support\Facades\{Auth, Route};
use App\Http\Controllers\Auth\Login\LoginController;
use App\Http\Controllers\Auth\Register\RegisterController;
use App\Http\Controllers\Pages\Home\HomeController;

/*
*  Root redirect
*/

Route::get('/', function(){
    return Auth::check() ? redirect()->route('home') : redirect()->route('login');
});

/*
*  Home
*/

Route::middleware('auth.check')->group(function () {

    Route::get('/home', [ 
        HomeController::class, 'index'
    ])->name('home');
    
});

/*
*  Login
*/

Route::get('/user/login', [
    LoginController::class, 'index'
])->name('login');

Route::post('/user/login', [
    LoginController::class, 'login'
]);

/*
*  Register
*/

Route::get('/user/register', [
    RegisterController::class, 'index'
])->name('register');

Route::post('/user/register', [
    RegisterController::class, 'register'
]);