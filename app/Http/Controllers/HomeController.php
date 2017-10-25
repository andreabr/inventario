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
        return view('site.home', compact('equipamentos', 'paginacao'));
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

        return view ('site.busca', compact('busca', 'equipamentos', 'paginacao'));
    }
}
