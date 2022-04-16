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
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link href="{{ asset('css/toastr.min.css')}}" rel="stylesheet"/>
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@400;500;600;700&amp;family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,300&amp;display=swap"
        rel="stylesheet">
    <link href="{{ asset('css/iPlayMath/css/theme.min.css')}}" rel="stylesheet"/>
    <link href="{{ asset('css/iPlayMath/css/user.css')}}" rel="stylesheet"/>
    <style>
        .imgButton {
            max–width: 50px;
            height: auto;
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light fixed">
    <div class="container"><a class="navbar-brand" href="/play"><img src="{{ asset('img/iPlayMath/img/logoo.png') }}"
                                                                     height="50" alt="logo"/></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base align-items-center">
                <li>
                <!-- <span class="user-img"><img class="rounded-circle" src="{{ Auth::user()->profile_photo_url }}" width="40" alt="{{ Auth::user()->name }}"> -->

                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img"><img class="rounded-circle" src="{{ Auth::user()->profile_photo_url }}"
                                                    width="40" alt="{{ Auth::user()->name }}">

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
<label hidden id="minutes">00</label>
<label hidden id="colon">:</label>
<label hidden id="seconds">00</label>
<div class="container">
    <div class="w-70 h-100 p-5 services-card-shadow rounded-4">
        <div>
            <div align="center">
                <h3 class="register-heading text-center"> {{ $primarySixth->question }}</h3>
                @if (!empty($primarySixth->image))
                    <img class="imgButton" src="{{$primarySixth->image}}" alt="logo"/>
                @endif
            </div>
        </div>
        @if ($primarySixth->type == 4)
            <div class="row register-form">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Respuesta:" id="type4" name="type4"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <button class="btn btn-primary" onclick="myFunction1()">Aceptar</button>
                </div>
            </div>
        @else
            @if ($primarySixth->type == 5 or $primarySixth->type == 1 )       {{-- Div por si contiene Botones con Imagenes Tipo 5 --}}
            <div class="row mb-2 mt-3">
                @else
                    <div class="row mb-4 mt-3">
                        @endif
                        {{-- Primer Boton --}}
                        @if($primarySixth->type ==3 or $primarySixth->type ==5 or $primarySixth->type == 1)   {{-- En caso de ser de tipo 1, 3 o 5--}}
                        <div class="col-md-6 col-lg-6 text-center">
                            @else
                                <div class="col-md-6 col-lg-3 text-center">
                                    @endif
                                    @if($primarySixth->type == 1) {{-- En caso de ser tipo 1 --}}
                                    <div class="custom-control custom-checkbox image-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="ck1a">
                                        <label class="custom-control-label" for="ck1a">
                                            <img class="imgButton" src="{{ $primarySixth->firstAnswer }}" alt="#"
                                                 class="img-fluid">
                                        </label>
                                    </div>
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

                                                    <button class="btn btn-primary" onclick="myFunction2()">
                                                        {{ $primarySixth->secondAnswer }}
                                                        @endif
                                                    </button>
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

                    <script>
                        var clicks = 0;
                        var minutes = 0;
                        var seconds = 0;
                        var time = 0;

                        function myFunction1() {
                            if ({{$primarySixth->type}} == "4") {
                                if ({{$primarySixth->correctAnswer}} == document.getElementById("type4").value) {
                                    if (clicks < 4) {
                                        clicks += 1;
                                    }
                                    minutes = document.getElementById("minutes").innerHTML;
                                    seconds = document.getElementById("seconds").innerHTML;
                                    var url = "/UpdateScore/" + clicks + "/" + minutes + "/" + seconds + "/1";
                                    toastr.success('De regreso al menu de actividades', 'Correcto', {
                                        progressBar: true,
                                        onHidden: function () {
                                            window.location.href = url;
                                        }
                                    });
                                } else {
                                    if (clicks < 4) {
                                        clicks += 1;
                                        document.getElementById("trys").innerHTML = clicks;
                                    }
                                    toastr.error('Intentalo de nuevo', 'Incorrecto :(')
                                }
                            } else {
                                if ({{$primarySixth->correctAnswer}} == "1") {
                                    if (clicks < 4) {
                                        clicks += 1;
                                    }
                                    minutes = document.getElementById("minutes").innerHTML;
                                    seconds = document.getElementById("seconds").innerHTML;
                                    var url = "/UpdateScore/" + clicks + "/" + minutes + "/" + seconds + "/1";
                                    toastr.success('De regreso al menu de actividades', 'Correcto', {
                                        progressBar: true,
                                        onHidden: function () {
                                            window.location.href = url;
                                        }
                                    });
                                } else {
                                    if (clicks < 4) {
                                        clicks += 1;
                                    }
                                    document.getElementById("trys").innerHTML = clicks;
                                    toastr.error('Intentalo de nuevo', 'Incorrecto :(')
                                }
                            }
                        }
                    </script>
                    <script>
                        var clicks = 0;
                        var minutes = 0;
                        var seconds = 0;
                        var time = 0;

                        function myFunction2() {
                            if ({{$primarySixth->correctAnswer}} == "2") {
                                if (clicks < 4) {
                                    clicks += 1;
                                }
                                minutes = document.getElementById("minutes").innerHTML;
                                seconds = document.getElementById("seconds").innerHTML;
                                var url = "/UpdateScore/" + clicks + "/" + minutes + "/" + seconds + "/1";
                                toastr.success('De regreso al menu de actividades', 'Correcto', {
                                    progressBar: true,
                                    onHidden: function () {
                                        window.location.href = url;
                                    }
                                });
                            } else {
                                if (clicks < 4) {
                                    clicks += 1;
                                }
                                document.getElementById("trys").innerHTML = clicks;
                                toastr.error('Intentalo de nuevo', 'Incorrecto :(')
                            }
                        }
                    </script>
                    <script>
                        var clicks = 0;
                        var minutes = 0;
                        var seconds = 0;
                        var time = 0;

                        function myFunction3() {
                            if ({{$primarySixth->correctAnswer}} == "3") {
                                if (clicks < 4) {
                                    clicks += 1;
                                }
                                minutes = document.getElementById("minutes").innerHTML;
                                seconds = document.getElementById("seconds").innerHTML;
                                var url = "/UpdateScore/" + clicks + "/" + minutes + "/" + seconds + "/1";
                                toastr.success('De regreso al menu de actividades', 'Correcto', {
                                    progressBar: true,
                                    onHidden: function () {
                                        window.location.href = url;
                                    }
                                });
                            } else {
                                if (clicks < 4) {
                                    clicks += 1;
                                }
                                document.getElementById("trys").innerHTML = clicks;
                                toastr.error('Intentalo de nuevo', 'Incorrecto :(')
                            }
                        }
                    </script>
                    <script>
                        var clicks = 0;
                        var minutes = 0;
                        var seconds = 0;
                        var time = 0;

                        function myFunction4() {
                            if ({{$primarySixth->correctAnswer}} == "4") {
                                if (clicks < 4) {
                                    clicks += 1;
                                }
                                minutes = document.getElementById("minutes").innerHTML;
                                seconds = document.getElementById("seconds").innerHTML;
                                var url = "/UpdateScore/" + clicks + "/" + minutes + "/" + seconds + "/1";
                                toastr.success('De regreso al menu de actividades', 'Correcto', {
                                    progressBar: true,
                                    onHidden: function () {
                                        window.location.href = url;
                                    }
                                });
                            } else {
                                if (clicks < 4) {
                                    clicks += 1;
                                }
                                document.getElementById("trys").innerHTML = clicks;
                                toastr.error('Intentalo de nuevo', 'Incorrecto :(')
                            }
                        }
                    </script>
                    <script>
                        var clicks = 0;
                        var minutes = 0;
                        var seconds = 0;
                        var time = 0;

                        function myFunction() {
                            let isCheck = document.getElementById('ck1a').checked;
                            let check = '';
                            if (isCheck) {
                                check += '1,';
                            }
                            isCheck = document.getElementById('ck2a').checked;
                            if (isCheck) {
                                check += "2,";
                            }
                            isCheck = document.getElementById('ck3a').checked;
                            if (isCheck) {
                                check += "3";
                            }
                            isCheck = document.getElementById('ck4a').checked;
                            if (isCheck) {
                                check += '4';
                            }
                            console.log(check);
                            console.log({{$primarySixth->correctAnswer}});
                            if ({{$primarySixth->correctAnswer}} == check) {
                                if (clicks < 4) {
                                    clicks += 1;
                                }
                                minutes = document.getElementById("minutes").innerHTML;
                                seconds = document.getElementById("seconds").innerHTML;
                                var url = "/UpdateScore/" + clicks + "/" + minutes + "/" + seconds + "/1";
                                toastr.success('De regreso al menu de actividades', 'Correcto', {
                                    progressBar: true,
                                    onHidden: function () {
                                        window.location.href = url;
                                    }
                                });
                            } else {
                                if (clicks < 4) {
                                    clicks += 1;
                                }
                                document.getElementById("trys").innerHTML = clicks;
                                toastr.error('Intentalo de nuevo', 'Incorrecto :(')
                            }
                        }
                    </script>

                    <script type="text/javascript">
                        var minutesLabel = document.getElementById("minutes");
                        var secondsLabel = document.getElementById("seconds");
                        var totalSeconds = 0;
                        setInterval(setTime, 1000);

                        function setTime() {
                            ++totalSeconds;
                            secondsLabel.innerHTML = pad(totalSeconds % 60);
                            minutesLabel.innerHTML = pad(parseInt(totalSeconds / 60));
                        }

                        function pad(val) {
                            var valString = val + "";
                            if (valString.length < 2) {
                                return "0" + valString;
                            } else {
                                return valString;
                            }
                        }
                    </script>

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
