<?php

namespace App\Service;

use App\Models\Usuario;

class UsuarioService // classe que armazena as funções 
{
    public function create(array $dados)
    { // cadastrar algo novo
        $user = Usuario::create([
            'nome' => $dados['nome'],
            'email' => $dados['email'],
            'password' => $dados['password']
        ]); // comunicação com o banco

        return $user;
    }
    //-------------------------------------------------------------------------------------------
    public function findById($id)
    { // pesquisa por ID
        $usuario = Usuario::find($id); // mesma coisa que o select * from
        if ($usuario == null) {
            return [
                'status' => false,
                'message' => 'Usuário não encontrado'
            ];
        }
        return [
            'status' => true,
            'message' => 'Usuario encontrado',
            'data' => $usuario
        ];
    }
    //-------------------------------------------------------------------------------------------
    public function getAll()
    { // buscar todos, listar toda a tabela
        $usuario = Usuario::all();
        return [
            'status' => true,
            'message' => 'Pesquisa efetuada com sucesso',
            'data' => $usuario
        ];
    }
    //-------------------------------------------------------------------------------------------
    public function searchByName($nome)
    { // pesquisa por nome
        $usuario = Usuario::where('nome', 'like', '%' . $nome . '%')->get();
        if ($usuario->isEmpty()) {
            return [
                'status' => false,
                'message' => 'Sem resultados'
            ];
        }
        return [
            'status' => true,
            'message' => 'Resultados encontrados',
            'data' => $usuario
        ];
    }
    //-------------------------------------------------------------------------------------------
    public function searchByEmail($email)
    {
        $usuario = Usuario::where('email', 'like', '%' . $email . '%')->get();
        if ($usuario->isEmpty()) {
            return [
                'status' => false,
                'message' => 'Sem resultados',
            ];
        }
        return [
            'status' => true,
            'message' => 'Resultados encontrados',
            'data' => $usuario
        ];
    }
    //-------------------------------------------------------------------------------------------
    public function delete($id)
    {
        $usuario = Usuario::find($id);
        if ($usuario == null) {
            return [
                'status' => false,
                'message' => 'Usuário não encontrado'
            ];
        }
        $usuario->delete();
        return [
            'status' => true,
            'message' => 'Usuario excluido com sucesso'
        ];
    }
    //-------------------------------------------------------------------------------------------
    public function update(array $dados)
    {
        $usuario = Usuario::find($dados['id']);
        if ($usuario == null) {
            return [
                'status' => false,
                'message' => 'Usuário não encontrado'
            ];
        }
        if (isset($dados['password'])) {
            $usuario->password = $dados['password'];
        }

        if (isset($dados['nome'])) {
            $usuario->nome = $dados['nome'];
        }
        
        if (isset($dados['email'])) {
            $usuario->email = $dados['email'];
        }

        $usuario->save();
        return [
            'status' => true,
            'message' => 'Atualizado com sucesso'
        ];
    }
}
