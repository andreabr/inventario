@php
$i = 1
@endphp

@foreach($equipamentos as $equipamento)

<tr>
	<td align="center">{{$i}}</td>
	<td>{{$equipamento->tipo}}</td>
	<td>{{$equipamento->marca}}</td>
	<td>{{$equipamento->modelo}}</td>
	<td>{{$equipamento->serial}}</td>
</tr>

@if($i == 38)
@break
@endif

@php
$i++
@endphp

@endforeach



