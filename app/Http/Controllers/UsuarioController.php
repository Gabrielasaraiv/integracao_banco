<?php

namespace App\Http\Controllers;

use App\Service\UsuarioService;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    // orientação ao objeto (td oq reflete do mundo real para o virtual)
    protected $usuarioService;

    public function __construct(UsuarioService $novoUsuarioService)
    { // construir o que a classe precisa (pré requisitos) para executar o store
        $this->usuarioService = $novoUsuarioService;  // o valor da classe (class) vai receber o valor da variável

    }
//-------------------------------------------------------------------------------------------
    public function store(Request $request)
    {

        $user = $this->usuarioService->create($request->all());

        return $user;
    }
//-------------------------------------------------------------------------------------------
    public function findbyid($id)
    {
        $result = $this->usuarioService->findbyid($id);

        return $result;
    }
//-------------------------------------------------------------------------------------------
    public function index()
    {
        $result = $this->usuarioService->getAll();
        return response()->json($result);
    }
//-------------------------------------------------------------------------------------------
    public function searchByName(Request $request)
    {
        $result = $this->usuarioService->searchByName($request->nome);
        return response()->json($result);
    }
//-------------------------------------------------------------------------------------------
    public function searchByEmail(Request $request)
    {
        $result = $this->usuarioService->searchByEmail($request->email);
        return response()->json($result);
    }
//-------------------------------------------------------------------------------------------
    public function delete($id)
    {
        $result = $this->usuarioService->delete($id);
        return response()->json($result);
    }
//-------------------------------------------------------------------------------------------
    public function update(Request $request)
    {
        $result = $this->usuarioService->update($request->all());
        return response()->json($result);
    }
}
