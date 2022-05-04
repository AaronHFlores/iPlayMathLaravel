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

  <link rel="stylesheet" href="http://cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/iPM/css/styles.css') }}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container-fluid container-xxl d-flex align-items-center">

      <div id="logo" class="me-auto">
        <a href="/play" class="scrollto"><img src="{{ asset('img/iPM/img/logo_large_.png') }}" alt="" title="iPlayMath"></a>
      </div>

      <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
          <li class="nav-item dropdown pe-3">
            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="" data-bs-toggle="dropdown">
            <!-- <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle"> -->
            @if (Auth::user()->profile_photo_path)
              <img  src="/storage/{{Auth::user()->profile_photo_path }}" alt="{{ Auth::user()->name }}" class="rounded-circle"/>
            @else
              <img src="{{Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" class="rounded-circle"/>
            @endif
              <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
            </a>

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
              <li class="dropdown-header">
                  <h6>{{ Auth::user()->name }}</h6>
                  <span>Score: <strong>{{ Auth::user()->score }}</strong></span>
              </li>
              <li>
                  <hr class="dropdown-divider">
              </li>

              <li>
                  <a class="dropdown-item d-flex justify-content-center" href="/profile">
                  <i class="bi bi-person"></i>
                  <span>Mi Perfil</span>
                  </a>
              </li>
              <li>
                  <hr class="dropdown-divider">
              </li>


              <li>
                <form method="POST" action="{{ route('logout') }}">
                @csrf
                  <a class="dropdown-item d-flex justify-content-center" href="{{ route('logout') }}" onclick="event.preventDefault();
                  this.closest('form').submit();">
                  <i class="bi bi-box-arrow-right" style="color: #D82148"></i>
                  <span style="color: #D82148"><strong>Cerrar Sesión</strong></span>
                  </a>
                </form>
              </li>

            </ul><!-- End Profile Dropdown Items -->
          </li><!-- End Profile Nav -->
        </ul>
      </nav>

    </div>
  </header>
  <!-- End Header -->

  <main id="main">

     <!-- ======= Grade Section ======= -->
    <section id="recap" class="section-with-bg2">

      <div class="container" data-aos="zoom-in-down">
        <div class="section-header">
          <!-- <h2>Primaria</h2>
          <p>Elige tu grado</p> -->
        </div>
        <?php
        use App\Models\User;
          if($Room->score1 > $Room->score2){
              $userwin = User::where('id', $Room->user1)->first();

              $winner =  $userwin->name;
          }  
          else if($Room->score1 < $Room->score2){
              $userwin = User::where('id', $Room->user2)->first();
              $winner =  $userwin->name;

              // echo $userwin->name;
          }
          else {
              echo "empate";
          }
        ?>

        <!-- data-aos="zoom-in" data-aos-delay="100" -->

        <div class="row d-flex justify-content-center">
          <div class="col-md-6" data-aos="flip-left"
            data-aos-easing="ease-out-cubic"
            data-aos-duration="1200"
            >
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <div id="img-container">
                  <img src="{{ asset('img/iPM/img/medal2.png') }}" alt="medal">
                </div>
                <h5 class="card-title text-center">¡¡Felicidades <?php echo $winner; ?>!!</h5>
                <hr>
                
                <h6 class="card-subtitle text-center">Has Ganado </h6>
                
                <div class="text-center">
                  <a href="/play" type="button" class="btn">Continuar</a>
                  <!-- <button  data-bs-toggle="modal" data-bs-target="#buy-ticket-modal" data-ticket-type="standard-access">Continuar</button> -->
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>

    </section>
    <!-- End grade Section -->

  </main>

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
