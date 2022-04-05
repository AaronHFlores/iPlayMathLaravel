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
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" data-navbar-on-scroll="light">
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

      <section >
        
        <div >

        </div>
      </section>



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <!-- ============================================-->

      <!-- <section class="py-0 bg-1000">
        <div class="container">
          <div class="row py-7">
            <div class="col-12 col-sm-12 col-lg-6 mb-4 order-0 order-sm-0"><a class="text-decoration-none" href="#"><img src="assets/img/icons/Logo2.png" height="51" alt="" /></a>
              <p class="text-light mt-4 mb-0">EU: +49 9999 0000</p>
              <p class="text-light mb-0">US: +00 4444 0000</p>
              <p class="text-light mt-5">info@gohub.ee</p>
              <div class="d-flex"><a href="#!"><img class="me-xl-3 me-1" src="assets/img/gallery/linkedin-line1.svg" alt="in" width:'20px'="width:'20px'" height:'20px'="height:'20px'" /></a><a href="#!"><img class="me-xl-3 me-1" src="assets/img/gallery/facebook-line1.svg" alt="fb" width:'20px'="width:'20px'" height:'20px'="height:'20px'" /></a><a href="#!"><img class="me-xl-3 me-1" src="assets/img/gallery/twitter-line1.svg" alt="twitter" width:'20px'="width:'20px'" height:'20px'="height:'20px'" /></a><a href="#!"><img class="me-xl-3 me-1" src="assets/img/gallery/instagram-line1.svg" alt="instragram" width:'20px'="width:'20px'" height:'20px'="height:'20px'" /></a></div>
            </div>
            <div class="col-3 col-sm-4 col-lg-2 mb-3 order-2 order-sm-1">
              <h5 class="lh-lg fw-bold text-light font-sans-serif">About Us</h5>
              <ul class="list-unstyled text-light mb-md-4">
                <li class="lh-lg"><a class="text-500 footer-link text-light" href="#!">Newsroom</a></li>
                <li class="lh-lg"><a class="text-500 footer-link text-light" href="#!">Blog</a></li>
                <li class="lh-lg"><a class="text-500 footer-link text-light" href="#!">Gohub API</a></li>
                <li class="lh-lg"><a class="text-500 footer-link text-light" href="#!">Gift cards</a></li>
                <li class="lh-lg"><a class="text-500 footer-link text-light" href="#!">Career</a></li>
                <li class="lh-lg"><a class="text-500 footer-link text-light" href="#!">Gohub driving jobs</a></li>
              </ul>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 mb-3 order-3 order-sm-2">
              <h5 class="lh-lg fw-bold text-light font-sans-serif">Offerings</h5>
              <ul class="list-unstyled text-light mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-500 footer-link text-light" href="#!">Gohub Eats</a></li>
                <li class="lh-lg"><a class="text-500 footer-link text-light" href="#!">Gohub Business</a></li>
                <li class="lh-lg"><a class="text-500 footer-link text-light" href="#!">Guhub Freight</a></li>
                <li class="lh-lg"><a class="text-500 footer-link text-light" href="#!">Gohub Health</a></li>
              </ul>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 mb-3 order-3 order-sm-2">
              <h5 class="lh-lg fw-bold text-light font-sans-serif"> Support</h5>
              <ul class="list-unstyled text-light mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-500 footer-link text-light" href="#!">Terminal Conditions</a></li>
                <li class="lh-lg"><a class="text-500 footer-link text-light" href="#!">About Us</a></li>
                <li class="lh-lg"><a class="text-500 footer-link text-light" href="#!">Contact US</a></li>
                <li class="lh-lg"><a class="text-500 footer-link text-light" href="#!">Terms of Use</a></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-0 bg-1000">
          <div class="container">
            <div class="row justify-content-md-between justify-content-evenly py-3">
              <div class="col-12 col-sm-8 col-md-6 col-lg-auto text-center text-md-start">
                <p class="fs--1 my-2 fw-bold text-200">&copy; 2022 Your Company Inc</p>
              </div>
              <div class="col-12 col-sm-8 col-md-6">
                <p class="fs--1 my-2 text-center text-md-end text-200"> Made with&nbsp;<svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#F95C19" viewBox="0 0 16 16">
                    <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
                  </svg>&nbsp;by&nbsp;<a class="fw-bold text-info text-200" href="https://themewagon.com/" target="_blank">ThemeWagon </a></p>
              </div>
            </div>
          </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->

      <!-- </section> -->
    </main><!-- ===============================================-->
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