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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendors/iPM/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('vendors/iPM/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendors/iPM/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('vendors/iPM/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendors/iPM/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

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

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container-fluid container-xxl d-flex align-items-center">

      <div id="logo" class="me-auto">
        <a href="index.html" class="scrollto"><img src="{{ asset('img/iPM/img/logo_large_.png') }}" alt="" title="iPlayMath"></a>
      </div>
      <a href="{{ route('register') }}" class="login scrollto" >Registrarse</a>
    </div>
  </header>
  <!-- End Header -->

  <!-- img math -->
  <!-- <section id="about">
  </section> -->

  <main id="main">
    <!-- ======= Buy Ticket Section ======= -->
    <!-- <section id="buy-tickets" class="section-with-bg">
    </section> -->
    <!-- End Buy Ticket Section -->

    <section id="form-user" style="background-image: url({{asset('img/iPM/img/math2.jpg')}});">
      <div class="container" data-aos="zoom-in">
        <div class="section-header">
          <h2>Ingresar</h2>
          <p><img class="img-login" src="{{ asset('img/iPM/img/logo_icon.png') }}" alt="logo_iPlayMath"></p>

          <!-- <p>Rerum numquam illum recusandae quia mollitia consequatur.</p> -->
        </div>
        <form action="{{ route('login') }}" method="POST">
          @csrf
          <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10 d-flex">
              <input type="email" class="form-control" placeholder="{{ __('Email') }}" value="{{ old('email') }}" id="email" name="email"/>
              @error('email')
                  <div><label style="color:#DC3545">{{ $message }}</label></div>
              @enderror
            </div>
          </div>
          <br>
          <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10 d-flex">
              <input type="password" class="form-control" placeholder="{{ __('Password') }}" value="{{ old('password') }}" id="password" name="password" />
                @error('password')
                    <div><label style="color:#DC3545">{{ $message }}</label></div>
                @enderror
            </div>
          </div>
          <br>

          <div class="text-center">
            <!-- <label for="remember_me">
              <x-jet-checkbox id="remember_me" name="remember" />
              <span class="ml-2 text-sm">Recordar usuario</span>
            </label> -->
            
            <h6 class="text-center">
              @if (Route::has('password.request'))
                <a class="underline text-sm" href="{{ route('password.request') }}">
                    ¿Olvidaste la contraseña?
                </a>
              @endif
            </h6>
            <button type="submit" class="btn" data-bs-toggle="modal" data-ticket-type="premium-access">Iniciar Sesión</button>
          </div>         
        </form>
      </div>
    </section><!-- End Subscribe Section -->

    <!-- <section id="buy-tickets" class="section-with-bg">
    </section> -->

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <img src="{{ asset('img/iPM/img/logo_white_large.png') }}" alt="iPlayMath">
          </div>

          <div class="col-lg-6 col-md-6 footer-links">
            <div class="copyright">
              &copy; Copyright <strong>iPlayMath</strong>. All Rights Reserved
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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