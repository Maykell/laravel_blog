<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Blog</title>

    <!-- Bootstrap/Others-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blog-admin.css') }}">

</head>

<body>

<!-- Fixed navbar -->
<nav class="navbar navbar-findcond navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('admin.posts.index') }}">Blog Admin</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="glyphicon glyphicon-triangle-bottom"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Perfil</a></li>
                        <li><a href="/auth/logout">Sair</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-left">
                <li><a href="{{ route('admin.posts.index') }}">Posts</a></li>
                <li><a href="{{ route('admin.tags.index') }}">Tags</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Begin page content -->
<div class="container" style="padding-top: 60px">
   @yield('content')
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body></html>