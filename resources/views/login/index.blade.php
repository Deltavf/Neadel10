<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/soft-ui/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('img/soft-ui/favicon.png') }}">
  <title>Login</title>
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
</head>

<body class="">
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient">Welcome</h3>
                  <p class="mb-0">Enter your username and password to login</p>
                </div>
                <div class="card-body">
                  <form action="/login" method="post" role="form">
                    @csrf
                    <label for="username">Username</label>
                    <div class="mb-3">
                      <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}" placeholder="Username">
                      @error('username')<small class="text-danger">{{ $message }}</small>@enderror
                    </div>
                    <label for="password">Password</label>
                    <div class="mb-3">
                      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                      @error('password')<small class="text-danger">{{ $message }}</small>@enderror
                      @if(session()->has('status'))
                        <small class="text-danger">Username atau password anda salah.</small>
                      @endif
                    </div>
                    {{-- <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                      <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div> --}}
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Login</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                    Don't have an account?
                    <a href="/register" class="text-info text-gradient font-weight-bold">Register</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('{{ asset('img/soft-ui/curved-images/curved6.jpg')}}"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
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
</body>

</html>