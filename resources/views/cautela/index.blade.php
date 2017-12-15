@extends('layouts.site')

@section('content')
<div class="container">
	<div class="row">
		@if(Session::has('mensagem'))
		<div class="row" id="msg">
			<div class="card {{ Session::get('mensagem')['class'] }}">
				<div align="center" class="card-content">
					{{ Session::get('mensagem')['msg']}}
				</div>
			</div>
		</div>
		@endif
		<h5 align="center">Cautela</h5>

		@include('cautela._form._checkbox')


		{{-- <div class="deep-range darken-1">
			<a class="waves-effect waves-light btn" href="{{ route('cautela.gerar') }}">Gerar</a>
		</div> --}}
		{{-- <br> --}}
		

	</div>
</div>
@endsection




