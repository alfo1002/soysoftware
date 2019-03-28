<!--Footer-->
  <footer class="page-footer text-center indigo font-small mt-4 wow fadeIn">
    @guest
    <!--Call to action-->
    <div class="pt-4">
      <img src="{{ asset('img/logo.svg') }}" class="img-fluid" alt="" width="120px;">
        <h1 class="mb-0 logo">SOYSOFTWARE<sup class="marca">&reg;</sup></h1>
        <p class="mt-0">EMPRESA DESARROLLADORA DE SOFTWARE</p>
    </div>
    <!--/.Call to action-->

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
      <a href="https://www.facebook.com/soysoftware/" target="_blank">
        <i class="fab fa-facebook-f mr-3"></i>
      </a>

      <a href="https://twitter.com/soysoftware" target="_blank">
        <i class="fab fa-twitter mr-3"></i>
      </a>

      <a href="https://www.youtube.com/channel/UCM62GzCZxd3pZbUmlpI5-Yg?view_as=subscriber" target="_blank">
        <i class="fab fa-youtube mr-3"></i>
      </a>

        <a href="https://www.instagram.com/soysoftware/" target="_blank">
        <i class="fab fa-instagram mr-3"></i>
      </a>
      <a href="https://github.com/soy-software" target="_blank">
        <i class="fab fa-github mr-3"></i>
      </a>

      <a href="https://www.google.com.ec/maps/place/SOYSOFTWARE/@-1.0495802,-78.5874903,15z/data=!4m5!3m4!1s0x0:0x4df497e4f888b608!8m2!3d-1.0495802!4d-78.5874903" target="_blank">
          <i class="fas fa-map-marker-alt"></i>
      </a>

      
    </div>
    <!-- Social icons -->
    @endguest


    <!--Copyright-->
    <div class="footer-copyright py-3">
      Derechos reservados © {{ date('Y') }} Copyright:
      <a href="{{ url('/') }}" > soysoftware.com </a>

    </div>
    <!--/.Copyright-->

  </footer>
<!--/.Footer-->
  

  @guest
    <a href="{{ route('contactos') }}" class="float btn-pink" data-toggle="tooltip" data-placement="left" title="Escribenos">
      <i class="fas fa-pencil-alt fa-2x my-float"></i>
    </a>
  @endguest

  <!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.5/js/mdb.min.js"></script>
<script>
    $('[data-toggle="tooltip"]').tooltip()
</script>