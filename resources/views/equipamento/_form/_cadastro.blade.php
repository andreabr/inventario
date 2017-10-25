<div class="input-field col s4">
	<select name="tipo" id="">
		<option value="Desktop">Desktop</option>
		<option value="Notebook">Notebook</option>
		<option value="Servidor de Rede">Servidor de Rede</option>
		<option value="Monitor">Monitor</option>
		<option value="Impressora">Impressora</option>
		<option value="Scanner">Scanner</option>
		<option value="Estabilizador">Estabilizador</option>
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
	<label for="">Serial/Tag</label>
</div>

<div class="input-field col s4">

<select name="local" required=""  aria-required="true" id="">
		<option value="CMDO">CMDO</option>
		<option value="SEC">SEC</option>
		<option value="SINT">SINT</option>
		<option value="DA">DA</option>
		<option value="ACI">ACI</option>
		<option value="SCI">SCI</option>
		<option value="SCS">SCS</option>
		<option value="SDIR-AI">SDIR-AI</option>
		<option value="SESO-AF">SESO-AF</option>
		<option value="SDI-M">SDI-M</option>
		<option value="SDI-R">SDI-R</option>
		<option value="SDA-IJ">SDA-IJ</option>
		<option value="SDA-PC">SDA-PC</option>
		<option value="SDA-PM">SDA-PM</option>
		<option value="SDA-SD">SDA-SD</option>
		<option value="SDA-TM">SDA-TM</option>
		<option value="PENG">PENG</option>
		<option value="CAP-A">CAP-A</option>
		<option value="CAP-B">CAP-B</option>
		<option value="CAP-J">CAP-J</option>
		<option value="CAP-J">PIPAR</option>
		<option value="PASC">PASC</option>
	</select>

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


<div class="input-field col s4">
	<select name="licenciado" id="">
		<option value=""></option>
		<option value="Sim">Sim</option>
		<option value="Nao">Não</option>
	</select>
	<label for="">Licenciado</label>
</div>

<div class="input-field col s4">
	<input type="text" name="lacre_numero" class="validate">
	<label for="">Lacre Nº</label>
</div>

<div class="col s4">
	<button class="btn blue">Adicionar</button>
</div>

<div class="col s4">
	<a href="{{ route('site.home') }}" class="btn orange">Voltar</a>
</div>