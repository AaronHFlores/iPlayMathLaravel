<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>iPlayMath</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('img/iPM/img/logo_icon.png') }}" rel="icon">
  <link href="{{ asset('img/iPM/img/logo_icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@400;500;600;700&amp;family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,300&amp;display=swap" rel="stylesheet">

  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet"> -->

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendors/iPM/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('vendors/iPM/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendors/iPM/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('vendors/iPM/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendors/iPM/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <script src="/lib/jquery-1.12.2.min.js"></script>

  <!-- FontAwesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

  <link href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet"  integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/iPM/css/styles.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: TheEvent - v4.7.0
  * Template URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main id="main">
    <section id="about-test">
      <div class="container" data-aos="fade-up">
        <!-- <div class="dropdown ">
          <a class="dropdown-toggle nav-link user-link" id="UserDropdown" href="#" data-bs-toggle="dropdown">
            <span class="user-img"><img class="rounded-circle" src="{{ Auth::user()->profile_photo_url }}" width="40" alt="{{ Auth::user()->name }}">
            <span>{{ Auth::user()->name }}</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <div class="dropdown-header text-center ">
              <img class="rounded-circle" src="{{ Auth::user()->profile_photo_url }}" width="40" alt="{{ Auth::user()->name }}">
              <p class="mb-1 mt-3 text-muted font-weight-semibold">{{ Auth::user()->name }}</p>
              <p class="fw-light text-muted mb-0">{{ Auth::user()->email }}</p>
            </div>
            <a style="color: blue"class="dropdown-item" href="/">
                Mi Perfil
            </a>    
            <form method="POST" action="{{ route('logout') }}">
              @csrf 
              <a style="color: darkred" class="dropdown-item" href="{{ route('logout') }}" 
                onclick="event.preventDefault(); this.closest('form').submit();">Cerrar Sesión 
              </a>                         
            </form>
          </div>
        </div> -->
        <div class="row">
          <div class="col-md-12">
            <h2>{{ $primarySixth->question }}</h2>
            <hr>
          </div>
        </div>
        
        <div class="row">
          <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-secondary">
              Omitir Pregunta 
              <span class="fa fa-step-forward"  aria-hidden="true"></span>
            </button>
          </div>
          <div class="img-container d-flex justify-content-center">
            <img id="img-question" src="{{$primarySixth->image}}" alt="">
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <button type="button" class="button grow_box" id="btn1">
              <img class="img-button" src="{{$primarySixth->firstAnswer}}" alt="Boton_1"/>
            </button>
          </div>
          <div class="col-md-6 col-sm-6">
            <button class="button grow_spin" id="btn2">
              <img class="img-button" src="{{$primarySixth->secondAnswer}}" alt="Boton_2"/>
            </button>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <!-- <button class="button grow_spin" id="btn3">
              <img class="img-button" src="{{$primarySixth->thirdAnswer}}" alt="Boton_3"/>
            </button> -->

            <button class="button grow_spin" data-bs-toggle="modal" data-bs-target="#test-error-modal" id="btn3">Opcion 3</button>
          </div>
          <div class="col-md-6 col-sm-6">
            <!-- <button class="button grow_box" id="btn4">
              <img class="img-button" src="{{$primarySixth->quarterAnswer}}" alt="Boton_4"/>
            </button> -->
            <!-- <button type="submit" class="button" id="btn4">Opcion 4</button> -->
            <button class="button grow_box" data-bs-toggle="modal" data-bs-target="#test-correct-modal"  id="btn4">Opcion 4</button>
            
          </div>
        </div>
      </div>
      <!-- Modal Order Form -->
      <div id="test-correct-modal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered " role="document">
          <div class="modal-content ">
            <div class="modal-header">
              <h4 class="modal-title">Respuesta Correcta 😃</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                  <i class="fa fa-circle-check"></i>
                </div>
                <div class="text-center mt-3">
                  <button type="submit" id="btn5" data-bs-dismiss="modal" aria-label="Close">Aceptar</button>
                </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.modal -->

      <!-- Modal Order Form -->
      <div id="test-error-modal" class="modal fade"a>
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content ">
            <div class="modal-header">
              <h4 class="modal-title">Respuesta Incorrecta 😥</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                  <i class="fa fa-xmark"></i>
                  <span>Intentalo de Nuevo</span>
                </div>
                <div class="text-center mt-3">
                  <button type="submit" id="btn6" data-bs-dismiss="modal" aria-label="Close">Aceptar</button>
                </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.modal -->
    </section>
  </main>

  <!-- ======= Footer ======= -->
  <!-- <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <img src="{{ asset('img/iPM/img/logo_white_large.png') }}" alt="iPlayMath">
          </div> -->

          <!-- <div class="col-lg-6 col-md-6 footer-links">
            <div class="copyright">
              &copy; Copyright <strong>iPlayMath</strong>. All Rights Reserved
            </div>
          </div> -->
        <!-- </div>
      </div>
    </div>
  </footer> -->
  <!-- End  Footer -->
  <!-- <script>
    // $(document).ready(function(){
    //   $("#btn1").click(function(){
    //       $("test-error-modal").modal();
    //   });
    // });
    $('#test-error-modal').modal();

  </script> -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="https://code.jquery.com/jquery-latest.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js "></script>
  <!-- Vendor JS Files -->
  <script src="{{ asset('vendors/iPM/vendor/aos/aos.js ') }}"></script>
  <script src="{{ asset('vendors/iPM/vendor/bootstrap/js/bootstrap.bundle.min.js ') }}"></script>
  <script src="{{ asset('vendors/iPM/vendor/glightbox/js/glightbox.min.js ') }}"></script>
  <script src="{{ asset('vendors/iPM/vendor/swiper/swiper-bundle.min.js ') }}"></script>
  <script src="{{ asset('vendors/iPM/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/iPM/js/main.js') }}"></script>

</body>

</html>