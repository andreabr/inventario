	
	<div class="input-field col s4">
		<input type="text" name="sigla" value="{{ $setor->sigla }}" class="validate" required="" aria-required="true">
		<label for="">Marca</label>
	</div>

	<div class="input-field col s4">
		<input type="text" name="extenso" value="{{ $setor->extenso }}" class="validate" required="" aria-required="true">
		<label for="">Nome por Extenso</label>
	</div>

	<div class="input-field col s4">


	<div class="col s4">
		<button class="btn blue">Atualizar</button>
	</div>

	<div class="col s4">
		<a href="{{ route('site.home') }}" class="btn orange">Voltar</a>
	</div>
