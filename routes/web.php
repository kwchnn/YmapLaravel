<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\RegisterController;

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

Route::middleware('auth')->group(function() {
    Route::get('/map_index', ([IndexController::class, 'index']))->name('index');
    Route::patch('/map_update/{id}', ([MapController::class, 'update']))->name('update');
    Route::get('/map_point_edit/{id}', ([MapController::class, 'edit']))->name('edit');
    Route::get('/logout', ([AuthController::class, 'logout']))->name('logout');
    Route::get('/map_destroy/{id}', ([MapController::class, 'destroy']))->name('destroy');
    Route::post('/map_create', ([MapController::class, 'create']))->name('create');
});

Route::get('/', ([FormController::class, 'loginFormAction']))->name('login');
Route::post('/', ([FormController::class, 'loginFormAction']));

Route::get('/register', ([FormController::class, 'registerFormAction']))->name('register');
Route::post('/register', ([FormController::class, 'registerFormAction']));

Route::post('/register_method', ([RegisterController::class, 'register']))->name('register_method');
Route::post('/auth', ([AuthController::class, 'auth']))->name('auth');










