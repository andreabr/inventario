@extends('layouts.site')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <h4 class="center">Editar Equipamento</h4>
                <div class="container">
                @if(Session::has('mensagem'))
                <div class="row" id="msg">
                    <div class="card {{ Session::get('mensagem')['class'] }}">
                        <div align="center" class="card-content">
                            {{ Session::get('mensagem')['msg']}}
                        </div>
                    </div>
                </div>
                @endif

                    <form action="{{ route('equipamento.atualizar', $equipamento->id) }}" method="POST">
                        
                        {{csrf_field()}}

                        <input type="hidden" name="_method" value="put">

                        @include('equipamento._form._editar')
                    </form>


                </div>
                


            </div>
        </div>
    </div>
</div>
@endsection