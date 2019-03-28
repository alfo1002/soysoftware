@extends('layouts.app',['title'=>'Escribenos'])

@section('content')

<div class="container">

<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-center">
                    <h1 class="text-white"><strong>Escribenos</strong></h1>
                    <p class="text-white">
                        
                            Nuestro equipo regresará a usted en cuestión de horas para ayudarlo.
                        
                    </p>
                    <img src="{{ asset('img/contacto.png') }}" class="card-img-top img-fluid" alt="">
                    
                </div>

                <div class="card-body">
                    <form  action="{{ route('contactosEnviar') }}" method="POST">
                      @csrf
                        <!--Grid row-->
                        <div class="row">
                            
                         
                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0 md-outline form-lg">
                                    <input type="text" id="nombre" name="nombre" class="form-control form-control-lg{{ $errors->has('nombre') ? ' is-invalid' : '' }}" required="" autofocus="" value="{{ old('nombre') }}">
                                    <label for="nombre" class="">Nombres y apellidos</label>
                                    @if ($errors->has('nombre'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('nombre') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0 md-outline form-lg">
                                    <input type="text" id="email" name="email" class="form-control form-control-lg{{ $errors->has('email') ? ' is-invalid' : '' }}" required="" value="{{ old('email') }}">
                                    <label for="email" class="">Correo electrónico</label>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0 md-outline form-lg">
                                    <input type="text" id="asunto" name="asunto" class="form-control form-control-lg{{ $errors->has('asunto') ? ' is-invalid' : '' }}" required="" value="{{ old('asunto') }}">
                                    <label for="asunto" class="">Asunto</label>
                                    @if ($errors->has('asunto'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('asunto') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">
                                <div class="md-form md-outline">
                                    <textarea  id="mensaje" name="mensaje" rows="3" class="form-control{{ $errors->has('mensaje') ? ' is-invalid' : '' }}" required="">{{ old('mensaje') }}</textarea>
                                    <label for="mensaje">Su mensaje</label>
                                    @if ($errors->has('mensaje'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('mensaje') }}</strong>
                                        </span>
                                    @endif

                                </div>

                            </div>
                        </div>
                        <!--Grid row-->
                        <button class="btn btn-deep-purple" type="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            
          <div class="card blue text-white p-1 mt-1">
            
                <blockquote class="blockquote">
                  <h1><strong>Contáctenos</strong></h1>
                  <h3>¿Tiene usted alguna pregunta? </h3>
                  <h5>Por favor no dude en contactarnos directamente.</h5>
                </blockquote>
            
          </div>

          <div class="card mt-2">
               
              <div class="card-body text-center">
                  <ul class="list-unstyled mb-0">
                    <li>
                        <i class="fas fa-map-marker-alt fa-2x"></i>
                        <p>"EL CALVARIO" <br><strong>ECUADOR-COTOPAXI-SALCEDO</strong></p>

                    </li>

                    <li>
                        <i class="fas fa-phone mt-4 fa-2x"></i>
                        <p>+593 032730015 <br>+593 0998808775</p>

                    </li>

                    <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                        <p>info@soysoftware.com</p>
                    </li>
                </ul>
              </div>
              <div class="card-footer text-center bg-transparent">
                 <a href="https://www.google.com.ec/maps/place/SOYSOFTWARE/@-1.0495802,-78.5874903,15z/data=!4m5!3m4!1s0x0:0x4df497e4f888b608!8m2!3d-1.0495802!4d-78.5874903" target="_blank">
                     <img src="{{ asset('img/mapa.png') }}" class="img-fluid" alt="">VER MAPA
                 </a>
              </div>
          </div>


        </div>
    </div>
</div>

    

</div>
@endsection
