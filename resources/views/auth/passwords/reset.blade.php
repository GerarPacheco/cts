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
            Reiniciar Contraseña
        </h3>
    </div>
    
    <form class="m-login__form m-form" method="POST" action="{{ route('password.request') }}">
        {{ csrf_field() }}
        <input type="hidden" name="token" value="{{ $token }}">

        <div class="form-group m-form__group has-danger">
            <div class="col-xl-12 has-danger">
                <input id="dni" type="dni" class="form-control m-input" placeholder="DNI" name="dni" autocomplete="off" value="{{ old('dni') }}" autofocus>
                @if ($errors->has('dni'))
                    <div class="form-control-feedback">
                        {{ $errors->first('dni') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="form-group m-form__group has-danger">
            <div class="col-xl-12 has-danger">
                <input id="password" type="password" class="form-control m-input" placeholder="Contraseña"  name="password">
                @if ($errors->has('password'))
                    <div class="form-control-feedback">
                        {{ $errors->first('password') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="form-group m-form__group has-danger">
            <div class="col-xl-12 has-danger">
                <input id="password_confirmation" type="password" class="form-control m-input" placeholder="Confirmar Contraseña"  name="password_confirmation">
                @if ($errors->has('password_confirmation'))
                    <div class="form-control-feedback">
                        {{ $errors->first('password_confirmation') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="m-login__form-action">
            <button  class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air" type="submit">
                Reiniciar Contraseña
            </button>
        </div>
    </form>
</div>
@endsection
