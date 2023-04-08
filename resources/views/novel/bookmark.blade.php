@extends('layout.navbar.index')
@section('css')
<link rel="stylesheet" href="{{ asset('css/bootstrap/cover-home.css') }}">
@section('konten')

<h2 class="mb-3">Bookmark</h2>

<div class="row d-flex align-items-stretch" id="bookmark"></div>

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
          template += `<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 d-flex align-items-stretch">
              <div class="card" style="width: 100%">
                  <img src="img/novel/${e[2]}" class="thumb" alt="...">
                  <div class="card-body  d-flex flex-column">
                      <a href="/novel/${e[1]}">
                          <p style="color: #012970; font-size: 14px;" class="fw-semibold mt-3">${e[0].substring(0, 25)}${e[0].length >= 25 ? '...' : ''}</p>
                      </a>
                        <div class="mt-auto">
                          <button type="button" class="btn btn-sm btn-outline-primary delete" value="${e[1]}">Hapus</button>
                      </div>
                  </div>
              </div>
          </div>`;
      })
  } else {
    document.querySelector('#empty').innerHTML = 'Tidak ada komik yang di simpan di dalam bookmark'
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