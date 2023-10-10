<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UsuarioController;


Route::get('/', function () {
    return view('welcome');
});




Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
//y creamos un grupo de rutas protegidas para los controladores
Route::get('/roles',[App\Http\Controllers\RoleController::class, 'index'])->name('role');
//Route::get('/roles/create', [App\Http\Controllers\RoleController::class, 'create'])->name('role');
Route::get('/departamento',[App\Http\Controllers\DepartamentoController::class, 'index'])->name('departamento');
Route::group(['middleware' => ['auth']], function () {

    Route::resource('usuarios', UsuarioController::class);
<<<<<<< Updated upstream



});
=======
    Route::resource('departamentos', DepartamentoController::class);
    Route::resource('roles', RoleController::class);

});




>>>>>>> Stashed changes
