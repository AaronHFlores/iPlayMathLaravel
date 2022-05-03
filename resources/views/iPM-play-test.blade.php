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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/iPM/css/styles.css') }}" rel="stylesheet">
  <script src="/lib/jquery-1.12.2.min.js"></script>

</head>

<body>

  <main id="main">
    <section id="about-test">
    <label hidden id="minutes">00</label>
    <label hidden id="colon">:</label>
    <label hidden id="seconds">00</label>
      <div class="container" data-aos="zoom-in-up">

        <div class="row">
          <div class="col-md-12">
            <h2>{{ $primarySixth->question }}</h2>
            <hr>
          </div>
        </div>

        @if($diagnostic == 1)
          <div class="row">
            <div class="d-flex justify-content-end">
              <button type="submit" onclick="myFunctionSkip()" class="btn btn-secondary">
                Omitir Pregunta
                <span class="fa fa-step-forward"  aria-hidden="true"></span>
              </button>
            </div>
          </div>

        @endif

          @if($primarySixth->type != 5)
            <div class="img-container d-flex justify-content-center">
              <img id="img-question" src="{{$primarySixth->image}}" alt="">
            </div>
          @else
            <div class="separador">
            </div>
          @endif


        @if ($primarySixth->type == 4)
          <div class="row register-form">
            <div class="col"></div>
            <div class="col-md-4 col-sm-4">
              <input type="number" class="form-control" placeholder="Respuesta:" id="type4" name="type4"/>
            </div>
            <div class="col-md-4">
              <button class="button grow_box" onclick="myFunction1()" id="btn1">
                Aceptar
              </button> {{-- Cierre del Primer Botón --}}
            </div>
            <div class="col"></div>
          </div>
        @else
        <div class="row">

          {{-- Primer Boton --}}
            <div class="col-md-6 col-sm-6">
            @if($primarySixth->type == 5)

                <button class="button grow_skew_backward" onclick="myFunction1()" id="btn1">
                  <img id="img-button" src="{{ $primarySixth->firstAnswer }}" alt="Botón_1"/>
                </button>

            @else
              <button class="button grow_box" onclick="myFunction1()" id="btn1">
                {{ $primarySixth->firstAnswer }}
              </button>
            @endif
            </div> {{-- Cierre col del Primer Botón --}}

            {{-- Segundo Boton --}}
            <div class="col-md-6 col-sm-6">
            @if ($primarySixth->type == 5 )       {{-- Imagen por si es tipo 1 o 5--}}

                <button class="button grow_box" onclick="myFunction2()" id="btn2">
                  <img id="img-button" src="{{ $primarySixth->secondAnswer }}" alt="Botón_2"/>
                </button>

            @else
              <button class="button grow_spin" onclick="myFunction2()" id="btn2">
                {{ $primarySixth->secondAnswer }}
              </button>
            @endif
            </div>
        </div>   {{-- Ciere del row, botones 1 & 2 --}}

        <div class="row">

          {{-- Tercer Boton --}}
          <div class="col-md-6 col-sm-6">
          @if ($primarySixth->type == 5 )       {{-- Imagen por si es tipo 5 --}}
            <button class="button grow_ellipse" onclick="myFunction3()" id="btn3">
              <img id="img-button" src="{{ $primarySixth->thirdAnswer }}" alt="Botón_3"/>
            </button>

          @endif
          @if (!empty($primarySixth->thirdAnswer) and $primarySixth->type != 5)
            <button class="button grow_spin" onclick="myFunction3()" id="btn3">
              {{ $primarySixth->thirdAnswer }}
            </button>
          @endif
          </div>

          {{-- Cuarto Boton --}}
          <div class="col-md-6 col-sm-6">
          @if ($primarySixth->type == 5 )       {{-- Imagen por si es tipo 5 --}}
            <button class="button grow_skew_forward" onclick="myFunction4()" id="btn4">
              <img id="img-button" src="{{ $primarySixth->quarterAnswer }}" alt="Botón_4"/>
            </button>
          @endif
          @if (!empty($primarySixth->quarterAnswer) and $primarySixth->type != 5 )
            <button type="button" class="button grow_box" onclick="myFunction4()" id="btn4">
              {{ $primarySixth->quarterAnswer }}
            </button>
          @endif
          </div>
        </div> {{-- Final del row, botones 3 & 4 --}}
        @endif
        <p hidden>Clicks:<a id="trys">0</a></p>
      </div> {{-- Final del container --}}

      <!-- Modal Order Form -->
      <div id="test-correct-modal" class="modal fade" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered " role="document">
          <div class="modal-content ">
            <div class="modal-header">
              <h4 class="modal-title">Respuesta Correcta 😃</h4>
              <!-- <button type="button" id="btn5close" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
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
      <div id="test-error-modal" class="modal fade">
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

      <!-- Modal Order Form -->
      <div id="info-skip-modal" class="modal fade">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content ">
            <div class="modal-header " >
              <h4 class="modal-title ">Omitir Pregunta 📝 </h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                  <i class="fa fa-info"></i>
                  <!-- <span>No te Preocupes</span> -->
                  <span>Saltar la pregunta no afectará tus puntos</span>

                </div>

                <!-- <div class="text-center mt-3">
                  <button type="submit" id="btn-skip-modal" data-bs-dismiss="modal" aria-label="Close">Aceptar</button>
                </div> -->
            </div>
            <div class="modal-footer">
              <button type="button"  id="btn-skip-modal" data-bs-dismiss="modal" aria-label="Close" >Aceptar</button>
              <button type="button"  id="btn6" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
            </div>
        </div>
      </div>
    </section>
  </main>

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
          if({{$diagnostic}}==1){
              var url = "/updatediagnosticscore/" + clicks + "/" + minutes + "/" + seconds + "/1/1";
          }
          else if({{$multiplayer}} == 1){
            
          }
          else {
            var url = "/UpdateScore/" + clicks + "/" + minutes + "/" + seconds + "/1";
          }

          $('#test-correct-modal').modal({ backdrop: 'static',keyboard: false})
          $('#test-correct-modal').modal('show');
          let btn = document.getElementById("btn5");
          btn.onclick = returnView;

          function returnView(evento) {
            window.location.href = url;
          }


        } else {
          if (clicks < 4) {
              clicks += 1;
              document.getElementById("trys").innerHTML = clicks;
          }
          $('#test-error-modal').modal('show');
        }
      } else {
        if ({{$primarySixth->correctAnswer}} == "1") {
          if (clicks < 4) {
            clicks += 1;
          }
          minutes = document.getElementById("minutes").innerHTML;
          seconds = document.getElementById("seconds").innerHTML;
          if({{$diagnostic}}==1){
              var url = "/updatediagnosticscore/" + clicks + "/" + minutes + "/" + seconds + "/1/1";
          }
          else {
            var url = "/UpdateScore/" + clicks + "/" + minutes + "/" + seconds + "/1";
          }
          $('#test-correct-modal').modal({ backdrop: 'static',keyboard: false})
          $('#test-correct-modal').modal('show');
          let btn = document.getElementById("btn5");
          btn.onclick = returnView;

          function returnView(evento) {
            window.location.href = url;
          }
        } else {
          if (clicks < 4) {
            clicks += 1;
          }
          document.getElementById("trys").innerHTML = clicks;
          $('#test-error-modal').modal('show');
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
        if({{$diagnostic}}==1){
            var url = "/updatediagnosticscore/" + clicks + "/" + minutes + "/" + seconds + "/1/1";
        }
        else {
          var url = "/UpdateScore/" + clicks + "/" + minutes + "/" + seconds + "/1";
        }
        $('#test-correct-modal').modal({ backdrop: 'static',keyboard: false})
        $('#test-correct-modal').modal("show");
        let btn = document.getElementById("btn5");
        btn.onclick = returnView;

        function returnView(evento) {
          window.location.href = url;
        }
      } else {
        if (clicks < 4) {
          clicks += 1;
        }
        document.getElementById("trys").innerHTML = clicks;
        $('#test-error-modal').modal('show');
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
        if({{$diagnostic}}==1){
            var url = "/updatediagnosticscore/" + clicks + "/" + minutes + "/" + seconds + "/1/1";
        }
        else {
          var url = "/UpdateScore/" + clicks + "/" + minutes + "/" + seconds + "/1";
        }
        $('#test-correct-modal').modal({ backdrop: 'static',keyboard: false})
        $('#test-correct-modal').modal('show');
        let btn = document.getElementById("btn5");
        btn.onclick = returnView;

        function returnView(evento) {
          window.location.href = url;
        }
      } else {
        if (clicks < 4) {
          clicks += 1;
        }
        document.getElementById("trys").innerHTML = clicks;
        $('#test-error-modal').modal('show');
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
        if({{$diagnostic}}==1){
          var url = "/updatediagnosticscore/" + clicks + "/" + minutes + "/" + seconds + "/1/1";
        }
        else {
          var url = "/UpdateScore/" + clicks + "/" + minutes + "/" + seconds + "/1";
        }
        $('#test-correct-modal').modal({ backdrop: 'static',keyboard: false})
        $('#test-correct-modal').modal('show');
        let btn = document.getElementById("btn5");
        btn.onclick = returnView;

        function returnView(evento) {
          window.location.href = url;
        }
      } else {
        if (clicks < 4) {
          clicks += 1;
        }
        document.getElementById("trys").innerHTML = clicks;
        $('#test-error-modal').modal('show');
      }
    }
  </script>
  <script>
    var clicks = 0;
    var minutes = 0;
    var seconds = 0;
    var time = 0;

    function myFunctionSkip() {

      $('#info-skip-modal').modal({ backdrop: 'static',keyboard: false})
      $('#info-skip-modal').modal('show');
      let btn = document.getElementById("btn-skip-modal");
      btn.onclick = returnView;

      function returnView(evento) {
        var url = "/updatediagnosticscore/" + clicks + "/" + minutes + "/" + seconds + "/1/0";
        window.location.href = url;
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
  <script>

  </script>

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
