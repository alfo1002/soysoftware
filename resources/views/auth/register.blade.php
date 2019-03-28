@extends('layouts.app',['title'=>'Registrar gratis'])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary">
                    <img src="{{ asset('img/reset.png') }}" class="card-img-top img-fluid" alt="">
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        
                            <div class="md-form md-outline form-lg">
                                <input id="name" type="text" class="form-control form-control-lg{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                <label for="name" class="">{{ __('Nombre de usuario') }}</label>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        

                        
                            

                            <div class="md-form md-outline form-lg">
                                <input id="email" type="email" class="form-control form-control-lg{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
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
                                {{ __('Registrar') }}
                            </button>
                             <a href="{{ route('login') }}" class="btn btn-unique">CANCELAR</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
