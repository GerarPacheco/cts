@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    @if (session('errors'))
        <div class="alert alert-danger">
            Uno o más campos tienen un error. Por favor revisa e inténtalo de nuevo.
        </div>
    @endif
    <div class="m-login__signin">
        <div class="m-login__head">
            <h3 class="m-login__title">
                ¿Olvido su contraseña?
            </h3>
        </div>
        <form class="m-login__form m-form" method="POST" action="{{ route('password.email') }}">
            {{ csrf_field() }}
            <div class="form-group m-form__group has-danger ">
                <input class="form-control m-input" type="text" placeholder="DNI" name="dni" autocomplete="off" value="{{ old('dni') }}" required autofocus>
                @if ($errors->has('dni'))
                    <div class="form-control-feedback">
                        {{ $errors->first('dni') }}
                    </div>
                @endif
            </div>
            <div class="row m-login__form-sub">
                <div class="col m--align-right">
                    <a href="{{ url('/') }}" class="m-link">
                        <- Volver al inicio
                    </a>
                </div>
            </div>
            <div class="m-login__form-action">
                <button type="submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air" type="submit">
                    Enviar
                </button>
            </div>
        </form>
    </div>
@endsection
