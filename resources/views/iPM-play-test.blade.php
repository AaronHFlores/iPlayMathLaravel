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


  <!-- FontAwesome Icons -->

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
          @if ($primarySixth->type == 4)
          <div class="col-md-6 col-sm-6">
                <!-- <div class="form-group"> -->
            <input type="text" name="name" class="form-control" id="type4" name="type4" placeholder="Respuesta" required="">
          </div>
              <!-- </div> -->
          <div class="col-md-3">
            <button class="button grow_box" onclick="myFunction1()" id="btn1">Aceptar</button>
          </div>
        </div>
        @else
          @if ($primarySixth->type == 5 or $primarySixth->type == 1 )       {{-- Div por si contiene Botones con Imagenes Tipo 5 --}}
          <div class="row">
            @else
              <div class="row">
                @endif
                {{-- Primer Boton --}}
                  @if($primarySixth->type ==3 or $primarySixth->type ==5 or $primarySixth->type == 1)   {{-- En caso de ser de tipo 1, 3 o 5--}}
                    <div class="col-md-6 col-sm-6">
                        @else
                          <div class="col-md-6 col-sm-6">
                            @endif
                            @if($primarySixth->type == 1) {{-- En caso de ser tipo 1 --}}
                            <!-- <div class="custom-control custom-checkbox image-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ck1a">
                                <label class="custom-control-label" for="ck1a">
                                    <img class="imgButton" src="{{ $primarySixth->firstAnswer }}" alt="#"
                                          class="img-fluid">
                                </label>
                            </div> -->
                            @endif
                            @if ($primarySixth->type == 5 )    {{-- Imagen por si es tipo 5   --}}
                            <button class="btn btn-primary" onclick="myFunction1()">
                                <img class="imgButton" src="{{$primarySixth->firstAnswer}}" alt="logo"/>
                                @endif
                                @if($primarySixth->type != 1 and $primarySixth->type != 5)
                                    <button class="btn btn-primary" onclick="myFunction1()">
                                        {{ $primarySixth->firstAnswer }}
                                        @endif
                                    </button>
                                  <button class="button grow_box" id="btn1" onclick="myFunction1()">
                                    {{ $primarySixth->firstAnswer }}
                                        @endif                                  
                                  </button>

                          </div>
                                {{-- Segundo Boton --}}
                                @if($primarySixth->type ==3 or $primarySixth->type ==5 or $primarySixth->type == 1) {{-- En caso de ser de tipo 1 , 3 o 5 --}}
                                <div class="col-md-6 col-lg-6 text-center">
                                    @else
                                        <div class="col-md-6 col-lg-3 text-center">
                                            @endif
                                            @if($primarySixth->type == 1)
                                                <div class="custom-control custom-checkbox image-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="ck2a">
                                                    <label class="custom-control-label" for="ck1a">
                                                        <img class="imgButton" src="{{ $primarySixth->secondAnswer }}"
                                                             alt="#" class="img-fluid">
                                                    </label>
                                                </div>
                                            @endif
                                            @if ($primarySixth->type == 5 )       {{-- Imagen por si es tipo 1 o 5--}}
                                            <button class="btn btn-primary" onclick="myFunction2()">
                                                <img class="imgButton" src="{{ $primarySixth->secondAnswer }}"
                                                     alt="logo"/>
                                                @endif
                                                @if($primarySixth->type != 1 and $primarySixth->type != 5)
                                                    <button class="button grow_box" id="btn1" onclick="myFunction2()">
                                                      {{ $primarySixth->secondAnswer }}
                                                        @endif

                                                    </button>


                                                    <!-- <button class="btn btn-primary" onclick="myFunction2()">
                                                        {{ $primarySixth->secondAnswer }}
                                                        @endif
                                                    </button> -->
                                        </div>
                                        {{-- Tercer Boton --}}
                                        @if (!empty($primarySixth->thirdAnswer) and ($primarySixth->type != 5 and $primarySixth->type != 1))
                                            <div class="col-md-6 col-lg-3 text-center" onclick="myFunction3()">
                                                <button class="btn btn-primary">
                                                    {{ $primarySixth->thirdAnswer }}
                                                </button>
                                            </div>
                                        @endif
                                        {{-- Cuarto Boton --}}
                                        @if (!empty($primarySixth->quarterAnswer) and ($primarySixth->type != 5 and $primarySixth->type != 1))
                                            <div class="col-md-6 col-lg-3 text-center" onclick="myFunction4()">
                                                <button class="btn btn-primary">
                                                    {{ $primarySixth->quarterAnswer }}
                                                </button>
                                            </div>
                                        @endif
                                </div> {{-- Final del Div de Fila de Botones de Opcion --}}
                                @if ($primarySixth->type == 5 or $primarySixth->type == 1)       {{-- Div por si contiene Botones con Imagenes Tipo 5 o 1 --}}
                                <div class="row mb-2 mt-3">
                                    <div class="col-md-6 col-lg-6 text-center">{{-- Botton 3   --}}
                                        @if($primarySixth->type == 1)
                                            <div class="custom-control custom-checkbox image-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck3a">
                                                <label class="custom-control-label" for="ck1a">
                                                    <img class="imgButton" src="{{ $primarySixth->thirdAnswer }}"
                                                         alt="#" class="img-fluid">
                                                </label>
                                            </div>
                                        @else
                                            <button class="btn btn-primary" onclick="myFunction3()">
                                                <img class="imgButton" src="{{ $primarySixth->thirdAnswer }}"
                                                     alt="logo"/>

                                                @endif
                                            </button>
                                    </div>
                                    <div class="col-md-6 col-lg-6 text-center"> {{-- Boton 4 --}}
                                        @if($primarySixth->type == 1)
                                            <div class="custom-control custom-checkbox image-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ck4a">
                                                <label class="custom-control-label" for="ck1a">
                                                    <img class="imgButton" src="{{ $primarySixth->quarterAnswer }}"
                                                         alt="#" class="img-fluid">
                                                </label>
                                            </div>
                                        @else
                                            <button class="btn btn-primary" onclick="myFunction4()">
                                                <img class="imgButton" src="{{ $primarySixth->quarterAnswer }}"
                                                     alt="logo"/>
                                                @endif
                                            </button>
                                    </div>
                                </div>
                                @endif
                                @if ($primarySixth->type == 1) {{-- Boton para Aceptar en caso de ser Multiple Seleccion --}}
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <button class="btn btn-primary" onclick="myFunction()"> Aceptar</button>
                                    </div>
                                </div>
                                @endif
                              @endif
                        </div>
                        <p hidden>Clicks:<a id="trys">0</a></p>
                    </div>
        
<!-- 
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <button class="button grow_box" id="btn1">Opcion 1</button>
          </div>
          <div class="col-md-6 col-sm-6">
            <button class="button grow_spin" id="btn2">Opcion 2</button>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-sm-6">
            <button class="button grow_spin" data-bs-toggle="modal" data-bs-target="#about-test-error-modal" id="btn3">Opcion 3</button>
          </div>
          <div class="col-md-6 col-sm-6">
            <button class="button grow_box" data-bs-toggle="modal" data-bs-target="#about-test-check-modal"  id="btn4">Opcion 4</button>
            
          </div>
        </div> -->
      </div>
      <!-- <button type="submit" class="button" id="btn4">Opcion 4</button> -->
      <!-- Modal Order Form -->
      <div id="about-test-check-modal" class="modal fade" >
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content ">
            <div class="modal-header">
              <h4 class="modal-title">Respuesta Correcta!</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <!-- <form method="POST" action="#"> -->
                <div class="row">
                  <!-- <i></i> -->
                  <!-- <i class="bi bi-check-all"></i> -->
                  <!-- <i class="fa fa-solid fa-check-double"></i> -->
                  <i class="fa fa-check"></i>

                </div>
                <div class="text-center mt-3">
                  <button type="submit" class="button" id="btn5" data-bs-dismiss="modal" aria-label="Close">Aceptar</button>
                </div>
              <!-- </form> -->
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      <!-- Modal Order Form -->
      <div id="about-test-error-modal" class="modal fade" data-animation="slideInOutLeft">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content ">
            <div class="modal-header">
              <h4 class="modal-title">Respuesta Incorrecta!</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <!-- <form method="POST" action="#"> -->
                <div class="row">
                  <!-- <i></i> -->
                  <!-- <i class="fa fa-check-circle"></i> -->
                  <!-- <i class="fa fa-solid fa-check-double"></i> -->
                  <i class="bi bi-x"></i>
                  <!-- <i class="fa-solid fa-xmark"></i>
                  <i class="fa fa-exclamation-triangle"></i> -->

                </div>
                <div class="text-center mt-3">
                  <button type="submit" class="button" id="btn6" data-bs-dismiss="modal" aria-label="Close">Aceptar</button>
                </div>
              <!-- </form> -->
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->


    

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