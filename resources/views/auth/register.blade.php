@extends('layouts.login')
@section('titulo') Rogers | Registro @endsection
@section('body')
<p class="login-box-msg">Crear usuario nuevo</p>
<form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
    {{ csrf_field() }}
    <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nombre de usuario" required autofocus>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
    </div>
    <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
    </div>
    <div class="form-group has-feedback{{ $errors->has('rut') ? ' has-error' : '' }}">
            <input id="rut" type="text" class="form-control" name="rut" placeholder="RUT" required>
            <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
            @if ($errors->has('rut'))
                <span class="help-block">
                    <strong>{{ $errors->first('rut') }}</strong>
                </span>
            @endif
    </div>
    <div class="form-group has-feedback{{$errors->has('tipo_usuario') ? 'has-error' : ''}}">
            <select class="form-control" name="tipo_usuario" required>
                <option value="secretaria">Secretaria</option>
                <option value="administrador">Administrador</option>
                <option value="psicologo">Psicólogo</option>
                <option value="paciente">Paciente</option>
            </select>
            <span class="glyphicon glyphicon-briefcase form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
            <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
    </div>
    <div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar contraseña" required>
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            @if ($errors->has('password_confirmation'))
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif
    </div>
    <div class="row">
        <div class="col-xs-7 col-xs-offset-5">
            <button type="submit" class="btn btn-primary btn-block btn-flat">
                Registrar nuevo usuario
            </button>
        </div>
    </div>
</form>
@endsection
