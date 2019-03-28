<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('head')
    {{-- añadir mas archivos --}}
    <link rel="stylesheet" href="{{ asset('css/apps.css') }}">
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark deep-purple darken-4">
             @include('menu')
        </nav>
    </header>
            
            
    <main class="my-1">

        @foreach (['success', 'warning', 'info', 'danger'] as $msg)
            @if(Session::has($msg))
                <div class="container">
                <div class="alert alert-{{ $msg }} alert-dismissible fade show border-{{ $msg }}" role="alert">
                  <strong>{{ Session::get($msg) }}</strong>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                </div>
            @endif
        @endforeach
    
        @yield('content')
    </main>
    
    
    @include('footer')
</body>
</html>
