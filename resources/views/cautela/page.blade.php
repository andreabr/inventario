@foreach($equipamentosPorSetor as $setor => $equipamentos)


@if($equipamentos->count() < 28)

@include('layouts.layout-one-page')

@elseif($equipamentos->count() > 28 AND $equipamentos->count() < 71)

@include('layouts.layout-two-pages-one')


@else

@include('layouts.layout-two-mores-pages')

@endif


@endforeach

