<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AccountController;

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
})->middleware('auth');

Route::get('/login', [SessionsController::class, 'iniciarSesion'])
    ->middleware('guest')
    ->name('login.iniciarSesion');

Route::post('/login', [SessionsController::class, 'store'])
    ->name('login.store');

//register
Route::get('/register', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register.create');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');

Route::get('/account', [AccountController::class, 'activate'])
    ->middleware('guest')
    ->name('account.activate'); 

Route::get('/logout', [SessionsController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout.destroy');

/*   Route::get('/', HomeController::class); */

/* Route::get('login', [loginController::class, 'iniciarSesion'] ); */

/* Route::get('users',[ UserController::class, '']); */

