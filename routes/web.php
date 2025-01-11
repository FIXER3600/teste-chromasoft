<?php
use App\Http\Controllers\UsuarioController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/usuarios/create', [UsuarioController::class, 'create'])->name('usuarios.create');

Route::post('/usuarios',[UsuarioController::class,'store'])->name('usuarios.store');

Route::get('/usuarios/{id}/edit', [UsuarioController::class, 'edit'])->name('usuarios.edit');

Route::put('/usuarios/{id}', [UsuarioController::class, 'update'])->name('usuarios.update');

Route::delete('/usuarios/{id}',[UsuarioController::class,'destroy']);

Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios',[UsuarioController::class,'index'])->name('usuarios.index');
Route::get('/usuarios/{id}', [UsuarioController::class, 'show']);
