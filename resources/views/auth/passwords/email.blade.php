@extends('layouts.app',['title'=>'Restablecer contraseña'])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info">
                    <img src="{{ asset('img/restear.png') }}" alt="" class="card-img-top img-fluid">
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf


                            <div class="md-form md-outline form-lg">
                                <input id="email" type="email" class="form-control form-control-lg{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus="">
                                <label for="email" class="">{{ __('Dirección de correo electrónico') }}</label>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        
                            <button type="submit" class="btn btn-deep-purple">
                                {{ __('Enviar contraseña Restablecer enlace') }}
                            </button>
                            <a href="{{ route('login') }}" class="btn btn-unique">CANCELAR</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
