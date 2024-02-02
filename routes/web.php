<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ 
    AuthController::class, 'index'
])->name('index');

// Home

Route::middleware('auth.check')->group(function () {

    Route::get('/home', [ 
        HomeController::class, 'index'
    ])->name('home');
    
});

// Login

Route::get('/user/login', [
    LoginController::class, 'index'
])->name('login');

Route::post('/user/login', [
    LoginController::class, 'login'
]);

// Register

Route::get('/user/register', [
    RegisterController::class, 'index'
])->name('register');

Route::post('/user/register', [
    RegisterController::class, 'register'
]);