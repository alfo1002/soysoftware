<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('head')
    {{-- añadir mas archivos --}}
    <link rel="stylesheet" href="{{ asset('css/apps.css') }}">

    {{-- file input --}}
    <link href="{{ asset('plus/bootstrap-fileinput/css/fileinput.min.css') }}" media="all" rel="stylesheet" type="text/css" />
    <script src="{{asset('plus/bootstrap-fileinput/js/plugins/piexif.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('plus/bootstrap-fileinput/js/plugins/sortable.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('plus/bootstrap-fileinput/js/plugins/purify.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('plus/bootstrap-fileinput/js/fileinput.min.js') }}"></script>
    <script src="{{ asset('plus/bootstrap-fileinput/themes/fas/theme.min.js') }}"></script>
    <script src="{{ asset('plus/bootstrap-fileinput/js/locales/es.js') }}"></script>

    {{-- jscroll --}}
    <script src="{{ asset('plus/jscroll/jquery.jscroll.min.js') }}"></script>

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

        @if ($errors->any())
            <div class="alert alert-danger border-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
        @yield('content')
    </main>
    
    
    @include('footer')
</body>
</html>
