<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Equipamento;

class SiteController extends Controller
{
    public function index()
    {
    	// $equipamentos = Equipamento::orderBy('id')->paginate(1);
    	$equipamentos = Equipamento::all();

    	return view('site.home', compact('equipamentos'));
    }


    public function busca(Request $request)
    {
    	
    }
}
