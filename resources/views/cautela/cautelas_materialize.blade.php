@extends('layouts.layout_print')
@section('content')

<div class="container">
	<div class="row ">
		<div class="col s12 center">
		<h5>PREFEITURA DE AERONÁUTICA DOS AFONSOS</h5>
		</div>
		<div class="col s12 center">
		<h6>SEÇÃO DE TELEMÁTICA</h6>
		</div>
	</div>
	<div class="row">
		<div class="col s12 center">
		<h5>CAUTELA</h5>
		</div>
	</div>

	<div class="row">
		<div class="col s2 offset-s5 center" style="border: 1px solid #b1b1b1;">
		<h5>PENG</h5>
		</div>
	</div>

	<div class="row">
		<p>Os Equipamentos de Tecnologia da Informação, abaixo relacionados, encontram-se alocados neste Setor e estão sob minha responsabilidade de utilização e conservação, conforme preconizado em legislação pertinente.</p>
	</div>

	<table class="bordered">
		<thead>
			<tr>
				<th>ITEM</th>
				<th>TIPO</th>
				<th>FABRICANTE</th>
				<th>MODELO</th>
				<th>SERIAL</th>
			</tr>
		</thead>

		<tbody>
			
			<tr>
				<td>1</td>
				<td>COMPUTADOR</td>
				<td>DELL</td>
				<td>OPTIPLEX 7010</td>
				<td>123456</td>
			</tr>


		</tbody>
	</table>
	<br>
	<div class="row">
		DATA: ____/____/_____
	</div>

	<div class="row">
		<div class="col s6 center">Encarregado da STEL</div>
		<div class="col s6 center">Chefe da STEL</div>
	</div>
	
	<div class="row">
		<div class="col s12 right">Chefe da STEL</p>
		</div>




	</div>
	@endsection