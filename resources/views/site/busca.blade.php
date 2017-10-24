@extends('layouts.site')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                {{-- <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Home
                </div>
                <div class="divider"></div> --}}
                <br>
                @include('layouts._site._filtros')
                @include('equipamento.index')


            </div>
        </div>
    </div>
</div>
@endsection