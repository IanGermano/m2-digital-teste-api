<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campanha;
use App\Http\Requests\CampanhaRequest;

class CampanhaController extends Controller
{
    public function listar()
    {
        return Campanha::all();
    }

    public function listarCampanha($id)
    {
        $campanha = Campanha::find($id);
        if($campanha){
            return $campanha;
        }else{
            return response()->json(['status' => '404', 'success' => 'false'], 404);
        }
    }

    public function cadastrar(CampanhaRequest $request)
    {
        Campanha::create($request->all());
        return response()->json(['status' => '201', 'success' => 'true'], 201);
    }

    public function editar(CampanhaRequest $request, $id)
    {
        $campanha = Campanha::find($id);
        $campanha->update($request->all());
        return response()->json(['status' => '200', 'success' => 'true'], 200);
    }

    public function excluir($id)
    {
        $campanha = Campanha::destroy($id);
        if($campanha){
            return response()->json(['status' => '200', 'success' => 'true'], 200);
        }else{
            return response()->json(['status' => '404', 'success' => 'false'], 404);
        }
    }
}
