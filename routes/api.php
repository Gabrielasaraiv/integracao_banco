<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// post: cadastrar algo novo
Route::post('/usuario', [UsuarioController::class, 'store']); // chamar a função store, mas precisa de um construtor (UsuarioController)
//-------------------------------------------------------------------------------------------
Route::get('usuario/{id}/find', [UsuarioController::class, 'findbyid']);
//-------------------------------------------------------------------------------------------
Route::get('usuario', [UsuarioController::class, 'index']);
//-------------------------------------------------------------------------------------------
Route::get('usuario/search', [UsuarioController::class, 'searchByName']);
//-------------------------------------------------------------------------------------------
Route::get('usuario/search/email', [UsuarioController::class, 'searchByEmail']);
//-------------------------------------------------------------------------------------------
Route::delete('usuario/{id}/delete', [UsuarioController::class, 'delete']);
//-------------------------------------------------------------------------------------------
Route::put('usuario', [UsuarioController::class, 'update']);
