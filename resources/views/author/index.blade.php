@extends('layout.navbar.index')
@section('konten')

<h3 class="mb-3">Latest Author</h3>
@if($authors->count())
<div class="row d-flex align-items-stretch px-2">
  @foreach($authors as $author)
  <div class="col-xl-2 col-lg-2 col-md-3 col-4 px-2 mb-4">
      <div class="row">
        <div class="col-6">
          @if($author->image)
          <img src="{{ asset('img/profile/' . $author->image) }}" width="100%" class="rounded-circle border">
          @else
          <img src="{{ asset('img/profile/default.webp') }}" width="100%" class="rounded-circle border">
          @endif
        </div>
        <div class="col-6 py-2 d-flex align-items-center flex-wrap p-0">
          <a class="fw-bold fs-6 m-0 text-dark" href="/author/{{ $author->username }}">{{ $author->username }}</a>
        </div>
      </div>
  </div>
  @endforeach
</div>
@else
<p class="text-center mt-5">No Authors.</p>
@endif

<div class="mb-5 pb-4">
  {{ $authors->links('pagination.niceadmin') }}
</div>

@endsection