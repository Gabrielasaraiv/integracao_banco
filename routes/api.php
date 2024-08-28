<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// post: cadastrar algo novo
Route::post('/usuario', [UsuarioController::class, 'store']); // chamar a função store, mas precisa de um construtor (UsuarioController)
