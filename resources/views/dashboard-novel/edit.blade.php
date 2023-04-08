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
          <li class="breadcrumb-item text-sm text-dark active">Novel</li>
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
                    <h6 class="d-inline">Edit Novel</h6>
                </div>
                <div class="card-body pb-2">
                    <div class="row">
                        <div class="col-md-7">
                            <form action="/dashboard/novel/{{ $novel->slug }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <input type="hidden" name="slug" value="{{ $novel->slug }}">
                                <div class="form-group">
                                    <label for="judul" class="form-control-label">Title</label>
                                    <input type="text" name="judul" id="judul" value="{{ old('judul', $novel->judul) }}" class="form-control" placeholder="Novel title" required>
                                    @error('judul')<small class="text-danger">{{ $message }}</small>@enderror
                                </div>
                                <div class="form-group">
                                    <label for="status" class="form-control-label">Status</label>
                                    <select name="status" id="status" class="form-control" required>
                                        <option value="" disabled selected>Select a status</option>
                                        <option value="Ongoing" @if(old('status', $novel->status) == 'Ongoing') selected @endif>Ongoing</option>
                                        <option value="End" @if(old('status', $novel->status) == 'End') selected @endif>End</option>
                                    </select>
                                    @error('status')<small class="text-danger">{{ $message }}</small>@enderror
                                </div>
                                <div class="form-group">
                                    <label for="genre" class="form-control-label">Genre</label>
                                    <div class="form-check ms-1">
                                        <div class="row" required>
                                            @foreach($genres as $genre)
                                            <div class="col-md-3 col-6">
                                                <input class="form-check-input" type="checkbox" value="{{ $genre->id }}" id="{{ $genre->id }}" name="genre[]" @if(old('genre') ) @foreach(old('genre') as $oldGenre)  @if($oldGenre == $genre->id) checked @endif @endforeach @elseif($novel->genres) @foreach($novel->genres as $oldGenre) @if($oldGenre->id == $genre->id) checked @endif @endforeach @endif>
                                                <label class="custom-control-label" for="{{ $genre->id }}">{{ $genre->name }}</label>
                                            </div>  
                                            @endforeach
                                        </div>
                                    </div>
                                    @error('genre')<small class="text-danger">{{ $message }}</small>@enderror
                                </div>
                                <div class="form-group">
                                    <label for="cover" class="form-control-label">Cover</label>
                                    <img src="{{ asset('img/novel/' . $novel->cover) }}" alt="{{ $novel->judul }}" class="d-block mb-2" width="150px" style="object-fit: cover; aspect-ratio: 3 / 4;">
                                    <input type="file" name="cover" id="cover" class="form-control">
                                    @error('cover')<small class="text-danger">{{ $message }}</small>@enderror
                                    @if(session()->has('status'))<small class="text-danger">{{ session('status') }}</small>@endif
                                </div>
                                <div class="form-group">
                                    <label for="sinopsis" class="form-control-label">Synopsis</label>
                                    <input id="sinopsis" type="hidden" name="sinopsis" value="{{  old('sinopsis', $novel->sinopsis)  }}">
                                    <trix-editor input="sinopsis"></trix-editor>
                                    @error('sinopsis')<small class="text-danger">{{ $message }}</small>@enderror
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