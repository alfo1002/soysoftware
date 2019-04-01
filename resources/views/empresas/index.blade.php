@extends('layouts.app',['title'=>'Bienvenido'])

@section('content')
<style>
  .md-v-line {
position: absolute;
border-left: 1px solid rgba(0,0,0,.125);
height: 50px;
top:0px;
left:54px;
}
</style>

<div class="container">
  <div class="md-form input-group mb-3">
    <input type="text" class="form-control" placeholder="Buscar empresa por nombre,ruc,propietario" aria-label="Recipient's username"
      aria-describedby="MaterialButton-addon2">
    <div class="input-group-append">
      <button class="btn btn-md btn-outline-elegant m-0 px-3" type="button" id="MaterialButton-addon2">Buscar</button>
    </div>
</div>


    <div class="list-group">
    @foreach($emp as $e)
      <a href="{{ route('infoEmpresa',$e->id) }}" class="list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex w-100 justify-content-between">
          <h5 class="mb-2 h5">
            {{ $e->nombre }} {{ $e->id }}
          </h5>
          <small class="text-muted">
           <strong>Creado el:</strong> {{ $e->created_at }} <br>{{ $e->created_at->diffForHumans() }}
          </small>

        </div>
        <p class="mb-2">
          {{ $e->descripcion}}
        </p>
        <small class="text-muted">
          Ruc: {{ $e->ruc }}
        </small>
      </a>
      @endforeach   
    {{ $emp->links() }}   
  </div>
      

</div>

<a href="{{ route('crearEmpresa') }}" class="float btn-pink" data-toggle="tooltip" data-placement="left" title="Crear nueva empresa">
      <i class="fas fa-pencil-alt fa-2x my-float"></i>
</a>

<script type="text/javascript">
    $('ul.pagination').hide();
    $(function() {
        $('.list-group').jscroll({
            autoTrigger: true,
            loadingHtml: '<img class="center-block" src="{{ asset('img/cargando.gif') }}" alt="Loading..." />',
            padding: 0,
            nextSelector: '.pagination li.active + li a',
            contentSelector: 'div.list-group',
            callback: function() {
                $('ul.pagination').remove();
            }
        });
    });
</script>
@endsection
