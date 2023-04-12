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
  <nav class="navbar navbar-expand-lg bg-primary navbar-dark ">
    <div class="container">
      <a class="navbar-brand">Neadel</a>
      <div class="d-md-none">
        <a data-bs-toggle="dropdown">
          <i class="bi bi-search" style="color: white;"></i>
        </a>
        <ul class="dropdown-menu pt-3" style="width: 100%;">
          <li class="container">
            <form @if(!Request::is('author*')) action="/" @else action="/author" @endif name="search" class="px-3">
              <div class="input-group">
                <input type="text" class="form-control py-1" placeholder="Search @if(!Request::is('author*')) Novel @else Author @endif" name="search"
                  value="{{ request('search') }}">
                <button class="btn btn-primary" type="submit">
                  <i class="bi bi-search"></i>
                </button>
              </div>
            </form>
          </li>
        </ul>
      </div>
      <div class="d-none d-md-block">
        <form @if(!Request::is('author*')) action="/" @else action="/author" @endif class="m-0 p-0">
          <div class="input-group">
            <input type="text" class="form-control py-1" placeholder="Search @if(!Request::is('author*')) Novel @else Author @endif" name="search"
              value="{{ request('search') }}">
            <button class="btn btn-primary" type="submit">
              <i class="bi bi-search"></i>
            </button>
          </div>
        </form>
      </div>
    </div>
  </nav>

  <div class="container mt-4">
    @yield('konten')
  </div>

  <nav class="navbar navbar-expand-lg fixed-bottom px-0 py-1"
    style="background-color: #ffffff; box-shadow: 0 -2px 3px 0 rgba(0,0,0,0.1);">
    <div class="container">
      <div class="col-3">
        <a href="/" class="text-dark">
          <center>
            @if(Request::is('/') || Request::is('novel*'))
            <i class="ri ri-home-6-fill" style="font-size: 1.3rem; color: #38A7FF"></i>
            <span class="d-block" style="font-size: 13px; color: #38A7FF;">HOME</span>
            @else
            <i class="ri ri-home-6-line" style="font-size: 1.3rem; color: #black"></i>
            <span class="d-block" style="font-size: 13px; color: #black;">HOME</span>
            @endif
          </center>
        </a>
      </div>
      <div class="col-3">
        <a href="/bookmark" class="text-dark">
          <center>
            @if(Request::is('bookmark'))
            <i class="ri  ri-bookmark-2-fill" style="font-size: 1.3rem; color: #38A7FF"></i>
            <span class="d-block" style="font-size: 13px; color: #38A7FF;">BOOKMARK</span>
            @else
            <i class="ri  ri-bookmark-2-line" style="font-size: 1.3rem; color: #black"></i>
            <span class="d-block" style="font-size: 13px; color: #black;">BOOKMARK</span>
            @endif
          </center>
        </a>
      </div>
      <div class="col-3">
        <a href="/author" class="text-dark">
          <center>
            @if(Request::is('author*'))
            <i class="ri ri-user-3-fill" style="font-size: 1.3rem; color: #38A7FF"></i>
            <span class="d-block" style="font-size: 13px; color: #38A7FF;">AUTHOR</span>
            @else
            <i class="ri ri-user-3-line" style="font-size: 1.3rem; color: #black"></i>
            <span class="d-block" style="font-size: 13px; color: #black;">AUTHOR</span>
            @endif
          </center>
        </a>
      </div>
      <div class="col-3">
        @if(auth()->guest())
        <a href="/login" class="text-dark">
          <center>
            <i class="ri   ri-account-circle-line" style="font-size: 1.3rem; color: #black"></i>
            <span class="d-block" style="font-size: 13px; color: #black;">LOGIN</span>
          </center>
        </a>
        @else
        <a href="/dashboard/novel" class="text-dark">
          <center>
            <i class="ri   ri-account-circle-line" style="font-size: 1.3rem; color: #black"></i>
            <span class="d-block" style="font-size: 13px; color: #black;">{{ auth()->user()->username }}</span>
          </center>
        </a>
        @endif
      </div>
    </div>
  </nav>

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