	<div class="input-field col s4">
		<select name="tipo" id="">
			<option value="Desktop" {{ $equipamento->tipo == "Desktop" ? 'selected' : ''}}>Desktop</option>
			<option value="Notebook" {{ $equipamento->tipo == "Notebook" ? 'selected' : ''}}>Notebook</option>
			<option value="Monitor" {{ $equipamento->tipo == "Monitor" ? 'selected' : ''}}>Monitor</option>
			<option value="Impressora" {{ $equipamento->tipo == "Impressora" ? 'selected' : ''}}>Impressora</option>
			<option value="Servidor de Rede" {{ $equipamento->tipo == "Servidor de Rede" ? 'selected' : ''}}>Servidor de Rede</option>
			<option value="Nobreak" {{ $equipamento->tipo == "Nobreak" ? 'selected' : ''}}>Nobreak</option>
			<option value="Switch" {{ $equipamento->tipo == "Switch" ? 'selected' : ''}}>Switch</option>
		</select>
		<label for="">Tipo</label>
	</div>

	<div class="input-field col s4">
		<input type="text" name="marca" value="{{ $equipamento->marca }}" class="validate" required="" aria-required="true">
		<label for="">Marca</label>
	</div>

	<div class="input-field col s4">
		<input type="text" name="modelo" value="{{ $equipamento->modelo }}" class="validate" required="" aria-required="true">
		<label for="">Modelo</label>
	</div>

	<div class="input-field col s4">
		<input type="text" name="serial" value="{{ isset($equipamento->serial) ? $equipamento->serial : '' }}" class="validate">
		<label for="">Serial</label>
	</div>

	<div class="input-field col s4">
		<input type="text" name="local" value="{{ isset($equipamento->local) ? $equipamento->local : '' }}" class="validate" required="" aria-required="true">
		<label for="">Local</label>
	</div>

	<div class="input-field col s4">
		<input type="text" name="usuario" value="{{ isset($equipamento->usuario) ? $equipamento->usuario : '' }}" class="validate">
		<label for="">Usuário</label>
	</div>

	<div class="input-field col s4">
		<input type="text" name="nome_de_rede" value="{{ isset($equipamento->nome_de_rede) ? $equipamento->nome_de_rede : '' }}" class="validate">
		<label for="">Nome de Rede</label>
	</div>


	<div class="input-field col s8">
		<input type="text" name="lacre_numero" value="{{ isset($equipamento->lacre_numero) ? $equipamento->lacre_numero : '' }}" class="validate">
		<label for="">Lacre Nº</label>
	</div>

	<div class="col s4">
		<button class="btn blue">Atualizar</button>
	</div>

	<div class="col s4">
		<a href="{{ route('site.home') }}" class="btn orange">Voltar</a>
	</div>
