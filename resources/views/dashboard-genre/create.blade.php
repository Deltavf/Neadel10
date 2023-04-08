@extends('layout.dashboard.index')
@section('isi')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl mt-2" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
          <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Dashboard</a></li>
          <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Genre</li>
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
                    <h6 class="d-inline">Tambah data</h6>
                </div>
                <div class="card-body pb-2">
                    <div class="row">
                        <div class="col-md-7">
                            <form action="/dashboard/genre" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="form-control-label">Name</label>
                                    <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control" placeholder="Genre Name" required>
                                    @error('name')<small class="text-danger">{{ $message }}</small>@enderror
                                    @if(session()->has('status'))<small class="text-danger">{{ session('status') }}</small>@endif
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
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