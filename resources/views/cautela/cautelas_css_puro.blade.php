@extends('layouts.layout_print')

@section('content')

@include('cautela.preambulo')
@include('cautela.tabela-cabecalho')

	{{-- @for ($i = 1; $i <= 28; $i++) --}}

	{{-- @foreach ($equipamentoPorSetor as $equipamento) --}}


{{-- {{$colecao = $equipamento->get('tipo')}}
{{$colecao}} --}}


{{print_r($equipamentos)}}
{{-- @foreach ($equipamentos as $equipamento)
	<tr>
		<td align="center">1</td>
		<td>{{$equipamentos['tipo']}}</td>
		<td>{{$equipamentos['marca']}}</td>
		<td>{{$equipamentos['modelo']}}</td>
		<td>{{$equipamentos['serial']}}</td>
		
	</tr>


	@endforeach --}}
	

@include('cautela.tabela-rodape-data')
@include('cautela.assinatura-setor')
@include('cautela.assinatura-ch-stel')



@endsection