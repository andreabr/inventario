@extends('layouts.site')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <br>
                @include('layouts._site._filtros')
                @include('equipamento.index')


            </div>
        </div>
    </div>
</div>
@endsection