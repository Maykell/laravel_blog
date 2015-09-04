<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!--CSS BLOG-->
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
</head>
<body>
<div class="container">
    <a href="/auth/login">Painel Administrativo</a>
    <header class="row row-centered">
        <div class="blog-header">
            <img class="img-responsive center-block" src="{{ asset('img/logo.png') }}" alt="logo">
            <h1 class="blog-title"><a href="/">AndroidStrap</a></h1>
            <p class="lead blog-description">conteúdo de qualidade sobre Android você só encontra aqui!</p>
        </div>
        <hr>
        <nav class="navbar navbar-default navbar-xs">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="  #navbar">
                        <p class="menu">MENU</p>
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="nav navbar-nav">
                        <li><a href="/">Home</a></li>
                        <li><a href="#">Sobre</a></li>
                        <li><a href="#">Contato</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/.nav-->
        <hr>
    </header><!--/.header-->
    <div class="row row-centered">
        <div class="blog-main"><!--Main-->

            @yield('content')

        </div><!--/.Main-->
    </div>
</div><!--/.container-fluid-->

<footer class="row blog-footer">
    <p class="text-center">Copyright &copy; Blogstrap 2015. All rights reserved.</p>
</footer><!--/.footer-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>