@foreach($equipamentosPorSetor as $setor => $equipamentos)

@extends('layouts.layout_print')

@section('content')
@include('cautela.preambulo')
@include('cautela.tabela-cabecalho')

@each('cautela.cautelas-css-puro', $equipamentos, 'equipamento')

@include('cautela.tabela-rodape-data')
@include('cautela.assinatura-setor')
@include('cautela.assinatura-ch-stel')


@if($setor == 'CAP-A')
@endsection
@endif

@endforeach


