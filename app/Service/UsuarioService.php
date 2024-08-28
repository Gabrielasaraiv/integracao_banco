<?php

namespace App\Service;

use App\Models\Usuario;

class UsuarioService // classe que armazena as funções 
{
    public function create (array $dados ){ // cadastrar algo novo
        $user = Usuario::create([
            'nome' => $dados['nome'],
            'email' => $dados['email'],
            'password'=> $dados['password']
        ]); // comunicação com o banco

        return $user;

    }

    public function update(){

    }

    public function delete(){

    }

    public function findById(){ // pesquisa por ID

    }

    public function getAll(){ // buscar todos, listar toda a tabela

    }

    public function searchByName(){ // pesquisa por nome

    }
}