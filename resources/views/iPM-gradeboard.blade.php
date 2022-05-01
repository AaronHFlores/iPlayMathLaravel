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
        <a href="/diagnostic" class="scrollto"><img src="{{ asset('img/iPM/img/logo_large_.png') }}" alt="" title="iPlayMath"></a>
      </div>

      <!-- <nav id="navbar" class="navbar order-last order-lg-3">
        <div class="dropdown">
          <a class="dropdown-toggle nav-link user-link" id="UserDropdown" href="#" data-bs-toggle="dropdown">
            <span class="user-img"><img class="rounded-circle" src="{{ Auth::user()->profile_photo_url }}" width="40" alt="{{ Auth::user()->name }}">
            <span>{{ Auth::user()->name }}</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <div class="dropdown-header text-center ">

              <img class="rounded-circle" src="{{ Auth::user()->profile_photo_url }}" width="40" alt="{{ Auth::user()->name }}">
              <p class="mb-1 mt-3 font-weight-semibold">{{ Auth::user()->name }}</p>
              <p class="fw-light text-muted mb-0">{{ Auth::user()->email }}</p>
            </div>

            <a style="color: blue"class="dropdown-item" href="/">
                Mi Perfil
            </a>     

            <form method="POST" action="{{ route('logout') }}">
              @csrf 
                <a style="color: blue" class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                this.closest('form').submit();"> 
                            Cerrar Sesión 
                </a>     
            </form>     
                              
        </div>
      </nav> -->
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
            </a><!-- End Profile Iamge Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
              <li class="dropdown-header">
                  <h6>{{ Auth::user()->name }}</h6>
                  <span>Estudiante</span>
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

  <!-- ======= Hero Section ======= -->
  <!-- <section id="hero" style="background-image: url({{asset('img/iPM/img/math1.jpg')}});">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100" > 
      <h1 class="mb-4 pb-0">¡ Bienvenido a <span id="span-diagnostic">iPlayMath</span> !</h1>
      <h3 style="color: #fff">
      Para ofrecerte una experiencia adecuada segun tus conocimientos<br/>
      es necesario que realices los ejercicios del <strong>examen diagnóstico</strong>,<br>
       el cual te servirá como punto de partida.
      </h3>
      <a href="/play" class="play-btn mb-4"></a>
      <a href="/main2" class="about-btn scrollto">Comenzar</a>
    </div>
  </section> -->
  <!-- End Hero Section -->
  <main id="main">

     <!-- ======= Grade Section ======= -->
    <section id="grade" class="section-with-bg">

      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Primaria</h2>
          <p>Elige tu grado</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-md-4 col-sm-4" align="center">
            <div class="grade">
              <div class="grade-img " >
                <a href="/FirstGradePrimary">
                  <img src="{{ asset('img/iPM/img/grades/1.png') }}" alt="grade 1" class="img-fluid">
                </a>
                <h3><a href="/FirstGradePrimary"> 1er Grado</a></h3>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-4" align="center">
            <div class="grade">
              <div class="grade-img " >
                <a href="/SecondGradePrimary">
                  <img src="{{ asset('img/iPM/img/grades/2.png') }}" alt="grade 2" class="img-fluid">
                </a>
                <h3><a href="/SecondGradePrimary"> 2do Grado</a></h3>
              </div>
            </div>
          </div>
          
          <div class="col-md-4 col-sm-4" align="center">
            <div class="grade">
              <div class="grade-img " >
                <a href="/ThirdGradePrimary">
                  <img src="{{ asset('img/iPM/img/grades/3.png') }}" alt="grade 3" class="img-fluid">
                </a>

                <br>
                <h3><a href="/ThirdGradePrimary"> 3er Grado</a></h3>
              </div>
            </div>
          </div>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-md-4 col-sm-4" align="center">
            <div class="grade">
              <div class="grade-img " >
                <a href="/FourthGradePrimary">
                  <img src="{{ asset('img/iPM/img/grades/4.png') }}" alt="grade 4" class="img-fluid">
                </a>
                <br>
                <h3><a href="/FourthGradePrimary"> 4to Grado</a></h3>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-4" align="center">
            <div class="grade">
              <div class="grade-img " >
                <a href="/FifthGradePrimary">
                  <img src="{{ asset('img/iPM/img/grades/5.png') }}" alt="grade 5" class="img-fluid">
                </a>
                <h3><a href="/FifthGradePrimary"> 5to Grado</a></h3>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-4" align="center">
            <div class="grade">
              <div class="grade-img " >
                <a href="/SixthGradePrimary">
                  <img src="{{ asset('img/iPM/img/grades/6.png') }}" alt="grade 6" class="img-fluid">
                </a>

                <h3><a href="/SixthGradePrimary"> 6to Grado</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- End grade Section -->

    <section id="grade" class="section-with-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header" style="padding-top: 0px;">
          <h2>Secundaria</h2>
          <p>Elige tu grado</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-md-4 col-sm-4" align="center">
            <div class="grade">
              <div class="grade-img " >
                <a href="/FirstGradeElementary">
                  <img src="{{ asset('img/iPM/img/grades/math.png') }}" alt="grade 1 elementary" class="img-fluid">
                </a>
                <h3><a href="/FirstGradeElementary"> 1er Grado</a></h3>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-4" align="center">
            <div class="grade">
              <div class="grade-img " >
                <a href="/SecondGradeElementary">
                  <img src="{{ asset('img/iPM/img/grades/math.png') }}" alt="grade 2 elementary" class="img-fluid">
                </a>
                <h3><a href="/SecondGradePrimary"> 2do Grado</a></h3>
              </div>
            </div>
          </div>
          
          <div class="col-md-4 col-sm-4" align="center">
            <div class="grade">
              <div class="grade-img " >
                <a href="/ThirdGradeElementary">
                  <img src="{{ asset('img/iPM/img/grades/math.png') }}" alt="grade 3 elementary" class="img-fluid">
                </a>

                <br>
                <h3><a href="/ThirdGradeElementary"> 3er Grado</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ======= Supporters Section ======= -->
    <!-- <section id="supporters" class="section-with-bg">

      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Sponsors</h2>
        </div>

        <div class="row no-gutters supporters-wrap clearfix" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-4 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="{{ asset('img/iPM/img/speakers/math1.png') }}" class="img-fluid" alt="">
            </div>
            
            <div class="row" align="center">
              <div class="col">
                  <h3><a href="#"> 1 Grado</a></h3>
                </div>
              </div>

          </div>

          <div class="col-lg-4 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="{{ asset('img/iPM/img/speakers/math3.png') }}" class="img-fluid" alt="">
              <h3><a href="#"> 1 Grado</a></h3>

            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="{{ asset('img/iPM/img/speakers/math1.png') }}" class="img-fluid" alt="">
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-xs-6">
          <div class="supporter-logo">
            <img src="assets/img/supporters/4.png" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-xs-6">
          <div class="supporter-logo">
            <img src="assets/img/supporters/5.png" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-xs-6">
          <div class="supporter-logo">
            <img src="assets/img/supporters/6.png" class="img-fluid" alt="">
          </div>
        </div>

      

      </div>

    </section> -->
    <!-- End Sponsors Section -->


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