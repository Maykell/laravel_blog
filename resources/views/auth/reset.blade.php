<!doctype html>
<html lang="en">
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
            <form role="form" method="post" action="/auth/register">
                {!! csrf_field() !!}

                <input type="hidden" name="token" value="{{ $token }}">

                <fieldset>
                    <h2>Registrar</h2>
                    <hr class="colorgraph">

                    <!--EMAIL-->
                    <div class="form-group">
                        <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email" value="{{ old('email') }}">
                    </div>

                    <!--PASSWORD-->
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Senha">
                    </div>

                    <!--COMFIRM PASSWORD-->
                    <div class="form-group">
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirmar Senha">
                    </div>

                    <hr class="colorgraph">

                    <!--REGISTER-->
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 pull-right">
                            <button class="btn btn-lg btn-primary btn-block">Resetar Senha</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
</body>
</html>