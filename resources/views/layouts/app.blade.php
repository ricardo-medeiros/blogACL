<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://rsi.fiocruz.br/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="https://rsi.fiocruz.br/css/vendor/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://rsi.fiocruz.br/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css">
    <link href="https://rsi.fiocruz.br/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css">-->
<!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/AdminLTE.min.css') }}">    
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">    
    

    <link href="https://rsi.fiocruz.br/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css">
</head>
<body class="skin-blue layout-top-nav">
    <div id="app" class="wrapper">
        <header class="main-header">
        <nav class="navbar navbar-static-top">
            <div class="container">
                <div class="navbar-header">   
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        {{ config('app.name', 'Tributar') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">

                        <li class="active">
                            <a href="{{url("/home")}}">Inicio
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuários
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu"> 
                                <li>
                                    <a href="{{url("/acesso_usuario")}}">Listar Usuários</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="">Cadastrar Usuários</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="">Perfil</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="">Acessos</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="">Perfil x Acesso</a>
                                </li>
                            </ul>
                        </li>
                </div>
                <!-- Div onde fica o nome do usuário e botão de logout-->
                <div class="navbar-custom-menu">
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                 
                                <ul class="dropdown-menu" role="menu">
                                    <li class="user-footer">
                                        <div class="pull-right">
                                        <a href="{{ route('logout') }}" class="btn btn-default btn-flat"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        </header>
        <div class="content-wrapper">
            @yield('content')
        </div>
           <footer class="main-footer">
                <div class="container">
                    <div class="pull-right hidden-xs">
                      <b>TRIBUTAR</b> 1.0
                    </div>
                    <strong>Fundação Oswaldo Cruz | <a href="https://cgti.fiocruz.br/novo_portal/" target="_blank">Cogetic</a></strong>
                </div>
            </footer>        
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    
</body>
</html>
