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

  <nav>
    <div class="nav-wrapper blue darken-2">
      <div class="container">
        <a href="#!" class="center brand-logo">Inventário</a>
        <ul class="left hide-on-med-and-down">
          <li><a href="sass.html">Cadastro</a></li>
          <!-- Dropdown Trigger -->
          <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Listagem<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
      </div>
    </div>
  </nav>

  @yield('content')

  <script src="{{ asset('lib/jquery/dist/jquery.js') }}"></script>
  <script src="{{ asset('lib/materialize/dist/js/materialize.js') }}"></script>
  <script src="{{ asset('js/init.js') }}"></script>

</body>
</html>
