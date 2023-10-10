<?php

use App\Http\Controllers\DepartamentoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuarioController;
use App\Models\Departamento;

Route::get('/', function () {
    return view('welcome');
});




Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
//y creamos un grupo de rutas protegidas para los controladores
Route::group(['middleware' => ['auth']], function () {

    Route::resource('usuarios', UsuarioController::class);


});

Route::get('/departamento',[App\Http\Controllers\DepartamentoController::class, 'index'])->name('departamento');
Route::group(['middleware' => ['auth']], function () {
    Route::resource('departamentos', DepartamentoController::class);
});


