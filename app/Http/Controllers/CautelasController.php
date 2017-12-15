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
		$equipamentos = Equipamento::all()->pluck('setor_id')->unique();
		
		$setoresComEquipamentos = $equipamentos->map(function($item){
			return Setor::find($item);
		});

		$setoresComEquipamentos = $setoresComEquipamentos->sortBy('sigla');

		return view('site.cautela', compact('setoresComEquipamentos'));
		
	}

	public function gerar(Request $request)
	{
		$inputSetores = $request->input('setor');
		if (empty($inputSetores)) {
			\Session::flash('mensagem', ['msg' => 'Selecione ao menos um setor', 'class' => 'red white-text']);
		}

		else {
			foreach ($inputSetores as $idSetor)
			{
				$setor = Setor::find($idSetor);
				$equipamentosPorSetor[$setor->sigla] = $setor->equipamento;		
			}

			// dd($equipamentosPorSetor);
		}
		
		return view('cautela.one-page', compact('equipamentosPorSetor'));
		// return redirect()->route('cautela.index');
	}

}
