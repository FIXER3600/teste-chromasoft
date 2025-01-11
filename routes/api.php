<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::post('/usuarios',[UsuarioController::class,'store']);
Route::put('/usuarios/{id}',[UsuarioController::class,'update']);
Route::delete('/usuarios/{id}',[UsuarioController::class,'destroy']);
Route::get('/usuarios',[UsuarioController::class,'index']);
Route::get('/usuarios/{id}', [UsuarioController::class, 'show']);


?>
