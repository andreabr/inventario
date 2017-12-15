@foreach($equipamentosPorSetor as $setor => $equipamentos)

{{print_r($equipamentos)}}
@each('cautela.cautelas_css_puro', $equipamentos, 'equipamentos')

@endforeach