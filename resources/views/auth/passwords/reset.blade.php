@extends('layouts.app',['title'=>'Nueva contraseña'])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-inverse">
                <div class="card-header bg-primary">
                    <img src="{{ asset('img/registro.png') }}" alt="" class="card-img-top img-fluid">
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                            <div class="md-form md-outline form-lg">
                                <input id="email" type="email" class="form-control form-control-lg{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>
                                <label for="email" class="">{{ __('Dirección de correo electrónico') }}</label>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        
                            <div class="md-form md-outline form-lg">
                                <input id="password" type="password" class="form-control form-control-lg{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                <label for="password" class="">{{ __('Contraseña') }}</label>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        

                            <div class="md-form md-outline form-lg">
                                <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" required>
                                <label for="password-confirm" class="">{{ __('Confirmar contraseña') }}</label>
                            </div>
                        
                            <button type="submit" class="btn btn-deep-purple">
                                {{ __('Restablecer la contraseña') }}
                            </button>
                            <a href="{{ route('login') }}" class="btn btn-unique">CANCELAR</a>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
