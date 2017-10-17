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
	<h5>Equipamentos</h5>
	<div class="divider"></div>
	

	<table class="bordered striped">
		<thead>
			<tr>
				<th>Tipo</th>
				<th>Marca</th>
				<th>Modelo</th>
				<th>Serial</th>
				<th>Local</th>
				<th>Usuário</th>
				<th>Nome de Rede</th>
				<th>Lacre Nº</th>
			</tr>
		</thead>

		<tbody>
			@foreach($equipamentos as $equipamento)
			<tr>
				<td>{{ $equipamento->tipo }}</td>
				<td>{{ $equipamento->marca }}</td>
				<td>{{ $equipamento->modelo }}</td>
				<td>{{ $equipamento->serial }}</td>
				<td>{{ $equipamento->local }}</td>
				<td>{{ $equipamento->usuario }}</td>
				<td>{{ $equipamento->nome_de_rede }}</td>
				<td>{{ $equipamento->lacre_numero }}</td>


				<td><a href=" {{ route('equipamento.editar', $equipamento->id)}}"><i class="material-icons">edit</i></a></td>
				<td><a href="javascript: if(confirm('Confirma apagar registro ?')) {window.location.href = '{{ route('equipamento.deletar', $equipamento->id)}}'} "><i class="material-icons">delete</i></a></td>
			</tr>

			@endforeach
		</tbody>
	</table>

	<div align="center" class="row">
		{{-- {{ $equipamentos->links() }} --}}
	</div>


</div>


