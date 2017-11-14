<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Equipamento;
use App\Setor;

class EquipamentosController extends Controller

{


    public function index()
    {
    	$equipamentos = Equipamento::all();

    }

    public function adicionar()
    {
        $setores = Setor::orderBy('sigla')->get();
        return view('equipamento.adicionar', compact('setores'));
    }

    public function salvar(Request $request)
    {

        $dados = $request->all();
        $equipamento = new Equipamento;

        if($dados['marca'] == '' || $dados['modelo'] == ''){
            \Session::flash('mensagem', ['msg' => 'Existem campos que precisam ser preechidos!', 'class' => 'red white-text']);
        }

        $equipamento['tipo'] = $dados['tipo'];
        $equipamento['marca'] = $dados['marca'];
        $equipamento['modelo'] = $dados['modelo'];
        $equipamento['serial'] = $dados['serial'];
        $equipamento['setor_id'] = $dados['setor_id'];
        $equipamento['usuario'] = $dados['usuario'];
        $equipamento['nome_de_rede'] = $dados['nome_de_rede'];
        $equipamento['licenciado'] = $dados['licenciado'];
        $equipamento['lacre_numero'] = $dados['lacre_numero'];

        \Session::flash('mensagem', ['msg' => 'Registro criado com sucesso!', 'class' => 'green white-text']);

        $equipamento->save();

        return redirect()->route('equipamento.adicionar');


    }

    public function editar($id)
    {
        $equipamento = Equipamento::find($id);
        $setores = Setor::all();

        return view('equipamento.editar', compact('equipamento', 'setores'));

    }

    public function atualizar(Request $request, $id)
    {
        $equipamento = Equipamento::find($id);
        $dados = $request->all();
        if($dados['marca'] == '' || $dados['modelo'] == ''){
            \Session::flash('mensagem', ['msg' => 'Existem campos que precisam ser preechidos!', 'class' => 'red white-text']);
        }
        $equipamento->update($dados);

        \Session::flash('mensagem', ['msg' => 'Registro atualizado com sucesso!', 'class' => 'green white-text']);

        return redirect()->route('site.home');

    }



    public function deletar($id)
    {
        // $equipamento = Equipamento::find($id);

        // $equipamento->delete();

        Equipamento::find($id)->delete();

        \Session::flash('mensagem', ['msg' => 'Registro deletado com sucesso!', 'class' => 'green white-text']);

        return redirect()->route('site.home');


    }

    public function busca(Request $request)
    {
        $busca = $request->all();
        $imoveis = Equipamento::all();

        return view('site.busca', 'busca', 'imoveis');
    }
}
