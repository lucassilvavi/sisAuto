<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="{{'node_modules/bootstrap3/dist/css/bootstrap.css'}}" rel="stylesheet">
    <link href="{{'css/style.css'}}" rel="stylesheet">
</head>
<body>
<header>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#navbarCollapse"
                        aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">SysAuto</a>
            </div>
            <div id="navbarCollapse" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="/">Home</a></li>
                    <li><a href="/como-funciona">Como Funciona</a></li>
                    <li><a href="/contato">Contato</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Cadastro <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/cadastro-cliente">Sou Pessoa Física</a></li>
                            <li><a href="/cadastro-empresa">Sou Lojista</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<main class="col-sm-10">
    @section('main')
    @show
</main>
<script src="{{'node_modules/jquery/dist/jquery.js'}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{'node_modules/bootstrap3/dist/js/bootstrap.js'}}"></script>

</body>

</html>