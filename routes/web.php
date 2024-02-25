<?php

use Illuminate\Support\Facades\{Auth, Route};

use App\Http\Controllers\Pages\Auth\{
    Login\LoginController,
    Register\RegisterController
};

use App\Http\Controllers\Pages\{
    Home\HomeController,
    Setor\SetorController,
    Produto\ProdutoController
};

/*
*  Root redirect
*/

Route::get('/', function(){
    return Auth::check() ? redirect()->route('home') : redirect()->route('login');
});

Route::middleware('auth.check')->group(function () {

    /*
    *  Home
    */

    Route::get('/home', [ 
        HomeController::class, 'index'
    ])->name('home');
    
    /*
    *  Setor
    */

    Route::get('/setor/{id?}', [ 
        SetorController::class, 'index'
    ])->name('setor');

    Route::post('/setor/{id?}/add', [ 
        ProdutoController::class, 'add'
    ]);
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