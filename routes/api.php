<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CampanhaController;
use App\Http\Controllers\DescontoController;
use App\Http\Controllers\GrupoCidadeController;
use App\Http\Controllers\CidadeController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Produtos rotas ----|
Route::get('/listar/produtos', [ProdutoController::class, 'listar']);
Route::get('/listar/produtos/{id}', [ProdutoController::class, 'listarProduto']);
Route::post('/cadastrar/produtos', [ProdutoController::class, 'cadastrar']);
Route::put('/editar/produtos/{id}', [ProdutoController::class, 'editar']);
Route::delete('/excluir/produtos/{id}', [ProdutoController::class, 'excluir']);
// ----|

//Campanhas rotas ----|
Route::get('/listar/campanhas', [CampanhaController::class, 'listar']);
Route::get('/listar/campanhas/{id}', [CampanhaController::class, 'listarCampanha']);
Route::post('/cadastrar/campanhas', [CampanhaController::class, 'cadastrar']);
Route::put('/editar/campanhas/{id}', [CampanhaController::class, 'editar']);
Route::delete('/excluir/campanhas/{id}', [CampanhaController::class, 'excluir']);
// ----|

//Descontos rotas ----|
Route::get('/listar/descontos', [DescontoController::class, 'listar']);
Route::get('/listar/descontos/{id}', [DescontoController::class, 'listarDesconto']);
Route::post('/cadastrar/descontos', [DescontoController::class, 'cadastrar']);
Route::put('/editar/descontos/{id}', [DescontoController::class, 'editar']);
Route::delete('/excluir/descontos/{id}', [DescontoController::class, 'excluir']);
// ----|

//Grupo cidades rotas ----|
Route::get('/listar/grupo-cidades', [GrupoCidadeController::class, 'listar']);
Route::get('/listar/grupo-cidades/{id}', [GrupoCidadeController::class, 'listarGrupoCidade']);
Route::post('/cadastrar/grupo-cidades', [GrupoCidadeController::class, 'cadastrar']);
Route::put('/editar/grupo-cidades/{id}', [GrupoCidadeController::class, 'editar']);
Route::delete('/excluir/grupo-cidades/{id}', [GrupoCidadeController::class, 'excluir']);
// ----|

//Cidades rotas ----|
Route::get('/listar/cidades', [CidadeController::class, 'listar']);
Route::get('/listar/cidades/{id}', [CidadeController::class, 'listarCidade']);
Route::post('/cadastrar/cidades', [CidadeController::class, 'cadastrar']);
Route::put('/editar/cidades/{id}', [CidadeController::class, 'editar']);
Route::delete('/excluir/cidades/{id}', [CidadeController::class, 'excluir']);
// ----|

