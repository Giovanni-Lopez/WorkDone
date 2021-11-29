<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/login', [SessionsController::class, 'iniciarSesion'])->name('login.iniciarSesion');

Route::get('/register', [RegisterController::class, 'create'])->name('register.create');

/*   Route::get('/', HomeController::class); */

/* Route::get('login', [loginController::class, 'iniciarSesion'] ); */

/* Route::get('users',[ UserController::class, '']); */

