<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link id="page_favicon" href="https://rsi.fiocruz.br/barra//images/favicon/favicon.ico" rel="icon" type="image/x-icon" />
        <!-- Styles 
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://rsi.fiocruz.br/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="https://rsi.fiocruz.br/css/vendor/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://rsi.fiocruz.br/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css">
        <link href="https://rsi.fiocruz.br/barra/css/barras_fixas/barra_gov.css" rel="stylesheet" type="text/css">  -->
        
 <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/Ionicons/css/ionicons.min.css') }}">   
    
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css">
    
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/AdminLTE.min.css') }}">
    
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
     
    <link href="https://rsi.fiocruz.br/barra/css/barras_fixas/barra_gov.css" rel="stylesheet" type="text/css"> 
    
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

     @yield('adminlte_css')
     
    </head>
    <body class="hold-transition @yield('body_class')">
        <div class="navbar">

            <div id="barra-brasil">
                <div id="wrapper-barra-brasil">
                    <div class="brasil-flag">
                        <a href="http://brasil.gov.br" class="link-barra">Brasil</a>
                    </div>
                    <span class="acesso-info"><a href="http://brasil.gov.br/barra#acesso-informacao" class="link-barra">Acesso &agrave; informa&ccedil;&atilde;o</a></span>
                    <ul class="list">
                        <li class="list-item first"><a href="http://brasil.gov.br/barra#participe" class="link-barra">Participe</a></li>
                        <li class="list-item"><a href="http://www.servicos.gov.br/" class="link-barra">Servi&ccedil;os</a></li>
                        <li class="list-item"><a href="http://www.planalto.gov.br/legislacao" class="link-barra">Legisla&ccedil;&atilde;o</a></li>
                        <li class="list-item last last-item"><a href="http://brasil.gov.br/barra#orgaos-atuacao-canais" class="link-barra">Canais</a></li>
                    </ul>
                </div>
            </div>
            
            
        </div>

        <div id="content">
            @yield('content')
        </div>
        
        <div id="footer">            
            <footer class="text-center">
                <div>
                    Dúvidas? Entre em contato com <strong>suporte.rsi@fiocruz.br</strong>
                </div><br>
                <div>
                    Tributar - 1.0
                </div>
                <div>
                    FUNDAÇÃO OSWALDO CRUZ - <a href="https://cgti.fiocruz.br/novo_portal/" target="_blank">Cogetic</a>
                </div>            
            </footer>    
        </div>

        <!--<script src="https://rsi.fiocruz.br/plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <script src="https://rsi.fiocruz.br/bootstrap/js/bootstrap.min.js"></script>-->
        <script src="{{ asset('vendor/adminlte/vendor/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/adminlte/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script> 
        <script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    </body>
</html>
