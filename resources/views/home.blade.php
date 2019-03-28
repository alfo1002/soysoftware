@extends('layouts.app',['title'=>'Bienvenido'])

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info">
                    <img src="{{ asset('img/bienvenido.jpg') }}" class="card-img-top img-fluid" alt="">
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h5 class="text-center">BIENVENIDO {{ Auth::user()->email }}</h5>

                </div>

            </div>
        </div>
        <div class="col-md-4">
            <!-- Jumbotron -->
              <div class="card blue-gradient py-2" id="intro">

                <!-- Content -->
                <div class="card-body text-white text-center">

                  <h2 class="mb-4 font-weight-bold">
                    GRACIAS POR FORMAR PARTE DE NOSOTROS
                  </h2>
                  <p class="mb-4">
                    <strong>
                        Estamos trabajando duro, para brindarte los mejores productos y servicios.
                    </strong><br>
                    <small>Necesitas conocer algunos de nuestros grandiosos productos. Por favor empieza..</small>
                  </p>

                  <a href="{{ route('contactos') }}" class="btn btn-outline-white btn-rounded">
                    ESCRIBIENDONOS
                    <i class="fas fa-pencil-alt ml-2"></i>
                  </a>

                </div>
                <!-- Content -->

              </div>
              <!-- Jumbotron -->
        </div>
    </div>
</div>

@endsection
