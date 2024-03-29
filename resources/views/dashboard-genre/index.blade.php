@extends('layout.dashboard.index')
@section('isi')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
  <div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark">Dashboard</a></li>
        <li class="breadcrumb-item text-sm text-dark active">Genre</li>
      </ol>
    </nav>
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
      <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        <form action="/dashboard/genre">
          <div class="input-group">
            <button type="submit" class="input-group-text text-body">
              <i class="fas fa-search" aria-hidden="true"></i>
            </button>
            <input type="text" class="form-control ps-2" placeholder="Search genre" name="search"
              value="{{ request('search') }}">
          </div>
        </form>
      </div>
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
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6 class="d-inline">Genre | </h6><a href="/dashboard/genre/create" class="text-sm text-dark">Create Genre</a>
          <div style="float: right;">
            <i class="ni ni-bullet-list-67 mt-2" id="filterButton" data-bs-toggle="dropdown" aria-expanded="false"></i>
          </div>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            @if($genres->count())
            <table class="table align-items-center justify-content-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Name</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Date</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($genres as $genre)
                <tr>
                  <td>
                    <h6 class="ms-3 text-sm">{{ $loop->iteration }}</h6>
                  </td>
                  <td>
                    <p class="text-sm font-weight-bold mb-0">{{ $genre->name }}</p>
                  </td>
                  <td>
                    <p class="text-sm font-weight-bold mb-0">{{ $genre->created_at->diffForHumans() }}</p>
                  </td>
                  <td class="align-middle">
                    <button class="btn btn-link text-secondary mb-0" id="dropdownMenuButton" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      <i class="fa fa-ellipsis-v text-xs"></i>
                    </button>
                    <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4"
                      aria-labelledby="dropdownMenuButton">
                      <li>
                        <a class="dropdown-item border-radius-md"
                          href="/dashboard/genre/{{ $genre->slug }}/edit">Edit</a>
                      </li>
                      <li>
                        <form action="/dashboard/genre/{{ $genre->slug }}" method="post">
                          @csrf
                          @method('delete')
                          <button type="submit" class="dropdown-item border-radius-md">Delete</button>
                        </form>
                      </li>
                    </ul>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            @else
            <p class="text-center mt-4">No Genres.</p>
            @endif
          </div>
          <div class="float-end me-4 mt-2">
            {{ $genres->links('pagination.soft-ui') }}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection