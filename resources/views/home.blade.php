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

              <a  href="https://github.com/soy-software/soysoftware" target="_blank" class="btn btn-elegant btn-block btn-lg mt-2">
                Quiero colaborar en Proyecto de Punto de Venta.. <i class="fab fa-github mr-3"></i>
              </a>
        </div>
    </div>

    <div class="alert alert-primary mt-2 border-primary" role="alert">
        <div class="row">
          <div class="col-md-2">
            <img src="{{ asset('img/programador.svg') }}" alt="" class="img-fluid" width="120px;">
          </div>
          <div class="col-md-10">
            <h1>Hey.! TÚ. </h1>
            <p class="text-dark">
              <strong>
               Si tú {{ Auth::user()->name }} te gustaría formar parte de nosotros y colaborar en algunos de nuestros magníficos proyectos..?
               
              </strong>
              <br>
              A continuación te presentamos un proyecto por el cual puedes iniciar y conocer gente maravillosa que ya están trabajando con nosotros.
            </p>    
          </div>
        </div>
        
    </div>
    <div class="row justify-content-center">

      <div class="col-md-12">
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="{{ asset('files/puntoDeVenta.pdf') }}" allowfullscreen></iframe>
      </div>
      </div>
    </div>
</div>

@endsection
