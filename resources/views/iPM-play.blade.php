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

      <nav id="navbar" class="navbar order-last order-lg-3">      
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

            <a style="color: blue" class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
            this.closest('form').submit();"> 
                        Cerrar Sesión 
            </a>     
                              
        </div>
        <!-- <i class="bi bi-list mobile-nav-toggle"></i> -->
      </nav>
    </div>
  </header>
  <!-- End Header -->

  <main id="main">
    <section id="buy-tickets" class="section-with-bg"> </section>
    <section id="buy-tickets" class="section-with-bg"> </section>


    <section id="buy-tickets" class="section-with-bg">
        <div class="container" data-aos="fade-up">

          <div class="section-header">
            <h2>Buy Tickets</h2>
            <p>Velit consequatur consequatur inventore iste fugit unde omnis eum aut.</p>
          </div>

          <div class="row">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="card mb-5 mb-lg-0">
                <div class="card-body">
                  <h5 class="card-title text-muted text-uppercase text-center">Standard Access</h5>
                  <h6 class="card-price text-center">$150</h6>
                  <hr>
                  <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                    <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Community Access</li>
                    <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Workshop Access</li>
                    <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>After Party</li>
                  </ul>
                  <hr>
                  <div class="text-center">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#buy-ticket-modal" data-ticket-type="standard-access">Buy Now</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
              <div class="card mb-5 mb-lg-0">
                <div class="card-body">
                  <h5 class="card-title text-muted text-uppercase text-center">Pro Access</h5>
                  <h6 class="card-price text-center">$250</h6>
                  <hr>
                  <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>
                    <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Workshop Access</li>
                    <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>After Party</li>
                  </ul>
                  <hr>
                  <div class="text-center">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#buy-ticket-modal" data-ticket-type="pro-access">Buy Now</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Pro Tier -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title text-muted text-uppercase text-center">Premium Access</h5>
                  <h6 class="card-price text-center">$350</h6>
                  <hr>
                  <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Workshop Access</li>
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>After Party</li>
                  </ul>
                  <hr>
                  <div class="text-center">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#buy-ticket-modal" data-ticket-type="premium-access">Buy Now</button>
                  </div>

                </div>
              </div>
            </div>
          </div>

        </div>

        <!-- Modal Order Form -->
        <div id="buy-ticket-modal" class="modal fade">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Buy Tickets</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form method="POST" action="#">
                  <div class="form-group">
                    <input type="text" class="form-control" name="your-name" placeholder="Your Name">
                  </div>
                  <div class="form-group mt-3">
                    <input type="text" class="form-control" name="your-email" placeholder="Your Email">
                  </div>
                  <div class="form-group mt-3">
                    <select id="ticket-type" name="ticket-type" class="form-select">
                      <option value="">-- Select Your Ticket Type --</option>
                      <option value="standard-access">Standard Access</option>
                      <option value="pro-access">Pro Access</option>
                      <option value="premium-access">Premium Access</option>
                    </select>
                  </div>
                  <div class="text-center mt-3">
                    <button type="submit" class="btn">Buy Now</button>
                  </div>
                </form>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

      </section><!-- End Buy Ticket Section -->


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