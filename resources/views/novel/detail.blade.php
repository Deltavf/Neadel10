@extends('layout.navbar.index')
@section('css')
<link rel="stylesheet" href="{{ asset('css/bootstrap/cover-detail.css') }}">
@section('konten')
<div class="row">
  <div class="col-md-3 mb-4">
    <center>
      <img src="{{ asset('img/novel/' . $novel->cover) }}" class="thumb">
    </center>
  </div>
  <div class="col-md-9">
    <div class="card">
      <div class="card-body py-4 px-4">
        <h5 class="title-c">{{ $novel->title }}</h5>
        <table>
          <tr>
            <td>Like</td>
            <td><span class="mx-1">:</span></td>
            <td>{{ $novel->likes->count() }}</td>
          </tr>
          <tr>
            <td>Volume</td>
            <td><span class="mx-1">:</span></td>
            <td>{{ $volumes->count() }}</td>
          </tr>
          <tr>
            <td>Status</td>
            <td><span class="mx-1">:</span></td>
            <td>{{ $novel->status }}</td>
          </tr>
          <tr>
            <td>Author</td>
            <td><span class="mx-1">:</span></td>
            <td>{{ $novel->user->username }}</td>
          </tr>
          <tr>
            <td>Genre</td>
            <td><span class="mx-1">:</span></td>
            <td>{{ convertGenre($novel) }}</td>
          </tr>
          <tr>
            <td>Published</td>
            <td><span class="mx-1">:</span></td>
            <td>{{ \Carbon\Carbon::parse($novel->published_at)->isoFormat('D MMMM Y') }}</td>
          </tr>
        </table>
      </div>
    </div>
    <div class="card p-4">
      <h5 class="mb-3">Sinopsis</h5>
      <div class="mb-2">{!! $novel->synopsis !!}</div>
      <span>
        @if(!auth()->guest())
          @if($novel->user_id != auth()->user()->id)
            @if($novel->likes->where('id', auth()->user()->id)->first())
              <form action="/novel/{{ $novel->slug }}" method="post" class="d-inline">
                @csrf
                @method('delete')
                <input type="hidden" name="id" value="{{ $novel->id }}">
                <button class="btn btn-outline-primary btn-sm" type="submit">Liked</button>
              </form>
            @else
              <form action="/novel/{{ $novel->slug }}" method="post" class="d-inline">
                @csrf
                <input type="hidden" name="id" value="{{ $novel->id }}">
                <button class="btn btn-outline-primary btn-sm" type="submit">Like</button>
              </form>
            @endif
          @endif
        @endif
        <button class="btn btn-outline-success btn-sm" id="bookmark" value="21" type="button">Bookmark</button>
      </span>
    </div>
  </div>
</div>
<div class="row">
  <div class="col">
    <div class="card p-4">
      <h5 class="mb-3">Volume List</h5>
      @if($volumes->count())
      <ul class="list-group">
        @foreach($volumes as $volume)
        <a href="/novel/{{ $novel->slug . '/' . $volume->slug }}">
          <li class="list-group-item">
            <i class="bi bi-book me-2" ></i> {{ $volume->title }} 
          </li>
        </a>
        @endforeach
      </ul>
      @else
      <p>Author belum menambahkan volume untuk novel ini</p>
      @endif
    </div>
  </div>
</div>
<div class="row mb-5">
    <div class="col">
        <div class="card px-4 pt-5 pb-4">
            <div id="disqus_thread"></div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
  const nama = {!! json_encode($novel->title) !!}
  const slug = {!! json_encode($novel->slug) !!}
  const gambar = {!! json_encode($novel->cover) !!}
  const data = [nama, slug, gambar]
  const bookmark = document.getElementById('bookmark');
  if(localStorage.getItem('bookmark-' + slug)) {
      bookmark.innerHTML = 'Bookmarked';
  } 
  bookmark.addEventListener("click", function() {
      if(localStorage.getItem('bookmark-' + slug)) {
          bookmark.innerHTML = 'Bookmark';
          localStorage.removeItem('bookmark-' + slug)
      } else {
          bookmark.innerHTML = 'Bookmarked';
          localStorage.setItem('bookmark-' + slug , JSON.stringify(data))
      }
  })
</script>
<script>
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://neadel.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
@endsection