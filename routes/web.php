<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', HomeController::class, 'home')->name('home');

Route::controller(UserController::class)->group(function () {
    Route::get('usuarios', 'index')->name('users.index');
    Route::get('usuarios/create', 'create')->name('users.create');
    Route::post('usuarios', 'store')->name('users.store');
    Route::get('usuarios/{user}/edit', 'edit')->name('users.edit');
    Route::put('usuarios/{user}', 'update')->name('users.update');
    Route::delete('usuarios/{user}', 'destroy')->name('users.destroy');
});
