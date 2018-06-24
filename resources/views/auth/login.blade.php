@extends('layouts.app')
@section('css')
@endsection
@section('content')
	@if (session('errors'))
	    <div class="alert alert-danger">
	        Uno o más campos tienen un error. Por favor revisa e inténtalo de nuevo.
	    </div>
	@endif
	<div class="m-login__signin">
        <div class="m-login__head">
            <h3 class="m-login__title">
                Inicio de Sesión
            </h3>
        </div>
        <form class="m-login__form m-form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="form-group m-form__group">
                <input class="form-control m-input" type="text" placeholder="Email" name="email" value="{{ old('email') }}" autofocus>
                @if ($errors->has('email'))
                	<div class="form-control-feedback">
                	    {{ $errors->first('email') }}
                	</div>
                @endif
            </div>
            <div class="form-group m-form__group">
                <input class="form-control m-input m-login__form-input--last" type="password" placeholder="Contraseña" name="password">
                @if ($errors->has('password'))
                    <div class="form-control-feedback">
                	    {{ $errors->first('password') }}
                	</div>
                @endif
            </div>
            <div class="row m-login__form-sub">
                <div class="col m--align-left m-login__form-left">
                    <label class="m-checkbox  m-checkbox--light">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        Recuérdame
                        <span></span>
                    </label>
                </div>
            </div>
            <div class="m-login__form-action">
                <button class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn">
                    Entrar
                </button>
            </div>
        </form>
    </div>
@endsection