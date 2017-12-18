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

		return view('cautela.page')->with(compact('equipamentosPorSetor'));
		// return redirect()->route('cautela.index');
	}

}

	// $equipamentosAll = array(
  //               'SDA-TM' => array(
  //                               '0' =>
  //                               array(
  //                                   'tipo' => 'Desktop',
  //                                   'marca' => 'Dell',
  //                                   'modelo' => 'Optiplex 380',
  //                                   'serial' => '123DMEL3R3455'
  //                                   ),
  //                                '1' =>
  //                                 array(
  //                                   'tipo' => 'Monitor',
  //                                   'marca' => 'Philips',
  //                                   'modelo' => 'P2317K',
  //                                   'serial' => '3R3455'
  //                                   )
  //                               ),

  //                'DA' => array(
  //                               '0' =>
  //                               array(
  //                                   'tipo' => 'Servidor',
  //                                   'marca' => 'Dell',
  //                                   'modelo' => 'Optiplex 380',
  //                                   'serial' => '123DMEL3R3455'
  //                                   ),
  //                                '1' =>
  //                                 array(
  //                                   'tipo' => 'Estabilizador',
  //                                   'marca' => 'Dell',
  //                                   'modelo' => 'Optiplex 380',
  //                                   'serial' => '123DMEL3R3455'
  //                                   )
  //                              )
  //                       );

