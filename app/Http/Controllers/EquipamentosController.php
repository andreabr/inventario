<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Equipamento;

class EquipamentosController extends Controller

{


    public function index()
    {
    	$equipamentos = Equipamento::all();

    }

    public function adicionar()
    {
    	return view('equipamento.adicionar');
    }

    public function salvar(Request $request)
    {

        $dados = $request->all();
        $equipamento = new Equipamento;

        if($dados['marca'] == '' || $dados['modelo'] == '' || $dados['local'] == ''){
            \Session::flash('mensagem', ['msg' => 'Existem campos que precisam ser preechidos!', 'class' => 'red white-text']);
        }

        $equipamento['tipo'] = $dados['tipo'];
        $equipamento['marca'] = $dados['marca'];
        $equipamento['modelo'] = $dados['modelo'];
        $equipamento['serial'] = $dados['serial'];
        $equipamento['local'] = $dados['local'];
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

        return view('equipamento.editar', compact('equipamento'));

    }

    public function atualizar(Request $request, $id)
    {
        $equipamento = Equipamento::find($id);
        $dados = $request->all();
        if($dados['marca'] == '' || $dados['modelo'] == '' || $dados['local'] == ''){
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
}
