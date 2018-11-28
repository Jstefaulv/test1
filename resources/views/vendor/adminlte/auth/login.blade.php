@extends('adminlte::layouts.auth')

@section('content')
<body class="hold-transition login-page">
    <div class="container">
        <div class="row">
            <br><br><br>
            <div class="col-md-4 col-md-offset-4">
                <div class="box box-solid box-primary">
                    <div class="box-header">
                        <h5 class="box-title">Inicio Sesión</h5>
                    </div>
                    <div class="box-body">
                        <form method="post" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="form-group has-feedback {{ $errors->has('username') ? 'has-error':'' }}">
                                <label for="username">Nombre de usuario</label>
                                <input id="username" type="text" class="form-control" placeholder="Nombre de usuario" name="username" autofocus value="{{ old('username') }}" />
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                {!! $errors->first('username','<span class="help-block">:message</span>') !!}
                            </div>
                            <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error':'' }}">
                                <label for="password">Contraseña</label>
                                <input id="password" type="password" class="form-control" placeholder="********" name="password"/>
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                {!! $errors->first('password','<span class="help-block">:message</span>') !!}
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-block"><b>INGRESAR</b></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection
