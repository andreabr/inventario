<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css"> --}}
  {{-- <link rel="stylesheet" type="text/css" href="{{ asset('lib/materialize/dist/css/materialize.css')}}"> --}}
  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.3.0/paper.css"> --}}
  <link rel="stylesheet" type="text/css" href="{{ asset('css/paper.css')}}">
  <style>@page { size: A4 }</style>

  <title>Inventário</title>

</head>
<body class="A4">

  <section class="sheet padding-10mm">

    @include('cautela.cabecalho')
    @include('cautela.preambulo')
    @include('cautela.tabela-cabecalho')
    @include('cautela.cautela-two-pages-one')
    
  </section>

  <section class="sheet padding-10mm">

    @include('cautela.cabecalho')
    @include('cautela.preambulo')
    @include('cautela.tabela-cabecalho')
    @include('cautela.cautela-two-pages-one')
    
  </section>

  {{-- @include('layouts.layout-two-pages-two') --}}

    
  @include('cautela.rodape')

  <script src="{{ asset('lib/jquery/dist/jquery.js') }}"></script>
  <script src="{{ asset('js/init.js') }}"></script>

</body>
</html>