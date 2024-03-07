<?php

use Illuminate\Support\Facades\{Auth, Route};

use App\Http\Controllers\Pages\Auth\{
    Login\LoginController,
    Register\RegisterController
};

use App\Http\Controllers\Pages\{
    Home\HomeController,
    Setor\SetorController,
    Produto\ProdutoController,
    User\UsuarioController
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
    *  Usuário
    */

    Route::get('/user/profile/{id}', [ 
        UsuarioController::class, 'index'
    ])->name('user-profile');

    /*
    *  Setor
    */

    Route::get('/setor/{id?}', [ 
        SetorController::class, 'index'
    ])->name('setor');

    Route::post('/setor/{id?}/add', [ 
        ProdutoController::class, 'add'
    ]);

    /*
    *  Produto
    */

    Route::get('/produto/{id?}', [ 
        ProdutoController::class, 'index'
    ])->name('produto');
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