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
			<tr>
				<td>
					<input type="checkbox" class="checkbox filled-in" id="select_all" />
					<label for="select_all"></label>
				</td>
				<td>Selecione Todos</td>
				<td></td>
			</tr>
			@foreach($setoresComEquipamentos as $setor)
			<tr>
				<td>
					<input type="checkbox" class="checkbox filled-in" id="setor-{{$setor->id}}" name="setor[]" value="{{$setor->id}}" />
					<label for="setor-{{$setor->id}}"></label>
				</td>
				<td>{{ $setor->sigla }}</td>
				<td>{{ $setor->extenso }}</td>
			</tr>
			
			@endforeach
		</tbody>
	</table>
	<br>
	
</form>