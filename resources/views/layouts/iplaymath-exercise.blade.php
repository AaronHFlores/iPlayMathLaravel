<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>iPlayMath</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/iPlayMath/img/favicons/favicon.ico')}}">
    <link rel="manifest" href=" {{ asset('img/iPlayMath//img/favicons/manifest.json')}}">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@400;500;600;700&amp;family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,300&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('css/iPlayMath/css/theme.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/iPlayMath/css/user.css')}}" rel="stylesheet" />
  </head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed" >
        <div class="container"><a class="navbar-brand" href="/play"><img src="{{ asset('img/iPlayMath/img/logoo.png') }}" height="50" alt="logo" /></a><button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base align-items-center">
              <li>
                <!-- <span class="user-img"><img class="rounded-circle" src="{{ Auth::user()->profile_photo_url }}" width="40" alt="{{ Auth::user()->name }}"> -->

                <div class="dropdown">
                  <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                    <span class="user-img"><img class="rounded-circle" src="{{ Auth::user()->profile_photo_url }}" width="40" alt="{{ Auth::user()->name }}">

                    <span>{{ Auth::user()->name }}</span>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li>
                      <a class="dropdown-item" href="#">Inicio</a></li>
                    <li>
                      <form method="POST" action="{{ route('logout') }}">
                        @csrf
                            <!--
                            <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-jet-responsive-nav-link> -->
                          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                              this.closest('form').submit();"> Cerrar Sesión </a>
                        </form>
                    </li>

                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- <section >
        <div class="container" align="center" >
            <h3 class="mt-3 lh-base">Primaria</h3>

            <div class="row mb-4">
              <div class="col-md-4">
                <div class="w-100 h-100 p-5 services-card-shadow rounded-4"><img src="assets/img/icons/1.png" alt="Dashboard" style="width:95px;" />
                  <a href="#">
                    <h3
                      class="mt-3 lh-base" class="btn btn-light" >1°
                    </h3>
                  </a> -->
                  <!-- <p class="mb-0">Strengthen your digital visibility in a universe where everyone is interested in traveling. We help you build your presence without having to lift a finger!</p> -->
                <!-- </div>
              </div>

              <div class="col-md-4">
                <div class="w-100 h-100 p-5 services-card-shadow rounded-4"><img src="assets/img/icons/1.png" alt="Dashboard" style="width:95px;" />
                  <a href="#">
                    <h3
                      class="mt-3 lh-base" class="btn btn-light" >2°
                    </h3>
                  </a> -->
                  <!-- <p class="mb-0">Strengthen your digital visibility in a universe where everyone is interested in traveling. We help you build your presence without having to lift a finger!</p> -->
                <!-- </div>
              </div>

              <div class="col-md-4">
                <div class="w-100 h-100 p-5 services-card-shadow rounded-4"><img src="assets/img/icons/1.png" alt="Dashboard" style="width:95px;" />
                  <a href="#">
                    <h3
                     class="mt-3 lh-base" class="btn btn-light" >3°
                    </h3>
                  </a> -->
                  <!-- <p class="mb-0">Strengthen your digital visibility in a universe where everyone is interested in traveling. We help you build your presence without having to lift a finger!</p> -->
                <!-- </div>
              </div>
            </div>

            <div class="row mb-4"> -->
              <!-- <div class="col-md-6 h-100 text-center text-md-start p-0 p-md-5 pb-3">
                <h2 class="mt-3">Improve the stability of your application</h2>
                <p class="mb-0">Bugsnag monitors application stability, so you can make data-driven decisions on whether you should be building new features, or fixing bugs.</p>
              </div> -->
              <!-- <div class="col-md-4">
                <div class="w-100 h-100 p-5 services-card-shadow rounded-4"><img src="assets/img/icons/1.png" alt="Dashboard" style="width:95px;" />
                  <a href="#">
                    <h3
                      class="mt-3 lh-base" class="btn btn-light" >4°
                    </h3>
                  </a> -->
                  <!-- <p class="mb-0">Strengthen your digital visibility in a universe where everyone is interested in traveling. We help you build your presence without having to lift a finger!</p> -->
                <!-- </div>
              </div>

              <div class="col-md-4">
                <div class="w-100 h-100 p-5 services-card-shadow rounded-4"><img src="assets/img/icons/1.png" alt="Dashboard" style="width:95px;" />
                  <a href="#">
                    <h3
                      class="mt-3 lh-base" class="btn btn-light" >5°
                    </h3>
                  </a> -->
                  <!-- <p class="mb-0">Strengthen your digital visibility in a universe where everyone is interested in traveling. We help you build your presence without having to lift a finger!</p> -->
                <!-- </div>
              </div>

              <div class="col-md-4">
                <div class="w-100 h-100 p-5 services-card-shadow rounded-4"><img src="assets/img/icons/1.png" alt="Dashboard" style="width:95px;" />
                  <a href="#">
                    <h3
                     class="mt-3 lh-base" class="btn btn-light" >6°
                    </h3>
                  </a> -->
                  <!-- <p class="mb-0">Strengthen your digital visibility in a universe where everyone is interested in traveling. We help you build your presence without having to lift a finger!</p> -->
                <!-- </div>
              </div>
            </div>

            <h3 class="mt-3 lh-base">Secundaria</h3>

            <div class="row mb-4">
              <div class="col-md-4">
                  <div class="w-100 h-100 p-5 services-card-shadow rounded-4"><img src="https://i.postimg.cc/0Nd0C9Hs/math.jpg " alt="math" style="width:95px;" />
                    <a href="#">
                      <h3
                        class="mt-3 lh-base" class="btn btn-light" >1°
                      </h3>
                    </a> -->
                    <!-- <p class="mb-0">Strengthen your digital visibility in a universe where everyone is interested in traveling. We help you build your presence without having to lift a finger!</p> -->
                  <!-- </div>
                </div> -->
<!--
                <div class="col-md-4">
                  <div class="w-100 h-100 p-5 services-card-shadow rounded-4"><img src="assets/img/icons/1.png" alt="Dashboard" style="width:95px;" />
                    <a href="#">
                      <h3
                        class="mt-3 lh-base" class="btn btn-light" >2°
                      </h3>
                    </a> -->
                    <!-- <p class="mb-0">Strengthen your digital visibility in a universe where everyone is interested in traveling. We help you build your presence without having to lift a finger!</p> -->
                  <!-- </div>
                </div> -->

                <!-- <div class="col-md-4">
                  <div class="w-100 h-100 p-5 services-card-shadow rounded-4"><img src="assets/img/icons/1.png" alt="Dashboard" style="width:95px;" />
                    <a href="#">
                      <h3
                      class="mt-3 lh-base" class="btn btn-light" >3°
                      </h3>
                    </a> -->
                    <!-- <p class="mb-0">Strengthen your digital visibility in a universe where everyone is interested in traveling. We help you build your presence without having to lift a finger!</p> -->
                  <!-- </div>
                </div>
              </div>
            </div>
          </div> -->
      <!-- <section> begin ============================-->
      <section id="customers">
        <div class="container">
          <h1 class="text-center display-5 fw-semi-bold" data-zanim-xs='{"delay":0.3}' data-zanim-trigger="scroll"> Primaria</h1>
          <p class="text-center fs-0 fs-md-1" data-zanim-xs='{"delay":0.5}' data-zanim-trigger="scroll"> Elige tu grado.
            <!-- <br class="d-none d-lg-block" />you have the tools to let your customer do the selling for you. -->
          </p>

          <div class="row mb-4 mt-4">
            <div class="col-md-6 col-lg-4 text-center"><img src="{{ asset('img/iPlayMath/img/icons/math1.png') }}" alt="Dashboard" style="width:95px;" />
            <a href="/FirstGradePrimary">
                <h4 class="mt-3 lh-base">1° Grado</h4>
              </a>
              <!-- <p class="fs-0">Convert more wesite visitors in signups ans purchases.</p> -->
            </div>
            <div class="col-md-6 col-lg-4 text-center"><img src="{{ asset('img/iPlayMath/img/icons/math3.png') }}" alt="Comment" style="width:95px;" />
              <a href="/SecondGradePrimary">
                <h4 class="mt-3 lh-base">2° Grado</h4>
              </a>
              <!-- <p class="fs-0">Your advertising spend will go further than ever before.</p> -->
            </div>
            <div class="col-md-6 col-lg-4 text-center">
              <img src="{{ asset('img/iPlayMath/img/icons/math1.png') }}" alt="Tailored" style="width:95px;" />
              <a href="/ThirdGradePrimary">
                <h4 class="mt-3 lh-base">3° Grado</h4>
              </a>
              <!-- <p class="fs-0">People trust companies they see other people buy.</p> -->
            </div>
          </div>
          <div class="row mb-6">
            <div class="col-md-4 col-lg-4 text-center"><img src="{{ asset('img/iPlayMath/img/icons/math3.png') }}" alt="Dashboard" style="width:95px;" />
              <a href="/FourthGradePrimary">
                <h4 class="mt-3 lh-base">4° Grado</h4>
              </a>
              <!-- <p class="fs-0">Seeing other visitor taking action creates fear of missing out.</p> -->
            </div>
            <div class="col-md-4 col-lg-4 text-center"><img src="{{ asset('img/iPlayMath/img/icons/math1.png') }}" alt="Dashboard" style="width:95px;" />
              <a href="/FifthGradePrimary">
                <h4 class="mt-3 lh-base">5° Grado</h4>
              </a>
              <!-- <p class="fs-0">Seeing other visitor taking action creates fear of missing out.</p> -->
            </div>
            <div class="col-md-4 col-lg-4 text-center"><img src="{{ asset('img/iPlayMath/img/icons/math3.png') }}" alt="Dashboard" style="width:95px;" />
              <a href="/SixthGradePrimary">
                <h4 class="mt-3 lh-base">6° Grado</h4>
              </a>
              <!-- <p class="fs-0">Seeing other visitor taking action creates fear of missing out.</p> -->
            </div>
          </div>

          <h1 class="text-center display-5 fw-semi-bold" data-zanim-xs='{"delay":0.3}' data-zanim-trigger="scroll"> Secundaria</h1>
          <p class="text-center fs-0 fs-md-1" data-zanim-xs='{"delay":0.5}' data-zanim-trigger="scroll"> Elige tu grado.
            <!-- <br class="d-none d-lg-block" />you have the tools to let your customer do the selling for you. -->
          </p>

          <div class="row mb-6">
            <div class="col-md-6 col-lg-4 text-center"><img src="{{ asset('img/iPlayMath/img/icons/math2.png') }}" alt="Dashboard" style="width:95px;" />
              <a href="/FirstGradeElementary">
                <h4 class="mt-3 lh-base">1° Grado</h4>
              </a>
              <!-- <p class="fs-0">Convert more wesite visitors in signups ans purchases.</p> -->
            </div>
            <div class="col-md-6 col-lg-4 text-center"><img src="{{ asset('img/iPlayMath/img/icons/math2.png') }}" alt="Comment" style="width:95px;" />
              <a href="/SecondGradeElementary">
                <h4 class="mt-3 lh-base">2° Grado</h4>
              </a>
              <!-- <p class="fs-0">Your advertising spend will go further than ever before.</p> -->
            </div>
            <div class="col-md-6 col-lg-4 text-center">
              <img src="{{ asset('img/iPlayMath/img/icons/math2.png') }}" alt="Tailored" style="width:95px;" />
              <a href="/ThridGradePrimary">
                <h4 class="mt-3 lh-base">3° Grado</h4>
              </a>
              <!-- <p class="fs-0">People trust companies they see other people buy.</p> -->
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->

    </main>

    <footer>
      <section class="py-0 bg-1000">
        <div class="container">
          <div class="row justify-content-md-between justify-content-evenly py-3">
            <div class="col-12 col-sm-8 col-md-6 col-lg-auto text-center text-md-start">
              <p class="fs--1 my-2 fw-bold text-200">&copy; 2022 iPlayMath Inc</p>
            </div>
            <div class="col-12 col-sm-8 col-md-6">
              <!-- <p class="fs--1 my-2 text-center text-md-end text-200"> Made with&nbsp;<svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#F95C19" viewBox="0 0 16 16"> -->
                  <!-- <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path> -->
                <!-- </svg>&nbsp;by&nbsp;<a class="fw-bold text-info text-200" href="https://themewagon.com/" target="_blank">ThemeWagon </a></p> -->
            </div>
          </div>
        </div>
        <!-- end of .container-->
      </section>

    </footer>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->



    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <!-- <script src="{{ asset('vendors/iPlayMath/vendors/popper/popper.min.js') }}"></script> -->
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js "></script>

    <script src="{{ asset('vendors/iPlayMath/vendors/bootstrap/bootstrap.min.js')}} "></script>
    <script src="{{ asset('vendors/iPlayMath/vendors/anchorjs/anchor.min.js')}} "></script>
    <script src="{{ asset('vendors/iPlayMath/vendors/is/is.min.js')}} "></script>
    <script src="{{ asset('vendors/iPlayMath/vendors/fontawesome/all.min.js')}} "></script>
    <script src="{{ asset('vendors/iPlayMath/vendors/lodash/lodash.min.js')}} "></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/gsap.min.js"></script>
    <script src="{{ asset('vendors/iPlayMath/vendors/imagesloaded/imagesloaded.pkgd.js')}} "></script>
    <script src="{{ asset('vendors/iPlayMath/vendors/gsap/customEase.js')}} "></script>
    <script src="{{ asset('vendors/iPlayMath/vendors/gsap/scrollToPlugin.js')}} "></script>
    <script src="{{ asset('js/iPlayMath//js/theme.js')}}"></script>
  </body>

</html>
