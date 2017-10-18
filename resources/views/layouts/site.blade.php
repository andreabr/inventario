<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('lib/materialize/dist/css/materialize.css')}}">
  <link rel="stylesheet" type="text/cssx" href="{{ asset('css/style.css')}}">


  <title>Inventário</title>

</head>
<body id="app-layout">
  <ul id="dropdown1" class="dropdown-content">
    <li><a href="#!">Desktop</a></li>
    <li><a href="#!">Notebook</a></li>
    <li><a href="#!">Servidor de Rede</a></li>
    <li><a href="#!">Monitor</a></li>
    <li><a href="#!">Impressora</a></li>
    <li><a href="#!">Estabilizador</a></li>
    <li><a href="#!">Nobreak</a></li>
    <li><a href="#!">Switch</a></li>
  </ul>

  <header>
    @include('layouts._site._nav')
  </header>

  @yield('content')

  <script src="{{ asset('lib/jquery/dist/jquery.js') }}"></script>
  <script src="{{ asset('lib/materialize/dist/js/materialize.js') }}"></script>
  <script src="{{ asset('js/init.js') }}"></script>

</body>
</html>