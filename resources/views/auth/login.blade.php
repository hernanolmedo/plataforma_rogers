@extends('layouts.login')
@section('titulo') Rogers | Login @endsection
@section('body')
<p class="login-box-msg">Ingrese sus credenciales para iniciar sesión</p>
<form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
     {{ csrf_field() }}
 <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
       <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
       <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
         @if ($errors->has('email'))
           <span class="help-block">
             <strong>{{ $errors->first('email') }}</strong>
           </span>
         @endif
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
 <div class="row">
         <div class="col-xs-7">
             <div class="checkbox icheck">
                 <label>
                     <input type="checkbox" name="remember"> Recordar credenciales
                 </label>
             </div>
         </div>
     <div class="col-xs-5">
             <button type="submit" class="btn btn-primary btn-block btn-flat">
                 Iniciar sesión
             </button>
         </div>
     </div>
</form>
<br>
<a href="{{ url('/password/reset') }}">Olvido su contraseña?</a><br><br>
@if (Auth::guest())
<a href="{{ url('/register') }}">Registrar nuevo usuario</a><br>
@endif
@endsection