<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Equipamento;
use App\Setor;

class HomeController extends Controller
{
    public function index()
    {
    	$equipamentos = Equipamento::orderBy('id')->paginate(30);
        // dd($equipamentos);
        $setores = Setor::orderBy('sigla')->get();
    	$paginacao = true;


        return view('site.home', compact('equipamentos', 'sigla', 'paginacao', 'setores'));
    }

    public function busca(Request $request)
    {
    	$busca = $request->all();
        $paginacao = false;

        if ($busca['tipo'] == 'todos') {
            $reqStatus = [
            ['tipo', '<>' , null]
            ];
        }
        else {
            $reqStatus = [
            ['tipo', '=' , $busca['tipo']]
            ];
        }

        if ($busca['setor'] == 'todos') {
            $reqSetor = [
            ['setor_id', '<>' , null]
            ];
        }
        else {
            $reqSetor = [
            ['setor_id', '=' , $busca['setor']]
            ];
        }

        $equipamentos = Equipamento::where($reqStatus)->where($reqSetor)->get();
        $setores = Setor::orderBy('sigla')->get();

        $totalMaquinas = Equipamento::where($reqStatus)->where($reqSetor)->count();
        $licenciados = Equipamento::where($reqStatus)->where($reqSetor)->where('licenciado', '=', 'Sim')->count();

        return view ('site.busca', compact('busca', 'equipamentos', 'paginacao', 'setores'));
    }
}
