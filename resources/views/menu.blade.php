<div class="container-fluid">
    <!-- Brand -->
    <a class="navbar-brand logo" href="{{ url('/') }}">
      <img src="{{ asset('img/logo.svg') }}" height="30" class="d-inline-block align-top"
        alt="mdb logo">{{ config('app.name', 'SOYSOFTWARE') }}<sup class="marca">&reg;</sup>
    </a>
    <!-- Collapse -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Links -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <!-- Left -->
      <ul class="navbar-nav mr-auto">
        @guest
        @else
          {{-- añadir menus cuando estelogin --}}
          <li class="nav-item">
              <a class="nav-link" href="{{ route('misEmpresas') }}" >Mis Empresas</a>
          </li>
        @endguest
      </ul>

      <!-- Right -->
      <ul class="navbar-nav nav-flex-icons">
        

        @guest
           

            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}" >{{ __('Ingresar') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                </li>
            @endif
           
        @else
            <li class="nav-item">
              <a href="{{ url('/') }}"  class="nav-link">
                <i class="fas fa-home"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('home') }}" class="nav-link">
                <i class="fas fa-laptop"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('SALIR') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest


      </ul>

    </div>

  </div>