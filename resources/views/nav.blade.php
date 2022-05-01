@extends('views.iPM-profile')
@section('content')

<nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
          <li class="nav-item dropdown pe-3">
            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
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

                    <!-- <li>
                        <a class="dropdown-item d-flex justify-content-center" href="users-profile.html">
                        <i class="bi bi-gear"></i>
                        <span>Account Settings</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li> -->

              <li>
                  <a class="dropdown-item d-flex justify-content-center" href="pages-faq.html">
                  <i class="bi bi-question-circle"></i>
                  <span>Need Help?</span>
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
      </nav><!-- End Icons Navigation -->

@endsection