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
		<h5 align="center">Cautela</h5>

		{{-- <div class="deep-range darken-1">
			<a class="waves-effect waves-light btn" href="{{ route('cautela.gerar') }}">Gerar</a>
		</div> --}}
		{{-- <br> --}}
		<form action="{{ route('cautela.gerar') }}" method="POST">
			{{csrf_field()}}
			<div class="col s4">
				<button class="waves-effect waves-light btn">Gerar</button>
			</div>
			<div class="col s12">
				<p>Escolha os setores para gerar a cautela</p>
				
			</div>
			
			<div class="col s12 divider"></div>
			<table class="bordered striped">
				<thead>
					<tr>
						<th></th>
						<th>Sigla</th>
						<th>Descrição</th>
					</tr>
				</thead>

				<tbody>
					@foreach($setores as $setor)
					<tr>
						<td>
						<input type="checkbox" class="filled-in" id="setor-{{$setor->id}}" name="setor[]" value="{{$setor->id}}" />
							<label for="setor-{{$setor->id}}"></label>
						</td>
						<td>{{ $setor->sigla }}</td>
						<td>{{ $setor->extenso }}</td>

						<td><a href=" {{ route('setor.editar', $setor->id)}}"><i class="material-icons">edit</i></a></td>
						<td><a href="javascript: if(confirm('Confirma apagar registro ?')) {window.location.href = '{{ route('setor.deletar', $setor->id)}}'} "><i class="material-icons">delete</i></a></td>
					</tr>

					@endforeach
				</tbody>
			</table>
			<br>
			
		</form>

	</div>
</div>
@endsection




