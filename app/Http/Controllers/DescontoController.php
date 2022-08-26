<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Desconto;
use App\Http\Requests\DescontoRequest;

class DescontoController extends Controller
{
    public function listar()
    {
        return Desconto::with('campanha', 'produto')->get();
    }

    public function listarDesconto($id)
    {
        $desconto = Desconto::with('campanha', 'produto')->get()->find($id);
        if($desconto){
            return $desconto;
        }else{
            return response()->json(['status' => '404', 'success' => 'false'], 404);
        }
    }

    public function cadastrar(DescontoRequest $request)
    {
        Desconto::create($request->all());
        return response()->json(['status' => '201', 'success' => 'true'], 201);
    }

    public function editar(DescontoRequest $request, $id)
    {
        $desconto = Desconto::find($id);
        $desconto->update($request->all());
        return response()->json(['status' => '200', 'success' => 'true'], 200);
    }

    public function excluir($id)
    {
        $desconto = Desconto::destroy($id);
        if($desconto){
            return response()->json(['status' => '200', 'success' => 'true'], 200);
        }else{
            return response()->json(['status' => '404', 'success' => 'false'], 404);
        }
    }
}
