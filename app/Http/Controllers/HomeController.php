<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Equipamento;

class HomeController extends Controller
{
    public function index()
    {
    	$equipamentos = Equipamento::orderBy('id')->paginate(30);
    	// $equipamentos = Equipamento::all();
        $paginacao = true;
        $totalMaquinas = Equipamento::where('tipo', '=', 'Desktop')->orwhere('tipo', '=', 'Notebook')->count();
        $licenciados = $equipamentos->where('licenciado', '=', 'Sim')->count();

        return view('site.home', compact('equipamentos', 'paginacao', 'licenciados', 'totalMaquinas'));


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


        if ($busca['local'] == 'todos') {
            $reqLocal = [
            ['local', '<>' , null]
            ];
        }
        else {
            $reqLocal = [
            ['local', '=' , $busca['local']]
            ];
        }

        $equipamentos = Equipamento::where($reqStatus)->where($reqLocal)->get();
        $totalMaquinas = Equipamento::where($reqStatus)->where($reqLocal)->count();
        $licenciados = Equipamento::where($reqStatus)->where($reqLocal)->where('licenciado', '=', 'Sim')->count();
    

        return view ('site.busca', compact('busca', 'equipamentos', 'paginacao', 'licenciados', 'totalMaquinas'));
    }
}
