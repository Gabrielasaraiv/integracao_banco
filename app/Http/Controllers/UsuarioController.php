<?php

namespace App\Http\Controllers;

use App\Service\UsuarioService;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    // orientação ao objeto (td oq reflete do mundo real para o virtual)
    protected $usuarioService;

        public function __construct(UsuarioService $novoUsuarioService){ // construir o que a classe precisa (pré requisitos) para executar o store
            $this->usuarioService = $novoUsuarioService ;  // o valor da classe (class) vai receber o valor da variável

        } 

        public function store(Request $request){
            
            $user = $this->usuarioService->create($request->all()); 

            return $user;
        }
}
