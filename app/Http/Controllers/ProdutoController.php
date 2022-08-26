<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Http\Requests\ProdutoRequest;

class ProdutoController extends Controller
{
    public function listar()
    {
        return Produto::all();
    }

    public function listarProduto($id)
    {
        $produto = Produto::find($id);
        if($produto){
            return $produto;
        }else{
            return response()->json(['status' => '404', 'success' => 'false'], 404);
        }
    }

    public function cadastrar(ProdutoRequest $request)
    {
        Produto::create($request->all());
        return response()->json(['status' => '201', 'success' => 'true'], 201);
    }

    public function editar(ProdutoRequest $request, $id)
    {
        $produto = Produto::find($id);
        $produto->update($request->all());
        return response()->json(['status' => '200', 'success' => 'true'], 200);
    }

    public function excluir($id)
    {
        $produto = Produto::destroy($id);
        if($produto){
            return response()->json(['status' => '200', 'success' => 'true'], 200);
        }else{
            return response()->json(['status' => '404', 'success' => 'false'], 404);
        }
    }
}
