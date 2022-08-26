<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GrupoCidade;
use App\Http\Requests\GrupoCidadeRequest;

class GrupoCidadeController extends Controller
{
    public function listar()
    {
        return GrupoCidade::with('campanha')->get();
    }

    public function listarGrupoCidade($id)
    {
        $grupoCidade = GrupoCidade::with('campanha')->get()->find($id);
        if($grupoCidade){
            return $grupoCidade;
        }else{
            return response()->json(['status' => '404', 'success' => 'false'], 404);
        }
    }

    public function cadastrar(GrupoCidadeRequest $request)
    {
        GrupoCidade::create($request->all());
        return response()->json(['status' => '201', 'success' => 'true'], 201);
    }

    public function editar(GrupoCidadeRequest $request, $id)
    {
        $grupoCidade = GrupoCidade::find($id);
        $grupoCidade->update($request->all());
        return response()->json(['status' => '200', 'success' => 'true'], 200);
    }

    public function excluir($id)
    {
        $grupoCidade = GrupoCidade::destroy($id);
        if($grupoCidade){
            return response()->json(['status' => '200', 'success' => 'true'], 200);
        }else{
            return response()->json(['status' => '404', 'success' => 'false'], 404);
        }
    }
}
