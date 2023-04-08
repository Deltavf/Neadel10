@extends('layout.dashboard.index')
@section('css')
<link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
<script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
<style>
  trix-toolbar [data-trix-button-group="file-tools"] {
    display: none;
  }
</style>
@endsection
@section('isi')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl mt-2" id="navbarBlur" navbar-scroll="true">
  <div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark">Dashboard</a></li>
        <li class="breadcrumb-item text-sm text-dark active">Volume</li>
      </ol>
    </nav>
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
      <ul class="navbar-nav  justify-content-end">
        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
          <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid py-4">
  <div class="row">
    <div class="col">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6 class="d-inline">Edit Volume</h6>
          <a href="../" class="ni ni-bold-left mt-2 float-end"></a>
        </div>
        <div class="card-body pb-2">
          <div class="row">
            <div class="col-md-7">
              <form action="/dashboard/novel/{{ $novel->slug }}/volume/{{ $volume->slug }}" method="post">
                @csrf
                @method('put')
                <input type="hidden" name="slug" value="{{ $volume->slug }}">
                <div class="form-group">
                  <label for="title" class="form-control-label">Title</label>
                  <input type="text" name="title" id="title" value="{{ old('title', $volume->title) }}"
                    class="form-control" placeholder="Volume title" required>
                  @error('title')<small class="text-danger">{{ $message }}</small>@enderror
                </div>
                <div class="form-group">
                  <label for="story" class="form-control-label">Story</label>
                  <input id="story" type="hidden" name="story" value="{{  old('story', $volume->story)  }}">
                  <trix-editor input="story"></trix-editor>
                  @error('story')<small class="text-danger">{{ $message }}</small>@enderror
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-sm">Edit</button>
                  <button type="reset" class="btn btn-secondary btn-sm">Reset</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('js')
<script>
  document.addEventListener('trix-file-accept', function(e) {
        e,preventDefault()
    })
</script>
@endsection