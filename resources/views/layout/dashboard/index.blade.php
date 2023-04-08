<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/soft-ui/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('img/soft-ui/favicon.png') }}">
  <title>
    @if(Request::is('dashboard/novel*')) 
      Novel 
    @elseif(Request::is('dashboard/genre*'))
      Genre
    @elseif(Request::is('dashboard/user*'))
      User
    @endif
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('css/soft-ui/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/soft-ui/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{ asset('css/soft-ui/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('css/soft-ui/soft-ui-dashboard.css?v=1.0.7') }}" rel="stylesheet" />
  @yield('css')
</head>

<body class="g-sidenav-show  bg-gray-100">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0">
        <img src="{{ asset('img/soft-ui/logo-ct-dark.png') }}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Deltanovel</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link @if(Request::is('dashboard/novel*')) active @endif" href="/dashboard/novel">
            <div class="@if(Request::is('dashboard/novel*')) icon @endif icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-book-bookmark"></i>
            </div>
            <span class="nav-link-text ms-1">Novel</span>
          </a>
        </li>
        @if(auth()->user()->role == 'admin')
        <li class="nav-item">
          <a class="nav-link @if(Request::is('dashboard/genre*')) active @endif" href="/dashboard/genre">
            <div class="@if(Request::is('dashboard/genre*')) icon @endif icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-bullet-list-67"></i>
            </div>
            <span class="nav-link-text ms-1">Genre</span>
          </a>
        </li>
        @endif
        {{-- <li class="nav-item">
          <a class="nav-link  " href="../pages/profile.html">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(1.000000, 0.000000)">
                        <path class="color-background opacity-6" d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"></path>
                        <path class="color-background" d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"></path>
                        <path class="color-background" d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li> --}}
        {{-- <li class="nav-item">
          <a class="nav-link " href="../pages/tables.html">
            <div class="icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-email-83"></i>
            </div>
            <span class="nav-link-text ms-1">Chat</span>
          </a>
        </li> --}}
        <li class="nav-item">
          <button class="dropdown-item nav-link">
            <div class="icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-button-power"></i>
            </div>
            <span class="nav-link-text ms-1">Logout</span>
          </button>
        </li>
      </ul>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
@yield('isi')
</main>
  
<!--   Core JS Files   -->
<script src="{{ asset('js/soft-ui/core/popper.min.js') }}"></script>
<script src="{{ asset('js/soft-ui/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/soft-ui/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('js/soft-ui/plugins/smooth-scrollbar.min.js') }}"></script>
<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('js/soft-ui/soft-ui-dashboard.min.js?v=1.0.7') }}"></script>
@yield('js')
</body>

</html>