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
                  <a class="dropdown-item d-flex justify-content-center" href="users-profile.html">
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
      <!-- End Icons Navigation -->
    </div>
  </header>
  <!-- End Header -->

  <main id="main-profile" class="main">
    <div class="section-header">
      <h2>Tu Perfil</h2>
    </div>
    <div class="pagetitle">
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/play">Inicio</a></li>
          <li class="breadcrumb-item">Usuario</li>
          <li class="breadcrumb-item active">Perfil</li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card" style="background: #7FB5FF;">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="{{Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" class="rounded-circle">
              <h2>{{ Auth::user()->name }}</h2>
              <h3>Estudiante</h3>

              <div>
                <img src="{{ asset('img/iPM/img/logo_white_large.png') }}" alt="" style="width: 250px;">
              </div>
              <!-- <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div> -->
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Vista General</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Editar Perfil</button>
                </li>

                <!-- <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Cambiar Contraseña</button>
                </li> -->

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <!-- <h5 class="card-title">About</h5>
                  <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p> -->

                  <h5 class="card-title">Detalles del Perfil</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label "> Nombre</div>
                    <div class="col-lg-9 col-md-8">{{ Auth::user()->name }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Edad</div>
                    <div class="col-lg-9 col-md-8">{{ Auth::user()->age }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8">{{ Auth::user()->email }}</div>
                  </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form action="{{ route('user.update', $User) }}" method="POST">
                    
                    @csrf
                    @method('put')
                    <!-- <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Foto de Perfil</label>
                      <div class="col-md-8 col-lg-3"> -->
                      @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <!-- <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4"> -->
                            <!-- Profile Photo File Input
                            <input type="hidden"
                                        wire:model="image"
                                        x-ref="image"
                                        x-on:change="
                                                photoName = $refs.photo.files[0].name;
                                                const reader = new FileReader();
                                                reader.onload = (e) => {
                                                    photoPreview = e.target.result;
                                                };
                                                reader.readAsDataURL($refs.photo.files[0]);
                                        " />-->


                            <!-- Current Profile Photo -->
                            <!-- <div class="mt-2" x-show="! photoPreview">
                                @if (Auth::user()->profile_photo_path)
                                    <img  src="/storage/{{Auth::user()->profile_photo_path }}" alt="{{ Auth::user()->name }}" class="rounded-circle"/>
                                @else
                                    <img src="{{Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" class="rounded-circle"/> 
                                @endif
                            </div> -->

                            <!-- New Profile Photo Preview -->
                            <!-- <div class="mt-2" x-show="photoPreview">
                                <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                                      x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                                </span>
                            </div> -->
<!-- 
                            <x-jet-secondary-button class="mt-2 mr-2" type="file" x-on:click.prevent="$refs.photo.click()">
                                {{ __('Select A New Photo') }}
                            </x-jet-secondary-button> -->

                            <!-- @if ($User->profile_photo_path)
                                <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                                    {{ __('Remove Photo') }}
                                </x-jet-secondary-button>
                            @endif -->

                            <!-- <x-jet-input-error for="photo" class="mt-2" />
                        </div> -->
                      @endif

                      <!-- </div> -->
                      <!-- <div class="col-lg-3"> -->
                        <!-- <label for="">Imagen</label> -->
                        <!-- <input type="file" name="image" id="image" > -->
                        <!-- <button type="file" name="image">Imagen</button> -->
                        <!-- <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a> -->
                        <!-- <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a> -->
                      <!-- </div>
                    </div> -->

                    <div class="row mb-3">
                      <label for="name" class="col-md-4 col-lg-3 col-form-label"> Nombre</label>
                      <div class="col-md-8 col-lg-3">
                        <input name="name" type="text" class="form-control" id="name" value="{{ $User->name }}">
                      </div>

                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Edad</label>
                      <div class="col-md-8 col-lg-3">
                        <input name="age" type="number" class="form-control" id="age" value="{{ $User->age }}">
                      </div>
                    </div>


                    <div class="row mb-3">
                      <label for="Email" class="col-md-3 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-3 col-lg-3">
                        <input name="email" type="email" class="form-control" id="email" value="{{ $User->email }}">
                      </div>

                      <div class="col-md-6 col-lg-6 ">
                        <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#change-modal" >Guardar Cambios</button>
                      </div>

                      <!-- <div cñaseclass="text-center">
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                      </div> -->
                    </div>

                    <!-- <div class="text-center">
                      <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </div> -->
    
                  </form><!-- End Profile Edit Form -->

                  <div id="change-modal" class="modal fade" data-keyboard="false" data-backdrop="static">
                    <div class="modal-dialog modal-dialog-centered " role="document">
                      <div class="modal-content ">
                        <div class="modal-header">
                          <h4 class="modal-title">Se han modicado los cambios 👍</h4>
                          <button type="button" id="btn5close" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                              <i class="fa fa-circle-check"></i>
                            </div>
                            <div class="text-center mt-3">
                              <button type="submit" class="btn btn-success" data-bs-dismiss="modal" aria-label="Close">Aceptar</button>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

                <!-- <div class="tab-pane fade pt-3" id="profile-change-password">
                  <form action="{{ route('password.update', $User) }}" method="POST">
        
                    <div class="row mb-3">
                      <label for="current_password" class="col-md-4 col-lg-3 col-form-label">Contraseña Actual</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="current_password" type="password" class="form-control" id="current_password">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="password" class="col-md-4 col-lg-3 col-form-label">Nueva Constraseña</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="password">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="password_confirmation" class="col-md-4 col-lg-3 col-form-label">Confirmar Nueva Constraseña</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password_confirmation" type="password" class="form-control" id="password_confirmation">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Cambiar Contraseña</button>
                    </div>
                  </form>
                </div> -->

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>

      

    </section>

  </main><!-- End #main -->


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