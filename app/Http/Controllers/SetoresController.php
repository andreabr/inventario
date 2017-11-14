<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Setor;

class SetoresController extends Controller
{
    public function index()
    {
    	$setores = Setor::orderBy('sigla')->get();
    	return view('setor.index', compact('setores'));
    }

    public function adicionar()
    {
        $setores = Setor::all();
        return view('setor.adicionar', compact('setores'));
    }


    public function salvar(Request $request)
    {
        $dados = $request->all();
        $setor = new Setor();

        $setor['sigla'] = $dados['sigla'];
        $setor['extenso'] = $dados['extenso'];

        \Session::flash('mensagem', ['msg' => 'Registro criado com sucesso!', 'class' => 'green white-text']);

        $setor->save();

        return redirect()->route('setor.adicionar');

    }

    public function editar($id)
    {
        $setor = Setor::find($id);

        return view('setor.editar', compact('setor'));
    }

    public function atualizar(Request $request, $id)
    {
        $dados = $request->all();
        $setor = Setor::find($id);

        if ($dados['sigla'] == '' || $dados['extenso'] == '') {

            \Session::flash('mensagem', ['msg' => 'Não pode haver campos vazios', 'class' => 'red white-text']);
        }
        else {

            $setor['sigla'] = $dados['sigla'];
            $setor['extenso'] = $dados['extenso'];

            $setor->update();

            \Session::flash('mensagem', ['msg' => 'Setor atualizado com sucesso!', 'class' => 'blue white-text']);
        }

        return redirect()->route('setor.home');

    }

    public function deletar($id)
    {
        $setor = Setor::find($id);

        $setor->delete();

        \Session::flash('mensagem', ['msg' => 'Setor deletado com sucesso!','class' => 'green white-text']);

        return redirect()->route('setor.home');
    }




}
