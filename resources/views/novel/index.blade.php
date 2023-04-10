@extends('layout.navbar.index')
@section('css')
<link rel="stylesheet" href="{{ asset('css/bootstrap/cover-home.css') }}">
<style>
  .title-novel {
    overflow: hidden;
   display: -webkit-box;
   -webkit-line-clamp: 2; 
           line-clamp: 2; 
   -webkit-box-orient: vertical;
  }
</style>
@section('konten')

<h3 class="mb-3">Novel Updates @if(isset($nama)) {{ $nama }} @endif</h3>
@if($novels->count())
<div class="row d-flex align-items-stretch px-2">
  @foreach($novels as $novel)
  <div class="col-xl-2 col-lg-2 col-md-3 col-4 px-2 mb-4">
      <img src="{{ asset('img/novel/' . $novel->cover) }}" class="thumb d-block" alt="...">
      <a href="/novel/{{ $novel->slug }}">
        <p style="color: #012970; font-size: 13px;" class="fw-semibold mt-2 mb-2 title-novel">{{ $novel->title }}</p>
      </a>
        <small style="font-size: 12px;">{{ $novel->created_at->diffForHumans() }}</small>
  </div>
  @endforeach
</div>
@else
<p class="text-center mt-5">No Novels</p>
@endif

<div class="mb-5 pb-4">
  {{ $novels->links('pagination.niceadmin') }}
</div>

@endsection