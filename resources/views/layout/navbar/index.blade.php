<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>
    @if(Request::is('/'))
    Home
    @elseif(Request::is('novel*'))
    {{ $novel->judul }}
    @elseif(Request::is('bookmark*'))
    Bookmark
    @endif
  </title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="{{ asset('img/favicon.png') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap/simple-datatables/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap/style.css') }}" rel="stylesheet">
  @yield('css')
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
    <div class="container">
      <a class="navbar-brand">Neadel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link @if(Request::is('/') || Request::is('novel*')) active @endif" aria-current="page"
              href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(Request::is('/bookmark') || Request::is('bookmark*')) active @endif" aria-current="page"
              href="/bookmark">Bookmark</a>
          </li>
        </ul>
      </div>
      <nav class="header-nav ms-auto">
        <ul class="navbar-nav">
          <li class="nav-item">
            @if(auth()->guest())
            <a class="nav-link active" href="/login">Login</a>
            @else
            <a class="nav-link active" href="/dashboard/novel">{{ auth()->user()->username }}</a>
            @endif
          </li>
        </ul>
      </nav>
    </div>
  </nav>

  <div class="container mt-4">
    @yield('konten')
  </div>
  <!-- End #main -->

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/bootstrap/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/quill/quill.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/php-email-form/validate.js') }}"></script>
  <!-- Template Main JS File -->
  <script src="{{ asset('js/bootstrap/main.js') }}"></script>
  @yield('js')
</body>

</html>