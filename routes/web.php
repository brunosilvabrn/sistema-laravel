<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ClienteController;

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

Route::get('/', [UserController::class, 'login'])->name('login.page');
Route::post('/auth', [UserController::class, 'auth'])->name('auth.user');

Route::middleware('auth')->group(function () {

    Route::get('/menu', MenuController::class)->name('menu');
    
    Route::get('/lista', [ClienteController::class, 'index'])->name('clientes.index');

    Route::get('/view/{param}',[ClienteController::class, "show"])->name('clientes.show');

    Route::get('/editar/{id}',[ClienteController::class, "edit"])->name('clientes.edit');
    Route::put('/editar/{id}',[ClienteController::class, "update"])->name('clientes.update');

    Route::get('/cadastrar', [ClienteController::class, 'create'])->name('clientes.create');

    Route::post('/cadastrar', [ClienteController::class, 'store'])->name('clientes.store');

    Route::get('/delete/{id}',[ClienteController::class, "delete"])->name('clientes.delete');

    Route::post('/cliente/delete/{id}',[ClienteController::class, "destroy"])->name('clientes.destroy');

    Route::get('/logout', [UserController::class, 'logout'])->name('logout');

});

