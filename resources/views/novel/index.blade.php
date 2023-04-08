@extends('layout.navbar.index')
@section('css')
<link rel="stylesheet" href="{{ asset('css/bootstrap/cover-home.css') }}">
@section('konten')

<h2 class="mb-3">Novel Updates @if(isset($nama)) {{ $nama }} @endif</h2>
<div class="row">
  <div class="col-md-6">
    <form action="/" method="get">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search Novel" name="search"
          value="{{ request('search') }}">
        <button class="btn btn-primary" type="submit">
          <i class="bi bi-search"></i>
        </button>
      </div>
    </form>
  </div>
</div>
@if($novels->count())
<div class="row d-flex align-items-stretch">
  @foreach($novels as $novel)
  <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 d-flex align-items-stretch">
    <div class="card" style="width: 100%;">
      <img src="{{ asset('img/novel/' . $novel->cover) }}" class="thumb" alt="...">
      <div class="card-body d-flex flex-column pb-3">
        <a href="/novel/{{ $novel->slug }}">
          <p style="color: #012970; font-size: 13px;" class="fw-semibold mt-3">{{ strip_tags(Str::limit($novel->title,
            25)) }}</p>
        </a>
        <div class="mt-auto d-flex align-items-end justify-content-between">
          <small style="font-size: 12px;">{{ $novel->created_at->diffForHumans() }}</small>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>
@else
<p class="text-center mt-5">Novel tidak ada</p>
@endif

{{ $novels->links() }}

@endsection