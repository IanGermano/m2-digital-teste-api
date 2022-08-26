<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cidade;
use App\Http\Requests\CidadeRequest;

class CidadeController extends Controller
{
    public function listar()
    {
        return Cidade::with('grupoCidade', 'campanha')->get();
    }

    public function listarCidade($id)
    {
        $cidade = Cidade::with('grupoCidade', 'campanha')->get()->find($id);
        if($cidade){
            return $cidade;
        }else{
            return response()->json(['status' => '404', 'success' => 'false'], 404);
        }
    }

    public function cadastrar(CidadeRequest $request)
    {
        Cidade::create($request->all());
        return response()->json(['status' => '201', 'success' => 'true'], 201);
    }

    public function editar(CidadeRequest $request, $id)
    {
        $cidade = Cidade::find($id);
        $cidade->update($request->all());
        return response()->json(['status' => '200', 'success' => 'true'], 200);
    }

    public function excluir($id)
    {
        $cidade = Cidade::destroy($id);
        if($cidade){
            return response()->json(['status' => '200', 'success' => 'true'], 200);
        }else{
            return response()->json(['status' => '404', 'success' => 'false'], 404);
        }
    }
}
