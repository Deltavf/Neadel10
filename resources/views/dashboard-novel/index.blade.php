@extends('layout.dashboard.index')
@section('isi')
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6 class="d-inline">Novel | </h6><a href="/dashboard/novel/create" class="text-sm text-dark">Tambah data</a>
          <div style="float: right;">
            <i class="ni ni-bullet-list-67 mt-2" id="filterButton" data-bs-toggle="dropdown" aria-expanded="false"></i>
            {{-- <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="filterButton">
              <li>
                <a class="dropdown-item border-radius-md" href="">Urutkan novel terbaru</a>
              </li>
              <li>
                <a class="dropdown-item border-radius-md" href="">Urutkan novel Terlama</a>
              </li>
            </ul> --}}
          </div>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center justify-content-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Cover</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Judul</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Volume</th>
                  @if(auth()->user()->role == 'admin')
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Author</th>
                  @endif
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($novels as $novel)
                  <tr>
                    <td>
                      <h6 class="ms-3 text-sm">{{ $loop->iteration }}</h6>  
                    </td>
                    <td>
                      <img src="{{ asset('img/novel/' . $novel->cover) }}" width="90vw">
                    </td>
                    <td>
                        <p class="text-sm font-weight-bold mb-0" >{{ $novel->judul }}</p>
                    </td>
                    <td>
                      <span class="text-xs font-weight-bold">{{ $novel->volumes_count }}</span>
                    </td>
                    @if(auth()->user()->role == 'admin')
                    <td>
                      <span class="text-xs font-weight-bold">{{ $novel->username }}</span>
                    </td>
                    @endif
                    <td class="align-middle">
                      <button class="btn btn-link text-secondary mb-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-ellipsis-v text-xs"></i>
                      </button>
                      <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                        <li>
                          <a class="dropdown-item border-radius-md" href="/dashboard/novel/{{ $novel->slug }}/volume">Add Volume</a>
                        </li>
                        <li>
                          <a class="dropdown-item border-radius-md" href="/novel/{{ $novel->slug }}">Detail</a>
                        </li>
                        <li>
                          <a class="dropdown-item border-radius-md" href="/dashboard/novel/{{ $novel->slug }}/edit">Edit</a>
                        </li>
                        <li>
                          <form action="/dashboard/novel/{{ $novel->slug }}" method="post">
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
          </div>
          <div style="float: right; margin-right: 20px; margin-top: 10px;">
            {{ $novels->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection