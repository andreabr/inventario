	<div class="input-field col s4">
		<select name="tipo" id="">
			<option value="Desktop" {{ $equipamento->tipo == "Desktop" ? 'selected' : ''}}>Desktop</option>
			<option value="Notebook" {{ $equipamento->tipo == "Notebook" ? 'selected' : ''}}>Notebook</option>
			<option value="Servidor de Rede" {{ $equipamento->tipo == "Servidor de Rede" ? 'selected' : ''}}>Servidor de Rede</option>
			<option value="Monitor" {{ $equipamento->tipo == "Monitor" ? 'selected' : ''}}>Monitor</option>
			<option value="Impressora" {{ $equipamento->tipo == "Impressora" ? 'selected' : ''}}>Impressora</option>
			<option value="Scanner" {{ $equipamento->tipo == "Scanner" ? 'selected' : ''}}>Scanner</option>
			<option value="Estabilizador" {{ $equipamento->tipo == "Estabilizador" ? 'selected' : ''}}>Estabilizador</option>
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
		<label for="">Serial/Tag</label>
	</div>

	<div class="input-field col s4">

<select name="local" required=""  aria-required="true" id="">
		<option value="CMDO" {{ $equipamento->local == "CMDO" ? 'selected' : ''}}>CMDO</option>
		<option value="SEC" {{ $equipamento->local == "SEC" ? 'selected' : ''}}>SEC</option>
		<option value="SINT" {{ $equipamento->local == "SINT" ? 'selected' : ''}}>SINT</option>
		<option value="DA" {{ $equipamento->local == "DA" ? 'selected' : ''}}>DA</option>
		<option value="ACI" {{ $equipamento->local == "ACI" ? 'selected' : ''}}>ACI</option>
		<option value="SCI" {{ $equipamento->local == "SCI" ? 'selected' : ''}}>SCI</option>
		<option value="SCS" {{ $equipamento->local == "SCS" ? 'selected' : ''}}>SCS</option>
		<option value="SDIR-AI" {{ $equipamento->local == "SDIR-AI" ? 'selected' : ''}}>SDIR-AI</option>
		<option value="SESO-AF" {{ $equipamento->local == "SESO-AF" ? 'selected' : ''}}>SESO-AF</option>
		<option value="SDI-M" {{ $equipamento->local == "SDI-M" ? 'selected' : ''}}>SDI-M</option>
		<option value="SDI-R" {{ $equipamento->local == "SDI-R" ? 'selected' : ''}}>SDI-R</option>
		<option value="SDA-IJ" {{ $equipamento->local == "SDA-IJ" ? 'selected' : ''}}>SDA-IJ</option>
		<option value="SDA-PC" {{ $equipamento->local == "SDA-PC" ? 'selected' : ''}}>SDA-PC</option>
		<option value="SDA-PM" {{ $equipamento->local == "SDA-PM" ? 'selected' : ''}}>SDA-PM</option>
		<option value="SDA-SD" {{ $equipamento->local == "SDA-SD" ? 'selected' : ''}}>SDA-SD</option>
		<option value="SDA-TM" {{ $equipamento->local == "SDA-TM" ? 'selected' : ''}}>SDA-TM</option>
		<option value="SDA-TM-ESTOQUE" {{ $equipamento->local == "SDA-TM-ESTOQUE" ? 'selected' : ''}}>SDA-TM-ESTOQUE</option>
		<option value="PENG" {{ $equipamento->local == "PENG" ? 'selected' : ''}}>PENG</option>
		<option value="CAP-A" {{ $equipamento->local == "CAP-A" ? 'selected' : ''}}>CAP-A</option>
		<option value="CAP-B" {{ $equipamento->local == "CAP-B" ? 'selected' : ''}}>CAP-B</option>
		<option value="CAP-J" {{ $equipamento->local == "CAP-J" ? 'selected' : ''}}>CAP-J</option>
		<option value="PIPAR" {{ $equipamento->local == "PIPAR" ? 'selected' : ''}}>PIPAR</option>
		<option value="PASC" {{ $equipamento->local == "PASC" ? 'selected' : ''}}>PASC</option>
	</select>

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

	<div class="input-field col s4">
	<select name="licenciado" id="">
		<option value="" {{ $equipamento->licenciado == '' ? 'selected' : '' }}></option>
		<option value="Sim" {{ $equipamento->licenciado == 'Sim' ? 'selected' : '' }}>Sim</option>
		<option value="Nao" {{ $equipamento->licenciado == 'Nao' ? 'selected' : '' }}>Nao</option>
	</select>
	<label for="">Licenciado</label>
</div>

	<div class="input-field col s4">
		<input type="text" name="lacre_numero" value="{{ isset($equipamento->lacre_numero) ? $equipamento->lacre_numero : '' }}" class="validate">
		<label for="">Lacre Nº</label>
	</div>

	<div class="col s4">
		<button class="btn blue">Atualizar</button>
	</div>

	<div class="col s4">
		<a href="{{ route('site.home') }}" class="btn orange">Voltar</a>
	</div>
