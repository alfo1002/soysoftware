@extends('layouts.app',['title'=>'Crear nueva empresa'])

@section('content')

<div class="container">
  <form action="{{ route('guardarEmpresa') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card">
      <div class="card-header">
        CREAR NUEVA EMPRESA
      </div>
      <div class="card-body">
       
          <div class="md-form md-outline form-lg">
              <input id="nombre" type="text" class="form-control form-control-lg{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" value="{{ old('nombre') }}" required autofocus>
              <label for="nombre" class="">Nombre de la empresa</label>

              @if ($errors->has('nombre'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('nombre') }}</strong>
                  </span>
              @endif
          </div>


          <div class="md-form md-outline form-lg">
              <input id="propietario" type="text" class="form-control form-control-lg{{ $errors->has('propietario') ? ' is-invalid' : '' }}" name="propietario" value="{{ old('propietario',Auth::user()->name) }}" required >
              <label for="propietario" class="">Propietario</label>

              @if ($errors->has('propietario'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('propietario') }}</strong>
                  </span>
              @endif
          </div>

          
          <div class="md-form md-outline form-lg">
              <input id="ruc" type="text" class="form-control form-control-lg{{ $errors->has('ruc') ? ' is-invalid' : '' }}" name="ruc" value="{{ old('ruc') }}" required >
              <label for="ruc" class="">RUC (Registro Único de Contribuyentes)</label>

              @if ($errors->has('ruc'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('ruc') }}</strong>
                  </span>
              @endif
          </div>


           <div class="md-form md-outline form-lg">
              <textarea id="direccion" class="form-control form-control-lg{{ $errors->has('direccion') ? ' is-invalid' : '' }}" name="direccion" required>{{ old('direccion') }}</textarea>
              <label for="direccion" class="">Dirección</label>

              @if ($errors->has('direccion'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('direccion') }}</strong>
                  </span>
              @endif
          </div>



          <div class="md-form md-outline form-lg">
              <input id="telefono" type="number" class="form-control form-control-lg{{ $errors->has('telefono') ? ' is-invalid' : '' }}" name="telefono" value="{{ old('telefono') }}" required >
              <label for="telefono" class="">Teléfono</label>

              @if ($errors->has('telefono'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('telefono') }}</strong>
                  </span>
              @endif
          </div>

          <div class="md-form md-outline form-lg">
              <input id="celular" type="number" class="form-control form-control-lg{{ $errors->has('celular') ? ' is-invalid' : '' }}" name="celular" value="{{ old('celular') }}">
              <label for="celular" class="">Celular</label>

              @if ($errors->has('celular'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('celular') }}</strong>
                  </span>
              @endif
          </div>
      


          <div class="md-form md-outline form-lg">
              <input id="email" type="email" class="form-control form-control-lg{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email',Auth::user()->email) }}">
              <label for="email" class="">Email</label>

              @if ($errors->has('email'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
          </div>
          


           <div class="md-form md-outline form-lg">
              <textarea id="descripcion" class="form-control form-control-lg{{ $errors->has('descripcion') ? ' is-invalid' : '' }}" name="descripcion">{{ old('descripcion') }}</textarea>
              <label for="descripcion" class="">Descripción</label>

              @if ($errors->has('descripcion'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('descripcion') }}</strong>
                  </span>
              @endif
          </div>

          <input type="file" name="foto" id="foto" >



      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-deep-purple">Crear</button>
        <a href="{{ route('misEmpresas') }}" class="btn btn-unique">Cancelar</a>
      </div>
    </div>
  </form>
</div>

<script>
  $("#foto").fileinput(
    {
      browseClass: "btn btn-primary btn-block",
      showCaption: false,
      showRemove: false,
      showUpload: false,
      browseLabel: "Selecionar imagén",
      browseIcon: "<i class='fas fa-image'></i> ",
      allowedFileTypes: ["image"],
      language: "es",
      theme: "fas",
     
    }
  );
</script>

@endsection
