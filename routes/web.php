<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::get('/', function() { 
    return view('pages.home.index'); 
})->name('home');

/* 
    Auth routes 
*/

Route::get('/manage', function() { 
    return view('pages.manage.index');
});


/* 
    Login
*/

Route::post('/login', [
    LoginController::class, 'store'
]);