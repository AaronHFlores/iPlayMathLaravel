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
        <br>

        <div class="container">
            <div class="w-70 h-100 p-5 services-card-shadow rounded-4">
                <div >
                    <div align="center">
                        <h3 class="register-heading text-center"> {{ $primarySixth->question }}</h3>
                        @if (!empty($primarySixth->image))
                        <img src="{{$primarySixth->image}}"  alt="logo" />
                        @endif
                        </div>
                </div>
                <form action="#" method = "POST">
                    @csrf
                    <div class="row mb-4 mt-3">
                        <div class="col-md-6 col-lg-3 text-center">
                            <button class="btn btn-primary">
                                Opcion 1
                            </button>
                        </div>
                        <div class="col-md-6 col-lg-3 text-center">
                            <button class="btn btn-primary">
                                Opcion 2
                            </button>
                        </div>
                        <div class="col-md-6 col-lg-3 text-center">
                            <button class="btn btn-primary">
                                Opcion 3
                            </button>
                        </div>
                        <div class="col-md-6 col-lg-3 text-center">
                            <button class="btn btn-primary">
                                Opcion 4
                            </button>
                        </div>           
                    </div>
                </form>
            </div>
        </div>

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
