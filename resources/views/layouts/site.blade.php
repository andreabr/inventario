<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('lib/materialize/dist/css/materialize.css')}}">
  <link rel="stylesheet" type="text/cssx" href="{{ asset('css/style.css')}}">


  <title>Laravel</title>

</head>
<body id="app-layout">
  <ul id="dropdown1" class="dropdown-content">
    <li><a href="#!">one</a></li>
    <li><a href="#!">two</a></li>
    <li><a href="#!">three</a></li>
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