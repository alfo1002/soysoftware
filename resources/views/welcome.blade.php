<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    @include('head')
    {{-- añadir mas archivos --}}
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">  
  </head>
<body>
  
  {{-- compartir con facebook --}}
  <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.2&appId=1026388980848745&autoLogAppEvents=1"></script>

  <header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
      @include('menu')
    </nav>
    <!-- Navbar -->

    <!--Carousel Wrapper-->
    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
      </ol>
      <!--/.Indicators-->

      <!--Slides-->
      <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">
          <div class="view" style="background-image: url({{ asset('img/carausel/img-0.png') }}); background-repeat: no-repeat; background-size: cover;">

            <!-- Mask & flexbox options-->
            <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

              <!-- Content -->
              <div class="text-center white-text mx-5 wow fadeIn">
                <h1 class="mb-4">
                  <strong>Bienvenido</strong>
                </h1>

                <p class="text-default">
                  <strong>Empresa desarrolladora de software</strong>
                </p>

                <p class="mb-4 d-none d-md-block">
                  <strong>"Más de {{ isoft\User::count() }} usuarios usan nuestro productos.."</strong>
                </p>

                <a  href="{{ route('contactos') }}" class="btn btn-outline-white btn-lg">
                    Escribenos
                  <i class="fas fa-pencil-alt ml-2"></i>

                </a>
              </div>
              <!-- Content -->

            </div>
            <!-- Mask & flexbox options-->

          </div>
        </div>
        <!--/First slide-->

        <!--Second slide-->
        <div class="carousel-item">
          <div class="view" style="background-image: url({{ asset('img/carausel/img-2.png') }}); background-repeat: no-repeat; background-size: cover;">

            <!-- Mask & flexbox options-->
            <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

              <!-- Content -->
              <div class="text-center white-text mx-5 wow fadeIn">
                <h1 class="mb-4">
                  <strong>Qué hacemos</strong>
                </h1>

                <p class="text-warning">
                  <strong>Creamos nuevos productos digitales de calidad valiosa todos los días. </strong>
                </p>

                <p class="mb-4 d-none d-md-block">
                  <strong>
                      "Traemos un enfoque personal y efectivo a cada proyecto en el que trabajamos,<br> y es por eso que nuestros clientes nos aman"
                  </strong>
                </p>

               <div class="fb-share-button" data-href="https://soysoftware.com/" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fsoysoftware.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>
              </div>
              <!-- Content -->

            </div>
            <!-- Mask & flexbox options-->

          </div>
        </div>
        <!--/Second slide-->

        <!--Third slide-->
        <div class="carousel-item">
          <div class="view" style="background-image: url({{ asset('img/carausel/img-1.png') }}); background-repeat: no-repeat; background-size: cover;">

            <!-- Mask & flexbox options-->
            <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

              <!-- Content -->
              <div class="text-center white-text mx-5 wow fadeIn">
                <h1 class="mb-4">
                  <strong>Regístrate gratis</strong>
                </h1>

                <p>
                  <strong>Únete a nuestra comunidad de más de {{ isoft\User::count() }} de usuarios.</strong>
                </p>

                <p class="mb-4 d-none d-md-block text-success">
                  <strong>
                      "Para obtener las últimas primicia en tu bandeja de entrada"
                  </strong>
                </p>

                <a  href="{{ route('contactos') }}" class="btn btn-outline-white btn-lg">
                    Escribenos
                  <i class="fas fa-pencil-alt ml-2"></i>

                </a>
              </div>
              <!-- Content -->

            </div>
            <!-- Mask & flexbox options-->

          </div>
        </div>
        <!--/Third slide-->

      </div>
      <!--/.Slides-->

      <!--Controls-->
      <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <!--/.Controls-->

    </div>
    <!--/.Carousel Wrapper-->

  </header>

  <!--Main layout-->
  <main>
    <div class="container">

      <!--Section: Main info-->
      <section class="mt-5 wow fadeIn">

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <img src="{{ asset('img/acerca/acerca.png') }}" class="img-fluid " alt="">

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <!-- Main heading -->
            <h3 class="h3 mb-3 logo">
                {{ config('app.name', 'SOYSOFTWARE') }}<sup class="marca">&reg;</sup>
            </h3>
            <p class="text-justify">
                Soysoftware es un lugar en donde concentramos toda la creatividad y pasión de programadores, planificadores , estrategas , diseñadores, y genios matemáticos, licenciados entre otros colaboradores para poder crear el mejor software para cubrir las necesidades de nuestros clientes.
            </p>
            <p>
                Construimos confianza.
            </p>
            <!-- Main heading -->

            <hr>

            <p>
              <strong>
                  Más de {{ isoft\User::count() }} usuarios usan nuestro productos..
              </strong>
            </p>


          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Main info-->

      <hr class="my-5">

      <!--Section: Main features & Quick Start-->
      <section id="nosotros">

        <h3 class="h3 text-center mb-5">Acerca de nosotros</h3>

        <!--Grid row-->
        <div class="row wow fadeIn">

          <div class="col-md-12">
              <!-- Card group -->
                <div class="card-group">

                  <!-- Card -->
                    <div class="card card-image" style="background-image: url({{ asset('img/acerca/somos.png') }});background-repeat: no-repeat;background-size: cover; ">

                      <!-- Content -->
                      <div class="text-dark text-center d-flex align-items-center rgba-yellow-strong py-5 px-4 ">
                        <div>
                          
                          <h3 class="card-title pt-2"><strong>
                              ¿Quiénes somos?
                          </strong></h3>
                          <p class="text-justify border-bottom border-dark">
                              <strong>Somos una empresa dedicada al desarrollo de software nuestro objetivo es incrementar la competitividad de nuestros clientes, ofreciéndoles productos y servicios adecuados y adaptados a su sistema de gestión, que les permita diferenciarse de la competencia.</strong>
                          </p>
                          
                        </div>
                      </div>

                    </div>
                    <!-- Card --><!-- Card -->
                    <div class="card card-image" style="background-image: url({{ asset('img/acerca/hacemos.jpg') }});">

                      <!-- Content -->
                      <div class="text-dark text-center d-flex align-items-center rgba-blue-strong py-5 px-4">
                        <div>
                          
                          <h3 class="card-title pt-2"><strong>¿Qué hacemos?</strong></h3>
                          <p class="text-justify border-bottom border-dark">
                            <strong>
                              Charlamos con una tasa de café, Análisis, Diseño, Prototipo, desarrollo, implementación, formación y soporte de soluciones informáticos. Publicidad digital empresarial y personal para expandir en el Internet, aprovechamos los servicios de la redes sociales para llegar a todos los lugares.
                            </strong>
                          </p>
                          
                        </div>
                      </div>

                    </div>
                    <!-- Card --><!-- Card -->
                    <div class="card card-image" style="background-image: url({{ asset('img/acerca/como.png') }}); background-repeat: no-repeat;background-size: cover; ">

                      <!-- Content -->
                      <div class="text-dark text-center d-flex align-items-center rgba-red-strong py-5 px-4">
                        <div>
                          
                          <h3 class="card-title pt-2"><strong>¿Cómo trabajamos?</strong></h3>
                          <p class="text-justify border-bottom border-dark">
                              <strong>
                                Escuchamos sus inquietudes con el fin de mejorar nuestros productos, adaptándolos a las necesidades de cada sector. Desarrollamos nuestras soluciones de gestión incorporando últimas tecnologías, entendiendo nuestra labor como un proceso de mejora continua.
                              </strong>
                          </p>
                          
                        </div>
                      </div>

                    </div>
                    <!-- Card -->

                </div>
                <!-- Card group -->
          </div>

        </div>
        <!--/Grid row-->

      </section>
      <!--Section: Main features & Quick Start-->

      <hr class="my-5">

      <!--Section: Not enough-->
      <section id="servicios">

        <h2 class="my-5 h3 text-center">Servicios</h2>

        <!--First row-->
        <div class="row features-small mb-5 mt-3 wow fadeIn">

          <!--First column-->
          <div class="col-md-4">
            <!--First row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title"><strong>APLICACIONES WEB</strong></h6>
                <p class="text-justify">
                    Hoy día los usuarios buscan más que información en un sitio web. Desean tener sistemas a su disposición para satisfacer rápidamente y en cualquier momento alguna necesidad especifica.
                </p>
                <div style="height:15px"></div>
              </div>
            </div>
            <!--/First row-->

            <!--Second row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title"><strong>APLICACIONES MÓVIL</strong></h6>
                <p class="text-justify">
                    Si antes se decía que una empresa no existía si no contaba con su propio sitio web, en la actualidad es de gran importancia que los clientes lo tengan en su dispositivo móvil permitiendo que la información sea mucho más accesible.
                </p>
                <div style="height:15px"></div>
              </div>
            </div>
            <!--/Second row-->

          </div>
          <!--/First column-->

          <!--Second column-->
          <div class="col-md-4 flex-center">
            <img src="{{ asset('img/acerca/servicios.png') }}" alt="MDB Magazine Template displayed on iPhone"
              class="z-depth-0 img-fluid">
          </div>
          <!--/Second column-->

          <!--Third column-->
          <div class="col-md-4 mt-2">
            <!--First row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title"><strong>APLICACIONES ARDUINO</strong></h6>
                <p class="text-justify">
                    Arduino cada vez se está implantando más y más en la industria y no solo como una herramienta de prototipado, sino que los sistemas de control (autómatas) se están abriendo cada vez más.
                </p>
                <div style="height:15px"></div>
              </div>
            </div>
            <!--/First row-->

            <!--Second row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-check-circle fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h6 class="feature-title"><strong>ASESORÍA Y CONSULTORÍA INFORMÁTICA</strong></h6>
                <p class="text-justify">
                    Ofrecemos servicios de consultoría en cualquier fase del proyecto. Ponemos a tu disposición a todo nuestro equipo de expertos desarrolladores y diseñadores para guiarte en lo que necesite.
                </p>
                <div style="height:15px"></div>
              </div>
            </div>
            <!--/Second row-->

            
          </div>
          <!--/Third column-->

        </div>
        <!--/First row-->

      </section>
      <!--Section: Not enough-->

      <hr class="mb-5">

      <!--Section: More-->
      <section>

        <h2 class="my-5 h3 text-center">... y aún más</h2>

        <!--First row-->
        <div class="row features-small mt-5 wow fadeIn">

          <!--Grid column-->
          <div class="col-xl-3 col-lg-6">
            <!--Grid row-->
            <div class="row">
              <div class="col-2">
                <i class="fab fa-firefox fa-2x mb-1 indigo-text" aria-hidden="true"></i>
              </div>
              <div class="col-10 mb-2 pl-3">
                <h5 class="feature-title font-bold mb-1"><strong>Compatibilidad entre navegadores</strong></h5>
                <p class=mt-2">
                    Chrome, Firefox, IE, Safari, Opera, Microsoft Edge, enter otros dispositivos que tengan acceso a internet.
                </p>
              </div>
            </div>
            <!--/Grid row-->
          </div>
          <!--/Grid column-->

          <!--Grid column-->
          <div class="col-xl-3 col-lg-6">
            <!--Grid row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-level-up-alt fa-2x mb-1 indigo-text" aria-hidden="true"></i>
              </div>
              <div class="col-10 mb-2">
                <h5 class="feature-title font-bold mb-1"><strong>Actualizaciones frecuentes</strong></h5>
                <p class="mt-2">
                    Mejora cada mes. Nos encanta el proyecto y lo mejoramos tanto como sea posible.
                </p>
              </div>
            </div>
            <!--/Grid row-->
          </div>
          <!--/Grid column-->

          <!--Grid column-->
          <div class="col-xl-3 col-lg-6">
            <!--Grid row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-comments fa-2x mb-1 indigo-text" aria-hidden="true"></i>
              </div>
              <div class="col-10 mb-2">
                <h5 class="feature-title font-bold mb-1"><strong>Comunidad activa</strong></h5>
                <p class="mt-2">
                    Nuestra sociedad crece día a día. Visite nuestro foro y vea cómo es ser parte de nuestra familia.
                </p>
              </div>
            </div>
            <!--/Grid row-->
          </div>
          <!--/Grid column-->

          <!--Grid column-->
          <div class="col-xl-3 col-lg-6">
            <!--Grid row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-code fa-2x mb-1 indigo-text" aria-hidden="true"></i>
              </div>
              <div class="col-10 mb-2">
                <h5 class="feature-title font-bold mb-1"><strong>Innovación</strong></h5>
                <p class="mt-2">
                    Estamos todos los días investigando y creando nuevas herramientas tecnológicas para agilitar el proceso informático
                </p>
              </div>
            </div>
            <!--/Grid row-->
          </div>
          <!--/Grid column-->

        </div>
        <!--/First row-->

        <!--Second row-->
        <div class="row features-small mt-4 wow fadeIn">

          <!--Grid column-->
          <div class="col-xl-3 col-lg-6">
            <!--Grid row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-cubes fa-2x mb-1 indigo-text" aria-hidden="true"></i>
              </div>
              <div class="col-10 mb-2">
                <h5 class="feature-title font-bold mb-1"><strong>Dominio y hosting</strong></h5>
                <p class="mt-2">
                    Tienes listo tu aplicación.! Que esperas para poner en Internet para hacer visible a todo el mundo.
                </p>
              </div>
            </div>
            <!--/Grid row-->
          </div>
          <!--/Grid column-->

          <!--Grid column-->
          <div class="col-xl-3 col-lg-6">
            <!--Grid row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-question fa-2x mb-1 indigo-text" aria-hidden="true"></i>
              </div>
              <div class="col-10 mb-2">
                <h5 class="feature-title font-bold mb-1"><strong>Soporte técnico</strong></h5>
                <p class="mt-2">Nos preocupamos por la fiabilidad. Si tiene alguna pregunta, no dude en ponerse en contacto con nosotros.
                </p>
              </div>
            </div>
            <!--/Grid row-->
          </div>
          <!--/Grid column-->

          <!--Grid column-->
          <div class="col-xl-3 col-lg-6">
            <!--Grid row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-th fa-2x mb-1 indigo-text" aria-hidden="true"></i>
              </div>
              <div class="col-10 mb-2">
                <h5 class="feature-title font-bold mb-1"><strong>Publicidad</strong></h5>
                <p class="mt-2">
                    Expande la información de tu marca para extender tu presencia digital y generar visibilidad para tu negocio en los portales de mayor búsqueda en Internet.
                </p>
              </div>
            </div>
            <!--/Grid row-->
          </div>
          <!--/Grid column-->

          <!--Grid column-->
          <div class="col-xl-3 col-lg-6">
            <!--Grid row-->
            <div class="row">
              <div class="col-2">
                <i class="far fa-file-code fa-2x mb-1 indigo-text" aria-hidden="true"></i>
              </div>
              <div class="col-10 mb-2">
                <h5 class="feature-title font-bold mb-1"><strong>Cursos y más</strong></h5>
                <p class="mt-2">
                    El tiempo no es escusa para la superación por eso hemos preocupado y realizamos Cursos, talleres, eventos, clases, etc. para fortalecer sus conocimientos en la área informática.
                </p>
              </div>
            </div>
            <!--/Grid row-->
          </div>
          <!--/Grid column-->

        </div>
        <!--/Second row-->

      </section>
      <!--Section: More-->

    </div>
  </main>
  <!--Main layout-->
  
   

  @include('footer')
</body>
</html>
