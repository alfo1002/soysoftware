@extends('layouts.app',['title'=>'Bienvenido'])

@section('content')

<div class="container">

<div class="row">
  <div class="col-md-6">
    <form action="{{ route('actualizarEmpresa') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $e->id }}">
    <div class="card">
      <div class="card-header">
        DATOS DE  EMPRESA
      </div>
      <div class="card-body">
       
          <div class="md-form md-outline form-lg">
              <input id="nombre" type="text" class="form-control form-control-lg{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" value="{{ old('nombre',$e->nombre) }}" required autofocus>
              <label for="nombre" class="">Nombre de la empresa</label>

              @if ($errors->has('nombre'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('nombre') }}</strong>
                  </span>
              @endif
          </div>


          <div class="md-form md-outline form-lg">
              <input id="propietario" type="text" class="form-control form-control-lg{{ $errors->has('propietario') ? ' is-invalid' : '' }}" name="propietario" value="{{ old('propietario',$e->propietario) }}" required >
              <label for="propietario" class="">Propietario</label>

              @if ($errors->has('propietario'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('propietario') }}</strong>
                  </span>
              @endif
          </div>

          
          <div class="md-form md-outline form-lg">
              <input id="ruc" type="text" class="form-control form-control-lg{{ $errors->has('ruc') ? ' is-invalid' : '' }}" name="ruc" value="{{ old('ruc',$e->ruc) }}" required >
              <label for="ruc" class="">RUC (Registro Único de Contribuyentes)</label>

              @if ($errors->has('ruc'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('ruc') }}</strong>
                  </span>
              @endif
          </div>


           <div class="md-form md-outline form-lg">
              <textarea id="direccion" class="form-control form-control-lg{{ $errors->has('direccion') ? ' is-invalid' : '' }}" name="direccion" required>{{ old('direccion',$e->direccion) }}</textarea>
              <label for="direccion" class="">Dirección</label>

              @if ($errors->has('direccion'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('direccion') }}</strong>
                  </span>
              @endif
          </div>



          <div class="md-form md-outline form-lg">
              <input id="telefono" type="number" class="form-control form-control-lg{{ $errors->has('telefono') ? ' is-invalid' : '' }}" name="telefono" value="{{ old('telefono',$e->telefono) }}" required >
              <label for="telefono" class="">Teléfono</label>

              @if ($errors->has('telefono'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('telefono') }}</strong>
                  </span>
              @endif
          </div>

          <div class="md-form md-outline form-lg">
              <input id="celular" type="number" class="form-control form-control-lg{{ $errors->has('celular') ? ' is-invalid' : '' }}" name="celular" value="{{ old('celular',$e->celular) }}">
              <label for="celular" class="">Celular</label>

              @if ($errors->has('celular'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('celular') }}</strong>
                  </span>
              @endif
          </div>
      


          <div class="md-form md-outline form-lg">
              <input id="email" type="email" class="form-control form-control-lg{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email',$e->email) }}">
              <label for="email" class="">Email</label>

              @if ($errors->has('email'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
          </div>
          


           <div class="md-form md-outline form-lg">
              <textarea id="descripcion" class="form-control form-control-lg{{ $errors->has('descripcion') ? ' is-invalid' : '' }}" name="descripcion">{{ old('descripcion',$e->descripcion) }}</textarea>
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
        <button type="submit" class="btn btn-deep-purple">Actualizar</button>
      </div>
    </div>
  </form>    
  </div>
  <div class="col-md-6 modulos">
     
    <button type="button" class="btn btn-elegant">Actualizar</button>

    <button type="button" class="btn btn-unique">Clientes</button>

    <button type="button" class="btn btn-purple">Proveedores</button>

    <button type="button" class="btn btn-deep-purple">Categoria de productos</button>

    <button type="button" class="btn btn-indigo">Productos</button>

    <button type="button" class="btn btn-dark-green">Ventas</button>
  
  </div>
</div>

</div>



<script>
  
  var url1="{{ Storage::url('public/empresas/'.$e->foto) }}";
  
  console.log(url1+"ok")
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

      initialPreview: [url1],
        initialPreviewAsData: true,
        initialPreviewConfig: [
            {caption: "{{ $e->nombre }}", downloadUrl: url1, size: 930321, width: "100%", key: 1}
        ],
        overwriteInitial: false,
        initialCaption: "{{ $e->nombre }}"
     
    }
  );
</script>
@endsection
