<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Setor;
use App\Equipamento;

class CautelasController extends Controller
{
	public function index()
	{
		$setores = Setor::orderBy('sigla')->get();

		return view('site.cautela', compact('setores'));
	}

	public function gerar(Request $request)
	{
		$inputSetores = $request->input('setor');

		// dd($inputSetores);

		foreach ($inputSetores as $idSetor)
		{
			$setor = Setor::find($idSetor);
			$equipamentoPorSetor[] = $setor->equipamento;			
		}

		dd($equipamentoPorSetor);
	}
}
