
<div class="container">

	<table>
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
				<td>{{ $equipamento->lacre_num }}</td>

			</tr>
			@endforeach
		</tbody>
	</table>

</div>
