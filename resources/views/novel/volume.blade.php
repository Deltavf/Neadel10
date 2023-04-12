@extends('layout.navbar.index')
@section('css')
<style>
    img {
        width: 100%;
        height: auto;
    }
</style>
@endsection
@section('konten')
<div class="row">
  <div class="col-xl-10 mx-auto">
    <h4 class="mb-4">{{ $novel->title . ' ' . $volume->title }}</h4>
    <div class="card">
      <div class="card-body py-3">{!! $volume->story !!}</div>
    </div>
    <div class="card py-2 mt-3">
      <div class="row text-center">
        <div class="col-4">
          @if($previous !== null)
          <a href="/novel/{{ $novel->slug }}/{{ $previous->slug }}" style="color: black;">Previous</a>
          @endif
        </div>
        <div class="col-4">
          <a href="." style="color: black;">Back</a>
        </div>
        <div class="col-4">
          @if($next !== null)
          <a href="/novel/{{ $novel->slug }}/{{ $next->slug }}" style="color: black;">Next</a>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row mb-5">
    <div class="col-xl-10 mx-auto">
        <div class="card px-4 pt-5 pb-4">
            <div id="disqus_thread"></div>
        </div>
    </div>
</div>
@endsection
@section('js')
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