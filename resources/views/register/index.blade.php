<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/soft-ui/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('img/soft-ui/favicon.png') }}">
  <title>Register</title>
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
<body>
  <main class="main-content  mt-0">
    <section class="mb-0" style="min-height: 95vh;">
      <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('{{ asset('img/soft-ui/curved-images/curved14.jpg') }}');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5 text-center mx-auto">
              <h1 class="text-white mb-2 mt-5">Welcome!</h1>
              <p class="text-lead text-white">Use these forms to create new account.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row mt-lg-n10 mt-md-n11 mt-n10">
          <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
            <div class="card z-index-0">
              <div class="card-header text-center pt-4 pb-0">
                <h5>Register</h5>
              </div>
              <div class="card-body">
                <form action="/register" method="post" role="form text-left">
                  @csrf
                  <div class="mb-3">
                    <input type="text" class="form-control" name="username" placeholder="Username" value="{{ old('username') }}" required>
                    @error('username') <small class="text-danger">{{ $message }}</small> @enderror
                  </div>
                  <div class="mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required>
                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                  </div>
                  <div class="mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Register</button>
                  </div>
                  <p class="text-sm mt-3 mb-0">Already have an account? <a href="/login" class="text-dark font-weight-bolder">Login</a></p>
                </form>
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