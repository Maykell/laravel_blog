<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!--CSS BLOG-->
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
</head>
<body>
<div class="container">
    <div class="row" style="margin-top:20px">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li><strong>{{ $error }}</strong></li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form role="form" method="post" action="/auth/login">
                {!! csrf_field() !!}
                <fieldset>
                    <h2>Admin Panel</h2>
                    <hr class="colorgraph">
                    <!--EMAIL-->
                    <div class="form-group">
                        <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" value="{{ old('email') }}">
                    </div>
                    <!--PASSWORD-->
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
                    </div>
                    <!--LOST PASSWORD-->
                    <div class="form-group">
                        <a href="password" class="btn btn-link">Perdeu a senha?</a>
                    </div>

                    <hr class="colorgraph">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <input type="submit" class="btn btn-lg btn-success btn-block" value="Logar">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <a href="register" class="btn btn-lg btn-primary btn-block">Cadastrar</a>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
</body>
</html>