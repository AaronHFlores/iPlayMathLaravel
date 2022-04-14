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
      <a href="{{ route('login') }}" class="login scrollto" >Iniciar Sesion</a>
    </div>
  </header>
  <!-- End Header -->

  <!-- img math -->
  <section id="about">
  </section>

  <main id="main">
    <!-- ======= Buy Ticket Section ======= -->
    <section id="buy-tickets" class="section-with-bg">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <div class="card-body">
                <div class="section-header">
                  <!-- <p><img class="img-login" src="{{ asset('img/iPM/img/logo_icon.png') }}" alt="logo_iPlayMath"></p> -->
                  <h2>Crea tu Perfil</h2>
                </div>

                <div class="form">
                  <form action="{{ route('register') }}" method="POST">
                    <div class="row">
                      <div class="form-group col-md-6">
                        <input type="text" class="form-control" placeholder="{{ __('Name') }}" value="{{ old('name') }}" id="name" name="name" />
                        @error('name')
                            <div><label style="color:#DC3545">{{ $message }}</label></div>
                        @enderror
                      </div>
                      <div class="form-group col-md-6 mt-3 mt-md-0">
                        <input type="text" class="form-control" placeholder="Edad" value="{{ old('age') }}" id="age" name="age" />
                        @error('age')
                            <div><label style="color:#DC3545">{{ $message }}</label></div>
                        @enderror
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="form-group col-md-6">
                        <input type="email" class="form-control" placeholder="{{ __('Email') }}" value="{{ old('email') }}" id="email" name="email"/>
                        @error('email')
                            <div><label style="color:#DC3545">{{ $message }}</label></div>
                        @enderror
                      </div>
                      <div class="form-group col-md-6 mt-3 mt-md-0">
                        <input type="password" class="form-control" placeholder="{{ __('Password') }}" value="{{ old('password') }}" id="password" name="password" />
                        @error('password')
                            <div><label style="color:#DC3545">{{ $message }}</label></div>
                        @enderror
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-4">
                        <!-- <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required> -->
                      </div>
                      <div class="col-md-4">
                        <input type="password" class="form-control"  placeholder="{{ __('Confirm Password') }}" value="" id="password_confirmation" name="password_confirmation" />
                        @error('password_confirmation')
                            <div><label style="color:#DC3545">{{ $message }}</label></div>
                        @enderror
                      </div>
                      <div class="col-md-4">
                        <!-- <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required> -->
                      </div>

                    </div>
                    <br>
                    <div class="text-center">
                      <button type="submit" class="btn" data-bs-toggle="modal" data-ticket-type="premium-access">Registarse</button>
                    </div>

                  </form>
                </div>
                <!-- <h5 class="card-title text-muted text-uppercase text-center">Premium Access</h5>
                <h6 class="card-price text-center">$350</h6>
                <hr> -->
                <!-- <div class="row"> -->
                  <!-- <form action="{{ route('register') }}" method = "POST">
                    @csrf -->
                    <!-- <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="{{ __('Name') }}" value="{{ old('name') }}" id="name" name="name" />
                        @error('name')
                            <div><label style="color:#DC3545">{{ $message }}</label></div>
                        @enderror
                      </div>
                      <br>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Edad" value="{{ old('age') }}" id="age" name="age" />
                        @error('age')
                            <div><label style="color:#DC3545">{{ $message }}</label></div>
                        @enderror
                      </div>
                      <br>
                      
                      <div class="form-group">
                        <input type="password" class="form-control"  placeholder="{{ __('Confirm Password') }}" value="" id="password_confirmation" name="password_confirmation" />
                        @error('password_confirmation')
                            <div><label style="color:#DC3545">{{ $message }}</label></div>
                        @enderror
                      </div> 
                    </div> -->
                <!-- </div> -->
                <!-- <div class="row"> -->
                  <!-- <div class="col-md-6"> -->
                    <!-- <div class="form-group"> -->
                      <!-- <input type="email" class="form-control" placeholder="{{ __('Email') }}" value="{{ old('email') }}" id="email" name="email"/>
                      @error('email')
                          <div><label style="color:#DC3545">{{ $message }}</label></div>
                      @enderror -->
                    <!-- </div> -->
                    <!-- <br> -->

                    <!-- <div class="form-group"> -->
                      <!-- <input type="password" class="form-control" placeholder="{{ __('Password') }}" value="{{ old('password') }}" id="password" name="password" />
                      @error('password')
                          <div><label style="color:#DC3545">{{ $message }}</label></div>
                      @enderror -->
                    <!-- </div> -->
                  </div>

                <!-- </div> -->
                      
                    
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>


    </section><!-- End Buy Ticket Section -->

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
        <div class="copyright">
          &copy; Copyright <strong>iPlayMath</strong>. All Rights Reserved
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