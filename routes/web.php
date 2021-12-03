<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\Admin\AnuncioController;

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

Route::get('/', [SessionsController::class, 'index'])
   ->middleware('auth')
   ->name('/');

Route::get('/login', [SessionsController::class, 'iniciarSesion'])
    ->middleware('guest')
    ->name('login.iniciarSesion');  

Route::post('/login', [SessionsController::class, 'store'])
    ->name('login.store');


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


Route::get('/admin', [AnuncioController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');

Route::get('/admin/create', [AnuncioController::class, 'create'])
    ->middleware('auth.admin')
    ->name('admin.create');

Route::post('/admin/store', [AnuncioController::class, 'store'])
    ->middleware('auth.admin')
    ->name('admin.store');

Route::get('/admin/vista', [AnuncioController::class, 'vista'])
    ->middleware('auth.admin')
    ->name('admin.vista');
