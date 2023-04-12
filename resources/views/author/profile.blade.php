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

<div class="row px-2 mt-4">
    <div class="col-lg-2 col-4">
        @if($author->image)
        <img src="{{ asset('img/profile/' . $author->image) }}" width="100%" class="rounded-circle border">
        @else
        <img src="{{ asset('img/profile/default.webp') }}" width="100%" class="rounded-circle border">
        @endif
    </div>
    <div class="col-lg-10 col-8 py-2 ps-4">
        <h3 class="fw-bold">{{ $author->username }}</h3>
        <div class="row">
          <div class="col-lg-2 col-5">
            <span>{{ $author->novels->count() }} Novels</span>
          </div>
          <div class="col-lg-3 col-7">
            <span class="">{{ $author->followers->count() }} Followers</span>
          </div>
        </div>
        @if(!auth()->guest())
          @if($author->username != auth()->user()->username)
            @if($follow->count() == 0)
              <form action="/author/{{ $author->username }}" method="post" class="mt-2">
                @csrf
                <button type="submit" class="btn btn-primary btn-sm">Follow</button>
              </form>
            @else
              <form action="/author/{{ $author->username }}" method="post" class="mt-2">
                @csrf
                @method('delete')
                <input type="hidden" name="id" value="{{ $follow[0]->id }}">
                <button type="submit" class="btn btn-primary btn-sm">Followed</button>
              </form>
            @endif
          @endif
        @endif
    </div>
</div>

<h3 class="mb-3 mt-4">Latest Novels</h3>
@if($author->novels->count())
<div class="row d-flex align-items-stretch px-2">
  @foreach($author->novels as $novel)
  <div class="col-xl-2 col-lg-2 col-md-3 col-4 px-2 mb-4">
      <img src="{{ asset('img/novel/' . $novel->cover) }}" class="thumb d-block">
      <a href="/novel/{{ $novel->slug }}" class="text-decoration-none text-dark">
        <p style="font-size: 13px;" class="fw-semibold mt-2 mb-2 title-novel">{{ $novel->title }}</p>
      </a>
        <small style="font-size: 12px;">{{ $novel->created_at->diffForHumans() }}</small>
  </div>
  @endforeach
</div>
@else
<p class="text-center mt-5">No Novels.</p>
@endif

<div class="mb-5 pb-4">
  {{-- {{ $novels->links('pagination.niceadmin') }} --}}
</div>

@endsection