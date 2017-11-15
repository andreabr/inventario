<div class="row">
	<form action="{{route('site.busca')}}" >
		<div class="input-field col s5">
			<select name="tipo" id="">
				<option {{isset($busca['tipo']) && $busca['tipo'] == 'todos' ? 'selected' : '' }} value="todos">Todos</option>
				<option {{isset($busca['tipo']) && $busca['tipo'] == 'Desktop' ? 'selected' : '' }} value="Desktop">Desktop</option>
				<option {{isset($busca['tipo']) && $busca['tipo'] == 'notebook' ? 'selected' : '' }} value="Notebook">Notebook</option>
				<option {{isset($busca['tipo']) && $busca['tipo'] == 'servidor-rede' ? 'selected' : '' }} value="Servidor de Rede">Servidor de Rede</option>
				<option {{isset($busca['tipo']) && $busca['tipo'] == 'monitor' ? 'selected' : '' }} value="Monitor">Monitor</option>
				<option {{isset($busca['tipo']) && $busca['tipo'] == 'impressora' ? 'selected' : '' }} value="Impressora">Impressora</option>
				<option {{isset($busca['tipo']) && $busca['tipo'] == 'scanner' ? 'selected' : '' }} value="Scanner">Scanner</option>
				<option {{isset($busca['tipo']) && $busca['tipo'] == 'estabilizador' ? 'selected' : '' }} value="Estabilizador">Estabilizador</option>
				<option {{isset($busca['tipo']) && $busca['tipo'] == 'nobreak' ? 'selected' : '' }} value="Nobreak">Nobreak</option>
				<option {{isset($busca['tipo']) && $busca['tipo'] == 'switch' ? 'selected' : '' }} value="Switch">Switch</option>
			</select>
			<label for="">Tipo</label>
		</div>
		<div class="input-field col s5">
			<select name="setor" id="">
				<option {{isset($busca['setor']) && $busca['setor'] == 'todos' ? 'selected' : '' }} value="todos">Todos</option>
				@foreach($setores as $setor)
				<option {{isset($busca['setor']) && $busca['setor'] == $setor->sigla ? 'selected' : '' }} value="{{$setor->id}}">{{$setor->sigla}}</option>
				@endforeach
			</select>
			<label for="">Setor</label>
		</div>
		<div class="input-field col m2">
			<button class="btn deep-range darken-1 right">
				Filtrar
			</button>
		</div>
	</form>
</div>