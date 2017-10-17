<div class="input-field col s4">
		<select name="tipo" id="">
			<option value="Desktop">Desktop</option>
			<option value="Notebook">Notebook</option>
			<option value="Monitor">Monitor</option>
			<option value="Impressora">Impressora</option>
			<option value="Servidor de Rede">Servidor de Rede</option>
			<option value="Nobreak">Nobreak</option>
			<option value="Switch">Switch</option>
		</select>
		<label for="">Tipo</label>
</div>

<div class="input-field col s4">
	<input type="text" name="marca" class="validate" required="" aria-required="true">
	<label for="">Marca</label>
</div>

<div class="input-field col s4">
	<input type="text" name="modelo" class="validate" required="" aria-required="true">
	<label for="">Modelo</label>
</div>

<div class="input-field col s4">
	<input type="text" name="serial" class="validate">
	<label for="">Serial</label>
</div>

<div class="input-field col s4">
	<input type="text" name="local" class="validate" required="" aria-required="true">
	<label for="">Local</label>
</div>

<div class="input-field col s4">
	<input type="text" name="usuario" class="validate">
	<label for="">Usuário</label>
</div>

<div class="input-field col s4">
	<input type="text" name="nome_de_rede" class="validate">
	<label for="">Nome de Rede</label>
</div>


<div class="input-field col s8">
	<input type="text" name="lacre_numero" class="validate">
	<label for="">Lacre Nº</label>
</div>

<div class="col s4">
	<button class="btn blue">Adicionar</button>
</div>

<div class="col s4">
	<a href="{{ route('site.home') }}" class="btn orange">Voltar</a>
</div>