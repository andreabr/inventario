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
		<select name="local" id="">
			<option {{isset($busca['local']) && $busca['local'] == 'todos' ? 'selected' : '' }} value="todos">Todos</option>
			<option {{isset($busca['local']) && $busca['local'] == 'CMDO' ? 'selected' : '' }} value="CMDO">CMDO</option>
			<option {{isset($busca['local']) && $busca['local'] == 'SEC' ? 'selected' : '' }} value="SEC">SEC</option>
			<option {{isset($busca['local']) && $busca['local'] == 'SINT' ? 'selected' : '' }} value="SINT">SINT</option>
			<option {{isset($busca['local']) && $busca['local'] == 'DA' ? 'selected' : '' }} value="DA">DA</option>
			<option {{isset($busca['local']) && $busca['local'] == 'ACI' ? 'selected' : '' }} value="ACI">ACI</option>
			<option {{isset($busca['local']) && $busca['local'] == 'SCI' ? 'selected' : '' }} value="SCI">SCI</option>
			<option {{isset($busca['local']) && $busca['local'] == 'SCS' ? 'selected' : '' }} value="SCS">SCS</option>
			<option {{isset($busca['local']) && $busca['local'] == 'SDIR-AI' ? 'selected' : '' }} value="SDIR-AI">SDIR-AI</option>
			<option {{isset($busca['local']) && $busca['local'] == 'SESO-AF' ? 'selected' : '' }} value="SESO-AF">SESO-AF</option>
			<option {{isset($busca['local']) && $busca['local'] == 'SDI-M' ? 'selected' : '' }} value="SDI-M">SDI-M</option>
			<option {{isset($busca['local']) && $busca['local'] == 'SDI-R' ? 'selected' : '' }} value="SDI-R">SDI-R</option>
			<option {{isset($busca['local']) && $busca['local'] == 'SDA-IJ' ? 'selected' : '' }} value="SDA-IJ">SDA-IJ</option>
			<option {{isset($busca['local']) && $busca['local'] == 'SDA-PC' ? 'selected' : '' }} value="SDA-PC">SDA-PC</option>
			<option {{isset($busca['local']) && $busca['local'] == 'SDA-PM' ? 'selected' : '' }} value="SDA-PM">SDA-PM</option>
			<option {{isset($busca['local']) && $busca['local'] == 'SDA-SD' ? 'selected' : '' }} value="SDA-SD">SDA-SD</option>
			<option {{isset($busca['local']) && $busca['local'] == 'SDA-TM' ? 'selected' : '' }} value="SDA-TM">SDA-TM</option>
			<option {{isset($busca['local']) && $busca['local'] == 'PENG' ? 'selected' : '' }} value="PENG">PENG</option>
			<option {{isset($busca['local']) && $busca['local'] == 'CAP-A' ? 'selected' : '' }} value="CAP-A">CAP-A</option>
			<option {{isset($busca['local']) && $busca['local'] == 'CAP-B' ? 'selected' : '' }} value="CAP-B">CAP-B</option>
			<option {{isset($busca['local']) && $busca['local'] == 'CAP-J' ? 'selected' : '' }} value="CAP-J">CAP-J</option>
			<option {{isset($busca['local']) && $busca['local'] == 'PIPAR' ? 'selected' : '' }} value="PIPAR">PIPAR</option>
			<option {{isset($busca['local']) && $busca['local'] == 'PASC' ? 'selected' : '' }} value="PASC">PASC</option>
		</select>
		<label for="">Local</label>
	</div>
	<div class="input-field col m2">
		<button class="btn deep-range darken-1 right">
			Filtrar
		</button>
	</div>
	</form>
</div>