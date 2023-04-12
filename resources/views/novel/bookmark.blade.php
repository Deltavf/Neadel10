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

<h3 class="mb-3">Bookmark</h3>

<div class="row d-flex align-items-stretch px-2" id="bookmark"></div>

<p class="text-center mt-5" id="empty"></p>

<script>
  let mangaInBookmark =[]
  let main = document.querySelector('#bookmark')
  for(i = 0; i < localStorage.length; i++) {
    p = localStorage.key(i)
    if(p.startsWith('bookmark-')) { 
      mangaInBookmark[i] = JSON.parse(localStorage.getItem(p))   
    }
  }
  
  let template = ''
  if(mangaInBookmark.length >= 1 ) {
      mangaInBookmark.forEach(e => {
          template += `<div class="col-xl-2 col-lg-2 col-md-3 col-4 px-2 mb-4">
                          <img src="img/novel/${e[2]}" class="thumb d-block">
                          <a href="/novel/${e[1]}" class="text-decoration-none text-dark">
                            <p style="font-size: 13px;" class="fw-semibold mt-2 mb-2 title-novel">${e[0]}</p>
                          </a>
                            <div class="mt-auto">
                          </a>
                          <button type="button" class="btn btn-sm btn-outline-primary delete" value="${e[1]}">Delete</button>
                        </div>
                      </div>`;
      })
  } else {
    document.querySelector('#empty').innerHTML = 'No novels in bookmark.'
  }
  main.innerHTML = template
  main.addEventListener('click', function(e) {
    if(e.target.classList.contains('delete')) {
      localStorage.removeItem('bookmark-'+ e.target.value)
      e.target.parentElement.parentElement.parentElement.style.display = 'none';
    }
  })
</script>

@endsection