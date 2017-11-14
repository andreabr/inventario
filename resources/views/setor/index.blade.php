@extends('layouts.site')

@section('content')
<div class="container">
	<div class="row">
		@if(Session::has('mensagem'))
		<div class="row" id="msg">
			<div class="card {{ Session::get('mensagem')['class'] }}">
				<div align="center" class="card-content">
					{{ Session::get('mensagem')['msg']}}
				</div>
			</div>
		</div>
		@endif
		<h5 align="center">Setores</h5>
		<div class="deep-range darken-1">
			<a class="waves-effect waves-light btn" href="{{ route('setor.adicionar') }}">Adicionar</a>
		</div>
		<br>
		<div class="divider"></div>

		<table class="bordered striped">
			<thead>
				<tr>
					<th>Sigla</th>
					<th>Descrição</th>
				</tr>
			</thead>

			<tbody>
				@foreach($setores as $setor)
				<tr>
					<td>{{ $setor->sigla }}</td>
					<td>{{ $setor->extenso }}</td>

					<td><a href=" {{ route('setor.editar', $setor->id)}}"><i class="material-icons">edit</i></a></td>
					<td><a href="javascript: if(confirm('Confirma apagar registro ?')) {window.location.href = '{{ route('setor.deletar', $setor->id)}}'} "><i class="material-icons">delete</i></a></td>
				</tr>

				@endforeach
			</tbody>
		</table>

	</div>
</div>
@endsection




